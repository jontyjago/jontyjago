<?php
/**
 * @package jontyjago
 */
?>

<div class="col-md-4">
    <div class='thumbnail'>
        <div class='caption'><h4><?php the_title(); ?></h4></div>
        <?php the_post_thumbnail(); ?>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>"><span class='fui-plus'></span></a><small>  Click for more</small>
    </div><!-- end thumbnail -->
</div><!-- end col4 -->

