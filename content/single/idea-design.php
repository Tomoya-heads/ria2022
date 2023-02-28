<?php
$pageName = "single-idea-design";
?>

<section class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__inner">
  <?php
  $idea_select = get_field('acf_idea_design_select');
  if(is_array($idea_select)){
    $idea_select = implode($idea_select);
  }
  if(have_rows('acf_idea_design_group','option')): while(have_rows('acf_idea_design_group','option')): the_row();
  if(mb_strpos($idea_select, get_sub_field('acf_idea_design_ttl')) !== false){
    echo '<div class="'.$pageName.'__ttl">' . get_sub_field('acf_idea_design_ttl') . '</div>';
  }
  endwhile; endif;
  ?>

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
    <div class="<?php echo $pageName;?>__property-ttl">
      <a href="<?php the_permalink();?>">
        <?php the_title();?>
      </a>
    </div>
    <?php endwhile; endif; ?>
    <?php wp_reset_postdata(); endif; ?>
  <div class="<?php echo $pageName;?>__thumb"><?php the_post_thumbnail();?></div>
  <ul class="<?php echo $pageName;?>__list">
    <?php
    $idea_select = get_field('acf_idea_design_select');
    if(is_array($idea_select)){
      $idea_select = implode($idea_select);
    }
    if(have_rows('acf_idea_design_group','option')): while(have_rows('acf_idea_design_group','option')): the_row();?>
    <?php if(mb_strpos($idea_select, get_sub_field('acf_idea_design_ttl')) !== false):?>
      <li class="<?php echo $pageName;?>__item">
        <h2 class="<?php echo $pageName;?>__ttl"><?php the_sub_field('acf_idea_design_ttl');?>とは</h2>
        <p class="<?php echo $pageName;?>__txt"><?php the_sub_field('acf_idea_design_detail');?></p>
        <!-- FAQ -->
        <ul class="<?php echo $pageName;?>__faq-list">
        <?php if(have_rows('acf_idea_design_detail_faq_group','option')): while(have_rows('acf_idea_design_detail_faq_group','option')): the_row();?>
          <li class="<?php echo $pageName;?>__faq-item">
            <div class="<?php echo $pageName;?>__faq-question">
            <div class="<?php echo $pageName;?>__faq-question-left"><?php the_sub_field('acf_idea_design_detail_faq_question');?></div>
              <div class="<?php echo $pageName;?>__faq-question-right">
                <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_arrow-black.svg">
                <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_arrow-black-sp.svg">
              </div>
            </div>
            <div class="<?php echo $pageName;?>__faq-answer"><?php the_sub_field('acf_idea_design_detail_faq_answer');?></div>
          </li>
        <?php endwhile; endif;?>
        </ul>
      </li>
    <?php endif;?>
    <?php endwhile; endif;?>
  </ul>
  <!-- 本文 -->
  <div class="<?php echo $pageName;?>__content">
    <?php the_content();?>
  </div>
  <!-- このアイデアデザインがある物件 -->
  <div class="<?php echo $pageName;?>__property">
    <h2 class="<?php echo $pageName;?>__ttl">
      <?php
      $idea_select = get_field('acf_idea_design_select');
      if(is_array($idea_select)){
        $idea_select = implode($idea_select);
      }
      if(have_rows('acf_idea_design_group','option')): while(have_rows('acf_idea_design_group','option')): the_row();
      if(mb_strpos($idea_select, get_sub_field('acf_idea_design_ttl')) !== false){
        $counter++;
        echo '<div class="'.$pageName.'__ttl0'.$counter.' '.$pageName.'__ttl-sub">'.get_sub_field('acf_idea_design_ttl').'</div>';
      }
      endwhile; endif;
      ?>がある作品
    </h2>
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
    <a href="<?php the_permalink();?>">
      <div class="<?php echo $pageName;?>__property-thumb"><?php the_post_thumbnail();?></div>
      <div class="<?php echo $pageName;?>__property-name"><?php the_title();?></div>
      <div class="<?php echo $pageName;?>__property-address"><?php the_field('物件所在地');?></div>
    </a>
    <?php endwhile; endif; ?>
    <?php wp_reset_postdata(); endif; ?>
  </div>
  </div>
  <div class="<?php echo $pageName;?>__article">
    <div class="<?php echo $pageName;?>__article-ttl">その他のアイデア作品</div>
    <div class="<?php echo $pageName;?>__article-group">
    <?php
    if( is_mobile() ){
      $num = 4;
    } else {
      $num = 3;
    }
    $current_post_id = get_the_ID();
    $args = array(
      'post_type' => 'idea-design',// 投稿タイプを指定
      'posts_per_page' => $num,// 表示する記事数
      'orderby' => 'rand',
      'post__not_in' => [$current_post_id],
    );
    $news_query = new WP_Query( $args );
    if ( $news_query->have_posts() ): 
      while ( $news_query->have_posts() ): 
        $news_query->the_post(); 
    ?>
    <?php get_template_part('content/loop/idea-design'); ?>
    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>
    </div>
    <div class="mod-btn back"><a href="<?php echo home_url('/idea-design/'); ?>">アイデアデザイン一覧へ戻る</a></div>
  </div>
</section>