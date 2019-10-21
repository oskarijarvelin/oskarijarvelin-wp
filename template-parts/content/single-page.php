<section id="page-<?php the_ID(); ?>" class="page single">

	<header class="container page-header py-5">
		<div class="row">
			<div class="col-12 py-3">
				<h1 class="display-4"><?php the_title(); ?></h1>
			</div>
		</div>
	</header>



	<div class="acf-content pb-5">
		<?php
			if ( have_rows( 'sisalto' ) ):
				while ( have_rows( 'sisalto' ) ) : the_row();
					get_template_part( 'acf/modules/' . get_row_layout() );
				endwhile;
			endif;
		?>
	</div>

</section>
