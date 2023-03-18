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

<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup" class="col-md-3 col-sm-6 mb-4 mb-md-0">
    <form action="https://pasuit.us14.list-manage.com/subscribe/post?u=2f0b5e9abc5f19af5a7a1d42e&amp;id=7961dd563e&amp;f_id=00b7a1e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
        <h6>Inschrijven nieuwsbrief</h6>
<div class="mc-field-group">
	<label for="mce-EMAIL">E-mail<span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
	<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
</div>
	<div id="mce-responses" class="clear foot">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2f0b5e9abc5f19af5a7a1d42e_7961dd563e" tabindex="-1" value=""></div>
        <div class="optionalParent">
            <div class="clear foot">
                <input type="submit" value="Verzenden" name="subscribe" id="mc-embedded-subscribe" class="button">
            </div>
        </div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

</div>
</div>
</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
