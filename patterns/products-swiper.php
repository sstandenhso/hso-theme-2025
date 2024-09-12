<?php
/**
 * Title: HSO Products Swiper
 * Slug: hso/products-swiper
 * Categories: query
 * Block Types: core/query
 */
?>

<!-- wp:group {"metadata":{"categories":["posts"],"patternName":"hso/products-swiper","name":"HSO Products Swiper"},"className":"container","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group container" style="padding-top:40px;padding-bottom:40px"><!-- wp:group {"className":"container","layout":{"type":"default"}} -->
<div class="wp-block-group container"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":30,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"core/posts-list","className":"swiper posts-swiper"} -->
<div class="wp-block-query swiper posts-swiper"><!-- wp:post-template {"className":"swiper-wrapper"} -->
<!-- wp:group {"className":"product-card\u002d\u002dwrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-card--wrapper"><!-- wp:post-featured-image {"aspectRatio":"3/4"} /-->

<!-- wp:group {"className":"product-card\u002d\u002dtext-content","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-card--text-content has-base-color has-text-color has-link-color" style="padding-top:10px;padding-right:20px;padding-left:20px"><!-- wp:post-title {"style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->