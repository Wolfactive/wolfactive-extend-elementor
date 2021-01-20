jQuery(document).ready(function ($) {
  let elementorEditorCheck = document.querySelector(
    "body.elementor-editor-active"
  );
  function sliderFlashDealsInit() {
    let sliderFlashDeals = document.querySelector(".flash-deals-product");
    var $prev =
      '<button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="wa-gg-chevron-left"></i></button>';
    var $next =
      '<button type="button" class="slick-next slick-arrow" style="display: block;"><i class="wa-gg-chevron-right"></i></button>';
    if (sliderFlashDeals) {
      var $sliderFlashDeals = $(".flash-deals-product");
      var $moresliderFlashDeals = $(".flash-deals-product").toArray();
      $.map($moresliderFlashDeals, function ($item, $index) {
        var $showItem = $item.getAttribute("data-show-item");
        if (!$sliderFlashDeals.eq($index).hasClass(".slick-initialized")) {
          $sliderFlashDeals
            .eq($index)
            .not(".slick-initialized")
            .slick({
              dots: true,
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
                    dots: true,
                  },
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                  },
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                  },
                },
              ],
            });
        }
      });
    }
  }
  if (elementorEditorCheck) {
    setInterval(sliderFlashDealsInit, 500);
  }
  if (!elementorEditorCheck) {
    sliderFlashDealsInit();
  }
});
jQuery(document).ready(function ($) {
  let elementorEditorCheckFlashdeals = document.querySelector(
    "body.elementor-editor-active"
  );
  function CountdownFlashDeals() {
    if (document.querySelector(".countdown-item-fld")) {
      var deatQuery = document.querySelector(".countdown-item-fld");
      if (deatQuery) {
        var countDownDate = new Date(
          deatQuery.getAttribute("data-countdown-parallax")
        ).getTime();
        var x = setInterval(function () {
          var now = new Date().getTime();
          var distance = countDownDate - now;
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
          );
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          try {
            document.getElementById("numberDaysFlashDeals").innerHTML = days;
            document.getElementById("numberHoursFlashDeals").innerHTML = hours;
            document.getElementById("numberMinsFlashDeals").innerHTML = minutes;
            document.getElementById("numberSecsFlashDeals").innerHTML = seconds;
            if (distance < 0) {
              clearInterval(x);
              document.getElementById("numberDaysFlashDeals").innerHTML = "00";
              document.getElementById("numberHoursFlashDeals").innerHTML = "00";
              document.getElementById("numberMinsFlashDeals").innerHTML = "00";
              document.getElementById("numberSecsFlashDeals").innerHTML = "00";
            }
          } catch (e) {}
        }, 1000);
      }
    }
  }
  if (elementorEditorCheckFlashdeals) {
    setInterval(CountdownFlashDeals, 500);
  }
  if (!elementorEditorCheckFlashdeals) {
    CountdownFlashDeals();
  }
});
