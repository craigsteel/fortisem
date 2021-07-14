<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FortisEM
 */

 // No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>


<section class="feature-image">

    <?php if (get_option( 'page_for_posts' ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_option( 'page_for_posts' )), 'banner-thumb' ); ?>

	<div class="feature-image" style="background-image: url('<?php echo $image[0]; ?>')">

		<div class="page-title">
			<div class="container-fluid">

			        <h2><?php if(get_option( 'page_for_posts' ) ) echo get_the_title( get_option( 'page_for_posts' ) ); ?> </h2>

			</div><!-- end row -->
		</div><!-- end container -->

		<?php endif; ?>

			<div class="overlay"></div>

	</div><!-- end feature-image-page -->
</section>
