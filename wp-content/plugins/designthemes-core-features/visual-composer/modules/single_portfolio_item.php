<?php add_action( 'vc_before_init', 'dt_sc_portfolio_item_vc_map' );
function dt_sc_portfolio_item_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Single Portfolio Item", 'kidsworld-core' ),
		"base" => "dt_sc_portfolio_item",
		"icon" => "dt_sc_portfolio_item",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			// Post ID
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'ID', 'kidsworld-core' ),
				'param_name' => 'id',
				'description' => esc_html__( 'Enter post ID', 'kidsworld-core' ),
				'admin_label' => true
			),

			// Post style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Style','kidsworld-core'),
				'param_name' => 'style',
				'value' => array(
					esc_html__('Modern Title','kidsworld-core') => 'type1', 
					esc_html__('Title & Icons Overlay','kidsworld-core') => 'type2', 
					esc_html__('Title Overlay','kidsworld-core') => 'type3', 
					esc_html__('Icons Only','kidsworld-core') => 'type4', 
					esc_html__('Classic','kidsworld-core') => 'type5', 
					esc_html__('Minimal Icons','kidsworld-core') => 'type6', 
					esc_html__('Presentation','kidsworld-core') => 'type7', 
					esc_html__('Girly','kidsworld-core') => 'type8', 
					esc_html__('Art','kidsworld-core') => 'type9' 
				),
				'std' => 'type1'
			)
		)
	) );
}?>