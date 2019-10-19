<div class="container acf-module avainsanat">
	<div class="row d-flex justify-content-center">
		<div class="col-12 col-md-11 col-lg-7 py-3">
			<?php wp_tag_cloud( array(
      	'smallest'                  => 11,
      	'largest'                   => 26,
      	'unit'                      => 'pt',
      	'number'                    => 45,
      	'format'                    => 'flat',
      	'separator'                 => "\n",
      	'orderby'                   => 'name',
      	'order'                     => 'ASC',
      	'exclude'                   => null,
      	'include'                   => null,
      	'link'                      => 'view',
      	'taxonomy'                  => 'post_tag',
      	'echo'                      => true,
      	'show_count'                  => 0,
      	'child_of'                  => null,
      ) ); ?>
		</div>
	</div>
</div>
