<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package furnish
 */

?>

<div class="col-lg-8">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				furnish_posted_on();
				furnish_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		
	</header><!-- .entry-header -->
	<div class="single-img-box mt-3">
     	<?php furnish_post_thumbnail(); ?>
	</div>
	<div class="entry-content">
	    <div class="content-box mt-3 mb-3">
	     	<?php the_content(); ?>
		</div>
		<?php
		

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'furnish' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php furnish_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</div>