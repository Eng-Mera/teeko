<?php add_action( 'vc_before_init', 'dt_sc_video_manager_vc_map' );
function dt_sc_video_manager_vc_map() {

	class WPBakeryShortCode_dt_sc_video_manager extends WPBakeryShortCodesContainer {
	}

	class WPBakeryShortCode_dt_sc_video_item extends WPBakeryShortCode {
	}
	
	// Video Manager
	vc_map( array(
		"name" => esc_html__( "Video Manager", 'kidsworld-core' ),
		"base" => "dt_sc_video_manager",
		"icon" => "dt_sc_video_manager",
		"category" => DT_VC_CATEGORY,
		"content_element" => true,
		"js_view" => 'VcColumnView',
		'as_parent' => array( 'only' => 'dt_sc_video_item' ),
		'description' => esc_html__( 'Show videos', 'kidsworld-core' ),
		'show_settings_on_create' => false,
		"params" => array()
	) );
	
	// Video Item
	vc_map( array(
		"name" => esc_html__( "Video", 'kidsworld-core' ),
		"base" => "dt_sc_video_item",
		"icon" => "dt_sc_video_manager",
		"category" => DT_VC_CATEGORY,
		'as_child' => array( 'only' => 'dt_sc_video_manager' ),
		'description' => esc_html__( 'Add video', 'kidsworld-core' ),
		"params" => array(
		
			# Title
			array(
				'type' => 'textfield',
				'param_name' => 'title',
				'heading' => esc_html__( 'Title', 'kidsworld-core' ),
				'description' => esc_html__( 'Enter title', 'kidsworld-core' ),
			),

			# Sub Title
			array(
				'type' => 'textfield',
				'param_name' => 'subtitle',
				'heading' => esc_html__( 'Sub Title', 'kidsworld-core' ),
				'description' => esc_html__( 'Enter sub title', 'kidsworld-core' ),
			),

			// Image
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image','kidsworld-core'),
				'param_name' => 'image'
            ),

			# Video Link
			array(
				'type' => 'textfield',
				'param_name' => 'link',
				'heading' => esc_html__( 'Video link', 'kidsworld-core' ),
				'description' => esc_html__( 'Enter link to video ( Eg: https://vimeo.com/46926279 )', 'kidsworld-core' ),
				'admin_label' => true				
			)
		)
	) );
}?>