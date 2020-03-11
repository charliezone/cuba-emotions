<?php 
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.0
 * 
 * Content Editor Additionals
 * Created by CMSMasters
 * 
 */


function top_model_change_mce_options($initArray) {
    $ext = 'pre[id|name|class|style], iframe[align|longdesc|name|width|height|frameborder|scrolling|marginheight|marginwidth|src]';
    
	
    if (isset($initArray['extended_valid_elements'])) {
        $initArray['extended_valid_elements'] .= ',' . $ext;
    } else {
        $initArray['extended_valid_elements'] = $ext;
    }
    
	
    return $initArray;
}

add_filter('tiny_mce_before_init', 'top_model_change_mce_options');



function top_model_enable_more_buttons($buttons) {
    $buttons[] = 'fontselect, fontsizeselect, separator, media, separator, sub, sup, separator, hr, separator, anchor, separator, undo, redo';
    
	
    return $buttons;
}

add_filter('mce_buttons_3', 'top_model_enable_more_buttons');



function top_model_change_mce_blockformats_buttons($initArray) {
	$initArray['theme_advanced_blockformats'] = 'p, address, pre, code, h1, h2, h3, h4, h5, h6';
	
	
	return $initArray;
}

add_filter('tiny_mce_before_init', 'top_model_change_mce_blockformats_buttons');



function top_model_wysiwyg_editor($mce_buttons) {
    $pos = array_search('wp_more', $mce_buttons, true);
    
	
    if ($pos !== false) {
        $tmp_buttons = array_slice($mce_buttons, 0, $pos + 1);
		
        $tmp_buttons[] = 'wp_page';
		
        $mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons, $pos + 1));
    }
    
	
    return $mce_buttons;
}

add_filter('mce_buttons', 'top_model_wysiwyg_editor');



function top_model_wysiwyg_editor2($mce_buttons_2) {
    $pos = array_search('forecolor', $mce_buttons_2, true);
    
	
    if ($pos !== false) {
        $tmp_buttons = array_slice($mce_buttons_2, 0, $pos + 1);
		
        $tmp_buttons[] = 'backcolor';
		
        $mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons_2, $pos + 1));
    }
    
	
    return $mce_buttons;
}

add_filter('mce_buttons_2', 'top_model_wysiwyg_editor2');



function top_model_wysiwyg_editor3($mce_buttons_2) {
    $pos = array_search('undo', $mce_buttons_2, true);
    
	
    if ($pos !== false) {
        $tmp_buttons = array_slice($mce_buttons_2, 0, $pos);
		
        $tmp_buttons[] = '';
		
        $mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons_2, $pos + 1));
    }
    
	
    return $mce_buttons;
}

add_filter('mce_buttons_2', 'top_model_wysiwyg_editor3');



function top_model_wysiwyg_editor4($mce_buttons_2) {
    $pos = array_search('redo', $mce_buttons_2, true);
    
	
    if ($pos !== false) {
        $tmp_buttons = array_slice($mce_buttons_2, 0, $pos);
		
        $tmp_buttons[] = '';
		
        $mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons_2, $pos + 1));
    }
    
	
    return $mce_buttons;
}

add_filter('mce_buttons_2', 'top_model_wysiwyg_editor4');

