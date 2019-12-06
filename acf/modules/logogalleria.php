<section class="container acf-module logogalleria<?php echo getAcfModuleSettings(); ?>">
	<div class="row">
    <?php if ( get_sub_field('osion_otsikko') ) : ?>
      <div class="col-12 mb-5 mb-lg-3">
        <h2 class="m-0"><?php echo get_sub_field('osion_otsikko'); ?></h2>
      </div>
    <?php endif; ?>
	</div>

	<div class="row">
		<?php foreach ( get_sub_field('logot') as $logo ) : ?>
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3 ">
				<a href="#" class="d-flex w-100 h-100 justify-content-center align-items-center py-5 px-5 px-lg-4">
					<img src="<?php echo $logo['sizes']['large']; ?>" width="100%" height="auto">
				</a>
			</div>
		<?php endforeach; ?>
	</div>
</section>
