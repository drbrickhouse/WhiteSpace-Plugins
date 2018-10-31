<?php
/*
Plugin Name: WhiteSpace CPT: CTA's
Description: Calls to Action
*/
// Our custom post type function
function create_whitespace_cpt_ctas() {
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
    'name'               => _x( 'CTA', 'post type general name' ),
    'singular_name'      => _x( 'CTA', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New CTA' ),
    'edit_item'          => __( 'Edit CTA' ),
    'new_item'           => __( 'New CTA' ),
    'all_items'          => __( 'All CTA\'s' ),
    'view_item'          => __( 'View CTA' ),
    'search_items'       => __( 'Search CTA\'s' ),
    'not_found'          => __( 'No CTA\'s found' ),
    'not_found_in_trash' => __( 'No CTA\'s found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'CTA\'s'
  );
$rewrites = array(
  //'slug'  => 'cta',
  'with_front'  => false
);
  $args = array(
    'labels'        => $labels,
    'description'   => 'Displays CTA\'s',
    'public'        => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-welcome-widgets-menus',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => false,
    'rewrite'  => $rewrites
);
register_post_type( 'ctas', $args	);
}

  // Hooking up our function to theme setup
add_action( 'init', 'create_whitespace_cpt_ctas' );
?>
