<?php
/**
 * Transport Movers Theme Customizer
 * @package Transport Movers
 */

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-sizer.php' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function transport_movers_customize_register( $wp_customize ) {	

	load_template( trailingslashit( get_template_directory() ) . 'inc/custom-control.php' );
	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_setting( 'transport_movers_logo_sizer',array(
		'default' => 50,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control( new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_logo_sizer',array(
		'label' => esc_html__( 'Logo Sizer','transport-movers' ),
		'section' => 'title_tagline',
		'priority'    => 9,
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('transport_movers_site_title_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_site_title_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Site Title','transport-movers'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting('transport_movers_site_title_font_size',array(
		'default'=> 30,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control(new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_site_title_font_size',array(
		'label' => esc_html__( 'Site Title Font Size (px)','transport-movers' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

    $wp_customize->add_setting('transport_movers_site_tagline_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_site_tagline_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Site Tagline','transport-movers'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting('transport_movers_site_tagline_font_size',array(
		'default'=> 13,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control(new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_site_tagline_font_size',array(
		'label' => esc_html__( 'Site Tagline Font Size (px)','transport-movers' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	//add home page setting pannel
	$wp_customize->add_panel( 'transport_movers_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'transport-movers' ),
	    'description' => __( 'Description of what this panel does.', 'transport-movers' ),
	) );

	$transport_movers_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One', 
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower', 
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit', 
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two', 
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda', 
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli', 
		'Marck Script'           => 'Marck Script', 
		'Noto Serif'             => 'Noto Serif', 
		'Open Sans'              => 'Open Sans', 
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen', 
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display', 
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik', 
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo', 
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two', 
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn', 
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	//Typography
	$wp_customize->add_section('transport_movers_typography', array(
		'title'    => __('Typography', 'transport-movers'),
		'panel'    => 'transport_movers_panel_id',
	));

	// This is Paragraph Color picker setting
	$wp_customize->add_setting('transport_movers_paragraph_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_paragraph_color', array(
		'label'    => __('Paragraph Color', 'transport-movers'),
		'section'  => 'transport_movers_typography',
		'settings' => 'transport_movers_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('transport_movers_paragraph_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'transport_movers_sanitize_choices',
	));
	$wp_customize->add_control(	'transport_movers_paragraph_font_family', array(
		'section' => 'transport_movers_typography',
		'label'   => __('Paragraph Fonts', 'transport-movers'),
		'type'    => 'select',
		'choices' => $transport_movers_font_array,
	));

	$wp_customize->add_setting('transport_movers_paragraph_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('transport_movers_paragraph_font_size', array(
		'label'   => __('Paragraph Font Size', 'transport-movers'),
		'section' => 'transport_movers_typography',
		'setting' => 'transport_movers_paragraph_font_size',
		'type'    => 'text',
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('transport_movers_atag_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_atag_color', array(
		'label'    => __('"a" Tag Color', 'transport-movers'),
		'section'  => 'transport_movers_typography',
		'settings' => 'transport_movers_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('transport_movers_atag_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'transport_movers_sanitize_choices',
	));
	$wp_customize->add_control(	'transport_movers_atag_font_family', array(
		'section' => 'transport_movers_typography',
		'label'   => __('"a" Tag Fonts', 'transport-movers'),
		'type'    => 'select',
		'choices' => $transport_movers_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('transport_movers_li_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_li_color', array(
		'label'    => __('"li" Tag Color', 'transport-movers'),
		'section'  => 'transport_movers_typography',
		'settings' => 'transport_movers_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('transport_movers_li_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'transport_movers_sanitize_choices',
	));
	$wp_customize->add_control(	'transport_movers_li_font_family', array(
		'section' => 'transport_movers_typography',
		'label'   => __('"li" Tag Fonts', 'transport-movers'),
		'type'    => 'select',
		'choices' => $transport_movers_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting('transport_movers_h1_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_h1_color', array(
		'label'    => __('H1 Color', 'transport-movers'),
		'section'  => 'transport_movers_typography',
		'settings' => 'transport_movers_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('transport_movers_h1_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'transport_movers_sanitize_choices',
	));
	$wp_customize->add_control('transport_movers_h1_font_family', array(
		'section' => 'transport_movers_typography',
		'label'   => __('H1 Fonts', 'transport-movers'),
		'type'    => 'select',
		'choices' => $transport_movers_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('transport_movers_h1_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('transport_movers_h1_font_size', array(
		'label'   => __('H1 Font Size', 'transport-movers'),
		'section' => 'transport_movers_typography',
		'setting' => 'transport_movers_h1_font_size',
		'type'    => 'text',
	));
	
	// This is H2 Color picker setting
	$wp_customize->add_setting('transport_movers_h2_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_h2_color', array(
		'label'    => __('h2 Color', 'transport-movers'),
		'section'  => 'transport_movers_typography',
		'settings' => 'transport_movers_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('transport_movers_h2_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'transport_movers_sanitize_choices',
	));
	$wp_customize->add_control(
	'transport_movers_h2_font_family', array(
		'section' => 'transport_movers_typography',
		'label'   => __('h2 Fonts', 'transport-movers'),
		'type'    => 'select',
		'choices' => $transport_movers_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('transport_movers_h2_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('transport_movers_h2_font_size', array(
		'label'   => __('H2 Font Size', 'transport-movers'),
		'section' => 'transport_movers_typography',
		'setting' => 'transport_movers_h2_font_size',
		'type'    => 'text',
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting('transport_movers_h3_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_h3_color', array(
		'label'    => __('H3 Color', 'transport-movers'),
		'section'  => 'transport_movers_typography',
		'settings' => 'transport_movers_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('transport_movers_h3_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'transport_movers_sanitize_choices',
	));
	$wp_customize->add_control(
	'transport_movers_h3_font_family', array(
		'section' => 'transport_movers_typography',
		'label'   => __('H3 Fonts', 'transport-movers'),
		'type'    => 'select',
		'choices' => $transport_movers_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('transport_movers_h3_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('transport_movers_h3_font_size', array(
		'label'   => __('H3 Font Size', 'transport-movers'),
		'section' => 'transport_movers_typography',
		'setting' => 'transport_movers_h3_font_size',
		'type'    => 'text',
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting('transport_movers_h4_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_h4_color', array(
		'label'    => __('H4 Color', 'transport-movers'),
		'section'  => 'transport_movers_typography',
		'settings' => 'transport_movers_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('transport_movers_h4_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'transport_movers_sanitize_choices',
	));
	$wp_customize->add_control('transport_movers_h4_font_family', array(
		'section' => 'transport_movers_typography',
		'label'   => __('H4 Fonts', 'transport-movers'),
		'type'    => 'select',
		'choices' => $transport_movers_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('transport_movers_h4_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('transport_movers_h4_font_size', array(
		'label'   => __('H4 Font Size', 'transport-movers'),
		'section' => 'transport_movers_typography',
		'setting' => 'transport_movers_h4_font_size',
		'type'    => 'text',
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting('transport_movers_h5_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_h5_color', array(
		'label'    => __('H5 Color', 'transport-movers'),
		'section'  => 'transport_movers_typography',
		'settings' => 'transport_movers_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('transport_movers_h5_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'transport_movers_sanitize_choices',
	));
	$wp_customize->add_control('transport_movers_h5_font_family', array(
		'section' => 'transport_movers_typography',
		'label'   => __('H5 Fonts', 'transport-movers'),
		'type'    => 'select',
		'choices' => $transport_movers_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('transport_movers_h5_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('transport_movers_h5_font_size', array(
		'label'   => __('H5 Font Size', 'transport-movers'),
		'section' => 'transport_movers_typography',
		'setting' => 'transport_movers_h5_font_size',
		'type'    => 'text',
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting('transport_movers_h6_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_h6_color', array(
		'label'    => __('H6 Color', 'transport-movers'),
		'section'  => 'transport_movers_typography',
		'settings' => 'transport_movers_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('transport_movers_h6_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'transport_movers_sanitize_choices',
	));
	$wp_customize->add_control('transport_movers_h6_font_family', array(
		'section' => 'transport_movers_typography',
		'label'   => __('H6 Fonts', 'transport-movers'),
		'type'    => 'select',
		'choices' => $transport_movers_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('transport_movers_h6_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('transport_movers_h6_font_size', array(
		'label'   => __('H6 Font Size', 'transport-movers'),
		'section' => 'transport_movers_typography',
		'setting' => 'transport_movers_h6_font_size',
		'type'    => 'text',
	));

	// background skin mode
	$wp_customize->add_setting('transport_movers_background_skin',array(
        'default' => 'Without Background',
        'sanitize_callback' => 'transport_movers_sanitize_choices'
	));
	$wp_customize->add_control('transport_movers_background_skin',array(
        'type' => 'radio',
        'label' => __('Background Skin','transport-movers'),
        'description' => __('Here you can add the background skin along with the background image.','transport-movers'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background Skin','transport-movers'),
            'Without Background' => __('Without Background Skin','transport-movers'),
        ),
	) );

	//layout setting
	$wp_customize->add_section( 'transport_movers_option', array(
    	'title'      => __( 'Layout Settings', 'transport-movers' ),
		'panel' => 'transport_movers_panel_id'
	) );

	$wp_customize->add_setting('transport_movers_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_preloader',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','transport-movers'),
       'section' => 'transport_movers_option'
    ));

    $wp_customize->add_setting('transport_movers_preloader_type',array(
        'default' => 'First Preloader Type',
        'sanitize_callback' => 'transport_movers_sanitize_choices'
	));
	$wp_customize->add_control('transport_movers_preloader_type',array(
        'type' => 'radio',
        'label' => __('Preloader Types','transport-movers'),
        'section' => 'transport_movers_option',
        'choices' => array(
            'First Preloader Type' => __('First Preloader Type','transport-movers'),
            'Second Preloader Type' => __('Second Preloader Type','transport-movers'),
        ),
	) );

	$wp_customize->add_setting('transport_movers_preloader_bg_color_option', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_preloader_bg_color_option', array(
		'label'    => __('Preloader Background Color', 'transport-movers'),
		'section'  => 'transport_movers_option',
	)));

	$wp_customize->add_setting('transport_movers_preloader_icon_color_option', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_preloader_icon_color_option', array(
		'label'    => __('Preloader Icon Color', 'transport-movers'),
		'section'  => 'transport_movers_option',
	)));

	$wp_customize->add_setting('transport_movers_width_layout_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'transport_movers_sanitize_choices'
	));
	$wp_customize->add_control('transport_movers_width_layout_options',array(
        'type' => 'radio',
        'label' => __('Container Box','transport-movers'),
        'description' => __('Here you can change the Width layout. ','transport-movers'),
        'section' => 'transport_movers_option',
        'choices' => array(
            'Default' => __('Default','transport-movers'),
            'Container Layout' => __('Container Layout','transport-movers'),
            'Box Layout' => __('Box Layout','transport-movers'),
        ),
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('transport_movers_layout_options',array(
	        'default' => 'Right Sidebar',
	        'sanitize_callback' => 'transport_movers_sanitize_choices'	
	    )
    );
	$wp_customize->add_control('transport_movers_layout_options',
	    array(
        'type' => 'radio',
        'label' => __('Do you want this section','transport-movers'),
        'section' => 'transport_movers_option',
        'choices' => array(
            'One Column' => __('One Column','transport-movers'),
            'Three Columns' => __('Three Columns','transport-movers'),
            'Four Columns' => __('Four Columns','transport-movers'),
            'Grid Layout' => __('Grid Layout','transport-movers'),
            'Left Sidebar' => __('Left Sidebar','transport-movers'),
            'Right Sidebar' => __('Right Sidebar','transport-movers')
        ),)
    );

    $wp_customize->add_setting('transport_movers_responsive_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_responsive_menu_open_icon',array(
		'label'	=> __('Responsive Open Menu Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_option',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_responsive_menu_close_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_responsive_menu_close_icon',array(
		'label'	=> __('Responsive Close Menu Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_option',
		'type'		=> 'icon'
	)));

    //Global Color
	$wp_customize->add_section('transport_movers_global_color', array(
		'title'    => __('Theme Color Option', 'transport-movers'),
		'panel'    => 'transport_movers_panel_id',
	));

	$wp_customize->add_setting('transport_movers_first_color', array(
		'default'           => '#df1f00',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_first_color', array(
		'label'    => __('Highlight Color', 'transport-movers'),
		'section'  => 'transport_movers_global_color',
		'settings' => 'transport_movers_first_color',
	)));
	
	//Blog Post Settings
	$wp_customize->add_section('transport_movers_post_settings', array(
		'title'    => __('Post General Settings', 'transport-movers'),
		'panel'    => 'transport_movers_panel_id',
	));

	$wp_customize->add_setting('transport_movers_post_layouts',array(
        'default' => 'Layout 1',
        'sanitize_callback' => 'transport_movers_sanitize_choices'
	));
	$wp_customize->add_control(new Transport_Movers_Image_Radio_Control($wp_customize, 'transport_movers_post_layouts', array(
        'type' => 'select',
        'label' => __('Post Layouts','transport-movers'),
        'description' => __('Here you can change the 3 different layouts of post.','transport-movers'),
        'section' => 'transport_movers_post_settings',
        'choices' => array(
            'Layout 1' => esc_url(get_template_directory_uri()).'/images/layout1.png',
            'Layout 2' => esc_url(get_template_directory_uri()).'/images/layout2.png',
            'Layout 3' => esc_url(get_template_directory_uri()).'/images/layout3.png',
    ))));

	$wp_customize->add_setting( 'transport_movers_post_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'transport_movers_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Content Limit','transport-movers' ),
		'section'     => 'transport_movers_post_settings',
		'type'        => 'number',
		'settings'    => 'transport_movers_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('transport_movers_content_settings',array(
        'default' =>'Excerpt',
        'sanitize_callback' => 'transport_movers_sanitize_choices'
	));
	$wp_customize->add_control('transport_movers_content_settings',array(
        'type' => 'radio',
        'label' => __('Content Settings','transport-movers'),
        'section' => 'transport_movers_post_settings',
        'choices' => array(
            'Excerpt' => __('Excerpt','transport-movers'),
            'Content' => __('Content','transport-movers'),
        ),
	) );

	$wp_customize->add_setting( 'transport_movers_post_discription_suffix', array(
		'default'   => __('[...]','transport-movers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'transport_movers_post_discription_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','transport-movers' ),
		'section'     => 'transport_movers_post_settings',
		'type'        => 'text',
		'settings'    => 'transport_movers_post_discription_suffix',
	) );

	$wp_customize->add_setting('transport_movers_button_text',array(
		'default'=> __('View More','transport-movers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_button_text',array(
		'label'	=> __('Add Button Text','transport-movers'),
		'section'=> 'transport_movers_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('transport_movers_post_button_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_post_button_icon',array(
		'label'	=> __('Post Button Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_enable_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_enable_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Blog Page Pagination','transport-movers'),
       'section' => 'transport_movers_post_settings'
    ));

    $wp_customize->add_setting( 'transport_movers_pagination_settings', array(
        'default'			=> 'Numeric Pagination',
        'sanitize_callback'	=> 'transport_movers_sanitize_choices'
    ));
    $wp_customize->add_control( 'transport_movers_pagination_settings', array(
        'section' => 'transport_movers_post_settings',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'transport-movers' ),
        'choices'		=> array(
            'Numeric Pagination'  => __( 'Numeric Pagination', 'transport-movers' ),
            'next-prev' => __( 'Next / Previous', 'transport-movers' ),
    )));
    
	//Single Post Settings
	$wp_customize->add_section('transport_movers_single_post_settings', array(
		'title'    => __('Single Post Settings', 'transport-movers'),
		'panel'    => 'transport_movers_panel_id',
	));

	$wp_customize->add_setting('transport_movers_metafields_date',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','transport-movers'),
       'section' => 'transport_movers_single_post_settings'
    ));

    $wp_customize->add_setting('transport_movers_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_post_date_icon',array(
		'label'	=> __('Post Date Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_single_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('transport_movers_metafields_author',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','transport-movers'),
       'section' => 'transport_movers_single_post_settings'
    ));

    $wp_customize->add_setting('transport_movers_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_post_author_icon',array(
		'label'	=> __('Post Author Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_single_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('transport_movers_metafields_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','transport-movers'),
       'section' => 'transport_movers_single_post_settings'
    ));

    $wp_customize->add_setting('transport_movers_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_post_comment_icon',array(
		'label'	=> __('Post Comment Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_single_post_featured_image',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_single_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Featured image','transport-movers'),
       'section' => 'transport_movers_single_post_settings',
    ));

	$wp_customize->add_setting('transport_movers_single_post_tags',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_single_post_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Tags','transport-movers'),
       'section' => 'transport_movers_single_post_settings'
    ));

    $wp_customize->add_setting( 'transport_movers_single_post_meta_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'transport_movers_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','transport-movers' ),
		'section'     => 'transport_movers_single_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','transport-movers'),
		'type'        => 'text',
		'settings'    => 'transport_movers_single_post_meta_seperator',
	) );

	$wp_customize->add_setting( 'transport_movers_comment_form_width',array(
		'default' => 100,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control( new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_comment_form_width',	array(
		'label' => esc_html__( 'Comment Form Width','transport-movers' ),
		'section' => 'transport_movers_single_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('transport_movers_title_comment_form',array(
       'default' => __('Leave a Reply','transport-movers'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('transport_movers_title_comment_form',array(
       'type' => 'text',
       'label' => __('Comment Form Heading Text','transport-movers'),
       'section' => 'transport_movers_single_post_settings'
    ));

    $wp_customize->add_setting('transport_movers_comment_form_button_content',array(
       'default' => __('Post Comment','transport-movers'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('transport_movers_comment_form_button_content',array(
       'type' => 'text',
       'label' => __('Comment Form Button Text','transport-movers'),
       'section' => 'transport_movers_single_post_settings'
    ));

	$wp_customize->add_setting('transport_movers_enable_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_enable_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Pagination','transport-movers'),
       'section' => 'transport_movers_single_post_settings'
    ));

	//Top Bar(topbar)
	$wp_customize->add_section('transport_movers_contact',array(
		'title'	=> __('Contact Us','transport-movers'),
		'description'	=> __('Add contact us here','transport-movers'),
		'priority'	=> null,
		'panel' => 'transport_movers_panel_id',
	));

	//Sticky Header
	$wp_customize->add_setting( 'transport_movers_sticky_header',array(
		'default'	=> false,
      	'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ) );
    $wp_customize->add_control('transport_movers_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Sticky Header','transport-movers' ),
        'section' => 'transport_movers_contact'
    ));

    $wp_customize->add_setting('transport_movers_menu_font_size_option',array(
		'default'=> 14,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Transport_Movers_Custom_Control( $wp_customize,'transport_movers_menu_font_size_option',array(
		'label'	=> __('Menu Font Size ','transport-movers'),
		'section'=> 'transport_movers_contact',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

    $wp_customize->add_setting('transport_movers_phone_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_phone_icon',array(
		'label'	=> __('Contact Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_contact',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'transport_movers_sanitize_phone_number'
	));
	$wp_customize->add_control('transport_movers_call',array(
		'label'	=> __('Call No.','transport-movers'),
		'section'	=> 'transport_movers_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('transport_movers_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('transport_movers_email',array(
		'label'	=> __('Email Address','transport-movers'),
		'section'	=> 'transport_movers_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('transport_movers_location_icon',array(
		'default'	=> 'far fa-compass',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_location_icon',array(
		'label'	=> __('Location Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_contact',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_city',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('transport_movers_city',array(
		'label'	=> __('City Name','transport-movers'),
		'section'	=> 'transport_movers_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('transport_movers_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('transport_movers_location',array(
		'label'	=> __('Location','transport-movers'),
		'section'	=> 'transport_movers_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('transport_movers_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('transport_movers_button_link',array(
		'label'	=> __('Request us url','transport-movers'),
		'section'	=> 'transport_movers_contact',
		'setting'	=> 'transport_movers_button_link',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('transport_movers_search_icon',array(
		'default'	=> 'fa fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_search_icon',array(
		'label'	=> __('Search Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_contact',
		'type'		=> 'icon'
	)));

	// Tab banner Section
	$wp_customize->add_section('transport_movers_blog_sec',array(
		'title'	=> __('Slider Section','transport-movers'),
		'riority' => null,
		'panel' => 'transport_movers_panel_id',
	));

	$wp_customize->add_setting('transport_movers_slider_hide',array(
       'default' => false,
       'sanitize_callback'  => 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','transport-movers'),
       'section' => 'transport_movers_blog_sec',
    ));

    $wp_customize->add_setting('transport_movers_show_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_show_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','transport-movers'),
       'section' => 'transport_movers_blog_sec'
    ));
		
	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'transport_movers_tab_pages' .$count, array(
			'default'           => '',
			'sanitize_callback' => 'transport_movers_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'transport_movers_tab_pages' .$count, array(
			'label'    => __( 'Select Slide Page', 'transport-movers' ),
			'section'  => 'transport_movers_blog_sec',
			'type'     => 'dropdown-pages'
		));
	}

	$wp_customize->add_setting('transport_movers_enable_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_enable_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Image Overlay','transport-movers'),
       'section' => 'transport_movers_blog_sec'
    ));

    $wp_customize->add_setting('transport_movers_slider_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_slider_overlay_color', array(
		'label'    => __('Slider Image Overlay Color', 'transport-movers'),
		'section'  => 'transport_movers_blog_sec',
		'settings' => 'transport_movers_slider_overlay_color',
	)));

	$wp_customize->add_setting('transport_movers_slider_button_text',array(
		'default'	=> __('Read More','transport-movers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('transport_movers_slider_button_text',array(
		'label'	=> __('Add Button Text','transport-movers'),
		'section'	=> 'transport_movers_blog_sec',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('transport_movers_slider_previous_icon',array(
		'default'	=> 'fas fa-chevron-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_slider_previous_icon',array(
		'label'	=> __('Slider Previous Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_blog_sec',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_slider_next_icon',array(
		'default'	=> 'fas fa-chevron-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_slider_next_icon',array(
		'label'	=> __('Slider Next Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_blog_sec',
		'type'		=> 'icon'
	)));

	//content layout
    $wp_customize->add_setting('transport_movers_slider_content_layout',array(
    'default' => 'Left',
        'sanitize_callback' => 'transport_movers_sanitize_choices'
	));
	$wp_customize->add_control('transport_movers_slider_content_layout',array(
        'type' => 'radio',
        'label' => __('Slider Content Layout','transport-movers'),
        'section' => 'transport_movers_blog_sec',
        'choices' => array(
            'Center' => __('Center','transport-movers'),
            'Left' => __('Left','transport-movers'),
            'Right' => __('Right','transport-movers'),
        ),
	) );

	$wp_customize->add_setting('transport_movers_option_slider_height',array(
		'default'=> __('550','transport-movers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_option_slider_height',array(
		'label'	=> __('Slider Height','transport-movers'),
		'section'=> 'transport_movers_blog_sec',
		'type'=> 'text'
	));

	//Slider excerpt
	$wp_customize->add_setting( 'transport_movers_slider_excerpt_number', array(
		'default'              => 25,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'transport_movers_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Content Limit','transport-movers' ),
		'section'     => 'transport_movers_blog_sec',
		'type'        => 'number',
		'settings'    => 'transport_movers_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('transport_movers_slider_opacity',array(
      'default'              => 0.7,
      'sanitize_callback' => 'transport_movers_sanitize_choices'
	));
	$wp_customize->add_control( 'transport_movers_slider_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','transport-movers' ),
	'section'     => 'transport_movers_blog_sec',
	'type'        => 'select',
	'settings'    => 'transport_movers_slider_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','transport-movers'),
		'0.1' =>  esc_attr('0.1','transport-movers'),
		'0.2' =>  esc_attr('0.2','transport-movers'),
		'0.3' =>  esc_attr('0.3','transport-movers'),
		'0.4' =>  esc_attr('0.4','transport-movers'),
		'0.5' =>  esc_attr('0.5','transport-movers'),
		'0.6' =>  esc_attr('0.6','transport-movers'),
		'0.7' =>  esc_attr('0.7','transport-movers'),
		'0.8' =>  esc_attr('0.8','transport-movers'),
		'0.9' =>  esc_attr('0.9','transport-movers')
	),
	));

	// Details
	$wp_customize->add_section('transport_movers_details',array(
		'title'	=> __('Details','transport-movers'),
		'description'	=> __('Add Details us here','transport-movers'),
		'priority'	=> null,
		'panel' => 'transport_movers_panel_id',
	));

	$wp_customize->add_setting('transport_movers_time_icon',array(
		'default'	=> 'far fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_time_icon',array(
		'label'	=> __('Time Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_time_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_time_text',array(
		'label'	=> __('Time Text','transport-movers'),
		'section'	=> 'transport_movers_details',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('transport_movers_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_time',array(
		'label'	=> __('Timing','transport-movers'),
		'section'	=> 'transport_movers_details',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('transport_movers_branch_icon',array(
		'default'	=> 'fas fa-university',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_branch_icon',array(
		'label'	=> __('Branch Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_branchase_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_branchase_text',array(
		'label'	=> __('Branch Text','transport-movers'),
		'section'	=> 'transport_movers_details',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('transport_movers_branchase',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_branchase',array(
		'label'	=> __('Branches','transport-movers'),
		'section'	=> 'transport_movers_details',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('transport_movers_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_facebook_icon',array(
		'label'	=> __('Facebook Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_facebook',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('transport_movers_facebook',array(
		'label'	=> __('Add Facebook link','transport-movers'),
		'section'	=> 'transport_movers_details',
		'setting'	=> 'transport_movers_facebook',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('transport_movers_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_twitter_icon',array(
		'label'	=> __('Twitter Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_twitter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('transport_movers_twitter',array(
		'label'	=> __('Add Twitter link','transport-movers'),
		'section'	=> 'transport_movers_details',
		'setting'	=> 'transport_movers_twitter',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('transport_movers_linkedin_icon',array(
		'default'	=> 'fab fa-linkedin-in',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_linkedin_icon',array(
		'label'	=> __('Linkedin Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_linkdin',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('transport_movers_linkdin',array(
		'label'	=> __('Add Linkdin link','transport-movers'),
		'section'	=> 'transport_movers_details',
		'setting'	=> 'transport_movers_linkdin',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('transport_movers_pinterest_icon',array(
		'default'	=> 'fab fa-pinterest-p',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_pinterest_icon',array(
		'label'	=> __('Pinterest Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_pinterest',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('transport_movers_pinterest',array(
		'label'	=> __('Add Pinterest link','transport-movers'),
		'section'	=> 'transport_movers_details',
		'setting'	=> 'transport_movers_pinterest',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('transport_movers_instagram_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_instagram_icon',array(
		'label'	=> __('Instagram Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_instagram',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('transport_movers_instagram',array(
		'label'	=> __('Add Instagram link','transport-movers'),
		'section'	=> 'transport_movers_details',
		'setting'	=> 'transport_movers_instagram',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('transport_movers_youtube_icon',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_youtube_icon',array(
		'label'	=> __('Youtube Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_youtube',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('transport_movers_youtube',array(
		'label'	=> __('Add Youtube link','transport-movers'),
		'section'	=> 'transport_movers_details',
		'setting'	=> 'transport_movers_youtube',
		'type'		=> 'url'
	));

	//About
	$wp_customize->add_section('transport_movers_project',array(
		'title'	=> __('About Section','transport-movers'),
		'description'	=> __('Add About sections below.','transport-movers'),
		'panel' => 'transport_movers_panel_id',
	));

	$wp_customize->add_setting('transport_movers_sec_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_sec_title',array(
		'label'	=> __('Title','transport-movers'),
		'section'	=> 'transport_movers_project',
		'type'		=> 'text'
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$posts[]='Select';  
	foreach($post_list as $post){
		$posts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('transport_movers_about_icon',array(
		'default'	=> 'fas fa-map-marker-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_about_icon',array(
		'label'	=> __('About Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_project',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('transport_movers_project_single_post',array(
		'default' =>'select post',
		'sanitize_callback' => 'transport_movers_sanitize_choices',
	));
	$wp_customize->add_control('transport_movers_project_single_post',array(
		'type'    => 'select',
		'choices' => $posts,
		'label' => __('Select post','transport-movers'),
		'section' => 'transport_movers_project',
	));

	//About excerpt
	$wp_customize->add_setting( 'transport_movers_about_excerpt_number', array(
		'default'              => 45,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'transport_movers_about_excerpt_number', array(
		'label'       => esc_html__( 'About Content Limit','transport-movers' ),
		'section'     => 'transport_movers_project',
		'type'        => 'number',
		'settings'    => 'transport_movers_about_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('transport_movers_project_button_text',array(
		'default' => __('Read More','transport-movers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('transport_movers_project_button_text',array(
		'label'	=> __('Add Button Text','transport-movers'),
		'section'	=> 'transport_movers_project',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('transport_movers_button_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer(
        $wp_customize,'transport_movers_button_icon',array(
		'label'	=> __('Button Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_project',
		'type'		=> 'icon'
	)));

	//footer text
	$wp_customize->add_section('transport_movers_footer_section',array(
		'title'	=> __('Footer Text','transport-movers'),
		'panel' => 'transport_movers_panel_id'
	));

	$wp_customize->add_setting('transport_movers_footer_bg_color', array(
		'default'           => '#111',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'transport_movers_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'transport-movers'),
		'section'  => 'transport_movers_footer_section',
	)));

	$wp_customize->add_setting('transport_movers_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'transport_movers_footer_bg_image',array(
        'label' => __('Footer Background Image','transport-movers'),
        'section' => 'transport_movers_footer_section'
	)));

	$wp_customize->add_setting('footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'transport_movers_sanitize_choices',
    ));
    $wp_customize->add_control('footer_widget_areas',array(
        'type'        => 'radio',
        'label'       => __('Footer widget area', 'transport-movers'),
        'section'     => 'transport_movers_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'transport-movers'),
        'choices' => array(
            '1'     => __('One', 'transport-movers'),
            '2'     => __('Two', 'transport-movers'),
            '3'     => __('Three', 'transport-movers'),
            '4'     => __('Four', 'transport-movers')
        ),
    ));

    $wp_customize->add_setting('transport_movers_back_to_top_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Transport_Movers_Icon_Changer($wp_customize,'transport_movers_back_to_top_icon',array(
		'label'	=> __('Back to Top Icon','transport-movers'),
		'transport' => 'refresh',
		'section'	=> 'transport_movers_footer_section',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('transport_movers_hide_show_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
	));
	$wp_customize->add_control('transport_movers_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Back To Top','transport-movers'),
      	'section' => 'transport_movers_footer_section',
	));

	$wp_customize->add_setting('transport_movers_scroll_icon_font_size',array(
		'default'=> 22,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control(new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_scroll_icon_font_size',array(
		'label'	=> __('Back To Top Icon Font Size','transport-movers'),
		'section'=> 'transport_movers_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting('transport_movers_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'transport_movers_sanitize_choices'
	));
	$wp_customize->add_control('transport_movers_footer_options',array(
        'type' => 'radio',
        'label' => __('Back To Top','transport-movers'),
        'section' => 'transport_movers_footer_section',
        'choices' => array(
            'Left align' => __('Left align','transport-movers'),
            'Right align' => __('Right align','transport-movers'),
            'Center align' => __('Center align','transport-movers'),
        ),
	) );

	$wp_customize->add_setting( 'transport_movers_top_bottom_scroll_padding',array(
		'default' => 12,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control( new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_top_bottom_scroll_padding',	array(
		'label' => esc_html__( 'Top Bottom Scroll Padding (px)','transport-movers' ),
		'section' => 'transport_movers_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'transport_movers_left_right_scroll_padding',array(
		'default' => 17,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control( new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_left_right_scroll_padding',	array(
		'label' => esc_html__( 'Left Right Scroll Padding (px)','transport-movers' ),
		'section' => 'transport_movers_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'transport_movers_back_to_top_border_radius',array(
		'default' => 50,
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control( new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_back_to_top_border_radius', array(
		'label' => esc_html__( 'Back to Top Border Radius (px)','transport-movers' ),
		'section' => 'transport_movers_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));
	
	$wp_customize->add_setting('transport_movers_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_footer_copy',array(
		'label'	=> __('Copyright Text','transport-movers'),
		'section'	=> 'transport_movers_footer_section',
		'description' => __('Add some text for footer like copyright etc.','transport-movers'),
		'type'		=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('transport_movers_responsive_media',array(
		'title'	=> __('Responsive Media','transport-movers'),
		'panel' => 'transport_movers_panel_id',
	));

    $wp_customize->add_setting('transport_movers_display_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_display_slider',array(
       'type' => 'checkbox',
       'label' => __('Display Slider','transport-movers'),
       'section' => 'transport_movers_responsive_media'
    ));

    $wp_customize->add_setting('transport_movers_display_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_display_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Display Slider Button','transport-movers'),
       'section' => 'transport_movers_responsive_media'
    ));

	$wp_customize->add_setting('transport_movers_display_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_display_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Display Sidebar','transport-movers'),
       'section' => 'transport_movers_responsive_media'
    ));

    $wp_customize->add_setting('transport_movers_display_scrolltop',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_display_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Display Back To Top','transport-movers'),
       'section' => 'transport_movers_responsive_media'
    ));

    $wp_customize->add_setting('transport_movers_display_fixed_header',array(
       'default' => false,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_display_fixed_header',array(
       'type' => 'checkbox',
       'label' => __('Display Sticky Header','transport-movers'),
       'section' => 'transport_movers_responsive_media'
    ));

    $wp_customize->add_setting('transport_movers_display_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_display_preloader',array(
       'type' => 'checkbox',
       'label' => __('Display Preloader','transport-movers'),
       'section' => 'transport_movers_responsive_media'
    ));

	//404 Page Setting
	$wp_customize->add_section('transport_movers_page_not_found',array(
		'title'	=> __('404 Page Not Found / No Result','transport-movers'),
		'panel' => 'transport_movers_panel_id',
	));	

	$wp_customize->add_setting('transport_movers_page_not_found_heading',array(
		'default'=> __('404 Not Found','transport-movers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_page_not_found_heading',array(
		'label'	=> __('404 Heading','transport-movers'),
		'section'=> 'transport_movers_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('transport_movers_page_not_found_text',array(
		'default'=> __('Looks like you have taken a wrong turn. Dont worry it happens to the best of us.','transport-movers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_page_not_found_text',array(
		'label'	=> __('404 Content','transport-movers'),
		'section'=> 'transport_movers_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('transport_movers_page_not_found_button',array(
		'default'=>  __('Back to Home Page','transport-movers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_page_not_found_button',array(
		'label'	=> __('404 Button','transport-movers'),
		'section'=> 'transport_movers_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('transport_movers_no_search_result_heading',array(
		'default'=> __('Nothing Found','transport-movers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_no_search_result_heading',array(
		'label'	=> __('No Search Results Heading','transport-movers'),
		'description'=>__('The search page heading display when no results are found.','transport-movers'),
		'section'=> 'transport_movers_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('transport_movers_no_search_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','transport-movers'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('transport_movers_no_search_result_text',array(
		'label'	=> __('No Search Results Text','transport-movers'),
		'description'=>__('The search page text display when no results are found.','transport-movers'),
		'section'=> 'transport_movers_page_not_found',
		'type'=> 'text'
	));

	//Woocommerce Section
	$wp_customize->add_section( 'transport_movers_woocommerce_section' , array(
    	'title'      => __( 'Woocommerce Settings', 'transport-movers' ),
    	'description'=>__('The below settings are apply on woocommerce pages.','transport-movers'),
		'priority'   => null,
		'panel' => 'transport_movers_panel_id'
	) );

	$wp_customize->add_setting( 'transport_movers_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'transport_movers_per_columns', array(
		'label'    => __( 'Product per columns', 'transport-movers' ),
		'section'  => 'transport_movers_woocommerce_section',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('transport_movers_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('transport_movers_product_per_page',array(
		'label'	=> __('Product per page','transport-movers'),
		'section'	=> 'transport_movers_woocommerce_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('transport_movers_shop_sidebar_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_shop_sidebar_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable shop page sidebar','transport-movers'),
       'section' => 'transport_movers_woocommerce_section',
    ));

    $wp_customize->add_setting('transport_movers_product_page_sidebar_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_product_page_sidebar_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable product page sidebar','transport-movers'),
       'section' => 'transport_movers_woocommerce_section',
    ));

    $wp_customize->add_setting('transport_movers_related_product_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_related_product_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Related product','transport-movers'),
       'section' => 'transport_movers_woocommerce_section',
    ));

    $wp_customize->add_setting( 'transport_movers_woo_product_sale_border_radius',array(
		'default' => 100,
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_woo_product_sale_border_radius', array(
        'label'  => __('Woocommerce Product Sale Border Radius','transport-movers'),
        'section'  => 'transport_movers_woocommerce_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('transport_movers_wooproduct_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_wooproduct_sale_font_size',array(
		'label'	=> __('Woocommerce Product Sale Font Size','transport-movers'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'transport_movers_woocommerce_section',
	)));

    $wp_customize->add_setting('transport_movers_woo_product_sale_top_bottom_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_woo_product_sale_top_bottom_padding',array(
		'label'	=> __('Woocommerce Product Sale Top Bottom Padding ','transport-movers'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'transport_movers_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('transport_movers_woo_product_sale_left_right_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_woo_product_sale_left_right_padding',array(
		'label'	=> __('Woocommerce Product Sale Left Right Padding','transport-movers'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'transport_movers_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('transport_movers_woo_product_sale_position',array(
        'default' => __('Right','transport-movers'),
        'sanitize_callback' => 'transport_movers_sanitize_choices'
	));
	$wp_customize->add_control('transport_movers_woo_product_sale_position',array(
        'type' => 'select',
        'label' => __('Woocommerce Product Sale Position','transport-movers'),
        'section' => 'transport_movers_woocommerce_section',
        'choices' => array(
            'Right' => __('Right','transport-movers'),
            'Left' => __('Left','transport-movers'),
        ),
	));

	$wp_customize->add_setting( 'transport_movers_woocommerce_button_padding_top',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control( new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_woocommerce_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding (px)','transport-movers' ),
		'section' => 'transport_movers_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'transport_movers_woocommerce_button_padding_right',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control( new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_woocommerce_button_padding_right',array(
		'label' => esc_html__( 'Button Right Left Padding (px)','transport-movers' ),
		'section' => 'transport_movers_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'transport_movers_woocommerce_button_border_radius',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control( new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_woocommerce_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius (px)','transport-movers' ),
		'section' => 'transport_movers_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

    $wp_customize->add_setting('transport_movers_woocommerce_product_border_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'transport_movers_sanitize_checkbox'
    ));
    $wp_customize->add_control('transport_movers_woocommerce_product_border_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable product border','transport-movers'),
       'section' => 'transport_movers_woocommerce_section',
    ));

	$wp_customize->add_setting( 'transport_movers_woocommerce_product_padding_top',array(
		'default' => 10,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control( new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_woocommerce_product_padding_top',	array(
		'label' => esc_html__( 'Product Top Bottom Padding (px)','transport-movers' ),
		'section' => 'transport_movers_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'transport_movers_woocommerce_product_padding_right',array(
		'default' => 10,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control( new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_woocommerce_product_padding_right',	array(
		'label' => esc_html__( 'Product Right Left Padding (px)','transport-movers' ),
		'section' => 'transport_movers_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'transport_movers_woocommerce_product_border_radius',array(
		'default' => 3,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control( new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_woocommerce_product_border_radius',array(
		'label' => esc_html__( 'Product Border Radius (px)','transport-movers' ),
		'section' => 'transport_movers_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'transport_movers_woocommerce_product_box_shadow',array(
		'default' => 5,
		'transport' => 'refresh',
		'sanitize_callback' => 'transport_movers_sanitize_integer'
	));
	$wp_customize->add_control( new Transport_Movers_Custom_Control( $wp_customize, 'transport_movers_woocommerce_product_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow (px)','transport-movers' ),
		'section' => 'transport_movers_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('transport_movers_wooproducts_nav',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'transport_movers_sanitize_choices'
    ));
    $wp_customize->add_control('transport_movers_wooproducts_nav',array(
       'type' => 'select',
       'label' => __('Shop Page Products Navigation','transport-movers'),
       'choices' => array(
            'Yes' => __('Yes','transport-movers'),
            'No' => __('No','transport-movers'),
        ),
       'section' => 'transport_movers_woocommerce_section',
    ));
}
add_action( 'customize_register', 'transport_movers_customize_register' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Transport_Movers_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Transport_Movers_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Transport_Movers_Customize_Section_Pro(
				$manager,
				'transport_movers_example_1',
				array(
					'title'   =>  esc_html__( 'Transport Pro', 'transport-movers' ),
					'pro_text' => esc_html__( 'Go Pro', 'transport-movers' ),
					'pro_url'  => esc_url( 'https://www.buywptemplates.com/themes/premium-transport-wordpress-theme/' ),
					'priority'   => 9
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'transport-movers-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'transport-movers-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}

	//Footer widget areas
	function transport_movers_sanitize_choices( $input ) {
	    $valid = array(
	        '1'     => __('One', 'transport-movers'),
	        '2'     => __('Two', 'transport-movers'),
	        '3'     => __('Three', 'transport-movers'),
	        '4'     => __('Four', 'transport-movers')
	    );
	    if ( array_key_exists( $input, $valid ) ) {
	        return $input;
	    } else {
	        return '';
	    }
	}
}

// Doing this customizer thang!
Transport_Movers_Customize::get_instance();