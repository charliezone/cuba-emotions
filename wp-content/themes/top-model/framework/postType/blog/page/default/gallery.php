<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.0
 * 
 * Blog Page Default Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));


?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_default'); ?>>
	<div class="cmsmasters_post_cont">
	<?php
		$date ? top_model_get_post_date('page', 'default') : '';
		
		top_model_post_heading(get_the_ID(), 'h2');
		
		
		if ($author || $categories) {
			echo '<div class="cmsmasters_post_cont_info entry-meta">';
				
				$author ? top_model_get_post_author('page') : '';
				
				$categories ? top_model_get_post_category(get_the_ID(), 'category', 'page') : '';
				
			echo '</div>';
		}
		
		if (!post_password_required()) {
			if (sizeof($cmsmasters_post_images) > 1) {
				echo '<div' . 
					' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
					' class="cmsmasters_owl_slider"' . 
					' data-pagination="false"' . 
					' data-auto-height="false"' . 
				'>';
				
						foreach ($cmsmasters_post_images as $cmsmasters_post_image) {
							$image_atts = wp_prepare_attachment_for_js(strstr($cmsmasters_post_image, '|', true));
							
							
							echo '<div class="cmsmasters_owl_slider_item">' . 
								'<figure>' . 
									wp_get_attachment_image(strstr($cmsmasters_post_image, '|', true), 'post-thumbnail', false, array( 
										'class' => 	'full-width', 
										'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsmasters_title(get_the_ID(), false), 
										'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false) 
									)) . 
								'</figure>' . 
							'</div>';
						}
					echo '</div>';
			} elseif (sizeof($cmsmasters_post_images) == 1 && $cmsmasters_post_images[0] != '') {
				top_model_thumb(get_the_ID(), 'post-thumbnail', false, 'img_' . get_the_ID(), true, true, true, true, $cmsmasters_post_images[0]);
			} elseif (has_post_thumbnail()) {
				top_model_thumb(get_the_ID(), 'post-thumbnail', false, 'img_' . get_the_ID(), true, true, true, true, false);
			}
		}
		
		
		top_model_post_exc_cont();
		
		
		if ($more || $likes || $comments) {
			echo '<footer class="cmsmasters_post_footer entry-meta">';
				
				$more ? top_model_post_more(get_the_ID()) : '';
				
				if ($likes || $comments) {
					echo '<div class="cmsmasters_post_info entry-meta">';
					
					$likes ? top_model_get_post_likes('page') : '';
					
					$comments ? top_model_get_post_comments('page') : '';
					
					echo '</div>';
				}
				
			echo '</footer>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

