<section class="container acf-module logogalleria<?php echo getAcfModuleSettings(); ?>">
	<div class="row">
    <?php if ( get_sub_field('osion_otsikko') ) : ?>
      <div class="col-12 mb-3">
        <h2 class="m-0"><?php echo get_sub_field('osion_otsikko'); ?></h2>
      </div>
    <?php endif; ?>
	</div>

	<div class="row">
		<div class="col-12 d-flex flex-row flex-wrap justify-content-between">
			<?php foreach ( get_sub_field('logot') as $logo ) : ?>
				<div class="logo">
					<a href="<?php echo get_field('linkki', $logo['ID']); ?>" target="_blank" rel="noopener" class="d-flex w-100 h-100 justify-content-center align-items-center py-5">
						<img src="<?php echo $logo['sizes']['large']; ?>" width="100%" height="auto" alt="Logo - <?php echo $logo['alt']; ?>">
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
