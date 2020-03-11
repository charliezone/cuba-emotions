<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version 	1.0.0
 * 
 * Instagram Feed Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function top_model_instagram_feed_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('cmsmasters-c-c-instagram-feed-extend', get_template_directory_uri() . '/instagram-feed/cmsmasters-framework/cmsmasters-c-c/js/cmsmasters-c-c-plugin-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('cmsmasters-c-c-instagram-feed-extend', 'cmsmasters_instagram_feed_shortcodes', array( 
			'instagram_feed_title' =>        		esc_attr__('Instagram Feed', 'top-model'), 
			'id_instagram_feed_title' =>      		esc_attr__('User Id', 'top-model'), 
			'id_instagram_feed_descr' =>       		esc_attr__('There may be several ids', 'top-model') 
		));
	}
}

add_action('admin_enqueue_scripts', 'top_model_instagram_feed_register_c_c_scripts');

