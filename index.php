<?php get_header(); ?>

<main id="main" class="main index">

	<header class="main-header">
		<?php get_template_part('template-parts/hero/hero'); ?>
	</header>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content/excerpt', 'post' ); ?>
	<?php endwhile; ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content', 'none' ); ?>
<?php endif; ?>

</main>

<?php get_footer(); ?>
