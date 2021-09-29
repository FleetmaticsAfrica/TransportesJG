<?php
/**
 * The template for displaying 404 pages (Not Found).
 * @package Transport Movers
 */
get_header(); ?>

<main id="skip_content" role="main" class="content_box py-3 px-0">
    <div class="container">
    	<div class="page-content text-center">
	        <h1 class="pb-3"><?php echo esc_html(get_theme_mod('transport_movers_page_not_found_heading',__('404 Not Found','transport-movers')));?></h1>
	        <p class="text-404"><?php echo esc_html(get_theme_mod('transport_movers_page_not_found_text',__('Looks like you have taken a wrong turn. Dont worry it happens to the best of us.','transport-movers')));?></p>
	        <?php if( get_theme_mod('transport_movers_page_not_found_button','Back to Home Page') != ''){ ?>
                <div class="read-moresec text-center">
                    <a href="<?php echo esc_url( home_url() ); ?>" class="button text-uppercase py-2 px-3 mt-3"><?php echo esc_html(get_theme_mod('transport_movers_page_not_found_button',__('Back to Home Page','transport-movers')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('transport_movers_page_not_found_button',__('Back to Home Page','transport-movers')));?></span></a>
                </div>
            <?php } ?>
	    </div>
        <div class="clearfix"></div>
    </div>
</main>

<?php get_footer(); ?>