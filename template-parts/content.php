<?php
/**
 * Template part for displaying project posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FortisEM
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( is_single() ) { ?>
	<div class="row">
	<div class="col-md-8 col-md-offset-2">
	</div>
	</div>

	<?php } else { ?>

          <div class="col-md-4">
	    <div class="post-module"> <!-- Post-->
          <div class="thumbnail"><!-- Thumbnail-->


             <div class="arrow-round"> <a href="#0">
            <div class="arrow"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
            </a> </div>

            <div class="overlay"></div>

			<?php the_post_thumbnail('thumbnail'); ?>
		</div><!-- Thumbnail-->
	<?php } ?>


	<header class="entry-header">
	<div class="post-content"><!-- Post Content-->     
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta  text-left">
			<?php fortisem_posted_on(); ?>
		</div><!-- .entry-meta -->

		<?php
		endif; ?>
				
	</div>
	</header><!-- .entry-header -->

	<div class="content">

		<?php
			if(is_single()) {
				the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'fortisem' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
			} else {
				the_excerpt();
				echo '<a class="services-btn" href='. esc_url( get_permalink() ) . ">Read More</a>";
			}

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fortisem' ),
				'after'  => '</div>',
			) );
		?>
		</div><!-- .entry-content -->
	</div><!-- .col-md-4 -->
</div><!-- .news -->


</article><!-- #post-## -->
