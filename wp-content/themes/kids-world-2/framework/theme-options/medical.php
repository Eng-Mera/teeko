<!-- #pageoptions -->
<div id="medical" class="bpanel-content">
  <!-- .bpanel-main-content -->
  <div class="bpanel-main-content">

    <ul class="sub-panel"> 
      <li><a href="#medical"><?php esc_html_e('Medical Add-on', 'kids-world');?></a></li>
    </ul>

    <!-- #medical - Medical Custom Post Type -->
    <div id="medical" class="tab-content">

      <!-- .bpanel-box -->
      <div class="bpanel-box">

        <!-- Custom Fields -->
          <div class="box-title">
            <h3><?php esc_html_e('Doctor Custom Fields', 'kids-world');?></h3>
          </div>

          <div class="box-content">
            <div class="portfolio-custom-fields">
              <input type="button" class="black add-custom-field" value="<?php esc_attr_e('Add New Field', 'kids-world');?>" />
              <div class="hr_invisible"> </div><?php
                $custom_fields = kidsworld_option("pageoptions","doctor-custom-fields");
                $custom_fields = is_array($custom_fields) ? array_filter($custom_fields) : array();
                $custom_fields = array_unique($custom_fields);

                foreach( $custom_fields as $field ) {?>
                  <div class="custom-field-container">
                    <div class="hr_invisible"> </div>
                    <input class="medium" type="text" name="<?php echo "dttheme[pageoptions][doctor-custom-fields][]";?>" value="<?php echo esc_attr($field);?>">
                    <a href='' class='remove-custom-field'><?php esc_html_e('Remove', 'kids-world');?></a>
                  </div><?php
                }?>

                <div class="clone hidden">
                  <div class="custom-field-container">
                    <div class="hr_invisible"> </div>
                    <input class="medium" type="text" name="<?php echo "dttheme[pageoptions][doctor-custom-fields][]";?>" value="">
                    <a href='' class='remove-custom-field'><?php esc_html_e('Remove', 'kids-world');?></a>
                  </div>
                </div>
            </div>
          </div>
        <!-- Custom Fields -->

        <!-- Taxonomy Page Settings -->
          <div class="box-title">
            <h3><?php $title = kidsworld_opts_get( 'singular-doctor-tax-name', esc_html__('Department', 'kids-world') );
                printf( esc_html__( '%s Archive Page Layout', 'kids-world' ), $title );?></h3>
          </div>
          <div class="box-content">

            <div class="column one-third"><label><?php esc_html_e('Post Style', 'kids-world');?></label></div>
            <div class="column two-third last">
              <?php $selected = kidsworld_option('pageoptions','doctor-post-layout');?>
              <select class="dt-chosen-select" name="dttheme[pageoptions][doctor-post-layout]">
                <optgroup label="<?php esc_attr_e('Style 1','kids-world');?>">
                  <option value="1" <?php selected( $selected, 1);?>><?php esc_html_e('Two Columns','kids-world');?></option>
                  <option value="2" <?php selected( $selected, 2);?>><?php esc_html_e('Three Columns','kids-world');?></option>
                </optgroup>
                <optgroup label="<?php esc_attr_e('Style 2','kids-world');?>">
                  <option value="3" <?php selected( $selected, 3);?>><?php esc_html_e('Two Columns','kids-world');?></option>
                  <option value="4" <?php selected( $selected, 4);?>><?php esc_html_e('Three Columns','kids-world');?></option>
                  <option value="5" <?php selected( $selected, 5);?>><?php esc_html_e('Four Columns','kids-world');?></option>
                </optgroup>                
              </select>
              <p class="note"><?php esc_html_e('Choose the doctor post layout style', 'kids-world');?></p>
            </div>
            <div class="hr"></div>

            <div class="hr_invisible"> </div>
            <h6><?php esc_html_e('Layout', 'kids-world');?></h6>
            <p class="note no-margin"><?php esc_html_e("Choose the archive page layout style", 'kids-world');?></p>
            <div class="hr_invisible"> </div>
            <div class="bpanel-option-set">
              <ul class="bpanel-post-layout bpanel-layout-set" id="doctors-archives-layout"><?php
                $layout = array('content-full-width'=>'without-sidebar','with-left-sidebar'=>'left-sidebar','with-right-sidebar'=>'right-sidebar','with-both-sidebar'=>'both-sidebar');
                $v = kidsworld_option('pageoptions',"doctors-archives-page-layout");
                $v = !empty($v) ? $v : "content-full-width";
                foreach($layout as $key => $value):
                  $class = ( $key ==   $v ) ? " class='selected' " : "";
                  echo "<li><a href='#' rel='{$key}' {$class}><img src='" . KIDSWORLD_THEME_URI . "/framework/theme-options/images/columns/{$value}.png' /></a></li>";
                endforeach;?>
              </ul>
              <input name="dttheme[pageoptions][doctors-archives-page-layout]" type="hidden" value="<?php echo esc_attr($v);?>"/>
            </div><?php
              $sb_layout = kidsworld_option('pageoptions',"doctors-archives-page-layout");
              $sb_layout = !empty($sb_layout) ? $sb_layout : "content-full-width";
              $sidebar_both = $sidebar_left = $sidebar_right = '';
              if($sb_layout == 'content-full-width' ) {
                $sidebar_both = 'style="display:none;"'; 
              } elseif($sb_layout == 'with-left-sidebar') {
                $sidebar_right = 'style="display:none;"'; 
              } elseif($sb_layout == 'with-right-sidebar') {
                $sidebar_left = 'style="display:none;"'; 
              }?>
              <div id="bpanel-widget-area-options" <?php echo 'class="doctors-archives-layout" '.$sidebar_both;?>>

                <div id="left-sidebar-container" class="bpanel-page-left-sidebar" <?php echo ($sidebar_left); ?>>
                  <!-- 2. Standard Sidebar Left Start -->
                  <div id="page-commom-sidebar" class="bpanel-sidebar-section custom-box">
                    <h6><?php esc_html_e('Show Standard Left Sidebar', 'kids-world');?></label></h6>
                    <?php kidsworld_switch("",'pageoptions','show-standard-left-sidebar-for-doctor_departments'); ?>
                  </div><!-- Standard Sidebar Left End-->
                </div>

                <div id="right-sidebar-container" class="bpanel-page-right-sidebar" <?php echo ($sidebar_right); ?>>
                  <!-- 3. Standard Sidebar Right Start -->
                  <div id="page-commom-sidebar" class="bpanel-sidebar-section custom-box">
                    <h6><?php esc_html_e('Show Standard Right Sidebar', 'kids-world');?></label></h6>
                    <?php kidsworld_switch("",'pageoptions','show-standard-right-sidebar-for-doctor_departments'); ?>
                  </div><!-- Standard Sidebar Right End-->
                </div>
              </div>
          </div>
        <!-- Taxonomy Page Settings -->

        <!-- Permalinks Settings -->
          <div class="box-title">
            <h3><?php esc_html_e('Permalinks', 'kids-world');?></h3>
          </div>
          <div class="box-content">
            <div class="column one-third"><label><?php esc_html_e('Single Doctor slug', 'kids-world');?></label></div>
            <div class="column two-third last">
              <input name="dttheme[pageoptions][single-doctor-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','single-doctor-slug')));?>" />
              <p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. doctor-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
            </div>
            <div class="hr"></div>

            <div class="column one-third"><label><?php esc_html_e('Doctor Deparetment slug', 'kids-world');?></label></div>
            <div class="column two-third last">
              <input name="dttheme[pageoptions][doctor-deparetment-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','doctor-deparetment-slug')));?>" />
              <p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. doctor-types <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
            </div>
            <div class="hr"></div>

            <div class="column one-half">
              <label><?php esc_html_e('Singular Doctor Name', 'kids-world');?></label>
              <div class="clear"></div>
              <input name="dttheme[pageoptions][singular-doctor-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-doctor-name')));?>" />
              <p class="note"><?php esc_html_e('By default "Doctor", save options & reload.', 'kids-world');?></p>
              <div class="hr"></div>
            </div>

            <div class="column one-half last">
              <label><?php esc_html_e('Plural Doctor Name', 'kids-world');?></label>
              <div class="clear"></div>
              <input name="dttheme[pageoptions][plural-doctor-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-doctor-name')));?>" />
              <p class="note"><?php esc_html_e('By default "Doctors". save options & reload.', 'kids-world');?></p>
              <div class="hr"></div>
            </div>

            <div class="column one-half">
              <label><?php esc_html_e('Singular Doctor Deparetment Name', 'kids-world');?></label>
              <div class="clear"></div>
              <input name="dttheme[pageoptions][singular-doctor-tax-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-doctor-tax-name')));?>" />
              <p class="note"><?php esc_html_e('By default "Deparetment". save options & reload.', 'kids-world');?></p>
              <div class="hr"></div>
            </div>

            <div class="column one-half last">
              <label><?php esc_html_e('Plural Doctor Deparetment Name', 'kids-world');?></label>
              <div class="clear"></div>
              <input name="dttheme[pageoptions][plural-doctor-tax-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-doctor-tax-name')));?>" />
              <p class="note"><?php esc_html_e('By default Departments". save options & reload.', 'kids-world');?></p>
              <div class="hr"></div>
            </div>
          </div>
        <!-- Permalinks Settings -->
      </div><!-- .bpanel-box -->
    </div><!-- #medical - Medical Custom Post Type -->
  </div><!-- .bpanel-main-content end-->
</div><!-- #pageoptions end-->