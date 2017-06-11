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

<body <?php body_class(); ?>>

<?php
// loading
$loader = kidsworld_option('general','enable-loader');
if( isset($loader) ) echo '<div class="loader"><div class="loader-inner ball-scale-multiple"><div></div><div></div><div></div></div></div>';
// top hook
do_action( 'kidsworld_hook_top' ); ?>

<!-- **Wrapper** -->
<div class="wrapper">
	<div class="inner-wrapper">

		<!-- **Header Wrapper** -->
        <?php $hdarkbg = kidsworld_option('layout','header-darkbg'); $class = isset( $hdarkbg ) ? "dt-sc-dark-bg" : ""; ?>
		<div id="header-wrapper" class="<?php echo esc_attr( $class );?>">
            <!-- **Header** -->
            <header id="header"><?php
				//top bar
				$topbar 	= kidsworld_option('layout','layout-topbar');
				$topcontent = kidsworld_option('layout','top-content');
				if( isset($topbar) && isset($topcontent) && $topcontent != '' ):?>
                    <div class="top-bar">
                        <div class="container"><?php
							$content = kidsworld_option('layout','top-content');
							$content = do_shortcode( stripslashes($content) );
							echo kidsworld_wp_kses( $content );?>
                        </div>
                    </div><?php
				endif;

				// header types
				$htype = kidsworld_get_header_type();
				if( $htype != "left-header" && $htype != "left-header-boxed" && $htype != "creative-header" && $htype != "overlay-header" ):
					// header position
					$headerpos = kidsworld_option('layout','header-position');
					if( isset($headerpos) && $headerpos == 'below slider' ):
						echo kidsworld_slider();
					endif;
				endif;?>

            	<!-- **Main Header Wrapper** -->
            	<div id="main-header-wrapper" class="main-header-wrapper">

            		<div class="container">

            			<!-- **Main Header** -->
            			<div class="main-header"><?php
							if( isset($htype) && ($htype == 'fullwidth-header header-align-center fullwidth-menu-header') ):?>
								<div class="header-left"><?php
									$leftcontent = kidsworld_option('layout','menu-top-left-content');
									if( isset($leftcontent) && $leftcontent != '') :
										$content = do_shortcode( stripcslashes( $leftcontent ) );
										echo kidsworld_wp_kses( $content );
									endif; ?></div><?php
							endif;

							kidsworld_header_logo();
                            
							if( isset($htype) && (($htype == 'fullwidth-header header-align-center fullwidth-menu-header') || 
												  ($htype == 'fullwidth-header header-align-left fullwidth-menu-header')) ):?>
								<div class="header-right"><?php
									$rightcontent = kidsworld_option('layout','menu-top-right-content');
									if( isset($rightcontent) && $rightcontent != '') :
										$content = do_shortcode( stripcslashes( $rightcontent ) );
										echo kidsworld_wp_kses( $content );
									endif; ?></div><?php
							endif; ?>

            				<div id="menu-wrapper" class="menu-wrapper <?php kidsworld_opts_show('menu-active-type','');?>">
                            	<div class="dt-menu-toggle" id="dt-menu-toggle">
                                	<?php esc_html_e('Menu','kids-world');?>
                                    <span class="dt-menu-toggle-icon"></span>
                                </div><?php
								if( isset($htype) ):
									switch($htype):
										case 'split-header fullwidth-header':
										case 'split-header boxed-header':
												echo '<nav id="main-menu">';
												kidsworld_wp_split_menu();
												echo '</nav>';
										break;
										
										case 'overlay-header':
												echo '<div class="overlay overlay-hugeinc">';
													echo '<div class="overlay-close"></div>';
													kidsworld_wp_nav_menu(1);
												echo '</div>';
												echo '<div id="trigger-overlay"></div>';
										break;

										case 'fullwidth-header':
										case 'boxed-header':
										case 'two-color-header':
										default:
											kidsworld_wp_nav_menu();
											require_once( KIDSWORLD_THEME_DIR .'/headers/default.php' );
										break;
									endswitch;
								endif; ?>
            				</div><?php
							// left header
                            if( isset($htype) && ( $htype == 'left-header' || $htype == 'left-header-boxed' || $htype == 'creative-header') ): ?>
                                <div class="left-header-footer"><?php
									$content = kidsworld_option('layout','menu-left-header-content');
									$content = do_shortcode( stripcslashes( $content ) );
									echo kidsworld_wp_kses($content);?></div><?php
							endif; ?>
            			</div>
            		</div>
            	</div><!-- **Main Header** --><?php			
				if( $htype != "left-header" && $htype != "left-header-boxed" && $htype != "creative-header" && $htype != "overlay-header" ):
					// header position
					if( isset($headerpos) && $headerpos != 'below slider' ):
						echo kidsworld_slider();
					endif;
				endif;?>

			</header><!-- **Header - End** -->
		</div><!-- **Header Wrapper - End** -->

		<?php if( $htype == "creative-header" ) echo '<div id="toggle-sidebar"></div>'; ?>

        <!-- **Main** -->
        <div id="main"><?php

			if( $htype == "left-header" || $htype == "left-header-boxed" || $htype == "creative-header" || $htype == "overlay-header" ):
				echo kidsworld_slider();
			endif;

			// subtitle & breadcrumb section
			if( is_page() ) :
				$tpl_default_settings = get_post_meta($post->ID,'_tpl_default_settings',TRUE);
				$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();
			
				if(empty($tpl_default_settings)) $tpl_default_settings['enable-sub-title'] = 'true';
				if(isset($tpl_default_settings['enable-sub-title']) ):
					require_once( KIDSWORLD_THEME_DIR .'/headers/breadcrumb.php' );
				endif;	
			else:
				require_once( KIDSWORLD_THEME_DIR .'/headers/breadcrumb.php' );
			endif;

			$class = "container";
			if( is_page_template('tpl-portfolio.php') ) {
				$class = ( $tpl_default_settings['layout'] == 'fullwidth' ) ? "portfolio-fullwidth-container" : "container";
            }

			if( is_singular('tribe_events') ) {
				$tpl_default_settings = get_post_meta($post->ID,'_custom_settings',TRUE);
				$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();
				$post_style = array_key_exists( "event-post-style", $tpl_default_settings ) ? $tpl_default_settings['event-post-style'] : "type1";
				switch( $post_style ):
					case 'type2':
						$class = "event-type2-fullwidth";
						break;
					case 'type5':
						$class = "event-type5-fullwidth";
						break;
					default:
						$class = "container";
				endswitch;
			}

			if( is_singular() ) {
				$tpl_default_settings = get_post_meta($post->ID,'_custom_settings',TRUE);
				$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();
				$class =  ( isset( $tpl_default_settings['layout'] ) ) && ( $tpl_default_settings['layout'] == 'fullwidth-container') ? "show-in-fullwidth" : $class;
			} 

			?>
            <!-- ** Container ** -->
            <div class="<?php echo esc_attr($class);?>">
	        <?php
			do_action( 'kidsworld_hook_content_before' ); ?>