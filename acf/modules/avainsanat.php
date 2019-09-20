<div class="container acf-module avainsanat">
	<div class="row">
		<div class="col py-5">
			<?php wp_tag_cloud( array(
      	'smallest'                  => 8,
      	'largest'                   => 22,
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
