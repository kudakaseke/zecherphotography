const yearEl = document.getElementById("year");
if (yearEl) {
  yearEl.textContent = new Date().getFullYear();
}

const topButton = document.getElementById("toTop");
if (topButton) {
  topButton.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

const heroSlides = document.querySelectorAll(".hero-slide");
let heroIndex = 0;
if (heroSlides.length > 1) {
  setInterval(() => {
    heroSlides[heroIndex].classList.remove("active");
    heroIndex = (heroIndex + 1) % heroSlides.length;
    heroSlides[heroIndex].classList.add("active");
  }, 5000);
}

const testimonialTrack = document.getElementById("testimonialTrack");
const dots = document.querySelectorAll(".dot");
let testimonialIndex = 0;

function showTestimonial(index) {
  if (!testimonialTrack) return;
  testimonialIndex = index;
  testimonialTrack.style.transform = `translateX(-${index * 100}%)`;
  dots.forEach((dot, i) => {
    dot.classList.toggle("active", i === index);
  });
}

dots.forEach((dot) => {
  dot.addEventListener("click", () => {
    showTestimonial(Number(dot.dataset.index));
  });
});

if (dots.length > 1) {
  setInterval(() => {
    const next = (testimonialIndex + 1) % dots.length;
    showTestimonial(next);
  }, 5500);
}

const galleryTriggers = document.querySelectorAll(".gallery-trigger");
const morePortfolio = document.getElementById("morePortfolio");

function revealMorePortfolio() {
  if (!morePortfolio) return;
  morePortfolio.classList.add("show");
  morePortfolio.scrollIntoView({ behavior: "smooth", block: "start" });
}

galleryTriggers.forEach((item) => {
  item.addEventListener("click", revealMorePortfolio);
  item.addEventListener("keydown", (event) => {
    if (event.key === "Enter" || event.key === " ") {
      event.preventDefault();
      revealMorePortfolio();
    }
  });
});

const portfolioFilters = document.querySelectorAll(".portfolio-filter");

portfolioFilters.forEach((filter) => {
  filter.addEventListener("change", () => {
    const selected = filter.value;
    const container = filter.closest(".container");
    if (!container) return;

    const items = container.querySelectorAll(".gallery-item[data-category]");
    items.forEach((item) => {
      const category = item.dataset.category;
      const show = selected === "all" || selected === category;
      item.classList.toggle("is-hidden", !show);
    });

    const hiddenGallery = container.querySelector(".hidden-gallery");
    if (hiddenGallery) {
      if (selected === "all") {
        hiddenGallery.classList.remove("show");
      } else {
        hiddenGallery.classList.add("show");
      }
    }
  });
});

const params = new URLSearchParams(window.location.search);
const initialCategory = params.get("category");
if (initialCategory) {
  portfolioFilters.forEach((filter) => {
    const optionExists = Array.from(filter.options).some((opt) => opt.value === initialCategory);
    if (optionExists) {
      filter.value = initialCategory;
      filter.dispatchEvent(new Event("change"));
    }
  });
}

const homePortfolio = document.querySelector("#portfolio");
if (homePortfolio) {
  const homeImages = homePortfolio.querySelectorAll(".gallery-item img");
  homeImages.forEach((img) => {
    img.addEventListener("error", () => {
      const card = img.closest(".gallery-item");
      if (card) card.remove();
    });
  });
}
