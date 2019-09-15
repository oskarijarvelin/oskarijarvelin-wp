<div class="container border-top border-white">

	<div id="yhteys" class="row py-5">

		<div class="col-12 col-md-6 col-lg-4 px-sm-0">

			<h3 class="text-break font-weight-light pb-3"><?php echo get_field('footer', 'theme')['yhteystietojen_otsikko']; ?></h3>

			<?php echo get_field('footer', 'theme')['yhteystiedot']; ?>

			<div class="pt-4">

				<?php foreach ( get_field('footer', 'theme')['yhteyshenkilot'] as $ID ): ?>

					<p class="font-weight-bold"><?php echo get_the_title( $ID ); ?></p>

					<p class="pb-3">
						<?php if ( get_field( "puhelinnumero", $ID ) ): ?>
							<i class="fas fa-phone pr-2 d-none d-sm-inline"></i><a class="text-white" href="tel:<?php echo str_replace( ' ','',get_field( "puhelinnumero", $ID ) ); ?>"><?php echo get_field( "puhelinnumero", $ID ); ?></a><br>
						<?php endif; ?>

						<?php if ( get_field( "sahkopostiosoite", $ID ) ): ?>
							<i class="fas fa-envelope pr-2 d-none d-sm-inline"></i><a class="text-white text-break" href="mailto:<?php echo get_field( "sahkopostiosoite", $ID ); ?>"><?php echo get_field( "sahkopostiosoite", $ID ); ?></a>
						<?php endif; ?>
					</p>

				<?php endforeach; ?>

			</div>

		</div>

		<div class="d-md-none col-12 px-sm-0 pt-5 d-flex flex-column justify-content-center">

			<button class="btn btn-light" type="button" data-toggle="collapse" data-target="#lomakeCollapse" aria-expanded="false" aria-controls="lomakeCollapse">
    		Avaa yhteydenottolomake <i class="fas fa-chevron-down pl-2"></i>
  		</button>

			<div class="collapse pt-5" id="lomakeCollapse">
				<?php echo do_shortcode( '[ninja_form id="1"]' ); ?>
			</div>

		</div>

		<div class="d-none d-md-block col-md-6 col-lg-8 pt-sm-0 px-sm-0">
			<?php echo do_shortcode( '[ninja_form id="1"]' ); ?>
		</div>

	</div>

</div>

<div class="container">

	<div class="row mb-3 text-center">

		<div class="col-12 col-sm-6 order-2 order-sm-1 py-1 text-sm-left px-sm-0">

			&copy <?php echo date('Y'); ?>: <a class="text-white" href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>

		</div>

		<div class="col-12 col-sm-6 order-1 order-sm-2 py-1 text-sm-right px-sm-0">

			<a class="text-white" href="https://www.livepaletti.fi/tietosuojaseloste/"><?php _e( "Tietosuojaseloste", "livepaletti"); ?></a>

		</div>

	</div>

</div>
