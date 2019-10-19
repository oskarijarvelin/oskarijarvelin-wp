<article id="post-<?php the_ID(); ?>" class="article single">

	<header class="container post-header pt-5 pb-4">
		<div class="row">

			<div class="col-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb bg-white p-0">
				    <li class="breadcrumb-item"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Ajankohtaista</a></li>
				    <li class="breadcrumb-item active"></li>
				  </ol>
				</nav>
			</div>

			<div class="col-12 py-3">
				<h2 class="display-4"><?php the_title(); ?></h2>
			</div>

		</div>
	</header>

	<div class="container post-excerpt pb-3">
    <div class="row">
			<div class="col-12 col-md-11 col-lg-9 py-3 lead">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>

	<div class="container post-thumbnail pb-5">
    <div class="row d-flex justify-content-center">
			<div class="col-12 py-3 px-0 px-md-3">
				<img class="shadow" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full-size' ); ?>">
			</div>
		</div>
	</div>

	<div class="container post-content pb-5">
    <div class="row d-flex justify-content-center">
			<div class="col-12 col-md-11 col-lg-7 py-3">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

</article>
