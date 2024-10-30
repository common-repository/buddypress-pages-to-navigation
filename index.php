<?php
/*
Plugin Name: BP Pages to Navigation
Description: This BuddyPress component adds the site's top-level pages to the main navigation
Version: 1.0
Revision Date: January 8, 2010
Requires at least: WPMU 2.8, BuddyPress 1.1
Tested up to: WPMU 2.9, BuddyPress 1.2
License: Example: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
Author: Peter Anselmo, Studio66
Author URI: http://www.studio66design.com
Site Wide Only: true
*/

define ( 'BP_PTN_IS_INSTALLED', 1 );
define ( 'BP_PTN_VERSION', '1.0' );

function bp_ptn_add_nav(){
	do_action('bp_ptn_add_nav');
	wp_list_pages(array('depth'=>1,'title_li'=>''));
}
add_action('bp_nav_items','bp_ptn_add_nav');
