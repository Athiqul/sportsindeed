$(document).ready(function () {
  var $slick = $(".banner-slider");
  var $progressBar = $(".progress-bar");
  $slick.on(
    "init reInit afterChange",
    function (event, slick, currentSlide, nextSlide) {
      // Calculate progress percentage
      var progress = ((currentSlide || 0) / (slick.slideCount - 1)) * 100;
      $progressBar.css("width", progress + "%");
    }
  );

  $(".banner-slider").slick({
    infinite: true,
    speed: 500,
    slidesToShow: 5,
    slidesToScroll: 1,
    centerMode: true,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });
});
