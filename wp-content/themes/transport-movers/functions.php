<?php
/**
 * Transport Movers functions and definitions
 * @package Transport Movers
 */

/* Theme Setup */
if ( ! function_exists( 'transport_movers_setup' ) ) :

function transport_movers_setup() {

	$GLOBALS['content_width'] = apply_filters( 'transport_movers_content_width', 640 );
	
	load_theme_textdomain( 'transport-movers', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('transport-movers-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'transport-movers' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	add_editor_style( array( 'css/editor-style.css', transport_movers_font_url() ) );
	add_theme_support(
		'post-formats', array(
			'image',
			'video',
			'gallery',
			'audio',
		)	
	);
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support('responsive-embeds');
}
endif; // transport_movers_setup
add_action( 'after_setup_theme', 'transport_movers_setup' );

/*radio button sanitization*/
 function transport_movers_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function transport_movers_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function transport_movers_sanitize_select( $input, $setting ) {
	// Ensure input is a slug.
	$input = sanitize_key( $input );

	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function transport_movers_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

/* Theme Widgets Setup */
function transport_movers_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'transport-movers' ),
		'description'   => __( 'Appears on posts and pages', 'transport-movers' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Posts and Pages Sidebar', 'transport-movers' ),
		'description'   => __( 'Appears on posts and pages', 'transport-movers' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'transport-movers' ),
		'description'   => __( 'Appears on posts and pages', 'transport-movers' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$transport_movers_widget_areas = get_theme_mod('footer_widget_areas', '4');
	for ($i=1; $i<=$transport_movers_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Widget ', 'transport-movers' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

}
add_action( 'widgets_init', 'transport_movers_widgets_init' );

/* Theme Font URL */
function transport_movers_font_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Karla:400,400i,700,700i';
	$font_family[] = 'Ubuntu:500,500i,700';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}
	
/* Theme enqueue scripts */
function transport_movers_scripts() {
	wp_enqueue_style( 'transport-movers-font', transport_movers_font_url(), array() );
	// blocks-css
	wp_enqueue_style( 'transport-movers-block-style', get_theme_file_uri('/css/blocks.css') );

	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri()) . '/css/bootstrap.css');
	
	wp_enqueue_style( 'transport-movers-style', get_stylesheet_uri() );
	wp_style_add_data( 'transport-movers-style', 'rtl', 'replace' );	
	wp_enqueue_style( 'font-awesom-css', esc_url(get_template_directory_uri()).'/css/fontawesome-all.css' );

	// Paragraph
	$transport_movers_paragraph_color       = get_theme_mod('transport_movers_paragraph_color', '');
	$transport_movers_paragraph_font_family = get_theme_mod('transport_movers_paragraph_font_family', '');
	$transport_movers_paragraph_font_size   = get_theme_mod('transport_movers_paragraph_font_size', '');
	// "a" tag
	$transport_movers_atag_color       = get_theme_mod('transport_movers_atag_color', '');
	$transport_movers_atag_font_family = get_theme_mod('transport_movers_atag_font_family', '');
	// "li" tag
	$transport_movers_li_color       = get_theme_mod('transport_movers_li_color', '');
	$transport_movers_li_font_family = get_theme_mod('transport_movers_li_font_family', '');
	
	// H1
	$transport_movers_h1_color       = get_theme_mod('transport_movers_h1_color', '');
	$transport_movers_h1_font_family = get_theme_mod('transport_movers_h1_font_family', '');
	$transport_movers_h1_font_size   = get_theme_mod('transport_movers_h1_font_size', '');
	// H2
	$transport_movers_h2_color       = get_theme_mod('transport_movers_h2_color', '');
	$transport_movers_h2_font_family = get_theme_mod('transport_movers_h2_font_family', '');
	$transport_movers_h2_font_size   = get_theme_mod('transport_movers_h2_font_size', '');
	// H3
	$transport_movers_h3_color       = get_theme_mod('transport_movers_h3_color', '');
	$transport_movers_h3_font_family = get_theme_mod('transport_movers_h3_font_family', '');
	$transport_movers_h3_font_size   = get_theme_mod('transport_movers_h3_font_size', '');
	// H4
	$transport_movers_h4_color       = get_theme_mod('transport_movers_h4_color', '');
	$transport_movers_h4_font_family = get_theme_mod('transport_movers_h4_font_family', '');
	$transport_movers_h4_font_size   = get_theme_mod('transport_movers_h4_font_size', '');
	// H5
	$transport_movers_h5_color       = get_theme_mod('transport_movers_h5_color', '');
	$transport_movers_h5_font_family = get_theme_mod('transport_movers_h5_font_family', '');
	$transport_movers_h5_font_size   = get_theme_mod('transport_movers_h5_font_size', '');
	// H6
	$transport_movers_h6_color       = get_theme_mod('transport_movers_h6_color', '');
	$transport_movers_h6_font_family = get_theme_mod('transport_movers_h6_font_family', '');
	$transport_movers_h6_font_size   = get_theme_mod('transport_movers_h6_font_size', '');

	$transport_movers_custom_css = '
		p,span{
		    color:'.esc_html($transport_movers_paragraph_color).'!important;
		    font-family: '.esc_html($transport_movers_paragraph_font_family).';
		    font-size: '.esc_html($transport_movers_paragraph_font_size).';
		}
		a{
		    color:'.esc_html($transport_movers_atag_color).'!important;
		    font-family: '.esc_html($transport_movers_atag_font_family).';
		}
		li{
		    color:'.esc_html($transport_movers_li_color).'!important;
		    font-family: '.esc_html($transport_movers_li_font_family).';
		}
		h1{
		    color:'.esc_html($transport_movers_h1_color).'!important;
		    font-family: '.esc_html($transport_movers_h1_font_family).'!important;
		    font-size: '.esc_html($transport_movers_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_html($transport_movers_h2_color).'!important;
		    font-family: '.esc_html($transport_movers_h2_font_family).'!important;
		    font-size: '.esc_html($transport_movers_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_html($transport_movers_h3_color).'!important;
		    font-family: '.esc_html($transport_movers_h3_font_family).'!important;
		    font-size: '.esc_html($transport_movers_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_html($transport_movers_h4_color).'!important;
		    font-family: '.esc_html($transport_movers_h4_font_family).'!important;
		    font-size: '.esc_html($transport_movers_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_html($transport_movers_h5_color).'!important;
		    font-family: '.esc_html($transport_movers_h5_font_family).'!important;
		    font-size: '.esc_html($transport_movers_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_html($transport_movers_h6_color).'!important;
		    font-family: '.esc_html($transport_movers_h6_font_family).'!important;
		    font-size: '.esc_html($transport_movers_h6_font_size).'!important;
		}
	';
	wp_add_inline_style('transport-movers-style', $transport_movers_custom_css);

	/* Theme Color sheet */
	require get_parent_theme_file_path( '/theme-color-option.php' );
	wp_add_inline_style( 'transport-movers-style',$transport_movers_custom_css );
	wp_enqueue_script( 'tether-js', esc_url(get_template_directory_uri()) . '/js/tether.js', array('jquery') ,'',true);
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/js/bootstrap.js', array('jquery') ,'',true);	
	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/js/jquery.superfish.js', array('jquery') ,'',true);	
	wp_enqueue_script( 'transport-movers-custom-scripts-jquery', esc_url(get_template_directory_uri()) . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'transport_movers_scripts' );

define('TRANSPORT_MOVERS_LIVE_DEMO',__('https://www.buywptemplates.com/transport-movers-pro/','transport-movers'));
define('TRANSPORT_MOVERS_BUY_PRO',__('https://www.buywptemplates.com/themes/premium-transport-wordpress-theme/','transport-movers'));
define('TRANSPORT_MOVERS_PRO_DOC',__('https://buywptemplates.com/demo/docs/transport-movers-pro/','transport-movers'));
define('TRANSPORT_MOVERS_FREE_DOC',__('https://buywptemplates.com/demo/docs/free-transport-movers/','transport-movers'));
define('TRANSPORT_MOVERS_PRO_SUPPORT',__('https://www.buywptemplates.com/support/','transport-movers'));
define('TRANSPORT_MOVERS_FREE_SUPPORT',__('https://wordpress.org/support/theme/transport-movers/','transport-movers'));
define('TRANSPORT_MOVERS_CREDIT',__('https://www.buywptemplates.com/themes/free-transport-wordpress-theme/','transport-movers'));

if ( ! function_exists( 'transport_movers_credit' ) ) {
	function transport_movers_credit(){
		echo "<a href=".esc_url(TRANSPORT_MOVERS_CREDIT).">".esc_html__('Transport WordPress Theme','transport-movers')."</a>";
	}
}

function transport_movers_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/* Excerpt Limit Begin */
function transport_movers_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

/**
* Switch sanitization
*/
if ( ! function_exists( 'transport_movers_switch_sanitization' ) ) {
	function transport_movers_switch_sanitization( $input ) {
		if ( true === $input ) {
			return 1;
		} else {
			return 0;
		}
	}
}

/**
 * Integer sanitization
 */
if ( ! function_exists( 'transport_movers_sanitize_integer' ) ) {
	function transport_movers_sanitize_integer( $input ) {
		return (int) $input;
	}
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'transport_movers_loop_columns');
if (!function_exists('transport_movers_loop_columns')) {
	function transport_movers_loop_columns() {
		$columns = get_theme_mod( 'transport_movers_per_columns', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'transport_movers_shop_per_page', 20 );
function transport_movers_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'transport_movers_product_per_page', 9 );
	return $cols;
}

//For page ID
function transport_movers_get_page_id_by_title($title){
	$page = transport_movers_get_page_id_by_title($title);
	return $page->ID;
}

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Load Jetpack compatibility file. */
require get_template_directory() . '/inc/customizer.php';

/* Get Startd */
require get_template_directory() . '/inc/dashboard/get_started_info.php';