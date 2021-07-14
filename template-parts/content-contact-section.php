<?php
$main_title_address = get_field ('main_title_address');
$main_address = get_field ('main_address');

$second_address_title = get_field ('second_address_title');
$second_address = get_field ('second_address');
$second_address_map = get_field ('second_address_map');

$third_address_title = get_field ('third_address_title');
$third_address = get_field ('third_address');
$third_address_map = get_field ('third_address_map');

$email_title = get_field ('email_title');
$email = get_field ('email');

$phone_number_title = get_field ('phone_number_title');
$phone_contact = get_field ('phone_contact');
?>



<section class="contact">  
  <div class="container"> 
  	<div class="row">

		<div class="col-md-4">
			<div class="info-block text-center">

				<div class="arrow-round"> <a href="#0">
          		<div class="arrow"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
          		</a> </div>

		          <h4><?php echo $main_title_address ?></h4>
		          <address><?php echo $main_address ?>
					</address>

          	</div><!-- .col-md-3 -->
         </div>


			<div class="col-md-4">
			<div class="info-block text-center">

				<div class="arrow-round"> <a href="#0">
          		<div class="arrow"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
          		</a> </div>

		          <h4><?php echo $email_title ?></h4>
		          <address><?php echo $email ?></br>
					</address>

          	</div><!-- .col-md-3 -->
         </div>

			<div class="col-md-4">
			<div class="info-block text-center">

				<div class="arrow-round"> <a href="#0">
          		<div class="arrow"><i class="fa fa-phone" aria-hidden="true"></i></div>
          		</a> </div>

		          <h4><?php echo $phone_number_title ?></h4>
		          <address><?php echo $phone_contact ?></br>
					</address>

          	</div><!-- .col-md-3 -->
         </div>

	</div><!-- .row -->

	 	<div class="row">

			<div class="col-md-4">
			<div class="info-block text-center">

				<div class="arrow-round"> <a href="#0">
          		<div class="arrow"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
          		</a> </div>

		          <h4><?php echo $second_address_title ?></h4>
		          <address><?php echo $second_address ?></br>
					</address>

          	</div><!-- .col-md-3 -->
         </div>

         <div class="col-md-8">
			<div class="info-block-map">

				<a href=""><?php if( !empty($second_address_map) ) : ?>
			
				<img src="<?php echo $second_address_map['url']; ?>" alt="<?php echo $second_address_map['alt']; ?>">
				</a>
			
				<?php endif; ?>


          	</div><!-- .col-md-4 -->
         </div>

		</div><!-- .row -->

			<div class="row">

				<div class="col-md-4">
					<div class="info-block text-center">

						<div class="arrow-round"> <a href="#0">
		          		<div class="arrow"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
		          		</a> </div>

				          <h4><?php echo $third_address_title ?></h4>
				          <address><?php echo $third_address ?></br>
							</address>

		          	</div><!-- .col-md-4 -->
		         </div>

		         <div class="col-md-8">
					<div class="info-block-map">

						<a href=""><?php if( !empty($third_address_map) ) : ?>
			
				<img src="<?php echo $third_address_map['url']; ?>" alt="<?php echo $third_address_map['alt']; ?>">
				</a>
			
				<?php endif; ?>

		          	</div><!-- .col-md-8 -->
		         </div>

		    </div><!-- .row -->

  	</div><!-- .container -->
</section> 