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
<div class="wp-block-group d-flex align-items-center flex-wrap flex-sm-nowrap" id="brand-websites-navigation">
	<!-- wp:image {"linkDestination":"custom"} -->
	 <figure id="hso-logo-link" class="wp-block-image border-right px-1 px-sm-2 mb-0">
		<a href="https://henryscheinortho.com/">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hso-black.png" alt="<?php esc_attr_e( 'Henry Schein Orthodontics', 'twentytwentyfour' ); ?>">
		</a>
	</figure>
	<!-- /wp:image -->

	<!-- wp:paragraph -->
	<p class="px-1 px-sm-2 mb-0">|</p>
	<!-- /wp:paragraph -->

	<!-- wp:image {"linkDestination":"custom"} -->
	 <figure id="ot-logo-link" class="wp-block-image border-right px-1 px-sm-2 mb-0" >
		 <a href="https://www.orthotechnology.com/">
			<img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ot-black.png" alt="<?php esc_attr_e( 'Ortho Technology', 'twentytwentyfour' ); ?>">
		</a>
	</figure>
	<!-- /wp:image -->

	<!-- wp:paragraph -->
	<p class="px-1 px-sm-2 mb-0">|</p>
	<!-- /wp:paragraph -->

	<!-- wp:image {"linkDestination":"custom"} -->
	 <figure id="smilers-logo-link" class="wp-block-image px-1 px-sm-2 my-0">
		<a href="https://www.smilers.com/">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/smilers-black.png" alt="<?php esc_attr_e( 'Smilers Expert', 'twentytwentyfour' ); ?>">
		</a>
	</figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->