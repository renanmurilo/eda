$(document).ready(function() {
	 $('.slide-banners').addClass("owl-carousel").owlCarousel({
        items: 1,
        dots: true,
        nav: false,
        loop: true,
        autoplay: true,
    });

     $('.slide-post-destaque').addClass("owl-carousel").owlCarousel({
        items: 1,
        dots: true,
        nav: true,
        loop: true,
        autoplay: true,
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

    $('.slider-atuacao').addClass("owl-carousel").owlCarousel({
        items:2,
        loop:false,
        center:true,
        margin:40,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
        autoWidth: true,
    });
})

var $homeSlider = $(".slide-home-reconhecimento");

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
    items:1,
    dots: true,
    nav: true,
    loop: true,
    autoplay: true,
  });
}

function destroyHomeSlider() {
  $homeSlider.trigger("destroy.owl.carousel").removeClass("owl-carousel");
}