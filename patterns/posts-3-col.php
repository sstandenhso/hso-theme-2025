<?php
/**
 * Title: List of posts, 3 columns
 * Slug: twentytwentyfour/posts-3-col
 * Categories: query
 * Block Types: core/query
 */
?>

<!-- wp:query {"queryId":75,"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>No posts were found.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","width":"","height":"","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"var:preset|spacing|20"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"var:preset|spacing|20"},"padding":{"top":"10px","left":"20px","right":"20px"}},"typography":{"fontSize":"15px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);padding-top:10px;padding-right:20px;padding-left:20px;font-size:15px"><!-- wp:post-title {"isLink":true,"style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"},"spacing":{"padding":{"top":"20px"}},"typography":{"fontSize":"18px"}}} /-->

<!-- wp:post-excerpt {"style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"},"spacing":{"padding":{"top":"20px"}},"typography":{"fontSize":"15px"}},"textColor":"contrast-2"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"var:preset|spacing|40","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->