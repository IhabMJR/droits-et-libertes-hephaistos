gsap.registerPlugin(ScrollTrigger);

//--- Navbar scroll ---
const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
  if (window.scrollY >= 56) {
    navbar.classList.add("navbar-scrolled");
  } else if (window.scrollY < 56) {
    navbar.classList.remove("navbar-scrolled");
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
  slidesPerView: "auto",
});

//--- Swiper partenaire ---/
const swiperPartenaire = new Swiper(".swiper-partenaire", {
  speed: 400,
  spaceBetween: 30,
  slidesPerView: "auto",
});

//--- Swiper actualites ---/
const swiperActualites = new Swiper(".scroll", {
  speed: 400,
  spaceBetween: 30,
  slidesPerView: "auto",
  centeredSlides: true,
  initialSlide: 1,
});

//--- Swiper actualites-nouvelle ---/
const swiperActualitesNouvelle = new Swiper(".swiper_nouvelle", {
  speed: 400,
  spaceBetween: 30,
  slidesPerView: "auto",
  centeredSlides: true,
  initialSlide: 1,
});

//-- Swiper equipe --//
const swiperEquipe = new Swiper(".swiper.equipe", {
  speed: 400,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
  },
  breakpoints: {
    500: {
      slidesPerView: 1.1,
      spaceBetween: 20,
    },
    800: {
      slidesPerView: 1.5,
      spaceBetween: 20,
    },
    1400: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
  },
});

//-- Swiper luttes --//
const swiperLuttes = new Swiper(".swiper.luttes", {
  speed: 400,
  spaceBetween: 0,
  loop: true,
  observer: true,
  observeParents: true,
  direction: "horizontal",
  parallax: true,
  touchEventsTarget: "wrapper",
  slidesPerView: 'auto',
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  }
});

//-- Href to nouvelle --//
const cartePrincipale = document.querySelector(".carte_principale");
const carteActualites = document.querySelectorAll(".carte");

//-- Animation bande 404--
//trouvé sur https://getbutterfly.com/javascript-marquee-a-collection-of-scrolling-text-snippets/
function initializeMarquee() {
  if (document.body.classList.contains("pageDons")) {
    createMarqueeContainer("latest-news");
    rotateMarquee(marqueeContainers);
  } else if (document.body.classList.contains("pageAccueil")) {
    createMarqueeContainer("bandeDons");
    rotateMarquee(marqueeContainers);
  } else {
    //empty on purpose
  }
}

window.onload = initializeMarquee;

function getObjectWidth(obj) {
  if (obj.offsetWidth) return obj.offsetWidth;
  if (obj.clip) return obj.clip.width;
  return 0;
}

const marqueeContainers = [];

function createMarqueeContainer(id) {
  const container = document.getElementById(id);
  const itemWidth =
    getObjectWidth(container.getElementsByTagName("span")[0]) + 10;
  const fullWidth = getObjectWidth(container);
  const textContent = container.getElementsByTagName("span")[0].innerHTML;
  container.innerHTML = "";
  const height = container.style.height;

  container.onmouseout = () => rotateMarquee(marqueeContainers);

  container.onmouseover = () =>
    cancelAnimationFrame(marqueeContainers[0].animationID);

  container.items = [];
  const maxItems = Math.ceil(fullWidth / itemWidth) + 1;

  for (let i = 0; i < maxItems; i++) {
    container.items[i] = document.createElement("div");
    container.items[i].innerHTML = textContent;
    container.items[i].style.position = "absolute";
    container.items[i].style.left = itemWidth * i + "px";
    container.items[i].style.width = itemWidth + "px";
    container.items[i].style.height = height;
    container.appendChild(container.items[i]);
  }

  marqueeContainers.push(container);
}

function rotateMarquee(containers) {
  if (!containers) return;

  for (let j = containers.length - 1; j > -1; j--) {
    const maxItems = containers[j].items.length;

    for (let i = 0; i < maxItems; i++) {
      const itemStyle = containers[j].items[i].style;
      itemStyle.left = parseInt(itemStyle.left, 10) - 1 + "px";
    }

    const firstItemStyle = containers[j].items[0].style;

    if (
      parseInt(firstItemStyle.left, 10) + parseInt(firstItemStyle.width, 10) <
      0
    ) {
      const shiftedItem = containers[j].items.shift();
      shiftedItem.style.left =
        parseInt(shiftedItem.style.left) +
        parseInt(shiftedItem.style.width) * maxItems +
        "px";
      containers[j].items.push(shiftedItem);
    }
  }

  containers[0].animationID = requestAnimationFrame(() =>
    rotateMarquee(containers)
  );
}

//-- GSAP 404--
if (document.body.classList.contains("pageDons")) {
  gsap
  .timeline()
  .from(".bande_devant", { x: "-15000", ease: "power.inOut" })
  .from(".bande_derriere", { x: "15000", ease: "power.inOut" })
  .from(".bande_devant", { rotate: 0 }),
  ">";
}

//Ouvre la page d'une nouvelle
if (document.body.classList.contains("body_liste_nouvelles")) {
  cartePrincipale.addEventListener("click", function() {
    window.open("./page_une_nouvelle.html", "_self");
  });
}

//-- Bouton de bande --//
const closeButton = document.querySelector('.close-btn');
const bandeProjet = document.querySelector('.bande_projet');
const nav = document.querySelector("nav"); // Ensure this exists in your HTML
const bandeLocalStorage = localStorage.getItem("bande");

//-- Enlever la bande --//
if (bandeLocalStorage === 'hidden') {
  bandeProjet.style.display = 'none';
  nav.style.top = '0';
}
closeButton.addEventListener('click', function () {
  bandeProjet.style.display = 'none';
  nav.style.top = '0';
  localStorage.setItem("bande", 'hidden');
});

//-- Modal equipe --//
const modalEquipe = document.querySelector(".modal_equipe");
const membresEquipe = document.querySelectorAll(".membre_equipe.laurence, .membre_equipe.karina, .membre_equipe.elisabeth, .membre_equipe.lynda");

const modalBtnFermer = document.querySelector(".modal_equipe_btn");

function showModal() {
  modalEquipe.style.display = "flex";
}

membresEquipe.forEach(membre => {
  membre.addEventListener("click", () => showModal());
});

function noModal() {
  modalEquipe.style.display = "none";
}

modalBtnFermer.addEventListener("click", () => noModal());

//-- burger --//
//-- https://codepen.io/forrestlonganecker/pen/XWrdXGq --//

  var upper = document.getElementsByClassName('upper')[0];
  var middle = document.getElementsByClassName('middle')[0];
  var lower = document.getElementsByClassName('lower')[0];

  var tl = gsap.timeline({paused: true, reversed: true});

  tl
  .to(upper, {duration: 0.5, attr: {d: "M8,2 L2,8"}, x: 1, ease: "power2.inOut"}, 'start')
  .to(middle, {duration: 0.5, autoAlpha: 0}, 'start')
  .to(lower, {duration: 0.5, attr: {d: "M8,8 L2,2"}, x: 1, ease: "power2.inOut"}, 'start');

  document.querySelector('.hamburger').addEventListener('click', function(){
  tl.reversed() ? tl.play() : tl.reverse();
});

//-- gsap parallax --//

$(document).ready(function() {
  var windowHeight = $(window).height(),
      footerHeight = $('footer').height(),
      heightDocument = windowHeight + $('.content').height() + footerHeight - 20;

  // Set initial heights
  $('#scroll-animate, #scroll-animate-main').css({
      'height': heightDocument + 'px'
  });

  $('header').css({
      'height': windowHeight + 'px',
      'line-height': windowHeight + 'px'
  });

  // Set initial margin for parallax wrapper
  $('.wrapper-parallax').css({
      'margin-top': windowHeight + 'px'
  });

  // Initial footer scroll position
  scrollFooter(window.scrollY, footerHeight);

  // On scroll handler
  $(window).scroll(function() {
      var scroll = window.scrollY;

      // Smooth parallax background effect
      gsap.to('header', {
          backgroundPositionY: 50 - (scroll * 100 / heightDocument) + '%',
          duration: 0.5,
          ease: 'power2.out'
      });

      // Footer animation on scroll
      scrollFooter(scroll, footerHeight);
  });

  // Footer animation function
  function scrollFooter(scrollY, heightFooter) {
      if(scrollY >= heightDocument - windowHeight) {
          gsap.to('footer', {
              bottom: 0,
              duration: 0.5,
              ease: 'power2.out'
          });
      } else {
          gsap.to('footer', {
              bottom: -heightFooter + 'px',
              duration: 0.5,
              ease: 'power2.in'
          });
      }
  }
});

// Parallax footer
gsap.registerPlugin(ScrollTrigger);
gsap.utils.toArray('section').forEach((section, i) => {
    ScrollTrigger.create({
      trigger: section,
      start: "top top",
      pin: true,
      pinSpacing: false
    });
});