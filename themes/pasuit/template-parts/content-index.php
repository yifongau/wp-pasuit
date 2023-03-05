<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pasuit
 */

?>

  <div class="container">
    <div class="row masonry-container">
      <div class="col-lg-4 col-sm-6 mb-5">
<article class="text-center" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
<img class="img-fluid mb-4" src="<?php echo $url ?>" />
		<?php
		if ( is_singular() ) :
			the_title( '<h4 class=title-border text-dark">', '</h4>' );
		else :
			the_title( '<h4 class="title-border"><a class="text-dark" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		endif;?>

</article><!-- #post-<?php the_ID(); ?> -->
</div>
</div>
</div>
