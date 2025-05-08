<?php
/**
 * Title: More About Me
 * Slug: vexis/more-about-me
 * Categories: vexis, about
 */
?>
<!-- wp:group {"metadata":{"name":"Know More About Me"},"ploverBlockID":"ff7e887f-592a-4637-a333-55dd73307aa8","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"
	style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"ploverBlockID":"875b8504-1a15-4935-bd91-de25dddbd357","style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small","padding":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","right":"0","bottom":"var:preset|spacing|x-small"}},"border":{"left":{"color":"var:preset|color|primary-color","width":"4px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group"
		style="border-left-color:var(--wp--preset--color--primary-color);border-left-width:4px;padding-top:var(--wp--preset--spacing--x-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)">
		<!-- wp:paragraph {"align":"left","ploverBlockID":"30a154f6-3058-411e-8a94-2b10c7cec747"} -->
		<p class="has-text-align-left"><?php esc_html_e('Some Word About me', 'vexis') ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"ploverBlockID":"b2dc25c0-52e1-4cf0-8366-b6f56a8cf97f","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"}},"fontSize":"6-x-large"} -->
		<h2 class="wp-block-heading has-6-x-large-font-size"
			style="font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('more about ', 'vexis') ?><span
				data-notation-options="{&quot;style&quot;:&quot;highlight&quot;,&quot;color&quot;:&quot;var(--wp--preset--color--primary-active)&quot;}"
				class="has-plover-rough-notation"><mark style="background-color:rgba(0, 0, 0, 0);color:#fefefe"
					class="has-inline-color"><?php esc_html_e('me', 'vexis') ?></mark></span></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"verticalAlignment":"center","ploverBlockID":"7477abbd-6087-4a00-a431-3d747c94b675"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"66.66%","ploverBlockID":"55ba01b8-3d80-436c-9604-914564f7ae14"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
			<!-- wp:paragraph {"ploverBlockID":"35262253-b609-4f0c-963d-24fc8b0f0b6b"} -->
			<p><?php esc_html_e("I'm a design-obsessed developer (or perhaps a code-fluent designer) with 10+ years crafting digital experiences that marry visual elegance with technical precision. Equally comfortable in Figma and VS Code, I thrive in the intersection where user-centered design meets robust engineering.", 'vexis') ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:columns {"ploverBlockID":"1370207e-6c91-47ec-8925-123c0ed836aa"} -->
			<div class="wp-block-columns"><!-- wp:column {"ploverBlockID":"e872928b-4cd1-432e-9aeb-422d410aef63"} -->
				<div class="wp-block-column">
					<!-- wp:group {"ploverBlockID":"129f3c8b-3ccf-46d4-8e33-914de18c1f16","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"ploverBlockID":"16b5320f-8aea-4751-a846-a13e08e1e710"} -->
						<p><strong><?php esc_html_e('Email', 'vexis') ?>:</strong></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"ploverBlockID":"043a8bf5-6fd2-41fe-8a5f-fa03d9167b8b"} -->
						<p><?php /* Translators: Dummy text. */ esc_html_e('contact@example.com', 'vexis') ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"ploverBlockID":"88103cd9-bb27-4ed2-9c77-3d51f5d29df3"} -->
				<div class="wp-block-column">
					<!-- wp:group {"ploverBlockID":"30922c19-8023-476f-962e-ae33be5f4d1c","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"ploverBlockID":"4c54983f-c24a-4a6d-bfca-358920ce40ec"} -->
						<p><strong><?php esc_html_e('Phone', 'vexis') ?>:</strong></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"ploverBlockID":"75645238-4182-4c90-a17d-91b603ac4036"} -->
						<p><?php /* Translators: Dummy text. */ esc_html_e('+1 1234567890', 'vexis') ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"ploverBlockID":"7b18e3fa-42ee-4c7a-9483-64c553f7b2cc"} -->
				<div class="wp-block-column">
					<!-- wp:group {"ploverBlockID":"588f2355-b299-45ed-a1aa-ffad4e61de78","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"ploverBlockID":"e2093ebd-426c-45ad-95ba-98ecd32b0b9a"} -->
						<p><strong><?php esc_html_e('Location', 'vexis') ?>:</strong></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"ploverBlockID":"4ea333c8-4894-471b-91a2-79e35f267a10"} -->
						<p><?php /* Translators: Dummy text. */ esc_html_e('Main Street. No 02', 'vexis') ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"33.33%","ploverBlockID":"e0faf984-ca78-4cee-8af1-d970946d321c"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
			<!-- wp:group {"ploverBlockID":"f4e87cdd-7612-489f-ac99-3f4e07264990","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-small"},"border":{"width":"2px"}},"borderColor":"neutral-950","layout":{"type":"default"},"boxShadow":"6px 6px 0px -3px var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dneutral-0),6px 6px var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-active)"} -->
			<div class="wp-block-group has-border-color has-neutral-950-border-color"
				style="border-width:2px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"align":"center","ploverBlockID":"ea6e5b96-4b8c-4889-b062-3f25c21e3297","style":{"typography":{"fontSize":"10rem","lineHeight":"1","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"system-sans-serif","textShadow":"2px 2px 0px #ffffff,6px 6px 0px var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-active)"} -->
				<p class="has-text-align-center has-system-sans-serif-font-family"
					style="font-size:10rem;font-style:normal;font-weight:700;line-height:1">10</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","ploverBlockID":"a8a88158-2704-4d10-81b3-d921406f9a3e","fontSize":"x-large"} -->
				<p class="has-text-align-center has-x-large-font-size"><?php esc_html_e('Years of experience', 'vexis') ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
