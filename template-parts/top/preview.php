<?php $sectionName = "top-preview";?>
<section class="<?php echo $sectionName;?>">
  <div class="<?php echo $sectionName;?>__inner">
    <div class="mod-ttl right">
      <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_preview-ttl.jpg">
      <div class="mod-ttl__ttl">内覧会情報</div>
      <div class="mod-ttl__subTtl">
        <div class="mod-ttl__subTtl-inner font-serif">Private Showing Information</div>
      </div>
      <div class="mod-ttl__line"></div>
      <div class="mod-ttl__bg"></div>
    </div>
    <ul class="<?php echo $sectionName;?>__list">
    <?php
      $args = array(
        'post_type' => 'preview',
        'posts_per_page' => -1,
      );
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()): while ($my_query->have_posts()) : $my_query->the_post();
    ?>
    <?php
    // date_default_timezone_set('Asia/Tokyo');
    $week = array("日", "月", "火", "水", "木", "金", "土");
    $today = date("Ymd");
    $dates_start = get_field('内覧可能日from');
    $dates_end = get_field('内覧可能日to');
    $date_start = date_create(''.get_field('内覧可能日from').'');
    $date_end = date_create(''.get_field('内覧可能日to').'');
    ?>
    <?php //if(strtotime($today) >= strtotime($dates_start) && strtotime($today) <= strtotime($dates_end)) : ?>
    <?php if(strtotime($today) <= strtotime($dates_end)) : ?>
    <li class="<?php echo $sectionName;?>__item">
      <div class="<?php echo $sectionName;?>__container">
        <div class="<?php echo $sectionName;?>__left">
        <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        </div>
        <div class="<?php echo $sectionName;?>__right">
          <div class="<?php echo $sectionName;?>__right-inner">
            <div class="<?php echo $sectionName;?>__name"><?php the_title();?></div>
            <div class="<?php echo $sectionName;?>__address"><?php the_field('物件所在地');?></div>
            <div class="<?php echo $sectionName;?>__day">
              <?php echo date_format($date_start,'Y/m/d') . "(" . $week[(int)date_format($date_start,'w')] . ")" ;?>から<br>
              <?php echo date_format($date_end,'Y/m/d') . "(" . $week[(int)date_format($date_end,'w')] . ")" ;?>まで
            </div>
          </div>
        </div>
        <!-- <?php //if(get_field('acf_preview_btn')):?>
          <div class="mod-btn">
            <a href="<?php the_field('acf_preview_link');?>">物件詳細はこちら</a>
          </div>
        <?php //else:?>
          <div class="mod-btn">
            <a href="<?php echo esc_url( home_url('/reservation/') ); ?>?post_id=<?php echo get_the_ID();?>">内覧予約はこちら</a>
          </div>
        <?php //endif;?> -->
        <div class="mod-btn">
          <a href="<?php the_permalink();?>">内覧情報はこちら</a>
        </div>
      </div>
    </li>
    <?php endif;?>
    <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>
    </ul>
  </div>
  <div class="common-img right">
    <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_preview.jpg">
  </div>
</section>
