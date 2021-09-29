<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'transport-solutions' ); ?></a>

<div class="top-header text-center text-md-left py-2">
	<div class="container">
		<div class="row">
		    <div class="col-lg-5 col-md-8 align-self-center">
	    	 	<?php if ( get_theme_mod('transport_solutions_top_header_text') ) : ?>
			    	<p class="mb-0"><?php echo esc_html( get_theme_mod('transport_solutions_top_header_text' ) ); ?></p>
			  	<?php endif; ?>
	    	</div>
		    <div class="col-lg-7 col-md-4 align-self-center">
		    	<?php $transport_solutions_settings = get_theme_mod( 'transport_solutions_social_links_settings' ); ?>
				<div class="social-links text-center text-md-right">
					<?php if ( is_array($transport_solutions_settings) || is_object($transport_solutions_settings) ){ ?>
			            <?php foreach( $transport_solutions_settings as $transport_solutions_setting ) { ?>
					        <a href="<?php echo esc_url( $transport_solutions_setting['link_url'] ); ?>">
					            <i class="<?php echo esc_attr( $transport_solutions_setting['link_text'] ); ?> mr-3"></i>
					        </a>
					    <?php } ?>
					<?php } ?>
				</div>
		    </div>
		</div>
	</div>
</div>
<header id="site-navigation" class="header text-center text-md-left">
	<div class="container">
		<div class="row">
		    <div class="col-lg-3 col-md-12 align-self-center">
		    	<div class="logo text-center text-md-center text-lg-left">
			    	<div class="logo-image mr-3">
				    	<?php echo esc_url( the_custom_logo() ); ?>
				    </div>
				    <div class="logo-content">
				    	<?php 
				    		if ( get_theme_mod('transport_solutions_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('transport_solutions_display_header_text', true) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
					    ?>
					</div>
				</div>
		    </div>
		    <div class="col-lg-3 col-md-4 align-self-center">
		    	<?php if ( get_theme_mod('transport_solutions_header_phone_number') ) : ?>
			    	<p class="mb-0 py-2 py-md-4"><i class="fas fa-phone mr-1"></i><?php esc_html_e('Call Us : ','transport-solutions'); ?><?php echo esc_html( get_theme_mod('transport_solutions_header_phone_number' ) ); ?></p>
			  	<?php endif; ?>
		    </div>
		    <div class="col-lg-3 col-md-4 align-self-center">
		    	<?php if ( get_theme_mod('transport_solutions_header_email_address') ) : ?>
			    	<p class="mb-0 py-2 py-md-4"><i class="fas fa-envelope mr-1"></i><?php esc_html_e('Send Us Email : ','transport-solutions'); ?><?php echo esc_html( get_theme_mod('transport_solutions_header_email_address' ) ); ?></p>
			  	<?php endif; ?>
		    </div>
		    <div class="col-lg-3 col-md-4 align-self-center">
		    	<?php if ( get_theme_mod('transport_solutions_header_open_timings') ) : ?>
			    	<p class="mb-0 py-2 py-md-4"><i class="fas fa-history mr-1"></i><?php esc_html_e('Timings : ','transport-solutions'); ?><?php echo esc_html( get_theme_mod('transport_solutions_header_open_timings' ) ); ?></p>
			  	<?php endif; ?>
		    </div>
		</div>
	</div>
	<div class="container">
		<div class="menu-block">
			<div class="row menu-bg-box">
				<div class="col-lg-8 col-md-8 col-12 align-self-center">
					<?php if(has_nav_menu('main-menu')){ ?>
						<button class="menu-toggle my-2 p-2" aria-controls="top-menu" aria-expanded="false" type="button">
							<span aria-hidden="true"><?php esc_html_e( 'Menu', 'transport-solutions' ); ?></span>
						</button>
						<nav id="main-menu" class="close-panal">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'container' => 'false'
								));
							?>
							<button class="close-menu my-2 p-2" type="button">
								<span aria-hidden="true"><i class="fa fa-times"></i></span>
							</button>
						</nav>
					<?php }?>
				</div>
				<div class="col-lg-1 col-md-1 col-12 align-self-center">
					<?php if ( get_theme_mod('transport_solutions_search_box_enable', true) == true ) : ?>
	                    <div class="header-search my-4 text-center"> 
	                        <a class="open-search-form" href="#search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
	                        <div class="search-form"><?php get_search_form();?></div>
	                    </div>
	                <?php endif; ?>
				</div>
				<div class="col-lg-3 col-md-3 col-12 button-box text-center align-self-center">
					<?php if ( get_theme_mod('transport_solutions_header_button_url') || get_theme_mod('transport_solutions_header_button_text') ) : ?>
			    		<a href="<?php echo esc_url( get_theme_mod('transport_solutions_header_button_url' ) ); ?>" class="button-header py-4 px-1 p-md-4 d-block"><?php echo esc_html( get_theme_mod('transport_solutions_header_button_text' ) ); ?></a>
				  	<?php endif; ?>
				</div>
			</div>	
	    </div>
	</div>
</header>