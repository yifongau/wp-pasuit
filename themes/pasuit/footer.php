<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pasuit
 */

?>

	<footer id="colophon" class="site-footer bg-secondary">
    <div class="site-info section">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6 mb-4 mb-md-0">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/logo-pasuit.png" alt="pasuit">
</a>
</div>
</div>
</div>
</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
