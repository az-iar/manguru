<?php 

/* CSS */
include 'includes/stylesheets.php';

/* JS */
include 'includes/scripts.php';


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
include 'includes/post-types.php';

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
include 'includes/option-tree-plugin.php';

 ?>