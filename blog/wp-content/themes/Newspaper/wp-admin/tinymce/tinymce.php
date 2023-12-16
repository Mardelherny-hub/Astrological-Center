<?php




add_action( 'admin_head', 'fb_add_tinymce' );
function fb_add_tinymce() {
    global $typenow;

    // only on Post Type: post and page
    if( ! in_array( $typenow, array( 'post', 'page' ) ) )
        return ;

    add_filter( 'mce_external_plugins', 'fb_add_tinymce_plugin' );
    // Add to line 1 form WP TinyMCE
    add_filter( 'mce_buttons', 'fb_add_tinymce_button' );
}

// inlcude the js for tinymce
function fb_add_tinymce_plugin( $plugin_array ) {

    $plugin_array['fb_test'] = get_template_directory_uri() . '/wp-admin/tinymce/customcodes.js';
    // Print all plugin js path
    //var_dump( $plugin_array );
    return $plugin_array;
}

// Add the button key for address via JS
function fb_add_tinymce_button( $buttons ) {

    array_push( $buttons, 'fb_test_button_key' );
    // Print all buttons
    //var_dump( $buttons );
    return $buttons;
}