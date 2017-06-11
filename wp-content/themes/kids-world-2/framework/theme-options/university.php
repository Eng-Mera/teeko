<!-- #university -->
<div id="university" class="bpanel-content">
    <!-- .bpanel-main-content -->
    <div class="bpanel-main-content">
    	<ul class="sub-panel">
    		<li><a href="#university-course">
    			<?php $ucourse = kidsworld_opts_get( 'singular-ucourse-tax-name', esc_html__('Course', 'kids-world') );
    				echo ($ucourse);?></a></li> 
    		<li><a href="#university-faculty">
    			<?php $ufaculty = kidsworld_opts_get( 'singular-ufaculty-tax-name', esc_html__('Faculty', 'kids-world') );
    				echo ($ufaculty);?></a></li> 
    		<li><a href="#university-department">
    			<?php $udepartment = kidsworld_opts_get( 'singular-udepartment-tax-name', esc_html__('Department', 'kids-world') );
    				echo ($udepartment);?></a></li> 
    	</ul>

    	<!-- #university-course -->
    	<div id="university-course" class="tab-content">
    		<div class="bpanel-box">
   				<!-- Custom Fields -->
	    			<div class="box-title">
	        			<h3><?php printf( esc_html__('%s Custom Fields','kids-world') , $ucourse ); ?></h3>
	    			</div>
	    			<div class="box-content">
	    				<div class="portfolio-custom-fields">
	    					<input type="button" class="black add-custom-field" value="<?php esc_attr_e('Add New Field', 'kids-world');?>" />
	    					<div class="hr_invisible"> </div><?php

	    						$custom_fields = kidsworld_option("pageoptions","ucourse-custom-fields");
	    						$custom_fields = is_array($custom_fields) ? array_filter($custom_fields) : array();
	    						$custom_fields = array_unique( $custom_fields);

	    						$custom_field_icons = kidsworld_option("pageoptions","ucourse-custom-field-icons");
	    						$custom_field_icons = is_array($custom_field_icons) ? array_filter($custom_field_icons) : array();
	    						$custom_field_icons = array_unique( $custom_field_icons);

	    						foreach( $custom_fields as $k => $field ) { ?>
	    							<div class="custom-field-container">
	    								<div class="hr_invisible"> </div>

	    								<label>
	    									<?php esc_html_e('Icon :','kids-world');?> 
	    									<input class="medium" type="text" name="<?php echo "dttheme[pageoptions][ucourse-custom-field-icons][]";?>" value="<?php echo esc_attr($custom_field_icons[$k]);?>">
	    								</label>

	    								<label>
	    									<?php esc_html_e('Text :','kids-world');?> 
	    									<input class="medium" type="text" name="<?php echo "dttheme[pageoptions][ucourse-custom-fields][]";?>" value="<?php echo esc_attr($field);?>">
	    								</label>    								
	    							</div><?php
	    						}?>
	    					<div class="clone hidden">
	    						<div class="custom-field-container">
	    							<div class="hr_invisible"> </div>
	    							<label>
	    								<?php esc_html_e('Icon :','kids-world');?> 
	    								<input class="medium" type="text" name="<?php echo "dttheme[pageoptions][ucourse-custom-field-icons][]";?>" value="">
	    							</label>
	    							<label>
	    								<?php esc_html_e('Text :','kids-world');?>
	    								<input class="medium" type="text" name="<?php echo "dttheme[pageoptions][ucourse-custom-fields][]";?>" value="">
	    							</label>
	    							<label> <a href='' class='remove-custom-field'><?php esc_html_e('Remove', 'kids-world');?></a> </label>
	    						</div>
	    					</div>	
	    				</div>
	    			</div>
   				<!-- Custom Fields -->

				<!-- Permalink-->
					<div class="box-title">
						<h3><?php esc_html_e('Permalinks', 'kids-world');?></h3>
					</div>
					<div class="box-content">

						<div class="column one-third">
							<label><?php printf( esc_html__('Single %s slug','kids-world') , $ucourse ); ?></label>
						</div>
						<div class="column two-third last">
							<input name="dttheme[pageoptions][single-ucourse-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','single-ucourse-slug')));?>" />
							<p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. course-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
						</div>
						<div class="hr"></div>

						<div class="column one-third">
							<label><?php printf( esc_html__('Singular %s Name','kids-world') , $ucourse ); ?></label>
						</div>
						<div class="column two-third last">
							<input name="dttheme[pageoptions][singular-ucourse-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-ucourse-name')));?>" />
							<p class="note"><?php esc_html_e('By default "Course", save options & reload.', 'kids-world');?></p>
						</div>
						<div class="hr"></div>

						<div class="column one-third">
							<label><?php printf( esc_html__('Plural %s Name','kids-world') , $ucourse ); ?></label>
						</div>
						<div class="column two-third last">
							<input name="dttheme[pageoptions][plural-ucourse-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-ucourse-name')));?>" />
							<p class="note"><?php esc_html_e('By default "Courses", save options & reload.', 'kids-world');?></p>
						</div>
					</div>
				<!-- Permalink-->    				
    		</div>
    	</div>
    	<!-- #university-course -->

    	<!-- #university-faculty -->
    	<div id="university-faculty" class="tab-content">
    		<div class="bpanel-box">
    			<!-- Custom Fields -->
	    			<div class="box-title">
	        			<h3><?php printf( esc_html__('%s Custom Fields','kids-world') , $ufaculty ); ?></h3>
	    			</div>
	    			<div class="box-content">
	    				<div class="portfolio-custom-fields">
	    					<input type="button" class="black add-custom-field" value="<?php esc_attr_e('Add New Field', 'kids-world');?>" />
	    					<div class="hr_invisible"> </div><?php

	    						$custom_fields = kidsworld_option("pageoptions","ufaculty-custom-fields");
	    						$custom_fields = is_array($custom_fields) ? array_filter($custom_fields) : array();
	    						$custom_fields = array_unique( $custom_fields);

	    						foreach( $custom_fields as $field ) { ?>
	    							<div class="custom-field-container">
	    								<div class="hr_invisible"> </div>
	   									<input class="medium" type="text" name="<?php echo "dttheme[pageoptions][ufaculty-custom-fields][]";?>" value="<?php echo esc_attr($field);?>">
	    								<a href='' class='remove-custom-field'><?php esc_html_e('Remove', 'kids-world');?></a>
	    							</div><?php
	    						}?>
	    					<div class="clone hidden">
	    						<div class="custom-field-container">
	    							<div class="hr_invisible"> </div>
	    							<input class="medium" type="text" name="<?php echo "dttheme[pageoptions][ufaculty-custom-fields][]";?>" value="">
	    							<a href='' class='remove-custom-field'><?php esc_html_e('Remove', 'kids-world');?></a>
	    						</div>
	    					</div>	
	    				</div>
	    			</div>	
    			<!-- Custom Fields -->

				<!-- Permalink-->
					<div class="box-title">
						<h3><?php esc_html_e('Permalinks', 'kids-world');?></h3>
					</div>
					<div class="box-content">

						<div class="column one-third">
							<label><?php printf( esc_html__('Single %s slug','kids-world') , $ufaculty ); ?></label>
						</div>
						<div class="column two-third last">
							<input name="dttheme[pageoptions][single-ufaculty-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','single-ufaculty-slug')));?>" />
							<p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. course-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
						</div>
						<div class="hr"></div>

						<div class="column one-third">
							<label><?php printf( esc_html__('Singular %s Name','kids-world') , $ufaculty ); ?></label>
						</div>
						<div class="column two-third last">
							<input name="dttheme[pageoptions][singular-ufaculty-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-ufaculty-name')));?>" />
							<p class="note"><?php esc_html_e('By default "Course", save options & reload.', 'kids-world');?></p>
						</div>
						<div class="hr"></div>

						<div class="column one-third">
							<label><?php printf( esc_html__('Plural %s Name','kids-world') , $ufaculty ); ?></label>
						</div>
						<div class="column two-third last">
							<input name="dttheme[pageoptions][plural-ufaculty-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-ufaculty-name')));?>" />
							<p class="note"><?php esc_html_e('By default "Courses", save options & reload.', 'kids-world');?></p>
						</div>
					</div>
				<!-- Permalink-->    			
    		</div>
    	</div>
    	<!-- #university-faculty -->

    	<!-- #university-department -->
    	<div id="university-department" class="tab-content">
    		<div class="bpanel-box">

    			<!-- Taxonomy Settings -->
	    			<div class="box-title">
	        			<h3><?php printf( esc_html__('%s Archive Page Layout','kids-world') , $udepartment ); ?></h3>
	    			</div>
	    			<div class="box-content">

	    				<!-- Page Layout -->
	    					<h6><?php esc_html_e('Layout', 'kids-world');?></h6>
	    					<p class="note no-margin"><?php esc_html_e("Choose the archive page layout style", 'kids-world');?></p>
	    					<div class="hr_invisible"> </div>
	    					<div class="bpanel-option-set">
	    						<ul class="bpanel-post-layout bpanel-layout-set" id="udepartment-archives-layout"><?php
	    							$layout = array('content-full-width'=>'without-sidebar','with-left-sidebar'=>'left-sidebar','with-right-sidebar'=>'right-sidebar','with-both-sidebar'=>'both-sidebar');
	    							$v = kidsworld_option('pageoptions',"udepartment-archives-page-layout");
	    							$v = !empty($v) ? $v : "content-full-width";

	    							foreach($layout as $key => $value):
	    								$class = ( $key ==   $v ) ? " class='selected' " : "";
	    							echo "<li><a href='#' rel='{$key}' {$class}><img src='" . KIDSWORLD_THEME_URI . "/framework/theme-options/images/columns/{$value}.png' /></a></li>";
	    							endforeach;?>
	    						</ul>
	    						<input name="dttheme[pageoptions][udepartment-archives-page-layout]" type="hidden" value="<?php echo esc_attr($v);?>"/>
	    					</div><?php
	    						$sb_layout = kidsworld_option('pageoptions',"udepartment-archives-page-layout");
	    						$sb_layout = !empty($sb_layout) ? $sb_layout : "content-full-width";
	    						$sidebar_both = $sidebar_left = $sidebar_right = '';

	    						if($sb_layout == 'content-full-width' ) {
	    							$sidebar_both = 'style="display:none;"'; 
	    						} elseif($sb_layout == 'with-left-sidebar') {
	    							$sidebar_right = 'style="display:none;"'; 
	    						} elseif($sb_layout == 'with-right-sidebar') {
	    							$sidebar_left = 'style="display:none;"'; 
	    						}?>
	    					<div id="bpanel-widget-area-options" <?php echo 'class="udepartment-archives-layout" '.$sidebar_both;?>>
	    						<div id="left-sidebar-container" class="bpanel-page-left-sidebar" <?php echo ($sidebar_left); ?>>
	    							<div id="page-commom-sidebar" class="bpanel-sidebar-section custom-box">
	    								<h6><?php esc_html_e('Show Standard Left Sidebar', 'kids-world');?></label></h6>
	    								<?php kidsworld_switch("",'pageoptions','show-standard-left-sidebar-for-departments'); ?>
	    							</div>
	    						</div>
	    						<div id="right-sidebar-container" class="bpanel-page-right-sidebar" <?php echo ($sidebar_right); ?>>
	    							<div id="page-commom-sidebar" class="bpanel-sidebar-section custom-box">
	    								<h6><?php esc_html_e('Show Standard Right Sidebar', 'kids-world');?></label></h6>
	    								<?php kidsworld_switch("",'pageoptions','show-standard-right-sidebar-for-departments'); ?>
	    							</div>
	    						</div>
	    					</div>
		    				<div class="hr"></div>	    					
	    				<!-- Page Layout -->

	    				<!-- Post Layout -->
		    				<div class="column one-third"><label><?php esc_html_e('Post Style', 'kids-world');?></label></div>
		    				<div class="column two-third last">
		    					<?php $selected = kidsworld_option('pageoptions','udepartment-post-layout');?>
		    					<select class="dt-chosen-select" name="dttheme[pageoptions][udepartment-post-layout]">
		    						<option value="2" <?php selected( $selected, 2);?>><?php esc_html_e('Two Columns','kids-world');?></option>
		    						<option value="3" <?php selected( $selected, 3);?>><?php esc_html_e('Three Columns','kids-world');?></option>
		    						<option value="4" <?php selected( $selected, 4);?>><?php esc_html_e('Four Columns','kids-world');?></option>
		    					</select>
		    					<p class="note"><?php printf( esc_html__('Choose %s Archive post layout style','kids-world') , $udepartment ); ?></p>
		    				</div>
		    				<div class="hr"></div>
	    				<!-- Post Layout -->

	    				<!-- Show Post -->
	    					<div class="column one-third"><label><?php esc_html_e('Show Post', 'kids-world');?></label></div>
	    					<div class="column two-third last">
		    					<?php $selected = kidsworld_option('pageoptions','udepartment-post');?>
		    					<select class="dt-chosen-select" name="dttheme[pageoptions][udepartment-post]">
		    						<option value="2" <?php selected( $selected, 2);?>><?php printf( esc_html__('Show %s only','kids-world') , $ufaculty ); ?></option>
		    						<option value="3" <?php selected( $selected, 3);?>><?php printf( esc_html__('Show %s only','kids-world') , $ucourse ); ?></option>
		    						<option value="4" <?php selected( $selected, 4);?>><?php esc_html_e('Show Both','kids-world'); ?></option>
		    					</select>
	    					</div>
		    				<div class="hr"></div>
	    				<!-- Show Post -->
	    			</div>	
    			<!-- Taxonomy Settings -->

				<!-- Permalink-->
					<div class="box-title">
						<h3><?php esc_html_e('Permalinks', 'kids-world');?></h3>
					</div>
					<div class="box-content">
						<div class="column one-third">
							<label><?php printf( esc_html__('Single %s slug','kids-world') , $udepartment ); ?></label>
						</div>
						<div class="column two-third last">
							<input name="dttheme[pageoptions][udepartment-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','udepartment-slug')));?>" />
							<p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. department-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
						</div>
						<div class="hr"></div>

						<div class="column one-third">
							<label><?php printf( esc_html__('Singular %s Name','kids-world') , $udepartment ); ?></label>
						</div>
						<div class="column two-third last">
							<input name="dttheme[pageoptions][singular-udepartment-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-udepartment-name')));?>" />
							<p class="note"><?php esc_html_e('By default "Department", save options & reload.', 'kids-world');?></p>
						</div>
						<div class="hr"></div>

						<div class="column one-third">
							<label><?php printf( esc_html__('Plural %s Name','kids-world') , $udepartment ); ?></label>
						</div>
						<div class="column two-third last">
							<input name="dttheme[pageoptions][plural-udepartment-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-udepartment-name')));?>" />
							<p class="note"><?php esc_html_e('By default "Departments", save options & reload.', 'kids-world');?></p>
						</div>
					</div>
				<!-- Permalink-->
    		</div>
    	</div>
    	<!-- #university-department -->
    </div><!-- .bpanel-main-content -->
</div><!-- #university -->