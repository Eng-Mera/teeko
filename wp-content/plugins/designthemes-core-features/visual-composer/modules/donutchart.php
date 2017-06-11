<?php add_action( 'vc_before_init', 'dt_sc_donutchart_vc_map' );
function dt_sc_donutchart_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Donut chart", 'kidsworld-core' ),
		"base" => "dt_sc_donutchart",
		"icon" => "dt_sc_donutchart",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			// Label			
			array(
				"type" => "textfield",
      			'admin_label' => true,
      			"heading" => esc_html__( "Label", 'kidsworld-core' ),
      			"param_name" => "title",
      			"description" => esc_html__( "Enter text used as title of donut chart", 'kidsworld-core' ),
      		),

			// Size
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Size', 'kidsworld-core'),
				'param_name' => 'size',
				'admin_label' => true,
				'value' => array(
					esc_html__('Small','kidsworld-core') => 'small',
					esc_html__('Medium','kidsworld-core') => 'medium',
					esc_html__('Large','kidsworld-core') => 'large'					
				),
				'std' => 'medium'
			),

			// Datasize
			array(
				"type" => "textfield",
      			"heading" => esc_html__( "Data size", 'kidsworld-core' ),
      			"param_name" => "datasize",
      			'value' => 100,
      			"description" => esc_html__( "Enter data size", 'kidsworld-core' ),
      		),

			// Datasize
			array(
				"type" => "textfield",
      			"heading" => esc_html__( "Data size", 'kidsworld-core' ),
      			"param_name" => "datapercent",
      			'value' => 60,
      			"description" => esc_html__( "Enter data percentage eg: 70% , give 70 only", 'kidsworld-core' ),
      		),

			// BG Color			
			array(
				"type" => "colorpicker",
      			"heading" => esc_html__( "Background color", 'kidsworld-core' ),
      			"param_name" => "bgcolor",
      			"description" => esc_html__( "Select chart background color", 'kidsworld-core' ),
      			'value' => '#79deff'
      		),

			// FG Color			
			array(
				"type" => "colorpicker",
      			"heading" => esc_html__( "Foreground color", 'kidsworld-core' ),
      			"param_name" => "fgcolor",
      			"description" => esc_html__( "Select chart foreground color", 'kidsworld-core' ),
      			'value' => '#666666'
      		)      		      		      					
		)
	) );
}?>