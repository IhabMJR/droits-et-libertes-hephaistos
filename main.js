//--- Navbar scroll ---
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
  if (window.scrollY >= 56) {
    navbar.classList.add('navbar-scrolled');
  } else if (window.scrollY < 56) {
    navbar.classList.remove('navbar-scrolled');
  }
});

//--- Hero Swiper ---
const swiper = new Swiper(".swiper-hero", {
  speed: 400,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
  },
});

//--- Swiper temoignages ---/
const swiperTemoignages = new Swiper(".swiper-temoignages", {
  speed: 400,
  autoplay: {
    delay: 3000,
  },
});