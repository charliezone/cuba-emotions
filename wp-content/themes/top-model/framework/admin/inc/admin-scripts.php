<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version 	1.0.0
 * 
 * Admin Panel Scripts & Styles
 * Created by CMSMasters
 * 
 */


function top_model_admin_register($hook) {
	global $pagenow;

	$screen = get_current_screen();
	
	
	wp_enqueue_style('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker-alpha', get_template_directory_uri() . '/framework/admin/inc/js/wp-color-picker-alpha.js', array('jquery', 'wp-color-picker'), '1.1.0', true);
	
	
	wp_enqueue_style('top-model-admin-icons-font', get_template_directory_uri() . '/framework/admin/inc/css/admin-icons-font.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('top-model-lightbox', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('top-model-lightbox-rtl', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('top-model-uploader-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersUploader.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('top-model-uploader-js', 'cmsmasters_admin_uploader', array( 
		'choose' => 				esc_attr__('Choose image', 'top-model'), 
		'insert' => 				esc_attr__('Insert image', 'top-model'), 
		'remove' => 				esc_attr__('Remove', 'top-model'), 
		'edit_gallery' => 			esc_attr__('Edit gallery', 'top-model') 
	));
	
	
	wp_enqueue_script('top-model-lightbox-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersLightbox.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('top-model-lightbox-js', 'cmsmasters_admin_lightbox', array( 
		'cancel' => 				esc_attr__('Cancel', 'top-model'), 
		'insert' => 				esc_attr__('Insert', 'top-model'), 
		'deselect' => 				esc_attr__('Deselect', 'top-model'), 
		'choose_icon' => 			esc_attr__('Choose Icon', 'top-model'), 
		'find_icons' => 			esc_attr__('Find icons', 'top-model'), 
		'min_length' => 			esc_attr__('min 2 symbols', 'top-model'), 
		'choose_font' => 			esc_attr__('Choose icons font', 'top-model'), 
		'error_on_page' => 			esc_attr__("Error on page!\nReload page and try again.", 'top-model') 
	));
	
	
	if ( 
		$hook == 'post.php' || 
		$hook == 'post-new.php' || 
		$hook == 'widgets.php' || 
		$hook == 'nav-menus.php' || 
		str_replace('cmsmasters-settings-element', '', $screen->id) != $screen->id 
	) {
		wp_enqueue_style('top-model-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('top-model-icons-custom', get_template_directory_uri() . '/css/fontello-custom.css', array(), '1.0.0', 'screen');
	}
	
	
	if ( 
		$hook == 'widgets.php' || 
		$hook == 'nav-menus.php' || 
		$screen->id  == 'settings_page_cmsmasters-donations-settings' 
	) {
		wp_enqueue_media();
	}
	
	
	wp_enqueue_style('top-model-admin-styles', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('top-model-admin-styles-rtl', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('top-model-admin-scripts', get_template_directory_uri() . '/framework/admin/inc/js/admin-theme-scripts.js', array('jquery'), '1.0.0', true);
	
	
	if ($hook == 'widgets.php') {
		wp_enqueue_style('top-model-widgets-styles', get_template_directory_uri() . '/framework/admin/inc/css/widgets-styles.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_script('top-model-widgets-scripts', get_template_directory_uri() . '/framework/admin/inc/js/widgets-scripts.js', array('jquery'), '1.0.0', true);
	}
}

add_action('admin_enqueue_scripts', 'top_model_admin_register');

add_action('admin_enqueue_scripts', 'cmsmasters_composer_icons');

