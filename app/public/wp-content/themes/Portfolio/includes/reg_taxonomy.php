<?php 

function project_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'portfolio-theme' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'portfolio-theme' ),
		'menu_name'                  => __( 'Categories', 'portfolio-theme' ),
		'all_items'                  => __( 'All Categories', 'portfolio-theme' ),
		'parent_item'                => __( 'Parent Category', 'portfolio-theme' ),
		'parent_item_colon'          => __( 'Parent Category:', 'portfolio-theme' ),
		'new_item_name'              => __( 'New Category Name', 'portfolio-theme' ),
		'add_new_item'               => __( 'Add New Category', 'portfolio-theme' ),
		'edit_item'                  => __( 'Edit', 'portfolio-theme' ),
		'update_item'                => __( 'Update', 'portfolio-theme' ),
		'view_item'                  => __( 'View Category', 'portfolio-theme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'portfolio-theme' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'portfolio-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'portfolio-theme' ),
		'popular_items'              => __( 'Popular Categories', 'portfolio-theme' ),
		'search_items'               => __( 'Search', 'portfolio-theme' ),
		'not_found'                  => __( 'Not Found', 'portfolio-theme' ),
		'no_terms'                   => __( 'No Categories', 'portfolio-theme' ),
		'items_list'                 => __( 'Category list', 'portfolio-theme' ),
		'items_list_navigation'      => __( 'Category list navigation', 'portfolio-theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'project_type', array( 'project' ), $args );
}

add_action( 'init', 'project_taxonomy', 0 );

?>