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
<div class="col-md-3 col-sm-6 mb-4 mb-md-0">
          <h6>Redactie</h6>
          <ul class="list-unstyled">
            <li class="font-secondary text-dark">Tommy van Avermaete</li>
            <li class="font-secondary text-dark">Yi Fong Au (webmaster)</li>
            <p>
          </ul>
          <h6>Contact</h6>
          <ul class="list-unstyled">
            <li class="font-secondary text-dark">info@pasuit.nl</li>
          </ul>
</div>
<div class="col-md-3 col-sm-6 mb-4 mb-md-0">
          <h6>Medewerkers</h6>
          <ul class="list-unstyled">
            <li class="font-secondary text-dark">Nike van Helden</li>
            <li class="font-secondary text-dark">Bram Ieven</li>
            <li class="font-secondary text-dark">Frans-Willem Korsten</li>
            <li class="font-secondary text-dark">Renée van Marissing</li>
            <li class="font-secondary text-dark">Charlotte Pothuizen</li>
            <li class="font-secondary text-dark">Annelies Schulte-Nordholt</li>
            <p>
          </ul>
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
