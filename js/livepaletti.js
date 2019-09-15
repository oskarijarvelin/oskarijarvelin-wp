jQuery( document ).ready(function() {

  // Activates popovers
  jQuery(function () {
    jQuery('[data-toggle="popover"]').popover()
  })

  // Activates hover-opening for popovers
  jQuery('.popover-dismiss').popover({
    trigger: 'focus'
  })

  // HIDES TEKSTIDIAT WHEN MOBILE NAVIGATION OPENS
  jQuery('#paavalikko-navbar').on('show.bs.collapse', function () {
    jQuery('#tekstidiat').css({ opacity: 0 });
  })

  // HIDES TEKSTIDIAT WHEN MOBILE NAVIGATION OPENS
  jQuery('#paavalikko-navbar').on('shown.bs.collapse', function () {
    jQuery('#tekstidiat').hide();
  })

  // SHOWS TEKSTIDIAT WHEN MOBILE NAVIGATION CLOSES
  jQuery('#paavalikko-navbar').on('hide.bs.collapse', function () {
    jQuery('#tekstidiat').show();
    jQuery('#tekstidiat').css({ opacity: 1 });
  })

  // INITIALIZES PARALLAX
  if ( jQuery( '#parallax' ).length !== 0 ) {
    var parallaxInstance = new Parallax( jQuery( '#parallax' )[0] );
  }

  // INITIALIZES SWIPER WITHOUT AUTOPLAY
  if ( jQuery( '.swiper-container' )[0] ) {
    var referenssitSwiper = new Swiper ('.swiper-container', {
      effect: "flip",
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    })
  }

  // INITIALIZES SWIPER WITH 6 SECONDS AUTOPLAY
  if ( jQuery( '.swiper-container-6' )[0] ) {
    var referenssitApSwiper = new Swiper ('.swiper-container-6', {
      effect: "flip",
      loop: true,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    })
  }

  // INITIALIZES SWIPER WITH 12 SECONDS AUTOPLAY
  if ( jQuery( '.swiper-container-12' )[0] ) {
    var diatSwiper = new Swiper ('.swiper-container-12', {
      effect: "flip",
      loop: true,
      autoplay: {
        delay: 12000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      watchOverflow: true,
    })
  }

  // Smooth scrolling
  jQuery('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          event.preventDefault();
          jQuery('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            var jQuerytarget = jQuery(target);
            jQuerytarget.focus();
            if (jQuerytarget.is(":focus")) {
              return false;
            } else {
              jQuerytarget.attr('tabindex','-1');
              jQuerytarget.focus();
            };
          });
        }
      }
    });
});
