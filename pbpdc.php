<?php

/*
	Plugin Name: PBP Dashboard Changer
	Plugin URI: http://projoktibangla.net
	Description: Change & Customize your dashboard & login page easily.
	Version: 2.1
	Author: projoktibangla	
	Author URI: http://projoktibangla.net
	License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/
/*
Copyright (C) 2013  projoktibangla

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

	
require dirname( __FILE__ ) . '/panel.php';


// Custom Register Message

if (get_option('pbp_custom_reg_message')):
function pbp_custom_register_message(){
	echo '<div style="margin:5px 0 15px 0;border:1px solid #e5e5e5;padding:10px">
			<p style="margin:5px 0;">
				'.get_option("pbp_custom_reg_message").'
			</p> 
		</div>';
}
add_action('register_form', 'pbp_custom_register_message');
endif;

// Custom Login Message

if (get_option('pbp_custom_login_message')):
function pbp_custom_login_message(){
	echo '<div style="margin:5px 0 15px 0;border:1px solid #e5e5e5;padding:10px">
			<p style="margin:5px 0;">
				'.get_option("pbp_custom_login_message").'
			</p> 
		</div>';
}
add_action('login_form', 'pbp_custom_login_message');
endif;

// Custom Login Logo

if (get_option('pbp_login_logo')):
function pbp_login_logo(){
	echo'<style type="text/css">
		h1 a { background-image: url("'.get_option('pbp_login_logo').'") !important; }
	</style>';
	}
add_action('login_head', 'pbp_login_logo');
endif;


// Hide Screen Options

if (get_option('pbp_screen_options')):
function pbp_hide_screen_option() {
    echo '<style type="text/css">
          #screen-options-link-wrap {display: none;}
         </style>';
}
add_action('admin_head', 'pbp_hide_screen_option');
endif;


// Hide help Options

if (get_option('pbp_help_tab')):
function pbp_hide_help() {
    echo '<style type="text/css">
           #contextual-help-link-wrap { display: none !important; }
         </style>';
}
add_action('admin_head', 'pbp_hide_help');
endif;


// Remove Quickpress

if (get_option('pbp_remove_quickpress')):
function pbp_remove_quickpress() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
}
add_action('wp_dashboard_setup', 'pbp_remove_quickpress' );
endif;


// Remove Right Now

if (get_option('pbp_right_now')):
function pbp_hide_right_now() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
}
add_action('wp_dashboard_setup', 'pbp_hide_right_now' );
endif;


// Remove Recent Comment

if (get_option('pbp_recent_comments')):
function pbp_hide_recent_comments() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
}
add_action('wp_dashboard_setup', 'pbp_hide_recent_comments' );
endif;


// Remove Recent Drafts

if (get_option('pbp_recent_drafts')):
function pbp_hide_recent_drafts() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
}
add_action('wp_dashboard_setup', 'pbp_hide_recent_drafts' );
endif;

// Remove Plugins

if (get_option('pbp_remove_plugins')):
function pbp_hide_plugins() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
}
add_action('wp_dashboard_setup', 'pbp_hide_plugins' );
endif;


// Remove Incoming Link

if (get_option('pbp_incoming_links')):
function pbp_hide_incoming_links() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
}
add_action('wp_dashboard_setup', 'pbp_hide_incoming_links' );
endif;


// Remove WordPress Blog

if (get_option('pbp_remove_wpblog')):
function pbp_hide_wordpress_blog() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
}
add_action('wp_dashboard_setup', 'pbp_hide_wordpress_blog' );
endif;


// Remove Other WordPress News

if (get_option('pbp_other_wp_news')):
function pbp_hide_other_wpnews() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'pbp_hide_other_wpnews' );
endif;


// Disable WordPress admin bar excerpt admin

if (get_option('pbp_remove_admin_bar')):
function pbp_remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}
add_action('init', 'pbp_remove_admin_bar');
endif;


// Remove wp logo from WordPress admin bar

if (get_option('pbp_remove_wp_logo')):
function pbp_wp_admin_bar() {
    global $wp_admin_bar;
	$wp_admin_bar->remove_menu('wp-logo');
}
add_action( 'wp_before_admin_bar_render', 'pbp_wp_admin_bar' );
endif;


// Remove wordpress about from WordPress admin bar

if (get_option('pbp_remove_about_wplink')):
function pbp_remove_about_wordpress() {
    global $wp_admin_bar;
	 $wp_admin_bar->remove_menu('about');
}
add_action( 'wp_before_admin_bar_render', 'pbp_remove_about_wordpress' );
endif;


// Remove wordpress about from WordPress admin bar

if (get_option('pbp_remove_wporg_link')):
function pbp_remove_wordpress_org_link() {
    global $wp_admin_bar;
	 $wp_admin_bar->remove_menu('wporg');
}
add_action( 'wp_before_admin_bar_render', 'pbp_remove_wordpress_org_link' );
endif;


// Remove wordpress documentation from WordPress admin bar

if (get_option('pbp_remove_doc_link')):
function pbp_remove_documentation_link() {
    global $wp_admin_bar;
	 $wp_admin_bar->remove_menu('documentation');
}
add_action( 'wp_before_admin_bar_render', 'pbp_remove_documentation_link' );
endif;


// Remove support forum link from WordPress admin bar

if (get_option('pbp_remove_support_link')):
function pbp_remove_support_link() {
    global $wp_admin_bar;
	$wp_admin_bar->remove_menu('support-forums');
}
add_action( 'wp_before_admin_bar_render', 'pbp_remove_support_link' );
endif;


// Remove feedback link from WordPress admin bar

if (get_option('pbp_remove_feedback_link')):
function pbp_remove_feedback_link() {
    global $wp_admin_bar;
	$wp_admin_bar->remove_menu('feedback');
}
add_action( 'wp_before_admin_bar_render', 'pbp_remove_feedback_link' );
endif;



function pbp_remove_footer_thnaks (){
	echo "<style>#wpfooter{display:none}</style>";
}
add_action('admin_head','pbp_remove_footer_thnaks');
?>