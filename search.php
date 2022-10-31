<?php
get_header();
$pageName="archive-gallery";
?>

<section class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__inner">

  <!-- 絞り込み検索 -->
    <?php get_template_part('/search-form'); ?>

    <div class="<?php echo $pageName;?>__group">
    <?php

      if( is_mobile() ){
        $num = 8;
      } else {
        $num = 9;
      }
      $prefecture_terms = $_GET['gallery_prefecture'];
      $interior_terms = $_GET['gallery_interior'];
      $preview_meta = $_GET['gallery_preview'];
      if($prefecture_terms) {
        // 絞り込み条件を追加
        $prefecture_taxonomy = array(
          'taxonomy' => 'prefecture',
          'terms' => $prefecture_terms, //取得したパラメーター（＝各タームのスラッグ）が入る
          'field' => 'slug',
          'operator' => 'AND', //タームの条件を指定（AND/IN/NOT IN）
        );
      }
      if($interior_terms) {
        // 絞り込み条件を追加
        $interior_taxonomy = array(
          'taxonomy' => 'interior',
          'terms' => $interior_terms, //取得したパラメーター（＝各タームのスラッグ）が入る
          'field' => 'slug',
          'operator' => 'AND', //タームの条件を指定（AND/IN/NOT IN）
        );
      }
      if($preview_meta) {
        // 絞り込み条件を追加
        $preview = array(
          'key'=>'内覧予約',
          'value'=>'1',
          'compare'=>'=',
          'operator' => 'AND', //タームの条件を指定（AND/IN/NOT IN）
        );
      }
      $args = array(
        'paged' => $paged,
        'post_type' => 'gallery',
        'posts_per_page' => $num,
        's' => get_search_query(),
        'tax_query' => array(
          'relation' => 'AND',
          $prefecture_taxonomy,
          $interior_taxonomy,
        ),
        'meta_query' => array(
          'relation' => 'AND',
          $preview,
        ),
      );
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()): while ($my_query->have_posts()) : $my_query->the_post();
      ?>
      <!-- ▽ ループ開始 ▽ -->
      <?php get_template_part('content/loop/gallery');?>
      <!-- △ ループ終了 △ -->
      <?php endwhile; ?>
    <?php else: // 投稿がない場合?>
      <p>まだ物件がありません。</p>
    <?php endif; wp_reset_postdata(); ?>
    </div>
    <div class="<?php echo $pageName;?>__nav">
      <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $my_query)); ?>
    </div>
  </div>
</section>

<?php get_footer();