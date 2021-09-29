<?php
/**
 * The Header for our theme.
 * @package Transport Movers
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open(); 
  } else {
    do_action( 'wp_body_open' ); 
  } ?>
  <?php if(get_theme_mod('transport_movers_preloader',false) != '' || get_theme_mod( 'transport_movers_display_preloader',false) != ''){ ?>
    <div class="frame w-100 h-100">
      <div class="loader">
        <div class="dot-1"></div>
        <div class="dot-2"></div>
        <div class="dot-3"></div>
      </div>
    </div>
  <?php }?>
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#skip_content"><?php esc_html_e( 'Skip to content', 'transport-movers' ); ?></a>
    <?php if( get_theme_mod( 'transport_movers_call','' ) != '' || get_theme_mod( 'transport_movers_email','' ) != '' || get_theme_mod( 'transport_movers_city','' ) != '' || get_theme_mod( 'transport_movers_location','' ) != '' || get_theme_mod( 'transport_movers_button_link','' ) != '') { ?>
      <div class="topbar p-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 align-self-center">
              <div class="row">
                <?php if( get_theme_mod( 'transport_movers_call','' ) != '' || get_theme_mod( 'transport_movers_email','' ) != '') { ?>
                  <div class="col-lg-2 col-md-2 align-self-center">
                    <i class="<?php echo esc_attr(get_theme_mod('transport_movers_phone_icon','fas fa-phone')); ?>"></i>
                  </div>
                  <div class="col-lg-10 col-md-10 pl-0 align-self-center">
                    <a class="text" href="tel:<?php echo esc_attr( get_theme_mod('transport_movers_call','' )); ?>"><?php echo esc_html( get_theme_mod('transport_movers_call','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('transport_movers_call','' )); ?></span></a>
                    <a class="email m-0 p-0" class="mail" href="mailto:<?php echo esc_attr( get_theme_mod('transport_movers_email','') ); ?>"><?php echo esc_html( get_theme_mod('transport_movers_email','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('transport_movers_email','' )); ?></span></a>
                  </div>
                <?php }?>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 align-self-center">
              <div class="row">
                <?php if( get_theme_mod( 'transport_movers_city','' ) != '') { ?>
                  <div class="col-lg-2 col-md-2 align-self-center">
                    <i class="<?php echo esc_attr(get_theme_mod('transport_movers_location_icon','far fa-compass')); ?>"></i>
                  </div>
                  <div class="col-lg-10 col-md-10 pl-0 align-self-center">
                    <p class="text"><?php echo esc_html( get_theme_mod('transport_movers_city','' )); ?></p>
                    <p class="city m-0 p-0"><?php echo esc_html( get_theme_mod('transport_movers_location','' )); ?></p>
                  </div>
                <?php }?>
              </div>
            </div>
            <?php if( get_theme_mod( 'transport_movers_button_link','' ) != '') { ?>
            <div class="col-lg-2 col-md-2 appointbtn p-0 my-3 mx-0 text-end align-self-center">
              <a href="<?php echo esc_url( get_theme_mod('transport_movers_button_link','#' ) ); ?>" class="p-lg-2 text-center"><?php esc_html_e( 'Request Quote','transport-movers' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Request Quote','transport-movers' );?></span></a>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    <?php }?>
    <div class="<?php if( get_theme_mod( 'transport_movers_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
      <div id="header">
        <div class="container inner-box menus p-0">
          <div class="row m-0">
            <div class="col-lg-3 col-md-6 col-9 align-self-center">
              <div class="logo m-0 p-2 align-self-center">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if( get_theme_mod('transport_movers_site_title_enable',true) != ''){ ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <h1 class="site-title p-0 m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                      <p class="site-title p-0 m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif; ?>
                  <?php }?>
                <?php endif; ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                  ?>
                  <?php if( get_theme_mod('transport_movers_site_tagline_enable',true) != ''){ ?>
                    <p class="site-description p-0 m-0">
                      <?php echo esc_html($description); ?>
                    </p>
                  <?php }?>
                <?php endif; ?>       
              </div>     
            </div>  
            <div class="col-lg-8 col-md-6 col-3 p-0 align-self-center">
              <?php 
                if(has_nav_menu('primary')){ ?>
                <div class="toggle-menu responsive-menu <?php if( get_theme_mod( 'transport_movers_display_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
                  <button role="tab" class="mobiletoggle" onclick="transport_movers_responsive_menu_open()"><i class="<?php echo esc_attr(get_theme_mod('transport_movers_responsive_menu_open_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','transport-movers'); ?></span>
                  </button>
                </div>
              <?php }?>
              <div id="navbar-header" class="menu-brand">
                <div class="responsive-search">
                  <?php get_search_form();?>
                </div>
                <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'transport-movers' ); ?>">                
                  <?php
                    if(has_nav_menu('primary')){
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-lg-0 pl-lg-0 text-lg-start">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) );
                    } 
                  ?>
                </nav>
                <?php if( get_theme_mod( 'transport_movers_call','' ) != '') { ?>
                  <div class="email_text">
                    <div class="row m-0">                  
                      <div class="col-lg-3 col-md-3 col-3">
                        <i class="<?php echo esc_attr(get_theme_mod('transport_movers_phone_icon','fas fa-phone')); ?>"></i>
                      </div>
                      <div class="col-lg-9 col-md-9 pl-0 col-9">
                        <a class="text" href="tel:<?php echo esc_attr( get_theme_mod('transport_movers_call','' )); ?>"><?php echo esc_html( get_theme_mod('transport_movers_call','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('transport_movers_call','' )); ?></span></a>
                        <a class="email" class="mail" href="mailto:<?php echo esc_attr( get_theme_mod('transport_movers_email','') ); ?>"><?php echo esc_html( get_theme_mod('transport_movers_email','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('transport_movers_email','' )); ?></span></a>
                      </div>
                    </div>
                  </div>
                <?php }?>
                <?php if( get_theme_mod( 'transport_movers_city','' ) != '') { ?>
                  <div class="city_text">
                    <div class="row m-0">
                      <div class="col-lg-3 col-md-3 col-3">
                        <i class="<?php echo esc_attr(get_theme_mod('transport_movers_location_icon','far fa-compass')); ?>"></i>
                      </div>
                      <div class="col-lg-9 col-md-9 col-9 pl-0">
                        <p class="text"><?php echo esc_html( get_theme_mod('transport_movers_city','' )); ?></p>
                        <p class="city"><?php echo esc_html( get_theme_mod('transport_movers_location','' )); ?></p>
                      </div>
                    </div>
                  </div>
                <?php }?>
                <?php if( get_theme_mod( 'transport_movers_button_link','' ) != '') { ?>
                  <div class="appointbtn">
                    <a href="<?php echo esc_url( get_theme_mod('transport_movers_button_link','' ) ); ?>"><?php esc_html_e( 'Request Quote','transport-movers' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Request Quote','transport-movers' );?></span></a>
                  </div>
                <?php } ?>
                <a href="javascript:void(0)" class="closebtn responsive-menu p-3" onclick="transport_movers_responsive_menu_close()"><i class="<?php echo esc_attr(get_theme_mod('transport_movers_responsive_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','transport-movers'); ?></span></a>
              </div>
            </div>
            
            <div class="col-lg-1 col-md-1 col-6 align-self-center">
              <div class="main-search my-4 pl-2 align-self-center">
                <span><a href="#" class="rounded-circle"><i class="<?php echo esc_attr(get_theme_mod('transport_movers_search_icon','fas fa-search')); ?> pt-1"></i></a></span>
              </div>
            </div>
          </div>
          <div class="searchform_page w-100 h-100">
            <div class="close w-100 text-end me-4"><a href="#maincontent"><i class="fa fa-times"></i></a></div>
            <div class="search_input w-100">
              <?php get_search_form(); ?>
            </div>
          </div>

        </div>
      </div> 
    </div>
  </header>