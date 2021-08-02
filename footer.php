<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fortisem
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

