<?php

/**
 * Title: Post Hero Section
 * Slug: velvetine/post-cover
 * Categories: velvetine-post
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"26px","right":"26px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:26px;padding-bottom:28px;padding-left:26px"><!-- wp:query {"queryId":7,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"600px"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"745px"}} -->
<div class="wp-block-group" style="margin-top:24px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"category","separator":"","style":{"typography":{"textAlign":"center","textTransform":"uppercase"}}} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"12px"}}},"textColor":"dark-color"} /-->

<!-- wp:post-author-name {"style":{"typography":{"textAlign":"center","textTransform":"uppercase"},"spacing":{"margin":{"top":"24px"}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center">
<?php
	esc_html_e( 'Oops! Blog(s) not found', 'velvetine' );
?>
</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->