<?php
	if ( have_rows( 'sisalto' ) ):
		while ( have_rows( 'sisalto' ) ) : the_row();
			get_template_part( 'acf/modules/' . get_row_layout() );
		endwhile;
	endif;
?>
