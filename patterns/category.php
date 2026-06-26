<?php

/**
 * Title: Categorized Post
 * Slug: velvetine/category
 * Categories: velvetine-post
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"26px","right":"26px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:26px;padding-bottom:40px;padding-left:26px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"16px"},"margin":{"top":"0","bottom":"0"},"blockGap":"24px"},"border":{"top":{"color":"var:preset|color|heading-color","width":"3px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|heading-color","width":"1px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--heading-color);border-top-width:3px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--heading-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:16px;padding-bottom:16px"><!-- wp:heading -->
<h2 class="wp-block-heading">
<?php
	esc_html_e( 'Street Fashion', 'velvetine' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"textTransform":"uppercase"}},"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color has-link-color" style="text-transform:uppercase"><a href="#">
<?php
	esc_html_e( 'View All', 'velvetine' );
?>
</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"34px","left":"34px"},"margin":{"top":"24px"}}}} -->
<div class="wp-block-columns" style="margin-top:24px"><!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":7,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"440px","className":"is-style-velvetine-image-zoom-out"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:24px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"12px"}}},"textColor":"heading-color","fontSize":"xxx-large"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":20,"style":{"spacing":{"margin":{"top":"16px"}}},"fontSize":"medium"} /-->

<!-- wp:post-author-name {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>Oops! Blogs Not Found.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:query {"queryId":14,"query":{"perPage":4,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"16px"}}} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"},"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"16px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px"><!-- wp:column {"width":"180px"} -->
<div class="wp-block-column" style="flex-basis:180px"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"180px","className":"is-style-velvetine-image-zoom-out"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color","fontSize":"large"} /-->

<!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"uppercase"}},"textColor":"foreground","fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->