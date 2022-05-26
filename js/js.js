/*
  Sign in & Sign up Template
  Author: Ciuca Cristian (Criatix)
  Author URL: https://www.ciucacristi.tk/
  Framework: Bootstrap v5.0
  Version: v2.0
  Demo: https://ciucacristi.tk/signin
*/

/* Owl Carousel */
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      loop:true,
      dots: false,
      margin:10,
      nav:false,

      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  })
});
/* End Owl Carousel */
