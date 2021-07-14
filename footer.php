<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FortisEM
 */

// No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<!-- FOOTER SECTION -->
  <footer>

    <section class="footer-cont">
      <div class="container">
        <div class="row">

          <div class="col-md-3 col-sm-12 col-xs-12">
            <?php dynamic_sidebar('footer_logo_description') ?>
          </div>
          <div class="services-foot col-md-3 col-sm-6 col-xs-12">
            <?php dynamic_sidebar('footer_contact') ?>
          </div>
          <div class="social col-md-2 col-sm-6 col-xs-12">
            <?php dynamic_sidebar('footer_social') ?>
          </div>
          <div class="subscribe col-md-3 col-sm-12 col-xs-12">
            <h3>SUBSCRIBE</h3>
            <p>Sign up now for news, exclusive discounts and special offers!</p>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">

  <form action="//fortisem.us16.list-manage.com/subscribe/post?u=1ee40a7f2df1386b6a9f8c1d8&amp;id=f04cd150e8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

  <div id="mc_embed_signup_scroll">
    <div class="mc-field-group">

      <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"  placeholder="Enter your e-mail">
      <div class="clear"></div>
  <!-- <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"> -->
      <button id="mc-embedded-subscribe" class="btn btn-info btn-lg" type="submit"><i class="fa fa-chevron-right"><!----></i>
      </button>
    </div>

    <div id="mce-responses" class="clear">
      <div class="response" id="mce-error-response" style="display:none"></div>
      <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1ee40a7f2df1386b6a9f8c1d8_f04cd150e8" tabindex="-1" value="">
      </div>



  </div>
        </div>

      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);
      </script>
      <!--End mc_embed_signup-->


     
      </div> <!-- row end -->
    </div> <!-- container end -->
  </section> <!-- footer end -->

          <!--End MailChimp mc_embed_signup-->

  <section class="row">
    <div class="footer-bottom text-center">
      <p>&copy; <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?> All right reserved. <a href="http://craigsteel-design.com/">by craig steel design</a></p>
    </div>
  </section>

  </footer> <!-- FOOTER SECTION END -->

  <?php wp_footer(); ?>

  </body>
</html>

