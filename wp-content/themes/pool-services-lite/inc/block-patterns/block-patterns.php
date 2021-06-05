<?php
/**
 * Pool Services Lite: Block Patterns
 *
 * @package Pool Services Lite
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'pool-services-lite',
		array( 'label' => __( 'Pool Services Lite', 'pool-services-lite' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'pool-services-lite/banner-section',
		array(
			'title'      => __( 'Banner Section', 'pool-services-lite' ),
			'categories' => array( 'pool-services-lite' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":5853,\"dimRatio\":0,\"align\":\"full\",\"className\":\"banner-section\"} -->\n<div class=\"wp-block-cover alignfull banner-section\" style=\"background-image:url(" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png)\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"full\"} -->\n<div class=\"wp-block-columns alignfull\"><!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:50%\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1} -->\n<h1 class=\"has-text-align-center\">Te obtinuit ut adepto satis somno allisque</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\"} -->\n<p class=\"has-text-align-center\">Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":0,\"style\":{\"color\":{\"background\":\"#2bc8e0\"}},\"className\":\"btn\"} -->\n<div class=\"wp-block-button btn\"><a class=\"wp-block-button__link has-background no-border-radius\" style=\"background-color:#2bc8e0\">Book a Service Now !</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'pool-services-lite/services-section',
		array(
			'title'      => __( 'Services Section', 'pool-services-lite' ),
			'categories' => array( 'pool-services-lite' ),
			'content'    => "<!-- wp:cover {\"overlayColor\":\"white\",\"align\":\"wide\",\"className\":\"article-outer-box\"} -->\n<div class=\"wp-block-cover alignwide has-white-background-color has-background-dim article-outer-box\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\"} -->\n<div class=\"wp-block-columns alignwide\"><!-- wp:column {\"width\":\"55.55%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:55.55%\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"style\":{\"color\":{\"text\":\"#1f2122\"}}} -->\n<h3 class=\"has-text-align-left has-text-color\" style=\"color:#1f2122\">WELCOME TO THE POOL SERVICES</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"left\",\"style\":{\"color\":{\"text\":\"#1f2122\"}}} -->\n<h2 class=\"has-text-align-left has-text-color\" style=\"color:#1f2122\">Te obtinuit ut adepto satis somno allisque</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"style\":{\"color\":{\"text\":\"#1f2122\"}}} -->\n<p class=\"has-text-align-left has-text-color\" style=\"color:#1f2122\">Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"left\"} -->\n<div class=\"wp-block-buttons alignleft\"><!-- wp:button {\"borderRadius\":0} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link no-border-radius\">Discover More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"44.44%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:44.44%\"><!-- wp:image {\"id\":5855,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/services1.png\" alt=\"\" class=\"wp-image-5855\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover -->",
		)
	);
}