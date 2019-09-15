<?php $puhelinnumerot = get_field('ylavalikon_sisallot', 'options')['puhelinnumerot']; ?>
<?php $haku = get_field('ylavalikon_sisallot', 'options')['haku']; ?>

<?php
  global $wp;
  $ylavalikko = array();

  foreach ( wp_get_nav_menu_items( 'ylavalikko' ) as $linkki ):

    $ylavalikko[ $linkki->ID ] = array(
      'title' => $linkki->title,
      'url' => $linkki->url,
      'is_children' => false,
      'has_children' => false,
      'childrens' => array()
    );

    if ( $linkki->menu_item_parent !== '0' ):
      $ylavalikko[ $linkki->ID ][ 'is_children' ] = true;
      $ylavalikko[ $linkki->menu_item_parent ][ 'has_children' ] = true;
      array_push( $ylavalikko[ $linkki->menu_item_parent ]['childrens'], $linkki->ID );
    endif;

  endforeach;
?>

<nav class="navbar navbar-expand navbar-dark px-sm-0">

  <div class="collapse navbar-collapse" id="ylavalikko-navbar">

    <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle<?php if ( !$haku ) { echo ' pr-0'; } ?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-phone"></i><?php _e( "Soita", "oskarijarvelin" ); ?></a>

        <div class="dropdown-menu">

          <?php $i = 0; ?>

          <?php foreach ( $puhelinnumerot as $puhelinnumero ): ?>

            <a class="dropdown-item" href="tel:<?php echo str_replace( ' ','',get_field( "puhelinnumero", $puhelinnumero ) ); ?>">

              <i class="fas fa-user pr-2"></i><?php echo get_the_title( $puhelinnumero ); ?>

            </a>

            <?php if ( count( $puhelinnumerot ) > 1 && $i < ( count( $puhelinnumerot ) - 1 ) ): ?>

              <div class="dropdown-divider"></div>

            <?php endif; ?>

            <?php $i++; ?>

          <?php endforeach; ?>

        </div>

      </li>

      <!--
      <?php if ( $haku ): ?>

        <li class="nav-item">

          <a class="nav-link<?php if ( is_search() ) { echo " active"; } ?> pr-0" href="<?php echo get_site_url() . '?s='; ?>">

            <i class="fas fa-search"></i><?php _e( "Etsi", "oskarijarvelin" ); ?><?php if ( is_search() ) { ?> <span class="sr-only">(nykyinen)</span><?php } ?>

          </a>

        </li>

      <?php endif; ?>
      -->

      <?php if ( $haku ): ?>

        <li class="nav-item">

          <a class="nav-link" href="#yhteys">

            <?php _e( "Yhteys", "oskarijarvelin" ); ?>

          </a>

        </li>

      <?php endif; ?>

      <?php foreach ( $ylavalikko as $linkki ): ?>

        <?php if ( $linkki['is_children'] !== true ): ?>

          <li class="nav-item px-0 py-0<?php if ( $linkki['has_children'] === true ) { echo " dropdown"; } ?>">

            <?php if ( $linkki['has_children'] === true ): ?>

              <a class="nav-link lead dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $linkki['title']; ?></a>

              <div class="dropdown-menu">

                <?php foreach ( $linkki['childrens'] as $alalinkki ): ?>

                  <a class="dropdown-item<?php if ( $paavalikko[$alalinkki]['url'] === home_url( $wp->request ) . '/' ) { echo " active"; } ?>" href="<?php echo $paavalikko[$alalinkki]['url']; ?>">
                    <?php echo $paavalikko[$alalinkki]['title']; ?><?php if ( $paavalikko[$alalinkki]['url'] === home_url( $wp->request ) . '/' ) { ?> <span class="sr-only">(nykyinen)</span><?php } ?>
                  </a>

                <?php endforeach; ?>

              </div>

            <?php else: ?>

              <a class="nav-link lead<?php if ( $linkki['url'] === home_url( $wp->request ) . '/' ) { echo " active"; } ?>" href="<?php echo $linkki['url']; ?>">
                <?php echo $linkki['title']; ?><?php if ( $linkki['url'] === home_url( $wp->request ) . '/' ) { ?> <span class="sr-only">(nykyinen)</span><?php } ?>
              </a>

            <?php endif; ?>

          </li>

        <?php endif; ?>

      <?php endforeach; ?>

    </ul>

  </div>

</nav>
