<?php
/* ---------------------------------------------------------------------------
 * Hook of Top
 * --------------------------------------------------------------------------- */
function kidsworld_hook_top() {
	if( kidsworld_option( 'pageoptions','enable-top-hook' ) ) :
		echo '<!-- kidsworld_hook_top -->';
			$hook = kidsworld_option('pageoptions','top-hook');
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo ( $hook );
		echo '<!-- kidsworld_hook_top -->';
	endif;	
}
add_action( 'kidsworld_hook_top', 'kidsworld_hook_top' );


/* ---------------------------------------------------------------------------
 * Hook of Content before
 * --------------------------------------------------------------------------- */
function kidsworld_hook_content_before() {
	if( kidsworld_option( 'pageoptions','enable-content-before-hook' ) ) :
		echo '<!-- kidsworld_hook_content_before -->';
			$hook = kidsworld_option('pageoptions','content-before-hook');
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo ( $hook );
		echo '<!-- kidsworld_hook_content_before -->';
	endif;
}
add_action( 'kidsworld_hook_content_before', 'kidsworld_hook_content_before' );


/* ---------------------------------------------------------------------------
 * Hook of Content after
 * --------------------------------------------------------------------------- */
function kidsworld_hook_content_after() {
	if( kidsworld_option( 'pageoptions','enable-content-after-hook' ) ) :
		echo '<!-- kidsworld_hook_content_after -->';
			$hook = kidsworld_option('pageoptions','content-after-hook');
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo ( $hook );
		echo '<!-- kidsworld_hook_content_after -->';
	endif;
}
add_action( 'kidsworld_hook_content_after', 'kidsworld_hook_content_after' );


/* ---------------------------------------------------------------------------
 * Hook of Bottom
 * --------------------------------------------------------------------------- */
function kidsworld_hook_bottom() {
	if( kidsworld_option( 'pageoptions','enable-bottom-hook' ) ) :
		echo '<!-- kidsworld_hook_bottom -->';
			$hook = kidsworld_option('pageoptions','bottom-hook');
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo ( $hook );
		echo '<!-- kidsworld_hook_bottom -->';
	endif;
}
add_action( 'kidsworld_hook_bottom', 'kidsworld_hook_bottom' );?>