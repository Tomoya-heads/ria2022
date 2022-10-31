<?php
get_header();
$pageName="common-archive"
?>

<section class="<?php echo $pageName;?>">
  <ul class="<?php echo $pageName;?>__list">
    <li class="<?php echo $pageName;?>__item <?php if ( is_archive() && !is_category(array('construction','apartment-management','review','design-meeting','blog'))) { echo 'current'; } ?>"><a href="<?php echo home_url('/news/');?>">全　て</a></li>
    <li class="<?php echo $pageName;?>__item <?php if ( is_category('construction')) { echo 'current'; } ?>"><a href="<?php echo home_url('/category/construction/');?>">施　工</a></li>
    <li class="<?php echo $pageName;?>__item <?php if ( is_category('apartment-management')) { echo 'current'; } ?>"><a href="<?php echo home_url('/category/apartment-management/');?>">アパート経営</a></li>
    <li class="<?php echo $pageName;?>__item <?php if ( is_category('review')) { echo 'current'; } ?>"><a href="<?php echo home_url('/category/review/');?>">お客様の声</a></li>
    <li class="<?php echo $pageName;?>__item <?php if ( is_category('design-meeting')) { echo 'current'; } ?>"><a href="<?php echo home_url('/category/design-meeting/');?>">デザイン会議</a></li>
    <li class="<?php echo $pageName;?>__item <?php if ( is_category('blog')) { echo 'current'; } ?>"><a href="<?php echo home_url('/category/blog/');?>">ブログ</a></li>
  </ul>
  <div class="<?php echo $pageName;?>__inner">
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('content/loop/post');?>
  <?php endwhile;?>
  <?php endif; ?>
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