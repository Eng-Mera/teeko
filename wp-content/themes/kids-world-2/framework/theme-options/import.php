<!-- #import -->
<div id="import" class="bpanel-content">

    <!-- .bpanel-main-content -->
    <div class="bpanel-main-content">
        <ul class="sub-panel"> 
            <li><a href="#tab1"><?php esc_html_e('Import Demo', 'kids-world');?></a></li>
        </ul>

        <?php $avail_demos = array('default' => 'Default'); ?>

        <!-- #tab1-import-demo -->
        <div id="tab1" class="tab-content">
            <!-- .bpanel-box -->
            <div class="bpanel-box">
                <div class="box-title">
                    <h3><?php esc_html_e('Import Demo', 'kids-world');?></h3>
                </div>

                <div class="box-content dttheme-import">
                    <p class="note"><?php esc_html_e('Before starting the import, you need to install all plugins that you want to use.<br />If you are planning to use the shop, please install WooCommerce plugin.', 'kids-world');?></p>
                    <div class="hr_invisible"> </div>
                    <div class="column one-third"><label><?php esc_html_e('Importer', 'kids-world');?></label></div>
                    <div class="column two-third last">
                    	<select name="demo" class="demo medium dt-chosen-select">
                        	<option data-link="javascript:void(0)" value="">-- <?php esc_html_e('Select', 'kids-world');?> --</option>
                            <option data-link="http://wedesignthemes.com/themes/kidsworld/" value="default"><?php esc_html_e('Default', 'kids-world');?></option>
                        </select>
                        <a class="lnk-onlinedemo" href="http://wedesignthemes.com/themes/kidsworld/" target="_blank"><?php esc_html_e('Online Demo', 'kids-world');?></a>
                    </div>
                    <div class="hr_invisible"> </div>

                    <?php foreach($avail_demos as $avail_demo_key => $avail_demo) { ?>
                    		<div class="kidsworld-demos <?php echo esc_attr($avail_demo_key); ?>-demo hide">
                            
                                <div class="column one-third"><label><?php esc_html_e('Import', 'kids-world');?></label></div>
                                <div class="column two-third last">
                                    <select name="import" class="import medium dt-chosen-select">
                                        <option value="">-- <?php esc_html_e('Select', 'kids-world');?> --</option>
                                        <option value="all"><?php esc_html_e('All', 'kids-world') ?></option>
                                        <option value="content"><?php esc_html_e('Content', 'kids-world') ?></option>
                                        <option value="menu"><?php esc_html_e('Menu', 'kids-world') ?></option>
                                        <option value="options"><?php esc_html_e('Options', 'kids-world') ?></option>
                                        <option value="widgets"><?php esc_html_e('Widgets', 'kids-world') ?></option>
                                    </select>
                                </div>
                                <div class="hr_invisible"> </div>
            
                                <div class="row-content hide">
                                    <div class="column one-third">
                                        <label for="content">Content</label>
                                    </div>
                                    <div class="column two-third last">
                                        <select name="content" class="medium dt-chosen-select">
                                            <option value="">-- <?php esc_html_e('All', 'kids-world');?> --</option>
                                            <option value="pages"><?php esc_html_e('Pages', 'kids-world');?></option>
                                            <option value="posts"><?php esc_html_e('Posts', 'kids-world');?></option>
                                            <option value="portfolios"><?php esc_html_e('Portfolio', 'kids-world');?></option>
                                            <option value="contactforms"><?php esc_html_e('Contact Forms', 'kids-world');?></option>
                                            <option value="media"><?php esc_html_e('Media', 'kids-world');?></option>
                                        </select>
                                    </div>
                                    <div class="hr_invisible"> </div>
                                </div>
                            
                            </div>
                    <?php } ?>

					<div class="row-attachments hide">
						<div class="column one-third"><?php esc_html_e('Attachments', 'kids-world');?></div>
						<div class="column two-third last">
							<fieldset>
								<label for="attachments"><input type="checkbox" value="0" id="attachments" name="attachments"><?php esc_html_e('Import attachments', 'kids-world');?></label>
								<p class="description"><?php esc_html_e('Download all attachments from the demo may take a while. Please be patient.', 'kids-world');?></p>
							</fieldset>
						</div>
						<div class="hr_invisible"> </div>
					</div>
                    <div class="column one-column">
						<div class="hr_invisible"> </div>
						<div class="column one-third">&nbsp;</div>
						<div class="column two-third last">
		                    <a href="#" class="dttheme-import-button bpanel-button black-btn" title="<?php esc_html_e('Import demo data', 'kids-world');?>"><?php esc_html_e('Import Demo Data', 'kids-world');?></a>
                        </div>
                    </div>

					<div class="hr"></div>
                </div><!-- .box-content -->
            </div><!-- .bpanel-box end -->            
        </div><!--#tab1-import-demo end-->

    </div><!-- .bpanel-main-content end-->
</div><!-- #import end-->