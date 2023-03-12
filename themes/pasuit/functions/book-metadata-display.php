
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
		$book_genre_backend = get_post_meta( $post_id, 'book_genre_backend', true );
		$book_publisher = get_post_meta( $post_id, 'book_publisher', true );
		$book_pub_date = get_post_meta( $post_id, 'book_pub_date', true );
		$book_pages = get_post_meta( $post_id, 'book_pages', true );
		$book_source_lang = get_post_meta( $post_id, 'book_source_lang', true );
		$book_target_lang = get_post_meta( $post_id, 'book_target_lang', true );

		// Output information to browser
    if ( !empty( $book_author ) && !empty( $book_title ) 
      && !empty( $book_publisher ) && !empty( $book_pub_date ) 
    
    ) {

			$content .= '<div class="card bg-light"><div class="card-body mb-0">';
			$content .= '<h6 class="card-title mb-2">' . esc_html( $book_author );
			$content .= ", <em>" . esc_html( $book_title ) . "</em></h6>";
			$content .= '<ul class="card-text list-unstyled">';
      if ( !empty( $book_translator ) && !empty( $book_source_lang ) 
          ) {
          $content .= '<li class="mb-0">Vertaalt uit het ' . esc_html( $book_source_lang) . ' door ' . esc_html( $book_translator ) . "</li>";
      }
			$content .= '<li class="mb-0">' . esc_html( $book_publisher ) . " ";
      $content .= '(' . esc_html( $book_pub_date ) . ')';
      if ( !empty( $book_pages) 
      ) {
			$content .= ', ' . esc_html ( $book_pages ) . ' blz.';
      }
			$content .= '</li></ul></div></div>';
		}
		return $content;
	}
} 

?>
