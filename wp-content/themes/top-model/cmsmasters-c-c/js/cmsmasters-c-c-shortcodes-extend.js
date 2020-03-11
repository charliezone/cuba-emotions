/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.0
 * 
 * Visual Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */
 


/**
 * Blog Extend
 */

var blog_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_blog.fields) {
	if (id === 'filter_text') { 
		delete cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else {
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_blog.fields = blog_new_fields;



/**
 * Portfolio Extend
 */

var portfolio_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {
	if (id === 'columns') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = '3';
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'metadata_grid') {
		
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['more'] = cmsmasters_shortcodes.choice_more;
		
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['info'] = composer_shortcodes_extend.choice_info;
		
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = 'title,excerpt,categories,rollover,more,info';
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'metadata_puzzle') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = 'title,categories,comments,likes';
		
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['rollover'];
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else {
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_portfolio.fields = portfolio_new_fields;



/**
 * Quotes Extend
 */

var quotes_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_quotes.fields) {
	if (id === 'mode') {
		quotes_new_fields[id] = cmsmastersShortcodes.cmsmasters_quotes.fields[id];
		
		
		quotes_new_fields['type'] = { 
			type : 		'radio', 
			title : 	composer_shortcodes_extend.quotes_field_slider_type_title, 
			descr : 	composer_shortcodes_extend.quotes_field_slider_type_descr, 
			def : 		'box', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'box' : 	composer_shortcodes_extend.quotes_field_type_choice_box, 
						'center' : 	composer_shortcodes_extend.quotes_field_type_choice_center 
			}, 
			depend : 	'mode:slider' 
		};
	} else {
		quotes_new_fields[id] = cmsmastersShortcodes.cmsmasters_quotes.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_quotes.fields = quotes_new_fields;



/**
 * Posts Slider Extend
 */

var cmsmasters_posts_slider_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
	if (id === 'blog_metadata') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['def'] = 'title,excerpt,date,categories,author,comments,likes,more';
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'portfolio_metadata') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['def'] = 'title,excerpt,categories,more';
		
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises']['more'] = cmsmasters_shortcodes.choice_more;
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else {
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = cmsmasters_posts_slider_new_fields;

