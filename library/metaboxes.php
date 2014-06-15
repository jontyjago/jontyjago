<?php
//********
//Start Custom Meta Boxes
//********

//***************
//Portfolio Start

add_action( 'add_meta_boxes', 'add_portfolio_item_data' );

/* Do something with the data entered */
add_action( 'save_post', 'save_portfolio_item_data' );

/* Adds a box to the main column on the Post and Page edit screens */
function add_portfolio_item_data() {
	$screens = array( 'portfolio' );
	foreach ( $screens as $screen ) {
		add_meta_box(
			'portfolio_sectionid',
			__( 'Portfolio Item Details' ),
			'portfolio_custom_box',
			$screen
		);
	}
}

/* Prints the box content */
function portfolio_custom_box( $post ) {

	// Use nonce for verification
	wp_nonce_field( plugin_basename( __FILE__ ), 'portfolio_noncename' );

	// The actual fields for data entry
	// Use get_post_meta to retrieve an existing value from the database and use the value for the form
?>
	<label for="work_done">Date Work Done:</label>
	<input type="text" id="work_done" name="work_done" size=20 value="<?php echo esc_attr( get_post_meta( get_the_id(), 'work_done', true ) ); ?>"><br />
	<label for="sort_order">Sort Order:</label>
	<input type="text" id="sort_order" name="sort_order" size=8 value="<?php echo esc_attr( get_post_meta( get_the_id(), 'sort_order', true ) ); ?>"><br />
	<label for="header_text_1">Header 1:</label>
	<input type="text" id="header_text_1" name="header_text_1" size=50 value="<?php echo esc_attr( get_post_meta( get_the_id(), 'header_text_1', true ) ); ?>"><br />
	<label for="header_text_2">Header 2:</label>
	<input type="text" id="header_text_2" name="header_text_2" size=50 value="<?php echo esc_attr( get_post_meta( get_the_id(), 'header_text_2', true ) ); ?>"><br />
	<label for="header_text_3">Header 3:</label>
	<input type="text" id="header_text_3" name="header_text_3" size=50 value="<?php echo esc_attr( get_post_meta( get_the_id(), 'header_text_3', true ) ); ?>"><br />
	<?php
}

/* When the post is saved, saves our custom data */
function save_portfolio_item_data( $post_id ) {


	// Secondly we need to check if the user intended to change this value.
	if ( ! isset( $_POST['portfolio_noncename'] ) || ! wp_verify_nonce( $_POST['portfolio_noncename'], plugin_basename( __FILE__ ) ) )
		return;

	// Thirdly we can save the value to the database

	//if saving in a custom table, get post_ID
	$post_ID = $_POST['post_ID'];


	// Save, either creating or overwriting
	// work done
	$work_done = sanitize_text_field( $_POST['work_done'] );
	add_post_meta( $post_ID, 'work_done', $work_done, true ) or
		update_post_meta( $post_id, 'work_done', $work_done );
	// sort order
	$sort_order = sanitize_text_field( $_POST['sort_order'] );
	add_post_meta( $post_ID, 'sort_order', $sort_order, true ) or
		update_post_meta( $post_id, 'sort_order', $sort_order );
	//header texts
	$header_text_1 = sanitize_text_field( $_POST['header_text_1'] );
	add_post_meta( $post_ID, 'header_text_1', $header_text_1, true ) or
		update_post_meta( $post_id, 'header_text_1', $header_text_1 );
	$header_text_2 = sanitize_text_field( $_POST['header_text_2'] );
	add_post_meta( $post_ID, 'header_text_2', $header_text_2, true ) or
		update_post_meta( $post_id, 'header_text_2', $header_text_2 );
	$header_text_3 = sanitize_text_field( $_POST['header_text_3'] );
	add_post_meta( $post_ID, 'header_text_3', $header_text_3, true ) or
		update_post_meta( $post_id, 'header_text_3', $header_text_3 );
}

//Portfolio End
//*************

//**********
//Page Start

add_action( 'add_meta_boxes', 'add_page_item_data' );

/* Do something with the data entered */
add_action( 'save_post', 'save_page_item_data' );

/* Adds a box to the main column on the Post and Page edit screens */
function add_page_item_data() {
	$screens = array( 'page' );
	foreach ( $screens as $screen ) {
		add_meta_box(
			'page_sectionid',
			__( 'Page Metabox' ),
			'page_custom_box',
			$screen
		);
	}
}

/* Prints the box content */
function page_custom_box( $post ) {

	// Use nonce for verification
	wp_nonce_field( plugin_basename( __FILE__ ), 'page_noncename' );

	// The actual fields for data entry
	// Use get_post_meta to retrieve an existing value from the database and use the value for the form
?>
	<label for="header_text_1">Header Text Line 1:</label>
	<input type="text" id="header_text_1" name="header_text_1" size=60 value="<?php echo esc_attr( get_post_meta( get_the_id(), 'header_text_1', true ) ); ?>"><br />
	<label for="header_text_2">Header Text Line 2:</label>
	<input type="text" id="header_text_2" name="header_text_2" size=60 value="<?php echo esc_attr( get_post_meta( get_the_id(), 'header_text_2', true ) ); ?>"><br />
	<label for="header_text_3">Header Text Line 3:</label>
	<input type="text" id="header_text_3" name="header_text_3" size=60 value="<?php echo esc_attr( get_post_meta( get_the_id(), 'header_text_3', true ) ); ?>"><br />
<?php
}

/* When the post is saved, saves our custom data */
function save_page_item_data( $post_id ) {


	// Secondly we need to check if the user intended to change this value.
	if ( ! isset( $_POST['page_noncename'] ) || ! wp_verify_nonce( $_POST['page_noncename'], plugin_basename( __FILE__ ) ) )
		return;

	// Thirdly we can save the value to the database

	//if saving in a custom table, get post_ID
	$post_ID = $_POST['post_ID'];


	// Save, either creating or overwriting
	// header text
	$header_text_1 = sanitize_text_field( $_POST['header_text_1'] );
	add_post_meta( $post_ID, 'header_text_1', $header_text_1, true ) or
		update_post_meta( $post_id, 'header_text_1', $header_text_1 );
	$header_text_2 = sanitize_text_field( $_POST['header_text_2'] );
	add_post_meta( $post_ID, 'header_text_2', $header_text_2, true ) or
		update_post_meta( $post_id, 'header_text_2', $header_text_2 );
	$header_text_3 = sanitize_text_field( $_POST['header_text_3'] );
	add_post_meta( $post_ID, 'header_text_3', $header_text_3, true ) or
		update_post_meta( $post_id, 'header_text_3', $header_text_3 );
}

//Page End
//********