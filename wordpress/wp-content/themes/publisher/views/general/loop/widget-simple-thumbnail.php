<ul class="listing listing-widget listing-widget-thumbnail listing-widget-simple-thumbnail">
	<?php while( publisher_have_posts() ): publisher_the_post(); ?>
		<li class="listing-item clearfix">
			<article <?php publisher_attr( 'post' ); ?>>
				<?php

				$img = publisher_get_thumbnail();

				if ( ! empty( $img['src'] ) ) { ?>
					<a class="img-holder" href="<?php publisher_the_permalink(); ?>"
					   title="<?php publisher_the_title_attribute(); ?>"
					   style="background-image: url(<?php echo $img['src']; ?>);"></a>
				<?php } ?>
				<h4 class="title">
					<a href="<?php publisher_the_permalink(); ?>" class="post-title post-url">
						<?php publisher_echo_html_limit_words( publisher_get_the_title(), 55 ); ?>
					</a>
				</h4>
			</article>
		</li>
	<?php endwhile; ?>
</ul>
<?php

unset( $img );
