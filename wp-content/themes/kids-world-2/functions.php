<?php
/**
 * Theme Functions
 *
 * @package DTtheme
 * @author DesignThemes
 * @link http://wedesignthemes.com
 */

define( 'KIDSWORLD_THEME_DIR', get_template_directory() );
define( 'KIDSWORLD_THEME_URI', get_template_directory_uri() );
define( 'KIDSWORLD_CORE_PLUGIN', WP_PLUGIN_DIR.'/designthemes-core-features' );
define( 'KIDSWORLD_SETTINGS', 'kidsworld-opts' );
global $kidsworldoptions;
$kidsworldoptions = get_option(KIDSWORLD_SETTINGS);

if (function_exists ('wp_get_theme')) :
	$themeData = wp_get_theme();
	define( 'KIDSWORLD_THEME_NAME', $themeData->get('Name'));
	define( 'KIDSWORLD_THEME_VERSION', $themeData->get('Version'));
endif;

define( 'KIDSWORLD_LANG_DIR', KIDSWORLD_THEME_DIR. '/languages' );

$user_id = get_current_user_id();
if($user_id > 0) {
	
    global $current_user;
    $user_roles = $current_user->roles;
    $user_role = array_shift($user_roles);

	define('KIDSWORLD_USER_ROLE', $user_role);
		
} else {
	
	define('KIDSWORLD_USER_ROLE', '');
	
}

/* ---------------------------------------------------------------------------
 * Loads Theme Textdomain
 * ---------------------------------------------------------------------------*/ 
load_theme_textdomain( 'kids-world', KIDSWORLD_LANG_DIR );

/* ---------------------------------------------------------------------------
 * Loads the Admin Panel Scripts
 * ---------------------------------------------------------------------------*/
function kidsworld_admin_scripts() {

	wp_enqueue_style('kidsworld-admin', KIDSWORLD_THEME_URI .'/framework/theme-options/style.css');
	wp_enqueue_style('chosen', KIDSWORLD_THEME_URI .'/framework/theme-options/css/chosen.css');
	wp_enqueue_style('wp-color-picker');

	wp_enqueue_script('jquery-ui-tabs');
	wp_enqueue_script('jquery-ui-sortable');
	wp_enqueue_script('jquery-ui-slider');
	wp_enqueue_script('wp-color-picker');
	wp_enqueue_script('wp-color-picker-alpha', KIDSWORLD_THEME_URI.'/framework/js/wp-color-picker-alpha.js', array(), false, true);
	
	wp_enqueue_script('jquery-tools', KIDSWORLD_THEME_URI . '/framework/theme-options/js/jquery.tools.min.js');
	wp_enqueue_script('jquery-chosen', KIDSWORLD_THEME_URI . '/framework/theme-options/js/chosen.jquery.min.js');
	wp_enqueue_script('kidsworld-dttheme', KIDSWORLD_THEME_URI . '/framework/theme-options/js/dttheme.admin.js');
	wp_enqueue_media();

	wp_localize_script('kidsworld-dttheme', 'objectL10n', array(
		'saveall' => esc_html__('Save All', 'kids-world'),
		'saving' => esc_html__('Saving ...', 'kids-world'),
		'noResult' => esc_html__('No Results Found!', 'kids-world'),
		'resetConfirm' => esc_html__('This will restore all of your options to default. Are you sure?', 'kids-world'),
		'importConfirm' => esc_html__('You are going to import the dummy data provided with the theme, kindly confirm?', 'kids-world'),
		'backupMsg' => esc_html__('Click OK to backup your current saved options.', 'kids-world'),
		'backupSuccess' => esc_html__('Your options are backuped successfully', 'kids-world'),
		'backupFailure' => esc_html__('Backup Process not working', 'kids-world'),
		'disableImportMsg' => esc_html__('Importing is disabled.. :), Please select atleast import type','kids-world'),
		'restoreMsg' => esc_html__('Warning: All of your current options will be replaced with the data from your last backup! Proceed?', 'kids-world'),
		'restoreSuccess' => esc_html__('Your options are restored from previous backup successfully', 'kids-world'),
		'restoreFailure' => esc_html__('Restore Process not working', 'kids-world'),
		'importMsg' => esc_html__('Click ok import options from the above textarea', 'kids-world'),
		'importSuccess' => esc_html__('Your options are imported successfully', 'kids-world'),
		'importFailure' => esc_html__('Import Process not working', 'kids-world')));
}
add_action( 'admin_enqueue_scripts', 'kidsworld_admin_scripts' );

/* ---------------------------------------------------------------------------
 * Loads the Options Panel
 * ---------------------------------------------------------------------------*/ 
require_once( KIDSWORLD_THEME_DIR .'/framework/utils.php' );
require_once( KIDSWORLD_THEME_DIR .'/framework/fonts.php' );
require_once( KIDSWORLD_THEME_DIR .'/framework/theme-options/init.php' );

/* ---------------------------------------------------------------------------
 * Loads Theme Functions
 * ---------------------------------------------------------------------------*/ 

// Functions --------------------------------------------------------------------
require_once( KIDSWORLD_THEME_DIR .'/framework/register-functions.php' );

// Header -----------------------------------------------------------------------
require_once( KIDSWORLD_THEME_DIR .'/framework/register-head.php' );

// Meta box ---------------------------------------------------------------------
require_once( KIDSWORLD_THEME_DIR .'/framework/theme-metaboxes/post-metabox.php' );
require_once( KIDSWORLD_THEME_DIR .'/framework/theme-metaboxes/page-metabox.php' );

// Tribe Events -----------------------------------------------------------------
if ( class_exists( 'Tribe__Events__Main' ) )
	require_once( KIDSWORLD_THEME_DIR .'/framework/theme-metaboxes/event-metabox.php' );

// Menu -------------------------------------------------------------------------
require_once( KIDSWORLD_THEME_DIR .'/framework/register-menu.php' );
require_once( KIDSWORLD_THEME_DIR .'/framework/register-mega-menu.php' );

// Hooks ------------------------------------------------------------------------
require_once( KIDSWORLD_THEME_DIR .'/framework/register-hooks.php' );

// Likes ------------------------------------------------------------------------
require_once( KIDSWORLD_THEME_DIR .'/framework/register-likes.php' );

// Widgets ----------------------------------------------------------------------
add_action( 'widgets_init', 'kidsworld_widgets_init' );
function kidsworld_widgets_init() {
	require_once( KIDSWORLD_THEME_DIR .'/framework/register-widgets.php' );

	if(class_exists('DTCorePlugin')) {
		register_widget('KidsWorld_Twitter');
	}

	register_widget('KidsWorld_Flickr');
	register_widget('KidsWorld_Recent_Posts');
	register_widget('KidsWorld_Portfolio_Widget');
}
if(class_exists('DTCorePlugin')) {
	require_once( KIDSWORLD_THEME_DIR .'/framework/widgets/widget-twitter.php' );
}
require_once( KIDSWORLD_THEME_DIR .'/framework/widgets/widget-flickr.php' );
require_once( KIDSWORLD_THEME_DIR .'/framework/widgets/widget-recent-posts.php' );
require_once( KIDSWORLD_THEME_DIR .'/framework/widgets/widget-recent-portfolios.php' );

// Plugins ---------------------------------------------------------------------- 
require_once( KIDSWORLD_THEME_DIR .'/framework/register-plugins.php' );

// WooCommerce ------------------------------------------------------------------
if( function_exists( 'is_woocommerce' ) ){
	require_once( KIDSWORLD_THEME_DIR .'/framework/register-woocommerce.php' );
} 

// Store Locator --------------------------------------------------------------------
if (class_exists('WP_Store_locator')) {	
	require_once( KIDSWORLD_THEME_DIR .'/framework/register-storelocator.php' );
}

$options = get_option(KIDSWORLD_SETTINGS);
$GLOBALS['teachers-singular-label'] = (isset($options['general']['teachers-singular-label']) && !empty($options['general']['teachers-singular-label'])) ? $options['general']['teachers-singular-label'] : 'Teacher';
$GLOBALS['teachers-plural-label'] = (isset($options['general']['teachers-plural-label']) && !empty($options['general']['teachers-plural-label'])) ? $options['general']['teachers-plural-label'] : 'Teachers';

?>