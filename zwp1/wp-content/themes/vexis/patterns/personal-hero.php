<?php
/**
 * Title: Personal Hero
 * Slug: vexis/personal-hero
 * Categories: vexis, header
 */
?>
<!-- wp:cover {"dimRatio":0,"overlayColor":"neutral-0","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","isDark":false,"metadata":{"name":"Personal Hero"},"ploverBlockID":"fb91c8ba-ee4f-4f89-8009-1f4027c92f22","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral-950"}}}},"textColor":"neutral-950","layout":{"type":"constrained","contentSize":""},"particles":true,"particlePreset":"colorful-bubbles","particleOverrideOptions":{"particles":{"color":["#c3c8bf"]}}} -->
<div class="wp-block-cover alignfull is-light has-neutral-950-color has-text-color has-link-color"
	style="min-height:100vh"><span aria-hidden="true"
		class="wp-block-cover__background has-neutral-0-background-color has-background-dim-0 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:columns {"ploverBlockID":"4b6f2847-86d2-488d-9455-88d8faa1de5d","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"verticalAlignment":"center","width":"60%","ploverBlockID":"0d871cbd-e83f-4fd2-941e-48e01a9f78b4","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"cssOrder":{"desktop":"","tablet":"","mobile":"__INITIAL_VALUE__"}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
				<!-- wp:group {"ploverBlockID":"e2bd919b-67eb-45f2-9b45-dff458151fa6","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"ploverBlockID":"3fe91bab-4a56-48cb-a003-f8d00dc7bc26","fontSize":"x-large"} -->
					<p class="has-x-large-font-size"><?php esc_html_e( 'Hi! My Name is', 'vexis' ) ?> <span
							data-notation-options="{&quot;style&quot;:&quot;underline&quot;,&quot;color&quot;:&quot;var(--wp--preset--color--primary-active)&quot;}"
							class="has-plover-rough-notation"><strong><?php esc_html_e('Gavin Lamb', 'vexis') ?></strong> </span></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":1,"ploverBlockID":"82110a61-8d39-4173-adea-d82bed2aefa1","style":{"typography":{"lineHeight":"1.4"}},"fontSize":"7-x-large"} -->
					<h1 class="wp-block-heading has-7-x-large-font-size" style="line-height:1.4"><?php esc_html_e('Creative Designer And', 'vexis') ?>
						<span style="position: relative;"
							data-notation-options="{&quot;style&quot;:&quot;highlight&quot;,&quot;color&quot;:&quot;var(--wp--preset--color--primary-active)&quot;}"
							class="has-plover-rough-notation"><mark
								style="background-color:rgba(0, 0, 0, 0);color:#fefefe"
								class="has-inline-color"><?php esc_html_e('Developer', 'vexis') ?></mark></span></h1>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->

				<!-- wp:spacer {"height":"24px","ploverBlockID":"13e7f3b3-2604-4a89-b736-ddc2f914240b"} -->
				<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:buttons {"ploverBlockID":"15eed233-1b1b-48bc-8a36-ebbb644502fb"} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"neutral-950","textColor":"neutral-0","ploverBlockID":"ee88952b-5600-4016-9d90-60effd90ce4b","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|neutral-0"}}},"border":{"width":"0px","style":"none"}},"iconLibrary":"plover-core","iconSlug":"arrow-up-right","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022\u003e\u003cline x1=\u00227\u0022 y1=\u002217\u0022 x2=\u002217\u0022 y2=\u00227\u0022\u003e\u003c/line\u003e\u003cpolyline points=\u00227 7 17 7 17 17\u0022\u003e\u003c/polyline\u003e\u003c/svg\u003e"} -->
					<div class="wp-block-button" style="text-transform:uppercase"><a class="wp-block-button__link has-neutral-0-color has-neutral-950-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px"><?php esc_html_e('Get in touch', 'vexis') ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"360px","ploverBlockID":"5c52649d-06d6-4cc1-aec9-1aa1c0bcb594"} -->
			<div class="wp-block-column" style="flex-basis:360px">
				<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","ploverBlockID":"79f3fa7b-057b-4a0f-8a7f-da850ec49e7b","style":{"border":{"radius":{"topRight":"50%","bottomLeft":"50%","topLeft":"0px","bottomRight":"0px"}}},"dropShadow":"drop-shadow(4px 4px 0px var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dneutral-0)) drop-shadow(4px 4px 0px var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-active))","boxShadow":""} -->
				<figure class="wp-block-image size-full has-custom-border"><img
						src="<?php vexis_the_asset_url( 'images/person.jpg' ) ?>" alt=""
						style="border-top-left-radius:0px;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:0px;object-fit:cover" />
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
</div>
<!-- /wp:cover -->
