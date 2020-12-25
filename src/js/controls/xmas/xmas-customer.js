

jQuery( document ).ready(function($) {
    let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
      function sliderCustomerSpeaklInit () {
          let sliderCustomerSpeak = document.querySelector('.slider-customer-speak');
          var $prev = '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="wa-gg-chevron-left"></i></button>';
          var $next = '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="wa-gg-chevron-right"></i></button>';
          if(sliderCustomerSpeak){
              var $sliderCustomerSpeak =  $('.slider-customer-speak');
              var $moresliderCustomerSpeak =  $('.slider-customer-speak').toArray();
              $.map( $moresliderCustomerSpeak, function( $item,$index ) {
                var $showItem = $item.getAttribute("data-show-item");
                if(!$sliderCustomerSpeak.eq($index).hasClass('.slick-initialized')){
                  $sliderCustomerSpeak.eq($index).not('.slick-initialized').slick({
                      dots: true,
                  infinite: true,
                  speed: 1000,
                  slidesToShow: parseInt($showItem),
                  slidesToScroll: 1,
                  nextArrow: $next,
                  prevArrow: $prev,
                  responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                      }
                    },
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        slidesToShow: 1,
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
        setInterval(sliderCustomerSpeaklInit, 500);
      }
      if(!elementorEditorCheck){
        sliderCustomerSpeaklInit();
      }  
      
    })