// core version + navigation, pagination modules:
import Swiper from "swiper";
import {
  Navigation,
  Pagination,
  Autoplay,
  Thumbs,
  EffectFade,
  Scrollbar,
  Mousewheel,
  Keyboard,
} from "swiper/modules";

// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/scrollbar";

document.addEventListener("DOMContentLoaded", function () {
  // init Swiper:
  const swiperProductos = new Swiper(".swiper-productos", {
    // configure Swiper to use modules
    modules: [
      Navigation,
      Pagination,
      Autoplay,
      Mousewheel,
      Keyboard,
      Scrollbar,
    ],

    // Optional parameters
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    direction: "horizontal",
    allowTouchMove: true,
    spaceBetween: 40,
    loop: true,
    grabCursor: true,
    keyboard: {
      enabled: false,
    },
    mousewheel: false,
    slidesPerView: 1,

    breakpoints: {
      576: {
        slidesPerView: 1,
        spaceBetween: 40,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 2.5,
        spaceBetween: 40,
        centeredSlides: true,
        initialSlide: 1, // Start with center slide
      },
    },

    on: {
      init: function () {
        if (window.innerWidth >= 992) {
          // Only apply for desktop view
          this.slides.forEach((slide) => {
            slide.classList.remove("active");
          });
          const activeSlide = this.slides[this.activeIndex];
          if (activeSlide) {
            activeSlide.classList.add("active");
          }
        }
      },
      slideChange: function () {
        if (window.innerWidth >= 992) {
          // Only apply for desktop view
          this.slides.forEach((slide) => {
            slide.classList.remove("active");
          });
          const activeSlide = this.slides[this.activeIndex];
          if (activeSlide) {
            activeSlide.classList.add("active");
          }
        }
      },
      resize: function () {
        if (window.innerWidth >= 992) {
          // Only apply for desktop view
          this.slides.forEach((slide) => {
            slide.classList.remove("active");
          });
          const activeSlide = this.slides[this.activeIndex];
          if (activeSlide) {
            activeSlide.classList.add("active");
          }
        } else {
          // Remove active class from all slides on mobile
          this.slides.forEach((slide) => {
            slide.classList.remove("active");
          });
        }
      },
    },

    // if we need navigation
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
    },
  });
});
