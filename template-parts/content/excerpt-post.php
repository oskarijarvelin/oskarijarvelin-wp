<article class="card article excerpt shadow border mb-4">

  <a class="stretched-link" href="<?php the_permalink(); ?>"></a>

  <?php if ( has_post_thumbnail() ) : ?>
    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>" class="card-img-top" alt="...">
  <?php endif; ?>

  <div class="card-body">
    <h4 class="card-title text-dark my-3"><?php the_title(); ?></h4>
    <?php the_excerpt(); ?>
  </div>

  <div class="card-footer text-muted d-flex justify-content-between">
    <p class="m-0"><small><?php echo get_the_category()[0]->name; ?></small></p>
    <p class="m-0"><small><?php echo get_the_date(); ?></small></p>
  </div>

</article>
