<article id="post-<?php the_ID(); ?>" class="article single">

	<header class="container post-header pt-5 pb-4">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-11 col-lg-7 py-3">
				<h2 class="display-4"><?php the_title(); ?></h2>
			</div>
		</div>
	</header>

	<div class="container post-content pb-5">
    <div class="row d-flex justify-content-center">
			<div class="col-12 col-md-11 col-lg-7 py-3">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

</article>
