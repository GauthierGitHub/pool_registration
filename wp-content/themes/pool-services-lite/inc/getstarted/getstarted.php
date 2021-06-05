<?php
//about theme info
add_action( 'admin_menu', 'pool_services_lite_gettingstarted' );
function pool_services_lite_gettingstarted() {    	
	add_theme_page( esc_html__('About Pool Services Lite', 'pool-services-lite'), esc_html__('About Pool Services Lite', 'pool-services-lite'), 'edit_theme_options', 'pool_services_lite_guide', 'pool_services_lite_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function pool_services_lite_admin_theme_style() {
   wp_enqueue_style('pool-services-lite-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstarted/getstarted.css');
   wp_enqueue_script('pool-services-lite-tabs', esc_url(get_template_directory_uri()) . '/inc/getstarted/js/tab.js');
   wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'pool_services_lite_admin_theme_style');

//guidline for about theme
function pool_services_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'pool-services-lite' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to Pool Services Lite Theme', 'pool-services-lite' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','pool-services-lite'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy Pool Services Lite at 20% Discount','pool-services-lite'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','pool-services-lite'); ?> ( <span><?php esc_html_e('vwpro20','pool-services-lite'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( POOL_SERVICES_LITE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'pool-services-lite' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="pool_services_lite_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'pool-services-lite' ); ?></button>	
			<button class="tablinks" onclick="pool_services_lite_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'pool-services-lite' ); ?></button> 
		  	<button class="tablinks" onclick="pool_services_lite_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'pool-services-lite' ); ?></button>
		  	<button class="tablinks" onclick="pool_services_lite_open_tab(event, 'pro_theme')"><?php esc_html_e( 'Get Premium', 'pool-services-lite' ); ?></button>
		  	<button class="tablinks" onclick="pool_services_lite_open_tab(event, 'lite_pro')"><?php esc_html_e( 'Support', 'pool-services-lite' ); ?></button>
		</div>

		<!-- Tab content -->
		<?php
			$pool_services_lite_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$pool_services_lite_plugin_custom_css ='display: block';
			}
		?>
		<div id="gutenberg_editor" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Pool_Services_Lite_Plugin_Activation_Settings::get_instance();
			$pool_services_lite_actions = $plugin_ins->recommended_actions;
			?>
				<div class="pool-services-lite-recommended-plugins">
				    <div class="pool-services-lite-action-list">
				        <?php if ($pool_services_lite_actions): foreach ($pool_services_lite_actions as $key => $pool_services_lite_actionValue): ?>
				                <div class="pool-services-lite-action" id="<?php echo esc_attr($pool_services_lite_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($pool_services_lite_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($pool_services_lite_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($pool_services_lite_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'pool-services-lite' ); ?></h3>
				<hr class="h3hr">
				<div class="pool-services-lite-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','pool-services-lite'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
					<h3><?php esc_html_e( 'Link to customizer', 'pool-services-lite' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','pool-services-lite'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','pool-services-lite'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','pool-services-lite'); ?></a>
							</div>
							
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','pool-services-lite'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','pool-services-lite'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','pool-services-lite'); ?></a>
							</div> 
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','pool-services-lite'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','pool-services-lite'); ?></a>
							</div> 
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Pool_Services_Lite_Plugin_Activation_Settings::get_instance();
			$pool_services_lite_actions = $plugin_ins->recommended_actions;
			?>
				<div class="pool-services-lite-recommended-plugins">
				    <div class="pool-services-lite-action-list">
				        <?php if ($pool_services_lite_actions): foreach ($pool_services_lite_actions as $key => $pool_services_lite_actionValue): ?>
				                <div class="pool-services-lite-action" id="<?php echo esc_attr($pool_services_lite_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($pool_services_lite_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($pool_services_lite_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($pool_services_lite_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','pool-services-lite'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($pool_services_lite_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'pool-services-lite' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','pool-services-lite'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon >> Click Pattern Tab >> Click on homepage sections >> Publish.','pool-services-lite'); ?></span></b></p>
	              	<div class="pool-services-lite-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','pool-services-lite'); ?></a>
				    </div>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/block-pattern.png" alt="" />
	            </div>	

	            <div class="block-pattern-link-customizer">
	              	<div class="link-customizer-with-block-pattern">
							<h3><?php esc_html_e( 'Link to customizer', 'pool-services-lite' ); ?></h3>
							<hr class="h3hr">
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','pool-services-lite'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','pool-services-lite'); ?></a>
									</div>
								</div>
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','pool-services-lite'); ?></a>
									</div>
									
									<div class="row-box2">
										<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','pool-services-lite'); ?></a>
									</div>
								</div>

								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','pool-services-lite'); ?></a>
									</div>
									 <div class="row-box2">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','pool-services-lite'); ?></a>
									</div> 
								</div>
								
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','pool-services-lite'); ?></a>
									</div>
									 <div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','pool-services-lite'); ?></a>
									</div> 
								</div>
							</div>
					</div>	
				</div>			
	        </div>
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Pool_Services_Lite_Plugin_Activation_Settings::get_instance();
				$pool_services_lite_actions = $plugin_ins->recommended_actions;
				?>
				<div class="pool-services-lite-recommended-plugins">
				    <div class="pool-services-lite-action-list">
				        <?php if ($pool_services_lite_actions): foreach ($pool_services_lite_actions as $key => $pool_services_lite_actionValue): ?>
				                <div class="pool-services-lite-action" id="<?php echo esc_attr($pool_services_lite_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($pool_services_lite_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($pool_services_lite_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($pool_services_lite_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','pool-services-lite'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($pool_services_lite_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'pool-services-lite' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('Pool Services is an exceptional theme for the pool maintenance services and is one of the finest ones for the pool cleaning or the pool cleaner business. In case, you are operating a robotic pool cleaner company, this theme will service better because of the features like multipurpose nature and responsiveness. This theme is a good one for pool cleaning and plumbing services business and also applicable for the salt water and chemical services. This is a feature rich theme and good one for some of the exceptional services like pool cartridge and cartridge cleaning services. Because of the elegance of Pool Services Lite theme apart from being professional with personalization and customization options, this theme is good for the pool owners as well as hotel plus apartment representatives who want a high premium for their time and financial spending. Pool theme is retina ready apart from being beautiful with service section and secondly it has optimised codes and Bootstrap framework and all these features are quite relevant in making a website in a very short span of time. Being animated with shortcodes, a fascinating pool cleaning services business website can be crafted. This theme is good for pool maintenance companies.','pool-services-lite'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'pool-services-lite' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'pool-services-lite' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( POOL_SERVICES_LITE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'pool-services-lite' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'pool-services-lite'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'pool-services-lite'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'pool-services-lite'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'pool-services-lite'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'pool-services-lite'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( POOL_SERVICES_LITE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'pool-services-lite'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'pool-services-lite'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'pool-services-lite'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( POOL_SERVICES_LITE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'pool-services-lite'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'pool-services-lite' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','pool-services-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','pool-services-lite'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-customizer"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_global_typography') ); ?>" target="_blank"><?php esc_html_e('Typography','pool-services-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_about_section') ); ?>" target="_blank"><?php esc_html_e('About Section','pool-services-lite'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','pool-services-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','pool-services-lite'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','pool-services-lite'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','pool-services-lite'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','pool-services-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pool_services_lite_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','pool-services-lite'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','pool-services-lite'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','pool-services-lite'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','pool-services-lite'); ?></span><?php esc_html_e(' Go to ','pool-services-lite'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','pool-services-lite'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','pool-services-lite'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','pool-services-lite'); ?></span><?php esc_html_e(' Go to ','pool-services-lite'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','pool-services-lite'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','pool-services-lite'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','pool-services-lite'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-pool-services/" target="_blank"><?php esc_html_e('Documentation','pool-services-lite'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>	
		
		<div id="pro_theme" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'pool-services-lite' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Swimming pool WordPress theme is a theme of premium level and is not only Bootstrap oriented but with CTA[ call to action] button and apart from that, it is responsive and multipurpose with clean and safe code plus testimonial sections making it good for pool maintenance service, pool cleaner, pool cleaning, robotic pool cleaner, pool maintenance, pool companies, above ground pool repair. Premium swimming pool WordPress theme is user friendly as well as SEO friendly with fast page load time making it good for pool cleaning and plumbing, salt water and chemical services, salt chlorine generator installation, pool cartridge and cartridge cleaning services, vacuuming and pool tile scrubbing services etc. It is good for all the pool - owners, hotel and apartment representatives who are inclined to place a high premium on their financial means and time. This theme is accompanied with the banner and is not only translation ready but modern as well as luxurious.','pool-services-lite'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( POOL_SERVICES_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'pool-services-lite'); ?></a>
					<a href="<?php echo esc_url( POOL_SERVICES_LITE_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'pool-services-lite'); ?></a>
					<a href="<?php echo esc_url( POOL_SERVICES_LITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'pool-services-lite'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'pool-services-lite' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'pool-services-lite'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'pool-services-lite'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'pool-services-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'pool-services-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'pool-services-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'pool-services-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'pool-services-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'pool-services-lite'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'pool-services-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'pool-services-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'pool-services-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'pool-services-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'pool-services-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('15', 'pool-services-lite'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'pool-services-lite'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'pool-services-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'pool-services-lite'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'pool-services-lite'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'pool-services-lite'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'pool-services-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'pool-services-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( POOL_SERVICES_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'pool-services-lite'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="lite_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'pool-services-lite'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'pool-services-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( POOL_SERVICES_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'pool-services-lite'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'pool-services-lite'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'pool-services-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( POOL_SERVICES_LITE_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'pool-services-lite'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'pool-services-lite'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'pool-services-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( POOL_SERVICES_LITE_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'pool-services-lite'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'pool-services-lite'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'pool-services-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( POOL_SERVICES_LITE_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','pool-services-lite'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'pool-services-lite'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'pool-services-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( POOL_SERVICES_LITE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'pool-services-lite'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>