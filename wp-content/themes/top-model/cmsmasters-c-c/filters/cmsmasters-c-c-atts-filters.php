<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version 	1.0.0
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */



/* Register Admin Panel JS Scripts */
function top_model_register_admin_js_scripts() {
	global $pagenow;
	
	$cmsmasters_option = top_model_get_global_options();
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('top-model-composer-shortcodes-extend', get_template_directory_uri() . '/cmsmasters-c-c/js/cmsmasters-c-c-shortcodes-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('top-model-composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
			'choice_info' =>							esc_attr__('Information', 'top-model'), 
			'quotes_field_slider_type_title' => 		esc_attr__('Slider Type', 'top-model'), 
			'quotes_field_slider_type_descr' => 		esc_attr__('Choose your quotes slider style type', 'top-model'), 
			'quotes_field_type_choice_box' => 			esc_attr__('Boxed', 'top-model'), 
			'quotes_field_type_choice_center' => 		esc_attr__('Centered', 'top-model'),
			'quotes_field_item_color_title' => 			esc_attr__('Color', 'top-model'),
			'quotes_field_item_color_descr' => 			esc_attr__('Enter this quote custom color', 'top-model')
		));
	}
}

add_action('admin_enqueue_scripts', 'top_model_register_admin_js_scripts');



// Quotes Shortcode Attributes Filter
add_filter('cmsmasters_quotes_atts_filter', 'cmsmasters_quotes_atts');

function cmsmasters_quotes_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'mode' => 				'grid', 
		'type' => 				'boxed', 
		'columns' => 			'3', 
		'speed' => 				'10', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


