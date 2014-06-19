<?php
//********
//Start Site Options
//********
//***********************
// Options Page Functions

add_action( 'admin_menu', 'jj_options_menu' );

function jj_options_menu() {
	add_menu_page( 'JJ Options', 'JJ Options', 'manage_options', 'jj-user-options', 'jj_options_page', '', 99 );
}

function jj_options_page() {
	//if we got here with a POST, update the database with the new options
	if ( isset($_POST['jj_options_update'])) {
        if ($_POST['jj_options_update'] == 'true') {
            jj_options_update();}
        }
?>

<!-- here's the main function that will generate our options page -->
<!--Options Markup-->
<div class="wrap">
    <div id="icon-themes" class="icon32"><br />
    </div>
    <h2>Jontyjago Site Options</h2>
    <form method="POST" action="">
        <input type="hidden" name="jj_options_update" value="true" />
        <h3>Site Name</h3>
        <p>The name of your site is shown in the header and footer, for example in the copyright. If left blank, Site Title from Settings / General will be used.</p>
        <p><input type="text" name="site-name" id="site-name" size="30" value="<?php esc_attr_e( get_option( 'site-name' ) ); ?>"/></p>
        
		<h3>Homepage Headers</h3>
        <p>These lines will be shown below the Site Name on the homepage. 1 or more lines can be left blank.</p>
        <p><input type="text" name="header-line-1" id="header-line-1" size="48" value="<?php esc_attr_e( stripslashes( get_option( 'header-line-1' ) ) ); ?>"/> Header Line 1</p>
        <p><input type="text" name="header-line-2" id="header-line-2" size="48" value="<?php esc_attr_e( stripslashes( get_option( 'header-line-2' ) ) ); ?>"/> Header Line 2</p>
        <p><input type="text" name="header-line-3" id="header-line-3" size="48" value="<?php esc_attr_e( stripslashes( get_option( 'header-line-3' ) ) ); ?>"/> Header Line 3</p>
        <p><input type="text" name="header-line-4" id="header-line-4" size="48" value="<?php esc_attr_e( stripslashes( get_option( 'header-line-4' ) ) ); ?>"/> Header Line 4</p>
        
        <h3>Homepage Text</h3>
        <p>Titles for the 4 boxes on the home page, should not be left blank.</p>
        <p><input type="text" name="home-title-1" id="home-title-1" size="28" value="<?php esc_attr_e( stripslashes( get_option( 'home-title-1' ) ) ); ?>"/> Homepage Box Title 1</p>
        <p><input type="text" name="home-title-2" id="home-title-2" size="28" value="<?php esc_attr_e( stripslashes( get_option( 'home-title-2' ) ) ); ?>"/> Homepage Box Title 2</p>
        <p><input type="text" name="home-title-3" id="home-title-3" size="28" value="<?php esc_attr_e( stripslashes( get_option( 'home-title-3' ) ) ); ?>"/> Homepage Box Title 3</p>
        <p><input type="text" name="home-title-4" id="home-title-4" size="28" value="<?php esc_attr_e( stripslashes( get_option( 'home-title-4' ) ) ); ?>"/> Homepage Box Title 4</p>        
        <p>Text for the 4 boxes on the home page, should not be left blank.</p>
        <p><input type="text" name="home-text-1" id="home-text-1" size="98" value="<?php esc_attr_e( stripslashes( get_option( 'home-text-1' ) ) ); ?>"/> Homepage Box Text 1</p>
        <p><input type="text" name="home-text-2" id="home-text-2" size="98" value="<?php esc_attr_e( stripslashes( get_option( 'home-text-2' ) ) ); ?>"/> Homepage Box Text 2</p>
        <p><input type="text" name="home-text-3" id="home-text-3" size="98" value="<?php esc_attr_e( stripslashes( get_option( 'home-text-3' ) ) ); ?>"/> Homepage Box Text 3</p>
        <p><input type="text" name="home-text-4" id="home-text-4" size="98" value="<?php esc_attr_e( stripslashes( get_option( 'home-text-4' ) ) ); ?>"/> Homepage Box Text 4</p>        
        
        <h3>Portfolio Page Title</h3>
        <p>Title for portfolio page. Should not be left blank.</p>
        <p><input type="text" name="portfolio-title" id="portfolio-title" size="30" value="<?php esc_attr_e( get_option( 'portfolio-title' ) ); ?>"/></p>
        <h3>Portfolio Headers</h3>
        <p>These lines will be shown in the header for the portfolio page. 1 or more lines can be left blank.</p>
        <p><input type="text" name="portfolio-header-1" id="portfolio-header-1" size="48" value="<?php esc_attr_e( stripslashes( get_option( 'portfolio-header-1' ) ) ); ?>"/> Portfolio Header 1</p>
        <p><input type="text" name="portfolio-header-2" id="portfolio-header-2" size="48" value="<?php esc_attr_e( stripslashes( get_option( 'portfolio-header-2' ) ) ); ?>"/> Portfolio Header 2</p>
        <p><input type="text" name="portfolio-header-3" id="portfolio-header-3" size="48" value="<?php esc_attr_e( stripslashes( get_option( 'portfolio-header-3' ) ) ); ?>"/> Portfolio Header 3</p>
        <p><input type="text" name="portfolio-header-4" id="portfolio-header-4" size="48" value="<?php esc_attr_e( stripslashes( get_option( 'portfolio-header-4' ) ) ); ?>"/> Portfolio Header 4</p>
 
        <!-- submit button -->
        <p><input type="submit" name="search" value="Update Options" class="button" /></p>
    </form>
</div>

<?php
}
function jj_options_update() {
	// this is where validation would go
	update_option( 'site-name', $_POST['site-name'] );
	update_option( 'header-line-1', $_POST['header-line-1'] );
	update_option( 'header-line-2', $_POST['header-line-2'] );
	update_option( 'header-line-3', $_POST['header-line-3'] );
	update_option( 'header-line-4', $_POST['header-line-4'] );
    update_option( 'home-title-1', $_POST['home-title-1'] );
    update_option( 'home-title-2', $_POST['home-title-2'] );
    update_option( 'home-title-3', $_POST['home-title-3'] );
    update_option( 'home-title-4', $_POST['home-title-4'] );
    update_option( 'home-text-1', $_POST['home-text-1'] );
    update_option( 'home-text-2', $_POST['home-text-2'] );    
    update_option( 'home-text-3', $_POST['home-text-3'] );
    update_option( 'home-text-4', $_POST['home-text-4'] );
    update_option( 'portfolio-title', $_POST['portfolio-title'] );
    update_option( 'portfolio-header-1', $_POST['portfolio-header-1'] );
    update_option( 'portfolio-header-2', $_POST['portfolio-header-2'] );
    update_option( 'portfolio-header-3', $_POST['portfolio-header-3'] );
    update_option( 'portfolio-header-4', $_POST['portfolio-header-4'] );
}