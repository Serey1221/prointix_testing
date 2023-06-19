var swiper = new Swiper(".cart_slider", {
  slidesPerView: 2,
  spaceBetween: 30,
  loop: true,
  centerSlider:'true',
  fade:'true',
  gragCursor:'true',
  speed:2000,
  autoplay:{
    delay:20
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  centeredSlides: true,
  fade:'true',
  gragCursor:'true',
  speed:1500,
  // autoplay:{
  //   delay:20
  // },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
});

