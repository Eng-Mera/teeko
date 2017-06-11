<?php
/* ---------------------------------------------------------------------------
 * Custom Color Styles
 * --------------------------------------------------------------------------- */
if ( ! defined( 'ABSPATH' ) ) exit; ?>

/************** BPanel Options **************/
body, .layout-boxed .inner-wrapper { background-color:<?php kidsworld_opts_show('body-bgcolor','#ffffff');?>;}

<?php
$mtype = kidsworld_option('layout','menu-active-type');
$skin = kidsworld_option('colors','theme-skin');
# When Choosing Custom Skin...
if($skin == 'custom'): ?>

	.dt-sc-highlight.extend-bg-fullwidth-left:after, .dt-sc-highlight.extend-bg-fullwidth-right:after { background:<?php kidsworld_opts_show('custom-default', '#624dd6');?>;}   
       
      .top-bar a, .dt-sc-dark-bg.top-bar a { color:<?php kidsworld_opts_show('topbar-linkcolor', kidsworld_opts_get('custom-default', '#FFFFFF'));?>; }<?php
    
    if( isset($mtype) && (($mtype == 'menu-active-highlight') || ($mtype == 'menu-active-highlight-with-arrow') || ($mtype == 'menu-active-with-icon menu-active-highlight')) ): ?>
        #main-menu > ul.menu > li.current_page_item > a, #main-menu > ul.menu > li.current_page_ancestor > a, #main-menu > ul.menu > li.current-menu-item > a, #main-menu > ul.menu > li.current-menu-ancestor > a,  .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_item, .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_ancestor, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-item, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-ancestor, /* New*/ .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_item > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-item > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a {
            background-color:<?php kidsworld_opts_show('menu-activebgcolor', kidsworld_opts_get('custom-default', '#624dd6'));?>;
        }<?php
    endif;
    if( isset($mtype) && (($mtype == 'menu-active-highlight') || ($mtype == 'menu-active-highlight-with-arrow')) ): ?>
        .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:before {    	
            border-top-color:<?php kidsworld_opts_show('menu-activebgcolor', kidsworld_opts_get('custom-default', '#624dd6'));?>;
        }<?php
    endif;
    if( isset($mtype) && (($mtype == 'menu-active-highlight-grey') || ($mtype == 'menu-active-with-icon menu-active-highlight')) ): ?>
        .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-ancestor > a:before {
            background-color:<?php kidsworld_opts_show('menu-activecolor', kidsworld_opts_get('custom-default', '#624dd6'));?>;
        }<?php
    endif;
	if( isset($mtype) && ($mtype == 'menu-active-border-with-arrow') ): ?>
		.menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:before {
			border-bottom-color:<?php kidsworld_opts_show('menu-activecolor', kidsworld_opts_get('custom-default', '#624dd6'));?>;
		}
		.menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:after {
			background-color:<?php kidsworld_opts_show('menu-activecolor', kidsworld_opts_get('custom-default', '#624dd6'));?>;
		}<?php
	endif;?>

    #main-menu ul.menu > li > a:hover, #main-menu ul.menu li.menu-item-megamenu-parent:hover > a, #main-menu ul.menu > li.menu-item-simple-parent:hover > a { color:<?php kidsworld_opts_show('menu-hovercolor', kidsworld_opts_get('custom-default', ''));?>; }
    #main-menu > ul.menu > li.current_page_item > a, #main-menu > ul.menu > li.current_page_ancestor > a, #main-menu > ul.menu > li.current-menu-item > a, #main-menu ul.menu > li.current-menu-ancestor > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_item > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_ancestor > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-item > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-ancestor > a, .left-header #main-menu > ul.menu > li.current_page_item > a,.left-header #main-menu > ul.menu > li.current_page_ancestor > a,.left-header #main-menu > ul.menu > li.current-menu-item > a, .left-header #main-menu > ul.menu > li.current-menu-ancestor > a { color:<?php kidsworld_opts_show('menu-activecolor', kidsworld_opts_get('custom-default', '#624dd6'));?>; }

	#footer a:hover, #footer .dt-sc-dark-bg a:hover, #footer .widget ul li:hover:before { color:<?php kidsworld_opts_show('footer-link-hcolor', kidsworld_opts_get('custom-default', '#624dd6'));?>; }<?php
# When choosing predefined Skins...
else: ?>
	.extend-bg-fullwidth-left:after, .extend-bg-fullwidth-right:after{ background:<?php kidsworld_opts_show('custom-default', '');?>;}
	.top-bar a, .dt-sc-dark-bg.top-bar a { color:<?php kidsworld_opts_show('topbar-linkcolor', '#FFFFFF');?>; }<?php
    
    if( isset($mtype) && (($mtype == 'menu-active-highlight') || ($mtype == 'menu-active-highlight-with-arrow') || ($mtype == 'menu-active-with-icon menu-active-highlight') || ($mtype == 'menu-active-highlight-grey')) ): ?>
        #main-menu > ul.menu > li.current_page_item > a, #main-menu > ul.menu > li.current_page_ancestor > a, #main-menu > ul.menu > li.current-menu-item > a, #main-menu > ul.menu > li.current-menu-ancestor > a,  .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_item, .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_ancestor, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-item, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-ancestor, .left-header #main-menu > ul.menu > li.current_page_item > a, /* New*/ .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_item > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-item > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a {
            background-color:<?php kidsworld_opts_show('menu-activebgcolor', '');?>;
        }<?php
    endif;
    if( isset($mtype) && (($mtype == 'menu-active-highlight') || ($mtype == 'menu-active-highlight-with-arrow')) ): ?>
        .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:before {    	
            border-top-color:<?php kidsworld_opts_show('menu-activebgcolor', '');?>;
        }<?php
    endif;
    if( isset($mtype) && (($mtype == 'menu-active-highlight-grey') || ($mtype == 'menu-active-with-icon menu-active-highlight')) ): ?>
        .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-ancestor > a:before {
            background-color:<?php kidsworld_opts_show('menu-activecolor', '');?>;
        }<?php
    endif;
	if( isset($mtype) && ($mtype == 'menu-active-border-with-arrow')): ?>
		.menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:before {
			border-bottom-color:<?php kidsworld_opts_show('menu-activecolor', '');?>;
		}
		.menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:after {
			background-color:<?php kidsworld_opts_show('menu-activecolor', '');?>;
		}<?php
	endif;
	
	$mhovercolor = kidsworld_opts_get('menu-hovercolor', '');
	$mactivecolor = kidsworld_opts_get('menu-activecolor', '');
	$flinkhcolor = kidsworld_opts_get('footer-link-hcolor', '');
	
	if( !empty($mhovercolor) ){ ?>
      	#main-menu ul.menu > li > a:hover, #main-menu ul.menu li.menu-item-megamenu-parent:hover > a, #main-menu ul.menu > li.menu-item-simple-parent:hover > a { color:<?php echo esc_attr($mhovercolor);?>; }<?php
	}
	
	if( !empty($mactivecolor) ){ ?>
      	#main-menu > ul.menu > li.current_page_item > a, #main-menu > ul.menu > li.current_page_ancestor > a, #main-menu > ul.menu > li.current-menu-item > a, #main-menu ul.menu > li.current-menu-ancestor > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_item > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_ancestor > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-item > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-ancestor > a, .left-header #main-menu > ul.menu > li.current_page_item > a,.left-header #main-menu > ul.menu > li.current_page_ancestor > a,.left-header #main-menu > ul.menu > li.current-menu-item > a, .left-header #main-menu > ul.menu > li.current-menu-ancestor > a { color:<?php echo esc_attr($mactivecolor);?>;}<?php
	}
	
	if( !empty($flinkhcolor) ){?>
      	#footer a:hover, #footer .dt-sc-dark-bg a:hover { color:<?php echo esc_attr($flinkhcolor);?>}<?php
	}
endif;?>

/*----*****---- Topbar  ----*****----*/
.top-bar { color:<?php kidsworld_opts_show('topbar-textcolor', '#FFFFFF');?>; background-color:<?php kidsworld_opts_show('topbar-bgcolor','#624dd6');?>}
.top-bar a:hover, .dt-sc-dark-bg.top-bar a:hover { color:<?php kidsworld_opts_show('topbar-linkhovercolor', '#f0f0f0');?>; }

/*----*****---- Header  ----*****----*/
<?php
$htype = kidsworld_option('layout','header-type');
$hcolor = kidsworld_option('colors','header-bgcolor');
if( isset($htype) && isset($hcolor) && ($hcolor != '')): ?>

	.boxed-header .main-header, .boxed-header .dt-sc-dark-bg .main-header, .main-header-wrapper, .fullwidth-header .main-header-wrapper, .left-header .main-header-wrapper, .left-header .main-header, .two-color-header .main-header-wrapper:before, .header-on-slider.transparent-header .is-sticky .main-header-wrapper, .left-header .dt-sc-dark-bg .main-header-wrapper, .left-header .dt-sc-dark-bg .main-header, .two-color-header .main-header-wrapper:before, .dt-sc-dark-bg .main-header-wrapper, .dt-menu-toggle { background: rgba(<?php $rgbcolor = kidsworld_hex2rgb(kidsworld_opts_get('header-bgcolor', '')); $rgbcolor = implode(',', $rgbcolor); echo esc_attr($rgbcolor); ?>, <?php kidsworld_opts_show('header-bgcolor-opacity', '1');?>); }

	.two-color-header.semi-transparent-header .main-header-wrapper:before, .overlay-header .overlay, .overlay-header .dt-sc-dark-bg .overlay, /*new*/ .fullwidth-header.semi-transparent-header .dt-sc-dark-bg .main-header-wrapper, .left-header.semi-transparent-header .dt-sc-dark-bg .main-header-wrapper, .left-header.semi-transparent-header .dt-sc-dark-bg .main-header, .left-header.semi-transparent-header .main-header-wrapper, .left-header.semi-transparent-header .main-header, .semi-transparent-header .main-header-wrapper, .fullwidth-header.semi-transparent-header .main-header-wrapper, .boxed-header.semi-transparent-header .main-header, .boxed-header.semi-transparent-header .dt-sc-dark-bg .main-header { background: rgba(<?php $rgbcolor = kidsworld_hex2rgb(kidsworld_opts_get('header-bgcolor', '')); $rgbcolor = implode(',', $rgbcolor); echo esc_attr($rgbcolor); ?>, <?php kidsworld_opts_show('header-bgcolor-opacity', '0.7');?>); }

.header-align-left.fullwidth-menu-header .is-sticky .menu-wrapper, .header-align-center.fullwidth-menu-header .is-sticky .menu-wrapper, .standard-header .is-sticky .main-header-wrapper, .header-on-slider .is-sticky .main-header-wrapper, .fullwidth-header.semi-transparent-header.header-on-slider .is-sticky .main-header-wrapper, .header-align-left.fullwidth-menu-header.semi-transparent-header .is-sticky .menu-wrapper, .header-align-left.transparent-header .is-sticky .menu-wrapper, /* sticky darkbg */.header-align-left.fullwidth-menu-header .dt-sc-dark-bg .is-sticky .menu-wrapper, .header-align-center.fullwidth-menu-header .dt-sc-dark-bg .is-sticky .menu-wrapper, .header-align-left.fullwidth-menu-header.semi-transparent-header .dt-sc-dark-bg .is-sticky .menu-wrapper, .two-color-header.transparent-header .is-sticky .main-header-wrapper:before, #header-wrapper.dt-sc-dark-bg .is-sticky .main-header-wrapper, .semi-transparent-header.boxed-header .is-sticky .main-header-wrapper { background: rgba(<?php $rgbcolor = kidsworld_hex2rgb(kidsworld_opts_get('header-bgcolor', '')); $rgbcolor = implode(',', $rgbcolor); echo esc_attr($rgbcolor); ?>, <?php kidsworld_opts_show('header-bgcolor-opacity', '0.9');?>); }<?php
endif;

$headbg = kidsworld_option('layout','header-bg');
$bgrepeat = kidsworld_opts_get('header-bg-repeat', 'no-repeat');
$bgposition = kidsworld_opts_get('header-bg-position', 'center center');
if( !empty( $headbg) ) {?>
	#main-header-wrapper { background-image: url('<?php echo esc_attr($headbg);?>'); background-repeat: <?php echo esc_attr($bgrepeat);?>; background-position: <?php echo esc_attr($bgposition);?>; }<?php
}?>

/*----*****---- Menu  ----*****----*/
<?php
$mbg = kidsworld_option('colors','menu-bgcolor');
if( isset($mbg) ): ?>
.menu-wrapper, .dt-menu-toggle {  background: rgba(<?php $rgbcolor = kidsworld_hex2rgb(kidsworld_opts_get('menu-bgcolor', '')); $rgbcolor = implode(',', $rgbcolor); echo esc_attr($rgbcolor); ?>, <?php kidsworld_opts_show('menu-bgcolor-opacity', '1');?>); }<?php
endif; ?>

#main-menu ul.menu > li > a { color:<?php kidsworld_opts_show('menu-linkcolor','#624dd6');?>; }

<?php
if( isset($mtype) && ($mtype == 'menu-active-with-icon menu-active-highlight') ): ?>
	.menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current-menu-ancestor > a:before,  .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current-menu-ancestor > a:after {
		background-color:<?php kidsworld_opts_show('menu-activecolor', '#ffffff');?>;
	}<?php
endif;
if( isset($mtype) && ($mtype == 'menu-active-with-two-border') ): ?>
	.menu-active-with-two-border #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-ancestor > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-ancestor > a:after {
		background-color:<?php kidsworld_opts_show('menu-activecolor', '');?>;
	}<?php
endif;
if( isset($mtype) && ($mtype == 'menu-active-with-double-border') ): ?>
	.menu-active-with-double-border #main-menu > ul.menu > li.current_page_item > a, .menu-active-with-double-border #main-menu > ul.menu > li.current_page_ancestor > a, .menu-active-with-double-border #main-menu > ul.menu > li.current-menu-item > a, .menu-active-with-double-border #main-menu > ul.menu > li.current-menu-ancestor > a {
		border-color:<?php kidsworld_opts_show('menu-activecolor', '');?>;
	}<?php
endif; ?>

.menu-active-highlight #main-menu > ul.menu > li.current_page_item > a, .menu-active-highlight #main-menu > ul.menu > li.current_page_ancestor > a, .menu-active-highlight #main-menu > ul.menu > li.current-menu-item > a, .menu-active-highlight #main-menu > ul.menu > li.current-menu-ancestor > a { color:<?php kidsworld_opts_show('menu-activecolor', '#ffffff');?>; }

/*----*****---- Content  ----*****----*/
<?php
$ccolor = kidsworld_option('colors','content-text-color');
if( isset($ccolor) ): ?>
	body { color:<?php kidsworld_opts_show('content-text-color', '');?>; }<?php
endif;
$ccolor = kidsworld_option('colors','content-link-color');
if( isset($ccolor) ): ?>
	a { color:<?php kidsworld_opts_show('content-link-color', '');?>; }<?php
endif;
$ccolor = kidsworld_option('colors','content-link-hcolor');
if( isset($ccolor) ): ?>
	a:hover { color:<?php kidsworld_opts_show('content-link-hcolor', '');?>; }<?php
endif;?>

/*----*****---- Heading  ----*****----*/
<?php
for($i = 1; $i <= 6; $i++):
	$hcolor = kidsworld_option("colors","heading-h{$i}-color");
	if( isset($hcolor) ):
		echo "h{$i} { color: ";
			kidsworld_opts_show("heading-h{$i}-color", "");
		echo "; }\n";	
	endif;
endfor;?>

/*----*****---- Footer ----*****----*/
<?php
$rgbcolor = kidsworld_hex2rgb(kidsworld_opts_get('footer-bgcolor', '#000000'));
$rgbcolor = implode(',', $rgbcolor);
$opacity = kidsworld_opts_get('footer-bgcolor-opacity', '1');
$footbg = kidsworld_opts_get('footer-bg', '');
if( !empty( $footbg ) ) : ?>
	.footer-widgets { background-image: url(<?php echo esc_attr($footbg); ?>); background-position: <?php kidsworld_opts_show('footer-bg-position', 'center center');?>; background-repeat: <?php kidsworld_opts_show('footer-bg-repeat', 'no-repeat');?>; }<?php
endif;
$darkbg = kidsworld_option('layout','footer-darkbg');
if( isset($darkbg) ): ?>
	.footer-widgets.dt-sc-dark-bg { background-color: rgba(<?php echo esc_attr($rgbcolor); ?>, <?php echo esc_attr($opacity); ?>); }<?php
else:
	$rgbcolor = kidsworld_hex2rgb(kidsworld_opts_get('footer-bgcolor', '#ffffff'));
	$rgbcolor = implode(',', $rgbcolor);
	$opacity = kidsworld_opts_get('footer-bgcolor-opacity', '1'); ?>
	.footer-widgets { background-color: rgba(<?php echo esc_attr($rgbcolor); ?>, <?php echo esc_attr($opacity); ?>); }<?php
endif;

if( isset($darkbg) ): ?>
	.footer-widgets.dt-sc-dark-bg, #footer .dt-sc-dark-bg, .footer-copyright.dt-sc-dark-bg{ color:<?php kidsworld_opts_show('footer-text-color', 'rgba(255, 255, 255, 0.6)');?>; }
	.footer-widgets.dt-sc-dark-bg a, #footer .dt-sc-dark-bg a{ color:<?php kidsworld_opts_show('footer-link-color', 'rgba(255, 255, 255, 0.6)');?>; }
	#footer .dt-sc-dark-bg h3, #footer .dt-sc-dark-bg h3 a { color:<?php kidsworld_opts_show('footer-heading-color', '#ffffff');?>; }<?php
else: ?>
	.footer-widgets, #footer, .footer-copyright { color:<?php kidsworld_opts_show('footer-text-color', '#777777');?>; }
	.footer-widgets a, #footer a { color:<?php kidsworld_opts_show('footer-link-color', '#000000');?>; }
	#footer h3 { color:<?php kidsworld_opts_show('footer-heading-color', '#000000');?>; }<?php
endif;?>

/*----*****---- Copyright Section ----*****----*/
<?php
$darkbg = kidsworld_option('layout','copyright-darkbg');
if( isset($darkbg) ): ?>
    .footer-copyright.dt-sc-dark-bg {
        background: rgba(<?php
        $rgbcolor = kidsworld_hex2rgb(kidsworld_opts_get('copyright-bgcolor', '#000000'));
        $rgbcolor = implode(',', $rgbcolor);
        echo esc_attr($rgbcolor); ?>, <?php kidsworld_opts_show('copyright-bgcolor-opacity', '1');?>);
    }<?php
else: ?>
    .footer-copyright {
        background: rgba(<?php
        $rgbcolor = kidsworld_hex2rgb(kidsworld_opts_get('copyright-bgcolor', '#ffffff'));
        $rgbcolor = implode(',', $rgbcolor);
        echo esc_attr($rgbcolor); ?>, <?php kidsworld_opts_show('copyright-bgcolor-opacity', '1');?>);
    }<?php
endif;?>

/*----*****---- Megamenu ----*****----*/
<?php
# Border,Border radius
$applymenuborder = kidsworld_option('layout','menu-border');
if( isset( $applymenuborder ) ):
	$borderstyle = kidsworld_option('layout','menu-border-style');
	$bordercolor = kidsworld_option('layout','menu-border-color');
	
	$bwtop = kidsworld_option('layout','menu-border-width-top');
	$bwright = kidsworld_option('layout','menu-border-width-right');
	$bwbottom = kidsworld_option('layout','menu-border-width-bottom');
	$bwleft = kidsworld_option('layout','menu-border-width-left');
	
	$brtop = kidsworld_option('layout','menu-border-radius-top');
	$brright = kidsworld_option('layout','menu-border-radius-right');
	$brbottom = kidsworld_option('layout','menu-border-radius-bottom');
	$brleft = kidsworld_option('layout','menu-border-radius-left');?>
    
    #main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container {
    	border-style:<?php echo esc_attr($borderstyle);?>;
        border-color:<?php echo esc_attr($bordercolor);?>;
		<?php if( isset( $bwtop ) ) ?>
        	border-top-width:<?php echo esc_attr($bwtop);?>px;        
		<?php if( isset( $bwright ) ) ?>
    		border-right-width:<?php echo esc_attr($bwright);?>px;        
        <?php if( isset( $bwbottom ) ) ?>
    		border-bottom-width:<?php echo esc_attr($bwbottom);?>px;
        <?php if( isset( $bwleft ) ) ?>
        	border-left-width:<?php echo esc_attr($bwleft);?>px;
        <?php if( isset( $brtop ) ) ?>
        	border-top-left-radius:<?php echo esc_attr($brtop);?>px;    
        <?php if( isset( $brright ) ) ?>
    		border-top-right-radius:<?php echo esc_attr($brright);?>px;        
    	<?php if( isset( $brbottom ) ) ?>
    		border-bottom-right-radius:<?php echo esc_attr($brbottom);?>px;        
    	<?php if( isset( $brleft ) ) ?>
    		border-bottom-left-radius:<?php echo esc_attr($brleft);?>px;
	}
<?php
endif;
# Mega Menu Container BG Color
$menubgcolor = kidsworld_option('layout','menu-bg-color');
if( isset( $menubgcolor ) ):?>
	#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container { background-color:<?php echo esc_attr($menubgcolor);?>;}<?php
endif;

# Mega Menu Container gradient
$menugrc1 =  kidsworld_option('layout','menu-gradient-color1');
$menugrc2 =  kidsworld_option('layout','menu-gradient-color2');

if( isset($menugrc1) && isset($menugrc2) ) {
	
	$p1 = (kidsworld_option('layout','menu-gradient-percent1') != NULL) ? kidsworld_option('layout','menu-gradient-percent1') : "0%";
	$p2 = (kidsworld_option('layout','menu-gradient-percent2') != NULL) ? kidsworld_option('layout','menu-gradient-percent2') : "100%";?>
    #main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container {
		background: <?php echo esc_attr($menugrc1); ?>; /* Old browsers */
		background: -moz-linear-gradient(top, <?php echo esc_attr($menugrc1.' '.$p1.', '.$menugrc2.' '.$p2); ?>); /* FF3.6-15 */
		background: -webkit-linear-gradient(top, <?php echo esc_attr($menugrc1.' '.$p1.', '.$menugrc2.' '.$p2); ?>); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom, <?php echo esc_attr($menugrc1.' '.$p1.', '.$menugrc2.' '.$p2); ?>); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo esc_attr($menugrc1); ?>', endColorstr='<?php echo esc_attr($menugrc2); ?>',GradientType=0 ); /* IE6-9 */
	}
    <?php  
}

# Default Menu Title text and hover color
$titletextdcolor = kidsworld_option('layout','menu-title-text-dcolor');
$titletextdhcolor = kidsworld_option('layout','menu-title-text-dhcolor');

if( isset( $titletextdcolor) )?>
	#main-menu .megamenu-child-container > ul.sub-menu > li > a, #main-menu .megamenu-child-container > ul.sub-menu > li > .nolink-menu { color:<?php echo esc_attr($titletextdcolor);?>; }<?php
if( isset( $titletextdhcolor) )?>
	#main-menu .megamenu-child-container > ul.sub-menu > li > a:hover { color:<?php echo esc_attr($titletextdhcolor);?>; }
	#main-menu .megamenu-child-container > ul.sub-menu > li.current_page_item > a, #main-menu .megamenu-child-container > ul.sub-menu > li.current_page_ancestor > a, #main-menu .megamenu-child-container > ul.sub-menu > li.current-menu-item > a, #main-menu .megamenu-child-container > ul.sub-menu > li.current-menu-ancestor > a { color:<?php echo esc_attr($titletextdhcolor);?>; }<?php


# Menu Title Background
if( "true" == kidsworld_option('layout','menu-title-bg') ) :
	$menutitlebgcolor = kidsworld_option('layout','menu-title-bg-color');
	$bghovercolor = kidsworld_option('layout','menu-title-hoverbg-color');
	$menutitletxtcolor = kidsworld_option('layout','menu-title-text-color');
	$hovertxtcolor = kidsworld_option('layout','menu-title-hovertext-color');
	$menutitlebr = kidsworld_option('layout','menu-title-border-radius');?>
    #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li > .nolink-menu {
    	<?php if( isset( $menutitlebgcolor ) )?>
        	background:<?php echo esc_attr($menutitlebgcolor);?>;
        <?php if( isset( $menutitlebr ) ) ?>
        	border-radius:<?php echo esc_attr($menutitlebr);?>px;        
    }
    
    <?php if( isset($bghovercolor) ) {?>
    	#main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li > a:hover { background:<?php echo esc_attr($bghovercolor);?>;}
		#main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li.current_page_item > a, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li.current_page_ancestor > a, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li.current-menu-item > a, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li.current-menu-ancestor > a { background:<?php echo esc_attr($bghovercolor);?>; }<?php
	}
	
	if( isset( $menutitletxtcolor ) ) {?>
    	#main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li > .nolink-menu, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li > a .menu-item-description { color:<?php echo esc_attr($menutitletxtcolor);?>;}<?php
	}
	
	if( isset( $hovertxtcolor ) ) {?>
    	#main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li > a:hover, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li > a:hover .menu-item-description { color:<?php echo esc_attr($hovertxtcolor);?>;}
		#main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li.current_page_item > a, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li.current_page_ancestor > a, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li.current-menu-item > a, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li.current-menu-ancestor > a, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li.current_page_item > a .menu-item-description
#main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li.current_page_ancestor > a .menu-item-description, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li.current-menu-item > a .menu-item-description, #main-menu .menu-item-megamenu-parent.menu-title-with-bg .megamenu-child-container > ul.sub-menu > li.current-menu-ancestor > a .menu-item-description { color:<?php echo esc_attr($hovertxtcolor);?>; }<?php
	}
endif;

#Menu Title With Border
$mtbwtop = kidsworld_option('layout','menu-title-border-width-top');
$mtbwright = kidsworld_option('layout','menu-title-border-width-right');
$mtbwbottom = kidsworld_option('layout','menu-title-border-width-bottom');
$mtbwleft = kidsworld_option('layout','menu-title-border-width-left');

if( isset($mtbwtop) || isset($mtbwright) || isset($mtbwbottom) || isset($mtbwleft) ) :

	$menutitlebrc = kidsworld_option('layout','menu-title-border-color');
	$menutitlebrs = kidsworld_option('layout','menu-title-border-style'); ?>
    #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu {
    	<?php if( isset( $mtbwtop ) ) : ?>
        		 border-top-width:<?php echo esc_attr($mtbwtop); ?>px;
                 padding-top:10px;

    	<?php endif;
			  if( isset( $mtbwright ) ): ?>
        		 border-right-width:<?php echo esc_attr($mtbwright); ?>px;
                 padding-right:10px;

    	<?php endif;
			  if( isset( $mtbwbottom ) ): ?>
        		 border-bottom-width:<?php echo esc_attr($mtbwbottom); ?>px;
                 padding-bottom:10px;

    	<?php endif;
			  if( isset( $mtbwleft ) ): ?>
        		 border-left-width:<?php echo esc_attr($mtbwleft); ?>px;
                 padding-left:10px;       
    	
        <?php endif;
		     if( isset( $menutitlebrs ) ) ?>
        	 	border-style:<?php echo esc_attr($menutitlebrs);?>;
        <?php if( isset( $menutitlebrc ) ) ?>
        		 border-color:<?php echo esc_attr($menutitlebrc);?>;
   }<?php	
endif;

# Default text and hover color
$textdcolor = kidsworld_option('layout','menu-link-text-dcolor');
$textdhcolor = kidsworld_option('layout','menu-link-text-dhcolor');

if( isset( $textdcolor) )?>
	#main-menu .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a { color:<?php echo esc_attr($textdcolor);?>; }<?php
if( isset( $textdhcolor) ) :?>
	#main-menu .megamenu-child-container ul.sub-menu > li > ul > li > a:hover, #main-menu ul li.menu-item-simple-parent ul > li > a:hover, #main-menu ul.menu li.menu-item-simple-parent ul li:hover > a { color:<?php echo esc_attr($textdhcolor);?>; }
	#main-menu .megamenu-child-container ul.sub-menu > li > ul > li.current_page_item > a, #main-menu .megamenu-child-container ul.sub-menu > li > ul > li.current_page_ancestor > a, #main-menu .megamenu-child-container ul.sub-menu > li > ul > li.current-menu-item > a, #main-menu .megamenu-child-container ul.sub-menu > li > ul > li.current-menu-ancestor > a, #main-menu ul li.menu-item-simple-parent ul > li.current_page_item > a, #main-menu ul li.menu-item-simple-parent ul > li.current_page_ancestor > a, #main-menu ul li.menu-item-simple-parent ul > li.current-menu-item > a, #main-menu ul li.menu-item-simple-parent ul > li.current-menu-ancestor > a { color:<?php echo esc_attr($textdhcolor);?>; }<?php
endif;

# Menu Links Background
if( "true" == kidsworld_option('layout','menu-links-bg') ) :
	$menulinkbgcolor = kidsworld_option('layout','menu-link-bg-color');
	$menulinkbghovercolor = kidsworld_option('layout','menu-link-hoverbg-color');
	$menulinktxtcolor = kidsworld_option('layout','menu-link-text-color');
	$menulinkhovertxtcolor = kidsworld_option('layout','menu-link-hovertext-color');
	$menulinkbr = kidsworld_option('layout','menu-link-border-radius');
	echo "\n";?>    
    /* Menu Link */   
    #main-menu .menu-item-megamenu-parent.menu-links-with-bg .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent.menu-links-with-bg ul > li > a {
    	<?php if( !is_null( $menulinkbgcolor ) || !empty( $menulinkbgcolor ) ):?>
        		background:<?php echo esc_attr($menulinkbgcolor);?>;
        <?php endif;
			if( isset( $menulinkbr ) ) ?>
        	border-radius:<?php echo esc_attr($menulinkbr);?>px;
        <?php if(!is_null($menulinktxtcolor) || !empty( $menulinktxtcolor ) ): ?>
        	color:<?php echo esc_attr($menulinktxtcolor);?>;
        <?php endif; ?>
    }
    /* Menu Link Hover */
    #main-menu .menu-item-megamenu-parent.menu-links-with-bg .megamenu-child-container ul.sub-menu > li > ul > li > a:hover, #main-menu ul li.menu-item-simple-parent.menu-links-with-bg ul > li > a:hover {
    	<?php if( !is_null( $menulinkbghovercolor ) || !empty( $menulinkbghovercolor ) ):?>
        		background:<?php echo esc_attr($menulinkbghovercolor);?>;
        <?php endif;
			if( !is_null( $menulinkhovertxtcolor ) || !empty( $menulinkhovertxtcolor ) ):?>
        	color:<?php echo esc_attr($menulinkhovertxtcolor);?>;
       <?php endif;?>
    }
	#main-menu .menu-item-megamenu-parent.menu-links-with-bg .megamenu-child-container ul.sub-menu > li > ul > li.current_page_item > a, #main-menu .menu-item-megamenu-parent.menu-links-with-bg .megamenu-child-container ul.sub-menu > li > ul > li.current_page_ancestor > a, #main-menu .menu-item-megamenu-parent.menu-links-with-bg .megamenu-child-container ul.sub-menu > li > ul > li.current-menu-item > a, #main-menu .menu-item-megamenu-parent.menu-links-with-bg .megamenu-child-container ul.sub-menu > li > ul > li.current-menu-ancestor > a, #main-menu ul li.menu-item-simple-parent.menu-links-with-bg ul > li.current_page_item > a, #main-menu ul li.menu-item-simple-parent.menu-links-with-bg ul > li.current_page_ancestor > a, #main-menu ul li.menu-item-simple-parent.menu-links-with-bg ul > li.current-menu-item > a, #main-menu ul li.menu-item-simple-parent.menu-links-with-bg ul > li.current-menu-ancestor > a {
    	<?php if( !is_null( $menulinkbghovercolor ) || !empty( $menulinkbghovercolor ) ):?>
        	background:<?php echo esc_attr($menulinkbghovercolor);?>;
        <?php endif;
			if( !is_null( $menulinkhovertxtcolor ) || !empty( $menulinkhovertxtcolor ) ):?>
        	color:<?php echo esc_attr($menulinkhovertxtcolor);?>;
        <?php endif;?>
    }<?php
endif;

#Menu link hover boder 
if( "true" == kidsworld_option('layout','menu-hover-border') ) {
	$mlhcolor = kidsworld_option('layout','menu-link-hborder-color');
	
	if( isset( $mlhcolor ) ) {?>   
      #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li, #main-menu ul li.menu-item-simple-parent ul > li { width:100%; box-sizing:border-box; } 
      #main-menu .menu-item-megamenu-parent.menu-links-with-arrow .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent.menu-links-with-arrow ul > li > a, #main-menu ul li.menu-item-simple-parent.menu-links-with-arrow ul > li:last-child > a { padding-left:27px; }
	  #main-menu .menu-item-megamenu-parent.menu-links-with-arrow .megamenu-child-container ul.sub-menu > li > ul > li > a:before, #main-menu ul li.menu-item-simple-parent.menu-links-with-arrow ul > li > a:before { left:12px; }
      #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a { padding:7px 10px; width:100%; box-sizing:border-box; border:1px solid transparent; }
      #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover, #main-menu ul li.menu-item-simple-parent ul > li > a:hover {
        border:1px solid <?php echo esc_attr($mlhcolor);?>;        
      }<?php		
	}
}

#Menu Links With Border
if( "true" == kidsworld_option('layout','menu-links-border') ) :

	$menulinkbrw = kidsworld_option('layout','menu-link-border-width');
	$menulinkbrc = kidsworld_option('layout','menu-link-border-color');
	$menulinkbrs = kidsworld_option('layout','menu-link-border-style'); ?>
    #main-menu .menu-item-megamenu-parent.menu-links-with-border .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent.menu-links-with-border ul > li > a {
    	<?php if( isset( $menulinkbrw ) ) ?>
        	 border-bottom-width:<?php echo esc_attr($menulinkbrw);?>px;
        <?php if( isset( $menulinkbrc ) ) ?>
        	 border-bottom-style:<?php echo esc_attr($menulinkbrs);?>;
        <?php if( isset( $menulinkbrs ) ) ?>
        	 border-bottom-color:<?php echo esc_attr($menulinkbrc);?>;
   }<?php	
endif;
