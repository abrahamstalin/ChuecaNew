<?php

/**
 * Custom Template For Better Disqus Comments Plugin
 *
 * Copy this to your site theme and make it more compatible with your site layout
 */

?>

<section id="comments-template-<?php the_ID() ?>" class="comments-template comment-respond">
	<h4 class="section-heading"><span class="h-text"><?php publisher_translation_echo( 'comments' ); ?></span></h4>

	<div id="comments" class="better-comments-area better-disqus-comments-area">

		<div id="disqus_thread"></div>

		<noscript><?php _e( 'Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a>', 'publisher' ); ?></noscript>

	</div>
</section>
