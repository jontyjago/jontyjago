<?php
/**
 * The template used for displaying page content in single-portfolio.php
 *
 * @package jontyjago
 */
?>

<?php $header_text_1 = get_post_meta(get_the_id(), 'header_text_1', true); ?>
<?php $header_text_2 = get_post_meta(get_the_id(), 'header_text_2', true); ?>
<?php $header_text_3 = get_post_meta(get_the_id(), 'header_text_3', true); ?>

<div class='jumbotron' id='portfolio'>
    <div class='container'>
        <h2><?php the_title(); ?></h2>
        <h6><?php  echo $header_text_1; ?></h6>
        <h6><?php  echo $header_text_2; ?></h6> 
        <h6><?php  echo $header_text_3; ?></h6> 
    </div><!-- end container about -->
</div><!-- end jumbotron -->


<div class="container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'jontyjago' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'jontyjago' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div><!-- end container -->