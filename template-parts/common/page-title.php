<?php
  $page = get_post( get_the_ID() );
  $page_parent = get_post( $post ->post_parent );
  $slug = $page->post_name;
  $page_id = get_option( 'page_on_front' );
  $slug_parent = $page_parent->post_name;
  $ttl = get_the_title();

  //page
  if(is_home()){
	//archives
  } elseif(is_page('company')) {
    echo '<div class="common-fv">';
    echo '<img src="'.get_stylesheet_directory_uri().'/img/page/fv_company.jpg" class="object_fit">';
    echo '<h1 class="common-fv__ttl">会社概要</h1>';
    echo '<div class="common-fv__subTtl">';
    echo '<small class="common-fv__subTtl-inner font-serif">Company</small>';
    echo '</div>';
    echo '<div class="common-fv__bg"></div>';
    echo '</div>';
  } elseif(is_page('apartment-building')) {
    echo '<div class="common-fv">';
    echo '<img src="'.get_stylesheet_directory_uri().'/img/page/fv_apartment-building.jpg" class="object_fit">';
    echo '<h1 class="common-fv__ttl">デザイナーズ投資アパート<br class="sp-only"> 新築</h1>';
    echo '<div class="common-fv__subTtl">';
    echo '<small class="common-fv__subTtl-inner font-serif">New Apartment</small>';
    echo '</div>';
    echo '<div class="common-fv__bg"></div>';
    echo '</div>';
  } elseif(is_page('renovation')) {
    echo '<div class="common-fv">';
    echo '<img src="'.get_stylesheet_directory_uri().'/img/page/fv_renovation.jpg" class="object_fit">';
    echo '<h1 class="common-fv__ttl">リノベーション</h1>';
    echo '<div class="common-fv__subTtl">';
    echo '<small class="common-fv__subTtl-inner font-serif">Renovation Apartment</small>';
    echo '</div>';
    echo '<div class="common-fv__bg"></div>';
    echo '</div>';
  } elseif(is_page(array('general_contact','general_contact/confirm/', 'general_contact/thanks/'))) {
    echo '<div class="common-fv">';
    echo '<img src="'.get_stylesheet_directory_uri().'/img/page/fv_contact.jpg" class="object_fit">';
    echo '<h1 class="common-fv__ttl">アパート経営のお問い合わせ</h1>';
    echo '<div class="common-fv__subTtl">';
    echo '<small class="common-fv__subTtl-inner font-serif">Contact</small>';
    echo '</div>';
    echo '<div class="common-fv__bg"></div>';
    echo '</div>';
  } elseif(is_page(array('resident_contact','resident_contact/confirm/', 'resident_contact/thanks/'))) {
    echo '<div class="common-fv">';
    echo '<img src="'.get_stylesheet_directory_uri().'/img/page/fv_contact.jpg" class="object_fit">';
    echo '<h1 class="common-fv__ttl">入居者向けお問い合わせ<span>（退去手続き）</span></h1>';
    echo '<div class="common-fv__subTtl">';
    echo '<small class="common-fv__subTtl-inner font-serif">Contact</small>';
    echo '</div>';
    echo '<div class="common-fv__bg"></div>';
    echo '</div>';
  } elseif(is_page(array('reservation','reservation/confirm/', 'reservation/thanks/'))) {
    echo '<div class="common-fv">';
    echo '<img src="'.get_stylesheet_directory_uri().'/img/page/fv_contact.jpg" class="object_fit">';
    echo '<h1 class="common-fv__ttl">内覧予約</h1>';
    echo '<div class="common-fv__subTtl">';
    echo '<small class="common-fv__subTtl-inner font-serif">Contact</small>';
    echo '</div>';
    echo '<div class="common-fv__bg"></div>';
    echo '</div>';
  } elseif(is_page('privacy-policy')) {
    echo '<div class="common-fv">';
    echo '<img src="'.get_stylesheet_directory_uri().'/img/page/fv_privacy-policy.jpg" class="object_fit">';
    echo '<h1 class="common-fv__ttl">プライバシーポリシー</h1>';
    echo '<div class="common-fv__subTtl">';
    echo '<small class="common-fv__subTtl-inner font-serif">Privacy Policy</small>';
    echo '</div>';
    echo '<div class="common-fv__bg"></div>';
    echo '</div>';

  } elseif(is_post_type_archive('gallery') || is_post_type_archive('preview') || is_singular('gallery') || is_singular('preview')) {
    echo '<div class="common-fv">';
    echo '<img src="'.get_stylesheet_directory_uri().'/img/page/fv_gallery.jpg" class="object_fit">';
    echo '<h1 class="common-fv__ttl">ギャラリー</h1>';
    echo '<div class="common-fv__subTtl">';
    echo '<small class="common-fv__subTtl-inner font-serif">Gallery</small>';
    echo '</div>';
    echo '<div class="common-fv__bg"></div>';
    echo '</div>';
  } elseif(is_post_type_archive('idea-design')) {
    echo '<div class="common-fv">';
    echo '<img src="'.get_stylesheet_directory_uri().'/img/page/fv_idea-design.jpg" class="object_fit">';
    echo '<h1 class="common-fv__ttl">アイデアデザイン</h1>';
    echo '<div class="common-fv__subTtl">';
    echo '<small class="common-fv__subTtl-inner font-serif">Idea Design</small>';
    echo '</div>';
    echo '<div class="common-fv__bg"></div>';
    echo '</div>';
  } elseif(is_singular('idea-design')) {
    echo '<div class="common-fv">';
    echo get_the_post_thumbnail();
    echo '<h1 class="common-fv__ttl">';
    $idea_select = get_field('acf_idea_design_select');
    if(is_array($idea_select)){
      $idea_select = implode($idea_select);
    }
    if(have_rows('acf_idea_design_group','option')): while(have_rows('acf_idea_design_group','option')): the_row();
    if(mb_strpos($idea_select, get_sub_field('acf_idea_design_ttl')) !== false){
      echo '<div class="common-fv__ttl-sub">' . get_sub_field('acf_idea_design_ttl') . '</div>';
    }
    endwhile; endif;
    echo '</h1>';
    echo '<div class="common-fv__subTtl">';
    echo '<small class="common-fv__subTtl-inner font-serif">Idea Design</small>';
    echo '</div>';
    echo '<div class="common-fv__bg"></div>';
    echo '</div>';
  } elseif(is_archive('') && !is_post_type_archive('gallery') && !is_post_type_archive('preview') && !is_post_type_archive('idea-design') || is_single('') && !is_singular('gallery') && !is_singular('preview') && !is_singular('idea-design')) {
    echo '<div class="common-fv">';
    echo '<img src="'.get_stylesheet_directory_uri().'/img/page/fv_news.jpg" class="object_fit">';
    if ( is_archive() && !is_category(array('construction','apartment-management','review','design-meeting','blog'))) {
      echo '<h1 class="common-fv__ttl">お知らせ</h1>';
    } elseif ( is_category('construction')) {
      echo '<h1 class="common-fv__ttl">施　工</h1>';
    } elseif ( is_category('apartment-management')) {
      echo '<h1 class="common-fv__ttl">アパート経営</h1>';
    } elseif ( is_category('review')) {
      echo '<h1 class="common-fv__ttl">お客様の声</h1>';
    } elseif ( is_category('design-meeting')) {
      echo '<h1 class="common-fv__ttl">デザイン会議</h1>';
    } elseif ( is_category('blog')) {
      echo '<h1 class="common-fv__ttl">ブログ</h1>';
    } else {
      echo '<h1 class="common-fv__ttl">お知らせ</h1>';
    }
    echo '<div class="common-fv__subTtl">';
    echo '<small class="common-fv__subTtl-inner font-serif">News</small>';
    echo '</div>';
    echo '<div class="common-fv__bg"></div>';
    echo '</div>';
  }
?>