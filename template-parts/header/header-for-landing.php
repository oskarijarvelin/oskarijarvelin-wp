<header id="header" class="header landing">
  <div class="taustakuva" style="background-image: url('<?php echo get_field('landing-header_' . pll_current_language(), 'options')['taustakuva']['sizes']['large']; ?>');">
    <div class="overlay">

      <div class="container navigation ylavalikko pr-0">
        <div class="row">
          <div class="col px-0">
            <?php get_template_part( 'template-parts/navigation/navigation', 'ylavalikko' ); ?>
          </div>
        </div>
      </div>

      <div class="container navigation paavalikko">
        <div class="row">
          <div class="col px-0">
            <?php if ( has_nav_menu( 'paavalikko' ) ) : ?>
                <?php get_template_part( 'template-parts/navigation/navigation', 'paavalikko' ); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>


      <div id="tekstidiat" class="container-fluid tekstidiat py-3">
        <div class="row px-3">
          <?php foreach ( get_field('landing-header_' . pll_current_language(), 'options')['tekstit'] as $teksti ): ?>
            <div id="parallax" class="col text-break text-center">

              <div class="dia" data-depth="0.5">
                  <h1 class="font-weight-light mb-0"><?php echo $teksti['teksti']; ?></h1>
              </div>

            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</header>
