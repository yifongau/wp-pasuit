<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pasuit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="entry-title title-border-lg">', '</h2>' );
		else :
			the_title( '<h2 class="entry-title title-border-lg"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>

        </div>
      </div>
    </div>
	</header><!-- .entry-header -->


	<div class="entry-content container">
    <div class="row">
      <div class="col-lg-8">
<?php
		if ( 'post' === get_post_type() ) :
			?>
        <ul class="list-inline d-flex justify-content-between py-3 ">
        <li class="list-inline-item"><i class="ti-user mr-2"></i><?php pasuit_posted_by() ?></li>
        <li class="list-inline-item"><i class="ti-calendar mr-2"></i><?php pasuit_posted_on() ?></li>
        </ul>
    <?php endif; ?>
  <?php pasuit_post_thumbnail(); ?>
<div class="content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pasuit' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pasuit' ),
				'after'  => '</div>',
			)
		);
    ?>

        </div>
      </div>
    </div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
