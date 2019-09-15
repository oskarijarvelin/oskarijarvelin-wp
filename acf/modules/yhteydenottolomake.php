<?php $shortcode = "[ninja_form id=" . get_sub_field('kielivalinta') . "]"; ?>
<div id="yhteydenottolomake" class="container yhteydenottolomake my-5 py-5">

  <div class="row justify-content-end">
    <div class="col-12 col-lg-6 pb-3">
      <h2 class="text-break"><?php echo get_sub_field('otsikko'); ?></h2>
    </div>
  </div>

  <div class="row justify-content-end">
    <div class="col-12 col-lg-6">
      <?php echo do_shortcode( $shortcode ); ?>
    </div>
  </div>

</div>
