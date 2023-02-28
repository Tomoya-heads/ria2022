<?php

//----------------------------------------------------------
//【管理画面】ACF Options Page の設定
//----------------------------------------------------------
//通常オプションページカスタマイズ
function my_acf_options_page_settings( $settings )
{
	$settings['title'] = 'ページ設定';
	$settings['menu'] = 'ページ設定';
	$settings['slug'] = 'acf-default-options';
  $settings['capability'] = 'read';
	return $settings;
}
add_filter('acf/options_page/settings', 'my_acf_options_page_settings');

//追加オプションページカスタマイズ
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => 'TOP',
    'menu_title' => 'TOP',
    'menu_slug' => 'acf-top-options',
    'capability' => 'read',
    'redirect' => true
  ));
  acf_add_options_page(array(
    'page_title' => 'アイデアデザイン',
    'menu_title' => 'アイデアデザイン',
    'menu_slug' => 'acf-custom-options2',
    'capability' => 'read',
    'redirect' => true
  ));
} 

//----------------------------------------------------------
//【管理画面】ページの属性で非公開などを親に選択できるようにする
//----------------------------------------------------------
add_filter( 'page_attributes_dropdown_pages_args', 'add_dropdown_pages' );
add_filter( 'quick_edit_dropdown_pages_args', 'add_dropdown_pages' );
function add_dropdown_pages( $add_dropdown_pages, $post = NULL ) {
  $add_dropdown_pages['post_status'] = array( 'publish', 'future', 'draft', 'pending', 'private', ); // 公開済、予約済、下書き、承認待ち、非公開、を選択
  return $add_dropdown_pages;
}