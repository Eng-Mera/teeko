<?php
/* ---------------------------------------------------------------------------
 * Custom CSS from THeme option panel
 * --------------------------------------------------------------------------- */

if ( ! defined( 'ABSPATH' ) ) exit;

if( ($custom_css = kidsworld_option('layout','customcss-content')) &&  kidsworld_option('layout','enable-customcss')){
	echo stripcslashes( $custom_css )."\n";
}?>