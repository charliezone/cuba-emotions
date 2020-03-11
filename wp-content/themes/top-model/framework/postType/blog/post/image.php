<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.9
 * 
 * Blog Post Image Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = top_model_get_global_options();


$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);

$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);


list($cmsmasters_layout) = top_model_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-masonry-thumb';
} else {
	$cmsmasters_image_thumb_size = 'cmsmasters-masonry-thumb';
}

$cmsmasters_heading = get_post_meta(get_the_ID(), 'cmsmasters_heading', true);

?>

<!--_________________________ Start Image Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
	if (
		$cmsmasters_option['top-model' . '_blog_post_tag'] || 
		$cmsmasters_option['top-model' . '_blog_post_author'] || 
		$cmsmasters_option['top-model' . '_blog_post_cat'] ||
		$cmsmasters_option['top-model' . '_blog_post_date']
	) {
		echo '<div class="cmsmasters_post_cont_info_wrap entry-meta">';
			
			if (
				$cmsmasters_option['top-model' . '_blog_post_tag'] || 
				$cmsmasters_option['top-model' . '_blog_post_author'] || 
				$cmsmasters_option['top-model' . '_blog_post_cat']
			) {
			echo '<div class="cmsmasters_post_cont_info entry-meta">';
			
				top_model_get_post_author('post');
				
				top_model_get_post_category(get_the_ID(), 'category', 'post');
				
				top_model_get_post_tags();

			echo '</div>';
			}
	
			top_model_get_post_date('post');
			
		echo '</div>';
	}
	
	
	if ($cmsmasters_post_title == 'true' && $cmsmasters_heading == 'disabled') {
		top_model_post_title_nolink(get_the_ID(), 'h2');
	}
	
	
	if (!post_password_required()) {
		if ($cmsmasters_post_image_link != '') {
			top_model_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'img_' . get_the_ID(), false, false, false, true, $cmsmasters_post_image_link);
		} elseif (has_post_thumbnail()) {
			top_model_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'img_' . get_the_ID(), false, false, false, true, false);
		}
	}
	
	
	if (get_the_content() != '') {
		echo '<div class="cmsmasters_post_content entry-content">';
			
			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav" >' . '<strong>' . esc_html__('Pages', 'top-model') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => ' <span> ', 
				'link_after' => ' </span> ' 
			));
			
		echo '</div>';
	}
	
	if (
		$cmsmasters_option['top-model' . '_blog_post_like'] || 
		$cmsmasters_option['top-model' . '_blog_post_comment'] 
	) {
		echo '<div class="cmsmasters_post_info">';
			
			top_model_get_post_likes('post');
			
			top_model_get_post_comments('post');
			
		echo '</div>';
	}
	?>
</article>
<!--_________________________ Finish Image Article _________________________ -->

