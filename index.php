<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jontyjago
 */

get_header(); ?>

	        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" id='home'>
            <div class="container">
                <h1><?php
                    if (strlen(get_option('site-name')) == 0) {
                        echo get_bloginfo('name');
                    }
                    else {
                        echo stripslashes(get_option('site-name'));    
                    } ?>
                </h1>
                <h6><?php echo stripslashes(get_option('header-line-1')); ?></h6>
                <h6><?php echo stripslashes(get_option('header-line-2')); ?></h6>
                <h6><?php echo stripslashes(get_option('header-line-3')); ?></h6>
                <h6><?php echo stripslashes(get_option('header-line-4')); ?></h6>
                <p><a class="btn btn-primary btn-hg" href='contact'>Contact Me &raquo;</a></p>
            </div><!-- end container -->
        </div><!-- end home -->

        <div class="container">
            <div class="tiles row">
                <div class="col-sm-4 work">
                    <h3><?php echo stripslashes(get_option('home-title-2')); ?></h3>
                    <p><?php echo stripslashes(get_option('home-text-2')); ?></p>
                    <p><a class="btn btn-info btn-wide" href="portfolio">Portfolio &raquo;</a></p>
                </div><!-- end col4 -->
                <div class="col-sm-4 about">
                    <h3><?php echo stripslashes(get_option('home-title-1')); ?></h3>
                        <p><?php echo stripslashes(get_option('home-text-1')); ?></p>
                </div><!-- end col4 -->
                <div class="col-sm-4 contact">
                    <h3><?php echo stripslashes(get_option('home-title-3')); ?></h3>
                    <p><?php echo stripslashes(get_option('home-text-3')); ?></p>
                    <p><a class="btn btn-warning btn-wide" href="contact">Contact &raquo;</a></p>
                </div><!-- end col4 -->
            </div><!-- end row -->
        </div><!-- end container -->
        
<?php get_footer(); ?>
