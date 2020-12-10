jQuery( document ).ready(function($) {
  function carouselInit () {
    let carousel = document.querySelector('.wa-ella-carousel .wa-ella-carousel-list');
    if(carousel){
      var $carousel =  $('.wa-ella-carousel .wa-ella-carousel-list');
      var $speed = $carousel.attr("data-speed") || 2000;
      if(!$carousel.hasClass('.slick-initialized')){
        $carousel.not('.slick-initialized').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 5000,
          infinite: true,
          speed: 500,
          autoplaySpeed: parseInt($speed),
          fade: true,
          cssEase: 'linear'
        })
      }
    }
  }

  setInterval(carouselInit, 500);
})
