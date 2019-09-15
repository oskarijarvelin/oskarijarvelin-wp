<?php get_header(); ?>
<main id="main" class="main page">

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content/single', 'page' ); ?>
	<?php	endwhile; ?>

</main>
<?php get_footer(); ?>
