<?php
// Custom Post Type Definition for jontyjago theme

//********
//Start Portfolio Item
//*********
function jj_portfolio() {
	$labels = array(
		'name'               => _x( 'Portfolio Items', 'post type general name' ),
		'singular_name'      => _x( 'Portfolio Item', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'portfolio' ),
		'add_new_item'       => __( 'Add New Portfolio Item' ),
		'edit_item'          => __( 'Edit Portfolio Item' ),
		'new_item'           => __( 'New Portfolio Item' ),
		'all_items'          => __( 'All Portfolio Items' ),
		'view_item'          => __( 'View Portfolio Item' ),
		'search_items'       => __( 'Search Portfolio Items' ),
		'not_found'          => __( 'No Portfolio Items found' ),
		'not_found_in_trash' => __( 'No Portfolio Items found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Portfolio Items'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Allows you to enter and edit Portfolio Items',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'portfolio', $args );
	flush_rewrite_rules( false );
}

add_action( 'init', 'jj_portfolio' );

//Customise messages
function jj_portfolio_messages( $messages ) {
	global $post, $post_ID;
	$messages['portfolio'] = array(
		0 => '',
		1 => sprintf( __( 'Portfolio Item updated. <a href="%s">View Portfolio Item</a>' ), esc_url( get_permalink( $post_ID ) ) ),
		2 => __( 'Portfolio Item updated.' ),
		3 => __( 'Portfolio Item deleted.' ),
		4 => __( 'Portfolio Item updated.' ),
		5 => isset( $_GET['revision'] ) ? sprintf( __( 'Portfolio Item restored to revision from %s' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __( 'Portfolio Item published. <a href="%s">View Portfolio Item</a>' ), esc_url( get_permalink( $post_ID ) ) ),
		7 => __( 'Portfolio Item saved.' ),
		8 => sprintf( __( 'Portfolio Item submitted. <a target="_blank" href="%s">Preview Portfolio Item</a>' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) ),
		9 => sprintf( __( 'Portfolio Item scheduled for publication on: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Portfolio Item</a>' ), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink( $post_ID ) ) ),
		10 => sprintf( __( 'Portfolio Item draft updated. <a target="_blank" href="%s">Preview Portfolio Item</a>' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) ),
	);
	return $messages;
}
add_filter( 'post_updated_messages', 'jj_portfolio_messages' );

//********
//End Portfolio Items
//********