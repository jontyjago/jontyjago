<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package jontyjago
 */
?>

<footer>

    <div class="container">
        <div class="row">
        <br />
            <div class="col-md-4 col-md-offset-4 footer-img">
              <center>      
                  <!-- <img src="img/svg/eye.svg" class="img-circle" alt="..."> -->
                  <br>
                  <h4 class="footertext">jontyjago.com</h4>
                  <p class="footertext">Built with <a href="http://wordpress.org">Wordpress</a>, <a href="http://getbootstrap.com">Bootstrap</a>, <a href="http://twittem.github.io/wp-bootstrap-navwalker/">Navwalker</a> &amp; <a href="http://underscores.me/">_s</a><br>
              </center>
              </div><!-- end col -->
        </div><!-- end row -->
            <div class="row">
            <p><center><p class="footertext">Jonathan Evans &copy;2014</p></center></p>
        </div>
    </div>

</footer>
    

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src= <?php echo get_template_directory_uri() . "/js/bootstrap.min.js"?> ></script>
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
