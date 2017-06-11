<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php 
	if(kidsworld_option('general', 'enable-responsive')){
		echo "<meta name='viewport' content='width=device-width, initial-scale=1'>\r";
	}
    ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>
<?php
$type = kidsworld_opts_get('comingsoon-style', 'type1');
$darkbg = kidsworld_opts_get('uc-darkbg', '');
$type .= !empty( $darkbg ) ? ' dt-sc-dark-bg' : '';?>

<body <?php body_class(); ?>>

<div class="wrapper under-construction <?php echo esc_attr($type); ?>"><?php
	$pageid = kidsworld_option('pageoptions','comingsoon-pageid');
	if( !empty($pageid) ):
		$page = get_post( $pageid, ARRAY_A );
		echo DTCoreShortcodesDefination::dtShortcodeHelper ( stripslashes($page['post_content']) );
	else:
		echo '<div class="uc-wrapper-inner">';
			echo '<h2>'.esc_html__('Website is almost ready', 'kids-world').'</h2>';
			echo '<p>'.esc_html__('Our website is under construction.', 'kids-world').'</p>';
			echo '<p>'.esc_html__("We'll be here soon with our new awesome.", 'kids-world').'</p>';
			echo '<div class="dt-sc-hr-invisible-xsmall"></div>';

			if( kidsworld_option('pageoptions','show-launchdate') == 'true'):
				$date = kidsworld_option('pageoptions','comingsoon-launchdate');
				$datetime = new DateTime('tomorrow');
				$date = !empty( $date ) ? $date : $datetime->format('m/d/Y');
				$offset = kidsworld_option('pageoptions','comingsoon-timezone');
				$offset = !empty( $offset ) ? $offset : '+5';

				echo '<div class="downcount" data-date="'.$date.'" data-offset="'.$offset.'">';
					echo '<div class="dt-sc-counter-wrapper">';
						echo '<div class="counter-icon-wrapper">';
							echo '<div class="dt-sc-counter-number days">00</div>';
						echo '</div>';
						echo '<h3 class="title">'.esc_html__('Days', 'kids-world').'</h3>';
					echo '</div>';
					echo '<div class="dt-sc-counter-wrapper">';
						echo '<div class="counter-icon-wrapper">';
							echo '<div class="dt-sc-counter-number hours">00</div>';
						echo '</div>';
						echo '<h3 class="title">'.esc_html__('Hours', 'kids-world').'</h3>';
					echo '</div>';
					echo '<div class="dt-sc-counter-wrapper">';
						echo '<div class="counter-icon-wrapper">';
							echo '<div class="dt-sc-counter-number minutes">00</div>';
						echo '</div>';
						echo '<h3 class="title">'.esc_html__('Minutes', 'kids-world').'</h3>';
					echo '</div>';
					echo '<div class="dt-sc-counter-wrapper last">';
						echo '<div class="counter-icon-wrapper">';
							echo '<div class="dt-sc-counter-number seconds">00</div>';
						echo '</div>';
						echo '<h3 class="title">'.esc_html__('Seconds', 'kids-world').'</h3>';
					echo '</div>';
				echo '</div>';
			endif;
		echo '</div>';
	endif; ?>
</div>
</body>
<?php wp_footer(); ?>
</html>