<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jontyjago
 */

get_header(); ?>

<div class="jumbotron palette-belize-hole" id='head-block'>
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
			<h1><?php echo stripslashes(get_option('portfolio-title')); ?></h1>
        	<p class='lead'><?php echo stripslashes(get_option('portfolio-header-1')); ?></p>
            <p class='lead'><?php echo stripslashes(get_option('portfolio-header-2')); ?></p>
            <p class='lead'><?php echo stripslashes(get_option('portfolio-header-3')); ?></p>
            <p class='lead'><?php echo stripslashes(get_option('portfolio-header-4')); ?></p>
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
