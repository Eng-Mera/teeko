<?php add_action( 'vc_before_init', 'dt_sc_sociable_vc_map' );
function dt_sc_sociable_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Sociable", 'kidsworld-core' ),
		"base" => "dt_sc_sociable",
		"icon" => "dt_sc_sociable",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("To show sociables configured in admin panel, KidsWorld Options -> Layout -> Sociable",'kidsworld-core'),
		"params" => array(

			# Types
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Style', 'kidsworld-core' ),
      			'param_name' => 'style',
      			'value' => array( 
      				esc_html__('Default','kidsworld-core') => '',
					esc_html__('Rounded Border','kidsworld-core') => 'rounded-border',
					esc_html__('Rounded Square','kidsworld-core') => 'rounded-square',
					esc_html__('Diamond Square Border','kidsworld-core') => 'diamond-square-border',
					esc_html__('Hexagon With Border','kidsworld-core') => 'hexagon-with-border',
					esc_html__('Square Border','kidsworld-core') => 'square-border',
      			),
      			'description' => esc_html__( 'Select style of sociable.', 'kidsworld-core' ),
      			'std' => '',
      			'admin_label' => true
      		),

                  # Enable Social Color
                  array(
                        'type' => 'dropdown',
                        'heading' => esc_html__( 'Enable Default Social Color', 'kidsworld-core' ),
                        'param_name' => 'social_color',
                        'value' => array( 
                              esc_html__('No','kidsworld-core') => '',
                              esc_html__('Yes') => 'yes',
                        ),
                        'description' => esc_html__( 'If you wish to have default social icons color, choose "Yes" here.', 'kidsworld-core' ),
                  ),

			# Class
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'kidsworld-core' ),
      			"param_name" => "class",
      			'description' => esc_html__('Style particular element differently - add a class name and refer to it in custom CSS','kidsworld-core')
      		)
		)
	) );
} ?>