<?php add_action( 'vc_before_init', 'dt_sc_special_events_list_vc_map' );
function dt_sc_special_events_list_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Special Events List", 'kidsworld-core' ),
		"base" => "dt_sc_special_events_list",
		"icon" => "dt_sc_special_events_list",
		"category" => DT_VC_CATEGORY .' ( '.esc_html__('Events','kidsworld-core').')',
		"params" => array(

			// Limit
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Limit', 'kidsworld-core' ),
				'param_name' => 'limit',
				'description' => esc_html__( 'Enter limit', 'kidsworld-core' )
			),

			// Categories
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Categories', 'kidsworld-core' ),
				'param_name' => 'categories',
				'description' => esc_html__( 'Enter categories', 'kidsworld-core' )
			),									

			// Post type
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Type','kidsworld-core'),
				'param_name' => 'type',
				'value' => array(
					esc_html__('Type 1','kidsworld-core') => 'type1', 
					esc_html__('Type 2','kidsworld-core') => 'type2', 
					esc_html__('Type 3','kidsworld-core') => 'type3', 
					esc_html__('Type 4','kidsworld-core') => 'type4', 
					esc_html__('Type 5','kidsworld-core') => 'type5'
				),
				'std' => 'type1'
			),
			
			# Variations
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Color', 'kidsworld-core' ),
				'param_name' => 'color',
			),

		)
	) );
}?>