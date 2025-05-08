<?php
/**
 * Title: My Vision
 * Slug: vexis/my-vision
 */
?>
<!-- wp:cover {"url":"<?php vexis_the_asset_url( 'images/shore.webp' ) ?>","dimRatio":30,"customOverlayColor":"#121214","isUserOverlayColor":true,"minHeight":520,"minHeightUnit":"px","metadata":{"name":"My Vision"},"ploverBlockID":"501cd0da-2506-4f8f-a06e-00f14be3521e","align":"wide","style":{"color":{"duotone":"var:preset|duotone|black-and-white"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide" style="min-height:520px"><span aria-hidden="true"
        class="wp-block-cover__background has-background-dim-30 has-background-dim"
        style="background-color:#121214"></span><img class="wp-block-cover__image-background" alt=""
        src="<?php vexis_the_asset_url( 'images/shore.webp' ) ?>" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"ploverBlockID":"3eddf97d-274a-4f33-a2dc-95f8f0dbe30e","style":{"color":{"background":"#0d0d0dcf","text":"#f4f4f4"},"elements":{"link":{"color":{"text":"#f4f4f4"}}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|2-x-small","right":"var:preset|spacing|2-x-small"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-text-color has-background has-link-color"
			style="color:#f4f4f4;background-color:#0d0d0dcf;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--2-x-small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--2-x-small)">
			<!-- wp:paragraph {"align":"center","ploverBlockID":"397ff4fa-df70-47d7-b82b-696b4e721698"} -->
			<p class="has-text-align-center"><?php /* Translators: Dummy text. */ esc_html_e('“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet dictum sit amet justo donec enim. ”', 'vexis') ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","ploverBlockID":"051c5667-0b9c-49e9-bada-932f8b18e2e3"} -->
			<p class="has-text-align-center"><?php esc_html_e('- Gavin Lamb -', 'vexis') ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"width":"86px","height":"86px","scale":"cover","sizeSlug":"full","linkDestination":"none","ploverBlockID":"83fc19ac-8e61-4c6e-a255-f8d6a978428a","align":"center","style":{"border":{"radius":"94px"}}} -->
			<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img
					src="<?php vexis_the_asset_url( 'images/avatar-01.jpg' ) ?>" alt=""
					style="border-radius:94px;object-fit:cover;width:86px;height:86px" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->