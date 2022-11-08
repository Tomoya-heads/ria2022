<?php
add_action( 'admin_print_footer_scripts', 'select_to_radio_prefecture' );
function select_to_radio_prefecture() {
    ?>
    <script type="text/javascript">
    jQuery( function( $ ) {
        // 投稿画面
        $( '#taxonomy-prefecture input[type=checkbox]' ).each( function() {
            $( this ).replaceWith( $( this ).clone().attr( 'type', 'radio' ) );
        } );

        // 一覧画面
        var prefecture_checklist = $( '.prefecture-checklist input[type=checkbox]' );
        prefecture_checklist.click( function() {
            $( this ).parents( '.prefecture-checklist' ).find( ' input[type=checkbox]' ).attr( 'checked', false );
            $( this ).attr( 'checked', true );
        } );
    } );
    </script>
    <?php
}

