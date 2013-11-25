<?php 
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

 ?>