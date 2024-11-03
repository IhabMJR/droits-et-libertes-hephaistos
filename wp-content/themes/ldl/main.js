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
  loop: true,
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
  spaceBetween: 30,
  slidesPerView: 'auto'
});

//--- Swiper actualites ---/
const swiperActualites = new Swiper(".scroll", {
  speed: 400,
  spaceBetween: 30,
  slidesPerView: 'auto',
  centeredSlides: true,
  initialSlide: 1
});

//-- Swiper equipe --//
const swiperEquipe = new Swiper(".swiper.equipe", {
  speed: 400,
  spaceBetween: 30,
  slidesPerView: 'auto',
});
