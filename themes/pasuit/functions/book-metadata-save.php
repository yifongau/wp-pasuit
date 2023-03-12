<?php

/**
Vereist voor het toevoegen en weergeven van boek-metadata bij signalementen
*/


// Register function to be called when meta boxes are being registered
// for each post editor
add_action( 'add_meta_boxes', 'register_meta_box' );

// Create meta box to hold post source information
function register_meta_box() {
	add_meta_box( 'book_meta_box', 'Boekgegevens', 'book_meta_box', array( 'post' ), 'normal' );
}

// Display meta box contents
function book_meta_box( $post ) { 
	// Retrieve current source name and address based on post ID
	$book_title = esc_html( get_post_meta( $post->ID, 'book_title', true ) );
	$book_author = esc_html( get_post_meta( $post->ID, 'book_author', true ) );
	$book_translator = esc_html( get_post_meta( $post->ID, 'book_translator', true ) );
	$book_genre_backend = esc_html( get_post_meta( $post->ID, 'book_genre_backend', true ) );
	$book_publisher = esc_html( get_post_meta( $post->ID, 'book_publisher', true ) );
	$book_pub_date = esc_html( get_post_meta( $post->ID, 'book_pub_date', true ) );
	$book_pub_pages = esc_html( get_post_meta( $post->ID, 'book_pages', true ) );
	$book_source_lang = esc_html( get_post_meta( $post->ID, 'book_source_lang', true ) );
	$book_target_lang = esc_html( get_post_meta( $post->ID, 'book_target_lang', true ) );
	?>

	<!-- Display fields to enter and edit source name and source address -->
	<table>
		<tr>
			<td style="width: 100px">Titel</td>
			<td>
				<input type='text' size="40" name='book_title' value='<?php echo $book_title; ?>' />
			</td>
		</tr>
		<tr>
			<td style="width: 100px">Auteur</td>
			<td>
				<input type='text' size="40" name='book_author' value='<?php echo $book_author; ?>' />
			</td>
		</tr>
		<tr>
			<td style="width: 100px">Vertaler</td>
			<td>
				<input type='text' size="40" name='book_translator' value='<?php echo $book_translator; ?>' />
			</td>
    </tr>
    <tr>
			<td style="width: 100px">Genre (zichtbaar)</td>
			<td>
				<input type='text' size="40" name='book_genre_frontend' value='Wordt bepaald door ‘categorie’.' readonly />
			</td>
		</tr>
    <tr>
			<td style="width: 100px">Genre</td>
			<td>
      <input type='text' size="40" name='book_genre_backend' value='<?php echo $book_genre_backend; ?>' />
			</td>
		</tr>
		<tr>
			<td style="width: 100px">Uitgever</td>
			<td>
				<input type='text' size="40" name='book_publisher' value='<?php echo $book_publisher; ?>' />
			</td>
		</tr>
		<tr>
			<td>Publicatiedatum</td>
			<td>
				<input type='text' size="40" name='book_pub_date' value='<?php echo $book_pub_date; ?>' />
			</td>
		</tr>
		<tr>
			<td>Aantal blz.</td>
			<td>
				<input type='text' size="40" name='book_pages' value='<?php echo $book_pages; ?>' />
			</td>
		</tr>
		<tr>
			<td>Brontaal</td>
			<td>
				<input type='text' size="40" name='book_source_lang' value='<?php echo $book_source_lang; ?>' />
			</td>
		</tr>
		<tr>
			<td>Doeltaal (indien v.t. )</td>
			<td>
				<input type='text' size="40" name='book_target_lang' value='<?php echo $book_target_lang; ?>' />
			</td>
		</tr>
	</table>
<?php }

// Register function to be called when post is being saved
add_action( 'save_post', 'save_book_data', 10, 2 );

function save_book_data( $post_id = false, $post = false ) {
	// Check post type for posts or pages
	if ( in_array( $post->post_type, array( 'page','post' ) ) ) {

		// Store data in post meta table if present in post data
		if ( isset( $_POST['book_title'] ) ) {
			update_post_meta( $post_id, 'book_title', sanitize_text_field( $_POST['book_title'] ) );
		}

		if ( isset( $_POST['book_author'] ) ) {
			update_post_meta( $post_id, 'book_author', sanitize_text_field( $_POST['book_author'] ) );
		}
    
    if ( isset( $_POST['book_translator'] ) ) {
			update_post_meta( $post_id, 'book_translator', sanitize_text_field( $_POST['book_translator'] ) );
		}

    if ( isset( $_POST['book_genre_backend'] ) ) {
			update_post_meta( $post_id, 'book_genre_backend', sanitize_text_field( $_POST['book_genre_backend'] ) );
		}
		if ( isset( $_POST['book_publisher'] ) ) {
			update_post_meta( $post_id, 'book_publisher', sanitize_text_field( $_POST['book_publisher'] ) );
		}

		if ( isset( $_POST['book_pub_date'] ) ) {
			update_post_meta( $post_id, 'book_pub_date', sanitize_text_field( $_POST['book_pub_date'] ) );
		}

		if ( isset( $_POST['book_pages'] ) ) {
			update_post_meta( $post_id, 'book_pages', sanitize_text_field( $_POST['book_pages'] ) );
		}
		if ( isset( $_POST['book_source_lang'] ) ) {
			update_post_meta( $post_id, 'book_source_lang', sanitize_text_field( $_POST['book_source_lang'] ) );
		}

		if ( isset( $_POST['book_target_lang'] ) ) {
			update_post_meta( $post_id, 'book_target_lang', sanitize_text_field( $_POST['book_target_lang'] ) );
		}
	}
}

?>
