<?php 
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function top_model_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'top-model');
	$tabs['icon'] = esc_attr__('Social Icons', 'top-model');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'top-model');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'top-model');
	$tabs['error'] = esc_attr__('404', 'top-model');
	$tabs['code'] = esc_attr__('Custom Codes', 'top-model');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'top-model');
	}
	
	return $tabs;
}


function top_model_options_element_sections() {
	$tab = top_model_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'top-model');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'top-model');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'top-model');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'top-model');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'top-model');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'top-model');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'top-model');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;	
} 


function top_model_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = top_model_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'top-model' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'top-model'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'top-model' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'top-model'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsmasters-icon-linkedin|#|' . esc_html__('Linkedin', 'top-model') . '|true||', 
				'cmsmasters-icon-facebook|#|' . esc_html__('Facebook', 'top-model') . '|true||', 
				'cmsmasters-icon-gplus|#|' . esc_html__('Google', 'top-model') . '|true||', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'top-model') . '|true||', 
				'cmsmasters-icon-skype|#|' . esc_html__('Skype', 'top-model') . '|true||'  
			) 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'top-model'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				esc_html__('Dark', 'top-model') . '|dark', 
				esc_html__('Light', 'top-model') . '|light', 
				esc_html__('Mac', 'top-model') . '|mac', 
				esc_html__('Metro Black', 'top-model') . '|metro-black', 
				esc_html__('Metro White', 'top-model') . '|metro-white', 
				esc_html__('Parade', 'top-model') . '|parade', 
				esc_html__('Smooth', 'top-model') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'top-model'), 
			'desc' => esc_html__('Sets path for switching windows', 'top-model'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				esc_html__('Vertical', 'top-model') . '|vertical', 
				esc_html__('Horizontal', 'top-model') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'top-model'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'top-model'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'top-model'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'top-model'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'top-model'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'top-model'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'top-model'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'top-model'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'top-model'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'top-model'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'top-model'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'top-model'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				esc_html__('Center', 'top-model') . '|center', 
				esc_html__('Fit', 'top-model') . '|fit', 
				esc_html__('Fill', 'top-model') . '|fill', 
				esc_html__('Stretch', 'top-model') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'top-model'), 
			'desc' => esc_html__('Sets buttons be available or not', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'top-model'), 
			'desc' => esc_html__('Enable the arrow buttons', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'top-model'), 
			'desc' => esc_html__('Sets the fullscreen button', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'top-model'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'top-model'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'top-model'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'top-model'), 
			'desc' => esc_html__('Sets the swipe navigation', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'top-model' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'top-model'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'top-model' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'top-model' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'top-model' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'top-model' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'top-model' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'top-model' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'top-model' . '_error_color', 
			'title' => esc_html__('Text Color', 'top-model'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#292929' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'top-model' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'top-model'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#fcfcfc' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'top-model' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'top-model' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'top-model'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'top-model'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'top-model' . '_error_bg_rep', 
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
			'section' => 'error_section', 
			'id' => 'top-model' . '_error_bg_pos', 
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
			'section' => 'error_section', 
			'id' => 'top-model' . '_error_bg_att', 
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
			'section' => 'error_section', 
			'id' => 'top-model' . '_error_bg_size', 
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
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'top-model' . '_error_search', 
			'title' => esc_html__('Search Line', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'top-model' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'top-model' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'top-model'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'top-model' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'top-model'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'top-model' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'top-model'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'top-model' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'top-model'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'top-model' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'top-model'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'top-model' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'top-model'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'top-model' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'top-model'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'top-model' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'top-model'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'top-model' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'top-model'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'top-model' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'top-model'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

