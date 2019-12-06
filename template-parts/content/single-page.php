<section id="page-<?php the_ID(); ?>" class="page single">

	<?php if ( !is_front_page() ) : ?>
		<header class="container page-header py-5">
			<div class="row">
				<div class="col-12 py-3">
					<h1 class="display-4" style="word-break: break-all;"><?php the_title(); ?></h1>
				</div>
			</div>
		</header>
	<?php endif;  ?>



	<div class="acf-content">
		<?php
			if ( have_rows( 'sisalto' ) ):
				while ( have_rows( 'sisalto' ) ) : the_row();
					get_template_part( 'acf/modules/' . get_row_layout() );
				endwhile;
			endif;
		?>
	</div>

</section>
