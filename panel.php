<?php


if(!class_exists('dcoptions')) :

// DEFINE PLUGIN ID
define('dcoptions_ID', 'pbp-dashboard-changer');
// DEFINE PLUGIN NICK
define('dcoptions_NICK', 'PBP Dashboard Changer');

    class dcoptions
    {
		/** function/method
		* Usage: return absolute file path
		* Arg(1): string
		* Return: string
		*/
		public static function file_path($file)
		{
			return ABSPATH.'wp-content/plugins/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).$file;
		}
		/** function/method
		* Usage: hooking the plugin options/settings
		* Arg(0): null
		* Return: void
		*/
		public static function register()
		{
			register_setting(dcoptions_ID.'_options', 'pbp_screen_options' );
			register_setting(dcoptions_ID.'_options', 'pbp_help_tab' );
			register_setting(dcoptions_ID.'_options', 'pbp_right_now' );
			register_setting(dcoptions_ID.'_options', 'pbp_recent_comments' );
			register_setting(dcoptions_ID.'_options', 'pbp_recent_drafts' );
			register_setting(dcoptions_ID.'_options', 'pbp_remove_plugins' );
			register_setting(dcoptions_ID.'_options', 'pbp_incoming_links' );
			register_setting(dcoptions_ID.'_options', 'pbp_remove_quickpress' );
			register_setting(dcoptions_ID.'_options', 'pbp_remove_wpblog' );
			register_setting(dcoptions_ID.'_options', 'pbp_other_wp_news' );
			register_setting(dcoptions_ID.'_options', 'pbp_remove_admin_bar' );
			register_setting(dcoptions_ID.'_options', 'pbp_remove_wp_logo' );
			register_setting(dcoptions_ID.'_options', 'pbp_remove_about_wplink' );
			register_setting(dcoptions_ID.'_options', 'pbp_remove_wporg_link' );
			register_setting(dcoptions_ID.'_options', 'pbp_remove_doc_link' );
			register_setting(dcoptions_ID.'_options', 'pbp_remove_support_link' );
			register_setting(dcoptions_ID.'_options', 'pbp_remove_feedback_link' );
			register_setting(dcoptions_ID.'_options', 'pbp_login_logo' );
			register_setting(dcoptions_ID.'_options', 'pbp_custom_reg_message' );
			register_setting(dcoptions_ID.'_options', 'pbp_custom_login_message' );
			register_setting(dcoptions_ID.'_options', 'bdc_ip_lock_enable' );
			register_setting(dcoptions_ID.'_options', 'pbp_post_views' );
			register_setting(dcoptions_ID.'_options', 'pbp_view_in_editor' );
			register_setting(dcoptions_ID.'_options', 'pbp_post_view_pos' );
		}
		/** function/method
		* Usage: hooking (registering) the plugin menu
		* Arg(0): null
		* Return: void
		*/
		public static function menu()
		{
			// Create menu tab
			add_options_page('PBP Dashboard Changer', 'PBP DB Changer', 'manage_options', dcoptions_ID, array('dcoptions', 'options_page'));
		}
		/** function/method
		* Usage: show options/settings form page
		* Arg(0): null
		* Return: void
		*/
		public static function options_page()
		{ 
			if (!current_user_can('manage_options')) 
			{
				wp_die( __('You do not have sufficient permissions to access this page.') );
			}
			
			$plugin_id = dcoptions_ID;
			
			// display options page
			include(self::file_path('options.php'));
		}
		/** function/method
		* Usage: filtering the content
		* Arg(1): string
		* Return: string
		*/
    }
	
	if ( is_admin() )
	{
		add_action('admin_init', array('dcoptions', 'register'));
		add_action('admin_menu', array('dcoptions', 'menu'));
	}

endif;


function pbp_script() {

wp_enqueue_style('pbp_style',plugins_url( '/style.css' , __FILE__ ));
wp_enqueue_script('jquery');
wp_enqueue_script('pbp_uploader',plugins_url( '/upload.js' , __FILE__ ));
wp_enqueue_style( 'thickbox' );
wp_enqueue_script( 'thickbox' );
wp_enqueue_script( 'media-upload' );
wp_enqueue_script('pbp_custom_scripts',plugins_url( '/db-customize.js' , __FILE__ ));

}
add_action('admin_init', 'pbp_script');


?>