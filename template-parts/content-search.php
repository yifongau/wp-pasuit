<?php
/**
 * Template part for displaying results in search pages
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
		<?php the_title( sprintf( '<h3 class="entry-title mb-4"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			pasuit_posted_on();
			pasuit_posted_by();
			?>
		</div><!-- .entry-meta -->
    <?php endif; ?>
        </div>
      </div>
    </div>
	</header><!-- .entry-header -->

	<?php pasuit_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php pasuit_entry_footer(); ?>
  </footer><!-- .entry-footer -->
      </div>
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
