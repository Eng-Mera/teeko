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
$type = kidsworld_opts_get('notfound-style', 'type1');
$darkbg = kidsworld_opts_get('notfound-darkbg', '');
$type .= !empty( $darkbg ) ? ' dt-sc-dark-bg' : '';?>

<body <?php body_class(); ?>>

<div class="wrapper <?php echo esc_attr($type); ?>">
	<div class="container">
        <div class="center-content-wrapper">
            <div class="center-content"><?php
                $pageid = kidsworld_option('pageoptions','notfound-pageid');
                if( kidsworld_option('pageoptions','enable-404message') && !empty($pageid) ):
                    $page = get_post( $pageid, ARRAY_A );
                    echo DTCoreShortcodesDefination::dtShortcodeHelper ( stripslashes($page['post_content']) );
                elseif( kidsworld_option('pageoptions','enable-404message') ):
					echo '<div class="error-box square"><div class="error-box-inner"><h3>'.esc_html__('Oops!', 'kids-world').'</h3><h2>404</h2><h4>'.esc_html__('Page Not Found', 'kids-world').'</h4></div></div>';
					echo '<div class="dt-sc-hr-invisible-xsmall"></div>';
					echo '<p>'.esc_html__("It seems you've venured too far.", 'kids-world').'</p><p>'.esc_html__('Click here to go to home page.', 'kids-world').'</p>';
					echo '<div class="dt-sc-hr-invisible-xsmall"></div>';
                    echo '<a class="dt-sc-button filled small" target="_blank" href="'.esc_url(home_url('/')).'">'.esc_html__('Back to Home','kids-world').'</a>';
                endif; ?>
            </div>
        </div>
    </div>    
</div>
</body>
<?php wp_footer(); ?>
</html>