<?php

/**
 * Vereist voor boekauteurspagina’s.
 */

// Custom post type
add_action( 'init', 'create_book_authors_post_type' );

function create_book_authors_post_type() {
	register_post_type( 'book_author',
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
		'supports' => array( 'title', 'thumbnail' ),
		'taxonomies' => array( '' ),
		'menu_icon' => 'dashicons-id-alt',
		'has_archive' => 'yes',
		'exclude_from_search' => false,
		)
	);
}

// Metadata for book authors

add_action( 'admin_init', 'book_authors_admin_init' );

function book_authors_admin_init() {
	add_meta_box( 'book_authors_meta_box', 'Biografie', 'display_book_authors_meta_box', 'book_author', 'normal', 'high' );
}

function display_book_authors_meta_box( $book_author ) { 
	$book_author_bio = get_post_meta( $book_author->ID, 'book_author_bio', true );
?>
				<textarea style="max-width:100%;" rows="4" cols="75" name='book_author_bio'><?php echo $book_author_bio; ?></textarea>
<?php
}

// Saving metadata for book authors

add_action( 'save_post', 'save_book_author_data', 10, 2 );

function save_book_author_data( $book_author_id, $book_author ) {
	if ( 'book_author' != $book_author->post_type ) {
		return;
	}

	if ( isset( $_POST['book_author_bio'] ) ) {
		update_post_meta( $book_author_id, 'book_author_bio', sanitize_text_field( $_POST['book_author_bio'] ) );
	}

}

?>

