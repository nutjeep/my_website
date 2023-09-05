AOS.init({
  once: true,
  duration: 1000,
});

const toggle = document.querySelector('.toggle');
const navbar  = document.querySelector('header nav .nav-item');

toggle.addEventListener('click', function(){
  toggle.classList.toggle('hamburger');
  navbar.classList.toggle('slide');
});

// Services - Swiper
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  centeredSlides: false,
  slidesPerGroupSkip: 1,
  grabCursor: true,
  keyboard: {
    enabled: true,
  },
  breakpoints: {
    769: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
  },
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});