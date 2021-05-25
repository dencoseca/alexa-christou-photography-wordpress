const arrow = document.querySelector('.page--arrow');
const title = document.querySelector('.page--title');
const navbar = document.querySelector('.navbar');

// ===================
// STATE CHANGES
// ===================

// ON PAGE LOAD

// Init gsap animations
const animateTitle = gsap.timeline({ paused: true });
const duration = 0.4;
const titleOffsetHeight = jQuery(window).width() < 1200 ? 80 : 150;
const textOffsetHeight = jQuery(window).width() < 1200 ? 100 : 200;
const animationEase = 'power2.inOut';

animateTitle
  .to(
    '.page--arrow',
    duration,
    {
      left: '50%',
      xPercent: -50,
      ease: animationEase,
    },
    0
  )
  .to(
    '.page--title',
    duration,
    {
      right: '50%',
      top: titleOffsetHeight,
      xPercent: 50,
      ease: animationEase,
    },
    0
  )
  .to(
    '.page--text',
    duration,
    {
      marginTop: textOffsetHeight,
      ease: animationEase,
    },
    0
  );

// Fade in elements
jQuery(window).on('load', () => {
  fadeInHero();
  fadeInFrontPageNav();
});

// ON SCROLL
jQuery(window).on('scroll', () => {
  changeNavbarColor();
  if (jQuery(window).scrollTop() > jQuery(window).innerHeight() * 0.25) {
    animateTitle.play();
  } else {
    animateTitle.reverse();
  }
});

// HIDE NAV ON SCROLL DOWN, REVEAL ON SCROLL UP
if (jQuery('.smart-scroll').length > 0) {
  // check if element exists
  let last_scroll_top = 0;
  jQuery(window).on('scroll', function () {
    scroll_top = jQuery(this).scrollTop();
    if (jQuery(window).scrollTop() < jQuery(window).innerHeight() * 0.1) {
      jQuery('.smart-scroll')
        .removeClass('scrolled-down')
        .addClass('scrolled-up');
    } else if (scroll_top < last_scroll_top) {
      jQuery('.smart-scroll')
        .removeClass('scrolled-down')
        .addClass('scrolled-up');
    } else {
      jQuery('.smart-scroll')
        .removeClass('scrolled-up')
        .addClass('scrolled-down');
    }
    last_scroll_top = scroll_top;
  });
}

// CLICKABLE ARROW THAT SCROLLS TO SECTION TITLE
jQuery('.page--arrow').on('click', () => {
  // from ./smooth-scrolling-polyfil.js
  scrollToElem('.page--title-wrapper');
});

// HIDE/SHOW FULL PAGE MENU
jQuery('.full-page-menu-toggler').on('click', () => {
  toggleFullPageMenu();
});

jQuery('.full-page--link').on('click', () => {
  toggleFullPageMenu();
});

// ===================
// FUNCTIONS
// ===================

function fadeInHero() {
  gsap.to('.fade-in', 1, { opacity: 1 });
}

function fadeInFrontPageNav() {
  gsap.to('.front-page--brand', 1, { opacity: 1 }).delay(0.6);
  gsap.to('.front-page--link', 1, { opacity: 1 }).delay(1.4);
}

function changeNavbarColor() {
  if (jQuery(window).scrollTop() > jQuery(window).innerHeight()) {
    jQuery('.navbar').addClass('opaque');
  } else {
    jQuery('.navbar').removeClass('opaque');
  }
}

function toggleFullPageMenu() {
  jQuery('.full-page-menu-toggler')
    .toggleClass('fa-bars')
    .toggleClass('fa-times');
  jQuery('.full-page--wrapper').toggleClass('closed');
  jQuery('body').toggleClass('fixed-position');
}
