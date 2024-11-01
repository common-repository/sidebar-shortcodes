<?php
/*
Plugin Name: Sidebar Shortcodes
Plugin URI: http://wordpress.org/extend/plugins/sidebar-shortcodes
Description: Enable Shortcodes in the text widget.
Author: Dan Coulter
Version: 0.1.1
Author URI: http://dancoulter.com/
*/

add_filter('widget_text', 'do_shortcode');
	
?>