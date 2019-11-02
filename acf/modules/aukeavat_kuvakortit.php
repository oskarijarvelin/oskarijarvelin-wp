<section class="container acf-module kuvakortit<?php echo getAcfModuleSettings(); ?>">
	<div class="row">

    <?php if ( get_sub_field('osion_otsikko') ) : ?>
      <div class="col-12">
        <h2 class="mt-0 mb-3"><?php echo get_sub_field('osion_otsikko'); ?></h2>
      </div>
    <?php endif; ?>

		<?php if ( have_rows( 'kuvakortit' ) ) : ?>
			<?php while ( have_rows( 'kuvakortit' ) ) : the_row(); ?>
        <?php $id = sanitize_title( get_sub_field('otsikko') ); ?>

        <div class="col-12 col-sm-6 col-lg-4">
  				<div class="card kuvakortti my-3">
            <a class="stretched-link" onClick="toggle('#collapse-<?php echo $id; ?>')" role="button" aria-expanded="false" aria-controls="collapse-<?php echo $id; ?>"></a>
            <img src="<?php echo get_sub_field('kuva')['sizes']['medium']; ?>" class="card-img-top" alt="<?php echo get_sub_field('otsikko'); ?>">

						<div class="collapse" id="collapse-<?php echo $id; ?>">

							<div class="card-body border-top bg-light">
	              <h4 class="card-title my-3"><?php echo get_sub_field('otsikko'); ?></h4>
	              <?php echo get_sub_field('sisalto'); ?>
	            </div>

							<?php if ( get_sub_field('alapalkki') ) : ?>
								<div class="card-footer text-muted">
							    <?php echo get_sub_field('alapalkki'); ?>
							  </div>
							<?php endif; ?>

						</div>

          </div>
        </div>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>
