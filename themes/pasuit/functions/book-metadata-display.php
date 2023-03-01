
<?php

add_filter( 'the_content', 'display_book_data' );

function display_book_data ( $content ) {
	$post_id = get_the_ID();
	if ( empty( $post_id ) ) {
		return $content;
	}

	if ( in_array( get_post_type( get_the_ID() ), array( 'page','post' ) ) ) {
		// Retrieve current source name and address for post
		$book_title = get_post_meta( $post_id, 'book_title', true );
		$book_author = get_post_meta( $post_id, 'book_author', true );
		$book_translator = get_post_meta( $post_id, 'book_translator', true );
		$book_publisher = get_post_meta( $post_id, 'book_publisher', true );
		$book_pub_date = get_post_meta( $post_id, 'book_pub_date', true );
		$book_source_lang = get_post_meta( $post_id, 'book_source_lang', true );
		$book_target_lang = get_post_meta( $post_id, 'book_target_lang', true );

		// Output information to browser
    if ( !empty( $book_publisher ) && !empty( $book_pub_date ) ) {

			$content .= '<div class="source_pub_date">';
			$content .= "<b>" . esc_html( $book_author );
			$content .= ", <em>" . esc_html( $book_title ) . "</em></b>";
			$content .= '<br>' . esc_html( $book_publisher ) . " ";
			$content .= esc_html( $book_pub_date );
			$content .= '</div>';
		}
		return $content;
	}
} 

?>
