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
?>