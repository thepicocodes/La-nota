/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
const navbarToggler = document.getElementById('navbar-toggler');
const closeNavBtn = document.querySelector('.close');
const nav = document.getElementById('navigation');
const navLinks = document.getElementById('nav-links');
const inputSearch = document.getElementById('input-search');
const inputSearchBar = document.getElementById('search-bar');
const searchToggler = document.getElementById('search-toggler');
const closeSearchBtn = document.getElementById('search-close');
const radioOverlay = document.getElementById('radio-overlay');
const radioOverlayToggle = document.getElementById('radio-overlay-toggler');

//close overlay radio
radioOverlayToggle.onclick = function () {
  radioOverlay.classList.add('hidden');
}

//input search funtion
searchToggler.onclick = function () {
  inputSearch.classList.add('block');
  inputSearch.classList.remove('hidden');
  searchToggler.classList.remove('block');
  searchToggler.classList.add('hidden');
  closeSearchBtn.classList.add('block');
  closeSearchBtn.classList.remove('hidden');
  inputSearchBar.focus();
};

closeSearchBtn.onclick = function () {
  inputSearch.classList.add('hidden');
  inputSearch.classList.remove('block');
  searchToggler.classList.remove('hidden');
  searchToggler.classList.add('block');
  closeSearchBtn.classList.add('hidden');
  closeSearchBtn.classList.remove('block');
};

// open nav function
navbarToggler.onclick = function (e) {
  e.preventDefault();
  nav.classList.add('block');
  nav.classList.remove('hidden');
  navLinks.classList.remove('text-white');
  navLinks.classList.add("text-black");
};
// close nav functin
closeNavBtn.onclick = function (e) {
  e.preventDefault();
  nav.classList.add('hidden');
  nav.classList.remove('block');
  navLinks.classList.remove('text-black');
  navLinks.classList.add("text-white");
};

// lotery swiper
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import { current } from 'tailwindcss/colors';
// init Swiper:
new Swiper("#lotery-swiper", {
  pagination: {
    el: ".custom-swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".custom-swiper-button-next",
    prevEl: ".custom-swiper-button-prev",
  },
});


// tarot swiper
new Swiper("#tarot-swiper", {
  slidesPerView: 3,
  spaceBetween: 50,
  slidesPerGroup: 3,
  pagination: {
    el: ".tarot-swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".tarot-swiper-button-next",
    prevEl: ".tarot-swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      slidesPerGroup: 1,
    },
    640: {
      slidesPerView: 2,
      slidesPerGroup: 2,
    },
    768: {
      slidesPerView: 2,
      slidesPerGroup: 2,
    },
    1024: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
    1440: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
  },
});