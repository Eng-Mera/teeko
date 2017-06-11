<?php add_action( 'vc_before_init', 'dt_sc_pricing_table_item_vc_map' );
function dt_sc_pricing_table_item_vc_map() {
	vc_map( array( 
		"name" => esc_html__( "Pricing Box 1", 'kidsworld-core' ),
		"base" => "dt_sc_pricing_table_item",
		"icon" => "dt_sc_pricing_table_item",
		"category" => DT_VC_CATEGORY,		
		"params" => array(

			// Heading
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Title", 'kidsworld-core' ),
				'admin_label' => true,
      			"param_name" => "heading"
      		),

			// Sub Title
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Sub title", 'kidsworld-core' ),
				'admin_label' => true,
      			"param_name" => "subtitle"
      		),

      		// selected
      		array(
      			'type' => 'checkbox',
      			'heading' => esc_html__( 'Is active?', 'kidsworld-core' ),
				'admin_label' => true,
      			'param_name' => 'highlight',
      			'description' => esc_html__( 'If checked pricing box will be highlighted', 'kidsworld-core' ),
      			'value' => array( esc_html__( 'Yes', 'kidsworld-core' ) => 'yes' )
      		),

      		// Thumb
			array(
				'type' => 'attach_image',
				'heading' => esc_html__( 'Image', 'kidsworld-core' ),
				'param_name' => 'thumb',
				'description' => esc_html__( 'Select image from media library', 'kidsworld-core' ),
			),

			// Currency
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Currency", 'kidsworld-core' ),
      			"param_name" => "currency",
      			"description" => esc_html__("Enter the price for this package e.g. $157.99 enter $ here",'kidsworld-core'),
      		),

			// Price
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Price", 'kidsworld-core' ),
      			"param_name" => "price",
      			"description" => esc_html__("Enter the price for this package e.g. $157.99 enter 157 here",'kidsworld-core'),
      			),

			// Price decimal
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Price", 'kidsworld-core' ),
      			"param_name" => "decimal",
      			"description" => esc_html__("Enter the price for this package e.g. $157.99 enter .99 here",'kidsworld-core')
      		),

			// Price Unit
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Price Unit", 'kidsworld-core' ),
      			"param_name" => "permonth",
      			"description" => esc_html__("Enter the price unit for this package e.g. / Month",'kidsworld-core')
      		),

      		// Content
      		array(
      			'type' => 'textarea_html',
      			'heading' => esc_html__( 'Content', 'kidsworld-core' ),
      			'param_name' => 'content',
				'value' => '<ul><li>Lorem ipsum dolor sit</li><li>Praesent convallis nibh</li><li>Nullam ac sapien sit</li><li>Phasellus auctor augue</li></ul>'
      		),

      		# URL
      		array(
      			'type' => 'vc_link',
      			'heading' => esc_html__( 'URL (Link)', 'kidsworld-core' ),
      			'param_name' => 'link',
      			'description' => esc_html__( 'Add link to this package', 'kidsworld-core' )
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