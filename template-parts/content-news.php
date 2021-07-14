<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FortisEM
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="news">
	<div class="container">
		<div class="row">

			<?php if ( is_single() ) { ?>
				<div class="col-md-8 col-md-offset-2">
				</div>

				<?php } else { ?>

					<div class="image col-md-5">
					<div class="overlay"></div>

						<?php the_post_thumbnail(); ?>

					</div>
			<?php } ?>


	<header class="entry-header col-md-6">
		<?php
		if ( is_single("entry-header") ) :
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
	</header><!-- .entry-header -->

	<div class="entry-content col-md-6 text-left">

		<?php
			if(is_single()) {
				the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'fortisem' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
			} else {
				the_excerpt();
				echo '<a href='.get_the_permalink() . ">Read More</a>";
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
