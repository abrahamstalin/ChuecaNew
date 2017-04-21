<?php

/**
 * Custom Template For Better Facebook Comments Plugin
 *
 * Copy this to your site theme and make it more compatible with your site layout
 */

?>

<section id="comments-template-<?php the_ID() ?>" class="comments-template comment-respond">
	<h4 class="section-heading"><span class="h-text"><?php publisher_translation_echo( 'comments' ); ?></span></h4>
	<div id="comments" class="better-comments-area better-facebook-comments-area">
		<div id="respond">
			<div class="fb-comments" data-href="<?php the_permalink(); ?>"
			     data-numposts="<?php echo Better_Facebook_Comments::get_option( 'numposts' ); ?>"
			     data-colorscheme="<?php echo Better_Facebook_Comments::get_option( 'colorscheme' ); ?>"
			     data-order-by="<?php echo Better_Facebook_Comments::get_option( 'order_by' ); ?>" data-width="100%"
			     data-mobile="false"><?php echo Better_Facebook_Comments::get_option( 'text_loading' ); ?></div>
		</div>
	</div>
</section>
