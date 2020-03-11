<?php
/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version 	1.0.8
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function top_model_theme_fonts() {
	$cmsmasters_option = top_model_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version 	1.0.8
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body,
	.wpcf7-form-control-wrap,
	.post_nav .post_nav_sub,
	.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_subtitle,
	.cmsmasters_open_project .project_details_item .project_details_item_desc, 
	.cmsmasters_open_project .project_details_item .project_details_item_desc a, 
	.cmsmasters_open_project .project_features_item .project_details_item_desc,
	.cmsmasters_open_project .project_features_item .project_details_item_desc a {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_content_font_google_font']) . $cmsmasters_option['top-model' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_content_font_font_style'] . ";
	}
	
	.widget_tag_cloud a {
		font-size:" . $cmsmasters_option['top-model' . '_content_font_font_size'] . "px !important;
	}
	
	.cmsmasters_post_info,
	.cmsmasters_post_footer_info {
		line-height:" . ((int) $cmsmasters_option['top-model' . '_content_font_line_height']) . "px;
		height:" . ((int) $cmsmasters_option['top-model' . '_content_font_line_height']) . "px;
	}
	
	.post_nav > span .post_nav_sub {
		line-height:" . ((int) $cmsmasters_option['top-model' . '_content_font_line_height'] - 6) . "px;
	}
	
	.cmsmasters_project_grid .project_img_wrap .cmsmasters_project_details .project_details_item > div {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_content_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_icon_list_items li:before {
		line-height:" . $cmsmasters_option['top-model' . '_content_font_line_height'] . "px;
	}
	
	@media only screen and (max-width: 768px) {
		body {
			font-size:" . ((int) $cmsmasters_option['top-model' . '_content_font_font_size'] + 1) . "px;
		}
	}
	/* Finish Content Font */


	/* Start Link Font */
	a,
	.subpage_nav > strong,
	.subpage_nav > span,
	.subpage_nav > a {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_link_font_google_font']) . $cmsmasters_option['top-model' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_link_font_text_decoration'] . ";
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option['top-model' . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	
	.navigation .menu-item-mega-container > ul > li > a .nav_title,
	.navigation > li > a {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_nav_title_font_google_font']) . $cmsmasters_option['top-model' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_nav_title_font_text_transform'] . ";
	}
	
	.navigation .menu-item-mega-container > ul > li > a .nav_title {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_nav_title_font_font_size'] - 1) . "px;
		font-weight:normal;
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.header_top,
	.header_top a,
	.navigation ul li a,
	.navigation > li > a .nav_subtitle,
	.navigation > li > a .nav_tag,
	.top_line_nav > li > a,
	.top_line_nav ul li a {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['top-model' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_nav_dropdown_font_text_transform'] . ";
	}
	
	.navigation > li > a .nav_subtitle {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_nav_dropdown_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_nav_dropdown_font_line_height'] - 5) . "px;
	}
	
	.top_line_nav ul li a,
	.top_line_nav > li > a,
	.header_top,
	.header_top a {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_nav_dropdown_font_font_size'] - 2) . "px;
	}
	
	.header_top .meta_wrap > *[class^=\"cmsmasters-icon-\"]:before, 
	.header_top .meta_wrap > *[class*=\" cmsmasters-icon-\"]:before, 
	.header_top .meta_wrap > *[class^=\"cmsmasters_theme_icon_\"]:before, 
	.header_top .meta_wrap > *[class*=\" cmsmasters_theme_icon_\"]:before {
		font-size:" . $cmsmasters_option['top-model' . '_nav_dropdown_font_font_size'] . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		#header .header_mid .search_wrap .search_bar_wrap .search_field input {
			font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['top-model' . '_nav_dropdown_font_system_font'] . ";
			font-size:" . $cmsmasters_option['top-model' . '_nav_dropdown_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['top-model' . '_nav_dropdown_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['top-model' . '_nav_dropdown_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['top-model' . '_nav_dropdown_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['top-model' . '_nav_dropdown_font_text_transform'] . ";
		}
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	.cmsmasters_pricing_table .cmsmasters_currency, 
	.cmsmasters_pricing_table .cmsmasters_price,
	.cmsmasters_pricing_table .cmsmasters_coins,
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_content,
	.cmsmasters_post_timeline .cmsmasters_post_day,
	#header .search_wrap .search_bar_wrap .search_field input,
	.logo .title {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h1_font_google_font']) . $cmsmasters_option['top-model' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_dropcap {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h1_font_google_font']) . $cmsmasters_option['top-model' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['top-model' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_placeholder:before,
	.cmsmasters_quotes_slider_type_box .cmsmasters_quote_header:before,
	blockquote:before,
	.cmsmasters_quotes_grid .cmsmasters_quotes_list:after,
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h1_font_google_font']) . $cmsmasters_option['top-model' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['top-model' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_post_timeline .cmsmasters_post_day {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h1_font_font_size'] + 8) . "px;
	}
	
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_content {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h1_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h1_font_line_height'] + 12) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_currency, 
	.cmsmasters_pricing_table .cmsmasters_price, 
	.cmsmasters_pricing_table .cmsmasters_coins {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h1_font_font_size'] - 6) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h1_font_font_size'] - 6) . "px;
	}
	
	.cmsmasters_quotes_slider_type_box .cmsmasters_quote_header:before {
		font-size:50px; /* static */
		line-height:50px; /* static */
	}
	
	#header .search_wrap .search_bar_wrap .search_field input {
		font-size:60px; /* static */
		line-height:80px; /* static */
	}
	
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_placeholder:before {
		font-size:120px; /* static */
		line-height:170px; /* static */
	}
	
	blockquote:before {
		font-size:50px; /* static */
		line-height:50px; /* static */
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:36px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:20px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h1_font_line_height'] + 15) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option['top-model' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option['top-model' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['top-model' . '_h1_font_line_height'] + 15) . "px;
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.cmsmasters_post_default a .cmsmasters_post_date .published,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_counter, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h2_font_google_font']) . $cmsmasters_option['top-model' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h2_font_text_decoration'] . ";
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h2_font_font_size'] + 16) . "px;
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_image .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h2_font_font_size'] + 4) . "px;
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_counter {
		font-size: 32px;
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.cmsmasters_post_masonry a .cmsmasters_post_date .published,
	.cmsmasters_slider_post a .cmsmasters_slider_post_date .published {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h3_font_google_font']) . $cmsmasters_option['top-model' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h3_font_text_decoration'] . ";
	}
	
	#cancel-comment-reply-link,
	.comment-reply-title,
	.post_comments_title,
	.cmsmasters_single_slider_title,
	.about_author_title {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h3_font_font_size'] - 2) . "px;
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a, 
	.widget .widgettitle,
	.cmsmasters_project_puzzle .cmsmasters_project_header .cmsmasters_project_title a,
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content,
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h4_font_google_font']) . $cmsmasters_option['top-model' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_title {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h4_font_font_size'] + 8) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h4_font_line_height'] + 8) . "px;
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a,
	.share_posts a,
	.widget_rss ul li .rsswidget,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_units,
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_slider_post_read_more,
	.cmsmasters_post_read_more,
	.cmsmasters_tabs .cmsmasters_tabs_list_item a,
	.cmsmasters_puzzle_type a .cmsmasters_post_date .published,
	.cmsmasters_slider_post .cmsmasters_img_rollover .cmsmasters_open_post_link span,
	.cmsmasters_slider_project .cmsmasters_img_rollover .cmsmasters_open_post_link span,
	.cmsmasters_project_grid .cmsmasters_project_read_more,
	.cmsmasters_project_grid .cmsmasters_img_rollover .cmsmasters_open_post_link,
	.cmsmasters_profile .cmsmasters_img_rollover_wrap .cmsmasters_open_post_link span,
	.cmsmasters_open_profile .profile_details, 
	.cmsmasters_open_profile .profile_details a, 
	.cmsmasters_open_profile .profile_features,
	.cmsmasters_open_profile .profile_features a,
	.cmsmasters_open_project .project_details_item, 
	.cmsmasters_open_project .project_details_item a, 
	.cmsmasters_open_project .project_features_item,
	.cmsmasters_open_project .project_features_item a,
	.post_nav a,
	.cmsmasters_table thead th,
	.cmsmasters_table tfoot td {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h5_font_google_font']) . $cmsmasters_option['top-model' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_slider_project .cmsmasters_img_rollover .cmsmasters_open_post_link span,
	.cmsmasters_project_grid .cmsmasters_img_rollover .cmsmasters_open_post_link {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h5_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_table thead th,
	.cmsmasters_table tfoot td {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h5_font_font_size'] - 1) . "px;
		font-weight:normal;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a,
	.cmsmasters_slider_post .cmsmasters_img_rollover .cmsmasters_open_post_link span,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title a {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h5_font_line_height'] - 2) . "px;
	}
	
	.share_posts a,
	.cmsmasters_comment_item .cmsmasters_comment_item_title,
	.cmsmasters_comment_item .cmsmasters_comment_item_title a,
	.cmsmasters_post_read_more,
	.cmsmasters_slider_post_read_more,
	.cmsmasters_open_profile .profile_details, 
	.cmsmasters_open_profile .profile_details a, 
	.cmsmasters_open_profile .profile_features,
	.cmsmasters_open_profile .profile_features a,
	.cmsmasters_open_project .project_details_item, 
	.cmsmasters_open_project .project_details_item a, 
	.cmsmasters_open_project .project_features_item,
	.cmsmasters_open_project .project_features_item a,
	.cmsmasters_project_grid .cmsmasters_project_read_more {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h5_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h5_font_line_height'] - 4) . "px;
	}
	
	.widget_nav_menu ul li a {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h5_font_font_size'] - 5) . "px;
	}
	
	.widget_nav_menu ul li a {
		text-transform:uppercase;
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_units {
		font-weight:normal;
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a,
	.cmsmasters_widget_project_cont_info .cmsmasters_slider_project_category a,
	.cmsmasters_widget_project_cont_info .cmsmasters_slider_project_category,
	.widget_custom_twitter_entries .tweet_time,
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info,
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info a,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info a,
	.cmsmasters_pricing_table .cmsmasters_period,
	.cmsmasters_counters .cmsmasters_counter_title,
	.cmsmasters_toggles .cmsmasters_toggle_title a,
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	.cmsmasters_quote_subtitle_wrap .cmsmasters_quote_subtitle, 
	.cmsmasters_quotes_grid .cmsmasters_quote_subtitle_wrap,
	.cmsmasters_quotes_grid .cmsmasters_quote_subtitle_wrap a,
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_subtitle_wrap a,
	.cmsmasters_quotes_slider_type_box .cmsmasters_quote_subtitle_wrap,
	.cmsmasters_quotes_slider_type_box .cmsmasters_quote_subtitle_wrap a,
	.cmsmasters_archive_item_type,
	.cmsmasters_archive_item_info,
	.cmsmasters_archive_item_info a,
	.cmsmasters_project_puzzle .cmsmasters_project_cont_info,
	.cmsmasters_project_puzzle .cmsmasters_project_cont_info a,
	.cmsmasters_project_grid .cmsmasters_project_category,
	.cmsmasters_project_grid .cmsmasters_project_category a,
	.cmsmasters_open_post > .cmsmasters_post_cont_info .cmsmasters_post_info a span, 
	.post.cmsmasters_puzzle_type .puzzle_post_content_wrapper .cmsmasters_post_footer > span,
	.post.cmsmasters_puzzle_type .puzzle_post_content_wrapper .cmsmasters_post_footer > span a,
	.wpcf7,
	.cmsmasters_wrap_pagination ul li .page-numbers,
	.cmsmasters_post_cont_info .cmsmasters_post_tags,
	.cmsmasters_post_cont_info .cmsmasters_post_tags a,
	.cmsmasters_post_cont_info .cmsmasters_post_author,
	.cmsmasters_post_cont_info .cmsmasters_post_author a,
	.cmsmasters_post_cont_info .cmsmasters_post_category,
	.cmsmasters_post_cont_info .cmsmasters_post_category a {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h6_font_google_font']) . $cmsmasters_option['top-model' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h6_font_text_decoration'] . ";
	}
	
	.wpcf7,
	.cmsmasters_input label,
	.cmsmasters_radio > label,
	.cmsmasters_checkboxes > label,
	.cmsmasters_textarea label,
	.cmsmasters_select label,
	.comment-respond label {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h6_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_open_post > .cmsmasters_post_cont_info .cmsmasters_post_info a span, 
	.cmsmasters_single_slider_item .published {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h6_font_line_height'] - 2) . "px;
	}
	
	.published,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a, 
	.cmsmasters_archive_item_type,
	.cmsmasters_archive_item_info,
	.cmsmasters_archive_item_info a,
	.cmsmasters_counters .cmsmasters_counter_title,
	.cmsmasters_quotes_grid .cmsmasters_quote_subtitle_wrap,
	.cmsmasters_quotes_grid .cmsmasters_quote_subtitle_wrap a,
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info > a,
	.cmsmasters_quote_subtitle_wrap .cmsmasters_quote_subtitle,
	.cmsmasters_quotes_slider_type_center .cmsmasters_quote_subtitle_wrap a,
	.cmsmasters_quotes_slider_type_box .cmsmasters_quote_subtitle_wrap a,
	.cmsmasters_quotes_slider_type_box .cmsmasters_quote_subtitle_wrap a,
	.cmsmasters_widget_project_cont_info .cmsmasters_slider_project_category a,
	.cmsmasters_widget_project_cont_info .cmsmasters_slider_project_category,
	.cmsmasters_post_cont_info .cmsmasters_post_tags,
	.cmsmasters_post_cont_info .cmsmasters_post_tags a,
	.cmsmasters_post_cont_info .cmsmasters_post_author,
	.cmsmasters_post_cont_info .cmsmasters_post_author a,
	.cmsmasters_post_cont_info .cmsmasters_post_category,
	.cmsmasters_post_cont_info .cmsmasters_post_category a,
	.cmsmasters_project_puzzle .cmsmasters_project_cont_info,
	.cmsmasters_project_puzzle .cmsmasters_project_cont_info a,
	.cmsmasters_project_grid .cmsmasters_project_category,
	.cmsmasters_project_grid .cmsmasters_project_category a,
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info,
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info a,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info a {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h6_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h6_font_line_height'] - 4) . "px;
	}
	
	
	.cmsmasters_slider_post .cmsmasters_slider_post_date,
	.cmsmasters_slider_post .cmsmasters_slider_post_date .published {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h6_font_font_size'] - 5) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h6_font_line_height'] - 4) . "px;
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_button_font_google_font']) . $cmsmasters_option['top-model' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_button_font_text_transform'] . ";
	}
	
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a {
		line-height:" . ((int) $cmsmasters_option['top-model' . '_button_font_line_height'] - 2) . "px;
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['top-model' . '_button_font_font_size'] . "px !important;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['top-model' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['top-model' . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small,
	form .formError .formErrorContent {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_small_font_google_font']) . $cmsmasters_option['top-model' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_small_font_text_transform'] . ";
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_small_font_google_font']) . $cmsmasters_option['top-model' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['top-model' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['top-model' . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	.comment-respond label,
	.cmsmasters_input label,
	.cmsmasters_radio > label,
	.cmsmasters_checkboxes > label,
	.cmsmasters_textarea label,
	.cmsmasters_select label,
	input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	textarea,
	select,
	option {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_input_font_google_font']) . $cmsmasters_option['top-model' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['top-model' . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	.cmsmasters_quotes_grid .cmsmasters_quote_content,
	.cmsmasters_quotes_slider_type_box .cmsmasters_quote_content,
	blockquote {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_quote_font_google_font']) . $cmsmasters_option['top-model' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_quote_font_google_font']) . $cmsmasters_option['top-model' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['top-model' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */
	
	/* Stert Underline Text Font */
	.share_posts a,
	.widget_tag_cloud a,
	.cmsmasters_widget_project .cmsmasters_slider_post_read_more,
	ul.navigation > li.menu-item.current-menu-item > a .nav_title, 
	ul.navigation > li.menu-item.current-menu-ancestor > a .nav_title,
	.blog .cmsmasters_post_read_more,
	.cmsmasters_puzzle_type a .cmsmasters_post_date .published,
	.post.cmsmasters_puzzle_type .puzzle_post_content_wrapper .cmsmasters_post_title a,
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover span,
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current span,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title, 
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title a,
	.cmsmasters_slider_post .cmsmasters_slider_post_header .cmsmasters_slider_post_title a,
	.cmsmasters_slider_post .cmsmasters_slider_post_read_more,
	.cmsmasters_slider_post a .cmsmasters_slider_post_date .published,
	.cmsmasters_slider_post .cmsmasters_img_rollover .cmsmasters_open_post_link span,
	.cmsmasters_slider_project .cmsmasters_slider_project_header .cmsmasters_slider_project_title a,
	.cmsmasters_slider_project .cmsmasters_slider_post_read_more,
	.cmsmasters_slider_project .cmsmasters_img_rollover .cmsmasters_open_post_link span,
	.cmsmasters_project_grid .cmsmasters_project_read_more,
	.cmsmasters_project_grid .cmsmasters_img_rollover .cmsmasters_open_post_link span,
	.cmsmasters_project_grid .cmsmasters_project_header .cmsmasters_project_title a,
	.cmsmasters_profile .cmsmasters_img_rollover_wrap .cmsmasters_open_post_link span {
		text-decoration: underline;
	}
	/* Finish Underline Text Font */

/***************** Finish Theme Font Styles ******************/


";



if (CMSMASTERS_WOOCOMMERCE) {

	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/
	
	/* Start Navigation Title Font */
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button span {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_nav_title_font_google_font']) . $cmsmasters_option['top-model' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_nav_title_font_text_transform'] . ";
	}
	/* Finish Navigation Title Font */
	
	/* Start Content Font */
	.cmsmasters_product .button_to_cart,
	.cmsmasters_product .price, 
	.widget_shopping_cart .total, 
	.widget_shopping_cart .total strong, 
	ul.order_details strong, 
	table.order_details .product-name a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong, 
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_content_font_google_font']) . $cmsmasters_option['top-model' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_content_font_font_style'] . ";
	}
	
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.example {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h2_font_google_font']) . $cmsmasters_option['top-model' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.cart_totals > h2,
	div.products > h2,
	.cmsmasters_single_product .price ins,
	.cmsmasters_single_product .product_title {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h3_font_google_font']) . $cmsmasters_option['top-model' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h3_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_product .product_title {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h3_font_font_size'] + 2) . "px;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.cmsmasters_single_product .price,
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td .amount,
	.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	.shop_table.woocommerce-checkout-review-order-table .order-total td span, 
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th, 
	.shop_table.woocommerce-checkout-review-order-table th.product-name, 
	.cart_totals table .cart-subtotal th, 
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .order-total th, 
	.cart_totals td strong > .amount,
	.cart_totals table .order-total .amount,
	.post_comments .post_comments_title,
	.shop_table .product-name a, 
	.shop_table thead th, 
	.shop_table td.cart-subtotal > .amount, 
	.shop_table td.order-total > .amount,
	.shop_table.order_details tfoot tr:first-child th, 
	.shop_table.order_details tfoot tr:first-child td,
	.shop_table.order_details tfoot tr:last-child th, 
	.shop_table.order_details tfoot tr:last-child td,
	.shop_table.order_details tfoot tr th,
	.cart_totals table .shipping th, 
	.cart_totals table .shipping td, 
	.cart_totals table .shipping td a, 
	ul.order_details, 
	.cmsmasters_woo_wrap_result .woocommerce-result-count, 
	.cmsmasters_products .product .woocommerce-loop-category__title,
	.shop_table.order_details tfoot tr td, 
	.shop_attributes th,
	.widget_layered_nav ul li, 
	.widget_layered_nav ul li a, 
	.widget_layered_nav_filters ul li, 
	.widget_layered_nav_filters ul li a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a, 
	.widget_shopping_cart .cart_list a, 
	.widget > .product_list_widget a {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h5_font_google_font']) . $cmsmasters_option['top-model' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h5_font_text_decoration'] . ";
	}
	
	.shop_table .product-name a, 
	.post_comments .post_comments_title {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h5_font_line_height'] - 4) . "px;
	}
	
	.shop_table.order_details tfoot tr td, 
	.shop_table.order_details tfoot tr th,
	.shop_attributes th,
	.cart_totals table .shipping th, 
	.cart_totals table .shipping td, 
	.cart_totals table .shipping td a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a, 
	.widget_shopping_cart .cart_list a, 
	.widget > .product_list_widget a {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h5_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h5_font_line_height'] - 6) . "px;
	}
	
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a:first-child, 
	.widget_shopping_cart .cart_list a:first-child {
		font-style: normal;
	}
	
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.widget > .product_list_widget .reviewer,
	.widget > .product_list_widget .amount, 
	.widget_shopping_cart .cart_list .quantity, 
	.cmsmasters_product .cmsmasters_product_cat, 
	.cmsmasters_product .cmsmasters_product_cat a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity, 
	.cmsmasters_product .price del {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h6_font_google_font']) . $cmsmasters_option['top-model' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_product .price del {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h6_font_font_size'] - 3) . "px;
		text-decoration:line-through;
	}
	
	.widget > .product_list_widget .amount, 
	.widget_shopping_cart .cart_list .quantity,
	.cmsmasters_product .cmsmasters_product_cat, 
	.cmsmasters_product .cmsmasters_product_cat a, 
	.cmsmasters_single_product .product_meta, 
	.cmsmasters_single_product .product_meta a,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h6_font_font_size'] - 3) . "px;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.widget_price_filter .price_slider_amount .button,
	.widget_shopping_cart .buttons .button,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_button_font_google_font']) . $cmsmasters_option['top-model' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_button_font_text_transform'] . ";
	}
	
	.widget_price_filter .price_slider_amount .button,
	.widget_shopping_cart .buttons .button,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_button_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_button_font_line_height'] - 6) . "px;
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */
	
	/* Start Text Fields Font */
	.select2-dropdown {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_input_font_google_font']) . $cmsmasters_option['top-model' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */
	
	/* Stert Underline Text Font */
	.cmsmasters_product .cmsmasters_product_title a,
	.cmsmasters_products .product .woocommerce-loop-category__title {
		text-decoration: underline;
	}
	/* Finish Underline Text Font */

/***************** Finish WooCommerce Font Styles ******************/


";

}


if (CMSMASTERS_EVENTS_CALENDAR) {

	$custom_css .= "
/***************** Start Events Font Styles ******************/

	/* Start Content Font */
	.tribe-events-tooltip,
	.tribe-events-tooltip a,
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a, 
	.tribe-mini-calendar tbody, 
	.tribe-mini-calendar tbody a, 
	.tribe-events-countdown-widget .tribe-countdown-time span, 
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_content_font_google_font']) . $cmsmasters_option['top-model' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_content_font_font_style'] . ";
	}
	
	
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a, 
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_content_font_font_size'] - 1) . "px;
	}
	
	.tribe-mini-calendar tbody, 
	.tribe-mini-calendar tbody a, 
	.tribe-mini-calendar thead th, 
	.tribe-events-grid .column.first > span,
	.tribe-events-grid .tribe-week-grid-hours div,
	.tribe-events-tooltip .description, 
	.tribe-events-widget-link a, 
	.tribe-this-week-events-widget .tribe-events-viewmore a {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_content_font_line_height'] - 6) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start H1 Font */
	.cmsmasters_event_big_day {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h1_font_google_font']) . $cmsmasters_option['top-model' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_event_big_day {
		font-size:70px;
		line-height:58px;
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.cmsmasters_event_day,
	.one_first .cmsmasters_sidebar.sidebar_layout_11 .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .entry-title a,
	.one_first .cmsmasters_sidebar.sidebar_layout_11 .tribe-events-list-widget .tribe-events-list-widget-content-wrap .entry-title a,
	.tribe-mobile-day .tribe-mobile-day-date,
	.tribe-events-countdown-widget .tribe-countdown-time {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h2_font_google_font']) . $cmsmasters_option['top-model' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h2_font_text_decoration'] . ";
	}
	
	.cmsmasters_event_day,
	.tribe-events-single-event-title, 
	.tribe-events-list .tribe-events-list-event-title a {
		font-size:" . ((int)$cmsmasters_option['top-model' . '_h2_font_font_size'] - 2) . "px;
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time {
		font-size:34px;
		line-height:40px;
	}
	
	.cmsmasters_sidebar.sidebar_layout_11 .tribe-events-countdown-widget .tribe-countdown-time {
		font-size:48px;
		line-height:48px;
	}
	
	@media only screen and (min-width: 1440px) {
		.cmsmasters_sidebar.sidebar_layout_11 .tribe-events-countdown-widget .tribe-countdown-time {
			font-size:56px;
			line-height:56px;
		}
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.tribe-events-related-events-title,
	.tribe-events-page-title {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h3_font_google_font']) . $cmsmasters_option['top-model' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h3_font_text_decoration'] . ";
	}
	
	.tribe-events-page-title {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h3_font_font_size'] - 4) . "px;
	}
	
	.tribe-events-related-events-title {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h3_font_font_size'] - 2) . "px;
	}
	
	.tribe-events-photo .tribe-events-list-event-title,
	.tribe-events-photo .tribe-events-list-event-title a {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h3_font_font_size'] + 2) . "px;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.one_first .cmsmasters_sidebar.sidebar_layout_11 .tribe-events-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info,
	.one_first .cmsmasters_sidebar.sidebar_layout_11 .tribe-events-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a,
	.cmsmasters_sidebar.sidebar_layout_11 .tribe-events-countdown-widget .tribe-countdown-text a {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h4_font_google_font']) . $cmsmasters_option['top-model' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h4_font_text_decoration'] . ";
	}
	
	.one_first .cmsmasters_sidebar.sidebar_layout_11 .tribe-events-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info,
	.one_first .cmsmasters_sidebar.sidebar_layout_11 .tribe-events-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h4_font_font_size'] - 2) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.one_first .cmsmasters_sidebar.sidebar_layout_11 .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info .cmsmasters_widget_event_venue_info_loc,
	.one_first .cmsmasters_sidebar.sidebar_layout_11 .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info .cmsmasters_widget_event_venue_info_loc a,
	.tribe-this-week-events-widget .tribe-events-page-title, 
	.tribe-events-venue-widget .vcalendar .entry-title, 
	.tribe-events-venue-widget .vcalendar .entry-title a, 
	.tribe-events-countdown-widget .tribe-countdown-text, 
	.tribe-events-countdown-widget .tribe-countdown-text a,
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title a,
	.tribe-events-grid .tribe-week-event .vevent .entry-title a,
	.tribe-events-list .tribe-events-event-meta .tribe-events-venue-details a,
	.tribe-events-list .tribe-events-event-meta .tribe-events-address,
	.tribe-events-list .tribe-events-event-cost,  
	.cmsmasters_single_event .tribe-events-cost, 
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item .cmsmasters_event_meta_info_item_title, 
	.cmsmasters_event_big_week,
	.tribe-events-list .tribe-events-day-time-slot > h5, 
	.tribe-events-tooltip .entry-title,
	.tribe-events-list .tribe-events-list-separator-month,
	.tribe-bar-filters-inner > div label, 
	table.tribe-events-calendar tbody td .tribe-events-month-event-title, 
	table.tribe-events-calendar tbody td .tribe-events-month-event-title a, 
	.tribe-mobile-day .tribe-events-read-more,
	.tribe-events-venue-widget .tribe-venue-widget-venue-name a {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h5_font_google_font']) . $cmsmasters_option['top-model' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h5_font_text_decoration'] . ";
	}
	
	.one_first .cmsmasters_sidebar.sidebar_layout_11 .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info .cmsmasters_widget_event_venue_info_loc,
	.one_first .cmsmasters_sidebar.sidebar_layout_11 .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info .cmsmasters_widget_event_venue_info_loc a,
	.tribe-events-venue-widget .tribe-venue-widget-venue-name a,
	.tribe-this-week-events-widget .tribe-events-page-title, 
	.tribe-events-list .tribe-events-event-meta .tribe-events-venue-details a,
	.tribe-events-list .tribe-events-event-meta .tribe-events-address,
	.tribe-events-venue-widget .vcalendar .entry-title, 
	.tribe-events-venue-widget .vcalendar .entry-title a, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title a,
	ul.tribe-related-events .tribe-related-events-title a,
	.tribe-events-tooltip .entry-title,
	.tribe-mini-calendar-list-wrapper .entry-title,
	.tribe-mini-calendar-list-wrapper .entry-title a {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h5_font_line_height'] - 4) . "px;
	}
	
	.widget .vcalendar .entry-title, 
	.widget .vcalendar .entry-title a, 
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item .cmsmasters_event_meta_info_item_title {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h5_font_line_height'] - 2) . "px;
	}
	
	.tribe-this-week-events-widget .tribe-this-week-event .entry-title,
	.tribe-this-week-events-widget .tribe-this-week-event .entry-title a,
	.tribe-events-grid .tribe-week-event .vevent .entry-title a,
	table.tribe-events-calendar tbody td .tribe-events-month-event-title, 
	table.tribe-events-calendar tbody td .tribe-events-month-event-title a {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h5_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h5_font_line_height'] - 6) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-under,
	.tribe-events-organizer .cmsmasters_events_organizer_header_right a, 
	#tribe-events-content > .tribe-events-button, 
	table.tribe-events-calendar tbody td .tribe-events-viewmore a, 
	.tribe-mobile-day .tribe-events-event-schedule-details, 
	.tribe-mobile-day .tribe-event-schedule-details {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_h6_font_google_font']) . $cmsmasters_option['top-model' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['top-model' . '_h6_font_text_decoration'] . ";
	}
	
	#tribe-events-content > .tribe-events-button,
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-under, 
	.tribe-events-tooltip .duration .published,
	table.tribe-events-calendar tbody td .tribe-events-viewmore a {
		font-size:" . ((int) $cmsmasters_option['top-model' . '_h6_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['top-model' . '_h6_font_line_height'] - 6) . "px;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.cmsmasters_sidebar.sidebar_layout_11 .tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-under,
	.tribe-events-grid .tribe-grid-header span,
	table.tribe-events-calendar thead th, 
	#tribe-bar-views .tribe-bar-views-list li, 
	#tribe-bar-views .tribe-bar-views-list li a {
		font-family:" . top_model_get_google_font($cmsmasters_option['top-model' . '_button_font_google_font']) . $cmsmasters_option['top-model' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['top-model' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['top-model' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['top-model' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['top-model' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['top-model' . '_button_font_text_transform'] . ";
	}
	
	.cmsmasters_sidebar.sidebar_layout_11 .tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-under,
	.tribe-events-grid .tribe-grid-header span,
	table.tribe-events-calendar thead th {
		line-height:20px;
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */
	
	/* Stert Underline Text Font */
	ul.tribe-related-events .tribe-related-events-title a,
	#tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a, 
	#tribe-bar-views .tribe-bar-views-list li a:hover {
		text-decoration: underline;
	}
	/* Finish Underline Text Font */ 

/***************** Finish Events Font Styles ******************/


";

}


	return apply_filters('top_model_theme_fonts_filter', $custom_css);
}

