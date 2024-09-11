<?php
/**
 * Title: HSO Posts Swiper
 * Slug: hso/posts-swiper
 * Categories: posts
 * Viewport width: 1400
 */
?>

<!-- wp:group {"className":"container","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group container" style="padding-top:40px;padding-bottom:40px"><!-- wp:group {"className":"container","layout":{"type":"default"}} -->
<div class="wp-block-group container"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":30,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"core/posts-list","className":"swiper posts-swiper"} -->
<div class="wp-block-query swiper posts-swiper"><!-- wp:post-template {"className":"swiper-wrapper"} -->
<!-- wp:post-featured-image {"aspectRatio":"4/3"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"10px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:20px;padding-left:20px"><!-- wp:post-title {"style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"20px"}}}} /-->

<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->