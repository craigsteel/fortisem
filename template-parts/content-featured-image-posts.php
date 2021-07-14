<?php
/**
 * The template for displaying featured image pages.
 *
 * @package FortisEM
 */
 // No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 $main_heading = get_field ('main_heading');
 

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<?php if (has_post_thumbnail() ) { // check for feature image ?>

	<section class="feature-image" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover; background-position: center center;" data-type="background" data-speed="2">
	 
	<?php } ?>

	<div class="overlay"></div>

		<div class="page-title">
			<div class="container">
			<div class="row"></div>
				<h2><?php the_title(); ?></h2>
				<h1><?php echo $main_heading ?></h1>
			</div>
		</div>		
</section>