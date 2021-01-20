import changeLayoutHeader from "../components/changeLayoutHeader";
let elementorEditorCheck = document.querySelector(
  "body.elementor-editor-active"
);
const parallaxInit = () => {
  let parallaxCheck = document.querySelector(
    ".elementor-widget-wolfactive_parallax"
  );
  if (parallaxCheck) {
    changeLayoutHeader();
  }
};

if (elementorEditorCheck) {
  setInterval(parallaxInit, 500);
}
if (!elementorEditorCheck) {
  parallaxInit();
}
jQuery(document).ready(function ($) {
  let elementorEditorCheckParallax = document.querySelector(
    "body.elementor-editor-active"
  );
  function CountdownParallax() {
    if (document.querySelector(".parallax-countdown")) {
      var deatQuery = document.querySelector(".parallax-countdown");
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
            document.getElementById("numberDaysParallax").innerHTML = days;
            document.getElementById("numberHoursParallax").innerHTML = hours;
            document.getElementById("numberMinsParallax").innerHTML = minutes;
            document.getElementById("numberSecsParallax").innerHTML = seconds;
            if (distance < 0) {
              clearInterval(x);
              document.getElementById("numberDaysParallax").innerHTML = "00";
              document.getElementById("numberHoursParallax").innerHTML = "00";
              document.getElementById("numberMinsParallax").innerHTML = "00";
              document.getElementById("numberSecsParallax").innerHTML = "00";
            }
          } catch (e) {}
        }, 1000);
      }
    }
  }
  if (elementorEditorCheckParallax) {
    setInterval(CountdownParallax, 500);
  }
  if (!elementorEditorCheckParallax) {
    CountdownParallax();
  }
});
