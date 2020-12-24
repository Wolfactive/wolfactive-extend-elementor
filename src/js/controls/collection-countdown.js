

jQuery( document ).ready(function($) {
    let elementorEditorCheck = document.querySelector('body.elementor-editor-active');
      function sliderCollectionCountdown () {
          let sliderCollectionCountdown= document.querySelector('.between-custom');
          if(sliderCollectionCountdown){
              var $sliderCollectionCountdown =  $('.between-custom');
              var $moresliderCollectionCountdown =  $('.between-custom').toArray();
              $.map( $moresliderCollectionCountdown, function( $item,$index ) {
                if(!$sliderCollectionCountdown.eq($index).hasClass('.slick-initialized')){
                  $sliderCollectionCountdown.eq($index).not('.slick-initialized').slick({
                      dots: true,
                  infinite: true,
                  speed: 1000,
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  autoplay: true,
                    autoplaySpeed: 3000,
                    fade: true,
                  responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 1,
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
    setInterval(sliderCollectionCountdown, 500);
    setInterval(Countdown, 500);
    }
    if(!elementorEditorCheck){
    sliderCollectionCountdown();
    Countdown();
    }  
    function Countdown(){
        var deatQuery =document.querySelector('.sub-banner-countdown');
        // console.log(deatQuery);
        // console.log(deatQuery.getAttribute("data-countdown"));
        if(deatQuery){
          var countDownDate = new Date(deatQuery.getAttribute("data-countdown")).getTime();
          var x = setInterval(function() {
              var now = new Date().getTime();
              var distance = countDownDate - now;
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
              document.getElementById("numberDays").innerHTML = days;
              document.getElementById("numberHours").innerHTML = hours;
              document.getElementById("numberMins").innerHTML = minutes;
              document.getElementById("numberSecs").innerHTML = seconds;
              if (distance < 0) {
                  clearInterval(x);
                  document.getElementById("numberDays").innerHTML = "00";
                  document.getElementById("numberHours").innerHTML = "00";
                  document.getElementById("numberMins").innerHTML = "00";
                  document.getElementById("numberSecs").innerHTML = "00";
              }
          }, 1000);
        }
    }      
})