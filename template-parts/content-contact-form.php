<a name="target-contact"></a>
<a name="second-target-contact"></a>
<section class="contact-form">
	<div class="container">
				<div class="contact-head">
				<h2>request quote</h2>
				</div>
	
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php the_content(); ?>
					
				<?php endwhile; // end of the loop ?>
	
	</div> <!-- .conainer -->
</section> <!-- .contact-form -->