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

//--- Swiper actualites ---/
const swiperActualites = new Swiper(".scroll", {
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
  slidesPerView: 2.5,
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
  },
});

//-- Href to nouvelle --//
const cartePrincipale = document.querySelector(".carte_principale");
const carteActualites = document.querySelectorAll(".carte");

/*cartePrincipale.addEventListener("click", () => {
  window.open("./page_une_nouvelle.html", "_self")
});*/

//-- Animation bande 404--
//trouvé sur https://getbutterfly.com/javascript-marquee-a-collection-of-scrolling-text-snippets/
function initializeMarquee() {
  if (document.body.classList.contains('pageDons')) {
    createMarqueeContainer("latest-news");
  }
  else if (document.body.classList.contains('pageAccueil')) {
    createMarqueeContainer("bandeDons");
  }
  rotateMarquee(marqueeContainers);
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
gsap
  .timeline()
  .from(".bande_devant", { x: "-15000", ease: "power.inOut" })
  .from(".bande_derriere", { x: "15000", ease: "power.inOut" })
  .from(".bande_devant", { rotate: 0 }),
  ">";
