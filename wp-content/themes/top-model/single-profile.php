<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.0
 * 
 * Single Profile Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = top_model_get_global_options();


$cmsmasters_profile_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_profile_sharing_box', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div class="middle_content entry" >';


if (have_posts()) : the_post();
	echo '<div class="profiles opened-article">' . "\n";
	
	
	get_template_part('framework/postType/profile/post/standard');
	
	
	if ($cmsmasters_profile_sharing_box == 'true') {
		top_model_sharing_box();
	}
	
	
	if ($cmsmasters_option['top-model' . '_profile_post_nav_box']) {
		top_model_prev_next_posts();
	}
	
	
	comments_template(); 
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

