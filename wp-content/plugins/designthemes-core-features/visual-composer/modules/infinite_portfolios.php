<?php 
add_filter( 'vc_autocomplete_dt_sc_infinite_portfolios_portfolio_entries_callback' , 'dt_sc_infinite_portfolios_portfolio_entries_callback', 10, 1);
function dt_sc_infinite_portfolios_portfolio_entries_callback( $search_string ) {
	$data = array();
	$vc_taxonomies = get_terms( 'portfolio_entries', array(
		'hide_empty' => false,
		'search' => $search_string,
	) );

	if ( is_array( $vc_taxonomies ) && ! empty( $vc_taxonomies ) ) {
		foreach ( $vc_taxonomies as $t ) {
			if ( is_object( $t ) ) {
				$data[] = vc_get_term_object( $t );
			}
		}
	}

	return $data;
}

add_filter( 'vc_autocomplete_dt_sc_infinite_portfolios_portfolio_entries_render' , 'dt_sc_infinite_portfolios_portfolio_entries_render', 10, 1);
function dt_sc_infinite_portfolios_portfolio_entries_render( $term ) {

	$terms = get_terms( array_keys( 'portfolio_entries' ), array(
		'include' => array( $term['value'] ),
		'hide_empty' => false,
	) );

	$data = false;

	if ( is_array( $terms ) && 1 === count( $terms ) ) {
		$term = $terms[0];
		$data = vc_get_term_object( $term );
	}

	return $data;
}

add_action( 'vc_before_init', 'dt_sc_masonry_portfolios_vc_map' );
function dt_sc_masonry_portfolios_vc_map() {

	$arr = array( esc_html__('Yes','kidsworld-core') => 'yes', esc_html__('No','kidsworld-core') => 'no' );

	vc_map( array(
		"name" => esc_html__( "Infinite Portfolios", 'kidsworld-core' ),
		"base" => "dt_sc_infinite_portfolios",
		"icon" => "dt_sc_infinite_portfolios",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			array(
				'type' => 'autocomplete',
				'heading' => esc_html__( 'Choose Category', 'kidsworld-core' ),
				'param_name' => 'portfolio_entries',
				'settings' => array(
					'multiple' => true,
					'min_length' => 1,
					'groups' => true,
					'unique_values' => true,
					'display_inline' => true,
					'delay' => 500,
					'auto_focus' => true,),
				'description' => esc_html__( 'Enter portfolio categories to show from it', 'kidsworld-core' ),
			),

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Total items', 'kidsworld-core'),
				'param_name' => 'posts_per_page',
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Display Style', 'kidsworld-core' ),
				'param_name' => 'display_style',
				'value' => array(
					esc_html__('Show all','kidsworld-core') => 'all',
					esc_html__('Load more','kidsworld-core') => 'load-more',
					esc_html__('Lazy loading','kidsworld-core') => 'lazy',
				),
				'description' => esc_html__( 'Select display style for grid.', 'kidsworld-core' )
			),

			array(
				'type' => 'textarea',
				'heading' => esc_html__( 'Warning Message', 'kidsworld-core'),
				'param_name' => 'warning',
			),			
		)
	) );
} ?>