jQuery( document ).ready(function() {

  scrolled();

  var strings = jQuery("#typer").data('strings').split("|");
  jQuery("#typer").typer({
    strings: strings,
    typeSpeed: 60,
    backspaceSpeed: 30,
    backspaceDelay: 3000,
    repeatDelay: 1000,
    repeat:true,
    autoStart:true,
    startDelay: 1000,
    useCursor:true
  });


  // Activates popovers
  jQuery(function () {
    jQuery('[data-toggle="popover"]').popover()
  })

  // Activates hover-opening for popovers
  jQuery('.popover-dismiss').popover({
    trigger: 'focus'
  })

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



jQuery( document ).scroll(function() {
  scrolled();
});



// SCROLLED
function scrolled() {

  if ( jQuery('header').hasClass('frontpage') ) {
    if ( jQuery( document ).scrollTop() > 70 ) {
      jQuery('header').addClass('scrolled');
    } else {
      if ( jQuery('header').hasClass('scrolled') ) {
        jQuery('header').removeClass('scrolled');
      }
    }
  } else {
    if ( jQuery( document ).scrollTop() > 70 ) {
      jQuery('header').addClass('scrolled');
    } else {
      if ( jQuery('header').hasClass('scrolled') ) {
        jQuery('header').removeClass('scrolled');
      }
    }
  }


  jQuery('.showonscroll').each( function() {
    if ( !jQuery(this).hasClass('show') ) {
      if ( jQuery(window).scrollTop() >= ( jQuery(this).offset().top - jQuery(window).height() + 80 ) ) {
        jQuery(this).addClass('show');
      }
    }
  });

  var h = document.documentElement,
  b = document.body,
  st = 'scrollTop',
  sh = 'scrollHeight';
  var percent = parseInt((h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100);

  jQuery('#progressbar').css("width", percent + "%");
  jQuery('#progressbar').attr("aria-valuenow", percent);
}



// TOGGLE
function toggle(ele) {
  if ( jQuery(ele).hasClass('show') ) {
    jQuery(ele).removeClass('show');
  } else {
    jQuery(ele).addClass('show');
  }
}



// TAKAISIN
function takaisin() {
  window.history.back();
}
