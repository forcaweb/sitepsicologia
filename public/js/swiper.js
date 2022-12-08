// var swiper = new Swiper(".categories", {
//   slidesPerView: 1,
//   spaceBetween: 10,
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
//   breakpoints: {
//     640: {
//       slidesPerView: 2,
//       spaceBetween: 1,
//     },
//     768: {
//       slidesPerView: 4,
//       spaceBetween: 1,
//     },
//     1024: {
//       slidesPerView: 5,
//       spaceBetween: 1,
//     },
//   },
//   loop: true,
//   autoplay: {
//     delay: 5000,
//     disableOnInteraction: false,
//   },
// });

var swiper = new Swiper(".selfies", {
  slidesPerView: 1,
  spaceBetween: 10,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
});