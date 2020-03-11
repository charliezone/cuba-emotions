<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.1
 * 
 * Portfolio Grid Video Project Format Template
 * Created by CMSMasters
 * 
 */




$cmsmasters_option = top_model_get_global_options(); 
 
$cmsmasters_project_metadata = explode(',', $cmsmasters_pj_metadata);

$title = (in_array('title', $cmsmasters_project_metadata)) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_project_metadata) && top_model_project_check_exc_cont()) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && (in_array('categories', $cmsmasters_project_metadata))) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_project_metadata))) ? true : false;
$likes = (in_array('likes', $cmsmasters_project_metadata)) ? true : false;
$rollover = in_array('rollover', $cmsmasters_project_metadata) ? true : false;
$more = (in_array('more', $cmsmasters_project_metadata)) ? true : false;
$info = (in_array('info', $cmsmasters_project_metadata)) ? true : false;


$cmsmasters_project_features = get_post_meta(get_the_ID(), 'cmsmasters_project_features', true);

$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);

$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);

$project_details = '';

if (
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



$project_sort_categs = get_the_terms(0, 'pj-categs');

$project_categs = '';

if ($project_sort_categs != '') {
	foreach ($project_sort_categs as $project_sort_categ) {
		$project_categs .= ' ' . $project_sort_categ->slug;
	}
	
	$project_categs = ltrim($project_categs, ' ');
}

?>

<!--_________________________ Start Video Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_project_grid'); echo (($project_categs != '') ? ' data-category="' . esc_attr($project_categs) . '"' : '') ?>>
	<div class="project_outer">
	<?php 
		echo '<div class="project_img_wrap">';
		
		top_model_thumb_rollover(get_the_ID(), 'cmsmasters-project-grid-thumb', false, $rollover, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, $cmsmasters_project_link_target, 'cmsmasters_theme_icon_image', 'portfolio');
		
		if (($project_details != '') && ($info != '')) {
			echo '<div class="cmsmasters_project_details entry-meta">';
				$info ? top_model_get_project_features('details', $cmsmasters_project_features, false, 'h5', true) : '';
			echo '</div>';
		}
		
		echo '</div>';
		
		
		if ($categories) {
			echo '<div class="cmsmasters_project_cont_info entry-meta">';
				
				top_model_get_project_category(get_the_ID(), 'pj-categs', 'page');
				
			echo '</div>';
		}
		
		
		$title ? top_model_project_heading(get_the_ID(), 'h5', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, $cmsmasters_project_link_target) : '';
		
		$excerpt ? top_model_project_exc_cont() : '';
		
		
		if ($more || $likes || $comments) {
			echo '<footer class="cmsmasters_project_footer entry-meta">';
				
				$more ? cmsmasters_project_more(get_the_ID()) : '';
				
				
				if ($likes || $comments) {
					echo '<div class="cmsmasters_project_info">';
						
						$likes ? top_model_get_project_likes('page') : '';
						
						$comments ? top_model_get_project_comments('page') : '';
						
					echo '</div>';
				}
				
			echo '</footer>';
		}
		
		
		if (!$title) {
			echo '<div class="dn">';
				top_model_project_heading(get_the_ID(), 'h6');
			echo '</div>';
		}
		
		echo '<span class="dn meta-date">' . get_the_time('YmdHis') . '</span>';
	?>
	</div>
</article>
<!--_________________________ Finish Video Project _________________________ -->

