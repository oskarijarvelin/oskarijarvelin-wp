<?php $artikkelit = new WP_Query( array(
	'posts_per_page' => 3
) ); ?>

<?php if ( $artikkelit->have_posts() ) : ?>
	<section class="container acf-module ajankohtaista<?php echo getAcfModuleSettings(); ?>">
		<div class="row">

			<?php if ( get_sub_field('osion_otsikko') ) : ?>
	      <div class="col-12">
	        <h2 class="mt-0 mb-3"><?php echo get_sub_field('osion_otsikko'); ?></h2>
	      </div>
	    <?php endif; ?>

			<div class="col-12">
				<div class="card-columns pt-3">
					<?php while ( $artikkelit->have_posts() ) : $artikkelit->the_post(); ?>
						<?php get_template_part( 'template-parts/content/excerpt', 'post' ); ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
