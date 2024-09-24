//--- Hero Swiper ---
const swiper = new Swiper(".swiper", {
  speed: 400,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
  },
});
