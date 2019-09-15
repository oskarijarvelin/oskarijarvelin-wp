<?php get_header(); ?>
<main id="main" class="main search">

	<header class="container main-header">
		<div class="row">
			<div class="col py-5">
				<h1 class="display-4">
					<?php $q = ( get_search_query() === '' ) ? '' : '"' . get_search_query() . '"'; ?>
					<?php _e( 'Tulokset haulle: ' . $q, 'oskarijarvelin' ); ?>
				</h1>
			</div>
		</div>
	</header>

		<?php if ( have_posts() ) : ?>

			<?php	while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content/excerpt', get_post_type() ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<section class="container content-none">
				<div class="row">
					<div class="col py-5">
						<h4><?php _e( 'Sisältöä ei löytynyt', 'oskarijarvelin' ); ?></h4>
					</div>
				</div>
			</section>

		<?php endif; ?>

</main>
<?php get_footer(); ?>
