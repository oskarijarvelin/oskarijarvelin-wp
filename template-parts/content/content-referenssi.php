<?php $hl = get_field( "korostus" ) === true ? true : false;  ?>

<?php $puhelinnumerot = get_field('ylavalikon_sisallot', 'options')['puhelinnumerot']; ?>

  <div class="card bg-light text-body shadow<?php if ( $hl ) { echo ' border-warning'; } ?>">

    <div class="card-header<?php if ( $hl ) { echo ' bg-warning'; } ?> text-body position-relative">

      <div class="row d-flex flex-row align-items-center justify-content-start">

        <div class="col-9 col-md-10">

          <h5 class="card-title text-left mb-0">

            <?php echo get_the_title(); ?>

          </h5>

        </div>

        <div class="col-3 col-md-2">

          <p class="card-title text-right mb-0">

            <?php if ( !$hl ): ?>

              <a
                tabindex="0"
                class=""
                role="button"
                data-html="true"
                data-toggle="popover"
                data-trigger="focus hover"
                data-placement="top"
                data-template="
                <div class='popover' role='tooltip'>
                  <div class='arrow'></div>
                  <h3 class='popover-header'></h3>
                  <div class='popover-body'></div>
                </div>
                "
                data-content="
                <p><i class='far fa-calendar-alt pr-2'></i><?php echo ucfirst( get_field( 'ajankohta' ) ); ?></p>
                <p class='mb-0'><i class='fas fa-map-marker-alt pr-2'></i><?php echo get_field( "sijainti" ); ?></p>
                "
              >

            <?php endif; ?>

            <i class="<?php if ( $hl ) { echo "far fa-star"; } else { echo "fas fa-info-circle"; } ?>"></i>

            <?php if ( !$hl ): ?>

            </a>

            <?php endif; ?>

          </p>

        </div>

      </div>

    </div>

    <?php if ( $hl ): ?>

      <?php if ( has_post_thumbnail() ): ?>

        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>" class="card-img-top" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE ); ?>">

      <?php endif; ?>

      <div class="card-body text-body">

        <?php echo get_field( "lisatiedot" ); ?>

        <div class="btn-group" role="group" aria-label="Basic example">

          <a href="#yhteys" class="btn btn-success" role="button">Ota yhteyttä</a>

          <div class="btn-group" role="group">

            <button id="btnPuhelimet" type="button" class="btn btn-success dropdown-toggle border-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

              <i class="fas fa-phone"></i>

            </button>

            <div class="dropdown-menu" aria-labelledby="btnPuhelimet">

              <?php $i = 0; ?>

              <?php foreach ( $puhelinnumerot as $puhelinnumero ): ?>

                <a class="dropdown-item" href="tel:<?php echo str_replace( ' ', '', get_field( "puhelinnumero", $puhelinnumero ) ); ?>">

                  <i class="fas fa-user pr-2"></i><?php echo get_the_title( $puhelinnumero ); ?>

                </a>

                <?php if ( count( $puhelinnumerot ) > 1 && $i < ( count( $puhelinnumerot ) - 1 ) ): ?>

                  <div class="dropdown-divider"></div>

                <?php endif; ?>

                <?php $i++; ?>

              <?php endforeach; ?>

            </div>

          </div>

        </div>

      </div>

    <?php endif; ?>

    <?php if ( $hl ): ?>

      <div class="card-footer text-muted">

        <span class="d-block"><i class="far fa-calendar-alt pr-2"></i><?php echo ucfirst( get_field( 'ajankohta' ) ); ?></span>

        <i class="fas fa-map-marker-alt pr-2"></i><?php echo get_field( "sijainti" ); ?>

      </div>

    <?php endif; ?>

  </div>
