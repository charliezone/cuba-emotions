<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.8
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */



/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('top_model_system_fonts_list')) {
	function top_model_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('top_model_get_google_fonts_list')) {
	function top_model_get_google_fonts_list() {
		$fonts = array( 
			'' => esc_html__('None', 'top-model'), 
			'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic' => 'Titillium Web', 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic' => 'Roboto', 
			'Roboto+Condensed:400,400italic,700,700italic' => 'Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,700,700italic' => 'Open Sans', 
			'Open+Sans+Condensed:300,300italic,700' => 'Open Sans Condensed', 
			'Crimson+Text:400,400italic,700,700italic' => 'Crimson Text', 
			'Droid+Sans:400,700' => 'Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic' => 'Droid Serif', 
			'PT+Sans:400,400italic,700,700italic' => 'PT Sans', 
			'PT+Sans+Caption:400,700' => 'PT Sans Caption', 
			'PT+Sans+Narrow:400,700' => 'PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic' => 'PT Serif', 
			'Ubuntu:400,400italic,700,700italic' => 'Ubuntu', 
			'Ubuntu+Condensed' => 'Ubuntu Condensed', 
			'Headland+One' => 'Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic' => 'Source Sans Pro', 
			'Lato:400,400italic,700,700italic' => 'Lato', 
			'Cuprum:400,400italic,700,700italic' => 'Cuprum', 
			'Oswald:300,400,700' => 'Oswald', 
			'Yanone+Kaffeesatz:300,400,700' => 'Yanone Kaffeesatz', 
			'Lobster' => 'Lobster', 
			'Lobster+Two:400,400italic,700,700italic' => 'Lobster Two', 
			'Questrial' => 'Questrial', 
			'Prata' => 'Prata', 
			'Playfair+Display:400,400italic' => 'Playfair Display', 
			'Raleway:300,400,500,600,700' => 'Raleway', 
			'Dosis:300,400,500,700' => 'Dosis', 
			'Cutive+Mono' => 'Cutive Mono', 
			'Quicksand:300,400,700' => 'Quicksand', 
			'Montserrat:400,700' => 'Montserrat', 
			'Cookie' => 'Cookie', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('top_model_text_transform_list')) {
	function top_model_text_transform_list() {
		$list = array( 
			'none' => esc_html__('none', 'top-model'), 
			'uppercase' => esc_html__('uppercase', 'top-model'), 
			'lowercase' => esc_html__('lowercase', 'top-model'), 
			'capitalize' => esc_html__('capitalize', 'top-model'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('top_model_text_decoration_list')) {
	function top_model_text_decoration_list() {
		$list = array( 
			'none' => esc_html__('none', 'top-model'), 
			'underline' => esc_html__('underline', 'top-model'), 
			'overline' => esc_html__('overline', 'top-model'), 
			'line-through' => esc_html__('line-through', 'top-model'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('top_model_custom_color_schemes_list')) {
	function top_model_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'top-model'), 
			'second' => esc_html__('Custom 2', 'top-model'), 
			'third' => esc_html__('Custom 3', 'top-model') 
		);
		
		
		return $list;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/




// Theme Plugin Support Constants
define('CMSMASTERS_CONTENT_COMPOSER', true);

define('CMSMASTERS_DONATIONS', false);

define('CMSMASTERS_CONTACT_FORM_BUILDER', true);

define('CMSMASTERS_MEGA_MENU', true);

define('CMSMASTERS_SERMONS', false);

if (class_exists('woocommerce')) {
	define('CMSMASTERS_WOOCOMMERCE', true);
} else {
	define('CMSMASTERS_WOOCOMMERCE', false);
}

if (class_exists('Tribe__Events__Main')) {
	define('CMSMASTERS_EVENTS_CALENDAR', true);
} else {
	define('CMSMASTERS_EVENTS_CALENDAR', false);
}

if (class_exists('PayPalDonations')) {
	define('CMSMASTERS_PAYPALDONATIONS', true);
} else {
	define('CMSMASTERS_PAYPALDONATIONS', false);
}

if (function_exists('timetable_events_init')) {
	define('CMSMASTERS_TIMETABLE', false);
} else {
	define('CMSMASTERS_TIMETABLE', false);
}

if (class_exists('TC')) {
	define('CMSMASTERS_TC_EVENTS', false);
} else {
	define('CMSMASTERS_TC_EVENTS', false);
}

if (function_exists('sb_instagram_activate')) {
	define('CMSMASTERS_INSTAGRAM_FEED', true);
} else {
	define('CMSMASTERS_INSTAGRAM_FEED', false);
}

// CMSMasters Importer Compatibility
define('CMSMASTERS_IMPORTER', true);

// Theme Colored Categories Constant
define('CMSMASTERS_COLORED_CATEGORIES', true);

// Theme Projects Compatible
define('CMSMASTERS_PROJECT_COMPATIBLE', true);

// Theme Profiles Compatible
define('CMSMASTERS_PROFILE_COMPATIBLE', true);

// Developer Mode Constant
define('CMSMASTERS_DEVELOPER_MODE', false);

// Change FS Method
if (!defined('FS_METHOD')) {
	define('FS_METHOD', 'direct');
}



// Theme Image Thumbnails Size
if (!function_exists('top_model_get_image_thumbnail_list')) {
	function top_model_get_image_thumbnail_list() {
		$list = array( 
			'cmsmasters-small-thumb' => array( 
				'width' => 		70, 
				'height' => 	70, 
				'crop' => 		true 
			), 
			'cmsmasters-square-thumb' => array( 
				'width' => 		300, 
				'height' => 	300, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Square', 'top-model') 
			), 
			'cmsmasters-blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	420, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Masonry Blog', 'top-model') 
			), 
			'cmsmasters-project-grid-thumb' => array( 
				'width' => 		390, 
				'height' => 	480, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project Grid', 'top-model') 
			), 
			'cmsmasters-project-thumb' => array( 
				'width' => 		580, 
				'height' => 	580, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project', 'top-model') 
			), 
			'cmsmasters-project-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Project', 'top-model') 
			), 
			'post-thumbnail' => array( 
				'width' => 		860, 
				'height' => 	500, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Featured', 'top-model') 
			), 
			'cmsmasters-masonry-thumb' => array( 
				'width' => 		860, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry', 'top-model') 
			), 
			'cmsmasters-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	650, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Full', 'top-model') 
			), 
			'cmsmasters-project-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	700, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project Full', 'top-model') 
			), 
			'cmsmasters-full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Full', 'top-model') 
			) 
		);
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {
			$list['cmsmasters-event-thumb'] = array( 
				'width' => 		580, 
				'height' => 	420, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Event', 'top-model') 
			);
		}
		
		
		return $list;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('top_model_all_color_schemes_list')) {
	function top_model_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'top-model'), 
			'header' => 		esc_html__('Header', 'top-model'), 
			'navigation' => 	esc_html__('Navigation', 'top-model'), 
			'header_top' => 	esc_html__('Header Top', 'top-model'), 
			'footer' => 		esc_html__('Footer', 'top-model') 
		);
		
		
		$out = array_merge($list, top_model_custom_color_schemes_list());
		
		
		return apply_filters('cmsmasters_all_color_schemes_list_filter', $out);
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('top_model_color_schemes_defaults')) {
	function top_model_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#545454', 
				'link' => 		'#977e68', 
				'hover' => 		'#979797', 
				'heading' => 	'#191919', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#191919' 
			), 
			'header' => array( // Header color scheme
				'mid_color' => 		'#545454', 
				'mid_link' => 		'#191919', 
				'mid_hover' => 		'#979797', 
				'mid_bg' => 		'#ffffff', 
				'mid_bg_scroll' => 	'#ffffff', 
				'mid_border' => 	'#191919', 
				'bot_color' => 		'#545454', 
				'bot_link' => 		'#191919', 
				'bot_hover' => 		'#979797', 
				'bot_bg' => 		'#ffffff', 
				'bot_bg_scroll' => 	'#ffffff', 
				'bot_border' => 	'#191919' 
			), 
			'navigation' => array( // Navigation color scheme
				'title_link' => 			'#191919', 
				'title_link_hover' => 		'#979797', 
				'title_link_current' => 	'#191919', 
				'title_link_subtitle' => 	'#545454', 
				'title_link_bg' => 			'rgba(255,255,255,0)', 
				'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
				'title_link_bg_current' => 	'rgba(255,255,255,0)', 
				'title_link_border' => 		'rgba(255,255,255,0)', 
				'dropdown_text' => 			'#545454', 
				'dropdown_bg' => 			'#ffffff', 
				'dropdown_border' => 		'#191919', 
				'dropdown_link' => 			'#191919', 
				'dropdown_link_hover' => 	'#979797', 
				'dropdown_link_subtitle' => '#545454', 
				'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
				'dropdown_link_border' => 	'rgba(255,255,255,0)' 
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 					'#545454', 
				'link' => 					'#191919', 
				'hover' => 					'#979797', 
				'bg' => 					'#ffffff', 
				'border' => 				'#191919', 
				'title_link' => 			'#191919', 
				'title_link_hover' => 		'#979797', 
				'title_link_bg' => 			'rgba(255,255,255,0)', 
				'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
				'title_link_border' => 		'rgba(255,255,255,0)', 
				'dropdown_bg' => 			'#ffffff', 
				'dropdown_border' => 		'#191919', 
				'dropdown_link' => 			'#191919', 
				'dropdown_link_hover' => 	'#979797', 
				'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
				'dropdown_link_border' => 	'rgba(255,255,255,0)' 
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'#545454', 
				'link' => 		'#191919', 
				'hover' => 		'#979797', 
				'heading' => 	'#191919', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#191919' 
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'#ffffff', 
				'link' => 		'#ffffff', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#98433a', 
				'alternate' => 	'#ffffff', 
				'border' => 	'rgba(255,255,255,0.2)' 
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'#ffffff', 
				'link' => 		'#ffffff', 
				'hover' => 		'rgba(255,255,255,0.4)', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#d14f42', 
				'alternate' => 	'rgba(255,255,255,0)', 
				'border' => 	'#e4e4e4' 
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'rgba(255,255,255,0.4)', 
				'link' => 		'#ffffff', 
				'hover' => 		'#e96b61', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#d14f42', 
				'alternate' => 	'#d14f42', 
				'border' => 	'#e4e4e4' 
			) 
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
define('CMSMASTERS_FRAMEWORK', get_template_directory() . '/framework');
define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
define('CMSMASTERS_COMPOSER', get_template_directory() . '/cmsmasters-c-c');
define('CMSMASTERS_DEMO_FILES_PATH', get_template_directory() . '/framework/admin/inc/demo-content/');



// Load Framework Parts
require_once(CMSMASTERS_CLASS . '/Browser.php');

if (class_exists('Cmsmasters_Theme_Importer')) {
	require_once(CMSMASTERS_ADMIN_INC . '/demo-content-importer.php');
}
require_once(CMSMASTERS_ADMIN_INC . '/config-functions.php');

require_once(CMSMASTERS_FUNCTION . '/theme-functions.php');

require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php');

require_once(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php');

require_once(CMSMASTERS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMASTERS_ADMIN_INC . '/plugin-activator.php');

require_once(CMSMASTERS_CLASS . '/widgets.php');

require_once(CMSMASTERS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMASTERS_FUNCTION . '/likes.php');

require_once(CMSMASTERS_FUNCTION . '/pagination.php');

require_once(CMSMASTERS_FUNCTION . '/single-comment.php');

require_once(CMSMASTERS_FUNCTION . '/theme-fonts.php');

require_once(CMSMASTERS_FUNCTION . '/theme-colors-primary.php');

require_once(CMSMASTERS_FUNCTION . '/theme-colors-secondary.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-post.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-project.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-profile.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-shortcodes.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-widgets.php');


$cmsmasters_wp_version = get_bloginfo('version');

if (version_compare($cmsmasters_wp_version, '5', '>=') || function_exists('is_gutenberg_page')) {
	require_once(get_template_directory() . '/gutenberg/cmsmasters-module-functions.php');
}

// Theme Colored Categories Functions
if (CMSMASTERS_COLORED_CATEGORIES) {
	require_once(CMSMASTERS_FUNCTION . '/theme-colored-categories.php');
}


if (class_exists('Cmsmasters_Content_Composer')) {
	require_once(CMSMASTERS_COMPOSER . '/filters/cmsmasters-c-c-atts-filters.php');
}


// CMSMASTERS Donations functions
if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
	require_once(get_template_directory() . '/cmsmasters-donations/function/template-functions-donation.php');
}

// Woocommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-woo-functions.php');
}

// Events functions
if (CMSMASTERS_EVENTS_CALENDAR) {
	require_once(get_template_directory() . '/tribe-events/cmsmasters-events-functions.php');
}

// Instagram Feed functions
if (CMSMASTERS_INSTAGRAM_FEED) {
	require_once(get_template_directory() . '/instagram-feed/cmsmasters-plugin-functions.php');
}



// Load Theme Local File
if (!function_exists('top_model_load_theme_textdomain')) {
	function top_model_load_theme_textdomain() {
		load_theme_textdomain('top-model', CMSMASTERS_FRAMEWORK . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'top_model_load_theme_textdomain')) {
	add_action('after_setup_theme', 'top_model_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('top_model_theme_activation')) {
	function top_model_theme_activation() {
		if (get_option('cmsmasters_active_theme') != 'top-model') {
			add_option('cmsmasters_active_theme', 'top-model', '', 'yes');
			
			
			top_model_add_global_options();
			
			
			top_model_add_global_icons();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsmasters-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'top_model_theme_activation');



// Framework Deactivation
if (!function_exists('top_model_theme_deactivation')) {
	function top_model_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'top_model_theme_deactivation')) {
	add_action('switch_theme', 'top_model_theme_deactivation');
}



// Plugin Activation Regenerate Styles
if (!function_exists('top_model_plugin_activation')) {
	function top_model_plugin_activation($plugin, $network_activation) {
		update_option('cmsmasters_plugin_activation', 'true');
		
		
		if ($plugin == 'classic-editor/classic-editor.php') {
			update_option('classic-editor-replace', 'no-replace');
		}
	}
}

add_action('activated_plugin', 'top_model_plugin_activation', 10, 2);



if (!function_exists('top_model_plugin_activation_regenerate')) {
	function top_model_plugin_activation_regenerate() {
		if (!get_option('cmsmasters_plugin_activation')) {
			add_option('cmsmasters_plugin_activation', 'false');
		}
		
		if (get_option('cmsmasters_plugin_activation') != 'false') {
			top_model_regenerate_styles();
			
			top_model_add_global_options();
			
			top_model_add_global_icons();
			
			
			update_option('cmsmasters_plugin_activation', 'false');
		}
	}
}



function top_model_run_reinit_import_options($post_id, $key, $value) {
	if (!get_post_meta($post_id, 'cmsmasters_heading', true)) {
		$custom_post_meta_fields = top_model_get_custom_all_meta_fields();
		
		foreach ($custom_post_meta_fields as $field) {
			if ( 
				$field['type'] != 'tabs' && 
				$field['type'] != 'tab_start' && 
				$field['type'] != 'tab_finish' && 
				$field['type'] != 'content_start' && 
				$field['type'] != 'content_finish' 
			) {
				update_post_meta($post_id, $field['id'], $field['std']);
			}
		}
	}


	if ($key === 'cmsmasters_composer_show' && $value === 'true') {
		update_post_meta($post_id, 'cmsmasters_gutenberg_show', 'true');
	}
}

add_action('import_post_meta', 'top_model_run_reinit_import_options', 10, 3);

add_action('init', 'top_model_plugin_activation_regenerate');

