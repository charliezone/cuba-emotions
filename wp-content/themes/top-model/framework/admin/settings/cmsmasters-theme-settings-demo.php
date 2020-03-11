<?php 
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.0
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function top_model_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'top-model');
	$tabs['export'] = esc_attr__('Export', 'top-model');
	
	
	return $tabs;
}


function top_model_options_demo_sections() {
	$tab = top_model_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'top-model');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'top-model');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function top_model_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = top_model_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => 'top-model' . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'top-model'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'top-model'), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => 'top-model' . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'top-model'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file", 'top-model'), 
			'type' => 'button', 
			'std' => esc_html__('Export Theme Settings', 'top-model'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

