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
                <h1>Jonathan Evans</h1>
                <h6>The Web can be a daunting place.</h6>
                <h6>Maybe you would like a website - but where do you start?</h6>
                <h6>Whether it's for business or pleasure, there's just so much information, so many things to consider - it can be a little overwhelming.</h6>
                <h6>This is where I come in. From understanding the jargon to building the finished site, I know my way round the web.</h6>
                <h6>Getting in touch is the first step to your new website.</h6>
                <p><a class="btn btn-primary btn-hg" href='contact'>Contact Me &raquo;</a></p>
            </div><!-- end container -->
        </div><!-- end home -->

        <div class="container">
            <div class="tiles row">
                <div class="col-sm-4 about">
                    <h3>About Me</h3>
                        <p>My name is Jonathan. I'm a web developer, quizmaster &amp; tour guide currently living in Buenos Aires.</p> 
                        <p>If you need to know the technical stuff, I work with HTML, CSS, PHP, JavaScript &amp; SQL. I specialise in frameworks and Wordpress.</p>
                </div><!-- end col4 -->
                <div class="col-sm-4 work">
                    <h3>My Work</h3>
                    <p>I have built sites for writers, books, film societies, tours and webcomics.</p>
                    <p>Doesn't matter what you need the site for, you just need a good-looking, effective &amp; simple to maintain website. I can make it and make it work.</p>
                    <p><a class="btn btn-primary btn-wide" href="portfolio">See More &raquo;</a></p>
                </div><!-- end col4 -->
                <div class="col-sm-4 contact">
                    <h3>Contact</h3>
                    <p>You probably have some questions. You may well have lots of questions.</p>
                    <p>That's OK, questions are good! Get in touch and we can start working together on your new site.</p>
                    <p><a class="btn btn-primary btn-wide" href="contact">Contact &raquo;</a></p>
                </div><!-- end col4 -->
            </div><!-- end row -->
        </div><!-- end container -->
        
<?php get_footer(); ?>
