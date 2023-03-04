<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pasuit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container">
    <div class="row">
    <div class="col-lg-12">
      
      <header class="entry-header">
		<?php the_title( '<h2 class="mb-4">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<?php pasuit_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pasuit' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

  <?php if ( get_edit_post_link() ) : ?>


		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'pasuit' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
  <?php endif; ?>
      </div>
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
