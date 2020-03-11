<?php 
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.0
 * 
 * Admin Panel Post, Project, Profile
 * Created by CMSMasters
 * 
 */


function top_model_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'top-model');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'top-model');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'top-model');
	}
	
	
	return $tabs;
}


function top_model_options_single_sections() {
	$tab = top_model_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'top-model');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'top-model');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'top-model');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function top_model_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = top_model_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'top-model'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'top-model') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_post_share_box', 
			'title' => esc_html__('Sharing Box', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'top-model'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'popular', 
			'choices' => array( 
				esc_html__('Show Related Posts', 'top-model') . '|related', 
				esc_html__('Show Popular Posts', 'top-model') . '|popular', 
				esc_html__('Show Recent Posts', 'top-model') . '|recent', 
				esc_html__('Hide More Posts Box', 'top-model') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'top-model'), 
			'desc' => esc_html__('posts', 'top-model'), 
			'type' => 'number', 
			'std' => '3', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'top-model' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'top-model'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'top-model'), 
			'type' => 'number', 
			'std' => '1', 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'top-model'), 
			'desc' => esc_html__('Enter a project details block title', 'top-model'), 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'top-model'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'popular', 
			'choices' => array( 
				esc_html__('Show Related Projects', 'top-model') . '|related', 
				esc_html__('Show Popular Projects', 'top-model') . '|popular', 
				esc_html__('Show Recent Projects', 'top-model') . '|recent', 
				esc_html__('Hide More Projects Box', 'top-model') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'top-model'), 
			'desc' => esc_html__('projects', 'top-model'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'top-model'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'top-model'), 
			'type' => 'number', 
			'std' => '1', 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'top-model'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'top-model'), 
			'type' => 'text', 
			'std' => 'project', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'top-model'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'top-model'), 
			'type' => 'text', 
			'std' => 'pj-categs', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'top-model' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'top-model'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'top-model'), 
			'type' => 'text', 
			'std' => 'pj-tags', 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'top-model' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'top-model' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'top-model'), 
			'desc' => esc_html__('Enter a profile details block title', 'top-model'), 
			'type' => 'text', 
			'std' => 'Profile details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'top-model' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'top-model' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'top-model' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'top-model' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'top-model' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'top-model'), 
			'desc' => esc_html__('show', 'top-model'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'top-model' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'top-model'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'top-model'), 
			'type' => 'text', 
			'std' => 'profile', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'top-model' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'top-model'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'top-model'), 
			'type' => 'text', 
			'std' => 'pl-categs', 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return $options;
}

