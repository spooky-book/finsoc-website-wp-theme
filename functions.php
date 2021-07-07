<?php
/**
 * Theme functions and definitions
 *
 * @package Busiway
 */

if ( ! function_exists( 'busiway_enqueue_styles' ) ) :

	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function busiway_enqueue_styles() {

		wp_enqueue_style( 'consultup-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'busiway-style', get_stylesheet_directory_uri() . '/style.css', array( 'consultup-style-parent' ), time() );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style( 'busiway-default-css', get_stylesheet_directory_uri()."/css/colors/default.css" , array() , time() );
		wp_dequeue_style( 'default',get_template_directory_uri() .'/css/colors/default.css');
	}

endif;

add_action( 'wp_enqueue_scripts', 'busiway_enqueue_styles', 99 );

// normal css inclusion below
if (! function_exists('custom_css')) {
	function custom_css() {
		wp_enqueue_style('general_style', 		get_stylesheet_directory_uri() .'/css/general.css', array() , time() );
		wp_enqueue_style('about-us_style', 		get_stylesheet_directory_uri() .'/css/about-us.css', array() , time() );
		wp_enqueue_style('events_style', 		get_stylesheet_directory_uri() .'/css/events.css', array() , time() );
		wp_enqueue_style('newsletters_style', 	get_stylesheet_directory_uri() .'/css/newsletters.css', array() , time() );
		wp_enqueue_style('sponsorship_style', 	get_stylesheet_directory_uri() .'/css/sponsorship.css', array() , time() );
		wp_enqueue_style('SponsorsList_style', 	get_stylesheet_directory_uri() .'/css/SponsorsList.css', array() , time() );
		wp_enqueue_style('Tile_style', 			get_stylesheet_directory_uri() .'/css/Tile.css', array() , time() );
		wp_enqueue_style('fontawesome', 		get_stylesheet_directory_uri() .'/fonts/fontawesome-free-5.15.2-web/css/all.min.css', array(), '5.15.2' );		
	}
}

add_action( 'wp_enqueue_scripts', 'custom_css', 99);

// minified css inclusion below
// if (! function_exists('custom_css_minified')) {
// 	function custom_css_minified() {
// 		wp_enqueue_style('general_style', 		get_stylesheet_directory_uri() .'/css/min/general.min.css', array() , time() );
// 		wp_enqueue_style('about-us_style', 		get_stylesheet_directory_uri() .'/css/min/about-us.min.css', array() , time() );
// 		wp_enqueue_style('events_style', 		get_stylesheet_directory_uri() .'/css/min/events.min.css', array() , time() );
// 		wp_enqueue_style('newsletters_style', 	get_stylesheet_directory_uri() .'/css/min/newsletters.min.css', array() , time() );
// 		wp_enqueue_style('sponsorship_style', 	get_stylesheet_directory_uri() .'/css/min/sponsorship.min.css', array() , time() );
// 		wp_enqueue_style('SponsorsList_style', 	get_stylesheet_directory_uri() .'/css/min/SponsorsList.min.css', array() , time() );
// 		wp_enqueue_style('Tile_style', 			get_stylesheet_directory_uri() .'/css/min/Tile.min.css', array() , time() );
// 		wp_enqueue_style('fontawesome', 		get_stylesheet_directory_uri() .'/fonts/fontawesome-free-5.15.2-web/css/all.min.css', array(), '5.15.2' );		
// 	}
// }

// add_action( 'wp_enqueue_scripts', 'custom_css_minified', 99);

// javascript inclusion is here
function enqueue_custom_javascript() {
	wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri() . "/js/custom.js", array(), time() );
}

add_action( "wp_enqueue_scripts", "enqueue_custom_javascript", 99 );

function busiway_customizer_rid_values($wp_customize) {

  $wp_customize->remove_section('header_widget_one');
  $wp_customize->remove_section('header_widget_two');
  $wp_customize->remove_section('header_widget_three');
}

add_action( 'customize_register', 'busiway_customizer_rid_values', 1000 );

// if someone tries to find out the usernames of users through using ?author tag in URI they will be redirected back to the home page
// this rule does not apply if you are a logged in admin
function redirect_to_home_if_author_parameter() {
	$is_author_set = get_query_var('author', '');
	if ($is_author_set != '' && !is_admin()) {
		wp_redirect(home_url(), 301);
		exit;
	}
}

add_action('template_redirect', 'redirect_to_home_if_author_parameter');

// removes usernames from rest_endpoints for security purposes
function disable_rest_endpoints ( $endpoints ) {
	if ( isset( $endpoints['/wp/v2/users'] ) ) {
		unset( $endpoints['/wp/v2/users'] );
	}
	
	if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
	        unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
	}

	return $endpoints;
}

add_filter( 'rest_endpoints', 'disable_rest_endpoints');
