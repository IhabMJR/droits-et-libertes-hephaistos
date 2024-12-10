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

//--- Fetch API nouvelles ---/
const newsCardsDiv = document.querySelector(".news-hub-cards");

const postsApiUrl = '/wordpress_ldl/wp-json/wp/v2/posts';

fetch(postsApiUrl)
  .then((response) => {
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }
    return response.json();
  })
  .then((data) => {
    // Loop through each post and dynamically generate the HTML
    data.forEach(post => {
      // Get post details
      const title = post.title.rendered;
      const permalink = post.link;
      const thumbnailUrl = post.featured_media ? post._embedded['wp:featuredmedia'][0].source_url : '';
      const postDate = post.date; // Date of the post
      const categories = post.categories || []; // Array of category IDs
      const categoryNames = categories.map(catId => {
        // You will need to fetch categories separately if they aren't included in the response
        // Assuming you have the categories available, you could map the IDs to category names
        return catId; // This is just a placeholder
      }).join(', ');

      // Create a new div for each post and populate it with data
      const newsCardDiv = document.createElement('div');
      newsCardDiv.classList.add('news-hub-card');
      newsCardDiv.style.backgroundImage = `url(${thumbnailUrl})`;

      newsCardDiv.innerHTML = `
          <div class="titre">
            <p><span>${categoryNames}</span></p>
            <h3>${title}</h3>
          </div>
          <div class="details">
            <p>${new Date(postDate).toLocaleDateString()}</p>  <!-- Format date -->
          </div>
          <a href="${permalink}">
            <img class="btn-nouvelle" src="/wp-content/themes/your-theme/assets/images/btn.png" />
          </a>
        `;

      // Append the post div to the container
      newsCardsDiv.appendChild(newsCardDiv);
    });
  })
  .catch((error) => {
    console.error('Error:', error);
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
    nextEl: ".button-prev",
    prevEl: ".button-next",
  }
});

//-- Href to nouvelle --//
const cartePrincipale = document.querySelector(".carte_principale");
const carteActualites = document.querySelectorAll(".carte");

//-- Animation bande 404--
//trouvé sur https://getbutterfly.com/javascript-marquee-a-collection-of-scrolling-text-snippets/
function initializeMarquee() {
  if (document.body.classList.contains("error404")) {
    createMarqueeContainer("latest-news");
    rotateMarquee(marqueeContainers);
  } else if (document.body.classList.contains("home")) {
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
  cartePrincipale.addEventListener("click", function () {
    window.open("./page_une_nouvelle.html", "_self");
  });
}

//-- button de bande --
const closeButton = document.querySelector('.close-btn');
const bandeProjet = document.querySelector('.bande_projet');

closeButton.addEventListener('click', function () {
  bandeProjet.style.display = 'none';

  navbar.style.top = '0';
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

if (document.body.classList.contains("page-template-team")) {
  modalBtnFermer.addEventListener("click", () => noModal());
}