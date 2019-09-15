<?php get_header(); ?>
<main id="main" class="main single">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content/single', get_post_type() ); ?>

			<?php endwhile; ?>

</main>
<?php get_footer(); ?>
