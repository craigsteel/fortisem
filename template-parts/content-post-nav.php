<div class="container">
    <div class="row">
		<div class="post-nav">
			
		<?php
    	$prevPost = get_previous_post(true);
    	$nextPost = get_next_post(true);
		?>
 
    	<?php $prevPost = get_previous_post(true);
        if($prevPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $prevPost->ID
            );
            $prevPost = get_posts($args);
            foreach ($prevPost as $post) {
                setup_postdata($post);
    	?>

        <div class="post-previous">
            <div class="col-md-6 col-md-offset-1 col-sm-12">

            <!-- ADD THE THUMBNIAL AND LINK IT TO THE POST -->
            
            <!-- ALSO WITH THE TITLE -->
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></br>

            <!-- FINALLY SHOW AN ACTUAL NAVIGATIONAL PROMPT -->           
                 <a href="<?php the_permalink(); ?>"><i class="fa fa-arrow-left"></i> Previous Project</a>
                 </div>
                 
                 </div>
            </div>


    	<?php
        wp_reset_postdata();
            } //end foreach
        } // end if
        

        $nextPost = get_next_post(true);
        if($nextPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $nextPost->ID
            );
            $nextPost = get_posts($args);
            foreach ($nextPost as $post) {
                setup_postdata($post);
    	?>

        <div class="post-next">
            <div class="col-md-4 col-sm-12">

            <!-- ADD THE THUMBNIAL AND LINK IT TO THE POST -->
                
   
            <!-- ALSO WITH THE TITLE -->
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></br>

            <!-- FINALLY SHOW AN ACTUAL NAVIGATIONAL PROMPT --> 
                <a href="<?php the_permalink(); ?>">Next Project   <i class="fa fa-arrow-right"></i></a>
                </div>

                 </div>
            </div>


    	<?php
        wp_reset_postdata();
            } //end foreach
        } // end if
    	?>
        
        </div>
    </div>
</div>
