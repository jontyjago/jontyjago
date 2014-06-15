<?php
//********
//Start Taxonomies
//********

function jj_technology() {
	$labels = array(
		'name'              => _x( 'Technologies', 'taxonomy general name' ),
		'singular_name'     => _x( 'Technology', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Technologies' ),
		'all_items'         => __( 'All Technologies' ),
		'parent_item'       => __( 'Parent Technology' ),
		'parent_item_colon' => __( 'Parent Technology:' ),
		'edit_item'         => __( 'Edit Technology' ),
		'update_item'       => __( 'Update Technology' ),
		'add_new_item'      => __( 'Add New Technology' ),
		'new_item_name'     => __( 'New Technology' ),
		'menu_name'         => __( 'Technologies' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'jj_technology', 'portfolio', $args );
}
add_action( 'init', 'jj_technology', 0 );
