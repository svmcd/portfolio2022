$(window).on("load",function(){
    $(".loading-wrapper").delay("1000").fadeOut("slow");
    $("body").removeClass("preload");
});

// PROJECTS SLIDER

var swiper = new Swiper(".slider", {
    slidesPerView: 1.2,
    spaceBetween: 80,
    slidesPerGroup: 1,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
          slidesPerView: 1.1,
          spaceBetween: 25,
        },
        800: {
          slidesPerView: 1.1,
          spaceBetween: 80,
        },
        1124: {
          slidesPerView: 1.2,
          spaceBetween: 80,
        },
      },
});

// PROJECTS SLIDER END