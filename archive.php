<?php
get_header();
$pageName="common-archive"
?>

<section class="<?php echo $pageName;?>">
  <ul class="<?php echo $pageName;?>__list">
    <li class="<?php echo $pageName;?>__item <?php if ( is_category('blog')) { echo 'current'; } ?>"><a href="<?php echo home_url('/category/blog/');?>">ブログ</a></li>
    <li class="<?php echo $pageName;?>__item <?php if ( is_category('review')) { echo 'current'; } ?>"><a href="<?php echo home_url('/category/review/');?>">お客様の声</a></li>
    <li class="<?php echo $pageName;?>__item <?php if ( is_category('apartment-management')) { echo 'current'; } ?>"><a href="<?php echo home_url('/category/apartment-management/');?>">アパート経営</a></li>
    <li class="<?php echo $pageName;?>__item <?php if ( is_category('construction')) { echo 'current'; } ?>"><a href="<?php echo home_url('/category/construction/');?>">施　工</a></li>
    <li class="<?php echo $pageName;?>__item <?php if ( is_category('design-meeting')) { echo 'current'; } ?>"><a href="<?php echo home_url('/category/design-meeting/');?>">デザイン会議</a></li>
    <li class="<?php echo $pageName;?>__item <?php if ( is_archive() && !is_category(array('construction','apartment-management','review','design-meeting','blog'))) { echo 'current'; } ?>"><a href="<?php echo home_url('/news/');?>">全　て</a></li>
  </ul>
  <div class="<?php echo $pageName;?>__inner">
  <?php //先頭固定の記事を表示
  $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
  $post_ttl = 9; //★表示させたい記事の合計件数（固定記事＋通常記事）
  $post_cnt = $post_ttl; //表示させる記事数残り
  $sticky = get_option('sticky_posts'); //先頭固定の記事を取得
  if(!empty($sticky)){ //先頭固定記事がある場合に実行
    if(is_category('blog')){
      $args = array(
        'post_type'=> 'post', 
        'category_name' => 'blog', // カテゴリをスラッグで指定する場合
        'post__in' => $sticky,
        'posts_per_page' => $post_cnt,//最大投稿数を表示させたい記事数にする
        'ignore_sticky_posts' => 1,//これも合わせて指定しないと'posts_per_page'が効かない
        'paged' => $paged,
      );
    } elseif(is_category('review')){
      $args = array(
        'post_type'=> 'post', 
        'category_name' => 'review', // カテゴリをスラッグで指定する場合
        'post__in' => $sticky,
        'posts_per_page' => $post_cnt,//最大投稿数を表示させたい記事数にする
        'ignore_sticky_posts' => 1,//これも合わせて指定しないと'posts_per_page'が効かない
        'paged' => $paged,
      );
    } elseif(is_category('apartment-management')){
      $args = array(
        'post_type'=> 'post', 
        'category_name' => 'apartment-management', // カテゴリをスラッグで指定する場合
        'post__in' => $sticky,
        'posts_per_page' => $post_cnt,//最大投稿数を表示させたい記事数にする
        'ignore_sticky_posts' => 1,//これも合わせて指定しないと'posts_per_page'が効かない
        'paged' => $paged,
      );
    } elseif(is_category('construction')){
      $args = array(
        'post_type'=> 'post', 
        'category_name' => 'construction', // カテゴリをスラッグで指定する場合
        'post__in' => $sticky,
        'posts_per_page' => $post_cnt,//最大投稿数を表示させたい記事数にする
        'ignore_sticky_posts' => 1,//これも合わせて指定しないと'posts_per_page'が効かない
        'paged' => $paged,
      );
    } elseif(is_category('design-meeting')){
      $args = array(
        'post_type'=> 'post', 
        'category_name' => 'design-meeting', // カテゴリをスラッグで指定する場合
        'post__in' => $sticky,
        'posts_per_page' => $post_cnt,//最大投稿数を表示させたい記事数にする
        'ignore_sticky_posts' => 1,//これも合わせて指定しないと'posts_per_page'が効かない
        'paged' => $paged,
      );
    } else {
      $args = array(
        'post_type'=> 'post',
        'post__in' => $sticky,
        'posts_per_page' => $post_cnt,//最大投稿数を表示させたい記事数にする
        'ignore_sticky_posts' => 1,//これも合わせて指定しないと'posts_per_page'が効かない
        'paged' => $paged,
      );
    }
    $the_query = new WP_Query($args);
    while($the_query->have_posts()) : $the_query->the_post();
  ?>
  <?php get_template_part('content/loop/post');?>
    <?php    
    $count++;//出力記事数取得
    endwhile;
  $post_cnt -= $count; //先頭固定の記事がある場合は、その件数を「$post_cnt」の値から引く
  };

  //先頭固定以外の記事の表示
  if($post_cnt > 0) {//先頭固定以外の記事の表示
    if(is_category('blog')){
      $args = array(
        'post__not_in' => $sticky,
        'post_type'=> 'post' , 
        'category_name' => 'blog', // カテゴリをスラッグで指定する場合
        'posts_per_page' => $post_cnt,
        'ignore_sticky_posts' => 1,
        'paged' => $paged,
      );
    } elseif(is_category('review')){
      $args = array(
        'post__not_in' => $sticky,
        'post_type'=> 'post' , 
        'category_name' => 'review', // カテゴリをスラッグで指定する場合
        'posts_per_page' => $post_cnt,
        'ignore_sticky_posts' => 1,
        'paged' => $paged,
      );
    } elseif(is_category('apartment-management')){
      $args = array(
        'post__not_in' => $sticky,
        'post_type'=> 'post' , 
        'category_name' => 'apartment-management', // カテゴリをスラッグで指定する場合
        'posts_per_page' => $post_cnt,
        'ignore_sticky_posts' => 1,
        'paged' => $paged,
      );
    } elseif(is_category('construction')){
      $args = array(
        'post__not_in' => $sticky,
        'post_type'=> 'post' , 
        'category_name' => 'construction', // カテゴリをスラッグで指定する場合
        'posts_per_page' => $post_cnt,
        'ignore_sticky_posts' => 1,
        'paged' => $paged,
      );
    } elseif(is_category('design-meeting')){
      $args = array(
        'post__not_in' => $sticky,
        'post_type'=> 'post' , 
        'category_name' => 'design-meeting', // カテゴリをスラッグで指定する場合
        'posts_per_page' => $post_cnt,
        'ignore_sticky_posts' => 1,
        'paged' => $paged,
      );
    } else{
      $args = array(
        'post__not_in' => $sticky,
        'post_type'=> 'post' , 
        'posts_per_page' => $post_cnt,
        'ignore_sticky_posts' => 1,
        'paged' => $paged,
      );
    }
    $the_query = new WP_Query($args);
    while ($the_query->have_posts()) : $the_query->the_post(); 
  ?>
  <?php get_template_part('content/loop/post');?>
  <?php 
    endwhile;
  };
  wp_reset_postdata();
  ?>
  </div>

  <div class="<?php echo $pageName;?>__btn">
    <?php get_template_part('template-parts/common/infinite-scroll'); ?>
    <?php
    if (function_exists('wp_pagenavi')) {
      wp_pagenavi();
    } ?>
  </div>
</section>

<?php get_footer(); 