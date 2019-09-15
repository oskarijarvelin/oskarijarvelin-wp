<div class="container diat my-5 py-5">

  <div class="row">
    <div class="col-12 col-lg-6 pb-3">
      <h2 class="text-break"><?php echo get_sub_field('otsikko'); ?></h2>
    </div>
  </div>

  <?php if ( have_rows( 'sanottua' ) ): ?>
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="pt-4 pr-0 pb-5  ">
        <div class="swiper-container-12 border-left border-white pl-4">
          <div class="swiper-wrapper">
            <?php while ( have_rows( 'sanottua' ) ) : the_row(); ?>
              <div class="swiper-slide">
                <?php echo get_sub_field( 'mita_sanottiin' ); ?>
                <p class="text-right">
                  <?php if ( get_sub_field( 'kuka_sanoi' )['linkki'] ) { ?><a class="text-white" href="<?php echo get_sub_field( 'kuka_sanoi' )['linkki']['url']; ?>" target="_blank"><?php } ?><span class="font-weight-light font-italic"><?php echo get_sub_field( 'kuka_sanoi' )['nimi']; ?></span><?php if ( get_sub_field( 'kuka_sanoi' )['linkki'] ) { ?></a><?php } ?><br>
                  <span class="font-weight-bold"><?php echo get_sub_field( 'kuka_sanoi' )['titteli']; ?></span>
                </p>
              </div>
            <?php endwhile; ?>
          </div>
          <div class="swiper-pagination"></div>
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
