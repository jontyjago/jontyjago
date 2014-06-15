<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jontyjago
 */

get_header(); ?>

<div class="jumbotron" id='work'>
	<div class="container">
	<?php
		 $args = array(
   			'post_type' => 'portfolio',
   			'meta_key' => 'sort_order',
   			'orderby' => 'meta_value_num',
   			'order' => 'ASC',
 		);
 		$query = new WP_Query($args);

		if ( $query -> have_posts() ) : ?>
			<h1>Sites I Have Built</h1>
        	<h6>All websites look different.</h6>
        	<h6>Yours probably won't look much like the ones below.</h6>
        	<h6>For each of these sites I have worked with the client and built the site that they wanted.</h6>
        	<h6>Not the site that somebody else told them they needed.</h6>
    </div><!-- end container -->
</div><!-- end jumbotron -->
<div class="container">
	

			<?php 
			/* Start the Loop */
			$i = 1;
			while ( $query -> have_posts() ) : $query -> the_post();
			
			//start a row if necessary
			if(is_int(($i+2)/3)) { ?>
				<div class="row">
			<?php }

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content-portfolio', get_post_format() );

			//end the row if necessary
			if(is_int($i/3)) { ?>
				</div><!-- end row -->
			<?php }

			$i++;
			endwhile;

		else : ?>
			<?php get_template_part( 'portfolio', 'none' ); ?>
		<?php endif; ?>

</div><!-- end container -->

<?php get_footer(); ?>
