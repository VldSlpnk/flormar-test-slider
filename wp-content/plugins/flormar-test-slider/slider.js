document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.fts-slider', {
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    slidesPerView: 2,
    breakpoints: {
      485: { slidesPerView: 4 },
    },
  })
})
