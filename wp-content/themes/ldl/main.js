//--- Navbar scroll ---
const navbar = document.querySelector(".navbar");
if (document.body.classList.contains("post-template-news-article") || document.body.classList.contains("page-template-contact-us") || document.body.classList.contains("lutte-template")) {
  navbar.classList.add("navbar-scrolled");
} else {
  window.addEventListener("scroll", () => {
    if (window.scrollY >= 56) {
      navbar.classList.add("navbar-scrolled");
    } else if (window.scrollY < 56) {
      navbar.classList.remove("navbar-scrolled");
    }
  });
}

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
const postsApiUrl = '/wp-json/wp/v2/posts?per_page=20';
const categoriesApiUrl = '/wp-json/wp/v2/categories';

let categoriesMap = {};
let allPosts = [];
let visiblePostsCount = 4; // Number of posts to show initially
let currentOrder = 'asc'; // Default order is ascending

// Buttons for ordering
const orderAscButton = document.getElementById("order-asc");
const orderDescButton = document.getElementById("order-desc");

// Fetch categories first to have a map of category IDs to category names
fetch(categoriesApiUrl)
  .then((response) => {
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }
    return response.json();
  })
  .then((categories) => {
    // Create a map of category IDs to category names
    categories.forEach(category => {
      categoriesMap[category.id] = category.name;
    });

    // Now fetch posts
    fetchPosts(currentOrder);
  })
  .catch((error) => {
    console.error('Error:', error);
  });

// Function to fetch and display posts based on order
function fetchPosts(order) {
  // Modify the posts API URL to include order parameters and the `_embed` parameter
  const apiUrl = `${postsApiUrl}&orderby=date&order=${order}&_embed`;  // Add '_embed' here

  fetch(apiUrl)
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      allPosts = data;

      // Initially display the first set of posts
      displayPosts(visiblePostsCount);

      // Create a "Show More" button if there are more posts to load
      const showMoreButton = document.querySelector('.link_nouvelles');
      if (allPosts.length > visiblePostsCount && document.body.classList.contains("page-template-news-hub")) {
        showMoreButton.style.display = 'block';
        showMoreButton.addEventListener('click', () => {
          visiblePostsCount += 6; // Load 6 more posts
          displayPosts(visiblePostsCount);

          // Hide the button if all posts are shown
          if (visiblePostsCount >= allPosts.length) {
            showMoreButton.style.display = 'none';
          }
        });
      }
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}

// Function to display posts
function displayPosts(numberOfPosts) {
  // Clear existing posts before rendering
  if (document.body.classList.contains("page-template-news-hub")) {
    newsCardsDiv.innerHTML = '';
  }

  // Loop through each post and dynamically generate the HTML
  allPosts.slice(0, numberOfPosts).forEach(post => {
    // Get post details
    const title = post.title.rendered;
    const permalink = post.link;
    let thumbnailUrl = ''; // Placeholder for thumbnail URL
    const postDate = post.date; // Date of the post
    const categories = post.categories || []; // Array of category IDs

    // Check if featured media exists and get the image URL
    if (post._embedded && post._embedded['wp:featuredmedia']) {
      const featuredMedia = post._embedded['wp:featuredmedia'][0];
      thumbnailUrl = featuredMedia.source_url; // Get the URL of the featured image
    }

    // Get category names from categoriesMap
    const categoryNames = categories
      .map(catId => categoriesMap[catId] || '') // Map category IDs to names, using empty string if not found
      .filter(name => name) // Remove empty strings if category name is not found
      .join(', ');

    // Create a new div for each post and populate it with data
    const newsCardDiv = document.createElement('div');
    newsCardDiv.classList.add('news-hub-card');
    if (thumbnailUrl) {
      newsCardDiv.style.backgroundImage = `url(${thumbnailUrl})`;
    }

    newsCardDiv.addEventListener("click", function () { window.location.href = permalink });

    newsCardDiv.innerHTML = `
      <div class="titre">
        <p><span>${categoryNames}</span></p>
        <h3>${title}</h3>
      </div>
      <div class="details">
        <p>${new Date(postDate).toLocaleDateString()}</p>  <!-- Format date -->
      </div>
      <a href="${permalink}">
        <img class="btn-nouvelle"/>
      </a>
    `;

    // Append the post div to the container
    if (document.body.classList.contains("page-template-news-hub")) {
      newsCardsDiv.appendChild(newsCardDiv);
    }
  });
}

// Event listeners for order buttons
if (document.body.classList.contains("page-template-news-hub")) {
  orderAscButton.addEventListener('click', () => {
    currentOrder = 'asc';
    fetchPosts(currentOrder);
  });
}

if (document.body.classList.contains("page-template-news-hub")) {
  orderDescButton.addEventListener('click', () => {
    currentOrder = 'desc';
    fetchPosts(currentOrder);
  });
}

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
  } else if (document.body.classList.contains("post-template-news-article")) {
    createMarqueeContainer("prochainArticle");
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
if (document.body.classList.contains("error404")) {
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
const membresEquipe = document.querySelectorAll(".membre_equipe");
const modalBtnFermer = document.querySelector(".modal_equipe_btn");

function showModal(membre) {
  if (modalEquipe) {
    const title = membre.dataset.memberTitle || "Titre par défaut";
    const description = membre.dataset.memberDescription || "Description par défaut";

    document.querySelector('.modal_equipe_fond_titre').textContent = title;
    document.querySelector('.modal_equipe_fond_texte').textContent = description;

    modalEquipe.style.display = "flex";
  }
}

membresEquipe.forEach(membre => {
  membre.addEventListener("click", () => showModal(membre));
});

function noModal() {
  if (modalEquipe) {
    modalEquipe.style.display = "none";
  }
}

modalBtnFermer.addEventListener("click", () => noModal());
