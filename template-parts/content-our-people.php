<?php

$people_section_heading = get_field ('people_section_heading');
$people_section_description = get_field ('people_section_description');

?>

<div class="container">
    <div class="our-people">
		<div class="row">


	      <div class="arrow-round"> <a href="#0">
          <div class="arrow"><i class="fa fa-user" aria-hidden="true"></i></div>
          </a> </div>

			<h2 class="text-center"><?php echo $people_section_heading ?></h2>
			   <p class="text-center"><?php echo $people_section_description ?></p>

			   			<?php $loop = new WP_Query( array( 'post_type' => 'team_members', 'orderby'=>'post_id', 'order'=>'ASC' ) ); ?>

						<?php while( $loop->have_posts() ) : $loop->the_post(); 
						?>

						<?php
							$profile_image	= get_field('profile_image');
							$resource_url	= get_field('full_name');
							$button_text	= get_field('job_title');	
						?>
				
					<div class="col-sm-4 col-md-3">
						<div class="post-module">
						<div class="thumbnail-head">

						<img src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>">

				            <!-- Post Content-->
					           <div class="name">
						            <h1><?php echo get_post_meta( get_the_ID(), 'full_name', true ); ?></h1>
						            <h2><?php echo get_post_meta( get_the_ID(), 'job_title', true ); ?></h2>

						        <div class="arrow"> <a href="#0">
				                <div class="arrow"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
				                </a> </div>
					            </div>
					            

					          </div><!-- .thumbnail-head-->

					          
					          
					          <div class="our-people-btn">
					          <a href="<?php the_field('people_page_link'); ?>">READ MORE</a>
							</div>

						</div><!-- .post-module-->
					</div><!-- .col-md-3-->

					<?php endwhile; wp_reset_query(); ?>
			

		</div><!-- .our-people-->
	</div><!-- .row-->
</div> <!-- .conainer-->