<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body class="bg-dark text-white">
<?php wp_body_open(); ?>

	<a class="sr-only sr-only-focusable" href="#main"><?php _e( 'Hyppää sisältöön', 'oskarijarvelin' ); ?></a>

	<?php get_template_part( 'template-parts/header/header-for', ( is_front_page() ? 'landing' : 'others') ); ?>
