<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pasuit
 */

?>

<?php
		if ( !is_singular() ) :
?>
<a class="text-dark" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
      <div class="col-lg-4 col-sm-6 mb-5">
<article class="text-center" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
<img class="img-fluid mb-4" src="<?php echo $url ?>" />

<p style="text-transform: uppercase"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></p>
<h4><i><?php echo get_post_meta( get_the_ID(), 'book_title', true) ?></i></h4>
<h5>
  <?php echo get_post_meta( get_the_ID(), 'book_author', true) ?>
</h5>
<h5>
<?php if ( !empty( get_post_meta( get_the_ID(), 'book_translator', true ) ) ) : ?>
  (vert. <?php echo get_post_meta( get_the_ID(), 'book_translator', true) ?>)
</h5>
<?php endif; ?>
</a>
<?php endif; ?>



		<?php
		if ( is_singular() ) :
			the_title( '<h4 class=title-border text-dark">', '</h4>' );
		else :
			the_title( '<h4 class="title-border"><a class="text-dark" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		endif;?>

</article><!-- #post-<?php the_ID(); ?> -->
</div>
