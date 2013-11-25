<?php 
function manguru_stylesheets(){
	/* Bootstrap */
	wp_enqueue_style( 'bootstrap', 'http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css', array(), '3.0.2' );
	wp_enqueue_style( 'bootstrap-theme', 'http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css', array('bootstrap'), '3.0.2' );

	/* Manguru */
	wp_enqueue_style( 'main', get_stylesheet_directory_uri().'/css/main.css', array('bootstrap','bootstrap-theme'), '1.0' );
}

add_action( 'wp_enqueue_scripts', 'manguru_stylesheets' );
 ?>