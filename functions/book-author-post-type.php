<?php

/**
 * Vereist voor boekauteurspagina’s.
*/
add_action( 'init', 'create_book_authors_post_type' );

function create_book_authors_post_type() {
	register_post_type( 'Boekauteurs',
		array(
				'labels' => array(
				'name' => 'Boekauteurs',
				'singular_name' => 'Boekauteurs',
				'add_new' => 'Nieuwe boekauteur',
				'add_new_item' => 'Nieuwe boekauteur',
				'edit' => 'Bewerken',
				'edit_item' => 'Boekauteur bewerken',
				'new_item' => 'Nieuwe boekauteur',
				'view' => 'Bekijken',
				'view_item' => 'Boekauteur bekijken',
				'search_items' => 'Boekauteurs doorzoeken',
				'not_found' => 'Geen boekauteurs gevonden',
				'not_found_in_trash' => 'Geen boekauteurs in de prullenbak',
				'parent' => 'Bovenliggende boekauteur',
			),
		'public' => true,
		'menu_position' => 20,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies' => array( '' ),
		'menu_icon' => 'dashicons-id-alt',
		'has_archive' => 'yes',
		'exclude_from_search' => false,
		)
	);
}

