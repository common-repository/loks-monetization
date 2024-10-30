<div class="wrap wix-admin">
	<?php
        wix_Monetization::get_api_token();
        $withAPI = get_option('wix_api_ready');
        $token = get_option('wix_token');
        $email = get_option('wix_email');
    ?>
	<h2 class="wix-header-widget"><?php echo esc_html(get_admin_page_title()); ?></h2>
    <div class="wix-left">
        <form method="post" action="options.php" id="wix_form">
            <?php settings_fields('shst-settings-group'); ?>
            <?php do_settings_sections('shst-settings-group'); ?>
            <div class="wix-settings-group">
                <h2 class="wix-header"><?php _e('Your Wix mail', $this->plugin_slug );?></h2>
                <div class="wix-options-group">
                    <?php if($withAPI): ?>
                    <label class="wix-label" for="wix_token"><?php _e('Wix.cx email', $this->plugin_slug );?></label>
                    <input type="text" class="wix-input-text" id="wix_email" name="wix_email"
                           value="<?php echo esc_html( get_option('wix_email') ); ?>"
                        />
                    <?php else: ?>
                    <label class="wix-label" for="wix_token">API Token</label>
                    <input type="text" class="wix-input-text" id="wix_token" name="wix_token"
                    value="<?php echo esc_html( $token ); ?>"
                    />
                    <?php endif; ?>
                </div>
                <?php if($withAPI): ?>
                    <?php if ($email && empty($token)): ?>
                    <p style="color: red">
                        <?php _e( 'It looks like this e-mail address is not connected with a Wix.cx account. Enter the e-mail you used to register on Wix.cx.', $this->plugin_slug );?><a href="#" id="wix_refresh" style=""><?php _e( 'Refresh', $this->plugin_slug );?></a>
                    </p>
                    <?php endif ?>
                <?php endif ?>
            </div>
            <div class="wix-settings-group">
                <div class="wix-options-group">
                    <h2 class="wix-header"><?php _e( 'Status', $this->plugin_slug );?></h2>
                    <div class="wix-switcher <?php if(get_option('wix_fps_enabled')): ?>active<?php endif;?>" id="switcher01">
                        <div class="switch <?php if(get_option('wix_fps_enabled')): ?>on<?php endif;?>"></div>
                        <input type="checkbox" id="wix_fpsenabled" name="wix_fps_enabled" <?php if(get_option('wix_fps_enabled')): ?>checked="checked"<?php endif;?> value="1">
                    </div>
                </div>
                <div class="switcher-visibility switcher01  <?php if(get_option('wix_fps_enabled')): ?>active<?php endif;?>">
                    <div class="wix-options-group">
                        <label class="wix-label" for="wix_fps_selection_types"><?php _e('Domains selection type', $this->plugin_slug );?></label>
                        <select id="wix_fps_selection_types" name="wix_fps_selection_type" required="required">
                            <option value="<?= wix_Monetization::FPS_SELECTION_TYPE_EXCLUDE ?>"
                                <?php if(intval(get_option('wix_fps_selection_type')) === wix_Monetization::FPS_SELECTION_TYPE_EXCLUDE):?>
                                    selected="selected"
                                <?php endif;?>><?php _e( 'Exclude', $this->plugin_slug );?>
                            </option>
                            <option value="<?= wix_Monetization::FPS_SELECTION_TYPE_INCLUDE ?>"
                                <?php if(intval(get_option('wix_fps_selection_type')) === wix_Monetization::FPS_SELECTION_TYPE_INCLUDE):?>
                                    selected="selected"
                                <?php endif;?>><?php _e( 'Include', $this->plugin_slug );?>
                            </option>
                        </select>
                    </div>
                    <div class="wix-options-group">
                        <label class="wix-label" for="wix_fps_domains_list"><?php _e( 'Domains list (comma separated): ex1.com,ex2.com', $this->plugin_slug );?></label>
                        <textarea class="wix-textarea" id="wix_fps_domains_list" name="wix_fps_domains_list" rows="1" cols="100"><?php
                            echo esc_html(get_option('wix_fps_domains_list'));
                        ?></textarea>
                    </div>
                <div class="wix-options-group"><br><hr><br>
                    <h2 class="wix-header"><?php _e('Earnings', $this->plugin_slug );?></h2>
                    <div class="wix-switcher <?php if(get_option('wix_us_enabled')): ?>active<?php endif;?>" id="switcher03">
                        <div class="switch <?php if(get_option('wix_us_enabled')): ?>on<?php endif;?>"></div>
                        <input type="checkbox" id="wix_fpsenabled" name="wix_us_enabled" <?php if(get_option('wix_us_enabled')): ?>checked="checked"<?php endif;?> value="1">
                    </div>
                </div>
                <div class="switcher-visibility switcher03 <?php if(get_option('wix_us_enabled')): ?>active<?php endif;?>">
                    <div class="wix-options-group">
                        <label class="wix-label" for="wix_us_types"><?php _e( 'Profit Method', $this->plugin_slug );?></label>
                        <select id="wix_us_types" name="wix_us_type" required="required">
                            <option value="<?= wix_Monetization::ES_TYPE_CLICK ?>"
                                    <?php if(intval(get_option('wix_us_type')) === wix_Monetization::ES_TYPE_CLICK): ?>
                                        selected="selected"
                                    <?php endif;?>><?php _e( 'Paid', $this->plugin_slug );?>
                            </option>
                            <option class="js-timeout" value="<?= wix_Monetization::ES_TYPE_TIMEOUT ?>"
                                    <?php if(intval(get_option('wix_us_type')) === wix_Monetization::ES_TYPE_TIMEOUT): ?>
                                        selected="selected"
                                    <?php endif;?>><?php _e( 'ADSense', $this->plugin_slug );?>
                            </option>
                        </select>
                    </div>
                    <div class="js-timeout-opt switcher-visibility <?php if(intval(get_option('wix_us_type')) === wix_Monetization::ES_TYPE_TIMEOUT): ?>
                                        active
                                    <?php endif;?>">
                        <div class="wix-options-group">
                            <label class="wix-label" for="wix_us_timeout"><?php _e( 'AdSense Publisher ID', $this->plugin_slug );?> </label>
                            <input type="text" placeholder="Pub-0000000000000 " class="wix-input-text wix-number" id="wix_us_timeout" name="wix_us_timeout"
                                   value="<?php echo esc_html( get_option('wix_us_timeout') ); ?>"
                                />
                        </div>
                    </div>


                </div>
                </div>
            </div>
          


            <div class="wix-settings-group last">
            <input type="hidden" name="wix_email_changed" value="1" />
            <input type="submit" value="<?php _e( 'Save Changes', $this->plugin_slug );?>" class="wix-submit" id="submit" name="submit">
            </div>
        </form>
    </div>
    <div class="wix-right">
        <h2 class="wix-header"><?php _e( 'Quick help', $this->plugin_slug );?></h2>

        <?php if($withAPI): ?>
            <h3 class="wix-header"><?php _e( 'Wix.cx account', $this->plugin_slug );?></h3>
            <p class="wix-paragraph-help"><?php _e( 'You need a Wix.cx account to start earning money. Dont have one? Sign up by clicking the button below.', $this->plugin_slug );?>
            <a href="https://wix.cx/user/register" target="_blank" class="wix-submit"><?php _e('Register on Wix.cx', $this->plugin_slug );?></a></p>
        <?php else: ?>
            <h3 class="wix-header">What is API Token?</h3>
            <p class="wix-paragraph-help">It's your unique ID number automatically generated when you register on Wix.cx website. You can view it on tools page after logging in. If you don't have an account please register by clicking the following button.
            <a href="https://wix.cx/user/register" class="wix-submit"><?php _e('Register on Wix.cx', $this->plugin_slug );?></a></p>
        <?php endif ?>

        <h3 class="wix-header"><?php _e( 'Links', $this->plugin_slug );?></h3>
        <p class="wix-paragraph-help"><?php _e( 'Links module monetizes all internal and external links on your website.', $this->plugin_slug );?>
		<br>
		<strong><?php _e( 'Exclude :', $this->plugin_slug );?> </strong> <?php _e( 'if you wish to change every link to <strong>Wix.cx</strong> on your website (without stating exactly which domains) please use the following code.', $this->plugin_slug );?>
		<br>
		<?php _e( '<strong>Include : </strong>If you have a website with 100s or 1000000s of links you want to change over to <strong>Wix.cx</strong>', $this->plugin_slug );?> 
		</p>
		
        <h3 class="wix-header"><?php _e( 'Earnings', $this->plugin_slug );?></h3>
        <p class="wix-paragraph-help"><?php _e( 'The way to profit through Wix.cx or through your Adsense account', $this->plugin_slug );?>
.</p>

    </div>
</div>
