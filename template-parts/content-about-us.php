<?php 

$about_introduction_heading = get_field ('about_introduction_heading');
$about_introduction_sub_heading = get_field ('about_introduction_sub_heading');
$about_introduction_text_left = get_field ('about_introduction_text_left');
$about_introduction_text_right = get_field ('about_introduction_text_right');

?>

<section class="about-us">
  <div class="container">

    <div class="row">
    
	    <div class="col-md-10 col-md-offset-1">
		    <h2><?php echo $about_introduction_heading ?></h2>
			<h5><?php echo $about_introduction_sub_heading?></h5>
	    </div>

	    <div class="col-md-5 col-md-offset-1">
	    <p><?php echo $about_introduction_text_left ?></p>
		</div>

		<div class="col-md-5">
		<p><?php echo $about_introduction_text_right ?></p>
		</div>

	</div><!-- .row -->

  </div><!-- .container -->
</section>