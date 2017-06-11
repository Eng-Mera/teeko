<?php add_action( 'vc_before_init', 'dt_sc_tm_carousel_wrapper_vc_map' );
function dt_sc_tm_carousel_wrapper_vc_map() {

	class WPBakeryShortCode_dt_sc_tm_carousel_wrapper extends WPBakeryShortCodesContainer {
	}

	class WPBakeryShortCode_dt_sc_tm_carousel_item extends WPBakeryShortCode {
	}

	vc_map( array(
		"name" => esc_html__( "Testimonial carousel", 'kidsworld-core' ),
		"base" => "dt_sc_tm_carousel_wrapper",
		"icon" => "dt_sc_tm_carousel_wrapper",
		"category" => DT_VC_CATEGORY,
		"content_element" => true,
		"js_view" => 'VcColumnView',
		'as_parent' => array( 'only' => 'dt_sc_tm_carousel_item' ),
		'description' => esc_html__( 'Testimonial carousel wrapper', 'kidsworld-core' ),
		"params" => array(

			# Type
			array(
				'type' => 'dropdown',
				'param_name' => 'type',
				'value' => array(
					esc_html__('Type 1','kidsworld-core') => 'type1',
					esc_html__('Type 2','kidsworld-core') => 'type2',
					esc_html__('Type 3','kidsworld-core') => 'type3',
					esc_html__('Type 4','kidsworld-core') => 'type4',
					esc_html__('Type 5','kidsworld-core') => 'type5',
					esc_html__('Type 6','kidsworld-core') => 'type6',
					esc_html__('Type 7','kidsworld-core') => 'type7',
					esc_html__('Type 8','kidsworld-core') => 'type8'					
				),
				'heading' => esc_html__( 'Type', 'kidsworld-core' ),
				'description' => esc_html__( 'Select testimonial carousel display type', 'kidsworld-core' ),
				'std' => 'type2',
				'admin_label' => true
			),

			# Animation
			array(
				'type' => 'dropdown',
				'param_name' => 'animation',
				'value' => array(
					esc_html__('Scroll','kidsworld-core') => 'scroll',
					esc_html__('Cross Fade','kidsworld-core') => 'crossfade',
					esc_html__('Cover','kidsworld-core') => 'cover'
				),
				'heading' => esc_html__( 'Animation', 'kidsworld-core' ),
				'description' => esc_html__( 'Select testimonial carousel animation', 'kidsworld-core' ),
				'std' => 'scroll',
				'admin_label' => true
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
}?>