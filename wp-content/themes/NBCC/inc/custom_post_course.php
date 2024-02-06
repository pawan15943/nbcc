<?php
flush_rewrite_rules( false );
// Register Custom Post Type Courses

register_taxonomy('Course', 'courses', array(
    "hierarchical" => true, 
    "label" => "Courses Category", 
    "singular_label" => "label of taxonomy", 
    'update_count_callback' => '_update_post_term_count', 
    'query_var' => true, 
    'rewrite' => array('slug' => 'slug name of new registered taxonomy', 'with_front' => false), 
    'public' => true, 
    'show_ui' => true, 
    'show_tagcloud' => true, 
    '_builtin' => false, 
    'show_in_nav_menus' => false
));
function create_Courses_cpt() {

	$labels = array(
		'name' => _x( 'Courses', 'Post Type General Name', 'allen_overseas' ),
		'singular_name' => _x( 'Courses', 'Post Type Singular Name', 'allen_overseas' ),
		'menu_name' => _x( 'Courses', 'Admin Menu text', 'allen_overseas' ),
		'name_admin_bar' => _x( 'Courses', 'Add New on Toolbar', 'allen_overseas' ),
		'archives' => __( 'Courses Archives', 'allen_overseas' ),
		'attributes' => __( 'Courses Attributes', 'allen_overseas' ),
		'parent_item_colon' => __( 'Parent Courses:', 'allen_overseas' ),
		'all_items' => __( 'All Courses', 'allen_overseas' ),
		'add_new_item' => __( 'Add New Courses', 'allen_overseas' ),
		'add_new' => __( 'Add New', 'allen_overseas' ),
		'new_item' => __( 'New Courses', 'allen_overseas' ),
		'edit_item' => __( 'Edit Courses', 'allen_overseas' ),
		'update_item' => __( 'Update Courses', 'allen_overseas' ),
		'view_item' => __( 'View Courses', 'allen_overseas' ),
		'view_items' => __( 'View Courses', 'allen_overseas' ),
		'search_items' => __( 'Search Courses', 'allen_overseas' ),
		'not_found' => __( 'Not found', 'allen_overseas' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'allen_overseas' ),
		'featured_image' => __( 'Featured Image', 'allen_overseas' ),
		'set_featured_image' => __( 'Set featured image', 'allen_overseas' ),
		'remove_featured_image' => __( 'Remove featured image', 'allen_overseas' ),
		'use_featured_image' => __( 'Use as featured image', 'allen_overseas' ),
		'insert_into_item' => __( 'Insert into Courses', 'allen_overseas' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Courses', 'allen_overseas' ),
		'items_list' => __( 'Courses list', 'allen_overseas' ),
		'items_list_navigation' => __( 'Courses list navigation', 'allen_overseas' ),
		'filter_items_list' => __( 'Filter Courses list', 'allen_overseas' ),
	);

	$rewrite = array(
		'slug' => 'courses',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);

	$args = array(
		'label' => __( 'Courses', 'allen_overseas' ),
		'description' => __( '', 'allen_overseas' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-id-alt',
		'supports' => array('title', 'editor', 'page-attributes', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 102,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'query_var' => 'Courses',
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'rewrite' => $rewrite,
	);
	register_post_type( 'courses', $args );
}



add_action( 'init', 'create_Courses_cpt', 0 );


?>