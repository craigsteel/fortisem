<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fortisem
 */

get_header(); ?>

<?php get_template_part('template-parts/content','featured-image-pages'); ?>

	<div class="row">
		<div id="primary" class="content-area text-left col-md-8 col-md-offset-2">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			

		endwhile; // End of the loop.
		?>


<?php get_template_part('template-parts/content','post-nav'); ?>

  <?php get_template_part('template-parts/content','latest-news-dynamic'); ?>

  		</main><!-- #main -->
	</div><!-- #primary -->
</div>


<?php

get_footer();
