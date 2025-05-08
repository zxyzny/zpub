<?php
/**
 * Title: Copyright
 * Slug: vexis/copyright
 * Categories: footer, vexis
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"metadata":{"name":"Copyright"},"ploverBlockID":"6a32fa72-215a-43b8-8a6b-668a9ae4be32","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"},"blockGap":"0"},"border":{"top":{"color":"var:preset|color|neutral-400","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"
	style="border-top-color:var(--wp--preset--color--neutral-400);border-top-width:1px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
	<!-- wp:paragraph {"align":"center","ploverBlockID":"2b4791cb-b55c-4975-baf5-377eaf7dc483"} -->
	<p class="has-text-align-center">
		<?php
		/* Translators: Theme author link. */
		$author_link = '<a href="' . esc_url( __( 'https://wpplover.com/', 'vexis' ) ) . '" rel="nofollow">' . esc_html__('WP Plover', 'vexis') . '</a>';
		/* Translators: Theme name and link. */
		$theme_link = '<a href="' . esc_url( __( 'https://wpplover.com/themes/vexis/', 'vexis' ) ) . '" rel="nofollow">' . esc_html__('Vexis', 'vexis') . '</a>';
		echo sprintf(
		/* Translators: Copyright © date – Theme Name By WP Plover */
			esc_html__( 'Copyright © %1$s - %2$s Theme By %3$s', 'vexis' ),
			date('Y'),
			$theme_link,
			$author_link
		);
		?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->