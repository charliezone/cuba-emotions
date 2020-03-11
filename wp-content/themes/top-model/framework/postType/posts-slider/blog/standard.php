<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.0
 * 
 * Posts Slider Standard Post Format Template
 * Created by CMSMasters
 * 
 */




$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);

$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && top_model_slider_post_check_exc_cont('post')) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_post'); ?>>
	<div class="cmsmasters_slider_post_outer">
	<?php
		echo '<div class="cmsmasters_slider_post_img_wrap">';
			top_model_thumb_rollover(get_the_ID(), 'cmsmasters-square-thumb', false, true, false, false, false, false, false, false, true, false, false, false, 'cmsmasters_theme_icon_image', 'Post');
		echo '</div>';
		
		
		if ($author || $categories || $date || $title || $excerpt || $more || $likes || $comments) {
		echo '<div class="cmsmasters_slider_post_inner">';
		
			if ($author || $categories || $date) {
				echo '<div class="cmsmasters_slider_post_cont_info_wrap">';
					
					
					if ($author || $categories) {
						echo '<div class="cmsmasters_slider_post_cont_info entry-meta">';
							
							$author ? top_model_get_slider_post_author('post') : '';
							
							$categories ? top_model_get_slider_post_category(get_the_ID(), 'category', 'post') : '';
							
						echo '</div>';
					}
					
					$date ? top_model_get_slider_post_date('post') : '';
					
				echo '</div>';
			}
			
			$title ? top_model_slider_post_heading(get_the_ID(), 'post', 'h3') : '';
			
			$excerpt ? top_model_slider_post_exc_cont('post') : '';
			
			if ($more || $likes || $comments) {
				echo '<footer class="cmsmasters_slider_post_footer entry-meta">';
				
					$more ? top_model_slider_post_more(get_the_ID()) : '';
					
					if ($likes || $comments) {
						echo '<div class="cmsmasters_slider_post_footer_social">';
						
							$likes ? top_model_slider_post_like('post') : '';
						
							$comments ? top_model_get_slider_post_comments('post') : '';
							
						echo '</div>';
					}
					
				echo '</footer>';
			}
		echo '</div>';
		}
		
	?>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

