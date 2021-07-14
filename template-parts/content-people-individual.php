<?php

$profile_image = get_field ('profile_image');
$employee_name = get_field ('employee_name');
$job_title = get_field ('job_title');
$employees_bio = get_field ('employees_bio');

?>
<section class="people">  
  <div class="container">  
    <div class="row">

	    <div class="individual col-md-10 col-md-offset-1">

	      <div class="arrow-round"> <a href="#0">
          <div class="arrow"><i class="fa fa-user" aria-hidden="true"></i></div>
          </a> </div>

          <div class="row">

			<div class="col-md-3">
			<div class="image-cv">
			   <?php if( !empty($profile_image) ) : ?>
			
				<img src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>">
			
				<?php endif; ?>

				<!-- <p>Download BILL HUTTON company CV ></p> -->
			 </div>
			</div>

			<div class="col-md-9">
				<h4><?php echo $employee_name ?></h4>
				<h5><?php echo $job_title ?></h5>

				<?php echo $employees_bio ?>
			</div>

		</div><!-- .row -->

	  </div><!-- .individual -->
	</div><!-- .row -->
  </div><!-- .container -->
 </section> 