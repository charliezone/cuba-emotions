/**
 * @package 	WordPress
 * @subpackage 	Top Model
 * @version		1.0.0
 * 
 * Instagram Feed Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */


/**
 * Instagram Feed
 */
cmsmastersShortcodes.cmsmasters_instagram_feed = {
	title : 	cmsmasters_instagram_feed_shortcodes.instagram_feed_title, 
	icon : 		'admin-icon-image', 
	pair : 		false, 
	content : 	false, 
	visual : 	false, 
	multiple : 	false, 
	def : 		'', 
	fields : { 
		// Id
		id : { 
			type : 		'input', 
			title : 	cmsmasters_instagram_feed_shortcodes.id_instagram_feed_title, 
			descr : 	cmsmasters_instagram_feed_shortcodes.id_instagram_feed_descr, 
			def : 		'', 
			required : 	false, 
			width : 	'half' 
		} 
	} 
};

