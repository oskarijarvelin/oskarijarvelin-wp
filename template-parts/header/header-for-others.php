<header id="header" class="header others">

  <div class="container navigation ylavalikko">
    <div class="row">
      <div class="col px-0">
        <?php get_template_part( 'template-parts/navigation/navigation', 'ylavalikko' ); ?>
      </div>
    </div>
  </div>

  <div class="container navigation paavalikko pr-0">
    <div class="row">
      <div class="col px-0">
        <?php if ( has_nav_menu( 'paavalikko' ) ) : ?>
            <?php get_template_part( 'template-parts/navigation/navigation', 'paavalikko' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="container-fluid taustakuva mt-3" style="background-image: url('<?php echo get_field('landing-header', 'options')['taustakuva']['sizes']['large']; ?>');">
    <div class="container px-0">
      <div class="row">
        <div class="col px-sm-0">
          <div class="jumbotron jumbotron-fluid text-white">
            <div class="container px-0 py-5">

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb px-0">
                  <li class="breadcrumb-item"><a class="text-white" href="<?php echo get_site_url(); ?>"><i class="fas fa-home"></i></a></li>
                  <?php if ( wp_get_post_parent_id( get_the_ID() ) ): ?>
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo get_the_permalink( wp_get_post_parent_id( get_the_ID() ) ); ?>"><?php echo get_the_title( wp_get_post_parent_id( get_the_ID() ) ); ?></a></li>
                  <?php endif; ?>
                  <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
              </nav>

              <h1 class="display-4 text-break mb-0"><?php echo get_the_title(); ?></h1>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>
