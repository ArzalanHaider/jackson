

// Get Quote Form validation

// (function () {
//   'use strict';
//   var forms = document.querySelectorAll('.needs-validation');
//   // Loop over them and prevent submission
//   Array.prototype.slice.call(forms).forEach(function (form) {
//     form.addEventListener('submit', function (event) {
//       if (!form.checkValidity()) {
//         event.preventDefault();
//         event.stopPropagation();
//       }

//       form.classList.add('was-validated');
//     }, false);
//   });
// })();


// $(document).ready(function () {
//   $('.navdesktop').hover(
//     function () {
//       $(this).addClass('show');
//       $(this).find('.dropdown-navdesktop').first().addClass('show');
//     },
//     function () {
//       $(this).removeClass('show');
//       $(this).find('.dropdown-navdesktop').first().removeClass('show');
//     }
//   );
// });

// Sticky header

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
})



// const HeroSwiper = new Swiper('.hero-swiper-main', {
//   loop: true,
//   slidesPerView: "auto",
//   spaceBetween: 0,
//   centeredSlides: true,

//   autoplay: {
//     delay: 3000, // Delay between transitions in milliseconds
//     disableOnInteraction: false, // Keeps autoplay running even after user interaction
//   },



// });
// // end Sticky header



// document.addEventListener('DOMContentLoaded', function () {
//   const offcanvas = document.getElementById('offcanvasNavbar');
//   const navLinks = document.querySelectorAll('.offcanvas-body .nav-link');

//   $(".navbar-toggler").click(function () {
//     $("body").toggleClass("active");
//   });

//   navLinks.forEach(link => {
//     link.addEventListener('click', function (e) {
//       e.preventDefault(); // Prevent immediate jump to the section

//       // Remove the 'show' class from the offcanvas
//       const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
//       bsOffcanvas.hide();

//       // Wait for the offcanvas to close, then scroll to the section
//       setTimeout(() => {
//         const targetSection = document.querySelector(this.getAttribute('href'));
//         if (targetSection) {
//           targetSection.scrollIntoView({ behavior: 'smooth' });
//         }
//       }, 300); // Adjust the delay as necessary (300ms is typical for Bootstrap offcanvas close animation)
//     });
//   });
// });


// Function to add 'active' class based on scroll position
// function updateActiveLink() {
//   const sections = document.querySelectorAll("section");
//   const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

//   let currentSectionId = "";

//   sections.forEach(section => {
//     const sectionTop = section.offsetTop;
//     const sectionHeight = section.offsetHeight;

//     if (window.scrollY >= sectionTop - sectionHeight / 3) {
//       currentSectionId = section.getAttribute("id");
//     }
//   });

//   navLinks.forEach(link => {
//     link.classList.remove("active");
//     if (link.getAttribute("href").substring(1) === currentSectionId) {
//       link.classList.add("active");
//     }
//   });
// }

// // Smooth scrolling with offset on link click
// document.querySelectorAll(".navbar-nav .nav-link").forEach(link => {
//   link.addEventListener("click", function (event) {
//     event.preventDefault(); // Prevent default anchor click behavior

//     // Get the target section based on href attribute
//     const targetId = this.getAttribute("href").substring(1); // Remove '#' from href
//     const targetSection = document.getElementById(targetId);

//     // Scroll to the section with a 50px offset
//     const offset = 50; // Adjust this value for the desired offset
//     const sectionTop = targetSection.offsetTop;

//     window.scrollTo({
//       top: sectionTop - offset,
//       behavior: "smooth" // Smooth scroll
//     });
//   });
// });

// // Update active class on scroll
// window.addEventListener("scroll", updateActiveLink);

// new Swiper('.testi-first-slider', {
//   loop: true,
//   autoplay: {
//     delay: 0,
//     disableOnInteraction: false,
//   },
//   speed: 10000, // Adjust speed here
//   slidesPerView: "auto",
//   spaceBetween: 20,
// });

// // Second slider (right to left)
// new Swiper('.testi-second-slider', {
//   loop: true,
//   autoplay: {
//     delay: 0,
//     disableOnInteraction: false,
//     reverseDirection: true, // Reverse the direction
//   },
//   speed: 10000, // Adjust speed here
//   slidesPerView: "auto",
//   spaceBetween: 20,
// });


var swiper = new Swiper(".portfolio-slider", {
  slidesPerView: '3',
  spaceBetween: 0,
  centeredSlides: true, // Center the active slide
  loop: true, // Enable looping
  navigation: {
    nextEl: ".swiper-button-next.portfolio-next-btn",
    prevEl: ".swiper-button-prev.portfolio-prev-btn",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true, // Allow pagination bullets to be clickable
  }, autoplay:false}, {
    delay: 3000, // Time between slides in milliseconds
  },
);
// end Sticky header

