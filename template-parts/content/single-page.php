<section id="page-<?php the_ID(); ?>" class="page single">

	<header class="container page-header">
		<div class="row">
			<div class="col pt-5">
				<h1 class="display-4"><?php the_title(); ?></h1>
			</div>
		</div>
	</header>

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
