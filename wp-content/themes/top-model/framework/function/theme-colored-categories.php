<?php 
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.0
 * 
 * Colored Categories
 * Created by CMSMasters
 * 
 */


/* Add Category Color */
function top_model_add_category_color() {
	wp_register_script('top-model-settings-js', get_template_directory_uri() . '/framework/admin/settings/js/cmsmasters-theme-settings.js', array('jquery', 'farbtastic'), '1.0.0', true);
	
	wp_localize_script('top-model-settings-js', 'cmsmasters_setting', array( 
		'palettes' => implode(',', cmsmasters_color_picker_palettes()) 
	));
	
	
	wp_enqueue_script('top-model-settings-js');
	
	?>
	<div class="form-field">
		<label for="term_meta[cmsmasters_cat_color]"><?php esc_html_e('Category Color', 'top-model'); ?></label>
		<input type="text" id="term_meta[cmsmasters_cat_color]" name="term_meta[cmsmasters_cat_color]" value="" class="cmsmasters-color-field" data-alpha="true" data-reset-alpha="true" />
	</div>
	<?php
}



/* Edit Category Color */
function top_model_edit_category_color($term) {
	wp_register_script('top-model-settings-js', get_template_directory_uri() . '/framework/admin/settings/js/cmsmasters-theme-settings.js', array('jquery', 'farbtastic'), '1.0.0', true);
	
	wp_localize_script('top-model-settings-js', 'cmsmasters_setting', array( 
		'palettes' => 			implode(',', cmsmasters_color_picker_palettes()) 
	));
	
	
	wp_enqueue_script('top-model-settings-js');
	
	
	$term_meta = get_term_meta($term->term_id, 'cmsmasters_cat_color', true);
	
	?>
	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="term_meta[cmsmasters_cat_color]"><?php esc_html_e('Category Color', 'top-model'); ?></label>
		</th>
		<td>
			<input type="text" id="term_meta[cmsmasters_cat_color]" name="term_meta[cmsmasters_cat_color]" value="<?php echo (esc_attr($term_meta) ? esc_attr($term_meta) : ''); ?>" class="cmsmasters-color-field" data-alpha="true" data-reset-alpha="true" />
		</td>
	</tr>
	<?php 
}



/* Save Category Color */
function top_model_save_category_color($term_id) {
	if (isset($_POST['term_meta'])) {
		$term_meta = get_term_meta($term_id, 'cmsmasters_cat_color', true);
		
		$cat_keys = array_keys($_POST['term_meta']);
		
		$new_term_meta = '';
		
		
		foreach ($cat_keys as $key) {
			if ($key == 'cmsmasters_cat_color') {
				$new_term_meta = $_POST['term_meta'][$key];
			}
		}
		
		
		if ($new_term_meta != '') {
			if ($term_meta && $term_meta != '') {
				update_term_meta($term_id, 'cmsmasters_cat_color', $new_term_meta);
			} else {
				add_term_meta($term_id, 'cmsmasters_cat_color', $new_term_meta, true);
			}
		}
	}
}



/* Category Color Actions */
add_action('category' . '_add_form_fields', 'top_model_add_category_color', 10, 2);
add_action('pj-categs' . '_add_form_fields', 'top_model_add_category_color', 10, 2);
add_action('pl-categs' . '_add_form_fields', 'top_model_add_category_color', 10, 2);

if (CMSMASTERS_WOOCOMMERCE) {
	add_action('product_cat' . '_add_form_fields', 'top_model_add_category_color', 10, 2);
}

if (CMSMASTERS_EVENTS_CALENDAR) {
	add_action('tribe_events_cat' . '_add_form_fields', 'top_model_add_category_color', 10, 2);
}


add_action('category' . '_edit_form_fields', 'top_model_edit_category_color', 10, 2);
add_action('pj-categs' . '_edit_form_fields', 'top_model_edit_category_color', 10, 2);
add_action('pl-categs' . '_edit_form_fields', 'top_model_edit_category_color', 10, 2);

if (CMSMASTERS_WOOCOMMERCE) {
	add_action('product_cat' . '_edit_form_fields', 'top_model_edit_category_color', 10, 2);
}

if (CMSMASTERS_EVENTS_CALENDAR) {
	add_action('tribe_events_cat' . '_edit_form_fields', 'top_model_edit_category_color', 10, 2);
}


add_action('edited_' . 'category', 'top_model_save_category_color', 10, 2);  
add_action('create_' . 'category', 'top_model_save_category_color', 10, 2);
add_action('edited_' . 'pj-categs', 'top_model_save_category_color', 10, 2);  
add_action('create_' . 'pj-categs', 'top_model_save_category_color', 10, 2);
add_action('edited_' . 'pl-categs', 'top_model_save_category_color', 10, 2);  
add_action('create_' . 'pl-categs', 'top_model_save_category_color', 10, 2);

if (CMSMASTERS_WOOCOMMERCE) {
	add_action('edited_' . 'product_cat', 'top_model_save_category_color', 10, 2);
	add_action('create_' . 'product_cat', 'top_model_save_category_color', 10, 2);
}

if (CMSMASTERS_EVENTS_CALENDAR) {
	add_action('edited_' . 'tribe_events_cat', 'top_model_save_category_color', 10, 2);
	add_action('create_' . 'tribe_events_cat', 'top_model_save_category_color', 10, 2);
}



/* Theme Category Styles */
function top_model_theme_category_styles() {
	$out = '';
	
	$args = array( 
		'hide_empty' => false 
	);
	
	$args['taxonomy'] = array('category');
	
	
	if (CMSMASTERS_CONTENT_COMPOSER && CMSMASTERS_PROJECT_COMPATIBLE) {
		$args['taxonomy'][] = 'pj-categs';
	}
	
	if (CMSMASTERS_CONTENT_COMPOSER && CMSMASTERS_PROFILE_COMPATIBLE) {
		$args['taxonomy'][] = 'pl-categs';
	}
	
	if (CMSMASTERS_WOOCOMMERCE) {
		$taxonomies_arr[] = 'product_cat';
	}
	
	if (CMSMASTERS_EVENTS_CALENDAR) {
		$taxonomies_arr[] = 'tribe_events_cat';
	}
	
	if (CMSMASTERS_DONATIONS) {
		$taxonomies_arr[] = 'cp-categs';
	}
	
	if (CMSMASTERS_TIMETABLE) {
		$taxonomies_arr[] = 'events_category';
	}
	
	
	$cats = get_terms($args);
	
	
	if (!empty($cats) && !is_wp_error($cats)) {
		foreach ($cats as $cat) {
			$cat_id = $cat->term_id;
			
			$cat_color = get_term_meta($cat_id, 'cmsmasters_cat_color', true);
			
			
			if (isset($cat_color) && $cat_color != '') {
				$out .= "
	
	a.cmsmasters_cat_{$cat_id} {
		" . cmsmasters_color_css('color', $cat_color) . "
	}	
";
			}
		}
	}
	
	
	wp_add_inline_style('top-model-retina', $out);
}

add_action('wp_enqueue_scripts', 'top_model_theme_category_styles');

