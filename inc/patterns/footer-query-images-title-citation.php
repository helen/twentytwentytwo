<?php
/**
 * Footer with query, featured images, title, and citation
 */
return array(
	'title'      => __( 'Footer with query, featured images, title, and citation', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
					<div class="wp-block-query alignwide"><!-- wp:post-template -->
					<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"318px"} /-->

					<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

					<!-- wp:post-excerpt /-->

					<!-- wp:post-date {"format":"F j, Y","isLink":true,"fontSize":"small"} /-->
					<!-- /wp:post-template --></div>
					<!-- /wp:query -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-title /-->

					<!-- wp:paragraph {"align":"right"} -->
					<p class="has-text-align-right">' . esc_html__( 'Proudly powered by ', 'twentytwentytwo' ) . '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">WordPress</a></p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
