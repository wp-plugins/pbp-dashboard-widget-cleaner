<?php

/*
Plugin Name: PBP Dashboard widget cleaner
Plugin URI: http://projoktibangla.net
Description: This plugin Delete Wordpress Dashboard Widget
Author: projoktibangla
Version: 1.0
Author URI: http://projoktibangla.net
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


add_action('admin_init', 'rw_remove_dashboard_widgets');
    function rw_remove_dashboard_widgets() {
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); // right now
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // recent comments
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); // incoming links
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); // plugins
     
    remove_meta_box('dashboard_quick_press', 'dashboard', 'normal'); // quick press
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal'); // recent drafts
    remove_meta_box('dashboard_primary', 'dashboard', 'normal'); // wordpress blog
    remove_meta_box('dashboard_secondary', 'dashboard', 'normal'); // other wordpress news
    }
?>