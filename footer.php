<footer id="footer" class="footer border-top bg-light">

	<div class="container">
		<div class="row d-flex py-3">

			<div class="col-12 col-sm-6 text-center text-sm-left">&copy <?php echo date('Y'); ?>: <a href="<?php echo get_site_url(); ?>" class="oskari"><?php echo get_bloginfo( 'name' ); ?></a></div>

			<?php if ( get_option( 'wp_page_for_privacy_policy' ) ) : ?>
				<div class="col-12 col-sm-6 pt-3 pt-sm-0 text-center text-sm-right"><a href="<?php echo get_the_permalink( get_option( 'wp_page_for_privacy_policy' ) ); ?>"><?php echo get_the_title( get_option( 'wp_page_for_privacy_policy' ) ); ?></a></div>
			<?php endif; ?>

		</div>
	</div>

	<div class="wp-footer">
		<?php wp_footer(); ?>
	</div>

</footer>

</body>
</html>
