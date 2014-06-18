<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package jontyjago
 */

get_header(); ?>

<div class='jumbotron' id='not-found'>
    <div class='container'>
        <h2>Page Not Found</h2>
        <h6>Hang on, I'll have another look.</h6>
        <h6>Nope, sorry.</h6> 
        <h6>It's not here.</h6> 
    </div><!-- end container about -->
</div><!-- end jumbotron -->

<div class="container">
	<div class="row">
		<h2>Whoops</h2>
		<p>Sorry, but I can't seem to find the page you're looking for.</p>
		<p>Probably easiest if you return to the <a href="<?php echo site_url(); ?>">Homepage</a> and try again.</p>
	</div>
</div>

<?php get_footer(); ?>
