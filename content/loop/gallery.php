<?php $sectionName="loop-gallery";?>
<article class="<?php echo $sectionName;?>">
  <a href="<?php the_permalink(); ?>" class="<?php echo $sectionName;?>__link" id="post-<?php the_ID(); ?>">
    <div class="<?php echo $sectionName;?>__thumb"><?php echo get_the_post_thumbnail($post->ID,'full', array('class' => 'object_fit')); ?></div>
    <h2 class="<?php echo $sectionName;?>__ttl"><?php the_title(); ?></h2>
    <div class="<?php echo $sectionName;?>__location"><?php the_field('物件所在地');?></div>
  </a>
</article>