<!-- #widgetarea -->
<div id="widgetarea" class="bpanel-content">

    <!-- .bpanel-main-content -->
    <div class="bpanel-main-content">
        <ul class="sub-panel"> 
            <li><a href="#tab1"><?php esc_html_e('Sidebar', 'kids-world');?></a></li>
        </ul>
        
        <!-- #tab1-custom-widgetarea -->
        <div id="tab1" class="tab-content">

            <!-- .bpanel-box -->
            <div class="bpanel-box">
                <div class="box-title">
                    <h3><?php esc_html_e('Create New Widget Area', 'kids-world');?></h3>
                </div>
                
                <div class="box-content">
                    <p class="note"><?php esc_html_e("You can create widget areas here, and assign them in individual page / post", 'kids-world');?></p>
                    <div class="bpanel-option-set">
                        <input type="button" data-for="custom" value="<?php esc_attr_e('Add New Widget Area', 'kids-world');?>" class="black dttheme_add_widgetarea" />
                        <div class="hr_invisible"></div><?php
                        $widgets = kidsworld_option('widgetarea','custom');
                        $widgets = is_array($widgets) ? array_unique($widgets) : array();
                        $widgets = array_filter($widgets); ?>
                    </div>
                    <div class="bpanel-option-set">
                      <ul class="added-menu"><?php
                          foreach( $widgets as $k => $v){?>
                              <li>
                                <div class="item-bar">
                                  <span class="item-title"><?php esc_html_e('Widget Area:', 'kids-world'); echo" $v";?></span>
                                  <span class="item-control"><a class="item-edit"><?php esc_html_e('Edit', 'kids-world');?></a></span>
                                </div>
                                <div class="item-content" style="display: none;">
                                  <span><label><?php esc_html_e('Name', 'kids-world');?></label><input type="text" name="dttheme[widgetarea][custom][]" class="social-link" value="<?php echo esc_attr($v);?>" /></span>
                                  <div class="remove-cancel-links">
                                    <span class="remove-item"><?php esc_html_e('Remove', 'kids-world');?></span>
                                    <span class="meta-sep"> | </span>
                                    <span class="cancel-item"><?php esc_html_e('Cancel', 'kids-world');?></span>
                                  </div>
                                </div>
                              </li><?php
                          }?>
                      </ul>

                      <ul class="sample-to-edit" style="display:none;">
                        <li>
                          <div class="item-bar">
                            <span class="item-title"><?php esc_html_e('Widget Area', 'kids-world');?></span>
                            <span class="item-control"><a class="item-edit"><?php esc_html_e('Edit', 'kids-world');?></a></span>
                          </div>

                          <div class="item-content">
                            <span><label><?php esc_html_e('Name', 'kids-world');?></label><input type="text" class="social-link" /></span>
                            <div class="remove-cancel-links">
                              <span class="remove-item"><?php esc_html_e('Remove', 'kids-world');?></span>
                              <span class="meta-sep"> | </span>
                              <span class="cancel-item"><?php esc_html_e('Cancel', 'kids-world');?></span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                </div><!-- .box-content -->
            </div><!-- .bpanel-box end -->

            <!-- .bpanel-box -->
            <div class="bpanel-box">
                <div class="box-title">
                    <h3><?php esc_html_e('Sidebar Widget Styles', 'kids-world');?></h3>
                </div>
                
                <div class="box-content">
                    <div class="column one-half">
						<h6><?php esc_html_e('Sidebar widget Title Style', 'kids-world');?></h6>
                        <div class="column one-fifth">
                            <select name="dttheme[widgetarea][wtitle-style]" class="dt-chosen-select"><?php
                                $selected = kidsworld_option('widgetarea','wtitle-style');
                                $wtitle_styles = array( '' => esc_html__('Choose any  type', 'kids-world'), 'type1' => esc_html__('Double Border','kids-world'), 'type2' => esc_html__('Tooltip','kids-world'), 'type3' => esc_html__('Title Top Border','kids-world'),
								'type4' => esc_html__('Left Border & Pattren','kids-world'), 'type5' => esc_html__('Bottom Border','kids-world'), 'type6' => esc_html__('Tooltip Border','kids-world'), 'type7' => esc_html__('Boxed Modern','kids-world'), 'type8' => esc_html__('Elegant Border','kids-world'),
								'type9' => esc_html__('Needle','kids-world'), 'type10' => esc_html__('Ribbon','kids-world'), 'type11' => esc_html__('Content Background','kids-world'), 'type12' => esc_html__('Classic BG','kids-world'), 'type13' => esc_html__('Tiny Boders','kids-world'),
								'type14' => esc_html__('BG & Border','kids-world'), 'type15' => esc_html__('Classic BG Alt','kids-world'), 'type16' => esc_html__('Left Border & BG','kids-world'), 'type17' => esc_html__('Basic','kids-world'), 'type18' => esc_html__('BG & Pattern','kids-world'));
                                foreach( $wtitle_styles as $wt => $bv ):
                                    echo "<option value='{$wt}'".selected($selected,$wt,false).">{$bv}</option>";
                                endforeach;?></select>
                        </div>
                        <div class="column four-fifth last">
                              <p class="note"><?php esc_html_e('Choose the style of sidebar widget title.', 'kids-world');?></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div><!--#tab1-custom-widgetarea end-->

    </div><!-- .bpanel-main-content end-->
</div><!-- #widgetarea end-->