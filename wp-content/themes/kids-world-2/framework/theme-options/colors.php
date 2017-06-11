<!-- #colors -->
<div id="colors" class="bpanel-content">

    <!-- .bpanel-main-content -->
    <div class="bpanel-main-content">
        <ul class="sub-panel"> 
            <li><a href="#tab1"><?php esc_html_e('General', 'kids-world');?></a></li>
            <li><a href="#tab2"><?php esc_html_e('Header', 'kids-world');?></a></li>
			<li><a href="#tab3"><?php esc_html_e('Menu', 'kids-world');?></a></li>
            <li><a href="#tab4"><?php esc_html_e('Content', 'kids-world');?></a></li>
            <li><a href="#tab5"><?php esc_html_e('Footer', 'kids-world');?></a></li>
            <li><a href="#tab6"><?php esc_html_e('Heading', 'kids-world');?></a></li>
        </ul>
        
        <!-- #tab1-general -->
        <div id="tab1" class="tab-content">
            <!-- .bpanel-box -->
            <div class="bpanel-box">
                <div class="box-title">
                    <h3><?php esc_html_e('Skin', 'kids-world');?></h3>
                </div>
                
                <div class="box-content">
                    <div class="column one-third"><label><?php esc_html_e('Theme Skin', 'kids-world');?></label></div>
                    <div class="column two-third last">
                        <select id="dttheme-skin-color" name="dttheme[colors][theme-skin]" class="medium dt-chosen-select skin-types">
                        	<optgroup label="Custom">
								<option value="custom"><?php esc_html_e('Custom Skin', 'kids-world'); ?></option>
							</optgroup>   
                        </select>
                        <p class="note"><?php esc_html_e('Choose one of the predefined styles or set your own colors.', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Body Background Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][body-bgcolor]";
						$value =  (kidsworld_option('colors','body-bgcolor') != NULL) ? kidsworld_option('colors','body-bgcolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom background color of the body.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <?php $panelvisible = ( kidsworld_option('colors','theme-skin') == 'custom' ) ? 'style="display:block"' : 'style="display:none"'; ?>

					<div class="custom-skin-panel" <?php echo ($panelvisible);?>>
                        <div class="column one-third"><label><?php esc_html_e('Default Color', 'kids-world');?></label></div>
                        <div class="column two-third last"><?php
                            $name  =  "dttheme[colors][custom-default]";
                            $value =  (kidsworld_option('colors','custom-default') != NULL) ? kidsworld_option('colors','custom-default') :"";
                            kidsworld_admin_color_picker_two($name,$value);?>
                            <p class="note"><?php esc_html_e('Important: This option can be used only with the <b>"Custom Skin"</b>.', 'kids-world');?></p>
                        </div>
                        <div class="hr"></div>
    
                        <div class="column one-third"><label><?php esc_html_e('Light Color', 'kids-world');?></label></div>
                        <div class="column two-third last"><?php
                            $name  =  "dttheme[colors][custom-light]";
                            $value =  (kidsworld_option('colors','custom-light') != NULL) ? kidsworld_option('colors','custom-light') :"";
                            kidsworld_admin_color_picker_two($name,$value);?>
                            <p class="note"><?php esc_html_e('Important: This option can be used only with the <b>"Custom Skin"</b>.', 'kids-world');?></p>
                        </div>
                        <div class="hr"></div>
    
                        <div class="column one-third"><label><?php esc_html_e('Dark Color', 'kids-world');?></label></div>
                        <div class="column two-third last"><?php
                            $name  =  "dttheme[colors][custom-dark]";
                            $value =  (kidsworld_option('colors','custom-dark') != NULL) ? kidsworld_option('colors','custom-dark') :"";
                            kidsworld_admin_color_picker_two($name,$value);?>
                            <p class="note"><?php esc_html_e('Important: This option can be used only with the <b>"Custom Skin"</b>.', 'kids-world');?></p>
                        </div>
                    </div>    

                </div><!-- .box-content -->
            </div><!-- .bpanel-box end -->
        </div><!--#tab1-general end-->

        <!-- #tab2-header -->
        <div id="tab2" class="tab-content">
            <!-- .bpanel-box -->
            <div class="bpanel-box">
                <div class="box-title">
                    <h3><?php esc_html_e('Header', 'kids-world');?></h3>
                </div>
                
                <div class="box-content">
                    <div class="column one-half">
                    	<label><?php esc_html_e('Header BG Color', 'kids-world');?></label>
                        <div class="clear"></div><?php
						$name  =  "dttheme[colors][header-bgcolor]";
						$value =  (kidsworld_option('colors','header-bgcolor') != NULL) ? kidsworld_option('colors','header-bgcolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom background color of the header.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>

					<div class="column one-half last">
						<div class="bpanel-option-set">
	                        <?php echo kidsworld_admin_jqueryuislider( esc_html__("Background opacity", 'kids-world'), "dttheme[colors][header-bgcolor-opacity]",
                                                                          kidsworld_option("colors","header-bgcolor-opacity"),"");?>
                        </div>
                        <p class="note"><?php esc_html_e('You can adjust opacity of the header BG color here.', 'kids-world');?></p>
                    </div>
					<div class="hr"></div>
                </div><!-- .box-content -->
                
                <div class="box-title">
                    <h3><?php esc_html_e('Top Bar', 'kids-world');?></h3>
                </div>
                
                <div class="box-content">
                    <div class="column one-third"><label><?php esc_html_e('Top Bar BG Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][topbar-bgcolor]";
						$value =  (kidsworld_option('colors','topbar-bgcolor') != NULL) ? kidsworld_option('colors','topbar-bgcolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom background color of the top bar.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>
                    
                    <div class="column one-third"><label><?php esc_html_e('Top Bar Text Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][topbar-textcolor]";
						$value =  (kidsworld_option('colors','topbar-textcolor') != NULL) ? kidsworld_option('colors','topbar-textcolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom text color of the top bar.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>
                    
                    <div class="column one-third"><label><?php esc_html_e('Top Bar Link Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][topbar-linkcolor]";
						$value =  (kidsworld_option('colors','topbar-linkcolor') != NULL) ? kidsworld_option('colors','topbar-linkcolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom link color of the top bar.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>                    
                    
                    <div class="column one-third"><label><?php esc_html_e('Top Bar Link Hover Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][topbar-linkhovercolor]";
						$value =  (kidsworld_option('colors','topbar-linkhovercolor') != NULL) ? kidsworld_option('colors','topbar-linkhovercolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom link hover color of the top bar.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                </div><!-- .box-content -->
                
            </div><!-- .bpanel-box end -->            
        </div><!--#tab2-header end-->

        <!-- #tab3-menu -->
        <div id="tab3" class="tab-content">
            <!-- .bpanel-box -->
            <div class="bpanel-box">
                <div class="box-title">
                    <h3><?php esc_html_e('Menu', 'kids-world');?></h3>
                </div>

                <div class="box-content">
                    <div class="column one-half">
                    	<label><?php esc_html_e('Menu BG Color', 'kids-world');?></label>
                        <div class="clear"></div><?php
						$name  =  "dttheme[colors][menu-bgcolor]";
						$value =  (kidsworld_option('colors','menu-bgcolor') != NULL) ? kidsworld_option('colors','menu-bgcolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom background color of the menu.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>

					<div class="column one-half last">
						<div class="bpanel-option-set">
	                        <?php echo kidsworld_admin_jqueryuislider( esc_html__("Background opacity", 'kids-world'), "dttheme[colors][menu-bgcolor-opacity]",
                                                                          kidsworld_option("colors","menu-bgcolor-opacity"),"");?>
                        </div>
                        <p class="note"><?php esc_html_e('You can adjust opacity of the menu BG color here.', 'kids-world');?></p>
                    </div>
					<div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Menu Link Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][menu-linkcolor]";
						$value =  (kidsworld_option('colors','menu-linkcolor') != NULL) ? kidsworld_option('colors','menu-linkcolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the menu links.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Menu Hover Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][menu-hovercolor]";
						$value =  (kidsworld_option('colors','menu-hovercolor') != NULL) ? kidsworld_option('colors','menu-hovercolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the hover menu links.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Menu Link Active Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][menu-activecolor]";
						$value =  (kidsworld_option('colors','menu-activecolor') != NULL) ? kidsworld_option('colors','menu-activecolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the active menu links.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Menu Link Active BG', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][menu-activebgcolor]";
						$value =  (kidsworld_option('colors','menu-activebgcolor') != NULL) ? kidsworld_option('colors','menu-activebgcolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the active menu links background.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                </div><!-- .box-content -->
            </div><!-- .bpanel-box end -->            
        </div><!--#tab3-menu end-->

        <!-- #tab4-content -->
        <div id="tab4" class="tab-content">
            <!-- .bpanel-box -->
            <div class="bpanel-box">
                <div class="box-title">
                    <h3><?php esc_html_e('Content', 'kids-world');?></h3>
                </div>
                
                <div class="box-content">
                    <div class="column one-third"><label><?php esc_html_e('Text Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][content-text-color]";
						$value =  (kidsworld_option('colors','content-text-color') != NULL) ? kidsworld_option('colors','content-text-color') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the body content text.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Link Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][content-link-color]";
						$value =  (kidsworld_option('colors','content-link-color') != NULL) ? kidsworld_option('colors','content-link-color') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the body content link.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Link Hover Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][content-link-hcolor]";
						$value =  (kidsworld_option('colors','content-link-hcolor') != NULL) ? kidsworld_option('colors','content-link-hcolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom hover color of the body content link.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                </div><!-- .box-content -->
            </div><!-- .bpanel-box end -->            
        </div><!--#tab4-content end-->

        <!-- #tab5-footer -->
        <div id="tab5" class="tab-content">
            <!-- .bpanel-box -->
            <div class="bpanel-box">
                <div class="box-title">
                    <h3><?php esc_html_e('Footer', 'kids-world');?></h3>
                </div>
                
                <div class="box-content">
                    <div class="column one-half">
                    	<label><?php esc_html_e('Footer Background Color', 'kids-world');?></label>
                        <div class="clear"></div><?php
						$name  =  "dttheme[colors][footer-bgcolor]";
						$value =  (kidsworld_option('colors','footer-bgcolor') != NULL) ? kidsworld_option('colors','footer-bgcolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the footer background.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>

					<div class="column one-half last">
						<div class="bpanel-option-set">
	                        <?php echo kidsworld_admin_jqueryuislider( esc_html__("Background opacity", 'kids-world'), "dttheme[colors][footer-bgcolor-opacity]",
                                                                          kidsworld_option("colors","footer-bgcolor-opacity"),"");?>
                        </div>
                        <p class="note"><?php esc_html_e('You can adjust opacity of the footer BG color here.', 'kids-world');?></p>
                    </div>
					<div class="hr"></div>

                    <div class="column one-half">
                    	<label><?php esc_html_e('Copyright Section BG Color', 'kids-world');?></label>
                        <div class="clear"></div><?php
						$name  =  "dttheme[colors][copyright-bgcolor]";
						$value =  (kidsworld_option('colors','copyright-bgcolor') != NULL) ? kidsworld_option('colors','copyright-bgcolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the copyright section background.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>

					<div class="column one-half last">
						<div class="bpanel-option-set">
	                        <?php echo kidsworld_admin_jqueryuislider( esc_html__("Background opacity", 'kids-world'), "dttheme[colors][copyright-bgcolor-opacity]",
                                                                          kidsworld_option("colors","copyright-bgcolor-opacity"),"");?>
                        </div>
                        <p class="note"><?php esc_html_e('You can adjust opacity of the copyright section BG color here.', 'kids-world');?></p>
                    </div>
					<div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Footer Text Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][footer-text-color]";
						$value =  (kidsworld_option('colors','footer-text-color') != NULL) ? kidsworld_option('colors','footer-text-color') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the footer text elements.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Footer Link Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][footer-link-color]";
						$value =  (kidsworld_option('colors','footer-link-color') != NULL) ? kidsworld_option('colors','footer-link-color') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the footer links.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Footer Hover Link Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][footer-link-hcolor]";
						$value =  (kidsworld_option('colors','footer-link-hcolor') != NULL) ? kidsworld_option('colors','footer-link-hcolor') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom hover color of the footer links.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Footer Heading Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][footer-heading-color]";
						$value =  (kidsworld_option('colors','footer-heading-color') != NULL) ? kidsworld_option('colors','footer-heading-color') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the footer headings.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                </div><!-- .box-content -->
            </div><!-- .bpanel-box end -->            
        </div><!--#tab5-footer end-->

        <!-- #tab6-heading -->
        <div id="tab6" class="tab-content">
            <!-- .bpanel-box -->
            <div class="bpanel-box">
                <div class="box-title">
                    <h3><?php esc_html_e('Heading', 'kids-world');?></h3>
                </div>
                
                <div class="box-content">
                    <div class="column one-third"><label><?php esc_html_e('Heading H1 Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][heading-h1-color]";
						$value =  (kidsworld_option('colors','heading-h1-color') != NULL) ? kidsworld_option('colors','heading-h1-color') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the heading tag h1.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>
                    
                    <div class="column one-third"><label><?php esc_html_e('Heading H2 Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][heading-h2-color]";
						$value =  (kidsworld_option('colors','heading-h2-color') != NULL) ? kidsworld_option('colors','heading-h2-color') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the heading tag h2.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Heading H3 Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][heading-h3-color]";
						$value =  (kidsworld_option('colors','heading-h3-color') != NULL) ? kidsworld_option('colors','heading-h3-color') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the heading tag h3.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Heading H4 Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][heading-h4-color]";
						$value =  (kidsworld_option('colors','heading-h4-color') != NULL) ? kidsworld_option('colors','heading-h4-color') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the heading tag h4.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Heading H5 Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][heading-h5-color]";
						$value =  (kidsworld_option('colors','heading-h5-color') != NULL) ? kidsworld_option('colors','heading-h5-color') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the heading tag h5.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third"><label><?php esc_html_e('Heading H6 Color', 'kids-world');?></label></div>
                    <div class="column two-third last"><?php
						$name  =  "dttheme[colors][heading-h6-color]";
						$value =  (kidsworld_option('colors','heading-h6-color') != NULL) ? kidsworld_option('colors','heading-h6-color') :"";
                        kidsworld_admin_color_picker_two($name,$value);?>
                        <p class="note"><?php esc_html_e('Pick a custom color of the heading tag h6.(e.g. #a314a3)', 'kids-world');?></p>
                    </div>
                </div><!-- .box-content -->
            </div><!-- .bpanel-box end -->            
        </div><!--#tab6-heading end-->

    </div><!-- .bpanel-main-content end-->
</div><!-- #colors end-->