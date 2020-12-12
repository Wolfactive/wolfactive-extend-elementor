

jQuery( document ).ready(function($) {
  let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
  console.log(elementorEditorCheck);
    function sliderInstagramlInit () {
        let sliderInstagram = document.querySelector('.wa-ella-slider-instagram');
        var $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="wa-gg-chevron-left"></i></button>';
        var $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="wa-gg-chevron-right"></i></button>';
        if(sliderInstagram){
            var $sliderInstagram =  $('.wa-ella-slider-instagram');
            var $moreSliderInstagram =  $('.wa-ella-slider-instagram').toArray();
            $.map( $moreSliderInstagram, function( $item,$index ) {
              var $showItem = $item.getAttribute("data-show-item");
              if(!$sliderInstagram.eq($index).hasClass('.slick-initialized')){
                $sliderInstagram.eq($index).not('.slick-initialized').slick({
                    dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: parseInt($showItem),
                slidesToScroll: parseInt($showItem),
                nextArrow: $next,
                prevArrow: $prev,
                responsive: [
                  {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3,
                      infinite: true,
                      dots: false
                    }
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                    }
                  }
                ]
                })
                }
            })
            
        }
    }function sliderNoArrowInstagramlInit () {
      let sliderNoArrowInstagramlInit = document.querySelector('.wa-ella-slider-noarrow-instagram');
      // var $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="wa-gg-chevron-left"></i></button>';
      // var $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="wa-gg-chevron-right"></i></button>';
      if(sliderNoArrowInstagramlInit){
          var $sliderNoArrowInstagramlInit =  $('.wa-ella-slider-noarrow-instagram');
          var $moreSliderInstagram =  $('.wa-ella-slider-noarrow-instagram').toArray();
          $.map( $moreSliderInstagram, function( $item,$index ) {
            var $showItem = $item.getAttribute("data-show-item");
            if(!$sliderNoArrowInstagramlInit.eq($index).hasClass('.slick-initialized')){
              $sliderNoArrowInstagramlInit.eq($index).not('.slick-initialized').slick({
                centerMode: true,
                centerPadding: '210px',
                slidesToShow: parseInt($showItem),
                responsive: [
                  {
                    breakpoint: 800,
                    settings: {
                      arrows: false,
                      centerMode: true,
                      centerPadding: '40px',
                      slidesToShow: 3
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      arrows: false,
                      centerMode: true,
                      centerPadding: '40px',
                      slidesToShow: 2
                    }
                  }
                ]
              });
              }
          })
          
      }
  }
    if(elementorEditorCheck){
      setInterval(sliderInstagramlInit, 500);
      setInterval(sliderNoArrowInstagramlInit, 500);
    }
    if(!elementorEditorCheck){
        sliderInstagramlInit();
        sliderNoArrowInstagramlInit();
    }  
    
  })