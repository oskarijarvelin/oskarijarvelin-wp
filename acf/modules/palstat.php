<section class="container acf-module palstat<?php echo getAcfModuleSettings(); ?>">
	<div class="row">
		<?php
			if ( have_rows( 'palstat' ) ):
				while ( have_rows( 'palstat' ) ) : the_row();
					get_template_part( 'acf/modules/palstat/' . get_row_layout() );
				endwhile;
			endif;
		?>
	</div>
</section>
