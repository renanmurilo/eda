"use strict";var openMenu=document.querySelector(".open__menu"),ico=document.querySelector(".hamburguer-line"),menu=document.querySelector(".menu"),closeMenu=document.querySelector(".close__menu"),language=document.querySelector(".language"),logo=document.querySelector(".logo__mobile"),$homeSlider=(openMenu.addEventListener("click",function(e){e.preventDefault(),closeMenu.classList.toggle("active"),language.classList.toggle("active"),openMenu.classList.toggle("active"),menu.classList.toggle("active"),logo.classList.toggle("active")}),closeMenu.addEventListener("click",function(e){e.preventDefault(),openMenu.classList.toggle("active"),language.classList.toggle("active"),closeMenu.classList.toggle("active"),menu.classList.toggle("active"),logo.classList.toggle("active")}),$("[data-group]").each(function(){var o=$(this).find("[data-target]"),t=$(this).find("[data-click]"),a="active";o.first().addClass(a),t.first().addClass(a),t.click(function(e){e.preventDefault(),o.removeClass(a),t.removeClass(a);e=$(this).data("click");$('[data-target="'+e+'"]').addClass(a),$(this).addClass(a)})}),!function(){localStorage.pureJavaScriptCookies||document.querySelector(".box-cookies").classList.remove("hide");document.querySelector(".btn-cookies").addEventListener("click",function(){document.querySelector(".box-cookies").classList.add("hide"),localStorage.setItem("pureJavaScriptCookies","accept")})}(),$(document).ready(function(){$(".slide-banners").addClass("owl-carousel").owlCarousel({items:1,dots:!0,nav:!1,loop:!0,autoplay:!0}),$(".slide-post-destaque").addClass("owl-carousel").owlCarousel({items:1,dots:!0,nav:!0,loop:!0,autoplay:!0}),$(".slide-home-publicacoes").addClass("owl-carousel").owlCarousel({items:3,dots:!0,nav:!0,loop:!0,autoplay:!0,margin:10,responsive:{0:{items:1,margin:0,center:!0},768:{items:2},1024:{items:3,dots:!0,nav:!0,loop:!0,autoplay:!0,margin:10}}}),$(".slider-atuacao").addClass("owl-carousel").owlCarousel({items:2,loop:!1,center:!0,margin:40,URLhashListener:!0,autoplayHoverPause:!0,startPosition:"URLHash",autoWidth:!0})}),$(".slide-home-reconhecimento"));function showHomeSlider(){"undefined"!==$homeSlider.data("owlCarousel")&&(window.matchMedia("(max-width: 767px)").matches?initialHomeSlider:destroyHomeSlider)()}function initialHomeSlider(){$homeSlider.addClass("owl-carousel").owlCarousel({items:1,dots:!0,nav:!0,loop:!0,autoplay:!0})}function destroyHomeSlider(){$homeSlider.trigger("destroy.owl.carousel").removeClass("owl-carousel")}$(window).resize(function(){showHomeSlider()}),showHomeSlider();