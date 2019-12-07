<?php
  global $wp;
  $paavalikko = array();

  foreach ( wp_get_nav_menu_items( 'paavalikko' ) as $linkki ):

    $paavalikko[ $linkki->ID ] = array(
      'title' => $linkki->title,
      'url' => $linkki->url,
      'is_children' => false,
      'has_children' => false,
      'childrens' => array()
    );

    if ( $linkki->menu_item_parent !== '0' ):
      $paavalikko[ $linkki->ID ][ 'is_children' ] = true;
      $paavalikko[ $linkki->menu_item_parent ][ 'has_children' ] = true;
      array_push( $paavalikko[ $linkki->menu_item_parent ]['childrens'], $linkki->ID );
    endif;

  endforeach;
?>

<?php foreach ( $paavalikko as $linkki ): ?>

  <?php if ( $linkki['is_children'] !== true ): ?>

    <li class="nav-item px-0 py-0 d-flex justify-content-center align-items-center<?php if ( $linkki['has_children'] === true ) { echo " dropdown"; } ?>">

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

        <a class="nav-link px-lg-0 px-lg-3 py-3 py-lg-0 text-center text-dark font-weight-bold<?php if ( $linkki['url'] === home_url( $wp->request ) . '/' ) { echo " active"; } ?>" href="<?php echo $linkki['url']; ?>">
          <?php echo $linkki['title']; ?><?php if ( $linkki['url'] === home_url( $wp->request ) . '/' ) { ?> <span class="sr-only">(nykyinen)</span><?php } ?>
        </a>

      <?php endif; ?>

    </li>

  <?php endif; ?>

<?php endforeach; ?>

<li class="nav-item px-0 py-0 pl-3 d-none d-lg-block">
  <a class="nav-link btn btn-oskari px-3 py-2 d-flex justify-content-center align-items-center text-center text-white font-weight-bold" href="tel:+358458983883">
    <img class="" src="https://dev.oskarijarvelin.fi/wp-content/uploads/2019/11/telephone-handle-silhouette.png" width="16px" height="16px" alt="Ikoni: Puhelin">
    <span class="pl-2">Soita</a>
  </a>
</li>
