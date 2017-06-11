<?php
/* ---------------------------------------------------------------------------
 * Loading Theme Scripts
 * --------------------------------------------------------------------------- */
add_action('wp_enqueue_scripts', 'kidsworld_enqueue_scripts');
function kidsworld_enqueue_scripts() {

	// comment reply script ------------------------------------------------------
	if (is_singular() AND comments_open()):
		 wp_enqueue_script( 'comment-reply' );
	endif;

	// scipts variable -----------------------------------------------------------
	$stickynav = ( kidsworld_option("layout","layout-stickynav") ) ? "enable" : "disable";
	$loadingbar = ( kidsworld_option("general","enable-loader") ) ? "enable" : "disable";
	$nicescroll = ( kidsworld_option("general","enable-nicescroll") ) ? "enable" : "disable";
	if(is_rtl()) $rtl = true; else $rtl = false;

	$load_isotope = true;
	if(class_exists('Tribe__Events__Pro__Main') && tribe_is_photo()) {
		$load_isotope = false;
	}

	$htype = kidsworld_get_header_type();
	$stickyele = "";
	switch( $htype ){
		case 'fullwidth-header':
		case 'boxed-header':
		case 'split-header fullwidth-header':
		case 'split-header boxed-header':
		case 'two-color-header':
			$stickyele = ".main-header-wrapper";
		break;
			
		case 'fullwidth-header header-align-center fullwidth-menu-header':
		case 'fullwidth-header header-align-left fullwidth-menu-header':
			$stickyele = ".menu-wrapper";
		break;

		case 'left-header':
		case 'left-header-boxed':
		case 'creative-header':
		case 'overlay-header':
			$stickyele = ".menu-wrapper";
			$stickynav = "disable";
		break;
	}

	wp_enqueue_script('ui.totop', get_theme_file_uri('/framework/js/jquery.ui.totop.min.js'), array(), false, true);
	wp_enqueue_script('kidsworld.jqplugins', get_theme_file_uri('/framework/js/jquery.plugins.js'), array(), false, true);
	wp_enqueue_script('visualNav', get_theme_file_uri('/framework/js/jquery.visualNav.min.js'), array(), false, true);

	if( $loadingbar == 'enable' ) {
		wp_enqueue_script('pace', get_theme_file_uri('/framework/js/pace.min.js'),array(),false,true);
		wp_localize_script('pace', 'paceOptions', array(
			'restartOnRequestAfter' => 'false',
			'restartOnPushState' => 'false'
		));
	}

	wp_enqueue_script('kidsworld.jqcustom', get_theme_file_uri('/framework/js/custom.js'), array(), false, true);

	wp_localize_script('kidsworld.jqplugins', 'dttheme_urls', array(
		'theme_base_url' => esc_js(KIDSWORLD_THEME_URI),
		'framework_base_url' => esc_js(KIDSWORLD_THEME_URI).'/framework/',
		'ajaxurl' => admin_url('admin-ajax.php'),
		'url' => get_site_url(),
		'stickynav' => esc_js($stickynav),
		'stickyele' => esc_js($stickyele),
		'isRTL' => esc_js($rtl),
		'loadingbar' => esc_js($loadingbar),
		'nicescroll' => esc_js($nicescroll),
		'advOptions' => esc_html__('Show Advanced Options', 'kids-world'),
		'loadisotope' => esc_js($load_isotope),
	));
	
	$picker = kidsworld_option('general', 'enable-stylepicker');
	if( isset($picker) ) {
		wp_enqueue_script('cookie', get_theme_file_uri('/framework/js/jquery.cookie.min.js'),array(),false,true);
		wp_enqueue_script('kidsworld.jqcpanel', get_theme_file_uri('/framework/js/controlpanel.js'),array(),false,true);
	}
}

/* ---------------------------------------------------------------------------
 * Meta tag for viewport scale
* --------------------------------------------------------------------------- */
function kidsworld_viewport() {
	if(kidsworld_option('general', 'enable-responsive')){
		echo "<meta name='viewport' content='width=device-width, initial-scale=1'>\r";
	}
}

/* ---------------------------------------------------------------------------
 * Scripts of Custom JS from Theme Back-End
* --------------------------------------------------------------------------- */
function kidsworld_scripts_custom() {
	if( ($custom_js = kidsworld_option('layout', 'customjs-content')) && kidsworld_option('layout','enable-customjs') ){
		wp_add_inline_script('kidsworld.jqcustom', kidsworld_wp_kses(stripslashes($custom_js)) ,'after');
	}
}
add_action('wp_enqueue_scripts', 'kidsworld_scripts_custom', 100);

/* ---------------------------------------------------------------------------
 * Loading Theme Styles
 * --------------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'kidsworld_enqueue_styles', 100 );
function kidsworld_enqueue_styles() {

	$layout_opts = kidsworld_option('layout');
	$general_opts = kidsworld_option('general');
	$colors_opts = kidsworld_option('colors');
	$pageopt_opts = kidsworld_option('pageoptions');

	// wp_enqueue_style ---------------------------------------------------------------
	wp_enqueue_style( 'kidsworld', get_stylesheet_uri(), false, KIDSWORLD_THEME_VERSION, 'all' );

	wp_enqueue_style( 'kidsworld.base',get_theme_file_uri('/css/base.css'), false, KIDSWORLD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'kidsworld.grid',get_theme_file_uri('/css/grid.css'), false, KIDSWORLD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'kidsworld.widgets',get_theme_file_uri('/css/widget.css'), false, KIDSWORLD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'kidsworld.layout',get_theme_file_uri('/css/layout.css'), false, KIDSWORLD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'kidsworld.blog',get_theme_file_uri('/css/blog.css'), false, KIDSWORLD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'kidsworld.portfolio',get_theme_file_uri('/css/portfolio.css'), false, KIDSWORLD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'kidsworld.contact',get_theme_file_uri('/css/contact.css'), false, KIDSWORLD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'kidsworld.customclass',get_theme_file_uri('/css/custom-class.css'), false, KIDSWORLD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'kidsworld.browser',get_theme_file_uri('/css/browser.css'), false, KIDSWORLD_THEME_VERSION, 'all' );

	wp_enqueue_style( 'prettyphoto',	get_theme_file_uri('/css/prettyPhoto.css'), false, KIDSWORLD_THEME_VERSION, 'all' );
	
	if (function_exists('bp_add_cover_image_inline_css')) {
		$inline_css = bp_add_cover_image_inline_css( true );
		wp_add_inline_style( 'bp-parent-css', strip_tags( $inline_css['css_rules'] ) );
	}
	
	// icon fonts ---------------------------------------------------------------------
	wp_enqueue_style ( 'custom-font-awesome',		get_theme_file_uri('/css/font-awesome.min.css'), array (), '4.3.0' );
	wp_enqueue_style ( 'pe-icon-7-stroke',			get_theme_file_uri('/css/pe-icon-7-stroke.css'), array () );
	wp_enqueue_style ( 'stroke-gap-icons-style',	get_theme_file_uri('/css/stroke-gap-icons-style.css'), array () );
	wp_enqueue_style ( 'icon-moon',					get_theme_file_uri('/css/icon-moon.css'), array () );
	wp_enqueue_style ( 'material-design-iconic',	get_theme_file_uri('/css/material-design-iconic-font.min.css'), array () );
	wp_enqueue_style ( 'icomoon',					get_theme_file_uri('/css/icomoon.css'), array () );

	// comingsoon css
	if(isset($pageopt_opts['enable-comingsoon']))
		wp_enqueue_style("kidsworld.comingsoon",  	get_theme_file_uri("/css/comingsoon.css"), false, KIDSWORLD_THEME_VERSION, 'all' );

	// notfound css
	if ( is_404() )
		wp_enqueue_style("kidsworld.notfound",	  	get_theme_file_uri("/css/notfound.css"), false, KIDSWORLD_THEME_VERSION, 'all' );

	// loader css
	if(isset($general_opts['enable-loader']))
		wp_enqueue_style("kidsworld.loader",	  		get_theme_file_uri("/css/loaders.css"), false, KIDSWORLD_THEME_VERSION, 'all' );

	// show mobile slider
    if(empty($general_opts['show-mobileslider'])):
		$out =	'@media only screen and (max-width:320px), (max-width: 479px), (min-width: 480px) and (max-width: 767px), (min-width: 768px) and (max-width: 959px),
		 (max-width:1200px) { #slider { display:none !important; } }';
		wp_add_inline_style('kids-world', $out);		 
	endif;

	// woocommerce css
	if( function_exists( 'is_woocommerce' ) ) {
		wp_enqueue_style( 'kidsworld.woo', 		get_theme_file_uri('/css/woocommerce.css'), 'woocommerce-general-css', KIDSWORLD_THEME_VERSION, 'all' );
	}

	if (class_exists('WP_Store_locator')) {	
		wp_enqueue_style( 'kidsworld.storelocator', get_theme_file_uri('/css/store-locator.css'), false, KIDSWORLD_THEME_VERSION, 'all' );
	}

	// static css
	if(isset($general_opts['enable-staticcss'])) :
		wp_enqueue_style("kidsworld.static",  		get_theme_file_uri("/style-static.css"), false, KIDSWORLD_THEME_VERSION, 'all' );

	// skin css
	else :
		$skin	  = $colors_opts['theme-skin'];
		if($skin != 'custom')	wp_enqueue_style("skin", 	get_theme_file_uri("/css/skins/$skin/style.css"));
	endif;

	// tribe-events -------------------------------------------------------------------
	wp_enqueue_style( 'kidsworld.customevent', 		get_theme_file_uri('/tribe-events/custom.css'), false, KIDSWORLD_THEME_VERSION, 'all' );

	// responsive ---------------------------------------------------------------------
	if(kidsworld_option('general', 'enable-responsive'))
		wp_enqueue_style("kidsworld.responsive",  	get_theme_file_uri("/css/responsive.css"), false, KIDSWORLD_THEME_VERSION, 'all' );

	// google fonts -----------------------------------------------------------------
	wp_enqueue_style( 'kidsworld.google-fonts', kidsworld_load_fonts_url(), array(), '1.0.0' );
	wp_add_inline_style('kidsworld.google-fonts', kidsworld_styles_custom_font() );

	// custom css ---------------------------------------------------------------------
	wp_enqueue_style( 'kidsworld.custom', 			get_theme_file_uri('/css/custom.css'), false, KIDSWORLD_THEME_VERSION, 'all' );

	if( is_404() ):
		$bg = kidsworld_option('pageoptions','notfound-bg');
		$opacity = kidsworld_opts_get('notfound-bg-opacity', '1');
		$position = kidsworld_opts_get('notfound-bg-position', 'center center');
		$repeat = kidsworld_opts_get('notfound-bg-repeat', 'no-repeat');
		$show_bgcolor = kidsworld_option('pageoptions','show-notfound-bg-color');
		$color = kidsworld_option('pageoptions','notfound-bg-color');
		$color = ($show_bgcolor == 'true') ? $color : '';
		
		$estyle = kidsworld_option('pageoptions','notfound-bg-style');
		$color = !empty($color) ? kidsworld_hex2rgb($color) : array('f', 'f', 'f');
		$style = !empty($bg) ? "background:url($bg) $position $repeat;" : '';
		$style .= !empty($color) ? "background-color:rgba(  $color[0] ,  $color[1],  $color[2], {$opacity});" : '';
		$style .= !empty($estyle) ? $estyle : '';

		$data_css = '.error404 .wrapper { '.$style.' }';
		wp_add_inline_style( 'kidsworld.custom', $data_css );
	endif;

	if( is_page_template('tpl-comingsoon.php') ):
		$bg = kidsworld_option('pageoptions','comingsoon-bg');
		$opacity = kidsworld_opts_get('comingsoon-bg-opacity', '1');
		$position = kidsworld_opts_get('comingsoon-bg-position', 'center center');
		$repeat = kidsworld_opts_get('comingsoon-bg-repeat', 'no-repeat');
		$color = kidsworld_option('pageoptions','comingsoon-bg-color');
		$showcolor = kidsworld_option('pageoptions','show-comingsoon-bg-color');

		$estyle = kidsworld_option('pageoptions','comingsoon-bg-style');

		$color = !empty($color) ? kidsworld_hex2rgb($color) : array('f', 'f', 'f');
		$style = !empty($bg) ? "background:url($bg) $position $repeat;" : '';
		$style .= (!empty($color) && isset($showcolor) ) ? "background-color:rgba(  $color[0],  $color[1],  $color[2], {$opacity});" : '';
		$style .= !empty($estyle) ? $estyle : '';

		$data_css = '.wrapper.under-construction  { '.$style.' }';
		wp_add_inline_style( 'kidsworld.custom', $data_css );
	endif;

	
	// jquery scripts --------------------------------------------
	wp_enqueue_script('modernizr-custom', 	get_theme_file_uri('/framework/js/modernizr.custom.js'), array('jquery'));

	// rtl ----------------------------------------------------------------------------
	if(is_rtl()) {
		wp_enqueue_style('kidsworld.rtl', 	get_theme_file_uri('/css/rtl.css'), false, KIDSWORLD_THEME_VERSION, 'all' );
	}
}


function kidsworld_load_fonts_url() {
	
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
    */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'kids-world' ) ) {
		
		if(kidsworld_option('fonts','font-subset') != '') $subset = str_replace(' ', '', kidsworld_option('fonts','font-subset'));
		else $subset = '';
		if(kidsworld_option('fonts','font-style') != '') $weight = ':'. implode( ',', kidsworld_option('fonts','font-style') );
		else $weight = '';
		
		// Default fonts used by theme
		$font_families = array();	
		
		// Fonts chosen by user
		$google_fonts = kidsworld_fonts();
		$google_fonts = $google_fonts['all'];
		$fonts = kidsworld_fonts_selected();

		$selected_fonts = array_intersect($fonts, $google_fonts);
		foreach($selected_fonts as $selected_font) {
			$font_families[] = kidsworld_wp_kses($selected_font.$weight);
		}

		$query_args = array(
			'family' => urlencode( implode( '%7C', $font_families ) ),
			'subset' => urlencode( $subset ),
		);
		
		$font_url = add_query_arg( $query_args, 'http'. kidsworld_ssl() .'://fonts.googleapis.com/css' );
		
    }
	
    return $font_url;
		
}

/* ---------------------------------------------------------------------------
 * Styles Minify
 * --------------------------------------------------------------------------- */
function kidsworld_styles_minify( $css ){

	// remove comments
	$css = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css );	

	// remove whitespace
	$css = str_replace( array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css );

	return $css;
}

/* ---------------------------------------------------------------------------
 * Styles Dynamic
 * --------------------------------------------------------------------------- */
function kidsworld_styles_dynamic() {

	ob_start();

	if( ! kidsworld_opts_get( 'enable-staticcss' ) ){
		// custom colors.php
		$colors_opts = kidsworld_option('colors');
		$skin	  = $colors_opts['theme-skin'];
		if($skin == 'custom'):
			include_once KIDSWORLD_THEME_DIR . '/css/style-custom-color.php';
		endif;
		
		// default colors.php
		include_once KIDSWORLD_THEME_DIR . '/css/style-default-color.php';

		// fonts.php
		include_once KIDSWORLD_THEME_DIR . '/css/style-fonts.php';			
	}

	// custom optons css.php			
	if( ($custom_css = kidsworld_option('layout','customcss-content')) &&  kidsworld_option('layout','enable-customcss')):
		include_once KIDSWORLD_THEME_DIR . '/css/dt-theme-option-custom-css.php';
	endif;

	$css = ob_get_contents();

	ob_get_clean();

	$css = kidsworld_styles_minify( $css );

	wp_register_style( 'kidsworld-combined', '', false, KIDSWORLD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'kidsworld-combined' );

	wp_add_inline_style('kidsworld-combined', $css);	
}
add_action( 'wp_enqueue_scripts', 'kidsworld_styles_dynamic', 101 );

/* ---------------------------------------------------------------------------
 * Styles of Custom Font
 * --------------------------------------------------------------------------- */
function kidsworld_styles_custom_font() {	
	$fonts 		  = kidsworld_fonts_selected();
	$font_custom  = kidsworld_option('fonts','customfont-name');
	$font_custom2 = kidsworld_option('fonts','customfont2-name');

	$out = '';

	if( $font_custom && in_array( $font_custom, $fonts ) ){
		$out .= '@font-face {';
			$out .= 'font-family: "'. $font_custom .'";';
			$out .= 'src: url("'. kidsworld_option('fonts','customfont-eot') .'");';
			$out .= 'src: url("'. kidsworld_option('fonts','customfont-eot') .'#iefix") format("embedded-opentype"),';
				$out .= 'url("'. kidsworld_option('fonts','customfont-woff') .'") format("woff"),';
				$out .= 'url("'. kidsworld_option('fonts','customfont-ttf') .'") format("truetype"),';
				$out .= 'url("'. kidsworld_option('fonts','customfont-svg') . $font_custom .'") format("svg");';
			$out .= 'font-weight: normal;';
			$out .= 'font-style: normal;';
		$out .= '}';
	}
	
	if( $font_custom2 && in_array( $font_custom2, $fonts ) ){
		$out .= '@font-face {';
			$out .= 'font-family: "'. $font_custom2 .'";';
			$out .= 'src: url("'. kidsworld_option('fonts','customfont2-eot') .'");';
			$out .= 'src: url("'. kidsworld_option('fonts','customfont2-eot') .'#iefix") format("embedded-opentype"),';
				$out .= 'url("'. kidsworld_option('fonts','customfont2-woff') .'") format("woff"),';
				$out .= 'url("'. kidsworld_option('fonts','customfont2-ttf') .'") format("truetype"),';
				$out .= 'url("'. kidsworld_option('fonts','customfont2-svg') . $font_custom2 .'") format("svg");';
			$out .= 'font-weight: normal;';
			$out .= 'font-style: normal;';
		$out .= '}';
	}

	return $out;
}

/* ---------------------------------------------------------------------------
 * Fonts Selected in Theme Options Panel
 * --------------------------------------------------------------------------- */
function kidsworld_fonts_selected(){
	$fonts = array();
	
	$font_opts = kidsworld_option('fonts');
	
	$fonts['content'] 		= !empty ( $font_opts['content-font'] ) 	? 	$font_opts['content-font'] 		: 'Oswald';
	$fonts['menu'] 			= !empty ( $font_opts['menu-font'] ) 		? 	$font_opts['menu-font'] 		: 'Oswald';
	$fonts['title'] 		= !empty ( $font_opts['pagetitle-font'] ) 	? 	$font_opts['pagetitle-font'] 	: 'Oswald';
	$fonts['h1'] 		= !empty ( $font_opts['h1-font'] ) 	? 	$font_opts['h1-font'] 		: 'Oswald';
	$fonts['h2'] 		= !empty ( $font_opts['h2-font'] ) 	? 	$font_opts['h2-font'] 		: 'Oswald';
	$fonts['h3'] 		= !empty ( $font_opts['h3-font'] ) 	? 	$font_opts['h3-font'] 		: 'Oswald';
	$fonts['h4'] 		= !empty ( $font_opts['h4-font'] ) 	? 	$font_opts['h4-font'] 		: 'Oswald';
	$fonts['h5'] 		= !empty ( $font_opts['h5-font'] ) 	? 	$font_opts['h5-font'] 		: 'Oswald';
	$fonts['h6'] 		= !empty ( $font_opts['h6-font'] ) 	? 	$font_opts['h6-font'] 		: 'Oswald';

	return $fonts;
}

/* ---------------------------------------------------------------------------
 * Site SSL Compatibility
 * --------------------------------------------------------------------------- */
function kidsworld_ssl( $echo = false ){
	$ssl = '';
	if( is_ssl() ) $ssl = 's';
	if( $echo ){
		echo ($ssl);
	}
	return $ssl;
}

/* ---------------------------------------------------------------------------
 * Layout Selected in Theme Options Panel
 * --------------------------------------------------------------------------- */
add_action('wp_enqueue_scripts', 'kidsworld_appearance_css', 102);
function kidsworld_appearance_css() {
	$output = NULL;

	if (kidsworld_option('layout', 'site-layout') == 'boxed') :

		if (kidsworld_option('layout', 'bg-type') == 'bg-patterns') :
			$pattern 			= 	kidsworld_option('layout', 'boxed-layout-pattern');
			$pattern_repeat 	= 	kidsworld_option('layout', 'boxed-layout-pattern-repeat');
			$pattern_opacity 	= 	kidsworld_option('layout', 'boxed-layout-pattern-opacity');
			$enable_color 		= 	kidsworld_option('layout', 'show-boxed-layout-pattern-color');
			$pattern_color 		= 	kidsworld_option('layout', 'boxed-layout-pattern-color');

			$output .= "body { ";

			if (!empty($pattern)) {
				$output .= "background-image:url('" . KIDSWORLD_THEME_URI . "/framework/theme-options/images/patterns/{$pattern}');";
			}

			$output .= "background-repeat:$pattern_repeat;";
			if ($enable_color) {
				if (!empty($pattern_opacity)) {
					$color = kidsworld_hex2rgb($pattern_color);
					$output .= "background-color:rgba($color[0],$color[1],$color[2],$pattern_opacity); ";
				} else {
					$output .= "background-color:$pattern_color;";
				}
			}
			$output .= "}\r\t";

		elseif (kidsworld_option('layout', 'bg-type') == 'bg-custom') :
			$bg 			= 	kidsworld_option('layout', 'boxed-layout-bg');
			$bg_repeat 		= 	kidsworld_option('layout', 'boxed-layout-bg-repeat');
			$bg_opacity 	= 	kidsworld_option('layout', 'boxed-layout-bg-opacity');
			$bg_color 		= 	kidsworld_option('layout', 'boxed-layout-bg-color');
			$enable_color 	= 	kidsworld_option('layout', 'show-boxed-layout-bg-color');
			$bg_position 	= 	kidsworld_option('layout', 'boxed-layout-bg-position');

			$output .= "body { ";

			if (!empty($bg)) {
				$output .= "background-image:url($bg);";
				$output .= "background-repeat:$bg_repeat;";
				$output .= "background-position:$bg_position;";
			}

			if ($enable_color) {
				if (!empty($bg_opacity)) {
					$color = kidsworld_hex2rgb($bg_color);
					$output .= "background-color:rgba($color[0],$color[1],$color[2],$bg_opacity);";
				} else {
					$output .= "background-color:$bg_color;";
				}
			}
			$output .= "}\r\t";
		endif;

	endif;
	
	if (!empty($output)) :
		wp_register_style( 'kidsworld-layout', '' );
		wp_enqueue_style( 'kidsworld-layout' );
		wp_add_inline_style('kidsworld-layout', $output);
	endif;
}

/* ---------------------------------------------------------------------------
 * Body Class Filter for layout changes
 * --------------------------------------------------------------------------- */
function kidsworld_body_classes( $classes ) {

	// layout
	$classes[] 		= 	'layout-'. kidsworld_option('layout','site-layout');

	// header
	$header_type 	= 	kidsworld_get_header_type();
	if( isset($header_type) && ($header_type == 'left-header-boxed') ):
		$classes[]	=	'left-header left-header-boxed';
	elseif( isset($header_type) && ($header_type == 'creative-header') ):
		$classes[]	=	'left-header left-header-creative';
	else:
		$classes[]	=	$header_type;
	endif;

	$htrans 		= 	kidsworld_option('layout', 'header-transparant');
	if(isset($htrans)):
		$classes[]	=	kidsworld_option('layout', 'header-transparant');
	endif;
	
	$stickyhead		=	kidsworld_option('layout','layout-stickynav');
	if(isset($stickyhead)):
		$classes[]	=	'sticky-header';
	endif;

	$standard		=	kidsworld_option('layout','header-position');
	if( isset($standard) && ($standard == 'above slider') ):
		$classes[]	=	'standard-header';
	elseif( isset($standard) && ($standard == 'below slider') ):
		$classes[]	=	'standard-header header-below-slider';
	elseif ( isset($standard) && ($standard == 'on slider') ):
		$classes[]	=	'header-on-slider';
	endif;

	$topbar			=	kidsworld_option('layout','layout-topbar');
	if(isset($topbar)):
		$classes[]	=	'header-with-topbar';
	endif;

	$wootype		=	kidsworld_option('woo','product-style');
	$wootype		= 	!empty($wootype) ? 'woo-'.$wootype : 'woo-type1';
	$classes[]		=	$wootype;

	if( is_page() ) {
		$pageid = kidsworld_ID();
		$page_meta = get_post_meta( $pageid, '_tpl_default_settings', true );

		if( ($page_meta) && (array_key_exists( 'show_slider', $page_meta )) ) {
			$classes[] = "page-with-slider";
		}
		if( ($page_meta) && (!array_key_exists( 'enable-sub-title', $page_meta )) ) {
			$classes[] = "no-breadcrumb";
		}
	} elseif( is_home() ) {
		$pageid = get_option('page_for_posts');
		if(($slider_key = get_post_meta( $pageid, '_tpl_default_settings', true )) && (array_key_exists( 'show_slider', $slider_key )) ) {
			$classes[] = "page-with-slider";
		}
	}

	return $classes;
}
add_filter( 'body_class', 'kidsworld_body_classes' );


function kidsworld_load_favicons() {

	$layout_opts = kidsworld_option('layout');

	// site icons ---------------------------------------------------------------
	if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ):
		$url = ! empty ( $layout_opts ['favicon-url'] ) ? $layout_opts ['favicon-url'] : KIDSWORLD_THEME_URI . "/images/favicon.ico";
		echo "<link href='$url' rel='shortcut icon' type='image/x-icon' />\n";
	
		$phone_url = ! empty ( $layout_opts ['apple-favicon'] ) ? $layout_opts ['apple-favicon'] : KIDSWORLD_THEME_URI . "/images/apple-touch-icon.png";
		echo "<link href='$phone_url' rel='apple-touch-icon'/>\n";
	
		$phone_retina_url = ! empty ( $layout_opts ['apple-retina-favicon'] ) ? $layout_opts ['apple-retina-favicon'] : KIDSWORLD_THEME_URI. "/images/apple-touch-icon-114x114.png";
		echo "<link href='$phone_retina_url' sizes='114x114' rel='apple-touch-icon'/>\n";
	
		$ipad_url = ! empty ( $layout_opts ['apple-ipad-favicon'] ) ? $layout_opts ['apple-ipad-favicon'] : KIDSWORLD_THEME_URI . "/images/apple-touch-icon-72x72.png";
		echo "<link href='$ipad_url' sizes='72x72' rel='apple-touch-icon'/>\n";
	
		$ipad_retina_url = ! empty ( $layout_opts ['apple-ipad-retina-favicon'] ) ? $layout_opts ['apple-ipad-retina-favicon'] : KIDSWORLD_THEME_URI . "/images/apple-touch-icon-144x144.png";
		echo "<link href='$ipad_retina_url' sizes='144x144' rel='apple-touch-icon'/>\n";
	endif;

}
add_action( 'wp_head', 'kidsworld_load_favicons' );
?>