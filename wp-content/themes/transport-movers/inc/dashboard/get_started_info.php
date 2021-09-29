<?php

add_action( 'admin_menu', 'transport_movers_gettingstarted' );
function transport_movers_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'transport-movers'), esc_html__('About Theme', 'transport-movers'), 'edit_theme_options', 'transport-movers-guide-page', 'transport_movers_guide');   
}

function transport_movers_admin_theme_style() {
   wp_enqueue_style('transport-movers-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
}
add_action('admin_enqueue_scripts', 'transport_movers_admin_theme_style');

function transport_movers_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Transport Mover, you rock!', 'transport-movers' ) ?> </h2>
			<p><?php esc_html_e( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional Transport Movers website. Please Click on the link below to know the theme setup information.', 'transport-movers' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=transport-movers-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Getting Started', 'transport-movers' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'transport_movers_notice');

/**
 * Theme Info Page
 */
function transport_movers_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'transport-movers' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
			<div class="row">
				<div class="col-md-5 intro">
					<div class="pad-box">
						<h2><?php esc_html_e( 'Welcome to Transport Mover', 'transport-movers' ); ?></h2>
						<p>Version: <?php echo esc_html($theme['Version']);?></p>
						<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'transport-movers' ); ?>	
						</span>
						<div class="powered-by">
							<p><strong><?php esc_html_e( 'Theme created by Buy WP Templates', 'transport-movers' ); ?></strong></p>
							<p>
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/theme-logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="pro-links">
				    	<a href="<?php echo esc_url( TRANSPORT_MOVERS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'transport-movers'); ?></a>
						<a href="<?php echo esc_url( TRANSPORT_MOVERS_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'transport-movers'); ?></a>
						<a href="<?php echo esc_url( TRANSPORT_MOVERS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'transport-movers'); ?></a>
					</div>
					<div class="install-plugins">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive1.png'); ?>" alt="" />
					</div>
				</div>
			</div>
			<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1). Setup Transport Mover Theme', 'transport-movers' ); ?></h2>
			<div class="row">
				<div class="theme-instruction-block col-md-7">
					<div class="pad-box">
	                    <p><?php esc_html_e( 'Transport Movers is a WordPress theme to show the online presence of your transport and logistics businesses. The theme can be used by transport companies, carrier services, logistics companies, packers and movers, shipping, trucking, warehouses and freight services. Its simple and clean design enables to understand the site and use it with ease. This responsive theme is tested to work across different browsers. It is translation ready supports RTL writing. The theme has attractive design perfect to show the professionalism in your work. The theme is integrated with location plugin necessary for transport and logistics business to let you and visitors keep track of the vehicle. It implements short codes for clean and secure coding. The code is also search engine optimized. These things together make the site rank higher in Google search and also help it to load faster. The transport movers WP theme has a testimonial section to share customer experience of your site. This will help visitors get a better insight of your work and services and help decide whether to opt for it or not. This theme has an interactive and user-friendly interface for better user experience.', 'transport-movers' ); ?><p><br>
						<ol>
							<li><?php esc_html_e( 'Start','transport-movers'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','transport-movers'); ?></a> <?php esc_html_e( 'your website.','transport-movers'); ?> </li>
							<li><?php esc_html_e( 'Transport Mover','transport-movers'); ?> <a target="_blank" href="<?php echo esc_url( TRANSPORT_MOVERS_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','transport-movers'); ?></a> </li>
						</ol>
                    </div>
              	</div>
				<div class="col-md-5">
					<div class="pad-box">
              			<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
              		 </div> 
              	</div>
            </div>
			<div class="col-md-12 text-block">
					<h2 class="dashboard-install-title"><?php esc_html_e( '2.) Premium Theme Information.','transport-movers'); ?></h2>
					<div class="row">
						<div class="col-md-7">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Description','transport-movers'); ?></h3>
	                    		<p class="pad-box-p"><?php esc_html_e( 'Transport WordPress theme is a visually appealing, elegant and clean multipurpose theme for all transport businesses. The theme has its usage in transport business, movers and packers, logistics, freight services, shipping and cargo business. It is the premium version of the free transport WordPress theme. It has a pool of useful features which makes it even more useful and different from other themes of the like. The theme is fully responsive and cross-browser compatible making your site accessible through mobile and tablets loading smoothly on all browsers. The customizability of the theme helps making it personalize. You can change its colour, background, images, header, footer, fonts etc. through theme option panel without involving into coding part. It is designed to cater smooth navigation through different pages and sections. Give a great experience to your visitors and convert a general visit to your site into potential lead for your business. The theme has user-friendly front and back end interface which will ease its use for you as well as your visitors.', 'transport-movers' ); ?><p>
	                    	</div>
						</div>
						<div class="col-md-5 install-plugin-right">
							<div class="pad-box">								
								<h3><?php esc_html_e( 'Pro Theme Features','transport-movers'); ?></h3>
								<div class="dashboard-install-benefit">
									<ul>
										<li><?php esc_html_e( 'Theme options using customizer API','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Responsive design','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Favicon, Logo, title and tagline customization','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Advanced Color options and color pallets','transport-movers'); ?></li>
										<li><?php esc_html_e( '100+ Font Family Options','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Pagination option','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Fade Slider With different Tabs','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Unlimited Slides','transport-movers'); ?></li>
										<li><?php esc_html_e( 'About the Company section','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Services Listing','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Form to get a Free quote using Contact Form 7','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Pricing Plans section','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Seperate section to defind the flow of work','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Testimonial Section with shortcode','transport-movers'); ?></li>
										<li><?php esc_html_e( 'FAQ Section on Home with its shortcode','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Brand/Partner Listing Section','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Social Icon Widget, tagline, logo.','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Social Sharing On post','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Well sanitized as per WordPress standards.','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Responsive layout for all devices','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Fully integrated with Font Awesome Icon','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Background Image Option','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Custom page templates','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Allow to set site title, tagline, logo','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Left and Right Sidebar','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Sticky post & Comment threads','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Customizable Home Page','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Multiple inner page templates','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Contact Page Template','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Blog Full width and right and left sidebar','transport-movers'); ?></li>
										<li><?php esc_html_e( 'Recent post widget with images, Related post','transport-movers'); ?></li>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="dashboard__blocks">
			<div class="row">
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Get Support','transport-movers'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( TRANSPORT_MOVERS_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','transport-movers'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( TRANSPORT_MOVERS_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','transport-movers'); ?></a></li>
					</ol>
				</div>

				<div class="col-md-3">
					<h3><?php esc_html_e( 'Getting Started','transport-movers'); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Start','transport-movers'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','transport-movers'); ?></a> <?php esc_html_e( 'your website.','transport-movers'); ?> </li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Help Docs','transport-movers'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( TRANSPORT_MOVERS_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','transport-movers'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( TRANSPORT_MOVERS_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','transport-movers'); ?></a></li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Buy Premium','transport-movers'); ?></h3>
					<ol>
						<a href="<?php echo esc_url( TRANSPORT_MOVERS_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'transport-movers'); ?></a>
					</ol>
				</div>
			</div>
		</div>
	</div>
<?php }?>