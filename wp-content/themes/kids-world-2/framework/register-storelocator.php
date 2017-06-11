<?php
add_filter( 'wpsl_templates', 'kidsworld_store_locator_template' );
function kidsworld_store_locator_template( $templates ) {

    $templates[] = array (
        'id'   => 'custom',
        'name' => 'Custom template',
        'path' => get_stylesheet_directory() . '/' . 'wpsl-templates/custom.php',
    );

    return $templates;
	
}

add_filter( 'wpsl_thumb_size', 'kidsworld_custom_thumb_size' );
function kidsworld_custom_thumb_size() {
    
    $size = array( 90, 90 );
    return $size;
	
}
?>