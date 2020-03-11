<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.0
 * 
 * Blog Page Default Audio Post Format Template
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


$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);

?>

<!--_________________________ Start Audio Article _________________________ -->

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
		
		
		if (!post_password_required() && !empty($cmsmasters_post_audio_links) && sizeof($cmsmasters_post_audio_links) > 0) {
			$attrs = array(
				'preload' => 'none'
			);
			
			
			foreach ($cmsmasters_post_audio_links as $cmsmasters_post_audio_link_url) {
				$attrs[substr(strrchr($cmsmasters_post_audio_link_url, '.'), 1)] = $cmsmasters_post_audio_link_url;
			}
			
			
			echo '<div class="cmsmasters_audio cmsmasters_post_media">' . 
				wp_audio_shortcode($attrs) . 
			'</div>';
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
<!--_________________________ Finish Audio Article _________________________ -->

