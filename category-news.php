<?php
/**
 * The template for displaying news pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FortisEM
 */
 // No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


// grab the URL for the category image

if (function_exists('category_image_src')) {
	$category_image = category_image_src( array( 'size' => 'full' ) , false ); 
} else {
	$category_image = '';
}

get_header(); ?>

			<!-- add a class to the header if a category image exists -->
			<section class="archive-header" <?php if ($category_image==true) echo 'category-image'; ?>">
	
				<?php if ($category_image) : ?>
				
				<!-- category featured image -->
				<div class="feature-image" style="background-image:url(<?php echo $category_image; ?>);" data-type="background" alt="<?php single_cat_title();?>" desc="<?php echo wp_strip_all_tags( category_description() );?>">		
				
				<?php endif; ?>

	<div class="overlay"></div>

		<div class="page-title">
			<div class="container-fluid">
				<?php the_archive_description( '<h1 class="text-center">', '</h1>' ); ?>
			</div>
		</div>		
</section>



<?php get_template_part('template-parts/content','categories-list'); ?>

<div class="News-page">
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area">

			<?php
			if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-news', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- .container -->
</div>

<?php
// get_sidebar();
get_footer();
