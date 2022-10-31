<?php
function change_posts_archive($query) {
 /* 管理画面,メインクエリに干渉しないために必須 */
    if ( is_admin() || ! $query->is_main_query() ){
        return;
    }
    if ($query->is_front_page()) {
        //「posts_per_page」で表示する最大投稿数を「３件」に変更
        $query->set('posts_per_page', '3');
    }
}
add_action( 'pre_get_posts', 'change_posts_archive' );

// $opts = array(
//     'http' => array(
//         'method' => 'GET',
//         'header' => 'Authorization: Basic '. base64_encode('ria-admin:getready'),
//     ),
//     );
//     echo file_get_contents('http://ria.heads-test-dev.com/', false, stream_context_create($opts));