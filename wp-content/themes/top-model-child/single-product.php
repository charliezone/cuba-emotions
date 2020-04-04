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

echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div class="middle_content entry" >';


if (have_posts()) : the_post();
	echo '<div class="profiles opened-article">' . "\n";
	
	
	echo the_content();

	echo '<a class="register-cta-btn" href="'.site_url('request-form'.'?subject='.urlencode( 'Product: '.get_the_title() ) ) .'">Send Request</a>';
	 
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

