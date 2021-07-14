<?php
$mission_statement_heading = get_field ('mission_statement_heading');
$mission_statement_image = get_field ('mission_statement_image');
$mission_statement_text = get_field ('mission_statement_text');
?>

<section id="mission" class="mission">
	<div class="container">
		<div class="row">
			<h2><?php echo $mission_statement_heading?></h2>

			<div class="col-md-3 col-md-offset-1 col-sm-12">
				<div class="mission-image">
					<?php if( !empty($mission_statement_image) ) : ?>
				
					<img src="<?php echo $mission_statement_image['url']; ?>" alt="<?php echo $mission_statement_image['alt']; ?>">
				
					<?php endif; ?>
				</div>
			</div>
			
			<div class="col-md-7 col-sm-12">
			<p><?php echo $mission_statement_text ?></p>
			</div>

		</div><!-- .row-->
	</div><!-- .container -->
</section>