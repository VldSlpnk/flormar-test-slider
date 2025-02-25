document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.fts-slider', {
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    slidesPerView: 2,
    spaceBetween: 10,
    breakpoints: {
      700: {
        slidesPerView: 4,
      },
      1700: {
        slidesPerView: 5,
      },
      1800: {
        slidesPerView: 6,
      },
    },
  })
})
