<?php
/**
* Plugin Name: Jigoshop Easy Print Button
* Description: Simple plugin to create print functionality for billing and shipping information from back-end
* Author: Isaac Oyelowo
* Plugin URI: http://codemypain.com
* Version: 1.0
*/

/*
Copyright (C) 2013 Isaac Oyelowo,Codemypain (scopes_oye AT yahoo DOT com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


/* Version check */
global $wp_version;  // global variable for your wordpress version
$update_msg='sorry dude,this naughty plugin only works on versions above 2.5 . <a href="http://codex.wordpress.org/Upgrading_WordPress">Please update!</a>';

//Restricting Jigoshop Easy Print Button to wp 2.5 above alone
if (version_compare($wp_version,"2.5","<"))
{
exit ($update_msg);
}

// define plugin directory
 define( 'JEPB_URL', plugin_dir_url( __FILE__ ) ); 
 
// add all necessary actions here 
add_action('jigoshop_order_data_tabs', 'jepb');
add_action('init', 'jepb_admin_scripts' );

//lets declare our first function
function jepb_admin_scripts() {
    wp_enqueue_script( 'jepb_admin_print_js', JEPB_URL . 'library/print.js', array( 'jquery' ), '1.0' );
	wp_enqueue_script( 'jepb_admin_print2_js', JEPB_URL . 'library/print2.js', array( 'jquery' ), '1.2' );
	}
	
//output print buttons	
function jepb() {
     echo "<input type='button' value='print billing details' id='print_butt' style='position:relative;width:130px;cursor:pointer;background-color:#900;color:#fff;border:none;margin-right:20px;' onclick='PrintDiv();' />
     ";
	 echo "<input type='button' value='print shipping details' id='print_butt2' style='position:relative;width:130px;cursor:pointer;background-color:#900;color:#fff;border:none;margin-right:20px;' onclick='PrintDiv2();' />
     ";
  }
 ?>
