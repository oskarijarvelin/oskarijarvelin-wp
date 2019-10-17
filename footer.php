<footer id="footer" class="footer border-top">

	<div class="container">

		<div id="yhteys" class="row py-4">
			<div class="col">
				<p>Yhteystiedot</p>
			</div>
		</div>

	</div>

	<div class="container">

		<div class="row d-flex mb-3">

			<div class="col-12 col-sm-6 text-center text-sm-left">&copy <?php echo date('Y'); ?>: <a href="<?php echo get_site_url(); ?>" class="oskari"><?php echo get_bloginfo( 'name' ); ?></a></div>

			<div class="col-12 col-sm-6 py-3 py-sm-0 text-center text-sm-right"><a href="https://www.oskarijarvelin.fi/tietosuojaseloste/"><?php _e( "Tietosuojaseloste", "oskarijarvelin"); ?></a></div>

		</div>

	</div>

	<div class="wp-footer">
		<?php wp_footer(); ?>
	</div>

</footer>

</body>
</html>
