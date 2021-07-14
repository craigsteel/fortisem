<?php
$video_heading = get_field ('video_heading');
?>

<section class="videos">
	<div class="container">

	<h2><?php echo $video_heading ?></h2>

		<div class="row">
			<div class="col-md-9">
						
				<div class="row">

				<?php if(get_field('large_video_group')): $i = 0; ?>
				<?php while(has_sub_field('large_video_group')): $i++; ?>

		    		<div class="col-md-7">	
    		    
    		    	<h3><?php the_sub_field('large_video_heading'); ?></h3>

						<div class="video-image">

						<a href="#" data-toggle="modal" data-target="#myModal-<?php echo $i; ?>">

						<?php 

						$image = get_sub_field('large_video_image');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>

							</a>
						
						</div><!-- .video-image-->
				</div><!-- .col-md-7 -->
				
					<div class="col-md-5">
						<div class="bridge-text">
							<p><?php the_sub_field('large_video_description'); ?></p>
							<a href="/videos">SEE ALL VIDEOS ></a>
						</div><!-- .bridge-text -->
					</div><!-- .col-md-5 -->

				<?php endwhile; ?>
				<?php endif; ?>

					<?php if(get_field('large_video_group')): $i = 0; ?>
					<?php while(has_sub_field('large_video_group')): $i++; ?>
						
						<!-- Modal -->
						<div class="modal fade col-md-12" id="myModal-<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
						  <div class="modal-dialog" >
						    <div class="modal-content" style="background-color:<?php the_sub_field('box_color'); ?>">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						      </div>
						      <div class="modal-body">
						        <p><?php the_sub_field('large_video_link'); ?></p>
						      </div>
						    </div>
						  </div>
						</div>
						
					<?php endwhile; ?>
					<?php endif; ?>

				</div><!-- .row -->
			</div><!-- .col-md-9-->

				<?php if(get_field('small_video_group')): $i = 0; ?>
				<?php while(has_sub_field('small_video_group')): $i++; ?>
					
		    		<div class="small-video col-md-3">

    		   			<div class="small-video-heading">
    		    			<p><?php the_sub_field('small_video_heading'); ?></p>
    		    		</div>

						<div class="video-image">

						<a href="#" data-toggle="modal" data-target="#2myModal-<?php echo $i; ?>">

						<?php 

						$image = get_sub_field('small_video_image');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>

							</a>
						
						</div><!-- .video-image-->

							<p><?php the_sub_field('small_video_description'); ?></p>
							<a href="/videos">SEE ALL VIDEOS ></a>

						</div>

				<?php endwhile; ?>
				<?php endif; ?>

					<?php if(get_field('small_video_group')): $i = 0; ?>
					<?php while(has_sub_field('small_video_group')): $i++; ?>
						
						<!-- Modal -->
						<div class="modal fade col-md-12" id="2myModal-<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
						  <div class="modal-dialog" >
						    <div class="modal-content" style="background-color:<?php the_sub_field('box_color'); ?>">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						      </div>
						      <div class="modal-body">
						        <p><?php the_sub_field('small_video_link'); ?></p>
						      </div>
						    </div>
						  </div>
						</div>
						
					<?php endwhile; ?>
					<?php endif; ?>

		</div><!-- .row -->

	</div><!-- .container -->
</section><!-- .section -->

<script> 
$("#myModal").on('shown.bs.modal', function (e) {alert( "Modal is successfully shown!" );});
</script>