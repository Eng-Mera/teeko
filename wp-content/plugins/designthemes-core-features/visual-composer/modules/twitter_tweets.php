<?php add_action( 'vc_before_init', 'dt_sc_twitter_tweets_vc_map' );
function dt_sc_twitter_tweets_vc_map() {

	vc_map( array( 
		"name" => esc_html__( "Twitter tweets", 'kidsworld-core' ),
		"base" => "dt_sc_twitter_tweets",
		"icon" => "dt_sc_twitter_tweets",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			# Consumer Key
			array(
				'type' => 'textfield',
				'param_name' => 'consumerkey',
				'heading' => esc_html__( 'Consumer key', 'kidsworld-core' ),
				'description' => esc_html__( 'Enter Consumer key', 'kidsworld-core' ),
			),

			# Consumer secret
			array(
				'type' => 'textfield',
				'param_name' => 'consumersecret',
				'heading' => esc_html__( 'Consumer secret', 'kidsworld-core' ),
				'description' => esc_html__( 'Enter Consumer secret', 'kidsworld-core' ),
			),

			# Access token 
			array(
				'type' => 'textfield',
				'param_name' => 'accesstoken',
				'heading' => esc_html__( 'Access token', 'kidsworld-core' ),
				'description' => esc_html__( 'Enter Access token', 'kidsworld-core' ),
			),

			# Access token secret
			array(
				'type' => 'textfield',
				'param_name' => 'accesstokensecret',
				'heading' => esc_html__( 'Access token secret', 'kidsworld-core' ),
				'description' => esc_html__( 'Enter Access token secret', 'kidsworld-core' ),
			),

			# Consumer Key
			array(
				'type' => 'textfield',
				'param_name' => 'username',
				'heading' => esc_html__( 'Twitter username', 'kidsworld-core' ),
				'description' => esc_html__( 'Enter Twitter username', 'kidsworld-core' ),
			),

			# Avatar
			array(
				'type' => 'dropdown',
				'param_name' => 'useravatar',
				'heading' => esc_html__('Show avatar?','kidsworld-core'),
				'value' => array( esc_html__('Yes','kidsworld-core') => 'yes' , esc_html__('No','kidsworld-core') => 'no' ),
				'std' => 'no'
			)
		)		
	) );
}?>