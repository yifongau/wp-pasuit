<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pasuit
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

<section class="hero-section">
<div class="container">
<div class="row">
      <div class="col-lg-6 align-self-end">

        <h1 class="mb-0">Signalementen</h1>
<?php
				single_term_title( '<h2 class="mb-100 title-border-lg">', '</h2>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>

        </div>
<div class="col-lg text-right">
</div>
</div>
</div>
</section>

<section class="section">
<div class="container">
<div class="row">
<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-index', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content-index', 'none' );

		endif;
?>
</div>
</div>
</section>
	</main><!-- #main -->

<?php
get_footer();
