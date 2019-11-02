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

	<header class="sticky-top bg-white">
	  <div class="container navigation paavalikko">
	    <div class="row">
	      <div class="col pl-0 px-lg-0">
					<nav class="navbar navbar-expand-lg navbar-light px-0">
					  <a class="navbar-brand oskari px-3" href="<?php echo get_site_url(); ?>">
					    <?php if ( get_field('logo', 'theme') ) : ?>
					  	   <div class="site-logo"><img src="<?php echo wp_get_attachment_image_src( get_field('logo', 'theme'), 'medium' )[0]; ?>" height="28px" width="auto"></div>
					    <?php else : ?>
					      <?php echo get_bloginfo( 'name' ); ?>
					    <?php endif; ?>
					  </a>

						<div class="d-flex">

							<a class="btn btn-oskari text-white font-weight-bold d-flex justify-content-center align-items-center d-lg-none mr-3 px-3 px-lg-4 py-2" href="#yhteys">
								<img class="" src="https://dev.oskarijarvelin.fi/wp-content/uploads/2019/11/telephone-handle-silhouette.png" width="16px" height="16px">
								<span class="d-none d-lg-inline-block">Ota yhteyttä</a>
							</a>

						  <button id="paavalikkoToggle" class="navbar-toggler px-1" type="button" data-toggle="collapse" data-target="#paavalikko-navbar" aria-controls="paavalikko-navbar" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						</div>

					  <div class="collapse navbar-collapse" id="paavalikko-navbar">
					    <ul class="navbar-nav ml-auto px-3 py-4 py-lg-0">
								<?php if ( has_nav_menu( 'paavalikko' ) ) : ?>
				            <?php get_template_part( 'template-parts/navigation/navigation', 'paavalikko' ); ?>
				        <?php endif; ?>
					    </ul>
					  </div>
					</nav>

	      </div>
	    </div>
	  </div>

		<div class="progress bg-light" style="height: 1px;">
			<?php if ( is_single() && get_post_type() === 'post' ) : ?>
  			<div id="progressbar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
			<?php endif; ?>
		</div>
	</header>
