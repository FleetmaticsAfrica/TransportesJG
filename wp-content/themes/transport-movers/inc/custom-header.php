<?php
/**
 * @package Transport Movers
 * @subpackage transport-movers
 * @since transport-movers 1.0
 * Setup the WordPress core custom header feature.
 * @uses transport_movers_header_style()
*/

function transport_movers_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'transport_movers_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 80,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'transport_movers_header_style',
	) ) );

}

add_action( 'after_setup_theme', 'transport_movers_custom_header_setup' );

if ( ! function_exists( 'transport_movers_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see transport_movers_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'transport_movers_header_style' );
function transport_movers_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$transport_movers_custom_css = "
        .page-template-custom-home-page .inner-box, #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size:100% 100%;
		}";
	   	wp_add_inline_style( 'transport-movers-style', $transport_movers_custom_css );
	endif;
}
endif; // transport_movers_header_style