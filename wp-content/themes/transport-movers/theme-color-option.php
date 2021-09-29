<?php

	$transport_movers_first_color = get_theme_mod('transport_movers_first_color');

	$transport_movers_custom_css ='';

	/*------------------ Global First Color -----------*/
	$transport_movers_custom_css .='input[type="submit"], #slider .slide-button a, #sidebar button, .appointbtn a, .search-box i, .primary-navigation ul ul a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .blog-section .section-title a:after, .page-content .read-moresec a.button, #comments input[type="submit"].submit, #comments a.comment-reply-link, #sidebar h2:after, #sidebar input[type="submit"]:hover, #sidebar .tagcloud a:hover, .copyright-wrapper, .footer-wp h3:after, .footer-wp input[type="submit"], .footer-wp .tagcloud a:hover, .pagination a:hover, .pagination .current, #navbar-header .socialbox, #navbar-header .socialbox , #navbar-header .appointbtn, #scrollbutton i, .footer-wp input[type="submit"], .footer-wp button, #sidebar button, .primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, .main-search a, .woocommerce nav.woocommerce-pagination ul li a, .tags a:hover{';
			$transport_movers_custom_css .='background-color: '.esc_attr($transport_movers_first_color).';';
	$transport_movers_custom_css .='}';

	$transport_movers_custom_css .='a, .footer-wp a:focus, .metabox span a:hover , nav.navigation.post-navigation a:hover, #sidebar ul li a:hover, h2.entry-title, h1.page-title, #about-sec h2, .about-link a:hover, #con-details .time i, #con-details .branch i, .primary-navigation ul ul a:hover, .primary-navigation a:hover, .postbtn a, p.logged-in-as a, .footer-wp li a:hover, span.posted_in a, td.product-name a, a.shipping-calculator-button, .woocommerce-info a, .woocommerce-account .woocommerce-MyAccount-content a, a:focus, button:focus, .woocommerce form .form-row input:focus.input-text, .woocommerce form .form-row textarea:focus, .topbar a.text:hover, a.email:hover, #about-sec i:hover, .postbtn i{';
			$transport_movers_custom_css .='color: '.esc_attr($transport_movers_first_color).';';
	$transport_movers_custom_css .='}';

	$transport_movers_custom_css .='
	@media screen and (max-width:1000px) {
		.primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, .primary-navigation a:focus{';
			$transport_movers_custom_css .='color: '.esc_attr($transport_movers_first_color).' !important;';
	$transport_movers_custom_css .='} }';

	$transport_movers_custom_css .='#blog_sec .sticky, .page-content .read-moresec a.button, #scrollbutton i {';
			$transport_movers_custom_css .='border-color: '.esc_attr($transport_movers_first_color).';';
	$transport_movers_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$transport_movers_theme_lay = get_theme_mod( 'transport_movers_width_layout_options','Default');
    if($transport_movers_theme_lay == 'Default'){
		$transport_movers_custom_css .='body{';
			$transport_movers_custom_css .='max-width: 100%;';
		$transport_movers_custom_css .='}';
	}else if($transport_movers_theme_lay == 'Container Layout'){
		$transport_movers_custom_css .='body{';
			$transport_movers_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$transport_movers_custom_css .='}';
		$transport_movers_custom_css .='.page-template-custom-home-page header{';
			$transport_movers_custom_css .='position: relative;';
		$transport_movers_custom_css .='}';
	}else if($transport_movers_theme_lay == 'Box Layout'){
		$transport_movers_custom_css .='body{';
			$transport_movers_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$transport_movers_custom_css .='}';
		$transport_movers_custom_css .='.page-template-custom-home-page header{';
			$transport_movers_custom_css .='position: relative;';
		$transport_movers_custom_css .='}';
		$transport_movers_custom_css .='.page-template-custom-home-page #header{';
			$transport_movers_custom_css .='left: 15px; width: 97.2%;';
		$transport_movers_custom_css .='}';
		$transport_movers_custom_css .='
		@media screen and (max-width: 768px){
		.page-template-custom-home-page #header{';
		$transport_movers_custom_css .='width:100%;';
		$transport_movers_custom_css .='}';
	}

	/*------------------Slider Content Layout -------------------*/
	$transport_movers_theme_lay = get_theme_mod( 'transport_movers_slider_content_layout','Left');
    if($transport_movers_theme_lay == 'Left'){
		$transport_movers_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .slide-button {';
			$transport_movers_custom_css .='text-align:left; left:15%; right:40%;';
		$transport_movers_custom_css .='}';
	}else if($transport_movers_theme_lay == 'Center'){
		$transport_movers_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .slide-button {';
			$transport_movers_custom_css .='text-align:center; left:30%; right:30%;';
		$transport_movers_custom_css .='}';
	}else if($transport_movers_theme_lay == 'Right'){
		$transport_movers_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .slide-button {';
			$transport_movers_custom_css .='text-align:right; left:40%; right:15%;';
		$transport_movers_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$transport_movers_theme_lay = get_theme_mod( 'transport_movers_slider_opacity','0.7');
	if($transport_movers_theme_lay == '0'){
		$transport_movers_custom_css .='#slider img{';
			$transport_movers_custom_css .='opacity:0';
		$transport_movers_custom_css .='}';
		}else if($transport_movers_theme_lay == '0.1'){
		$transport_movers_custom_css .='#slider img{';
			$transport_movers_custom_css .='opacity:0.1';
		$transport_movers_custom_css .='}';
		}else if($transport_movers_theme_lay == '0.2'){
		$transport_movers_custom_css .='#slider img{';
			$transport_movers_custom_css .='opacity:0.2';
		$transport_movers_custom_css .='}';
		}else if($transport_movers_theme_lay == '0.3'){
		$transport_movers_custom_css .='#slider img{';
			$transport_movers_custom_css .='opacity:0.3';
		$transport_movers_custom_css .='}';
		}else if($transport_movers_theme_lay == '0.4'){
		$transport_movers_custom_css .='#slider img{';
			$transport_movers_custom_css .='opacity:0.4';
		$transport_movers_custom_css .='}';
		}else if($transport_movers_theme_lay == '0.5'){
		$transport_movers_custom_css .='#slider img{';
			$transport_movers_custom_css .='opacity:0.5';
		$transport_movers_custom_css .='}';
		}else if($transport_movers_theme_lay == '0.6'){
		$transport_movers_custom_css .='#slider img{';
			$transport_movers_custom_css .='opacity:0.6';
		$transport_movers_custom_css .='}';
		}else if($transport_movers_theme_lay == '0.7'){
		$transport_movers_custom_css .='#slider img{';
			$transport_movers_custom_css .='opacity:0.7';
		$transport_movers_custom_css .='}';
		}else if($transport_movers_theme_lay == '0.8'){
		$transport_movers_custom_css .='#slider img{';
			$transport_movers_custom_css .='opacity:0.8';
		$transport_movers_custom_css .='}';
		}else if($transport_movers_theme_lay == '0.9'){
		$transport_movers_custom_css .='#slider img{';
			$transport_movers_custom_css .='opacity:0.9';
		$transport_movers_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$transport_movers_woocommerce_button_padding_top = get_theme_mod('transport_movers_woocommerce_button_padding_top',15);
	$transport_movers_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$transport_movers_custom_css .='padding-top: '.esc_attr($transport_movers_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($transport_movers_woocommerce_button_padding_top).'px;';
	$transport_movers_custom_css .='}';

	$transport_movers_woocommerce_button_padding_right = get_theme_mod('transport_movers_woocommerce_button_padding_right',15);
	$transport_movers_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$transport_movers_custom_css .='padding-left: '.esc_attr($transport_movers_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($transport_movers_woocommerce_button_padding_right).'px;';
	$transport_movers_custom_css .='}';

	$transport_movers_woocommerce_button_border_radius = get_theme_mod('transport_movers_woocommerce_button_border_radius',100);
	$transport_movers_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$transport_movers_custom_css .='border-radius: '.esc_attr($transport_movers_woocommerce_button_border_radius).'%;';
	$transport_movers_custom_css .='}';

	$transport_movers_related_product_enable = get_theme_mod('transport_movers_related_product_enable',true);
	if($transport_movers_related_product_enable == false){
		$transport_movers_custom_css .='.related.products{';
			$transport_movers_custom_css .='display: none;';
		$transport_movers_custom_css .='}';
	}

	$transport_movers_woocommerce_product_border_enable = get_theme_mod('transport_movers_woocommerce_product_border_enable',true);
	if($transport_movers_woocommerce_product_border_enable == false){
		$transport_movers_custom_css .='.products li{';
			$transport_movers_custom_css .='border: none;';
		$transport_movers_custom_css .='}';
	}

	$transport_movers_woocommerce_product_padding_top = get_theme_mod('transport_movers_woocommerce_product_padding_top',10);
	$transport_movers_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$transport_movers_custom_css .='padding-top: '.esc_attr($transport_movers_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_attr($transport_movers_woocommerce_product_padding_top).'px !important;';
	$transport_movers_custom_css .='}';

	$transport_movers_woocommerce_product_padding_right = get_theme_mod('transport_movers_woocommerce_product_padding_right',10);
	$transport_movers_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$transport_movers_custom_css .='padding-left: '.esc_attr($transport_movers_woocommerce_product_padding_right).'px !important; padding-right: '.esc_attr($transport_movers_woocommerce_product_padding_right).'px !important;';
	$transport_movers_custom_css .='}';

	$transport_movers_woocommerce_product_border_radius = get_theme_mod('transport_movers_woocommerce_product_border_radius');
	$transport_movers_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$transport_movers_custom_css .='border-radius: '.esc_attr($transport_movers_woocommerce_product_border_radius).'px;';
	$transport_movers_custom_css .='}';

	$transport_movers_woocommerce_product_box_shadow = get_theme_mod('transport_movers_woocommerce_product_box_shadow');
	$transport_movers_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$transport_movers_custom_css .='box-shadow: '.esc_attr($transport_movers_woocommerce_product_box_shadow).'px '.esc_attr($transport_movers_woocommerce_product_box_shadow).'px '.esc_attr($transport_movers_woocommerce_product_box_shadow).'px #eee;';
	$transport_movers_custom_css .='}';

	$transport_movers_woo_product_sale_top_bottom_padding = get_theme_mod('transport_movers_woo_product_sale_top_bottom_padding', 0);
	$transport_movers_woo_product_sale_left_right_padding = get_theme_mod('transport_movers_woo_product_sale_left_right_padding', 0);
	$transport_movers_custom_css .='.woocommerce span.onsale{';
		$transport_movers_custom_css .='padding-top: '.esc_attr($transport_movers_woo_product_sale_top_bottom_padding).'px; padding-bottom: '.esc_attr($transport_movers_woo_product_sale_top_bottom_padding).'px; padding-left: '.esc_attr($transport_movers_woo_product_sale_left_right_padding).'px; padding-right: '.esc_attr($transport_movers_woo_product_sale_left_right_padding).'px; display:inline-block;';
	$transport_movers_custom_css .='}';

	$transport_movers_woo_product_sale_border_radius = get_theme_mod('transport_movers_woo_product_sale_border_radius',0);
	$transport_movers_custom_css .='.woocommerce span.onsale {';
		$transport_movers_custom_css .='border-radius: '.esc_attr($transport_movers_woo_product_sale_border_radius).'px;';
	$transport_movers_custom_css .='}';

	$transport_movers_wooproduct_sale_font_size = get_theme_mod('transport_movers_wooproduct_sale_font_size',14);
	$transport_movers_custom_css .='.woocommerce span.onsale{';
		$transport_movers_custom_css .='font-size: '.esc_attr($transport_movers_wooproduct_sale_font_size).'px;';
	$transport_movers_custom_css .='}';

	$transport_movers_woo_product_sale_position = get_theme_mod('transport_movers_woo_product_sale_position', 'Right');
	if($transport_movers_woo_product_sale_position == 'Right' ){
		$transport_movers_custom_css .='.woocommerce ul.products li.product .onsale{';
			$transport_movers_custom_css .=' left:auto; right:0;';
		$transport_movers_custom_css .='}';
	}elseif($transport_movers_woo_product_sale_position == 'Left' ){
		$transport_movers_custom_css .='.woocommerce ul.products li.product .onsale{';
			$transport_movers_custom_css .=' left:0; right:auto;';
		$transport_movers_custom_css .='}';
	}

	// footer setting
	$transport_movers_footer_bg_color = get_theme_mod('transport_movers_footer_bg_color');
		$transport_movers_custom_css .='.footer-wp{';
			$transport_movers_custom_css .='background-color: '.esc_attr($transport_movers_footer_bg_color).';';
		$transport_movers_custom_css .='}';

	$transport_movers_footer_bg_image = get_theme_mod('transport_movers_footer_bg_image');
	if($transport_movers_footer_bg_image != false){
		$transport_movers_custom_css .='.footer-wp{';
			$transport_movers_custom_css .='background: url('.esc_attr($transport_movers_footer_bg_image).');';
		$transport_movers_custom_css .='}';
	}

	/*------------- Back to Top  -------------------*/
	$transport_movers_back_to_top_border_radius = get_theme_mod('transport_movers_back_to_top_border_radius');
	$transport_movers_custom_css .='#scrollbutton i{';
		$transport_movers_custom_css .='border-radius: '.esc_attr($transport_movers_back_to_top_border_radius).'px;';
	$transport_movers_custom_css .='}';

	$transport_movers_scroll_icon_font_size = get_theme_mod('transport_movers_scroll_icon_font_size', 22);
	$transport_movers_custom_css .='#scrollbutton i{';
		$transport_movers_custom_css .='font-size: '.esc_attr($transport_movers_scroll_icon_font_size).'px;';
	$transport_movers_custom_css .='}';

	$transport_movers_top_bottom_scroll_padding = get_theme_mod('transport_movers_top_bottom_scroll_padding', 12);
	$transport_movers_custom_css .='#scrollbutton i{';
		$transport_movers_custom_css .='padding-top: '.esc_attr($transport_movers_top_bottom_scroll_padding).'px; padding-bottom: '.esc_attr($transport_movers_top_bottom_scroll_padding).'px;';
	$transport_movers_custom_css .='}';

	$transport_movers_left_right_scroll_padding = get_theme_mod('transport_movers_left_right_scroll_padding', 17);
	$transport_movers_custom_css .='#scrollbutton i{';
		$transport_movers_custom_css .='padding-left: '.esc_attr($transport_movers_left_right_scroll_padding).'px; padding-right: '.esc_attr($transport_movers_left_right_scroll_padding).'px;';
	$transport_movers_custom_css .='}';

	$transport_movers_slider = get_theme_mod('transport_movers_slider_hide');
	if($transport_movers_slider == false){
		$transport_movers_custom_css .='.page-template-custom-home-page #header{';
			$transport_movers_custom_css .='position: static; border-bottom: solid 2px #000;';
		$transport_movers_custom_css .='}';
	}

	/*----------- Preloader Color Option  ----------------*/
	$transport_movers_preloader_bg_color_option = get_theme_mod('transport_movers_preloader_bg_color_option');
	$transport_movers_preloader_icon_color_option = get_theme_mod('transport_movers_preloader_icon_color_option');
	$transport_movers_custom_css .='.frame{';
		$transport_movers_custom_css .='background-color: '.esc_attr($transport_movers_preloader_bg_color_option).';';
	$transport_movers_custom_css .='}';

	$transport_movers_custom_css .='.dot-1,.dot-2,.dot-3{';
		$transport_movers_custom_css .='background-color: '.esc_attr($transport_movers_preloader_icon_color_option).';';
	$transport_movers_custom_css .='}';

	// preloader type
	$transport_movers_theme_lay = get_theme_mod( 'transport_movers_preloader_type','First Preloader Type');
    if($transport_movers_theme_lay == 'First Preloader Type'){
		$transport_movers_custom_css .='.dot-1, .dot-2, .dot-3{';
			$transport_movers_custom_css .='';
		$transport_movers_custom_css .='}';
	}else if($transport_movers_theme_lay == 'Second Preloader Type'){
		$transport_movers_custom_css .='.dot-1, .dot-2, .dot-3{';
			$transport_movers_custom_css .='border-radius:0;';
		$transport_movers_custom_css .='}';
	}

	// menu settings
	$transport_movers_menu_font_size_option = get_theme_mod('transport_movers_menu_font_size_option', 14);
	$transport_movers_custom_css .='.primary-navigation a{';
		$transport_movers_custom_css .='font-size: '.esc_attr($transport_movers_menu_font_size_option).'px;';
	$transport_movers_custom_css .='}';

	// Responsive Media
	$transport_movers_slider = get_theme_mod( 'transport_movers_display_slider',false);
	if($transport_movers_slider == true && get_theme_mod( 'transport_movers_slider_hide', false) == false){
    	$transport_movers_custom_css .='#slider{';
			$transport_movers_custom_css .='display:none;';
		$transport_movers_custom_css .='} ';
	}
    if($transport_movers_slider == true){
    	$transport_movers_custom_css .='@media screen and (max-width:575px) {';
		$transport_movers_custom_css .='#slider{';
			$transport_movers_custom_css .='display:block;';
		$transport_movers_custom_css .='} }';
	}else if($transport_movers_slider == false){
		$transport_movers_custom_css .='@media screen and (max-width:575px){';
		$transport_movers_custom_css .='#slider{';
			$transport_movers_custom_css .='display:none;';
		$transport_movers_custom_css .='} }';
	}

	$transport_movers_sliderbutton = get_theme_mod( 'transport_movers_display_slider_button',true);
	if($transport_movers_sliderbutton == true && get_theme_mod( 'transport_movers_show_slider_button',true) != true){
    	$transport_movers_custom_css .='.slide-button{';
			$transport_movers_custom_css .='display:none;';
		$transport_movers_custom_css .='} ';
	}
    if($transport_movers_sliderbutton == true){
    	$transport_movers_custom_css .='@media screen and (max-width:575px) {';
		$transport_movers_custom_css .='.slide-button{';
			$transport_movers_custom_css .='display:block;';
		$transport_movers_custom_css .='} }';
	}else if($transport_movers_sliderbutton == false){
		$transport_movers_custom_css .='@media screen and (max-width:575px){';
		$transport_movers_custom_css .='.slide-button{';
			$transport_movers_custom_css .='display:none;';
		$transport_movers_custom_css .='} }';
	}

	$transport_movers_sidebar = get_theme_mod( 'transport_movers_display_sidebar',true);
    if($transport_movers_sidebar == true){
    	$transport_movers_custom_css .='@media screen and (max-width:575px) {';
		$transport_movers_custom_css .='#sidebar{';
			$transport_movers_custom_css .='display:block;';
		$transport_movers_custom_css .='} }';
	}else if($transport_movers_sidebar == false){
		$transport_movers_custom_css .='@media screen and (max-width:575px) {';
		$transport_movers_custom_css .='#sidebar{';
			$transport_movers_custom_css .='display:none;';
		$transport_movers_custom_css .='} }';
	}

	$transport_movers_scroll = get_theme_mod( 'transport_movers_display_scrolltop', true);
	if($transport_movers_scroll == true && get_theme_mod( 'transport_movers_hide_show_scroll',true) != true){
    	$transport_movers_custom_css .='#scrollbutton i{';
			$transport_movers_custom_css .='display:none;';
		$transport_movers_custom_css .='} ';
	}
    if($transport_movers_scroll == true){
    	$transport_movers_custom_css .='@media screen and (max-width:575px) {';
		$transport_movers_custom_css .='#scrollbutton i{';
			$transport_movers_custom_css .='display:block;';
		$transport_movers_custom_css .='} }';
	}else if($transport_movers_scroll == false){
		$transport_movers_custom_css .='@media screen and (max-width:575px){';
		$transport_movers_custom_css .='#scrollbutton i{';
			$transport_movers_custom_css .='display:none;';
		$transport_movers_custom_css .='} }';
	}

	$transport_movers_preloader = get_theme_mod( 'transport_movers_display_preloader',true);
	if($transport_movers_preloader == true && get_theme_mod( 'transport_movers_preloader',true) != true){
    	$transport_movers_custom_css .='.frame{';
			$transport_movers_custom_css .='display:none;';
		$transport_movers_custom_css .='} ';
	}
    if($transport_movers_preloader == true){
    	$transport_movers_custom_css .='@media screen and (max-width:575px) {';
		$transport_movers_custom_css .='.frame{';
			$transport_movers_custom_css .='display:block;';
		$transport_movers_custom_css .='} }';
	}else if($transport_movers_preloader == false){
		$transport_movers_custom_css .='@media screen and (max-width:575px){';
		$transport_movers_custom_css .='.frame{';
			$transport_movers_custom_css .='display:none;';
		$transport_movers_custom_css .='} }';
	}

	$transport_movers_fixed_header = get_theme_mod( 'transport_movers_display_fixed_header',true);
    if($transport_movers_fixed_header == true){
    	$transport_movers_custom_css .='@media screen and (max-width:575px) {';
		$transport_movers_custom_css .='.fixed-header{';
			$transport_movers_custom_css .='display:block;';
		$transport_movers_custom_css .='} }';
	}else if($transport_movers_fixed_header == false){
		$transport_movers_custom_css .='@media screen and (max-width:575px) {';
		$transport_movers_custom_css .='.fixed-header{';
			$transport_movers_custom_css .='display:none;';
		$transport_movers_custom_css .='} }';
	}

	//  comment form width
	$transport_movers_comment_form_width = get_theme_mod( 'transport_movers_comment_form_width');
	$transport_movers_custom_css .='#comments textarea{';
		$transport_movers_custom_css .='width: '.esc_attr($transport_movers_comment_form_width).'%;';
	$transport_movers_custom_css .='}';

	$transport_movers_title_comment_form = get_theme_mod('transport_movers_title_comment_form', 'Leave a Reply');
	if($transport_movers_title_comment_form == ''){
		$transport_movers_custom_css .='#comments h2#reply-title {';
			$transport_movers_custom_css .='display: none;';
		$transport_movers_custom_css .='}';
	}

	$transport_movers_comment_form_button_content = get_theme_mod('transport_movers_comment_form_button_content', 'Post Comment');
	if($transport_movers_comment_form_button_content == ''){
		$transport_movers_custom_css .='#comments p.form-submit {';
			$transport_movers_custom_css .='display: none;';
		$transport_movers_custom_css .='}';
	}

	// slider height
	$transport_movers_option_slider_height = get_theme_mod('transport_movers_option_slider_height');
	$transport_movers_custom_css .='#slider img{';
		$transport_movers_custom_css .='height: '.esc_attr($transport_movers_option_slider_height).'px;';
	$transport_movers_custom_css .='}';

	// site title font size
	$transport_movers_site_title_font_size = get_theme_mod('transport_movers_site_title_font_size', 30);
	$transport_movers_custom_css .='#header .logo a{';
	$transport_movers_custom_css .='font-size: '.esc_attr($transport_movers_site_title_font_size).'px;';
	$transport_movers_custom_css .='}';

	// slider condition
	$transport_movers_slider_hide = get_theme_mod( 'transport_movers_slider_hide', false);
	if($transport_movers_slider_hide == false){
    	$transport_movers_custom_css .='.page-template-custom-home-page #header{';
			$transport_movers_custom_css .='position:static !important;';
		$transport_movers_custom_css .='} ';
	}

	// site tagline font size
	$transport_movers_site_tagline_font_size = get_theme_mod('transport_movers_site_tagline_font_size', 13);
	$transport_movers_custom_css .='#header .logo p{';
	$transport_movers_custom_css .='font-size: '.esc_attr($transport_movers_site_tagline_font_size).'px;';
	$transport_movers_custom_css .='}';

	/*------------------ Skin Option  -------------------*/
	$transport_movers_theme_lay = get_theme_mod( 'transport_movers_background_skin','Without Background');
    if($transport_movers_theme_lay == 'With Background'){
		$transport_movers_custom_css .='.inner-service, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .search-cat-box, .login-box a, .front-page-content, .background-img-skin, .content-box{';
			$transport_movers_custom_css .='background-color: #fff; padding:10px !important;';
		$transport_movers_custom_css .='}';
	}else if($transport_movers_theme_lay == 'Without Background'){
		$transport_movers_custom_css .='.mainbox{';
			$transport_movers_custom_css .='background-color: transparent;';
		$transport_movers_custom_css .='}';
	}

	// slider overlay
	$transport_movers_enable_slider_overlay = get_theme_mod('transport_movers_enable_slider_overlay', true);
	if($transport_movers_enable_slider_overlay == false){
		$transport_movers_custom_css .='#slider img{';
			$transport_movers_custom_css .='opacity:1;';
		$transport_movers_custom_css .='}';
	} 
	$transport_movers_slider_overlay_color = get_theme_mod('transport_movers_slider_overlay_color', true);
	if($transport_movers_enable_slider_overlay != false){
		$transport_movers_custom_css .='#slider{';
			$transport_movers_custom_css .='background-color: '.esc_attr($transport_movers_slider_overlay_color).';';
		$transport_movers_custom_css .='}';
	}

	// woocommerce Product Navigation
	$transport_movers_wooproducts_nav = get_theme_mod('transport_movers_wooproducts_nav', 'Yes');
	if($transport_movers_wooproducts_nav == 'No'){
		$transport_movers_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$transport_movers_custom_css .='display: none;';
		$transport_movers_custom_css .='}';
	}
	
