<?php

$service_heading_introduction = get_field ('service_heading_introduction');
$service_introduction_text_left = get_field ('service_introduction_text_left');
$service_introduction_text_right = get_field ('service_introduction_text_right');

$service_pdf_image = get_field ('service_pdf_image');
$service_pdf_download_link = get_field ('service_pdf_download_link');

$industries_served_title= get_field ('industries_served_title');
$industries_served_list = get_field ('industries_served_list');

$services_title = get_field ('services_title');
$services_list = get_field ('services_list');

$equipment_title = get_field ('equipment_title');
$equipment_list = get_field ('equipment_list');
$service_pdf_image_download = get_field ('service_pdf_image_download');

?>


<section class="services">
  <div class="container">
    
   <div class="engineering-intro">
    <div class="row">

	    <div class="col-md-10 col-md-offset-1">
	      <h2><?php echo $service_heading_introduction ?></h2>
	     </div>

		<div class="col-md-5 col-md-offset-1">
			<p><?php echo $service_introduction_text_left ?></p>

			<div class="request row">
				<div class="col-xs-4">
				<a href=""><?php if( !empty($service_pdf_image) ) : ?>
			
				<img src="<?php echo $service_pdf_image['url']; ?>" alt="<?php echo $service_pdf_image['alt']; ?>">
				</a>
			
				<?php endif; ?>
				</div>
					
				<div class="pdf col-xs-4">
					<?php 

$file = get_field('service_pdf_image_download');

if( $file ): ?>	
	<a href="<?php echo $service_pdf_image_download['url']; ?>"><?php echo $service_pdf_image_download['']; ?><?php echo $service_pdf_download_link ?></a>
<?php endif; ?>
				</div>
			</div><!-- .row -->
		</div>
	
		<div class="col-md-5">
			<p><?php echo $service_introduction_text_right ?></p>
		</div>
	</div><!-- .row -->
</div><!-- .engineering-intro -->
		    
		<div class="row">
			<div class="col-md-12-">
          <a class="btn btn-quote" role="button" href="contact/#second-target-contact">REQUEST QUOTE<i class="arrow-round fa fa-chevron-down" aria-hidden="true"></i></a>
         	</div>
        </div>
  
		<div class="industries-served">

		<div class="col-md-4">	
			<div class="service-module">
				<div class="icon">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/dist/img/industries.svg" class="img-responsive" alt="">
				</div>
					<h3><?php echo $industries_served_title ?></h3>
						<ul>
							<li><?php echo $industries_served_list ?></li>
						</ul>
			</div><!-- .service-module -->
		</div><!-- .col-md-4 -->

		<div class="col-md-4">	
			<div class="service-module">
				<div class="icon">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/dist/img/services.svg" class="img-responsive" alt="">
			</div>
				<h3><?php echo $services_title ?></h3>
					<ul>
						<li><?php echo $services_list ?></li>
					</ul>
			</div><!-- .service-module -->
		</div><!-- .col-md-4 -->

		<div class="col-md-4">	
			<div class="service-module">
				<div class="icon">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/dist/img/equipment.svg" class="img-responsive" alt="">
			</div>
				<h3><?php echo $equipment_title ?></h3>
					<ul>
						<li><?php echo $equipment_list ?></li>
					</ul>
			</div><!-- .service-module -->
		</div><!-- .col-md-4 -->

		</div><!-- .industries-served -->

	</div><!-- .container -->
</section>