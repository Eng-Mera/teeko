<?php add_action( 'vc_before_init', 'dt_sc_events_list_vc_map' );
function dt_sc_events_list_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Events List", 'kidsworld-core' ),
		"base" => "dt_sc_events_list",
		"icon" => "dt_sc_events_list",
		"category" => DT_VC_CATEGORY .' ( '.esc_html__('Events','kidsworld-core').')',
		"params" => array(

			// Title
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'kidsworld-core' ),
				'param_name' => 'title',
				'description' => esc_html__( 'Enter title', 'kidsworld-core' ),
				'admin_label' => true
			),

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
		)
	) );
}?>