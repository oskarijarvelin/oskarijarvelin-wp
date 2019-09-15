<footer id="footer" class="footer">

	<div class="container border-top border-white">

		<div id="yhteys" class="row py-5">

		</div>

	</div>

	<div class="container">

		<div class="row mb-3">

			<div class="col-12 col-sm-6">&copy <?php echo date('Y'); ?>: <a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></div>

			<div class="col-12 col-sm-6 text-right"><a href="https://www.oskarijarvelin.fi/tietosuojaseloste/"><?php _e( "Tietosuojaseloste", "oskarijarvelin"); ?></a></div>

		</div>

	</div>

	<div class="wp-footer">
		<?php wp_footer(); ?>
	</div>

</footer>

</body>
</html>
