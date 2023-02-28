<?php $sectionName="loop-idea-design";?>
<article class="<?php echo $sectionName;?>">
  <a href="<?php the_permalink(); ?>" class="<?php echo $sectionName;?>__link" id="post-<?php the_ID(); ?>">
    <!-- サムネイル -->
    <div class="<?php echo $sectionName;?>__thumb">
      <div class="<?php echo $sectionName;?>__recommend">傑作品</div>
      <?php echo get_the_post_thumbnail($post->ID,'full', array('class' => 'object_fit')); ?>
      <div class="<?php echo $sectionName;?>__thumb-sub">
        <?php echo get_the_post_thumbnail($post->ID); ?>
      </div>
    </div>
    <!-- デザインタイトル -->
    <div class="<?php echo $sectionName;?>__ttl">
    <?php
    $idea_select = get_field('acf_idea_design_select');
    if(is_array($idea_select)){
      $idea_select = implode($idea_select);
    }
    if(have_rows('acf_idea_design_group','option')): while(have_rows('acf_idea_design_group','option')): the_row();?>
    <?php if(mb_strpos($idea_select, get_sub_field('acf_idea_design_ttl')) !== false):?>
      <div class="<?php echo $sectionName;?>__name"><?php the_sub_field('acf_idea_design_ttl');?></div>
    <?php endif;?>
    <?php endwhile; endif;?>
    </div>
    <!-- 物件名 -->
    <?php
    $related_posts = get_field('acf_idea_design_property'); // 関連記事IDの取得
    $args = array(
        'post_type' => 'gallery',
        'post__in' => $related_posts, //queryに含む投稿IDを指定
        'orderby' => 'post__in' //表示順（配列に入っている順）
    );
    ?>
    <?php $query = new WP_Query( $args ); ?>
    <?php if(get_field('acf_idea_design_property')):?>
    <?php if($query -> have_posts()): while($query -> have_posts()): $query->the_post();?>
    <div class="<?php echo $sectionName;?>__property">
      <?php the_title();?>
    </div>
    <?php endwhile; endif; ?>
    <?php wp_reset_postdata(); endif; ?>
  </a>
</article>