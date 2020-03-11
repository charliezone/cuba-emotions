<?php 
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version 	1.0.9
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function top_model_options_general_tabs() {
	$cmsmasters_option = top_model_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'top-model');
	
	if ($cmsmasters_option['top-model' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'top-model');
	}
	
	$tabs['header'] = esc_attr__('Header', 'top-model');
	$tabs['content'] = esc_attr__('Content', 'top-model');
	$tabs['footer'] = esc_attr__('Footer', 'top-model');
	
	return $tabs;
}


function top_model_options_general_sections() {
	$tab = top_model_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'top-model');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'top-model');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'top-model');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'top-model');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'top-model');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;
} 


function top_model_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = top_model_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'top-model' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'liquid', 
			'choices' => array( 
				esc_html__('Liquid', 'top-model') . '|liquid', 
				esc_html__('Boxed', 'top-model') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'top-model' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				esc_html__('Image', 'top-model') . '|image', 
				esc_html__('Text', 'top-model') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'top-model' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'top-model'), 
			'desc' => esc_html__('Choose your website logo image.', 'top-model'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'top-model' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'top-model'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'top-model'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'top-model' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'top-model'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : 'Top Model'), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'top-model' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'top-model'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'top-model' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'top-model'), 
			'desc' => esc_html__('enable', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'top-model' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'top-model'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'top-model' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'top-model'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'top-model' . '_bg_col', 
			'title' => esc_html__('Background Color', 'top-model'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'top-model' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'top-model' . '_bg_img', 
			'title' => esc_html__('Background Image', 'top-model'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'top-model'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'top-model' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'top-model') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'top-model') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'top-model') . '|repeat-y', 
				esc_html__('Repeat', 'top-model') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'top-model' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'top-model'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				esc_html__('Top Left', 'top-model') . '|top left', 
				esc_html__('Top Center', 'top-model') . '|top center', 
				esc_html__('Top Right', 'top-model') . '|top right', 
				esc_html__('Center Left', 'top-model') . '|center left', 
				esc_html__('Center Center', 'top-model') . '|center center', 
				esc_html__('Center Right', 'top-model') . '|center right', 
				esc_html__('Bottom Left', 'top-model') . '|bottom left', 
				esc_html__('Bottom Center', 'top-model') . '|bottom center', 
				esc_html__('Bottom Right', 'top-model') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'top-model' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_html__('Scroll', 'top-model') . '|scroll', 
				esc_html__('Fixed', 'top-model') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'top-model' . '_bg_size', 
			'title' => esc_html__('Background Size', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_html__('Auto', 'top-model') . '|auto', 
				esc_html__('Cover', 'top-model') . '|cover', 
				esc_html__('Contain', 'top-model') . '|contain' 
			) 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'top-model' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'top-model'), 
			'desc' => esc_html__('enable', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'top-model' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content', 'top-model'), 
			'desc' => esc_html__('enable', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'top-model' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'top-model' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'top-model'), 
			'desc' => esc_html__('pixels', 'top-model'), 
			'type' => 'number', 
			'std' => '32', 
			'min' => '30' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'top-model' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'top-model'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'top-model') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'top-model' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_html__('None', 'top-model') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'top-model') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'top-model') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'top-model' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Fullwidth Header Style', 'top-model') . '|fullwidth', 
				esc_html__('Middle Header Style', 'top-model') . '|default', 
				esc_html__('Compact Style Left Navigation', 'top-model') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'top-model') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'top-model') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'top-model' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'top-model'), 
			'desc' => esc_html__('pixels', 'top-model'), 
			'type' => 'number', 
			'std' => '120', 
			'min' => '80' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'top-model' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'top-model'), 
			'desc' => esc_html__('pixels', 'top-model'), 
			'type' => 'number', 
			'std' => '60', 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'top-model' . '_header_search', 
			'title' => esc_html__('Header Search', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'top-model' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'none', 
			'choices' => array( 
				esc_html__('None', 'top-model') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'top-model') . '|social', 
				esc_html__('Header Custom HTML', 'top-model') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'top-model' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'top-model'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'top-model') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		if (CMSMASTERS_WOOCOMMERCE) {
			$options[] = array(
				'section' => 'header_section',
				'id' => 'top-model' . '_woocommerce_cart_dropdown',
				'title' => esc_html__('Disable WooCommerce Cart', 'top-model'),
				'desc' => '',
				'type' => 'checkbox',
				'std' => 0
			);
		}

		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'top-model'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'top-model'), 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'top-model'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'top-model'), 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'top-model'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'top-model'), 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
	if (CMSMASTERS_EVENTS_CALENDAR) {
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_events_layout', 
			'title' => esc_html__('Events Calendar Layout Type', 'top-model'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
	}
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'top-model'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'top-model'), 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'center', 
			'choices' => array( 
				esc_html__('Left', 'top-model') . '|left', 
				esc_html__('Right', 'top-model') . '|right', 
				esc_html__('Center', 'top-model') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_heading_scheme', 
			'title' => esc_html__('Heading Color Scheme by Default', 'top-model'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'top-model'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'top-model'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'top-model') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'top-model') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'top-model') . '|repeat-y', 
				esc_html__('Repeat', 'top-model') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_html__('Scroll', 'top-model') . '|scroll', 
				esc_html__('Fixed', 'top-model') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_html__('Auto', 'top-model') . '|auto', 
				esc_html__('Cover', 'top-model') . '|cover', 
				esc_html__('Contain', 'top-model') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'top-model'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'top-model'), 
			'desc' => esc_html__('pixels', 'top-model'), 
			'type' => 'number', 
			'std' => '230', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Color Scheme', 'top-model'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'top-model'), 
			'desc' => esc_html__('show', 'top-model') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'top-model' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'top-model'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '131313', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'top-model' . '_footer_scheme', 
			'title' => esc_html__('Footer Color Scheme', 'top-model'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'top-model' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'small', 
			'choices' => array( 
				esc_html__('With logo', 'top-model') . '|default', 
				esc_html__('Small', 'top-model') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'top-model' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'top-model'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_html__('None', 'top-model') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'top-model') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'top-model') . '|social', 
				esc_html__('Custom HTML', 'top-model') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'top-model' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'top-model' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'top-model'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'top-model'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'top-model' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'top-model'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'top-model'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'top-model' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'top-model' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'top-model' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'top-model'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'top-model') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'top-model' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'top-model'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '&copy; 2019 ' . 'Top Model', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

