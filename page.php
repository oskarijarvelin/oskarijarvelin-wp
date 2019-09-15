<?php get_header(); ?>

	<main id="main" class="main page mt-5">

		<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'page' );
			endwhile;
		?>

	</main>

<?php get_footer(); ?>
