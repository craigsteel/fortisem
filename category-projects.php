<?php
/**
 * The template for displaying all projects pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fortisem
 */
// No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 ?>

<?php get_template_part('template-parts/content','featured-image-archive'); ?>

<div class="projects-page">
<div class="container">
	<div class="row">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
		

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();


			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>


			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->
</div><!-- .container -->

<?php
// get_sidebar();
get_footer();
