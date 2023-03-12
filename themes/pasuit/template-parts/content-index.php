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

<h6 class="font-weight-normal text-uppercase"><?php $category = get_the_category(); echo $category[0]->cat_name; ?>
 // <?php echo get_post_meta( get_the_ID(), 'real_author', true) ?></h6>
<h4 class="font-italic"><?php echo get_post_meta( get_the_ID(), 'book_title', true) ?></h4>
<h5>
  <?php echo get_post_meta( get_the_ID(), 'book_author', true) ?>
</h5>
<?php if ( !empty( get_post_meta( get_the_ID(), 'book_translator', true ) ) ) : ?>
<h5>
  (vert. <?php echo get_post_meta( get_the_ID(), 'book_translator', true) ?>)
</h5>
<?php endif; ?>

</a>
<?php endif; ?>




</article><!-- #post-<?php the_ID(); ?> -->
</div>
