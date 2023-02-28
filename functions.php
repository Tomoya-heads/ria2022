<?php

if (!function_exists('RIAパートナーズ_setup')) {
	function RIAパートナーズ_setup()
	{
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus([
			'menu-1' => esc_html__('Primary', 'RIAパートナーズ'),
		]);
		add_theme_support('html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		]);
	}
}
add_action('after_setup_theme', 'RIAパートナーズ_setup');

// 関連フィールド公開済のみ
function custom_acf_relationship_query( $args, $field, $post_id ) {
  $args['post_status'] = 'publish';
  return $args;
}
add_filter( 'acf/fields/relationship/query', 'custom_acf_relationship_query', 10, 3 );


function RIAパートナーズ_content_width()
{
	$GLOBALS['content_width'] = apply_filters('RIAパートナーズ_content_width', 640);
}
add_action('after_setup_theme', 'RIAパートナーズ_content_width', 0);

function  RIAパートナーズ_is_mobile()
{
	$useragents = array(
			'iPhone',          // iPhone
			'iPod',            // iPod touch
			'^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
			'dream',           // Pre 1.5 Android
			'CUPCAKE',         // 1.5+ Android
			'blackberry9500',  // Storm
			'blackberry9530',  // Storm
			'blackberry9520',  // Storm v2
			'blackberry9550',  // Storm v2
			'blackberry9800',  // Torch
			'webOS',           // Palm Pre Experimental
			'incognito',       // Other iPhone browser
			'webmate'          // Other iPhone browser
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
add_action('is_mobile', 'RIAパートナーズ_is_mobile');

function RIAパートナーズ_widgets_init()
{
	register_sidebar([
		'name' => esc_html__('Sidebar', 'RIAパートナーズ'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Add widgets here.', 'RIAパートナーズ'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	]);
}
add_action('widgets_init', 'RIAパートナーズ_widgets_init');

function RIAパートナーズ_scripts()
{
  wp_enqueue_style('RIAパートナーズ-sanitize', get_template_directory_uri().'/css/sanitize.css');
	wp_enqueue_style('RIAパートナーズ-style', get_stylesheet_uri(),array(), filemtime( get_stylesheet_directory() . '/style.css' ));
	if(is_front_page() || is_page('renovation') || is_singular('gallery') || is_singular('preview')){
		wp_enqueue_style('slick-style','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css','','','');
		wp_enqueue_style('slick-theme','https://cdn.jsdelivr.net/npm/slick-carousel@1/slick/slick-theme.min.css','','','');
	}
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js','','',true);
	wp_enqueue_script('ofi',get_template_directory_uri().'/js/ofi.min.js','','',true);
	wp_enqueue_script('RIAパートナーズ-scripts', get_template_directory_uri().'/js/scripts.js', '',filemtime( get_stylesheet_directory() . '/js/scripts.js' ),true);
	if(is_front_page()){
		wp_enqueue_script('top-scripts', get_template_directory_uri().'/js/top.js', '','',true);
		wp_enqueue_script('slick-js','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js','','',true);
	} else if(is_archive('') && !is_post_type_archive('gallery')  && !is_post_type_archive('idea-design')) {
		wp_enqueue_script('infinite-scripts', get_template_directory_uri().'/js/infinite-scroll.js', '','',true);
		wp_enqueue_script('post-scripts', get_template_directory_uri().'/js/post.js', '','',true);
	} else if(is_page('apartment-building') || is_page('renovation')) {
		wp_enqueue_script('slick-js','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js','','',true);
		wp_enqueue_script('service-scripts', get_template_directory_uri().'/js/service.js', '','',true);
	} else if (is_post_type_archive('gallery') || is_singular('gallery') || is_singular('preview')) {
		wp_enqueue_script('slick-js','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js','','',true);
		wp_enqueue_script('gallery-scripts', get_template_directory_uri().'/js/gallery.js', '','',true);
	}  else if (is_post_type_archive('idea-design') || is_singular('idea-design')) {
		wp_enqueue_script('idea-design-scripts', get_template_directory_uri().'/js/idea-design.js', '','',true);
	}
}
add_action('wp_enqueue_scripts', 'RIAパートナーズ_scripts');


//incフォルダからインクルード
require get_template_directory().'/inc/reset.php';
require get_template_directory().'/inc/device_if.php';
require get_template_directory().'/inc/acf_add_options_page.php';
require get_template_directory().'/inc/acf_select_page.php';
require get_template_directory().'/inc/add_mw_wp_form.php';
require get_template_directory().'/inc/body_class.php';
require get_template_directory().'/inc/hide_author.php';
require get_template_directory().'/inc/taxonomy_radio.php';
require get_template_directory().'/inc/change_posts_archive.php';
require get_template_directory().'/inc/default_post.php';
require get_template_directory().'/inc/excerpt.php';
require get_template_directory().'/inc/form_validation.php';
require get_template_directory().'/inc/include_my_php.php';
require get_template_directory().'/inc/only_publish.php';
require get_template_directory().'/inc/is_parent_slug.php';
require get_template_directory().'/inc/wp_nav.php';
require get_template_directory().'/inc/get_form_id.php';
