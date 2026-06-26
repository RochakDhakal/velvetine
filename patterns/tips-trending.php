<?php

/**
 * Title: Tips & Trending
 * Slug: velvetine/tips-trending
 * Categories: velvetine-post
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"26px","right":"26px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:26px;padding-bottom:40px;padding-left:26px"><!-- wp:heading {"style":{"typography":{"textAlign":"center"},"spacing":{"padding":{"top":"16px","bottom":"16px"}},"border":{"top":{"color":"var:preset|color|heading-color","width":"3px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|heading-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="border-top-color:var(--wp--preset--color--heading-color);border-top-width:3px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--heading-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:16px;padding-bottom:16px">Tips &amp; Trending</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:28px"><!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"270px","className":"is-style-velvetine-image-zoom-in"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:16px"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"normal"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"8px"}}},"textColor":"dark-color","fontSize":"large"} /-->

<!-- wp:post-author-name {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"12px"}}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center">
<?php
	esc_html_e( 'Oops! Blogs Not Found', 'velvetine' );
?>
</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->