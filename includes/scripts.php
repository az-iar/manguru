<?php 
function manguru_scripts(){
	/* jQuery */
	wp_enqueue_script( 'jquery' );
	
	/* Bootstrap */
	wp_enqueue_script( 'bootstrap', 'http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js', array('jquery'), '3.0.2', true );

	/* DotDotDot */
	wp_enqueue_script( 'dotdotdot', get_stylesheet_directory_uri().'/js/jquery.dotdotdot.min.js', array('jquery'), '1.6.7', true );

	/* Manguru */
	wp_enqueue_script( 'main', get_stylesheet_directory_uri().'/js/main.js', array('jquery','bootstrap'), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'manguru_scripts' );
 ?>