jQuery(function ($) {
  $(".owl-carouselOne").owlCarousel({
    autoWidth: true,
    autoHeight: true,
    animateOut: "slideOutDown",
    animateIn: "flipInX",
    stagePadding: 30,
    smartSpeed: 950,
    center: true,
    items: 3,
    loop: true,
    autoplay: true,
    autoplayTimeout: 6000,
    nav: true,
    dots: true,
  });
});

jQuery(function ($) {
  $(".owl-carouselTwo").owlCarousel({
    items: 4,
    nav: true,
    dots: true,
    loop: false,
    autoWidth: true,
    autoHeight: true,
    animateOut: "slideOutDown",
    animateIn: "flipInX",
    stagePadding: 30,
    smartSpeed: 950,
    margin: 10,
    center: false,
  });
});


