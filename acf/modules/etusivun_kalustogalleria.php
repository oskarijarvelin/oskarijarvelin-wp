<?php $logot = get_sub_field( 'logo-galleria' ); ?>

<div class="container kalusto my-5 py-5">

  <div class="row">
    <div class="col-12 col-lg-6 pb-3">
      <h2 class="text-break pb-3"><?php echo get_sub_field('otsikko'); ?></h2>
      <?php echo get_sub_field( 'esittelyteksti' ); ?>
    </div>
  </div>

  <?php if ( $logot ): ?>
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="d-flex flex-row flex-wrap">
          <div class="logot ml-0 row">
          <?php foreach ( $logot as $logo ): ?>
            <div class="col-4 col-md-3 py-3">
              <div class="logo-container">
                <div class="logo" style="background-image: url('<?php echo $logo['sizes']['medium']; ?>');"></div>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="row">
    <?php if ( have_rows( 'cta' ) ): ?>
      <div class="col-12 col-lg-6 pt-4">
        <?php while ( have_rows( 'cta' ) ) : the_row(); ?>
          <a class="btn btn-<?php echo get_sub_field( 'vari' ); ?> mr-2 mb-2" href="<?php echo get_sub_field( 'linkki' )['url']; ?>"><?php echo get_sub_field( 'linkki' )['title']; ?></a>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>

</div>
