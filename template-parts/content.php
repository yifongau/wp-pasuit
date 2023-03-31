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
  <header class="section pb-0">
    <div class="container">
      <div class="row">
<?php
		if ( is_singular() ) :
?>
        <div class="col-sm-3">
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
<img class="img-fluid mb-4" src="<?php echo $url ?>" />
</div>
        <div class="col-sm-9">
<p style="text-transform: uppercase"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></p>
<h3><i><?php echo get_post_meta( get_the_ID(), 'book_title', true) ?></i></h3>
<h4>
  <?php echo get_post_meta( get_the_ID(), 'book_author', true) ?>
</h4>
<?php if ( !empty( get_post_meta( get_the_ID(), 'book_translator', true ) ) ) : ?>
<h4>
  (vert. <?php echo get_post_meta( get_the_ID(), 'book_translator', true) ?>)</h4>
<?php endif; ?>
<?php endif; ?>
        </div>
    </div>
	</header><!-- .entry-header -->


	<div class="container">
    <div class="row">
      <div class="col-lg-8">
<?php
		if ( 'post' === get_post_type() ) :
			?>
        <ul class="list-inline d-flex justify-content-between py-3 ">
        <li class="list-inline-item"><i class="ti-user mr-2"></i><?php echo get_post_meta( get_the_ID(), 'real_author', true ) ?></li>
        <li class="list-inline-item"><i class="ti-calendar mr-2"></i><?php echo get_the_date() ?></li>
        </ul>
    <?php endif; ?>
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
