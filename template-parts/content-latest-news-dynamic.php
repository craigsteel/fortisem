<?php
/**
 * The template for displaying latest news feed
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fortisem
 */

// No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<section class="latest-news">

  <div class="container">
    <div class="row">
      <h2>LATEST NEWS</h2>
    </div>
  </div>

  <?php
    $args = array(
      'post_type'     => 'post',    // replace "post" if you want to display different post-type
      'category_name'  => 'news', // category slug
      'posts_per_page'  => 3      // show all posts
      );

      // The Query
    $the_query = new WP_Query( $args );

      // The Loop
    if ( $the_query->have_posts() ) {

    $c    =   1;  // counter
    $bpr  =   3;  // number of column in each row
    while ( $the_query->have_posts() ) : $the_query->the_post();
  ?>

  <div class="container">
    <div class="row">   
      <div class="col-sm-6 col-md-4">

        <div class="post-area text-center"><!-- Post-->          
    
          <div class="thumbnail"><!-- Thumbnail-->
            <div class="overlay"></div>
              <?php if ( has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
              
              <?php the_post_thumbnail(); ?></a>
              <?php } else { ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-thumbnail.jpg" alt="No Thumbnail" />
              <?php } ?>
              </div><!-- Thumbnail-->

            <div class="heading-over">
              <h1 class="title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','rys'), get_the_title()) ?>" rel="bookmark"><?php the_title(); ?></a>
              </h1>
            </div>
            
              <div class="arrow-round"> <a href="#0">
                <div class="arrow"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                </a> </div>

                  <div class="post-discription text-center"><!-- Post Description-->              
                  <p><?php $my_excerpt = get_the_excerpt(); if ( '' != $my_excerpt ) {
                        // Some string manipulation performed
                    }
                    echo $my_excerpt; // Outputs the processed value to the page
                    ?></p>
                  </div><!-- Post Description--> 
                
              <a class="services-btn" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">READ MORE</a>
          
        </div><!-- .post-area -->
      </div><!-- .col-md-4 -->

          <?php    
            // we add a condition here to see if counter is equal to the number of column.
            if( $c == $bpr ) { 
            echo '<div class="clear"></div>';
              $c = 0; // back the counter to 0 if the condition above is true.
            }
            $c++; // increment counter of 1 until it hits the limit of column of every row.          
            endwhile;
            } else {
            // no posts found
            _e( '<h2>Oops!</h2>', 'rys' );
            _e( '<p>Sorry, seems there are no post at the moment.</p>', 'rys' );}
            /* Restore original Post Data */
            wp_reset_postdata();
          ?>

      <div class="more">
     <a href="<?php echo home_url() ?>/category/news"> READ ALL NEWS ></a>
     </div>
     

        <div class="clear"></div>
      
    </div><!-- .row -->
  </div><!-- .container -->

</section>
