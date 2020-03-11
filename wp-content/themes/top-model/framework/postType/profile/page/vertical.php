<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.1
 * 
 * Profiles Page Vertical Profile Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

?>

<!--_________________________ Start Vertical Profile _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_profile_vertical'); ?>>
	<div class="profile_outer">
	<?php
	if (has_post_thumbnail()) {
		echo '<div class="cmsmasters_profile_img_wrap">';
			
			top_model_thumb_rollover(get_the_ID(), 'cmsmasters-square-thumb', false, true, false, false, false, false, false, false, true, false, false, false, 'cmsmasters_theme_icon_image', 'profile');
		
		echo '</div>';
	}
	
	
	echo '<div class="profile_inner">';
		
		top_model_profile_heading(get_the_ID(), 'h2', $cmsmasters_profile_subtitle, 'h4');
		
		top_model_profile_social_icons($cmsmasters_profile_social, $profile_id);
		
		echo '<div class="cl"></div>';
		
		top_model_profile_exc_cont();
		
	echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Vertical Profile _________________________ -->

