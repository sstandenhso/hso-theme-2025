<?php
/**
 * Title: Header Top Bar
 * Slug: hso/header-top-bar
 * Categories: header
 * Viewport width: 1400
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group d-flex align-items-center" id="brand-websites-navigation">
	<!-- wp:image {"width":"auto","height":"30px","linkDestination":"custom"} -->
	 <figure class="wp-block-image is-resized border-right px-2 mb-0">
		<a href="#">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hso-black.png" alt="<?php esc_attr_e( 'Henry Schein Orthodontics', 'twentytwentyfour' ); ?>" style="width:auto;height:30px;">
		</a>
	</figure>
	<!-- /wp:image -->

	<!-- wp:paragraph -->
	<p class="px-2 mb-0">|</p>
	<!-- /wp:paragraph -->

	<!-- wp:image {"width":"auto","height":"25px","linkDestination":"custom"} -->
	 <figure class="wp-block-image is-resized border-right px-2 mb-0" >
		 <a class="h-100" href="#">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ot-black.png" alt="<?php esc_attr_e( 'Ortho Technology', 'twentytwentyfour' ); ?>" style="width:auto;height:25px;">
		</a>
	</figure>
	<!-- /wp:image -->

	<!-- wp:paragraph -->
	<p class="px-2 mb-0">|</p>
	<!-- /wp:paragraph -->

	<!-- wp:image {"width":"auto","height":"35px","linkDestination":"custom"} -->
	 <figure class="wp-block-image is-resized px-2 mb-0">
		<a href="#">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/smilers-black.png" alt="<?php esc_attr_e( 'Smilers Expert', 'twentytwentyfour' ); ?>" style="width:auto;height:35px;">
		</a>
	</figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->