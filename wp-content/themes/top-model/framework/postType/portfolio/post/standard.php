<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.8
 * 
 * Standard Project Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = top_model_get_global_options();


$cmsmasters_project_title = get_post_meta(get_the_ID(), 'cmsmasters_project_title', true);

$cmsmasters_project_features = get_post_meta(get_the_ID(), 'cmsmasters_project_features', true);


$cmsmasters_project_link_text = get_post_meta(get_the_ID(), 'cmsmasters_project_link_text', true);
$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);
$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$cmsmasters_project_details_title = get_post_meta(get_the_ID(), 'cmsmasters_project_details_title', true);


$cmsmasters_project_features_one_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one_title', true);
$cmsmasters_project_features_one = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one', true);

$cmsmasters_project_features_two_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two_title', true);
$cmsmasters_project_features_two = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two', true);

$cmsmasters_project_features_three_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three_title', true);
$cmsmasters_project_features_three = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three', true);


$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_project_images', true))));


$project_details = '';

if (
	$cmsmasters_option['top-model' . '_portfolio_project_like'] || 
	$cmsmasters_option['top-model' . '_portfolio_project_date'] || 
	$cmsmasters_option['top-model' . '_portfolio_project_cat'] || 
	$cmsmasters_option['top-model' . '_portfolio_project_comment'] || 
	$cmsmasters_option['top-model' . '_portfolio_project_author'] || 
	$cmsmasters_option['top-model' . '_portfolio_project_tag'] || 
	$cmsmasters_option['top-model' . '_portfolio_project_link'] ||
	(
		!empty($cmsmasters_project_features[0][0]) && 
		!empty($cmsmasters_project_features[0][1])
	) || (
		!empty($cmsmasters_project_features[1][0]) && 
		!empty($cmsmasters_project_features[1][1])
	)
) {
	$project_details = 'true';
}


$project_sidebar = '';

if (
$project_details == 'true' || 
	(
		!empty($cmsmasters_project_features_one[0][0]) && 
		!empty($cmsmasters_project_features_one[0][1])
	) || (
		!empty($cmsmasters_project_features_one[1][0]) && 
		!empty($cmsmasters_project_features_one[1][1])
	) || (
		!empty($cmsmasters_project_features_two[0][0]) && 
		!empty($cmsmasters_project_features_two[0][1])
	) || (
		!empty($cmsmasters_project_features_two[1][0]) && 
		!empty($cmsmasters_project_features_two[1][1])
	) || (
		!empty($cmsmasters_project_features_three[0][0]) && 
		!empty($cmsmasters_project_features_three[0][1])
	) || (
		!empty($cmsmasters_project_features_three[1][0]) && 
		!empty($cmsmasters_project_features_three[1][1])
	)
) {
	$project_sidebar = 'true';
}


?>

<!--_________________________ Start Standard Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_project'); ?>>
	<?php
	
	if ($cmsmasters_project_title == 'true') {
		echo '<header class="cmsmasters_project_header entry-header">';
			top_model_project_title_nolink(get_the_ID(), 'h2');
		echo '</header>';
	}
	
	if (!post_password_required()) {
		if (sizeof($cmsmasters_project_images) > 1) {
				echo '<div' . 
					' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
					' class="cmsmasters_owl_slider"' . 
					' data-pagination="false"' . 
				'>';
				foreach ($cmsmasters_project_images as $cmsmasters_project_image) {
					$image_atts = wp_prepare_attachment_for_js(strstr($cmsmasters_project_image, '|', true));
					
					
					echo '<div class="cmsmasters_owl_slider_item">' . 
						'<figure>' . 
							wp_get_attachment_image(strstr($cmsmasters_project_image, '|', true), 'cmsmasters-full-masonry-thumb', false, array( 
								'class' => 'full-width', 
								'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsmasters_title(get_the_ID(), false), 
								'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false) 
							)) . 
						'</figure>' . 
					'</div>';
				}
			echo '</div>';
		} elseif (sizeof($cmsmasters_project_images) == 1 && $cmsmasters_project_images[0] != '') {
			top_model_thumb(get_the_ID(), 'cmsmasters-full-masonry-thumb', false, 'img_' . get_the_ID(), true, true, false, true, $cmsmasters_project_images[0]);
		} elseif (has_post_thumbnail()) {
			top_model_thumb(get_the_ID(), 'cmsmasters-full-masonry-thumb', false, 'img_' . get_the_ID(), true, true, false, true, false);
		}
	}
	
	
	echo '<div class="project_content' . (($project_sidebar == 'true') ? ' with_sidebar' : '') . '">';
		
		if (get_the_content() != '') {
			echo '<div class="cmsmasters_project_content entry-content">' . "\n";
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav" >' . '<strong>' . esc_html__('Pages', 'top-model') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => '<span>', 
					'link_after' => '</span>' 
				));
				
			echo '</div>';
		}
		
	echo '</div>';
	
	
	if ($project_sidebar == 'true') {
		echo '<div class="project_sidebar">';
			
			if ($project_details == 'true') {
				if ($cmsmasters_project_details_title != '') {
					echo '<h4 class="project_details_title">' . esc_html($cmsmasters_project_details_title) . '</h4>';
				}
				
				echo '<div class="project_details entry-meta">';
					
					top_model_get_project_likes('post');
					
					top_model_get_project_comments('post');
					
					top_model_get_project_author('post');
					
					top_model_get_project_date('post');
					
					top_model_get_project_category(get_the_ID(), 'pj-categs', 'post');
					
					top_model_get_project_tags(get_the_ID(), 'pj-tags');
					
					top_model_get_project_features('details', $cmsmasters_project_features, false, 'h4', true);
					
					top_model_project_link($cmsmasters_project_link_text, $cmsmasters_project_link_url, $cmsmasters_project_link_target);
					
				echo '</div>';
			}
			
			
			top_model_get_project_features('features', $cmsmasters_project_features_one, $cmsmasters_project_features_one_title, 'h4', true);
			
			top_model_get_project_features('features', $cmsmasters_project_features_two, $cmsmasters_project_features_two_title, 'h4', true);
			
			top_model_get_project_features('features', $cmsmasters_project_features_three, $cmsmasters_project_features_three_title, 'h4', true);
			
		echo '</div>';
	}
	?>
</article>
<!--_________________________ Finish Standard Project _________________________ -->

