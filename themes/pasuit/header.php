<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pasuit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pasuit' ); ?></a>

  <header id="masthead" class="navigation">
    <nav id="site-navigation" class="navbar navbar-expand-lg navbar-light">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title navbar"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<h1 class="site-title navbar"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			endif;
			$pasuit_description = get_bloginfo( 'description', 'display' );
			if ( $pasuit_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $pasuit_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>


<div class="collapse navbar-collapse text-center">
<ul class="navbar-nav ml-auto">
<?php
        $categories = get_categories( array(
    "hide_empty" => 0,
    'orderby' => 'name',
    'order'   => 'ASC',
    'exclude' => '1'
) );

      foreach( $categories as $category ) {
 echo '<div class="nav-item"><a class="nav-link text-uppercase text-dark" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';   
} ?>
</ul>
</div>
		</nav>
  </header>

