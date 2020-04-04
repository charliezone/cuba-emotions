<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.9
 * 
 * Single Post Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = top_model_get_global_options();


list($cmsmasters_layout) = top_model_theme_page_layout_scheme();


$cmsmasters_post_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_post_sharing_box', true);

$cmsmasters_post_author_box = get_post_meta(get_the_ID(), 'cmsmasters_post_author_box', true);

$cmsmasters_post_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_post_more_posts', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry" >' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr" >' . "\n\t";
} else {
	echo '<div class="middle_content entry" >';
}


if (have_posts()) : the_post();
	echo '<div class="blog opened-article">' . "\n";
    ?>
        <section class="video-container">
            <?php echo do_shortcode('[cmsmasters_row data_shortcode_id="iy13dfbqer" data_width="boxed" data_top_style="default" data_bot_style="default" data_color="default" data_padding_top="65" data_padding_bottom="50"][cmsmasters_column data_width="1/1"][cmsmasters_videos shortcode_id="h3y8zab0cm" poster="'.pippin_get_image_id(get_field('video_poster')).'|'.get_field('video_poster').'|medium" wrap="true" preload="none" animation_delay="0"][cmsmasters_video shortcode_id="s8f5rczqeg"]22|'.get_field('video').'[/cmsmasters_video][/cmsmasters_videos][/cmsmasters_column][/cmsmasters_row]') ?>
        </section>
        <section class="heading">
            <h1 class="title"><?php the_title() ?></h1>
            <span>from <strong><?php the_field('price') ?></strong> per pax</span>
        </section>
        <section class="post-content"><?php the_field('description') ?></section>
        <section class="request-cta"><a class="register-cta-btn" href="<?php echo site_url('request-form'.'?subject='.urlencode( 'Fashion Tour: '.get_the_title() ) ) ?>">I Want It</a></section>
        <section class="similar-fashion-tours">
            <h2>Similar Fashion Tours</h2>
            <?php
                $post_objects = get_field('similar_fashion_tours');

                if( $post_objects ): ?>
                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <article class="sell-item ce-cpt-profile cmsmasters_profile_horizontal one_third profile type-profile <?php if (has_post_thumbnail()): ?>has-post-thumbnail <?php endif ?> hentry">
                            <?php if (has_post_thumbnail()): ?>
                                <img width="300" height="300" src="<?php the_post_thumbnail_url('medium') ?>" class="full-width wp-post-image" alt="<?php the_title() ?>" title="<?php the_title() ?>" srcset="<?php the_post_thumbnail_url('medium') ?> 300w, <?php the_post_thumbnail_url('thumbnail') ?> 150w, <?php the_post_thumbnail_url('thumbnail') ?> 70w" sizes="(max-width: 300px) 100vw, 300px">
                            <?php endif ?>                                                       
                            <div class="content_inner">
                                <div class="header">
                                    <h1 class="cmsmasters_heading"><?php the_title(); ?></h1>
                                    <span>from <strong><?php the_field('price') ?></strong> $</span>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="register-cta-btn">Got it</a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata();?>
                <?php endif;
            ?>
        </section>
	<?php
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar" >' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar fl" >' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

