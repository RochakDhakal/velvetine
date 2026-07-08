<?php

/**
 * Title: Sidebar Default
 * Slug: velvetine/sidebar-default
 * Categories: velvetine
 */
$velvetine_url    = trailingslashit( get_template_directory_uri() );
$velvetine_images = array(
	$velvetine_url . 'assets/images/ad.png',
	$velvetine_url . 'assets/images/testimonial_3.jpg',
);
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center">
<?php
	esc_html_e( 'Advertisement', 'velvetine' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":1277,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"top":"18px","right":"0","bottom":"0","left":"0"}}}} -->
<figure class="wp-block-image aligncenter size-full" style="margin-top:18px;margin-right:0;margin-bottom:0;margin-left:0"><img src="
<?php
	echo esc_url( $velvetine_images[0] );
?>
" alt="" class="wp-image-1277"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"80px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:80px"><!-- wp:heading {"style":{"typography":{"textAlign":"center"},"spacing":{"padding":{"top":"16px","bottom":"16px"}},"border":{"top":{"color":"var:preset|color|heading-color","width":"3px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|heading-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="border-top-color:var(--wp--preset--color--heading-color);border-top-width:3px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--heading-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:16px;padding-bottom:16px"><?php
	esc_html_e('Popular Tags', 'velvetine');
?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"24px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"dark-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-color-color has-text-color has-link-color" style="margin-top:24px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:tag-cloud {"smallestFontSize":"14.1pt","largestFontSize":"14.1pt","className":"is-style-outline","style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"typography":{"lineHeight":"1"}},"borderColor":"border-color"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"80px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:80px"><!-- wp:heading {"style":{"typography":{"textAlign":"center"},"spacing":{"padding":{"top":"16px","bottom":"16px"}},"border":{"top":{"color":"var:preset|color|heading-color","width":"3px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|heading-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="border-top-color:var(--wp--preset--color--heading-color);border-top-width:3px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--heading-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:16px;padding-bottom:16px">Author</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"24px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"border":{"width":"1px","style":"solid"}},"textColor":"dark-color","borderColor":"border-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-border-color has-border-color-border-color has-dark-color-color has-text-color has-link-color" style="border-style:solid;border-width:1px;margin-top:24px;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":1299,"width":"auto","height":"180px","aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="
<?php
	echo esc_url( $velvetine_images[1] );
?>
" alt="" class="wp-image-1299" style="aspect-ratio:4/3;object-fit:cover;width:auto;height:180px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center","fontSize":"22px"},"spacing":{"margin":{"top":"18px"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-top:18px;font-size:22px">
<?php
	esc_html_e( 'Albert Watson', 'velvetine' );
?>
</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"16px"}}},"textColor":"foreground"} -->
<p class="has-text-align-center has-foreground-color has-text-color has-link-color" style="margin-top:16px">
<?php
	esc_html_e( 'Members of Kanta Dab Dab, a band specialising in fusion of local Nepali and Western music elements, talk about their...', 'velvetine' );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","iconBackgroundColor":"heading-color","iconBackgroundColorValue":"#0D0D0D","className":"is-style-default","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"80px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:80px"><!-- wp:heading {"style":{"typography":{"textAlign":"center"},"spacing":{"padding":{"top":"16px","bottom":"16px"}},"border":{"top":{"color":"var:preset|color|heading-color","width":"3px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|heading-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="border-top-color:var(--wp--preset--color--heading-color);border-top-width:3px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--heading-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:16px;padding-bottom:16px">
<?php
	esc_html_e( 'Highlights', 'velvetine' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"24px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"dark-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-dark-color-color has-text-color has-link-color" style="margin-top:24px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":46,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"16px","left":"16px"},"padding":{"bottom":"16px"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-bottom:16px"><!-- wp:post-title {"level":5,"isLink":true,"style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

<!-- wp:post-author-name {"style":{"typography":{"fontSize":"14px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"8px"}}},"textColor":"foreground"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color has-link-color">
<?php
	esc_html_e( 'Oops!, Blogs Not Found.', 'velvetine' );
?>
</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->