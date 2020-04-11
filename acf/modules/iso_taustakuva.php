<section class="acf-module iso-taustakuva" style="background-image: url('<?php echo get_sub_field('taustakuva')['sizes']['2048x2048']; ?>');">
  <div class="screen fullscreen container-fluid d-flex align-items-end align-items-lg-start">
    <div class="row">
      <div class="col-12 mb-4 pb-5 pl-lg-4">
        <p class="lead px-lg-3 pt-5 pb-2 m-0"><?php _e('Moi. Olen', 'oskarijarvelin'); ?> <span class="oskari">Oskari Järvelin</span>, <?php echo getAge('1994-09-29'); ?><?php _e('-vuotias', 'oskarijarvelin'); ?></p>
        <h1 class="display-2 px-lg-3 py-0 m-0"><span id="typer" data-strings="<?php echo get_sub_field('tittelit'); ?>"></span></h1>
        <p class="lead px-lg-3 pt-2 pt-lg-3 pb-5 m-0"><?php _e('Oulusta', 'oskarijarvelin'); ?>. <span class="font-weight-bold"><?php _e('Kuinka voin palvella?', 'oskarijarvelin'); ?></span></p>
      </div>
    </div>
  </div>

  <?php if ( get_sub_field('logot') ) : ?>
    <div class="screen container-fluid d-flex flex-column py-5">
      <div class="row px-lg-3">
        <div class="col-12 mb-4 mb-lg-5">
          <h2 class="m-0 text-center text-sm-left"><?php _e('Osaamiseeni luottavat mm.', 'oskarijarvelin'); ?></h2>
        </div>
    	</div>

      <div class="row px-lg-3 justify-content-center justify-content-sm-start flex-lg-column">
        <?php foreach ( get_sub_field('logot') as $logo ) : ?>
          <div class="col-5 col-sm-3 col-lg-3 col-xl-2 logo">
            <a href="<?php echo get_field('linkki', $logo['ID']); ?>" target="_blank" rel="noopener" class="d-flex w-100 h-100 justify-content-center align-items-center px-2 px-lg-0 py-4 py-lg-5">
              <img src="<?php echo $logo['sizes']['large']; ?>" width="100%" height="auto" alt="Logo - <?php echo $logo['alt']; ?>">
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
