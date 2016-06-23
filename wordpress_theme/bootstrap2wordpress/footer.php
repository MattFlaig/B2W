<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>


<?php wp_footer(); ?>

<!-- SIGNUP
============================================= -->
<section id="signup" data-type="background" data-speed="4">

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                  <h2>Are you ready to take your coding skills to the
                      <strong>next level</strong>?</h2>
                  <p><a href="#" class="btn btn-lg btn-block btn-success">
                      Yes, sign me up!</a></p>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

</section><!-- signup -->

<!-- FOOTER
============================================= -->
<footer>
    <div class="container">
        <div class="col-sm-3">
            <p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to Wordpress"></a></p>
        </div><!-- col -->
        <div class="col-sm-6">
            <nav>
                <ul class="list-unstyled list-inline">
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Resources</a></li>
                    <li><a href="">Contact</a></li>
                    <li class="signup-link"><a href="">Sign up now</a></li>
                </ul>
            </nav>

        </div><!-- col -->
        <div class="col-sm-3">
                    <p class="pull-right">&copy; 2016 Matt Flaig</p>
            </div><!-- end col -->
    </div><!-- container -->
</footer>

<!--MODAL
============================================= -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    <i class="fa fa-envelope"></i>
                    Subscribe to our Mailing List
                </h4>
            </div><!-- modal-header -->
            <div class="modal-body">
                <p>Simply enter your name and email! As a thank you for joining us,
                   we're giving you one of our bestselling products <em>for free</em>.</p>
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-name">Your first name</label>
                        <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                    </div><!-- form-group -->
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">and your email</label>
                        <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                    </div><!-- form-group -->
                    <input type="submit" class="btn btn-danger" value="Subscribe!">
                </form>
                <hr>

                <p><small>By providing your email you consent to receiving occasional emails &amp; newsletters.<br>
                No spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>

            </div><!-- modal-body -->
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->


<!-- BOOTSTRAP CORE JS
placed at the end so the document loads faster
============================================= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<!--Typekit Fonts: europa -->
<script src="https://use.typekit.net/kvd2vga.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>


</body>
</html>
