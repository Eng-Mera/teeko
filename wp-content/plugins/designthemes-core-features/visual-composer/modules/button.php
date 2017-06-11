<?php add_action( 'vc_before_init', 'dt_sc_button_vc_map' );
function dt_sc_button_vc_map() {

	global $variations;
	$variations['Black'] = 'black';

	global $dt_animation_types;

	vc_map( array(
		"name" => esc_html__( "Button", 'kidsworld-core' ),
		"base" => "dt_sc_button",
		"icon" => "dt_sc_button",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			// Button Text
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Text', 'kidsworld-core' ),
				'param_name' => 'title',
				'value' => esc_html__( 'Text on the button', 'kidsworld-core' ),
			),

			// Button Link
			array(
				'type' => 'vc_link',
				'heading' => esc_html__( 'URL (Link)', 'kidsworld-core' ),
				'param_name' => 'link',
				'description' => esc_html__( 'Add link to button', 'kidsworld-core' ),
			),

			// Button Size
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Size', 'kidsworld-core' ),
				'description' => esc_html__( 'Select button display size', 'kidsworld-core' ),
				'param_name' => 'size',
				'value' => array(
					esc_html__( 'Small', 'kidsworld-core' ) => 'small',
					esc_html__( 'Medium', 'kidsworld-core' ) => 'medium',
					esc_html__( 'Large', 'kidsworld-core' ) => 'large',
					esc_html__( 'Xlarge', 'kidsworld-core' ) => 'xlarge',
				),
				'std' => 'small'
			),

			// Content Color			
			array(
				"type" => "colorpicker",
      			"heading" => esc_html__( "Text color", 'kidsworld-core' ),
      			"param_name" => "textcolor",
      			"description" => esc_html__( "Select text color", 'kidsworld-core' ),
      		),

			array(
				"type" => "textfield",
      			"heading" => esc_html__( "Text size", 'kidsworld-core' ),
      			"param_name" => "textsize",
      			"description" => esc_html__( "Select text size ( eg: 10px or 1.5em )", 'kidsworld-core' ),
      		),      		

      		// Custom Font
      		array(
      			'type' => 'checkbox',
				'heading' => esc_html__( 'Use theme default font family?', 'kidsworld-core' ),
				'param_name' => 'use_theme_fonts',
				'value' => array( esc_html__( 'Yes', 'kidsworld-core' ) => 'yes'  ),
				'std' => 'yes',
				'description' => esc_html__( 'Use font family from the theme.', 'kidsworld-core' ),
			),

			array(
				'type' => 'google_fonts',
				'param_name' => 'google_fonts',
				'group' => esc_html__('Typography','kidsworld-core'),
				'value' => 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
				'settings' => array(
					'fields' => array(
						'font_family_description' => esc_html__( 'Select font family.', 'kidsworld-core' ),
						'font_style_description' => esc_html__( 'Select font styling.', 'kidsworld-core' ),
					),
				),
				'dependency' => array(
					'element' => 'use_theme_fonts',
					'value_not_equal_to' => 'yes',
				),
			),


      		// Variation
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Background Color', 'kidsworld-core' ),
      			'admin_label' => true,
      			'param_name' => 'color',
      			'value' => $variations,
      			'description' => esc_html__( 'Select button background color', 'kidsworld-core' ),
      		),

			// BG Color			
			array(
				"type" => "colorpicker",
      			"heading" => esc_html__( "Custom Background color", 'kidsworld-core' ),
      			"param_name" => "bgcolor",
      			"description" => esc_html__( "Select button background color", 'kidsworld-core' ),
				'dependency' => array( 'element' => 'color', 'value' =>'-' )
      		),      		      					

			// Button Style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Style', 'kidsworld-core' ),
				'description' => esc_html__( 'Select button display style', 'kidsworld-core' ),
				'param_name' => 'style',
				'value' => array(
					esc_html__( 'None', 'kidsworld-core') => '',
					esc_html__( 'Bordered', 'kidsworld-core' ) => 'bordered',
					esc_html__( 'Filled', 'kidsworld-core' ) => 'filled',
					esc_html__( 'Filled Rounded Corner', 'kidsworld-core' ) => 'filled rounded-corner',
					esc_html__( 'Rounded Corner', 'kidsworld-core' ) => 'rounded-corner',
					esc_html__( 'Rounded Border', 'kidsworld-core' ) => 'rounded-border',
					esc_html__( 'Fully Rounded Border', 'kidsworld-core' ) => 'fully-rounded-border',
					esc_html__( 'Fully Rounded Corner', 'kidsworld-core' ) => 'filled fully-rounded-corner',
				),				
			),

			// Icon Type
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__('Icon Type','kidsworld-core'),
      			'param_name' => 'icon_type',
      			'value' => array(
      				esc_html__('None', 'kidsworld-core' ) => '',	 
      				esc_html__('Font Awesome', 'kidsworld-core' ) => 'fontawesome' ,
      				esc_html__('Class','kidsworld-core') => 'css_class'
      			),
      			'std' => ''
      		),

			// Icon Alignment
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Icon Alignment', 'kidsworld-core' ),
				'description' => esc_html__( 'Select icon alignment', 'kidsworld-core' ),
				'param_name' => 'iconalign',
				'value' => array(
					esc_html__( 'Left', 'kidsworld-core' ) => 'icon-left with-icon',
					esc_html__( 'Right', 'kidsworld-core' ) => 'icon-right with-icon',
				),
				'dependency' => array( 'element' => 'icon_type', 'value' => array( 'fontawesome', 'css_class' ) ),
				'std' => ''
			),

      		// Font Awesome
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Font Awesome', 'kidsworld-core' ),
				'param_name' => 'iconclass',
				'settings' => array( 'emptyIcon' => false, 'iconsPerPage' => 4000 ),
				'dependency' => array( 'element' => 'icon_type', 'value' => 'fontawesome' ),
				'description' => esc_html__( 'Select icon from library', 'kidsworld-core' ),
			),

			// Custom Class
            array(
            	'type' => 'textfield',
            	'heading' => esc_html__( 'Custom icon class', 'kidsworld-core' ),
            	'param_name' => 'icon_css_class',
            	'dependency' => array( 'element' => 'icon_type', 'value' => 'css_class' )
            ),

			// Button Animation
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Animation', 'kidsworld-core' ),
				'description' => esc_html__( 'Select button animation', 'kidsworld-core' ),
				'param_name' => 'animation',
				'value' => $dt_animation_types
			),			

          	// Extra class name
          	array(
          		'type' => 'textfield',
          		'heading' => esc_html__( 'Extra class name', 'kidsworld-core' ),
          		'param_name' => 'class',
          		'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS', 'kidsworld-core' )
          	),

			// Custom CSS
			array(
				'type' => 'css_editor',
				'heading' => esc_html__( 'CSS box', 'kidsworld-core' ),
				'param_name' => 'css',
				'group' => esc_html__( 'Design Options', 'kidsworld-core' )
			),
		)
	) );
} ?>