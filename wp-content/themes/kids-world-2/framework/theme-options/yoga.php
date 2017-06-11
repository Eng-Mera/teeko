<!-- #yoga -->
<div id="yoga" class="bpanel-content">
    <!-- .bpanel-main-content -->
    <div class="bpanel-main-content">
    	<ul class="sub-panel">

            <li><a href="#yoga-pose"><?php
                $yogapose = kidsworld_opts_get( 'singular-pose-name', esc_html__('Pose', 'kids-world') );
                echo ($yogapose);?></a></li>

    		<li><a href="#yoga-style"><?php
                $yogastyle = kidsworld_opts_get( 'singular-style-name', esc_html__('Style', 'kids-world') );
    			echo ($yogastyle);?></a></li>

            <li><a href="#yoga-teacher"><?php
                $yogateacher = kidsworld_opts_get( 'singular-teacher-name', esc_html__('Teachers', 'kids-world') );
                echo ($yogateacher);?></a></li>                    

    		<li><a href="#yoga-video"><?php 
    			$yogavideo = kidsworld_opts_get( 'singular-video-name', esc_html__('Video', 'kids-world') );
    			echo ($yogavideo);?></a></li>

            <li><a href="#yoga-program"><?php 
                $yogaprogram = kidsworld_opts_get( 'singular-program-name', esc_html__('Program', 'kids-world') );
                echo ($yogaprogram);?></a></li>                    
    	</ul>

        <!-- #yoga-pose -->
        <div id="yoga-pose" class="tab-content">
            <div class="bpanel-box">
                <!-- Permalink-->
                    <div class="box-title">
                        <h3><?php esc_html_e('Permalinks', 'kids-world');?></h3>
                    </div>
                    <div class="box-content">

                        <div class="column one-third">
                            <label><?php printf( esc_html__('Single %s slug','kids-world') , $yogapose ); ?></label>
                        </div>
                        <div class="column two-third last">
                            <input name="dttheme[pageoptions][single-pose-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','single-pose-slug')));?>" />
                            <p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. style-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
                        </div>
                        <div class="hr"></div>

                        <div class="column one-third">
                            <label><?php printf( esc_html__('Singular %s Name','kids-world') , $yogapose ); ?></label>
                        </div>
                        <div class="column two-third last">
                            <input name="dttheme[pageoptions][singular-pose-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-pose-name')));?>" />
                            <p class="note"><?php esc_html_e('By default "Pose", save options & reload.', 'kids-world');?></p>
                        </div>
                        <div class="hr"></div>

                        <div class="column one-third">
                            <label><?php printf( esc_html__('Plural %s Name','kids-world') , $yogapose ); ?></label>
                        </div>
                        <div class="column two-third last">
                            <input name="dttheme[pageoptions][plural-pose-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-pose-name')));?>" />
                            <p class="note"><?php esc_html_e('By default "Poses", save options & reload.', 'kids-world');?></p>
                        </div>
                    </div>
                <!-- Permalink-->                   
            </div>
        </div>
        <!-- #yoga-pose -->

    	<!-- #yoga-style -->
    	<div id="yoga-style" class="tab-content">
    		<div class="bpanel-box">
				<!-- Permalink-->
					<div class="box-title">
						<h3><?php esc_html_e('Permalinks', 'kids-world');?></h3>
					</div>
					<div class="box-content">

						<div class="column one-third">
							<label><?php printf( esc_html__('Single %s slug','kids-world') , $yogastyle ); ?></label>
						</div>
						<div class="column two-third last">
							<input name="dttheme[pageoptions][single-style-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','single-style-slug')));?>" />
							<p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. style-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
						</div>
						<div class="hr"></div>

						<div class="column one-third">
							<label><?php printf( esc_html__('Singular %s Name','kids-world') , $yogastyle ); ?></label>
						</div>
						<div class="column two-third last">
							<input name="dttheme[pageoptions][singular-style-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-style-name')));?>" />
							<p class="note"><?php esc_html_e('By default "Style", save options & reload.', 'kids-world');?></p>
						</div>
						<div class="hr"></div>

						<div class="column one-third">
							<label><?php printf( esc_html__('Plural %s Name','kids-world') , $yogastyle ); ?></label>
						</div>
						<div class="column two-third last">
							<input name="dttheme[pageoptions][plural-style-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-style-name')));?>" />
							<p class="note"><?php esc_html_e('By default "Styles", save options & reload.', 'kids-world');?></p>
						</div>
					</div>
				<!-- Permalink-->    				
    		</div>
    	</div>
    	<!-- #yoga-style -->

        <!-- #yoga-teacher -->
        <div id="yoga-teacher" class="tab-content">
            <div class="bpanel-box">

                <!-- Custom Fields -->
                <div class="box-title">
                    <h3><?php echo ($yogateacher.' '.esc_html__('Custom Fields','kids-world'));?></h3>
                </div>
                <div class="box-content">
                    <div class="portfolio-custom-fields">
                        <input type="button" class="black add-custom-field" value="<?php esc_attr_e('Add New Field', 'kids-world');?>" />
                        <div class="hr_invisible"> </div><?php

                            $custom_fields = kidsworld_option("pageoptions","yoga-teacher-custom-fields");
                            $custom_fields = is_array($custom_fields) ? array_filter($custom_fields) : array();
                            $custom_fields = array_unique( $custom_fields);

                            foreach( $custom_fields as $field ) { ?>
                                <div class="custom-field-container">
                                    <div class="hr_invisible"> </div>
                                    <input class="medium" type="text" name="<?php echo "dttheme[pageoptions][yoga-teacher-custom-fields][]";?>" value="<?php echo esc_attr($field);?>">
                                    <a href='' class='remove-custom-field'><?php esc_html_e('Remove', 'kids-world');?></a>
                                </div><?php
                            }?>
                        <div class="clone hidden">
                            <div class="custom-field-container">
                                <div class="hr_invisible"> </div>
                                <input class="medium" type="text" name="<?php echo "dttheme[pageoptions][yoga-teacher-custom-fields][]";?>" value="">
                                <a href='' class='remove-custom-field'><?php esc_html_e('Remove', 'kids-world');?></a>
                            </div>
                        </div>  
                    </div>              
                </div>
                <!-- Custom Fields -->

                <!-- Permalinks -->
                <div class="box-title">
                    <h3><?php esc_html_e('Permalinks', 'kids-world');?></h3>                    
                </div>
                <div class="box-content">

                    <div class="column one-third">
                        <label><?php printf( esc_html__('Single %s slug','kids-world') , $yogateacher ); ?></label>
                    </div>
                    <div class="column two-third last">
                        <input name="dttheme[pageoptions][single-teacher-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','single-teacher-slug')));?>" />
                        <p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. teacher-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third">
                        <label><?php printf( esc_html__('Singular %s Name','kids-world') , $yogateacher ); ?></label>
                    </div>
                    <div class="column two-third last">
                        <input name="dttheme[pageoptions][singular-teacher-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-teacher-name')));?>" />
                        <p class="note"><?php esc_html_e('By default "Teacher", save options & reload.', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third">
                        <label><?php printf( esc_html__('Plural %s Name','kids-world') , $yogateacher ); ?></label>
                    </div>
                    <div class="column two-third last">
                        <input name="dttheme[pageoptions][plural-teacher-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-teacher-name')));?>" />
                        <p class="note"><?php esc_html_e('By default "Teachers", save options & reload.', 'kids-world');?></p>
                    </div>
                </div>                
                <!-- Permalinks -->
            </div>              
        </div>
        <!-- #yoga-teacher -->        

    	<!-- #yoga-video -->
    	<div id="yoga-video" class="tab-content">
    		<div class="bpanel-box">

                <!-- Permalinks -->
                <div class="box-title">
                    <h3><?php echo ($yogavideo.' '); esc_html_e('Permalinks', 'kids-world');?></h3>                    
                </div>
                <div class="box-content">

                    <div class="column one-third">
                        <label><?php printf( esc_html__('Single %s slug','kids-world') , $yogavideo ); ?></label>
                    </div>
                    <div class="column two-third last">
                        <input name="dttheme[pageoptions][single-video-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','single-video-slug')));?>" />
                        <p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. video-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third">
                        <label><?php printf( esc_html__('Singular %s Name','kids-world') , $yogavideo ); ?></label>
                    </div>
                    <div class="column two-third last">
                        <input name="dttheme[pageoptions][singular-video-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-video-name')));?>" />
                        <p class="note"><?php esc_html_e('By default "Video", save options & reload.', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third">
                        <label><?php printf( esc_html__('Plural %s Name','kids-world') , $yogavideo ); ?></label>
                    </div>
                    <div class="column two-third last">
                        <input name="dttheme[pageoptions][plural-video-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-video-name')));?>" />
                        <p class="note"><?php esc_html_e('By default "Videos", save options & reload.', 'kids-world');?></p>
                    </div>
                </div>                
                <!-- Permalinks -->

                <!-- Permalinks -->
                <?php $yogaduration = kidsworld_opts_get( 'singular-video-duration-name', esc_html__('Duration', 'kids-world') ); ?>
                <div class="box-title">
                    <h3><?php echo ($yogaduration.' '); esc_html_e('Permalinks', 'kids-world');?></h3>                    
                </div>
                <div class="box-content">

                    <div class="column one-third">
                        <label><?php printf( esc_html__('Single %s slug','kids-world') , $yogaduration ); ?></label>
                    </div>
                    <div class="column two-third last">
                        <input name="dttheme[pageoptions][video-duration-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','video-duration-slug')));?>" />
                        <p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. video-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third">
                        <label><?php printf( esc_html__('Singular %s Name','kids-world') , $yogaduration ); ?></label>
                    </div>
                    <div class="column two-third last">
                        <input name="dttheme[pageoptions][singular-video-duration-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-video-duration-name')));?>" />
                        <p class="note"><?php esc_html_e('By default "Duration", save options & reload.', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third">
                        <label><?php printf( esc_html__('Plural %s Name','kids-world') , $yogaduration ); ?></label>
                    </div>
                    <div class="column two-third last">
                        <input name="dttheme[pageoptions][plural-video-duration-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-video-duration-name')));?>" />
                        <p class="note"><?php esc_html_e('By default "Durations", save options & reload.', 'kids-world');?></p>
                    </div>
                </div>                
                <!-- Permalinks -->

                <!-- Permalinks -->
                <?php $yogastudentlevel = kidsworld_opts_get( 'singular-level-name', esc_html__('Student Level', 'kids-world') ); ?>
                <div class="box-title">
                    <h3><?php echo ($yogastudentlevel.' '); esc_html_e('Permalinks', 'kids-world');?></h3>                    
                </div>
                <div class="box-content">

                    <div class="column one-third">
                        <label><?php printf( esc_html__('Single %s slug','kids-world') , $yogastudentlevel ); ?></label>
                    </div>
                    <div class="column two-third last">
                        <input name="dttheme[pageoptions][level-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','level-slug')));?>" />
                        <p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. video-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third">
                        <label><?php printf( esc_html__('Singular %s Name','kids-world') , $yogastudentlevel ); ?></label>
                    </div>
                    <div class="column two-third last">
                        <input name="dttheme[pageoptions][singular-level-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-level-name')));?>" />
                        <p class="note"><?php esc_html_e('By default "Duration", save options & reload.', 'kids-world');?></p>
                    </div>
                    <div class="hr"></div>

                    <div class="column one-third">
                        <label><?php printf( esc_html__('Plural %s Name','kids-world') , $yogastudentlevel ); ?></label>
                    </div>
                    <div class="column two-third last">
                        <input name="dttheme[pageoptions][plural-level-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-level-name')));?>" />
                        <p class="note"><?php esc_html_e('By default "Durations", save options & reload.', 'kids-world');?></p>
                    </div>
                </div>                
                <!-- Permalinks -->
                <!-- Overlay Text -->
    			<div class="box-title">
    				<h3><?php echo ($yogavideo);?></h3>
    			</div>
    			<div class="box-content">

						<div class="column one-third">
							<label><?php printf( esc_html__('Premium %s overlay text','kids-world') , $yogavideo ); ?></label>
						</div>
						<div class="column two-third last">
							<textarea name="dttheme[pageoptions][premium-video-text]"><?php echo trim(stripslashes(kidsworld_option('pageoptions','premium-video-text')));?></textarea>
							<p class="note"><?php esc_html_e('Premium Video Overlay text', 'kids-world');?></p>
						</div>
						<div class="hr"></div>    			
    			</div>
                <!-- Overlay Text -->
    		</div>
    	</div>
    	<!-- #yoga-video -->

        <!-- #yoga-program -->
        <div id="yoga-program" class="tab-content">
            <div class="bpanel-box">
        
            <!-- Permalinks -->
            <div class="box-title">
                <h3><?php echo ($yogaprogram.' '); esc_html_e('Permalinks', 'kids-world');?></h3>                    
            </div>
            <div class="box-content">

                <div class="column one-third">
                    <label><?php printf( esc_html__('Single %s slug','kids-world') , $yogaprogram ); ?></label>
                </div>
                <div class="column two-third last">
                    <input name="dttheme[pageoptions][single-program-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','single-program-slug')));?>" />
                    <p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. program-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
                </div>
                <div class="hr"></div>

                <div class="column one-third">
                    <label><?php printf( esc_html__('Singular %s Name','kids-world') , $yogaprogram ); ?></label>
                </div>
                <div class="column two-third last">
                    <input name="dttheme[pageoptions][singular-program-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-program-name')));?>" />
                    <p class="note"><?php esc_html_e('By default "program", save options & reload.', 'kids-world');?></p>
                </div>
                <div class="hr"></div>

                <div class="column one-third">
                    <label><?php printf( esc_html__('Plural %s Name','kids-world') , $yogaprogram ); ?></label>
                </div>
                <div class="column two-third last">
                    <input name="dttheme[pageoptions][plural-program-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-program-name')));?>" />
                    <p class="note"><?php esc_html_e('By default "Programs", save options & reload.', 'kids-world');?></p>
                </div>
            </div>                
            <!-- Permalinks -->

            <!-- Permalinks -->
            <?php $yogacategory = kidsworld_opts_get( 'singular-program-category-name', esc_html__('Category', 'kids-world') ); ?>
            <div class="box-title">
                <h3><?php echo ($yogacategory.' '); esc_html_e('Permalinks', 'kids-world');?></h3>                    
            </div>
            <div class="box-content">

                <div class="column one-third">
                    <label><?php printf( esc_html__('Single %s slug','kids-world') , $yogacategory ); ?></label>
                </div>
                <div class="column two-third last">
                    <input name="dttheme[pageoptions][program-category-slug]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','program-category-slug')));?>" />
                    <p class="note"><?php esc_html_e('Do not use characters not allowed in links. Use, eg. category-item <br> <b>After made changes save permalinks.</b>', 'kids-world');?></p>
                </div>
                <div class="hr"></div>

                <div class="column one-third">
                    <label><?php printf( esc_html__('Singular %s Name','kids-world') , $yogacategory ); ?></label>
                </div>
                <div class="column two-third last">
                    <input name="dttheme[pageoptions][singular-program-category-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','singular-program-category-name')));?>" />
                    <p class="note"><?php esc_html_e('By default "Category", save options & reload.', 'kids-world');?></p>
                </div>
                <div class="hr"></div>

                <div class="column one-third">
                    <label><?php printf( esc_html__('Plural %s Name','kids-world') , $yogacategory ); ?></label>
                </div>
                <div class="column two-third last">
                    <input name="dttheme[pageoptions][plural-program-category-name]" type="text" class="medium" value="<?php echo trim(stripslashes(kidsworld_option('pageoptions','plural-program-category-name')));?>" />
                    <p class="note"><?php esc_html_e('By default "Categories", save options & reload.', 'kids-world');?></p>
                </div>
            </div>                
            <!-- Permalinks -->
            </div>
        </div>
        <!-- #yoga-program -->
    </div><!-- .bpanel-main-content -->
</div><!-- #yoga -->