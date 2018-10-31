<?php
/*
Plugin Name: WhiteSpace CPT: Portfolio
Description: Portfolio for websites
*/
// Our custom post type function
function create_whitespace_cpt_portfolio() {
  // CPT Options
  /*
$args = array(
  'labels' => array(
    'name' => __( 'Portfolio' ),
    'singular_name' => __( 'Item' )
  ),
  'show_ui' => true,
	'show_in_menu' => true,
	'show_in_nav_menus' => true,
	'show_in_admin_bar' => true,
	'menu_position' => 5,
  'public' => true,
  'has_archive' => true,
  'rewrite' => array('slug' => 'portfolio'),
)
*/

$labels = array(
    'name'               => _x( 'Portfolio', 'post type general name' ),
    'singular_name'      => _x( 'Item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Item' ),
    'edit_item'          => __( 'Edit Item' ),
    'new_item'           => __( 'New Item' ),
    'all_items'          => __( 'All Items' ),
    'view_item'          => __( 'View Item' ),
    'search_items'       => __( 'Search Portfolio' ),
    'not_found'          => __( 'No items found' ),
    'not_found_in_trash' => __( 'No items found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Portfolio'
  );
$rewrites = array(
  //'slug'  => 'portfolio',
  'with_front'  => false
);
  $args = array(
    'labels'        => $labels,
    'description'   => 'Displays portfolio',
    'public'        => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-portfolio',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
    'rewrite'  => $rewrites
);
register_post_type( 'portfolio', $args	);
}

  // Hooking up our function to theme setup
add_action( 'init', 'create_whitespace_cpt_portfolio' );
?>
