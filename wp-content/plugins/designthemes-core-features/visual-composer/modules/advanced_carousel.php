<?php add_action( 'vc_before_init', 'dt_sc_ad_carousel_wrapper_vc_map' );
function dt_sc_ad_carousel_wrapper_vc_map() {

	class WPBakeryShortCode_dt_sc_ad_carousel_wrapper extends WPBakeryShortCodesContainer {
	}

	vc_map( array(
		"name" => esc_html__( "Advanced Carousel", 'kidsworld-core' ),
		"base" => "dt_sc_ad_carousel_wrapper",
		"icon" => "dt_sc_ad_carousel_wrapper",
		"category" => DT_VC_CATEGORY,
		"content_element" => true,
		"js_view" => 'VcColumnView',
		'as_parent' => array( 'only' => 'dt_sc_iconbox, dt_sc_image_caption, dt_sc_team, dt_sc_post, dt_sc_portfolio_item, dt_sc_special_events_list, dt_sc_image' ),
		'description' => esc_html__( 'Advanced carousel wrapper', 'kidsworld-core' ),
		"params" => array(

			# Visible
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "No.of Items to Visible", 'kidsworld-core' ),
      			"param_name" => "visible",
      			'description' => esc_html__('Enter no.of items to visible. ex: 3')
      		),

			# Scroll
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "No.of Items to Scroll", 'kidsworld-core' ),
      			"param_name" => "scroll",
      			'description' => esc_html__('Enter no.of items to scroll. ex: 1')
      		),

      		# Auto Start
      		array(
      			'type' => 'dropdown',
				'heading' => esc_html__( 'Auto Start Animation?', 'kidsworld-core' ),
				'param_name' => 'auto',
				'value' => array(
					esc_html__('Yes','kidsworld-core') => 'true',
					esc_html__('No','kidsworld-core') => 'false',
					
				),
				'std' => 'false'
			),

			# Animation
			array(
				'type' => 'dropdown',
				'param_name' => 'animation',
				'value' => array(
					esc_html__('None','kidsworld-core') => 'none',
					esc_html__('Scroll','kidsworld-core') => 'scroll',
					esc_html__('Direct Scroll','kidsworld-core') => 'directscroll',
					esc_html__('Cross Fade','kidsworld-core') => 'crossfade',
					esc_html__('Cover','kidsworld-core') => 'cover',
					esc_html__('Uncover','kidsworld-core') => 'uncover',
					esc_html__('Fade','kidsworld-core') => 'fade',
					
				),
				'heading' => esc_html__( 'Animation', 'kidsworld-core' ),
				'description' => esc_html__( 'Select carousel animation', 'kidsworld-core' ),
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