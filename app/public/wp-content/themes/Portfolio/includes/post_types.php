<?php

function post_type_project() {

	$labels = array(
		'name'                  => _x( 'Works', 'Post Type General Name', 'portfolio-theme' ),
		'singular_name'         => _x( 'Work', 'Post Type Singular Name', 'portfolio-theme' ),
		'menu_name'             => __( 'Works', 'portfolio-theme' ),
		'name_admin_bar'        => __( 'Work', 'portfolio-theme' ),
		'archives'              => __( 'Work Archives', 'portfolio-theme' ),
		'attributes'            => __( 'Work Attributes', 'portfolio-theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'portfolio-theme' ),
		'all_items'             => __( 'All', 'portfolio-theme' ),
		'add_new_item'          => __( 'Add New Work', 'portfolio-theme' ),
		'add_new'               => __( 'Add New', 'portfolio-theme' ),
		'new_item'              => __( 'New Work', 'portfolio-theme' ),
		'edit_item'             => __( 'Edit Work', 'portfolio-theme' ),
		'update_item'           => __( 'Update Work', 'portfolio-theme' ),
		'view_item'             => __( 'View Work', 'portfolio-theme' ),
		'view_items'            => __( 'View Works', 'portfolio-theme' ),
		'search_items'          => __( 'Search Works', 'portfolio-theme' ),
		'not_found'             => __( 'No uploaded works', 'portfolio-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'portfolio-theme' ),
		'featured_image'        => __( 'Featured Image', 'portfolio-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'portfolio-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'portfolio-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'portfolio-theme' ),
		'insert_into_item'      => __( 'Insert into item', 'portfolio-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'portfolio-theme' ),
		'items_list'            => __( 'Work list', 'portfolio-theme' ),
		'items_list_navigation' => __( 'Work list navigation', 'portfolio-theme' ),
		'filter_items_list'     => __( 'Filter works list', 'portfolio-theme' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'portfolio-theme' ),
		'description'           => __( 'Post Type is Project', 'portfolio-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', ),
		'taxonomies'            => array( 'project_skill', 'project_type' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-plus',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'post_type_project', 0 );

?>