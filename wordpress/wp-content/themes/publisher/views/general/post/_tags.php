<?php

$terms = get_the_terms( get_the_ID(), 'post_tag' );

if ( is_wp_error( $terms ) || empty( $terms ) ) {
	return;
}

$post_settings = publisher_get_option( 'post-page-settings' );

?>
	<div <?php publisher_attr( 'post-terms', 'post-tags clearfix', 'tag' ); ?>>
		<span class="terms-label"><i class="fa fa-tags"></i></span>
		<?php

		$post_settings['tag-count'] = intval( $post_settings['tag-count'] );
		if ( $post_settings['tag-count'] > 0 ) {
			$terms = array_slice( $terms, 0, $post_settings['tag-count'] );
		}

		foreach ( $terms as $term ) {

			$link = get_term_link( $term, 'post_tag' );

			if ( is_wp_error( $link ) ) {
				continue;
			}

			?><a href="<?php echo esc_url( $link ); ?>" rel="tag"><?php echo $term->name; ?></a><?php

		}

		?>
	</div>
<?php

unset( $terms );
unset( $post_settings );
