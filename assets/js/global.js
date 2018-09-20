(function($, wp) {
  $(document).ready(function() {
    /*
      Init AOS
    */
    //AOS.init();
    /*
      Init Owl.Carousel with custom default attributes & data-owl-carousel
    */
    // var $owlAttr = { items: 1, navText: ["", ""], animateOut: "fadeOut" };
    // var $extraAttr = $("#owl-carousel").data("owl-carousel");
    // $.extend($owlAttr, $extraAttr);
    // $(this).owlCarousel($owlAttr);
    /*
      Select all links with hashes (https://css-tricks.com/snippets/jquery/smooth-scrolling/)
    */
    // $('a[href*="#"]')
    //   .not('[href="#"]')
    //   .not('[href="#0"]')
    //   .click(function(event) {
    //     if (
    //       location.pathname.replace(/^\//, "") ==
    //         this.pathname.replace(/^\//, "") &&
    //       location.hostname == this.hostname
    //     ) {
    //       var target = $(this.hash);
    //       target = target.length
    //         ? target
    //         : $("[name=" + this.hash.slice(1) + "]");
    //       if (target.length) {
    //         event.preventDefault();
    //         $("html, body").animate(
    //           {
    //             scrollTop: target.offset().top
    //           },
    //           1000,
    //           function() {
    //             var $target = $(target);
    //             $target.focus();
    //             if ($target.is(":focus")) {
    //               return false;
    //             } else {
    //               $target.attr("tabindex", "-1");
    //               $target.focus();
    //             }
    //           }
    //         );
    //       }
    //     }
    //   });
  });
})(jQuery, wordpress);
