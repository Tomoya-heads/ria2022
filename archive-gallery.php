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
      $selected_terms = $_GET['gallery_prefecture,gallery_interior'];
      if($selected_terms) {
        // 絞り込み条件を追加
        $taxquery_taxonomy = array(
          'taxonomy' => 'interior',
          'terms' => $selected_terms, //取得したパラメーター（＝各タームのスラッグ）が入る
          'field' => 'slug',
          'operator' => 'AND', //タームの条件を指定（AND/IN/NOT IN）
        );
      }
      $paged = get_query_var('paged')? get_query_var('paged') : 1;
      $args = array(
        'paged' => $paged,
        'post_type' => 'gallery',
        'posts_per_page' => $num,
        's' => get_search_query(),
        'meta_key' => '物件公開番号',
        'orderby' => 'meta_value_num',
        'tax_query' => array(
          'relation' => 'AND',
          $taxquery_taxonomy,
        ),
        'meta_query' => array(
          array(
            'key'	=>	'ギャラリーに公開',
            'value'	=>	'する',
            'compare'	=>	'='
          )
        )
      );
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()): while ($my_query->have_posts()) : $my_query->the_post();
      ?>
      <?php
      // フィールド名areaを取得
      $area = get_post_meta($post->ID,"ギャラリーに公開",true);
      ?>
      <!-- ▽ ループ開始 ▽ -->
      <?php //if($area === 'する'): ?>
      <?php get_template_part('content/loop/gallery');?>
      <?php //endif;?>
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