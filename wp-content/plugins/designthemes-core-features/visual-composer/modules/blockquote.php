<?php add_action( 'vc_before_init', 'dt_sc_blockquote_vc_map' );
function dt_sc_blockquote_vc_map() {

	global $variations;

	vc_map( array(
		"name" => esc_html__( "Blockquote", 'kidsworld-core' ),
            "base" => "dt_sc_blockquote",
		"icon" => "dt_sc_blockquote",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			# Types
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Types', 'kidsworld-core' ),
      			'param_name' => 'type',
                        'admin_label' => true,
      			'value' => array( esc_html__('Type 1','kidsworld-core') => 'type1', esc_html__('Type 2','kidsworld-core') => 'type2', esc_html__('Type 3','kidsworld-core') => 'type3',
					esc_html__('Type 4','kidsworld-core') => 'type4' ),
      			'description' => esc_html__( 'Select blockquote type', 'kidsworld-core' ),
      		),

                  # Title
                  array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Title", 'kidsworld-core' ),
                        "param_name" => "title",
                        'dependency' => array(
                              'element' => 'type',
                              'value' => 'type4',
                        ),
                  ),

			# Align
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Align', 'kidsworld-core' ),
      			'param_name' => 'align',
                        'admin_label' => true,
                        'value' => array( 
      				esc_html__('None','kidsworld-core') => '',
      				esc_html__('Left','kidsworld-core') => 'alignleft',
      				esc_html__('Center','kidsworld-core') => 'aligncenter',
      				esc_html__('Right','kidsworld-core') => 'alignright',
      			),
      			'description' => esc_html__( 'Select blockquote type', 'kidsworld-core' ),
      		),

      		# Cite
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Cite", 'kidsworld-core' ),
      			"param_name" => "cite"
      		),

      		# Role
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Role", 'kidsworld-core' ),
      			"param_name" => "role"
      		),

      		// Content
			array(
				'type' => 'textarea_html',
				'heading' => esc_html__('Content','kidsworld-core'),
				'param_name' => 'content',
				'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'
                  ),
			
			# Variation
                  array(
      				'type' => 'dropdown',
      				'heading' => esc_html__( 'Color', 'kidsworld-core' ),
      				'admin_label' => true,
      				'param_name' => 'variation',
      				'value' => $variations,
      				'description' => esc_html__( 'Select Text color', 'kidsworld-core' ),
                  ),
			
		)
	) );	
} ?>