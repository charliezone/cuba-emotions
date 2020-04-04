<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model Child
 * @version		1.0.0
 * 
 * Top Model Child Functions File
 * Created by CMSMasters
 * 
 */


function top_model_child_enqueue_styles() {
    if( is_page('request-form') ){
        wp_enqueue_script('top-model-child-js', get_stylesheet_directory_uri().'/js/app.js', null, '1.0.0');
    }
    wp_enqueue_style('top-model-child-style', get_stylesheet_uri(), array('top-model-style'), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'top_model_child_enqueue_styles', 11);

function modify_slider_order($query, $slider_id) {
 
    // only alter the order for slider with "x" ID
    // http://tinyurl.com/zb6hzpc
    if($slider_id == 2 || $slider_id == 3) {
 
        // Custom Meta key/name
        $query['meta_key'] = 'cmsmasters_likes';
 
        // Order by Custom Meta values
        $query['orderby'] = 'cmsmasters_likes';
 
        // Calculate order based on:
        // 'NUMERIC', 'CHAR', 'DATE', 'DATETIME', 'TIME'
        $query['meta_type'] = 'NUMERIC';
 
    }
 
    return $query;
 
}
 
add_filter('revslider_get_posts', 'modify_slider_order', 10, 2);

function pippin_get_image_id($image_url) {
    global $wpdb;
    $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
        return $attachment[0]; 
}
?>