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

<!-- HARDCODED NAVBAR -->
<header class="navigation">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.html"><img class="img-fluid" src="images/logo.png" alt="pasuit"></a>
    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navogation"
      aria-controls="navogation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navogation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link text-uppercase text-dark dropdown-toggle" href="#" id="navbarDropdown"
            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Home
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="index.html">Homepage 1</a>
            <a class="dropdown-item" href="homepage-2.html">Homepage 2</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase text-dark" href="about.html">Over pasuit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase text-dark" href="contact.html">Contact</a>
        </li>
      </ul>
      <form class="form-inline position-relative ml-lg-4">
        <input class="form-control px-0 w-100" type="search" placeholder="Search">
        <!-- <button class="search-icon" type="submit"><i class="ti-search text-dark"></i></button> -->
        <a href="search.html" class="search-icon"><i class="ti-search text-dark"></i></a>
      </form>
    </div>
  </nav>
</header>

