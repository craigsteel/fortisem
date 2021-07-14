<?php
$management_systems_heading = get_field ('management_systems_heading');
$management_systems_sub_heading = get_field ('management_systems_sub_heading');
$management_systems_text = get_field ('management_systems_text');

$insurance_heading = get_field ('insurance_heading');
$insurance_list = get_field ('insurance_list');
$risk_management_heading = get_field ('risk_management_heading');
$risk_management_text = get_field ('risk_management_text');
?>

<section class="management">
	<div class="container">

	    <div class="row">
	      <h2><?php echo $management_systems_heading ?></h2>
	      <h5><?php echo $management_systems_sub_heading ?></h5>
		</div><!-- .row -->	

		<div class="row">

        	<div class="main-text">
        	<div class="col-md-5 col-md-offset-1">
        	<p><?php echo $management_systems_text ?></p>

				<div class="insurance">
					<h3><?php echo $insurance_heading ?></h3>
					<ul>
					<li><?php echo $insurance_list ?></li>
					</ul>
				</div><!-- .insurance -->	
        	</div><!-- .col -->	

        	<div class="col-md-5">
        	<h3><?php echo $risk_management_heading ?></h3>
			<p><?php echo $risk_management_text ?></p>
        	</div><!-- .col -->	
        </div><!-- .main-text -->	
      </div><!-- .row -->

      <div class="row">
		<div class="certificates">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/dist/img/Consult-australia-logo.png" class="img-responsive" alt=""> 
        </div><!-- .certificates -->
      </div><!-- .row -->

	</div><!-- .container -->	
</section><!-- .management -->	