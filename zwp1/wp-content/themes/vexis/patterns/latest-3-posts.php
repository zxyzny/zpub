<?php
/**
 * Title: Latest 3 posts
 * Slug: vexis/latest-3-posts
 * Categories: query, vexis
 * Block Types: core/query
 */
?>
<!-- wp:group {"metadata":{"name":"Recent Blog"},"ploverBlockID":"4a35521d-0c7b-46a3-8619-a277a8a08de8","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"
	style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"ploverBlockID":"205b0be2-a39d-4980-b7a5-7890b7259959","style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small","padding":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","right":"0","bottom":"var:preset|spacing|x-small"}},"border":{"left":{"color":"var:preset|color|primary-color","width":"4px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group"
		style="border-left-color:var(--wp--preset--color--primary-color);border-left-width:4px;padding-top:var(--wp--preset--spacing--x-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"ploverBlockID":"487bd018-b485-41ce-9ed9-82da6b1ee3ea","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"}},"fontSize":"6-x-large"} -->
		<h2 class="wp-block-heading has-6-x-large-font-size"
			style="font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('Recent', 'vexis') ?> <mark
				style="background-color:rgba(0, 0, 0, 0);color:#fefefe" class="has-inline-color"><span
					data-notation-options="{&quot;style&quot;:&quot;highlight&quot;,&quot;color&quot;:&quot;var(--wp--preset--color--primary-active)&quot;}"
					class="has-plover-rough-notation"><?php esc_html_e('Blog', 'vexis') ?></span></mark></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":17,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"ploverBlockID":"91b6a45d-3b63-4fb7-a040-173d3a13a129"} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"ploverBlockID":"73577462-e7bf-4692-ba44-f08adb6f3568","layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"ploverBlockID":"ab7ad514-1359-4f87-9be0-4b6815ef7720","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|neutral-950"}}}},"backgroundColor":"neutral-200","textColor":"neutral-950","layout":{"inherit":false}} -->
		<div class="wp-block-group has-neutral-950-color has-neutral-200-background-color has-text-color has-background has-link-color"
			style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
			<!-- wp:post-title {"level":3,"isLink":true,"ploverBlockID":"c01fb589-ea12-477d-bc61-e2647e9bcccd"} /-->

			<!-- wp:post-excerpt {"ploverBlockID":"d02bd1d1-37b9-423d-a227-2d5ea7477531"} /-->

			<!-- wp:post-date {"ploverBlockID":"0a74ceae-befa-43a7-ac9f-f1b932bf9b17"} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
 