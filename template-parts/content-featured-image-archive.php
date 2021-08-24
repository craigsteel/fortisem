<?php

	// grab the URL for the category image
	if (function_exists('category_image_src')) {
		$category_image = category_image_src( array( 'size' => 'full' ) , false ); 

		} else {
			
		$category_image = '';
	}

	get_header(); ?>
    
    <!-- add a class to the header if a category image exists -->
	<section class="archive-header" <?php if ($category_image==true) echo 'category-image'; ?>>
	
		<?php if ($category_image) : ?>
				
			<!-- category featured image -->
			<div class="feature-image" style="background-image:url(<?php echo $category_image; ?>);" 
			data-type="background" alt="<?php single_cat_title();?>" desc="<?php echo wp_strip_all_tags( category_description() );?>">		
				
		<?php endif; ?>

	<div class="feature-image__overlay"></div>

		<div class="page-title single">
			<div class="container">
			<div class="row"></div>
				<h1><?php the_archive_description(); ?></h1>
			</div>
		</div>			
</section>



<?php get_template_part('template-parts/content','categories-list'); ?>