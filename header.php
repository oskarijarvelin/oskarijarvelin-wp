<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body class="">
<?php wp_body_open(); ?>

	<a class="sr-only sr-only-focusable" href="#main"><?php _e( 'Hyppää sisältöön', 'oskarijarvelin' ); ?></a>

	<div class="container navigation ylavalikko">
    <div class="row">
      <div class="col">
        <?php get_template_part( 'template-parts/navigation/navigation', 'ylavalikko' ); ?>
      </div>
    </div>
  </div>

  <div class="container navigation paavalikko">
    <div class="row">
      <div class="col">
        <?php if ( has_nav_menu( 'paavalikko' ) ) : ?>
            <?php get_template_part( 'template-parts/navigation/navigation', 'paavalikko' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
