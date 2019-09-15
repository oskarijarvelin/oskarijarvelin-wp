<?php get_header(); ?>
<main id="main" class="main image">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="<?php echo get_post_type(); ?>-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<h1><?php the_title(); ?><h1>
					</header>

					<div class="entry-content">

						<figure class="entry-attachment wp-block-image">
							<?php echo wp_get_attachment_image( get_the_ID(), 'full' ); ?>
							<figcaption class="wp-caption-text"><?php the_excerpt(); ?></figcaption>
						</figure>

						<?php the_content(); ?>

					</div>


				</article>


</main>
<?php get_footer(); ?>
