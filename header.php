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

	<div class="sticky-top bg-white shadow-sm border-bottom">
	  <div class="container navigation paavalikko">
	    <div class="row">
	      <div class="col">
					<nav class="navbar navbar-expand-lg navbar-light px-0">
					  <a class="navbar-brand oskari" href="<?php echo get_site_url(); ?>">
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
					    <ul class="navbar-nav ml-auto py-4 py-lg-0">
								<?php if ( has_nav_menu( 'paavalikko' ) ) : ?>
				            <?php get_template_part( 'template-parts/navigation/navigation', 'paavalikko' ); ?>
				        <?php endif; ?>
					    </ul>
					  </div>
					</nav>

	      </div>
	    </div>
	  </div>
	</div>
