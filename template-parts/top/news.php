<?php $sectionName = "top-news";?>
<section class="<?php echo $sectionName;?>">
  <div class="mod-ttl left">
    <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/fv_news.jpg">
    <div class="mod-ttl__ttl">お知らせ</div>
    <div class="mod-ttl__subTtl">
      <div class="mod-ttl__subTtl-inner font-serif">News</div>
    </div>
    <div class="mod-ttl__line"></div>
    <div class="mod-ttl__bg"></div>
  </div>
  <div class="<?php echo $sectionName;?>__inner">
    <div class="<?php echo $sectionName;?>__list">
      <!--もし投稿があれば表示-->
      <?php 
      $args = [
      'post_type' => 'post',
      'posts_per_page' => 3,
      'paged' => $paged
      ];
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <!-- ここに投稿内容 -->
      <?php get_template_part('content/loop/post');?>
      <?php endwhile; ?>
      <?php endif; wp_reset_postdata();?>
    </div>
    <div class="mod-btn"><a href="<?php echo home_url('/news/'); ?>">詳しく見る</a></div>
  </div>
  <div class="common-img left"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_news.jpg"></div>
</section>