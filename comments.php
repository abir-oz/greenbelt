<div class="comments-area">
	<h4>
		<?php
		$greenbelt_cn = get_comments_number();
		if ( $greenbelt_cn <= 1 ) {
			echo esc_html($greenbelt_cn) . " " . __( "Comment", "greenbelt" );
		} else {
			echo esc_html($greenbelt_cn) . " " . __( "Comments", "greenbelt" );
		}
		?>
    </h4>
	<div class="comment-list">
		<?php
		wp_list_comments();
		?>
        <div class="comments-pagination">
			<?php
			the_comments_pagination( array(
				'screen_reader_text' => __( 'Pagination', 'greenbelt' ),
				'prev_text'          => '<' . __( 'Previous Comments', 'greenbelt' ),
				'next_text'          => '>' . __( 'Next Comments', 'greenbelt' ),
			) );
			?>
        </div>
	</div>
    <div class="comment-form">
		<?php
		comment_form();
		?>
    </div>

</div>

