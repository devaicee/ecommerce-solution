<?php

	$ecommerce_solution_first_color = get_theme_mod('ecommerce_solution_first_color');

	$custom_css ='';
	/*------------ Global First Color -----------*/

	if($ecommerce_solution_first_color != false){
		$custom_css .='input[type="submit"], .topbar p, .login-box i, .menu-header, span.cart-value, .primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .blog-section h2:after, #comments input[type="submit"].submit, #comments a.comment-reply-link:hover, #comments a.comment-reply-link, #sidebar h3:after, #sidebar input[type="submit"]:hover, #sidebar .tagcloud a:hover, .footer-wp .tagcloud a:hover, .widget_calendar tbody a, .page-content .read-moresec a.button, .copyright-wrapper, .footer-wp h3:after, .footer-wp input[type="submit"] , .pagination a:hover, .pagination .current, .more-btn a:hover, #scrollbutton i, .footer-wp input[type="submit"], .footer-wp button, #sidebar button, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{';
			$custom_css .='background-color: '.esc_html($ecommerce_solution_first_color).';';
		$custom_css .='}';
	}
	if($ecommerce_solution_first_color != false){
		$custom_css .='a , td.product-name a:hover, a.shipping-calculator-button:hover, .postbtn a:hover, .blog-section h2 a:hover, .metabox a:hover, nav.navigation.post-navigation a:hover, #sidebar ul li a:hover, .footer-wp h3, .footer-wp li a:hover, #sidebar .textwidget p a:hover, .nav-previous a:hover ,.nav-next a:hover, .footer-wp .textwidget p a, .footer-wp a.rsswidget{';
			$custom_css .='color: '.esc_html($ecommerce_solution_first_color).';';
		$custom_css .='}';
	}
	if($ecommerce_solution_first_color != false){
		$custom_css .='#blog_sec .sticky, .page-content .read-moresec a.button, #slider .carousel-content, #scrollbutton i{';
				$custom_css .='border-color: '.esc_html($ecommerce_solution_first_color).';';
		$custom_css .='}';
	}
	if($ecommerce_solution_first_color != false){
		$custom_css .='.copyright-wrapper{';
				$custom_css .='border-top-color: '.esc_html($ecommerce_solution_first_color).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/
	$ecommerce_solution_theme_lay = get_theme_mod( 'ecommerce_solution_width_layout_options','Default');
    if($ecommerce_solution_theme_lay == 'Default'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}else if($ecommerce_solution_theme_lay == 'Container Layout'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($ecommerce_solution_theme_lay == 'Box Layout'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/
	$ecommerce_solution_theme_lay = get_theme_mod( 'ecommerce_solution_slider_content_layout','Left');
    if($ecommerce_solution_theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn {';
			$custom_css .='text-align:left; left:15%; right:40%;';
		$custom_css .='}';
	}else if($ecommerce_solution_theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$custom_css .='text-align:center; left:30%; right:30%;';
		$custom_css .='}';
	}else if($ecommerce_solution_theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn {';
			$custom_css .='text-align:right; left:40%; right:15%;';
		$custom_css .='}';
	}

	/*------------ Slider Opacity -------------------*/
	$ecommerce_solution_theme_lay = get_theme_mod( 'ecommerce_solution_slider_opacity','0.7');
	if($ecommerce_solution_theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($ecommerce_solution_theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($ecommerce_solution_theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($ecommerce_solution_theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($ecommerce_solution_theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($ecommerce_solution_theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($ecommerce_solution_theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($ecommerce_solution_theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($ecommerce_solution_theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($ecommerce_solution_theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

		/*-------------- Footer Text -------------------*/
		$ecommerce_solution_footer_text_align = get_theme_mod('ecommerce_solution_footer_text_align');
		if($ecommerce_solution_footer_text_align != false){
			$custom_css .='.copyright-wrapper{';
				$custom_css .='text-align: '.esc_html($ecommerce_solution_footer_text_align).';';
			$custom_css .='}';
		}

		$ecommerce_solution_footer_text_padding = get_theme_mod('ecommerce_solution_footer_text_padding');
		if($ecommerce_solution_footer_text_padding != false){
			$custom_css .='.copyright-wrapper{';
				$custom_css .='padding-top: '.esc_html($ecommerce_solution_footer_text_padding).'px; padding-bottom: '.esc_html($ecommerce_solution_footer_text_padding).'px;';
			$custom_css .='}';
		}

		$ecommerce_solution_footer_bg_color = get_theme_mod('ecommerce_solution_footer_bg_color');
		if($ecommerce_solution_footer_bg_color != false){
			$custom_css .='.footer-wp{';
				$custom_css .='background-color: '.esc_html($ecommerce_solution_footer_bg_color).';';
			$custom_css .='}';
		}

		$ecommerce_solution_footer_bg_image = get_theme_mod('ecommerce_solution_footer_bg_image');
		if($ecommerce_solution_footer_bg_image != false){
			$custom_css .='.footer-wp{';
				$custom_css .='background: url('.esc_html($ecommerce_solution_footer_bg_image).');';
			$custom_css .='}';
		}

		$ecommerce_solution_copyright_text_font_size = get_theme_mod('ecommerce_solution_copyright_text_font_size', 15);
		if($ecommerce_solution_copyright_text_font_size != false){
			$custom_css .='.copyright-wrapper p, .copyright-wrapper a{';
				$custom_css .='font-size: '.esc_html($ecommerce_solution_copyright_text_font_size).'px;';
			$custom_css .='}';
		}

		/*------------- Back to Top  -------------------*/
		$ecommerce_solution_back_to_top_border_radius = get_theme_mod('ecommerce_solution_back_to_top_border_radius');
		if($ecommerce_solution_back_to_top_border_radius != false){
			$custom_css .='#scrollbutton i{';
				$custom_css .='border-radius: '.esc_html($ecommerce_solution_back_to_top_border_radius).'px;';
			$custom_css .='}';
		}

		$ecommerce_solution_scroll_icon_font_size = get_theme_mod('ecommerce_solution_scroll_icon_font_size', 22);
		if($ecommerce_solution_scroll_icon_font_size != false){
			$custom_css .='#scrollbutton i{';
				$custom_css .='font-size: '.esc_html($ecommerce_solution_scroll_icon_font_size).'px;';
			$custom_css .='}';
		}

		$ecommerce_solution_top_bottom_scroll_padding = get_theme_mod('ecommerce_solution_top_bottom_scroll_padding', 12);
		if($ecommerce_solution_top_bottom_scroll_padding != false){
			$custom_css .='#scrollbutton i{';
				$custom_css .='padding-top: '.esc_html($ecommerce_solution_top_bottom_scroll_padding).'px; padding-bottom: '.esc_html($ecommerce_solution_top_bottom_scroll_padding).'px;';
			$custom_css .='}';
		}

		$ecommerce_solution_left_right_scroll_padding = get_theme_mod('ecommerce_solution_left_right_scroll_padding', 17);
		if($ecommerce_solution_left_right_scroll_padding != false){
			$custom_css .='#scrollbutton i{';
				$custom_css .='padding-left: '.esc_html($ecommerce_solution_left_right_scroll_padding).'px; padding-right: '.esc_html($ecommerce_solution_left_right_scroll_padding).'px;';
			$custom_css .='}';
		}

		/*-------------- Post Button  -------------------*/
		$ecommerce_solution_post_button_padding_top = get_theme_mod('ecommerce_solution_post_button_padding_top');
		if($ecommerce_solution_post_button_padding_top != false){
			$custom_css .='.more-btn a, .postbtn a, #comments input[type="submit"].submit{';
				$custom_css .='padding-top: '.esc_html($ecommerce_solution_post_button_padding_top).'px; padding-bottom: '.esc_html($ecommerce_solution_post_button_padding_top).'px;';
			$custom_css .='}';
		}

		$ecommerce_solution_post_button_padding_right = get_theme_mod('ecommerce_solution_post_button_padding_right');
		if($ecommerce_solution_post_button_padding_right != false){
			$custom_css .='.postbtn a, #comments input[type="submit"].submit{';
				$custom_css .='padding-left: '.esc_html($ecommerce_solution_post_button_padding_right).'px; padding-right: '.esc_html($ecommerce_solution_post_button_padding_right).'px;';
			$custom_css .='}';
		}

		$ecommerce_solution_post_button_border_radius = get_theme_mod('ecommerce_solution_post_button_border_radius');
		if($ecommerce_solution_post_button_border_radius != false){
			$custom_css .='.more-btn a, .postbtn a, #comments input[type="submit"].submit{';
				$custom_css .='border-radius: '.esc_html($ecommerce_solution_post_button_border_radius).'px;';
			$custom_css .='}';
		}

		$ecommerce_solution_post_comment_enable = get_theme_mod('ecommerce_solution_post_comment_enable',true);

		if($ecommerce_solution_post_comment_enable == false){
			$custom_css .='#comments{';
				$custom_css .='display: none;';
			$custom_css .='}';
		}

		/*----------- Preloader Color Option  ----------------*/
		$ecommerce_solution_preloader_bg_color_option = get_theme_mod('ecommerce_solution_preloader_bg_color_option');
		$ecommerce_solution_preloader_icon_color_option = get_theme_mod('ecommerce_solution_preloader_icon_color_option');
		if($ecommerce_solution_preloader_bg_color_option != false){
			$custom_css .='.frame{';
				$custom_css .='background-color: '.esc_html($ecommerce_solution_preloader_bg_color_option).';';
			$custom_css .='}';
		}
		if($ecommerce_solution_preloader_icon_color_option != false){
			$custom_css .='.dot-1,.dot-2,.dot-3{';
				$custom_css .='background-color: '.esc_html($ecommerce_solution_preloader_icon_color_option).';';
			$custom_css .='}';
		}

		// preloader type
		$ecommerce_solution_theme_lay = get_theme_mod( 'ecommerce_solution_preloader_type','First Preloader Type');
	    if($ecommerce_solution_theme_lay == 'First Preloader Type'){
			$custom_css .='.dot-1, .dot-2, .dot-3{';
				$custom_css .='';
			$custom_css .='}';
		}else if($ecommerce_solution_theme_lay == 'Second Preloader Type'){
			$custom_css .='.dot-1, .dot-2, .dot-3{';
				$custom_css .='border-radius:0;';
			$custom_css .='}';
		}

		/*------------------ Skin Option  -------------------*/
		$ecommerce_solution_theme_lay = get_theme_mod( 'ecommerce_solution_background_skin','With Background');
	    if($ecommerce_solution_theme_lay == 'With Background'){
			$custom_css .='.inner-service,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.search-cat-box,.login-box a,.front-page-content,.background-img-skin{';
				$custom_css .='background-color: #fff;';
			$custom_css .='}';
		}else if($ecommerce_solution_theme_lay == 'Without Background'){
			$custom_css .='{';
				$custom_css .='background-color: transparent;';
			$custom_css .='}';
		}

		/*-------------- Woocommerce Button  -------------------*/
		$ecommerce_solution_woocommerce_button_padding_top = get_theme_mod('ecommerce_solution_woocommerce_button_padding_top',15);
		if($ecommerce_solution_woocommerce_button_padding_top != false){
			$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
				$custom_css .='padding-top: '.esc_html($ecommerce_solution_woocommerce_button_padding_top).'px; padding-bottom: '.esc_html($ecommerce_solution_woocommerce_button_padding_top).'px;';
			$custom_css .='}';
		}

		$ecommerce_solution_woocommerce_button_padding_right = get_theme_mod('ecommerce_solution_woocommerce_button_padding_right',15);
		if($ecommerce_solution_woocommerce_button_padding_right != false){
			$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
				$custom_css .='padding-left: '.esc_html($ecommerce_solution_woocommerce_button_padding_right).'px; padding-right: '.esc_html($ecommerce_solution_woocommerce_button_padding_right).'px;';
			$custom_css .='}';
		}

		$ecommerce_solution_woocommerce_button_border_radius = get_theme_mod('ecommerce_solution_woocommerce_button_border_radius',30);
		if($ecommerce_solution_woocommerce_button_border_radius != false){
			$custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
				$custom_css .='border-radius: '.esc_html($ecommerce_solution_woocommerce_button_border_radius).'px;';
			$custom_css .='}';
		}

		$ecommerce_solution_related_product_enable = get_theme_mod('ecommerce_solution_related_product_enable',true);

		if($ecommerce_solution_related_product_enable == false){
			$custom_css .='.related.products{';
				$custom_css .='display: none;';
			$custom_css .='}';
		}

		$ecommerce_solution_woocommerce_product_border_enable = get_theme_mod('ecommerce_solution_woocommerce_product_border_enable',true);

		if($ecommerce_solution_woocommerce_product_border_enable == false){
			$custom_css .='.products li{';
				$custom_css .='border: none;';
			$custom_css .='}';
		}

		$ecommerce_solution_woocommerce_product_padding_top = get_theme_mod('ecommerce_solution_woocommerce_product_padding_top',10);
		if($ecommerce_solution_woocommerce_product_padding_top != false){
			$custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$custom_css .='padding-top: '.esc_html($ecommerce_solution_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_html($ecommerce_solution_woocommerce_product_padding_top).'px !important;';
			$custom_css .='}';
		}

		$ecommerce_solution_woocommerce_product_padding_right = get_theme_mod('ecommerce_solution_woocommerce_product_padding_right',10);
		if($ecommerce_solution_woocommerce_product_padding_right != false){
			$custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$custom_css .='padding-left: '.esc_html($ecommerce_solution_woocommerce_product_padding_right).'px !important; padding-right: '.esc_html($ecommerce_solution_woocommerce_product_padding_right).'px !important;';
			$custom_css .='}';
		}

		$ecommerce_solution_woocommerce_product_border_radius = get_theme_mod('ecommerce_solution_woocommerce_product_border_radius',3);
		if($ecommerce_solution_woocommerce_product_border_radius != false){
			$custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$custom_css .='border-radius: '.esc_html($ecommerce_solution_woocommerce_product_border_radius).'px;';
			$custom_css .='}';
		}

		$ecommerce_solution_woocommerce_product_box_shadow = get_theme_mod('ecommerce_solution_woocommerce_product_box_shadow', 5);
		if($ecommerce_solution_woocommerce_product_box_shadow != false){
			$custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$custom_css .='box-shadow: '.esc_html($ecommerce_solution_woocommerce_product_box_shadow).'px '.esc_html($ecommerce_solution_woocommerce_product_box_shadow).'px '.esc_html($ecommerce_solution_woocommerce_product_box_shadow).'px #eee;';
			$custom_css .='}';
		}

	// Responsive Media
	$ecommerce_solution_sliderbutton = get_theme_mod( 'ecommerce_solution_display_slider',true);
	if($ecommerce_solution_sliderbutton == true && get_theme_mod( 'ecommerce_solution_slider_hide') == false){
    	$custom_css .='#slider{';
			$custom_css .='display:none;';
		$custom_css .='} ';
	}
    if($ecommerce_solution_sliderbutton == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#slider{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($ecommerce_solution_sliderbutton == false){
		$custom_css .='@media screen and (max-width:575px){';
		$custom_css .='#slider{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$ecommerce_solution_sliderbutton = get_theme_mod( 'ecommerce_solution_display_slider_button',true);
	if($ecommerce_solution_sliderbutton == true && get_theme_mod( 'ecommerce_solution_show_slider_button',true) != true){
    	$custom_css .='.more-btn{';
			$custom_css .='display:none;';
		$custom_css .='} ';
	}
    if($ecommerce_solution_sliderbutton == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.more-btn{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($ecommerce_solution_sliderbutton == false){
		$custom_css .='@media screen and (max-width:575px){';
		$custom_css .='.more-btn{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$ecommerce_solution_sidebar = get_theme_mod( 'ecommerce_solution_display_sidebar',true);
    if($ecommerce_solution_sidebar == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#sidebar{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($ecommerce_solution_sidebar == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#sidebar{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$ecommerce_solution_sliderbutton = get_theme_mod( 'ecommerce_solution_display_scrolltop',true);
	if($ecommerce_solution_sliderbutton == true && get_theme_mod( 'ecommerce_solution_hide_show_scroll',true) != true){
    	$custom_css .='#scrollbutton i{';
			$custom_css .='display:none;';
		$custom_css .='} ';
	}
    if($ecommerce_solution_sliderbutton == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#scrollbutton i{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($ecommerce_solution_sliderbutton == false){
		$custom_css .='@media screen and (max-width:575px){';
		$custom_css .='#scrollbutton i{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$ecommerce_solution_sliderbutton = get_theme_mod( 'ecommerce_solution_display_preloader',true);
	if($ecommerce_solution_sliderbutton == true && get_theme_mod( 'ecommerce_solution_preloader',true) != true){
    	$custom_css .='.frame{';
			$custom_css .='display:none;';
		$custom_css .='} ';
	}
    if($ecommerce_solution_sliderbutton == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.frame{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($ecommerce_solution_sliderbutton == false){
		$custom_css .='@media screen and (max-width:575px){';
		$custom_css .='.frame{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$ecommerce_solution_sliderbutton = get_theme_mod( 'ecommerce_solution_display_fixed_header',true);
	if($ecommerce_solution_sliderbutton == true && get_theme_mod( 'ecommerce_solution_sticky_header',true) != true){
    	$custom_css .='.fixed-header{';
			$custom_css .='display:none;';
		$custom_css .='} ';
	}
    if($ecommerce_solution_sliderbutton == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.fixed-header{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($ecommerce_solution_sliderbutton == false){
		$custom_css .='@media screen and (max-width:575px){';
		$custom_css .='.fixed-header{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	// menu settings
	$ecommerce_solution_menu_font_size_option = get_theme_mod('ecommerce_solution_menu_font_size_option');
	if($ecommerce_solution_menu_font_size_option != false){
		$custom_css .='.primary-navigation a{';
			$custom_css .='font-size: '.esc_html($ecommerce_solution_menu_font_size_option).'px;';
		$custom_css .='}';
	}

	$ecommerce_solution_theme_lay = get_theme_mod( 'ecommerce_solution_text_tranform_menu','Uppercase');
    if($ecommerce_solution_theme_lay == 'Uppercase'){
		$custom_css .='.primary-navigation a{';
			$custom_css .='';
		$custom_css .='}';
	}else if($ecommerce_solution_theme_lay == 'Lowercase'){
		$custom_css .='.primary-navigation a{';
			$custom_css .='text-transform: lowercase;';
		$custom_css .='}';
	}
	else if($ecommerce_solution_theme_lay == 'Capitalize'){
		$custom_css .='.primary-navigation a{';
			$custom_css .='text-transform: Capitalize;';
		$custom_css .='}';
	}

	$ecommerce_solution_theme_lay = get_theme_mod( 'ecommerce_solution_font_weight_option_menu','Bold');
    if($ecommerce_solution_theme_lay == 'Bold'){
		$custom_css .='.primary-navigation a{';
			$custom_css .='font-weight:bold;';
		$custom_css .='}';
	}else if($ecommerce_solution_theme_lay == 'Normal'){
		$custom_css .='.primary-navigation a{';
			$custom_css .='font-weight: normal;';
		$custom_css .='}';
	}

	// slider height
	$ecommerce_solution_option_slider_height = get_theme_mod('ecommerce_solution_option_slider_height');
	if($ecommerce_solution_option_slider_height != false){
		$custom_css .='#slider img{';
			$custom_css .='height: '.esc_html($ecommerce_solution_option_slider_height).'px;';
		$custom_css .='}';
	}





	
	



