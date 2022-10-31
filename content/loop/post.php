<?php $sectionName="loop-post";?>
<article class="<?php echo $sectionName;?>">
    <div class="<?php echo $sectionName;?>__high">
      <div class="<?php echo $sectionName;?>__cat">
        <?php
          $category = get_the_category();
          if ( $category[0] ) {
          echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
          }
        ?>
      </div>
      <time class="<?php echo $sectionName;?>__date"><?php the_time('Y.m.d'); ?></time>
    </div>
    <a href="<?php the_permalink(); ?>" class="<?php echo $sectionName;?>__link" id="post-<?php the_ID(); ?>">
    <div class="loop-post__thumb">
    <?php if ( has_post_thumbnail() ): ?><!-- if文による条件分岐 アイキャッチが有る時-->
      <?php echo get_the_post_thumbnail($post->ID,'full', array('class' => 'object_fit')); ?>
			<?php else: ?><!-- アイキャッチが無い時-->
			<img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/archive/img_none.jpg">
		<?php endif; ?>
    </div>
    <div class="<?php echo $sectionName;?>__low">
      <h2 class="<?php echo $sectionName;?>__ttl"><?php the_title(); ?></h2>
      <?php the_excerpt();?>
    </div>
  </a>
</article>