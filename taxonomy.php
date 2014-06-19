<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jontyjago
 */

get_header(); ?>

	<div class='jumbotron palette-belize-hole' id='head-block'>
    	<div class='container'>
        	<h2><?php single_term_title(); ?></h2>
    	</div><!-- end container about -->
	</div><!-- end jumbotron -->

	<div class="container">

				<?php if ( have_posts() ) :

			/* Start the Loop */
			$i = 1;
			while ( have_posts() ) : the_post();
			//start a row if necessary
			if(is_int(($i+2)/3)) { ?>
				<div class="row">
				<?php }

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content-technology', get_post_format() );

			//end the row if necessary
			if(is_int($i/3)) { ?>
				</div><!-- end row -->
			<?php }

			$i++; endwhile;

		else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- end container -->

<?php get_footer(); ?>
