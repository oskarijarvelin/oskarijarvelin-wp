<?php

$maara = get_sub_field('maara') ? get_sub_field('maara') : 5;

$keikat = new WP_Query( array(
  'posts_per_page'  => $maara,
  'post_type'       => 'referenssi',
  'meta_key'		    => 'korostus',
	'meta_value'	    => true,
  'orderby'			    => 'ajankohta',
	'order'				    => 'ASC'
) );

?>

<div class="container referenssit my-5 py-5">

  <div class="row justify-content-end">
    <div class="col-12 col-lg-6 pb-3">
      <h2 class="text-break pb-3"><?php echo get_sub_field('otsikko'); ?></h2>
      <?php echo get_sub_field( 'esittelyteksti' ); ?>
    </div>
  </div>

  <div class="row justify-content-end">
    <div class="col-12 col-lg-6">
      <div class="pt-4 pb-5 pl-0">
      <div class="swiper-container<?php if ( count( $keikat->posts ) > 1 ) { echo '-6'; } ?> border-right border-white pr-4">
        <div class="swiper-wrapper">
          <?php foreach ( $keikat->posts as $keikka ): ?>
            <div class="swiper-slide">
              <h4 class="font-weight-light"><?php echo get_the_title( $keikka->ID ); ?></h4>
              <p class="keikan-tiedot pt-3">
                <i class="far fa-calendar-alt"></i><?php echo ucfirst( get_field( 'ajankohta', $keikka->ID ) ); ?>
                <span class="ml-4 d-block d-lg-inline-block"></span>
                <i class="fas fa-map-marker-alt"></i><?php echo get_field( 'sijainti', $keikka->ID ); ?>
              </p>
              <?php echo get_field( 'lisatiedot', $keikka->ID ); ?>
            </div>
          <?php endforeach; ?>
        </div>
        <?php if ( count( $keikat->posts ) > 1 ): ?>
          <div class="swiper-pagination"></div>
        <?php endif; ?>
      </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-end">
    <?php if ( have_rows( 'cta' ) ): ?>
      <div class="col-12 col-lg-6 pt-4">
        <?php while ( have_rows( 'cta' ) ) : the_row(); ?>
          <a class="btn btn-<?php echo get_sub_field( 'vari' ); ?> mr-2 mb-2" href="<?php echo get_sub_field( 'linkki' )['url']; ?>"><?php echo get_sub_field( 'linkki' )['title']; ?></a>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>

</div>
