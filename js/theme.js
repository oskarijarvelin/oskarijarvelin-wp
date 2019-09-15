jQuery( document ).ready(function() {

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
