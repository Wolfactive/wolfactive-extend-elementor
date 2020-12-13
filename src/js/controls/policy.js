

jQuery( document ).ready(function($) {
    let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
      function sliderPolicylInit () {
          let sliderPolicy = document.querySelector('.wa-ella-background-policy');
          var $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="wa-gg-chevron-left"></i></button>';
          var $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="wa-gg-chevron-right"></i></button>';
          if(sliderPolicy){
              var $sliderPolicy =  $('.wa-ella-background-policy');
              var $moresliderPolicy =  $('.wa-ella-background-policy').toArray();
              $.map( $moresliderPolicy, function( $item,$index ) {
                var $showItem = $item.getAttribute("data-show-item");
                if(!$sliderPolicy.eq($index).hasClass('.slick-initialized')){
                  $sliderPolicy.eq($index).not('.slick-initialized').slick({
                      dots: false,
                  infinite: false,
                  speed: 300,
                  slidesToShow: parseInt($showItem),
                  slidesToScroll: 1,
                  nextArrow: $next,
                  prevArrow: $prev,
                  responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                      }
                    }
                  ]
                  })
                  }
              })
              
          }
      }
      if(elementorEditorCheck){
        setInterval(sliderPolicylInit, 500);
      }
      if(!elementorEditorCheck){
        sliderPolicylInit();
      }  
      
    })