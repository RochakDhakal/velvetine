<?php

/**
 * Title: Latest Post
 * Slug: velvetine/latest
 * Categories: velvetine-post
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:heading {"style":{"typography":{"textAlign":"center"},"spacing":{"padding":{"top":"16px","bottom":"16px"}},"border":{"top":{"color":"var:preset|color|heading-color","width":"3px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|heading-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="border-top-color:var(--wp--preset--color--heading-color);border-top-width:3px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--heading-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:16px;padding-bottom:16px">
<?php
	esc_html_e( 'Latest Posts', 'velvetine' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:24px"><!-- wp:query {"queryId":7,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"},"padding":{"bottom":"24px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-bottom:24px"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"280px"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase"}}} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color"} /-->

<!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"textColor":"heading-color","fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center">
<?php
	esc_html_e( 'Oops!, Blogs Not Found.', 'velvetine' );
?>
</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->