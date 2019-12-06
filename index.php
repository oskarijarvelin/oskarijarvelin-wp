<?php get_header(); ?>

<main id="main" class="main index">

	<header class="container main-header pt-5 pb-4">
		<div class="row">
			<div class="col-12 py-3">
				<h1 class="display-4"><?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></h1>
			</div>
		</div>
	</header>

<?php if ( have_posts() ) : ?>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card-columns pt-5">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content/excerpt', 'post' ); ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content', 'none' ); ?>
<?php endif; ?>

</main>

<?php get_footer(); ?>
