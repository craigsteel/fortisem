<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fortisem
 */
 // No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 
?>

	  <div class="row">
          <div class="col-md-12 text-center page-head">
            <h2>OOPS! THAT PAGE CAN’T BE FOUND!</h2>
          </div><!-- col-md-12-->
        </div><!-- row -->

     </div><!-- container end -->

</section><!-- feature-image end -->

	<section id="primary" class="container">
		<div class="row">
			<div class="error-404 not-found page-content">

						<div class="opening-statment">
							<div class="container">
      							<div class="row">
	        						<div class="text-center col-md-12">
	          						<h1>LET'S GET YOU BACK ON TRACK.</h1>
	          						<h3>Perhaps you were looking for a specific service?</h3>
							        </div><!-- end col -->
						      	</div><!-- row -->
						    </div><!-- container -->
						</div><!-- opening-statment end -->

						<!-- SERVICES LIST-->



						<!-- CATEGORIES	-->

	          			<div class="container">
							<div class="row">
        						<div class="col-md-12">
          							<h3>...or maybe a popular category?</h3>
						        </div><!-- end col -->
						    </div><!-- row -->
						</div><!-- container -->

						<div class="container">
							<div class="row">
        						<div class="categories col-md-12">

       						    <h4>Categories</h4>
						          	<ul>
										<?php
											wp_list_categories( array (

												'orderby'	=> 'count',
												'order'		=> 'DESC',
												'title_li'	=> '',
												'number'	=> 10
											) );
										?>
									</ul>

								</div><!-- end col -->
						    </div><!-- row -->
						</div><!-- container -->

						  <?php get_template_part('template-parts/content','latest-news-dynamic'); ?>

						    <?php get_template_part('template-parts/content','completed-projects-dynamic'); ?>

						<!-- BACK TO HOME -->

						<div class="container">
							<div class="row">
        						<div class="text-center col-md-12">
        							<div class="homepage">

						<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>">...or, just head back to the home page</a></h4>
									</div>
								</div><!-- end col -->
						    </div><!-- row -->
						</div><!-- container -->

			</div><!-- .error-404 -->
		</div><!-- primary section end -->

	</section><!-- section end -->

<?php get_footer(); ?>
