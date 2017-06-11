<?php add_action( 'vc_before_init', 'dt_sc_portfolios_vc_map' );
function dt_sc_portfolios_vc_map() {

	$arr = array( esc_html__('Yes','kidsworld-core') => 'yes', esc_html__('No','kidsworld-core') => 'no' );

	vc_map( array(
		"name" => esc_html__( "Portfolio Items", 'kidsworld-core' ),
		"base" => "dt_sc_portfolios",
		"icon" => "dt_sc_portfolios",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			// Post Count
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Post Counts', 'kidsworld-core' ),
				'param_name' => 'count',
				'description' => esc_html__( 'Enter post count', 'kidsworld-core' ),
				'admin_label' => true
			),

			// Post column
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Columns','kidsworld-core'),
				'param_name' => 'column',
				'value' => array(
					esc_html__('II Columns','kidsworld-core') => 2 ,
					esc_html__('III Columns','kidsworld-core') => 3,
					esc_html__('IV Columns','kidsworld-core') => 4,

				),
				'std' => '3'
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
				'std' => 'type1',
				'admin_label' => true
			),

			// Allow Grid Space
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Allow Grid Space','kidsworld-core'),
				'param_name' => 'allow_gridspace',
				'value' => $arr
			),

			// Allow Filter
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Allow Filter','kidsworld-core'),
				'param_name' => 'allow_filter',
				'value' => $arr
			),

			// Term ID(s)
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Terms', 'kidsworld-core' ),
				'param_name' => 'terms',
				'description' => esc_html__( 'Enter Portfolio Terms', 'kidsworld-core' )
			),						
		)
	) );
} ?>