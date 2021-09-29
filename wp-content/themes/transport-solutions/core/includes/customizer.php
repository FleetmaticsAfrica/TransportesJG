<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transport_solutions_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'transport-solutions' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transport-solutions' ),
			'off' => esc_html__( 'Disable', 'transport-solutions' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transport_solutions_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'transport-solutions' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transport-solutions' ),
			'off' => esc_html__( 'Disable', 'transport-solutions' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'transport_solutions_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'transport-solutions' ),
	) );

	// POST SECTION

	Kirki::add_section( 'transport_solutions_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'transport-solutions' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'transport-solutions' ),
	    'panel'          => 'transport_solutions_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_enable_post_heading',
		'section'     => 'transport_solutions_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transport_solutions_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'transport-solutions' ),
		'section'     => 'transport_solutions_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transport-solutions' ),
			'off' => esc_html__( 'Disable', 'transport-solutions' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transport_solutions_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'transport-solutions' ),
		'section'     => 'transport_solutions_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transport-solutions' ),
			'off' => esc_html__( 'Disable', 'transport-solutions' ),
		],
	] );





	// HEADER SECTION

	Kirki::add_section( 'transport_solutions_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'transport-solutions' ),
	    'description'    => esc_html__( 'Here you can add different type of social icons.', 'transport-solutions' ),
	    'panel'          => 'transport_solutions_panel_id',
	    'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_top_header_heading',
		'section'     => 'transport_solutions_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Top Header Text', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transport_solutions_top_header_text',
		'section'  => 'transport_solutions_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_enable_socail_link',
		'section'     => 'transport_solutions_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'transport_solutions_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'transport-solutions' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'transport-solutions' ),
		'settings'     => 'transport_solutions_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'transport-solutions' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'transport-solutions' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'transport-solutions' ),
				'description' => esc_html__( 'Add the social icon url here.', 'transport-solutions' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_enable_search',
		'section'     => 'transport_solutions_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transport_solutions_search_box_enable',
		'label'       => esc_html__( 'Search Enable / Disable Button', 'transport-solutions' ),
		'section'     => 'transport_solutions_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transport-solutions' ),
			'off' => esc_html__( 'Disable', 'transport-solutions' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_header_button_heading',
		'section'     => 'transport_solutions_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button Text & URL', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transport_solutions_header_button_text',
		'label'    => __( 'Button Text', 'transport-solutions' ),
		'section'  => 'transport_solutions_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'settings' => 'transport_solutions_header_button_url',
		'label'    => __( 'Button URL', 'transport-solutions' ),
		'section'  => 'transport_solutions_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	// CONTACT INFORMATION

	Kirki::add_section( 'transport_solutions_section_contact', array(
	    'title'          => esc_html__( 'Contact Info Settings', 'transport-solutions' ),
	    'description'    => esc_html__( 'Here you can add your personal contact details.', 'transport-solutions' ),
	    'panel'          => 'transport_solutions_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_phone_number_heading',
		'section'     => 'transport_solutions_section_contact',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transport_solutions_header_phone_number',
		'section'  => 'transport_solutions_section_contact',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_email_address_heading',
		'section'     => 'transport_solutions_section_contact',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transport_solutions_header_email_address',
		'section'  => 'transport_solutions_section_contact',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_open_timings_heading',
		'section'     => 'transport_solutions_section_contact',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Timings', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transport_solutions_header_open_timings',
		'section'  => 'transport_solutions_section_contact',
		'default'  => '',
		'priority' => 10,
	] );

	// SLIDER SECTION

	Kirki::add_section( 'transport_solutions_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'transport-solutions' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'transport-solutions' ),
        'panel'          => 'transport_solutions_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_enable_heading',
		'section'     => 'transport_solutions_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transport_solutions_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'transport-solutions' ),
		'section'     => 'transport_solutions_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transport-solutions' ),
			'off' => esc_html__( 'Disable', 'transport-solutions' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_slider_heading',
		'section'     => 'transport_solutions_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'transport_solutions_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'transport-solutions' ),
		'section'     => 'transport_solutions_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'transport_solutions_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'transport-solutions' ),
		'section'     => 'transport_solutions_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'transport-solutions' ),
		'priority'    => 10,
		'choices'     => transport_solutions_get_categories_select(),
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_slider_button_heading',
		'section'     => 'transport_solutions_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Button Text', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transport_solutions_slider_button_text',
		'section'  => 'transport_solutions_blog_slide_section',
		'default'  => 'Get a Quote',
		'priority' => 10,
	] );


	// SERVICES SECTION

	Kirki::add_section( 'transport_solutions_featured_post_section', array(
        'title'          => esc_html__( 'Services Settings', 'transport-solutions' ),
        'description'    => esc_html__( 'You have to select post category to show services.', 'transport-solutions' ),
        'panel'          => 'transport_solutions_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_services_enable_heading',
		'section'     => 'transport_solutions_featured_post_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Services Section', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transport_solutions_services_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'transport-solutions' ),
		'section'     => 'transport_solutions_featured_post_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transport-solutions' ),
			'off' => esc_html__( 'Disable', 'transport-solutions' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_post_heading',
		'section'     => 'transport_solutions_featured_post_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Services', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'transport_solutions_services_number',
		'label'       => esc_html__( 'Number of services to show', 'transport-solutions' ),
		'section'     => 'transport_solutions_featured_post_section',
		'default'     => 5,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'transport_solutions_services_category',
		'label'       => esc_html__( 'Select the category to show services', 'transport-solutions' ),
		'section'     => 'transport_solutions_featured_post_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'transport-solutions' ),
		'priority'    => 10,
		'choices'     => transport_solutions_get_categories_select(),
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_services_button_heading',
		'section'     => 'transport_solutions_featured_post_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Services Button Text', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transport_solutions_services_button_text',
		'section'  => 'transport_solutions_featured_post_section',
		'default'  => 'Learn More',
		'priority' => 10,
	] );

	// FOOTER SECTION

	Kirki::add_section( 'transport_solutions_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'transport-solutions' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'transport-solutions' ),
        'panel'          => 'transport_solutions_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_footer_text_heading',
		'section'     => 'transport_solutions_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'transport_solutions_footer_text',
		'section'  => 'transport_solutions_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'transport_solutions_footer_enable_heading',
		'section'     => 'transport_solutions_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'transport-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'transport_solutions_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'transport-solutions' ),
		'section'     => 'transport_solutions_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'transport-solutions' ),
			'off' => esc_html__( 'Disable', 'transport-solutions' ),
		],
	] );	
}