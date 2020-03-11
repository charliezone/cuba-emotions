<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version 	1.0.9
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


get_template_part('framework/class/class-tgm-plugin-activation');


if (!function_exists('top_model_register_theme_plugins')) {

function top_model_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Contact Form Builder', 'top-model'), 
			'slug'					=> 'cmsmasters-contact-form-builder', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.4.0', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'top-model'),
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '1.8.3', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'top-model'), 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.8', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Importer', 'top-model'), 
			'slug'					=> 'cmsmasters-importer', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-importer.zip', 
			'required'				=> true, 
			'version'				=> '1.0.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'top-model'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.8.2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'top-model'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.4.8.3', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		),    
		array( 
			'name'					=> esc_html__('Envato Market', 'top-model'), 
			'slug'					=> 'envato-market', 
			'source'				=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip', 
			'required'				=> false
		), 
		array( 
			'name'					=> esc_html__('GDPR Cookie Consent', 'top-model'), 
			'slug'					=> 'cookie-law-info', 
			'required'				=> false 
		),
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'top-model'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'top-model'), 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'top-model'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('The Events Calendar', 'top-model'), 
			'slug' 					=> 'the-events-calendar', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('MailPoet 3', 'top-model'), 
			'slug'					=> 'mailpoet', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('Instagram Feed', 'top-model'), 
			'slug'					=> 'instagram-feed', 
			'required'				=> false 
 		)  
	);
	
	
	$config = array( 
		'id' => 			'top-model', 
		'menu' => 			'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'top-model'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'top-model'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'top-model') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'top_model_register_theme_plugins');

