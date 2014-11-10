<?php 

/*
Plugin Name: DailyMom Responsive Tables
Description: Add script and stylesheet for <a href="http://zurb.com/playground/responsive-tables">responsive tables by Zurb</a>
Author: Dan Hauk
Version: 0.1
Author URI: http://d5k.me
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

function dm_responsive_tables_enqueue() {
	wp_enqueue_script( 'dm-responsive-tables', plugins_url('responsive-tables.js', __FILE__), array( 'jquery' ) );
	wp_enqueue_style( 'dm-responsive-tables', plugins_url('responsive-tables.css', __FILE__) );
}

function dm_add_viewport_meta() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}

if ( !is_admin() ) {
	add_action( 'wp_head', 'dm_add_viewport_meta' );
	add_action( 'wp_enqueue_scripts', 'dm_responsive_tables_enqueue' );
}