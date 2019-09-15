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

<nav class="navbar navbar-expand-lg navbar-light px-0">
  <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
    <?php if ( get_field('logo', 'theme') ) : ?>
  	   <div class="site-logo"><img src="<?php echo wp_get_attachment_image_src( get_field('logo', 'theme'), 'medium' )[0]; ?>" height="28px" width="auto"></div>
    <?php else : ?>
      <?php echo get_bloginfo( 'name' ); ?>
    <?php endif; ?>
  </a>

  <button id="paavalikkoToggle" class="navbar-toggler px-1" type="button" data-toggle="collapse" data-target="#paavalikko-navbar" aria-controls="paavalikko-navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="paavalikko-navbar">
    <ul class="navbar-nav ml-auto py-5 py-lg-0">
      <?php foreach ( $paavalikko as $linkki ): ?>

        <?php if ( $linkki['is_children'] !== true ): ?>

          <li class="nav-item px-5 px-lg-0 py-2 py-lg-0<?php if ( $linkki['has_children'] === true ) { echo " dropdown"; } ?>">

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
