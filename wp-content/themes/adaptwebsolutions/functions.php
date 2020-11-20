<?php 

	// Adds 'Menus' support to the theme
	add_theme_support( 'menus' );

	// Adds 'Featured Image' support to the theme
	add_theme_support('post-thumbnails');

	// Removes the admin bar when logged in
	function remove_admin_login_header() {
    	remove_action('wp_head', '_admin_bar_bump_cb');
	}
	add_action('get_header', 'remove_admin_login_header');

?>