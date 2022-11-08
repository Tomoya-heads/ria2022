<?php

// function add_event_list( $children, $atts ) {

// 	if ( 'your_item' == $atts['name'] ) {
// 			$events = get_posts( array(
// 					'post_type' => 'art',
// 					'posts_per_page' => -1,
// 			) );

// 			foreach ( $events as $event ) {
// 					$children[$event->post_title] = $event->post_title;
// 					$fas[$event->post_id] = $event->post_id;
// 			}
// 	}
// 	// return $fas;
// 	return $children;
// }
// add_filter( 'mwform_choices_mw-wp-form-74', 'add_event_list', 10, 2 );


function add_gallery_list( $children, $atts ) {
	if ( 'your_preview' == $atts['name'] ) {
		$gallery = get_posts(
			array(
				'post_type' => 'gallery',
				'posts_per_page' => -1,
				'order'=> 'ASC',
				'meta_query'    => array(
					array(
						'key'     => '内覧予約',
						'value'   => '１',
						'compare' => '='
					)
					),
			)
		);
		$current_date = date_i18n( 'ymd' );
    // $dates_end = get_field('内覧可能日to');
		$preview = get_posts(
			array(
				'post_type'      => 'preview',
				'posts_per_page' => -1,
				'meta_query' => array(
					array(
						'key'     => '内覧可能日to', //締切日
						'value'   => $current_date,
						'compare' => '>=', //締切日が今日よりあと
						'type' => 'DATE'
					),
				)
			)
		);
		$myPosts = array_merge($gallery, $preview);
		$children  = array();
		foreach ( $myPosts as $item ) {
			$children[] = $item->post_title;
		}
	}
	return $children;
}

add_filter( 'mwform_choices_mw-wp-form-20707', 'add_gallery_list', 10, 2 );

function add_reason_must( $validation, $data ) {
  $method = $data['your_choice'];
  if( isset( $method ) && $method === 'その他' ) {
    $validation->set_rule( 'your_reason', 'noEmpty');
  }
  return $validation;
}
 
add_filter( 'mwform_validation_mw-wp-form-20708', 'add_reason_must', 10, 2 );

