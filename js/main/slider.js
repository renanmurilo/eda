$(document).ready(function() {
	 $('.slide-banners').addClass("owl-carousel").owlCarousel({
        items: 1,
        dots: true,
        nav: false,
        loop: true,
        autoplay: true,
    });

     $('.slide-produto').addClass("owl-carousel").owlCarousel({
        items: 5,
        dots: false,
        nav: true,
        loop: true,
        margin: 10,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                margin: 10,
            },
            768:{
                items:1,
            },
            1024: {
              items: 5,
            }
        }
    });

    $('.slide-home-publicacoes').addClass("owl-carousel").owlCarousel({
        items: 3,
        dots: true,
        nav: true,
        loop: true,
        autoplay: true,
        margin: 10,
        responsive: {
            0: {
                items: 1,
                margin: 0,
                center: true
            },
            768:{
                items:2,
            },
            1024: {
              items: 3,
              dots: true,
              nav: true,
              loop: true,
              autoplay: true,
              margin: 10,
            }
        }
    });

    $('.slider-nossa-historia').addClass("owl-carousel").owlCarousel({
        items: 4,
        nav: false, 
        dots: false,
        loop:false,
        center:true,
        margin: 132,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
        responsive: {
            0: {
                items: 1,
                center: false,
                margin: 20,
                autoplayHoverPause:false,
            },
            768:{
                items:2,
            },
            1024: {
              items: 4,
            }
        }
    });

    var owl = $('.slider-nossa-historia');
    owl.on("mousewheel", ".owl-stage", function (e) {
      if (e.originalEvent.wheelDelta > 0) {
        owl.trigger("prev.owl");
      } else {
        owl.trigger("next.owl");
      }
      e.preventDefault();
    });
})

var $homeSlider = $(".filtro-menu");

$(window).resize(function() {
  showHomeSlider();
});

function showHomeSlider() {
  if ($homeSlider.data("owlCarousel") !== "undefined") {
    if (window.matchMedia('(max-width: 767px)').matches) {
      initialHomeSlider();
    } else {
      destroyHomeSlider();
    }
  }
}
showHomeSlider();

function initialHomeSlider() {
  $homeSlider.addClass("owl-carousel").owlCarousel({
    items: 3,
    dots: false,
    nav: true,
    loop: false,
    margin: 5,
  });
}

function destroyHomeSlider() {
  $homeSlider.trigger("destroy.owl.carousel").removeClass("owl-carousel");
}