<section class="service-cards">
<div class="row">

      <?php $loop = new WP_Query( array( 'post_type' => 'service_cards_home', 'orderby'=>'post_id', 'order'=>'ASC' ) ); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); 
      ?>

        <?php
        $service_card_image = get_field('service_card_image');
        $service_card_title = get_field('service_card_title');
        $service_card_description  = get_field('service_card_description'); 
        ?>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="column">
          <div class="post-module"> 
            
            <div class="thumbnail"> 
              <div class="arrow-round" target="_blank" class="arrow"><i class="fa fa-chevron-down" aria-hidden="true"></i></a> 
              </div>
              
              <img src="<?php echo $service_card_image [url]; ?>" alt="<?php echo $service_card_image [alt]; ?>">

            <div class="title">
            <h1><?php echo get_post_meta( get_the_ID(), 'service_card_title', true ); ?></h1>
            <h2 class="sub_title">SERVICES</h2>
            </div>

            </div><!-- Thumbnail-->

              <div class="post-content"> 
                <div class="category">
                <p class="description"><?php echo get_post_meta( get_the_ID(), 'service_card_description', true ); ?></p>
                </div><!-- Post category--> 
                <a  class="services-btn" href="<?php the_field('page_link'); ?>">READ MORE</a>
              </div><!-- Post Content--> 

          </div><!-- row-->
        </div><!-- container -->
      </div><!-- Post-module-->

      <?php endwhile; wp_reset_query(); ?>

    </div>
</section>

