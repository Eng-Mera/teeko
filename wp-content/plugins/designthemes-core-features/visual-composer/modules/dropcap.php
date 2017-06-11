<?php add_action( 'vc_before_init', 'dt_sc_dropcap_vc_map' );
function dt_sc_dropcap_vc_map() {

	global $variations;

	vc_map( array(
		"name" => esc_html__( "Dropcap", 'kidsworld-core' ),
            "base" => "dt_sc_dropcap",
		"icon" => "dt_sc_dropcap",
		"category" => DT_VC_CATEGORY,
		"params" => array(

      		# Dropcap Text
      		array(
      			'type' => 'textfield',
      			'heading' => esc_html__( 'Text', 'kidsworld-core' ),
      			'param_name' => 'content',
      			'value' => 'A',
      			'admin_label' => true
      		),			

			# Types
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Types', 'kidsworld-core' ),
      			'param_name' => 'type',
      			'value' => array( 
      				esc_html__('Default','kidsworld-core') => 'default',
      				esc_html__('Circle','kidsworld-core') => 'circle',
      				esc_html__('Bordered Circle','kidsworld-core') => 'bordered-circle',
      				esc_html__('Square','kidsworld-core') => 'square',
      				esc_html__('Bordered Square','kidsworld-core') => 'bordered-square'
      			),
      			'description' => esc_html__( 'Select Dropcap type', 'kidsworld-core' ),
      			'std' => 'default',
      			'admin_label' => true
      		),

      		# Variation
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Color', 'kidsworld-core' ),
      			'param_name' => 'variation',
      			'value' => $variations,
      			'description' => esc_html__( 'Select dropcap color', 'kidsworld-core' ),
      		),

      		# Text Color
      		array(
      			'type' => 'colorpicker',
      			'heading' => esc_html__( 'Custom text color', 'kidsworld-core' ),
      			'param_name' => 'textcolor',
      			'description' => esc_html__( 'Select text color', 'kidsworld-core' ),
      		),

      		# BG Color
      		array(
      			'type' => 'colorpicker',
      			'heading' => esc_html__( 'Custom Background color', 'kidsworld-core' ),
      			'param_name' => 'bgcolor',
      			'description' => esc_html__( 'Select Background color', 'kidsworld-core' ),
                        'dependency' => array( 'element' => 'type', 'value' => array('circle','bordered-circle','square','bordered-square') )                        
      		)    		      		      					
		)
	) );	
}?>