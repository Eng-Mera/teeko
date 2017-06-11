<?php
class kidsworld_likes_Love {
	
	function __construct() {
		add_action( 'wp_ajax_kidsworld_like_love', array( &$this, 'kidsworld_likes_ajax' ) );
		add_action( 'wp_ajax_nopriv_kidsworld_like_love', array( &$this, 'kidsworld_likes_ajax' ) );
	}

	function kidsworld_likes_ajax( $post_id ) {

		if ( isset( $_POST['post_id'] ) ) {
			echo ($this->kidsworld_likes_love( intval($_POST['post_id']), 'update' ));
		} else {
			echo ($this->kidsworld_likes_love( intval($_POST['post_id']), 'get' ));
		}
		exit;
	}
	
	function kidsworld_likes_love( $post_id, $action = 'get' ) {
		if ( ! is_numeric( $post_id ) ) return;

		switch ( $action ) {

			case 'get':
				$love_count = get_post_meta( $post_id, 'dt-themes-post-love', true );
				if ( !$love_count ) {
					$love_count = 0;
					add_post_meta( $post_id, 'dt-themes-post-love', $love_count, true );
				}
	
				return $love_count;
			break;

			case 'update':
				$love_count = get_post_meta( $post_id, 'dt-themes-post-love', true );
				if ( isset( $_COOKIE['dt-themes-post-love-'. $post_id] ) ) return $love_count;

				$love_count++;
				update_post_meta( $post_id, 'dt-themes-post-love', $love_count );
				setcookie( 'dt-themes-post-love-'. $post_id, $post_id, time()*20, '/' );

				return $love_count;
			break;

		}
	}

	function kidsworld_likes_get() {
		global $post;

		$output = $this->kidsworld_likes_love( $post->ID );
		$class = '';
		if ( isset( $_COOKIE['dt-themes-post-love-'. $post->ID] ) ) {
			$class = 'liked';
		}

		return '<a href="#" class="dt-like-this fa fa-heart-o '. $class .'" data-id="'. $post->ID .'"><span>'. $output .'</span></a>';
		
	}
}

$kidsworld_like_love = kidsworld_global_variables('kidsworld_like_love');
$kidsworld_like_love = new kidsworld_likes_Love();

function kidsworld_like_love( $return = '' ) {	
	
	global $kidsworld_like_love;
	return $kidsworld_like_love->kidsworld_likes_get();
}?>