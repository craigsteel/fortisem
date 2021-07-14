

<div id="carousel" class="fade-carousel carousel-fade slide" data-ride="carousel">
  <!-- Overlay -->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

<!--     <div class="overlay-2"></div> -->
    <?php $slider = get_posts(array('post_type' => 'slider', 'slide_content', 'posts_per_page' => 5)); ?>
      <?php $count = 0; ?>
      <?php foreach($slider as $slide): ?>

        <div class="item <?php echo ($count == 0) ? 'active' : ''; ?>">
        <div class="overlay"></div>
        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="img-responsive"/>
        
        
          <div class="hero">
          <a href="<?php the_field('link_to_post', $slide->ID); ?>">
          <h1><?php echo get_field ('slide_content', $slide->ID); ?></h1></a>

          <a class="btn btn-quote" role="button" href="#target-contact">REQUEST QUOTE<i class="arrow-round fa fa-chevron-down" aria-hidden="true"></i></a>
          
          
          <div class="col-md-4 col-md-offset-8 col-sm-5 col-sm-offset-7 col-xs-6 col-xs-offset-6">
          <div class="slide-caption">
          <a href="<?php the_field('link_to_post', $slide->ID); ?>">
            <h5><?php echo get_field ('banner_caption', $slide->ID); ?></h5></a>
          </div>
          </div>

        </div>
          

           </div>   
      <?php $count++; ?>
    <?php endforeach; ?>


</div>




  <!-- Controls -->
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
  <span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
  <span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script>
  jQuery(document).ready(function($){
  $("#carousel").carousel({
   interval: 20000
   })
  });
 </script>                           

