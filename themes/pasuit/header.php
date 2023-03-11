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

  <header class="navigation">
    <nav id="site-navigation" class="navbar navbar-expand-lg navbar-light bg-secondary">

    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/logo-pasuit.png" alt="pasuit">
    </a>

    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navogation"
      aria-controls="navogation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<div class="collapse navbar-collapse text-center" id="navogation">
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

<?php
        $pages = get_pages();

      foreach( $pages as $page ) {
 echo '<div class="nav-item"><a class="nav-link text-uppercase text-dark" href="' . get_page_link($page->ID) . '">' . $page->post_title . '</a></div>';   
} ?>
</ul>
</div>
		</nav>
  </header>

