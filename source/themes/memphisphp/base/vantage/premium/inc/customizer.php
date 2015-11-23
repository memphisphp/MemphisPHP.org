<?php

function vantage_customizer_init(){

	$sections = apply_filters( 'vantage_premium_customizer_sections', array(
		'vantage_fonts' => array(
			'title' => __('Fonts', 'vantage'),
			'priority' => 30,
		),

		'vantage_general' => array(
			'title' => __('General', 'vantage'),
			'priority' => 40,
		),

		'vantage_menu' => array(
			'title' => __('Menu', 'vantage'),
			'priority' => 50,
		),

		'vantage_widgets' => array(
			'title' => __('Widgets', 'vantage'),
			'priority' => 52,
		),

		'vantage_page' => array(
			'title' => __('Page', 'vantage'),
			'priority' => 55,
		),

		'vantage_sidebar' => array(
			'title' => __('Sidebar', 'vantage'),
			'priority' => 90,
		),

		'vantage_footer' => array(
			'title' => __('Footer', 'vantage'),
			'priority' => 100,
		),

	) );

	$settings = apply_filters( 'vantage_premium_customizer_settings', array(
		// Fonts

		'vantage_fonts' => array(

			'body_font' => array(
				'type' => 'font',
				'title' => __('Body Font', 'vantage'),
				'default' => 'Helvetica Neue',
				'selector' => 'body,button,input,select,textarea',
			),

			'title_font' => array(
				'type' => 'font',
				'title' => __('Site Title Font', 'vantage'),
				'default' => 'Helvetica Neue',
				'selector' => '#masthead h1',
			),

			'heading_font' => array(
				'type' => 'font',
				'title' => __('Heading Font', 'vantage'),
				'default' => 'Helvetica Neue',
				'selector' => 'h1,h2,h3,h4,h5,h6',
			),

			// Font sizes

			'page_title_size' => array(
				'type' => 'measurement',
				'title' => __('Page Title Size', 'vantage'),
				'default' => 20,
				'unit' => 'px',
				'selector' => '#page-title, article.post .entry-header h1.entry-title, article.page .entry-header h1.entry-title',
				'property' => array('font-size'),
			),

			'page_title_color' => array(
				'type' => 'color',
				'title' => __('Page Title Color', 'vantage'),
				'default' => '#3b3b3b',
				'selector' => '#page-title, article.post .entry-header h1.entry-title, article.page .entry-header h1.entry-title',
				'property' => array('color'),
			),

			'content_size' => array(
				'type' => 'measurement',
				'title' => __('Content Size', 'vantage'),
				'default' => 13,
				'unit' => 'px',
				'selector' => '.entry-content',
				'property' => array('font-size'),
			),

			'content_color' => array(
				'type' => 'color',
				'title' => __('Content Color', 'vantage'),
				'default' => '#666666',
				'selector' => '.entry-content',
				'property' => array('color'),
			),

			'content_heading_color' => array(
				'type' => 'color',
				'title' => __('Content Heading Color', 'vantage'),
				'default' => '#444444',
				'selector' => '.entry-content h1,.entry-content h2,.entry-content h3,.entry-content h4,.entry-content h5,.entry-content h6',
				'property' => array('color'),
			),

		),

		'vantage_general' => array(

			'header_padding' => array(
				'type' => 'measurement',
				'title' => __('Header Padding', 'vantage'),
				'default' => 45,
				'unit' => 'px',
				'selector' => '#masthead .hgroup',
				'property' => array('padding-top', 'padding-bottom'),
			),

			'logo_centered' => array(
				'type' => 'checkbox',
				'title' => __('Center Logo', 'vantage'),
				'default' => false,
				'callback' => 'vantage_customizer_callback_logo_center',
			),

			'link_color' => array(
				'type' => 'color',
				'title' => __('Content Link Color', 'vantage'),
				'default' => '#248cc8',
				'selector' => '.entry-content a, .entry-content a:visited, #secondary a, #secondary a:visited, #masthead .hgroup a, #masthead .hgroup a:visited',
				'property' => 'color',
				'no_live' => true,
			),

			'link_hover_color' => array(
				'type' => 'color',
				'title' => __('Content Link Hover Color', 'vantage'),
				'default' => '#f47e3c',
				'selector' => '.entry-content a:hover, .entry-content a:focus, .entry-content a:active, #secondary a:hover, #masthead .hgroup a:hover, #masthead .hgroup a:focus, #masthead .hgroup a:active',
				'property' => 'color',
				'no_live' => true,
			),

		),

		// The main menu

		'vantage_menu' => array(

			'menu_alignment' => array(
				'type' => 'select',
				'title' => __('Menu Alignment', 'vantage'),
				'default' => 'left',
				'selector' => '.main-navigation ul',
				'property' => 'text-align',
				'choices' => array(
					'left' => __( 'Left', 'vantage' ),
					'right' => __( 'Right', 'vantage' ),
					'center' => __( 'Center', 'vantage' ),
				),
			),

			'background' => array(
				'type' => 'color',
				'title' => __('Background', 'vantage'),
				'default' => '#343538',
				'selector' => '.main-navigation',
				'property' => 'background-color',
			),

			'text' => array(
				'type' => 'color',
				'title' => __('Text Color', 'vantage'),
				'default' => '#e2e2e2',
				'selector' => '.main-navigation a',
				'property' => 'color',
			),

			'second_background' => array(
				'type' => 'color',
				'title' => __('Second Level Background', 'vantage'),
				'default' => '#464646',
				'selector' => '.main-navigation ul ul',
				'property' => 'background-color',
			),

			'second_text' => array(
				'type' => 'color',
				'title' => __('Second Level Text', 'vantage'),
				'default' => '#e2e2e2',
				'selector' => '.main-navigation ul ul a',
				'property' => 'color',
			),

			'hover_background' => array(
				'type' => 'color',
				'title' => __('Hover Background', 'vantage'),
				'default' => '#00bcff',
				'selector' => '.main-navigation ul li:hover > a, #search-icon #search-icon-icon:hover',
				'property' => 'background-color',
				'no_live' => true,
			),

			'hover_text' => array(
				'type' => 'color',
				'title' => __('Hover Text', 'vantage'),
				'default' => '#ffffff',
				'selector' => '.main-navigation ul li:hover > a, .main-navigation ul li:hover > a [class^="fa fa-"]',
				'property' => 'color',
				'no_live' => true,
			),

			'hover_background_second' => array(
				'type' => 'color',
				'title' => __('Second Level Hover', 'vantage'),
				'default' => '#00bcff',
				'selector' => '.main-navigation ul ul li:hover > a',
				'property' => 'background-color',
				'no_live' => true,
			),

			'hover_text_second' => array(
				'type' => 'color',
				'title' => __('Second Level Hover Text', 'vantage'),
				'default' => '#ffffff',
				'selector' => '.main-navigation ul ul li:hover > a',
				'property' => 'color',
				'no_live' => true,
			),

			'icon_color' => array(
				'type' => 'color',
				'title' => __('Icon Color', 'vantage'),
				'default' => '#cccccc',
				'selector' => '.main-navigation [class^="fa fa-"], .main-navigation .mobile-nav-icon',
				'property' => 'color',
			),

			'icon_hover_color' => array(
				'type' => 'color',
				'title' => __('Icon Hover Color', 'vantage'),
				'default' => '#ffffff',
				'selector' => '.main-navigation ul li:hover > a [class^="fa fa-"], .main-navigation ul li:hover > a .mobile-nav-icon',
				'property' => 'color',
				'no_live' => true,
			),

			'current_background' => array(
				'type' => 'color',
				'title' => __('Current Page Background', 'vantage'),
				'default' => '#343538',
				'selector' => '.main-navigation ul li.current-menu-item > a, .main-navigation ul li.current_page_item > a ',
				'property' => 'background-color',
				'no_live' => true,
			),

			'current_text' => array(
				'type' => 'color',
				'title' => __('Current Page Text', 'vantage'),
				'default' => '#ffffff',
				'selector' => '.main-navigation ul li.current-menu-item > a, .main-navigation ul li.current-menu-item > a [class^="fa fa-"], .main-navigation ul li.current-page-item > a, .main-navigation ul li.current-page-item > a [class^="fa fa-"]',
				'property' => 'color',
				'no_live' => true,
			),

			'search' => array(
				'type' => 'color',
				'title' => __('Search Icon Background', 'vantage'),
				'default' => '#303134',
				'selector' => '#search-icon #search-icon-icon',
				'property' => 'background-color',
			),

			'search_icon' => array(
				'type' => 'color',
				'title' => __('Search Icon Color', 'vantage'),
				'default' => '#d1d1d1',
				'selector' => '#search-icon #search-icon-icon .vantage-icon-search',
				'property' => 'color',
			),

			'search_icon_hover' => array(
				'type' => 'color',
				'title' => __('Search Icon Hover Color', 'vantage'),
				'default' => '#ffffff',
				'selector' => '#search-icon #search-icon-icon:hover .vantage-icon-search',
				'property' => 'color',
				'no_live' => true,
			),

			'search_input' => array(
				'type' => 'color',
				'title' => __('Search Input Background', 'vantage'),
				'default' => '#2d2e31',
				'selector' => '#search-icon .searchform',
				'property' => 'background-color',
			),

			'search_input_text' => array(
				'type' => 'color',
				'title' => __('Search Input Text', 'vantage'),
				'default' => '#d1d1d1',
				'selector' => '#search-icon .searchform input[name=s]',
				'property' => 'color',
			),

			'topbottom_padding' => array(
				'type' => 'measurement',
				'title' => __('Menu Item Padding (px)', 'vantage'),
				'default' => 20,
				'unit' => 'px',
				'selector' => '.main-navigation ul li a, #masthead.masthead-logo-in-menu .logo',
				'property' => array('padding-top', 'padding-bottom'),
			),

			'font_size' => array(
				'type' => 'measurement',
				'title' => __('Menu Font Size', 'vantage'),
				'default' => 13,
				'unit' => 'px',
				'selector' => '.main-navigation ul li',
				'property' => array('font-size'),
			),

			'widget_menu_border' => array(
				'type' => 'color',
				'title' => __('Header Widget Menu Border Color', 'vantage'),
				'default' => '#00bcff',
				'selector' => '#header-sidebar .widget_nav_menu ul.menu > li > ul.sub-menu',
				'property' => array('border-top-color'),
				'no_live' => true,
			),

		),

		'vantage_widgets' => array(
			'circle_icon_bg' => array(
				'type' => 'color',
				'title' => __('Circle Icon Widget Background', 'vantage'),
				'default' => '#3a3b3e',
				'selector' => '.widget_circleicon-widget .circle-icon-box .circle-icon',
				'property' => 'background-color',
			),

			'circle_icon_icon' => array(
				'type' => 'color',
				'title' => __('Circle Icon Widget Icon', 'vantage'),
				'default' => '#ffffff',
				'selector' => '.widget_circleicon-widget .circle-icon-box .circle-icon [class^="fa fa-"]',
				'property' => 'color',
			),
		),

		'vantage_page' => array(

			'masthead_background' => array(
				'type' => 'color',
				'title' => __('Masthead Background', 'vantage'),
				'default' => '#fcfcfc',
				'selector' => '#masthead',
				'property' => 'background-color',
			),

			'masthead_background_image' => array(
				'type' => 'image',
				'title' => __('Masthead Background Image', 'vantage'),
				'default' => false,
				'selector' => '#masthead',
				'property' => 'background-image',
			),

			'masthead_background_image_layout' => array(
				'type' => 'select',
				'title' => __('Masthead Background Image Layout', 'vantage'),
				'default' => '',
				'selector' => '#masthead',
				'choices' => array(
					'' => __( 'Default', 'vantage' ),
					'center' => __( 'Center', 'vantage' ),
					'tile' => __( 'Tile', 'vantage' ),
					'cover' => __( 'Cover', 'vantage' ),
				),
				'callback' => 'vantage_customizer_callback_image_layout'
			),

			'page_background' => array(
				'type' => 'color',
				'title' => __('Page Background', 'vantage'),
				'default' => '#fcfcfc',
				'selector' => '#main',
				'property' => 'background-color',
			),

			'page_background_image' => array(
				'type' => 'image',
				'title' => __('Page Background Image', 'vantage'),
				'default' => false,
				'selector' => '#main',
				'property' => 'background-image',
			),

			'page_background_image_layout' => array(
				'type' => 'select',
				'title' => __('Page Background Image Layout', 'vantage'),
				'default' => '',
				'selector' => '#main',
				'choices' => array(
					'' => __( 'Default', 'vantage' ),
					'center' => __( 'Center', 'vantage' ),
					'tile' => __( 'Tile', 'vantage' ),
					'cover' => __( 'Cover', 'vantage' ),
				),
				'callback' => 'vantage_customizer_callback_image_layout'
			),

			'image_shadow' => array(
				'type' => 'checkbox',
				'title' => __('Image Shadow and Rounding', 'vantage'),
				'default' => false,
				'callback' => 'vantage_customizer_callback_image_shadow',
			),

		),

		'vantage_footer' => array(

			'background' => array(
				'type' => 'color',
				'title' => __('Footer Background', 'vantage'),
				'default' => '#2f3033',
				'selector' => '#colophon, body.layout-full',
				'property' => 'background-color',
			),

			'background_image' => array(
				'type' => 'image',
				'title' => __('Footer Background Image', 'vantage'),
				'default' => false,
				'selector' => '#colophon',
				'property' => 'background-image',
			),

			'headings' => array(
				'type' => 'color',
				'title' => __('Headings', 'vantage'),
				'default' => '#e2e2e2',
				'selector' => '#footer-widgets .widget .widget-title',
				'property' => 'color',
			),

			'text' => array(
				'type' => 'color',
				'title' => __('Text', 'vantage'),
				'default' => '#b9b9b9',
				'selector' => '#footer-widgets .widget',
				'property' => 'color',
			),

			'links' => array(
				'type' => 'color',
				'title' => __('Link Color', 'vantage'),
				'default' => '#cccccc',
				'selector' => '#footer-widgets .widget a, #footer-widgets .widget a:visited',
				'property' => 'color',
			),

			'link_hover' => array(
				'type' => 'color',
				'title' => __('Link Hover Color', 'vantage'),
				'default' => '#cccccc',
				'selector' => '#footer-widgets .widget a:hover, #footer-widgets .widget a:focus, #footer-widgets .widget a:active',
				'property' => 'color',
			),

			'site_into' => array(
				'type' => 'color',
				'title' => __('Site Info Text', 'vantage'),
				'default' => '#aaaaaa',
				'selector' => '#colophon #theme-attribution, #colophon #site-info',
				'property' => 'color',
			),

			'site_into_link' => array(
				'type' => 'color',
				'title' => __('Site Info Link', 'vantage'),
				'default' => '#dddddd',
				'selector' => '#colophon #theme-attribution a, #colophon #site-info a',
				'property' => 'color',
			),
		),

		'vantage_sidebar' => array(
			'position' => array(
				'type' => 'select',
				'title' => __('Sidebar Position', 'vantage'),
				'default' => 'right',
				'choices' => array(
					'none'   => __( 'None', 'vantage' ),
					'left'   => __( 'Left', 'vantage' ),
					'right'  => __( 'Right', 'vantage' )
				),
				'no_live' => true
			)
		),
	) );

	// Include all the SiteOrigin customizer classes
	global $siteorigin_vantage_customizer;
	$siteorigin_vantage_customizer = new SiteOrigin_Customizer_Helper($settings, $sections, 'vantage');
}
add_action('init', 'vantage_customizer_init');

/**
 * @param WP_Customize_Manager $wp_customize
 */
function vantage_customizer_register($wp_customize){
	global $siteorigin_vantage_customizer;
	$siteorigin_vantage_customizer->customize_register($wp_customize);
}
add_action( 'customize_register', 'vantage_customizer_register', 15 );

/**
 * Display the styles
 */
function vantage_customizer_style() {
	global $siteorigin_vantage_customizer;
	if( empty($siteorigin_vantage_customizer) ) return;

	$builder = $siteorigin_vantage_customizer->create_css_builder();

	// Add any extra CSS customizations
	echo $builder->css();
}
add_action('wp_head', 'vantage_customizer_style', 20);

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 *
 * @return SiteOrigin_Customizer_CSS_Builder
 */
function vantage_customizer_callback_logo_center($builder, $val, $setting){
	if( $val ) {
		$builder->add_css('#masthead .hgroup .logo', 'text-align', 'center');
		$builder->add_css('#masthead .hgroup .logo, #masthead .hgroup .site-logo-link', 'float', 'none');
		$builder->add_css('#masthead .hgroup .logo img, #masthead .hgroup .site-logo-link img', 'display', 'block');
		$builder->add_css('#masthead .hgroup .logo img, #masthead .hgroup .site-logo-link img', 'margin', '0 auto');
	}

	return $builder;
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 *
 * @return SiteOrigin_Customizer_CSS_Builder
 */
function vantage_customizer_callback_image_shadow($builder, $val, $setting){
	if( $val ) {
		$builder->add_css('.entry-content img', '-webkit-border-radius', '3px');
		$builder->add_css('.entry-content img', '-moz-border-radius', '3px');
		$builder->add_css('.entry-content img', 'border-radius', '3px');

		$builder->add_css('.entry-content img', '-webkit-box-shadow', '0 1px 2px rgba(0,0,0,0.175)');
		$builder->add_css('.entry-content img', '-moz-box-shadow', '0 1px 2px rgba(0,0,0,0.175)');
		$builder->add_css('.entry-content img', 'box-shadow', '0 1px 2px rgba(0,0,0,0.175)');
	}

	return $builder;
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 *
 * @return SiteOrigin_Customizer_CSS_Builder
 */
function vantage_customizer_callback_image_layout($builder, $val, $setting){
	if( $val ) {
		if ( $val == 'center' ) {
			$builder->add_css($setting['selector'], 'background-position', 'center');
			$builder->add_css($setting['selector'], 'background-repeat', 'no-repeat');
		}
		else if ( $val == 'tile' ) {
			$builder->add_css($setting['selector'], 'background-repeat', 'repeat');
		}
		else if ( $val == 'cover' ) {
			$builder->add_css($setting['selector'], 'background-size', 'cover');
		}
	}

	return $builder;
}

function vantage_customizer_change_body_class($classes){
	$sidebar_position = get_theme_mod('vantage_sidebar_position');
	if( !empty($sidebar_position) ) {
		$classes[] = 'sidebar-position-' . sanitize_html_class($sidebar_position);
	}

	return $classes;
}
add_filter('body_class', 'vantage_customizer_change_body_class');