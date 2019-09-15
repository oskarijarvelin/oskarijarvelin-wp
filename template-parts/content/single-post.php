<article id="post-<?php the_ID(); ?>" class="article single">

	<header class="container post-header">
		<div class="row">
			<div class="col pt-5">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
	</header>

	<div class="container post-content">
    <div class="row">
			<div class="col py-5">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

</article>
