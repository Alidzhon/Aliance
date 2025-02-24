const navbar = document.querySelector('.navbar');
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
    navbar.classList.add('navbar-light');
    logo.style.display = "block";
    logoLight.style.display = "none";
}

const lightModeOff = (event) => {
    navbar.classList.remove('navbar-light');
    logo.style.display = "none";
    logoLight.style.display = "block";  
}

const openMenu = (event) => {
      menu.classList.add("is-open");
      mMenuToggle.classList.add("close-menu");
      document.body.style.overflow = "hidden"; 
      lightModeOn();
}

const closeMenu = (event) => {
    menu.classList.remove("is-open");
    mMenuToggle.classList.remove("close-menu");
    document.body.style.overflow = ""; 
    lightModeOff();
}

window.addEventListener('scroll', () => {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

mMenuToggle.addEventListener("click", (event) => {
         event.preventDefault();
    menu.classList.contains("is-open") ? closeMenu() : openMenu(); 
});

const swiperSteps = new Swiper(".steps-slider", {
      speed: 400,
      slidesPerView: 1,
      navigation: {
        nextEL: '.steps-button-next',
        prevEL: '.steps-button-prev',
    },
    //   loop: true
    breakpoints: {
        // when window width is >= 320px
        576: {
          slidesPerView: 2,
        //   centeredSlides: true,
        //   slidesOffsetBefore: -100,
        },
        // when window width is >= 480px
        768: {
          slidesPerView: 3,
        },
        // when window width is >= 640px
        1024: {
          slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
        },
    },
});

const swiper = new Swiper('.features-slider', {
    speed: 400,
    // autoHeight: true,
    slidesPerView: 1,
    navigation: {
        nextEL: '.slider-button-next',
        prevEL: '.slider-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        576: {
          slidesPerView: 2,
        //   centeredSlides: true,
        //   slidesOffsetBefore: -100,
        },
        // when window width is >= 480px
        768: {
          slidesPerView: 3,
        },
        // when window width is >= 640px
        1024: {
          slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
        },
    },
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEL: '.blog-button-next',
    prevEL: '.blog-button-prev',
},
breakpoints: {
  // when window width is >= 320px
  576: {
    slidesPerView: 1,
  //   centeredSlides: true,
  //   slidesOffsetBefore: -100,
  },
  // when window width is >= 480px
  768: {
    slidesPerView: 1,
  },
  // when window width is >= 640px
  1024: {
    slidesPerView: 2,
  },
  1200: {
      slidesPerView: 2,
  },
},
  
});

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
       if (event.target.dataset.toggle == "modal" || 
           event.target.parentNode.dataset.toggle == "modal" ||
           (!event.composedPath().includes(modalDialog) &&
             modal.classList.contains("is-open"))
          ) {
              event.preventDefault();
              modal.classList.toggle("is-open");
          }  
});

document.addEventListener("keyup", (event) => {
        if (event.key == "Escape" && modal.classList.contains("is-open")) {
            modal.classList.toggle("is-open");
        }
});

// const modalToggle = document.querySelectorAll("[data-toggle=modal]");
// const modalClose = document.querySelector(".modal-close");

// modalToggle.forEach((element) => {
//        element.addEventListener("click", (event) =>  {
//              event.preventDefault();
//              modal.classList.add("is-open");
//        });
// });

// modalClose.addEventListener("click", (event) => {
//           event.preventDefault();
//           modal.classList.remove("is-open");
// });

// modal.addEventListener("click", (event) => {
//       const target = event.target;
//       target.classList.remove("is-open");
// });

// document.addEventListener("keydown", (event) => {
//        if (event.keyCode == 27) {
//         modal.classList.remove("is-open");
// }});



// const swiper2 = new Swiper('.swiper2', {
//     speed: 400,
//     // autoHeight: true,
//     slidesPerView: 1,
//     navigation: {
//         nextEL: '.slider-button-next',
//         prevEL: '.slider-button-prev',
//     },
//     breakpoints: {
//         // when window width is >= 320px
//         576: {
//           slidesPerView: 2,
//         //   centeredSlides: true,
//         //   slidesOffsetBefore: -100,
//         },
//         // when window width is >= 480px
//         768: {
//           slidesPerView: 3,
//         },
//         // when window width is >= 640px
//         1024: {
//           slidesPerView: 4,
//         },
//         1200: {
//             slidesPerView: 5,
//         },
//     },
// });