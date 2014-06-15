<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package jontyjago
 */
?>

<div class="container">    
<hr>
  	<div class="row">
    	<div class="col-lg-12">
      		<div class="col-md-6 col-md-offset-6">
            <p class="muted pull-right"><small>Built with <a href="http://wordpress.org">Wordpress</a>, <a href="http://getbootstrap.com">Bootstrap</a>, <a href="http://twittem.github.io/wp-bootstrap-navwalker/">Navwalker</a> &amp; <a href="http://underscores.me/">_s</a></small></p>
      		  <p class="muted pull-right"><small>Designed and built by <a href='http://www.jontyjago.com'>Jonathan Evans</a>. &copy; 2014</small></p>
          </div><!-- end col4 -->
    	</div><!-- end col12 -->
  	</div><!-- end row -->
</div><!-- end container -->
    

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src= <?php echo base_url() . "js/bootstrap.min.js"?> ></script>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16097113-11', 'jontyjago.com');
  ga('send', 'pageview');

</script>

</body>
</html>

<?php wp_footer(); ?>

</body>
</html>
