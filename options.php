
<div class="wrap">
	
    <?php screen_icon(); ?>
    
	<form action="options.php" method="post" id="pbp_option_form" name="<?php echo $plugin_id; ?>_options_form">
    
	<?php settings_fields($plugin_id.'_options'); ?>
    
    <h2> PBP Dashboard Changer</h2>
    
	<div class="widefat bdc_panel">
		<div class="pbp_panel_head" >
			<a id="customize_dashbord_toggle" class="inactive toggler" href="#">Toggle</a>
			<h3 class="pbp_title" >Dashboard Customize</h3>
			<input type="submit" name="submit" value="Save Settings" class="button-primary bdc_submit" />
		</div>
		
		<div id="customize_dashbord_body" class="pbp_panel" >
			<label for="">
				<p><label><input class="admin_checkbox" type="checkbox" name="pbp_screen_options" <?php if(get_option('pbp_screen_options')): echo 'checked'; else: echo 'unchecked'; endif;?> />Hide Screen Options Tab</label></p>
				
				<p><label><input class="admin_checkbox" type="checkbox" name="pbp_help_tab" <?php if(get_option('pbp_help_tab')): echo 'checked'; else: echo 'unchecked'; endif;?> />Hide Help Tab</label></p>
				
				 <p><label><input class="admin_checkbox" type="checkbox" name="pbp_right_now" <?php if(get_option('pbp_right_now')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove Right Now</label></p>
				 
				 <p><label><input class="admin_checkbox" type="checkbox" name="pbp_recent_comments" <?php if(get_option('pbp_recent_comments')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove Recent Comments</label></p>
				 
				 <p><label><input class="admin_checkbox" type="checkbox" name="pbp_recent_drafts" <?php if(get_option('pbp_recent_drafts')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove Recent Drafts</label></p>
				 
				 <p><label><input class="admin_checkbox" type="checkbox" name="pbp_remove_plugins" <?php if(get_option('pbp_remove_plugins')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove Plugins</label></p>
				 
				 <p><label><input class="admin_checkbox" type="checkbox" name="pbp_incoming_links" <?php if(get_option('pbp_incoming_links')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove Incoming Links</label></p>
				 
				 <p><label><input class="admin_checkbox" type="checkbox" name="pbp_remove_quickpress" <?php if(get_option('pbp_remove_quickpress')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove Quickpress</label></p>
				 
				 <p><label><input class="admin_checkbox" type="checkbox" name="pbp_remove_wpblog" <?php if(get_option('pbp_remove_wpblog')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove WordPress Blog</label></p>
				 
				 <p><label><input class="admin_checkbox" type="checkbox" name="pbp_other_wp_news" <?php if(get_option('pbp_other_wp_news')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove Other WordPress News</label></p>
			</label>
		</div>
	</div>
    
	
	<div class="widefat bdc_panel">
		<div class="pbp_panel_head" >
			<a id="customize_admin_bar_toggle" class="inactive toggler" href="#">Toggle</a>
			<h3 class="pbp_title" >Admin Bar Customize </h3>
			<input type="submit" name="submit" value="Save Settings" class="button-primary bdc_submit" />
		</div>
		
		<div id="customize_admin_body" class="pbp_panel" >
			<label for="">
				<p><label><input class="admin_checkbox" type="checkbox" name="pbp_remove_admin_bar" <?php if(get_option('pbp_remove_admin_bar')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove Admin Bar ( Excerpt Admin )</label></p>
					 
				<p><label><input class="admin_checkbox" type="checkbox" name="pbp_remove_wp_logo" <?php if(get_option('pbp_remove_wp_logo')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove WordPress Logo</label></p>

				<p><label><input class="admin_checkbox" type="checkbox" name="pbp_remove_about_wplink" <?php if(get_option('pbp_remove_about_wplink')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove About WordPress Link</label></p>

				<p><label><input class="admin_checkbox" type="checkbox" name="pbp_remove_wporg_link" <?php if(get_option('pbp_remove_wporg_link')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove WordPress.org Link</label></p>

				<p><label><input class="admin_checkbox" type="checkbox" name="pbp_remove_doc_link" <?php if(get_option('pbp_remove_doc_link')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove Documentation Link</label></p>

				<p><label><input class="admin_checkbox" type="checkbox" name="pbp_remove_support_link" <?php if(get_option('pbp_remove_support_link')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove Support Forums Link</label></p>

				<p><label><input class="admin_checkbox" type="checkbox" name="pbp_remove_feedback_link" <?php if(get_option('pbp_remove_feedback_link')): echo 'checked'; else: echo 'unchecked'; endif;?> />Remove Feedback Link</label></p>
			</label>
		</div>
	</div>
	
	
	<div class="widefat bdc_panel">
		<div class="pbp_panel_head" >
			<a id="customize_login_page_toggle" class="inactive toggler" href="#">Toggle</a>
			<h3 class="pbp_title" >Login Page Customize </h3>
			<input type="submit" name="submit" value="Save Settings" class="button-primary bdc_submit" />
		</div>
		
		<div id="customize_login_page_body" class="pbp_panel" >
			<label for="">
				<span class='upload'>
					<p><label>Custom Login Logo</label></p>
					<input type='text' id='pbp_upload_input' class='regular-text text-upload' name='pbp_login_logo' value='<?php echo get_option('pbp_login_logo'); ?>'/>
					<input type='button' class='button button-upload' value='Upload'/></br>
					<?php if (get_option('pbp_login_logo')): ?><img src='<?php echo get_option('pbp_login_logo'); ?>' class='preview-upload'/><?php endif;?>
				</span>
					
				<p>Custom Message on Login Page</p>
				<textarea id='pbp_custom_login_message' name='pbp_custom_login_message' ><?php echo get_option('pbp_custom_login_message'); ?></textarea>
				
				<p>Custom Message on Registration Page</p>
				<textarea id='pbp_custom_reg_message' name='pbp_custom_reg_message' ><?php echo get_option('pbp_custom_reg_message'); ?></textarea>
				
			</label>
		</div>
	</div>
	

	</div>
	
	</form>
    
</div>