<ul class="listing listing-widget listing-widget-simple listing-widget-simple-meta">
	<?php while( publisher_have_posts() ): publisher_the_post(); ?>
		<li class="listing-item clearfix">
			<article <?php publisher_attr( 'post' ); ?>>
				<h4 class="title">
					<a href="<?php publisher_the_permalink(); ?>" class="post-url post-title">
						<?php publisher_echo_html_limit_words( publisher_get_the_title(), publisher_get_prop( 'title-limit', - 1 ) ); ?>
					</a>
				</h4>
				<?php publisher_loop_meta(); ?>
			</article>
		</li>
	<?php endwhile; ?>
</ul>
