<?php
get_header();
$pageName="archive-idea-design"
?>

<section class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__inner">
    <div class="<?php echo $pageName;?>__gallery">
      <div class="<?php echo $pageName;?>__ttl"><span>アイデアあふれるデザイン作品</span></div>
      <div class="common-gallery">
        <div class="common-gallery__img">
        <?php if(have_rows('acf_idea_design_img_group','option')): while(have_rows('acf_idea_design_img_group','option')): the_row();?>
          <div class="common-gallery__img-left">
            <div class="common-gallery__img-left-high"><img class="object_fit" src="<?php the_sub_field('acf_idea_design_img01');?>"></div>
            <div class="common-gallery__img-left-low">
              <div class="common-gallery__img-left-low-left"><img class="object_fit" src="<?php the_sub_field('acf_idea_design_img02');?>"></div>
              <div class="common-gallery__img-left-low-right"><img class="object_fit" src="<?php the_sub_field('acf_idea_design_img03');?>"></div>
            </div>
          </div>
          <div class="common-gallery__img-right">
            <div class="common-gallery__img-right-high">
              <div class="common-gallery__img-right-high-left"><img class="object_fit" src="<?php the_sub_field('acf_idea_design_img04');?>"></div>
              <div class="common-gallery__img-right-high-right"><img class="object_fit" src="<?php the_sub_field('acf_idea_design_img05');?>"></div>
            </div>
            <div class="common-gallery__img-right-low">
              <div class="common-gallery__img-right-low-left">
                <div class="common-gallery__img-right-low-left-high"><img class="object_fit" src="<?php the_sub_field('acf_idea_design_img06');?>"></div>
                <div class="common-gallery__img-right-low-left-low">
                  <div class="common-gallery__img-right-low-left-low-left"><img class="object_fit" src="<?php the_sub_field('acf_idea_design_img07');?>"></div>
                  <div class="common-gallery__img-right-low-left-low-right"><img class="object_fit" src="<?php the_sub_field('acf_idea_design_img08');?>"></div>
                </div>
              </div>
              <div class="common-gallery__img-right-low-right"><img class="object_fit" src="<?php the_sub_field('acf_idea_design_img09');?>"></div>
            </div>
          </div>
        <?php endwhile; endif;?>
        </div>
      </div>
      <div class="<?php echo $pageName;?>__gallery-txt"><?php the_field('acf_idea_design_txt','option');?></div>
    </div>
    <div class="<?php echo $pageName;?>__article" id="idea">
      <div class="<?php echo $pageName;?>__ttl"><span>アイデア作品集</span></div>
      <div class="<?php echo $pageName;?>__group">
      <?php
        if( is_mobile() ){
          $num = 10;
        } else {
          $num = 9;
        }
        // 【1ページ目・2ページ目以降　共通クエリ　2種】
        //  (Q1) ページャー用クエリ
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => $num,  // 1ページに表示する「投稿」の数
          'paged' => get_query_var('paged')
        );
        $pager_query = new WP_Query($args);
        //  (Q2) 固定ページ抽出クエリ
        $sticky = get_field('acf_idea_design_sticky','options');
        $args = array(
          'post_type' => 'idea-design',
          'posts_per_page' => -1,  // 固定ページはすべて表示
          'orderby' => 'post__in',
          'post__in' => $sticky
        );
        $sticky_query = new WP_Query($args);
        // 固定ページ総数を $sticky_number に代入
        if ($sticky[0] == true) {
          $sticky_number = $sticky_query->found_posts;
        } else {
          $sticky_number = 0;
        }
        // 1ページ目に表示する、通常ページの本数を求める。
        // (※変数 $normal_number は、2ページ目以降の offset にも利用する。)
        $normal_number = 0;
        if (12 - $sticky_number > 0) {
          $normal_number = $num - $sticky_number;
        }
      ?>
      <?php
      //【i. ページが1件以上存在する場合】
        if ($pager_query->have_posts() == true)
      :?>
        <?php
        // 【i-A. 1ページ目の場合】
        if (get_query_var('paged') == 0 || get_query_var('paged') == 1) :
          //【i-A-1. 固定ページが存在する場合】
          // 固定投稿 + 通常投稿（本数調整）→ 合計12本
          // (Q2) 固定ページ抽出クエリ　+　(Q3-1) 通常ページ抽出クエリ(paged = 1) で表示。
          //
          //【i-A-2. 固定ページが1つもない場合】
          // 通常投稿　→　12本
          // (Q3-1) 通常ページ抽出クエリ(paged = 1) のみで表示。
          //
          // ---------
          //
          // (Q3-1) 通常ページ抽出クエリ(paged = 1)
          $args = array(
            'post_type' => 'idea-design',
            'posts_per_page' => $normal_number,
            'post__not_in' => $sticky, /* 先頭固定は除外 */
            'paged' => 1
          );
          $normal_query_paged1 = new WP_Query($args);
        ?>
        <?php if ($sticky[0] == true) :
          //【A-1. 固定ページが存在する場合】
          // (Q2) 固定ページ抽出クエリ　を出力
        ?>
          <?php while ($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
          <?php get_template_part('content/loop/idea-design-recommend'); ?>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php
        //【A-1,A-2 共通】
        // (Q3-1) 通常ページ抽出クエリ(paged = 1)　を出力
        while ($normal_query_paged1->have_posts()) : $normal_query_paged1->the_post(); ?>
          <?php get_template_part('content/loop/idea-design'); ?>
        <?php endwhile; ?>
        <?php
        //【i-B. 2ページ目以降の場合】
        else :
          // (Q3-2) 通常ページ抽出クエリ(paged > 1)
          // offset を調整
          $args = array(
            'post_type' => 'idea-design',
                'posts_per_page' => $num,
                'post__not_in' => $sticky, /* 先頭固定は除外 */
                'offset' => (get_query_var('paged') - 2) * $num + $normal_number
              );
              $normal_query_paged2after = new WP_Query($args);
            ?>
            <?php while ($normal_query_paged2after->have_posts()) : $normal_query_paged2after->the_post(); ?>
            <?php get_template_part('content/loop/idea-design'); ?>
            <?php endwhile; ?>
        <?php endif; ?>
      <?php endif; ?>
      </div>
      <!-- ページネーション -->
      <div class="<?php echo $pageName;?>__btn">
        <?php
        if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); 