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
?>