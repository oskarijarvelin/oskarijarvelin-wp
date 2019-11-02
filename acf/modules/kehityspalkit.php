<section class="container acf-module kehityspalkit<?php echo getAcfModuleSettings(); ?>">
	<div class="row">

    <?php if ( get_sub_field('osion_otsikko') ) : ?>
      <div class="col-12">
        <h2 class="mt-0 mb-3"><?php echo get_sub_field('osion_otsikko'); ?></h2>
      </div>
    <?php endif; ?>

		<?php if ( have_rows( 'palkit' ) ) : ?>
			<?php while ( have_rows( 'palkit' ) ) : the_row(); ?>

        <div class="col-12 my-4">
          <p><b><?php echo get_sub_field('nimi'); ?></b></p>
          <div class="progress" style="height: 24px;">
            <div class="progress-bar" role="progressbar" style="width: <?php echo get_sub_field('arvo'); ?>%" aria-valuenow="<?php echo get_sub_field('arvo'); ?>" aria-valuemin="0" aria-valuemax="100"><?php echo get_sub_field('arvo'); ?>%</div>
          </div>
        </div>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>
