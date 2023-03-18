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

<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup" class="col-md-3 col-sm-6 mb-4 mb-md-0">
    <form action="https://pasuit.us14.list-manage.com/subscribe/post?u=2f0b5e9abc5f19af5a7a1d42e&amp;id=7961dd563e&amp;f_id=00b7a1e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
        
<div id="mc_embed_signup_scroll">

        <h6>Schrijf je in voor de nieuwsbrief:</h6>

<div class="mc-field-group">
	<input type="email" value="" name="EMAIL" class="required email form-control form-control-lg" id="mce-EMAIL" placeholder="E-mailadres" required>
	<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
</div>

	<div id="mce-responses" class="clear foot">
		<div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>

	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2f0b5e9abc5f19af5a7a1d42e_7961dd563e" tabindex="-1" value=""></div>

       <div class="optionalParent">
            <div class="clear foot">
                <input type="submit" value="Bevestigen" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary mt-2">
            </div>
        </div>

    </div>
</form>
</div>

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
