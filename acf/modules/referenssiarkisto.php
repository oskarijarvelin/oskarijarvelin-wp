<?php

$kaikki_keikat = new WP_Query( array(
  'posts_per_page'  => -1,
  'post_type'       => 'referenssi',
  'orderby'			    => 'ajankohta',
	'order'				    => 'ASC',
) );

$vuodet = [];

foreach ( $kaikki_keikat->posts as $keikka ):
  if ( !in_array( substr( get_post_meta( $keikka->ID, 'ajankohta', true ), 0, 4 ), $vuodet, true ) ):
    array_push( $vuodet, substr( get_post_meta( $keikka->ID, 'ajankohta', true ), 0, 4 ) );
  endif;
endforeach;

$current_vuosi = isset( $_GET['vuosi'] ) ? (int)$_GET['vuosi'] : $vuodet[0];

$keikat = new WP_Query( array(
  'posts_per_page'  => -1,
  'post_type'       => 'referenssi',
  'orderby'			    => 'ajankohta',
	'order'				    => 'DESC',
  'meta_query'      => array( array(
      'key'         => 'ajankohta',
      'value'       => $current_vuosi,
      'compare'     => 'LIKE',
  ) ),
) );

?>

<div class="container pb-5 mb-5">

  <div class="row">

    <div class="col-12 pb-5 px-sm-0">

      <div class="dropdown">

        <button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="dropdownVuodet" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          <?php echo $current_vuosi; ?>

        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownVuodet">

          <?php foreach ( $vuodet as $vuosi ): ?>

            <a class="dropdown-item<?php if ( $vuosi == $current_vuosi ) { echo " active"; } ?>" href="<?php echo parse_url( $_SERVER["REQUEST_URI"], PHP_URL_PATH ) . '?vuosi=' . $vuosi; ?>"><?php echo $vuosi; ?></a>

          <?php endforeach; ?>

        </div>

      </div>

    </div>



    <?php if ( $keikat->have_posts() ): ?>

      <div class="card-columns px-3 px-sm-0">

        <?php while ( $keikat->have_posts() ): ?>

          <?php $keikat->the_post() ?>

          <?php get_template_part( 'template-parts/content/content', 'referenssi' ); ?>

        <?php endwhile; ?>

      </div>

    <?php else: ?>

      <div class="col-12">

        <h2><?php _e("Ei referenssejä vuodelle", "oskarijarvelin"); ?> <?php echo $current_vuosi; ?></h2>

      </div>

    <?php endif; ?>


    <div class="col-12 px-sm-0 d-flex flex-row justify-content-center">

      <nav class="pt-5" aria-label="vuodet">

        <ul class="pagination">



          <li class="page-item<?php if ( $current_vuosi == reset( $vuodet ) ) { echo " disabled"; } ?>"<?php if ( $current_vuosi == reset( $vuodet ) ): ?>  tabindex="-1" aria-disabled="true"<?php endif; ?>>

            <a
            class="page-link"
            href="<?php echo parse_url( $_SERVER["REQUEST_URI"], PHP_URL_PATH ) . '?vuosi=' . reset( $vuodet ); ?>"
            tabindex="0"
            role="button"
            data-html="true"
            data-toggle="popover"
            data-trigger="focus hover"
            data-placement="top"
            data-content="<?php echo reset( $vuodet ); ?>"
            >
              <i class="fas fa-fast-backward"></i>
            </a>

          </li>



          <li class="page-item<?php if ( !in_array( ( $current_vuosi + 1 ), $vuodet ) ) { echo " disabled"; } ?>"<?php if ( !in_array( ( $current_vuosi + 1 ), $vuodet ) ): ?>  tabindex="-1" aria-disabled="true"<?php endif; ?>>

            <a
            class="page-link"
            href="<?php echo parse_url( $_SERVER["REQUEST_URI"], PHP_URL_PATH ) . '?vuosi=' . ( $current_vuosi + 1 ); ?>"
            tabindex="0"
            role="button"
            data-html="true"
            data-toggle="popover"
            data-trigger="focus hover"
            data-placement="top"
            data-content="<?php echo $current_vuosi + 1; ?>"
            >
              <i class="fas fa-backward"></i>
            </a>

          </li>



          <li class="page-item active" aria-current="page">

            <a class="page-link" href="<?php echo parse_url( $_SERVER["REQUEST_URI"], PHP_URL_PATH ) . '?vuosi=' . $current_vuosi; ?>"><?php echo $current_vuosi; ?><span class="sr-only">(nykyinen)</span></a>

          </li>



          <li class="page-item<?php if ( !in_array( ( $current_vuosi - 1 ), $vuodet ) ) { echo " disabled"; } ?>"<?php if ( !in_array( ( $current_vuosi - 1 ), $vuodet ) ): ?>  tabindex="-1" aria-disabled="true"<?php endif; ?>>

            <a
            class="page-link"
            href="<?php echo parse_url( $_SERVER["REQUEST_URI"], PHP_URL_PATH ) . '?vuosi=' . ( $current_vuosi - 1 ); ?>"
            tabindex="0"
            role="button"
            data-html="true"
            data-toggle="popover"
            data-trigger="focus hover"
            data-placement="top"
            data-content="<?php echo $current_vuosi - 1; ?>"
            >
              <i class="fas fa-forward"></i>
            </a>

          </li>



          <li class="page-item<?php if ( $current_vuosi == end( $vuodet ) ) { echo " disabled"; } ?>"<?php if ( $current_vuosi == end( $vuodet ) ): ?>  tabindex="-1" aria-disabled="true"<?php endif; ?>>

            <a
            class="page-link"
            href="<?php echo parse_url( $_SERVER["REQUEST_URI"], PHP_URL_PATH ) . '?vuosi=' . end( $vuodet ); ?>"
            tabindex="0"
            role="button"
            data-html="true"
            data-toggle="popover"
            data-trigger="focus hover"
            data-placement="top"
            data-content="<?php echo end( $vuodet ); ?>"
            >
              <i class="fas fa-fast-forward"></i>
            </a>

          </li>



        </ul>

      </nav>

    </div>

  </div>

</div>
