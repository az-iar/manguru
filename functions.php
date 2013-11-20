<?php 

/* CSS */
function manguru_stylesheets(){
	/* Bootstrap */
	wp_enqueue_style( 'bootstrap', 'http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css', array(), '3.0.2' );
	wp_enqueue_style( 'bootstrap-theme', 'http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css', array('bootstrap'), '3.0.2' );

	/* Manguru */
	wp_enqueue_style( 'main', get_stylesheet_directory_uri().'/css/main.css', array('bootstrap','bootstrap-theme'), '1.0' );
}

add_action( 'wp_enqueue_scripts', 'manguru_stylesheets' );

/* JS */
function manguru_scripts(){
	/* jQuery */
	wp_enqueue_script( 'jquery' );
	
	/* Bootstrap */
	wp_enqueue_script( 'bootstrap', 'http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js', array('jquery'), '3.0.2', true );

	/* Manguru */
	wp_enqueue_script( 'main', get_stylesheet_directory_uri().'/js/main.js', array('jquery','bootstrap'), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'manguru_scripts' );


/* Navigation Menus */
register_nav_menus( array(
	'sidebar_menu' => 'Sidebar',
	'top_menu' => 'Top Menu'
));


/* Theme Support */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'html5' );


/* Custom Post Types */
function manguru_manner_post_type() {
  $labels = array(
    'name'               => 'Manners',
    'singular_name'      => 'Manner',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Manner',
    'edit_item'          => 'Edit Manner',
    'new_item'           => 'New Manner',
    'all_items'          => 'All Manners',
    'view_item'          => 'View Manner',
    'search_items'       => 'Search Manners',
    'not_found'          => 'No manner found',
    'not_found_in_trash' => 'No manners found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Manners'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'manner' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
  );

  register_post_type( 'manner', $args );
}
add_action( 'init', 'manguru_manner_post_type' );



/* Rename Posts to Blog Posts */
function manguru_change_posts_to_blog_posts() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blog Posts';
    /*$submenu['edit.php'][5][0] = 'News Items';
    $submenu['edit.php'][10][0] = 'Add News Item';*/
}
add_action( 'admin_menu', 'manguru_change_posts_to_blog_posts' );



/* Widget Areas */
function manguru_widgets_init() {

	register_sidebar( array(
		'name' => 'Footer Widgets',
		'id' => 'footer-widgets',
		'before_widget' => '<div class="widget col-xs-3">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'manguru_widgets_init' );


/* Option Tree */

/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );

/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.
 */
add_filter( 'ot_show_new_layout', '__return_false' );

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
load_template( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

/**
 * Theme Options
 */
load_template( trailingslashit( get_template_directory() ) . 'includes/theme-options.php' );
 ?>