<?php add_action( 'vc_before_init', 'dt_sc_image_caption_vc_map' );
function dt_sc_image_caption_vc_map() {

	vc_map( array(
		"name" => esc_html__("Image Caption", 'kidsworld-core'),
		"base" => "dt_sc_image_caption",
		"icon" => "dt_sc_image_caption",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("Add different types of image caption",'kidsworld-core'),
		"params" => array(

			# Type
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Type', 'kidsworld-core'),
				'param_name' => 'type',
				'value' => array( esc_html__('Type 1','kidsworld-core') => '',
					esc_html__('Type 2','kidsworld-core') => 'type2',
					esc_html__('Type 3','kidsworld-core') => 'type3',
					esc_html__('Type 4','kidsworld-core') => 'type4',
					esc_html__('Type 5','kidsworld-core') => 'type5',
					esc_html__('Type 6','kidsworld-core') => 'type6',
					esc_html__('Type 7','kidsworld-core') => 'type7',
					esc_html__('Type 8','kidsworld-core') => 'type8',
					esc_html__('Type 9','kidsworld-core') => 'type9',
				),
			),			

      		# Title
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Title", 'kidsworld-core' ),
      			"param_name" => "title",
      		),

      		# Sub Title
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Sub Title", 'kidsworld-core' ),
      			"param_name" => "subtitle",
      		), 

			# Image url
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image URL', 'kidsworld-core'),
				'param_name' => 'image',
			),

			# Image Position
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Image Position', 'kidsworld-core'),
				'param_name' => 'imgpos',
				'value' => array( esc_html__('Default','kidsworld-core') => '', esc_html__('Below Content','kidsworld-core') => 'bottom' )
			),

			# Icon Type
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Icon Type', 'kidsworld-core'),
				'param_name' => 'icon_type',
				'value' => array( esc_html__('Icon class','kidsworld-core') => 'icon_class', esc_html__('Image','kidsworld-core') => 'icon_url' )
			),

			# Icon Class
			array(
				'type' => 'textfield',
				'heading' => esc_html__('Icon Class', 'kidsworld-core'),
				'param_name' => 'icon',
				'dependency' => array('element' => 'icon_type','value' => 'icon_class')
			),

			# Icon url
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image URL', 'kidsworld-core'),
				'param_name' => 'iconurl',
				'dependency' => array('element' => 'icon_type','value' => 'icon_url')
			),

	          # Variations
	          array(
	                'type' => 'colorpicker',
	                'heading' => esc_html__( 'Color', 'kidsworld-core' ),
	                'param_name' => 'color',
	          ),			

			# Content
			array(
				'type' => 'textarea_html',
				'heading' => esc_html__('Content','kidsworld-core'),
				'param_name' => 'content',
				'value' => '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>'
			),			

			# Extra Class
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'kidsworld-core' ),
      			"param_name" => "class",
      			'description' => esc_html__('Style particular icon box element differently - add a class name and refer to it in custom CSS','kidsworld-core')
      		)
		)
	) );
} ?>