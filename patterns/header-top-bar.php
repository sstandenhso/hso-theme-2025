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
<div class="wp-block-group">
	<!-- wp:image {"width":"auto","height":"30px","linkDestination":"custom"} -->
	 <figure class="wp-block-image">
		<a href="#">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hso-black.png" alt="<?php esc_attr_e( 'Henry Schein Orthodontics', 'twentytwentyfour' ); ?>">
		</a>
	</figure>
	<!-- /wp:image -->

	<!-- wp:image {"width":"auto","height":"25px","linkDestination":"custom"} -->
	 <figure class="wp-block-image" >
		 <a href="#">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ot-black.png" alt="<?php esc_attr_e( 'Ortho Technology', 'twentytwentyfour' ); ?>">
		</a>
	</figure>
	<!-- /wp:image -->

	<!-- wp:image {"width":"auto","height":"35px","linkDestination":"custom"} -->
	 <figure class="wp-block-image">
		<a href="#">
			 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/smilers-black.png" alt="<?php esc_attr_e( 'Smilers Expert', 'twentytwentyfour' ); ?>">
		</a>
	</figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
