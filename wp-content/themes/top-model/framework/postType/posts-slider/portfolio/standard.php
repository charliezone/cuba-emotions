<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.0
 * 
 * Posts Slider Standard Project Format Template
 * Created by CMSMasters
 * 
 */




$cmsmasters_metadata = explode(',', $cmsmasters_project_metadata);

$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && top_model_slider_post_check_exc_cont('project')) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && in_array('categories', $cmsmasters_metadata)) ? true : false;
$comments = (comments_open() && in_array('comments', $cmsmasters_metadata)) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);

?>

<!--_________________________ Start Standard Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_project'); ?>>
	<div class="cmsmasters_slider_project_outer">
	<?php 
		echo '<div class="project_img_wrap">';
		
		top_model_thumb_rollover(get_the_ID(), 'cmsmasters-project-grid-thumb', false, true, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, false,  'cmsmasters_theme_icon_image', 'Portfolio');
		
		echo '</div>';
		
		
		if ($title || $categories || $excerpt || $likes || $comments || $more) {
			echo '<div class="cmsmasters_slider_project_inner">';
				
				if ($categories) {
					echo '<div class="cmsmasters_slider_project_cont_info entry-meta">';
						
						top_model_get_slider_post_category(get_the_ID(), 'pj-categs', 'project');
						
					echo '</div>';
				}
				
				
				$title ? top_model_slider_post_heading(get_the_ID(), 'project', 'h5', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url) : '';
				
				$excerpt ? top_model_slider_post_exc_cont('project') : '';
				
				$more ? top_model_slider_post_more(get_the_ID(), 'project') : '';
				
				
				if ($likes || $comments) {
					echo '<footer class="cmsmasters_slider_project_footer entry-meta">';
						
						($likes) ? top_model_slider_post_like('project') : '';
						
						($comments) ? top_model_get_slider_post_comments('project') : '';
						
					echo '</footer>';
				}
				
			echo '</div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Standard Project _________________________ -->

