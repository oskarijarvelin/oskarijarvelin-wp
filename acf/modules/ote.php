<section class="container acf-module ote<?php echo getAcfModuleSettings(); ?>">
	<div class="row">

		<?php if ( get_sub_field('osion_otsikko') ) : ?>
      <div class="col-12">
        <h2 class="mt-0 mb-4"><?php echo get_sub_field('osion_otsikko'); ?></h2>
      </div>
    <?php endif; ?>

		<div class="lead<?php echo getAcfColumnSettings(); ?>">
			<?php echo get_sub_field('ote'); ?>
		</div>

	</div>
</section>
