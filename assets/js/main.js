jQuery(document).ready(function($) {
  $(".center").slick({
    centerMode: true,
    centerPadding: "60px",
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1
        }
      }
    ]
  });

  $("#menu-wrapper").click(function() {
    $("#menu-main-menu").slideToggle();
  });

  $("li:has(ul)").click(function() {
    $(this)
      .find("ul")
      .slideToggle();
  });
});
