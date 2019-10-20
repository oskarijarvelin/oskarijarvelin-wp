<article id="post-<?php the_ID(); ?>" class="article single pt-4">

	<header class="container post-header py-5">
		<div class="row">

			<div class="col-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb bg-white m-0 p-0">
				    <li class="breadcrumb-item"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></a></li>
						<li class="breadcrumb-item"><a href="<?php echo get_category_link( get_the_category()[0]->term_id ); ?>"><?php echo get_the_category()[0]->name; ?></a></li>
				    <li class="breadcrumb-item active"></li>
				  </ol>
				</nav>
			</div>

			<div class="col-12 py-3">
				<h2 class="display-4"><?php the_title(); ?></h2>
			</div>

		</div>
	</header>

	<div class="container post-excerpt pb-5">
    <div class="row">
			<div class="col-12 col-md-11 col-lg-9 lead">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>

	<div class="container post-thumbnail pb-5">
    <div class="row d-flex justify-content-center">
			<div class="col-12 px-0 px-md-3">
				<img class="shadow" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="<?php the_title(); ?>">
			</div>
		</div>
	</div>

	<div class="container post-content pt-3 pb-5">
    <div class="row d-flex justify-content-center">
			<div class="col-12 col-md-11 col-lg-7">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	<div class="container go-back pb-5">
    <div class="row d-flex justify-content-center">
			<div class="col-12 col-md-11 col-lg-7">
				<p><b><a href="javascript:;" onclick="takaisin()" style="color: #223388;">&loarr; Palaa takaisin</a></b></p>
			</div>
		</div>
	</div>

	<?php if ( get_the_tags() ) : ?>
		<div class="container post-tags pb-5">
	    <div class="row d-flex justify-content-center pb-4">
				<div class="col-12 col-md-11 col-lg-7">

					<nav class="navbar navbar-expand navbar-light border bg-light">
					  <a class="navbar-brand" href="#">Aiheet</a>
					  <ul class="navbar-nav ml-auto py-2 d-flex flex-row flex-wrap justify-content-end">
							<?php foreach ( get_the_tags() as $tag ) : ?>
						    <li class="nav-item px-2">
						      <a class="nav-link text-dark" href="<?php echo get_tag_link( $tag->term_id ); ?>"><?php echo $tag->name; ?></a>
						    </li>
							<?php endforeach; ?>
					  </ul>
					</nav>

				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php
		$more = new WP_Query( array(
			'post__not_in' 		=> array( get_the_ID() ),
			'category__in' 		=> array( get_the_category()[0]->term_id ),
			'posts_per_page' 	=> 3,
			'orderby'					=> 'rand'
		) );
	?>

	<?php if ( $more->have_posts() ) : ?>
		<div class="more-posts py-5 bg-light">
			<div class="container">
				<div class="row">

					<div class="col-12 pb-4">
						<h3>Joko luit nämä?</h3>
					</div>

					<div class="col-12 card-columns">
					  <?php while ( $more->have_posts() ) : $more->the_post(); ?>
							<?php get_template_part( 'template-parts/content/excerpt', 'post' ); ?>
					  <?php endwhile; ?>
					</div>

				</div>
			</div>
		</div>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>


</article>
