<?php
/*
Plugin Name: Standard WP-PageNavi
Plugin URI: https://github.com/eightbit/plugins/tree/master/standard-wp-pagenavi
Description: Provides native styling for WP-PageNavi in Standard.
Version: 1.0
Author: Tom McFarlin
Author URI: http://tommcfarlin.com
Author Email: tom@tommcfarlin.com
License:

  Copyright 2012 Tom McFarlin (tom@tommcfarlin.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
  
*/

class Standard_WP_PageNavi {
	 
	/*--------------------------------------------*
	 * Constructor
	 *--------------------------------------------*/
	
	/**
	 * Initializes the plugin by setting localization, admin styles, and content filters.
	 */
	function __construct() {
	
		add_action( 'wp_enqueue_scripts', array( $this, 'add_plugin_stylesheets' ) );
		
	} // end constructor
	
	/*--------------------------------------------*
	 * Core Functions
	 *---------------------------------------------*/
	 
	/**
 	 * Introduces the stylesheets
 	 */
 	 function add_plugin_stylesheets() {
	 	 
	 	 wp_enqueue_style( 'standard-wp-pagenavi', plugins_url() . '/standard-wp-pagenavi/css/plugin.css' );
	 	 
 	 } // end add_plugin_stylesheets
  
} // end class

new Standard_WP_PageNavi();
?>