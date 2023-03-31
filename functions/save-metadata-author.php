<?php

/**
Vereist voor het toevoegen van auteur v. signalement als metadata aan bericht.
*/


// Register function to be called when meta boxes are being registered
// for each post editor
add_action( 'add_meta_boxes', 'register_meta_box1' );

// Create meta box to hold post source information
function register_meta_box1() {
	add_meta_box( 'author_meta_box', 'Signalementgegevens', 'author_meta_box', array( 'post' ), 'normal' );
}

// Display meta box contents
function author_meta_box( $post ) { 
	$real_author = esc_html( get_post_meta( $post->ID, 'real_author', true ) );
	?>
  <table>
    <tr>
			<td style="width: 150px">Gesignaleerd door</td>
			<td>
				<input type='text' size="60" name='real_author' value='<?php echo $real_author; ?>' />
			</td>
		</tr>
	</table>
<?php }

// Register function to be called when post is being saved
add_action( 'save_post', 'save_author_data', 10, 2 );

function save_author_data( $post_id = false, $post = false ) {
	// Check post type for posts or pages
	if ( in_array( $post->post_type, array( 'page','post' ) ) ) {

		// Store data in post meta table if present in post data
		if ( isset( $_POST['real_author'] ) ) {
			update_post_meta( $post_id, 'real_author', sanitize_text_field( $_POST['real_author'] ) );
		}
	}
}

?>
