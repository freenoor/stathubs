 var Menu = {
    el: {
    ham: jQuery('.menu-m'),
    menuTop: jQuery('.menu-top'),
    menuMiddle: jQuery('.menu-middle'),
    menuBottom: jQuery('.menu-bottom')
    },
    init: function() {
    Menu.bindUIactions();
    },
    bindUIactions: function() {
    Menu.el.ham
    .on(
    'click',
    function(event) {
    Menu.activateMenu(event);
    event.preventDefault();
    }
    );
    },
    activateMenu: function() {
    Menu.el.menuTop.toggleClass('menu-top-click');
    Menu.el.menuMiddle.toggleClass('menu-middle-click');
    Menu.el.menuBottom.toggleClass('menu-bottom-click'); 
    }
    };
Menu.init();

// JavaScript
// JavaScript
function closeNavbar() {
  $(".navbar-toggler").attr("aria-expanded", "false");
  $(".navbar-collapse").removeClass("show");
  $(".menu-top").removeClass("menu-top-click");
  $(".menu-middle").removeClass("menu-middle-click");
  $(".menu-bottom").removeClass("menu-bottom-click");
  $("body").removeClass("body-no-scroll");
  $(".pageall").removeClass("active"); // Remove "active" class when navbar is closed
}

$(".frontpage-header .navbar-collapse li a").on("click", function() {
  closeNavbar();
});

$("body").on("click", function(event) {
  const navbarToggler = $(".navbar-toggler");
  const isExpanded = navbarToggler.attr("aria-expanded") === "true";
  if (isExpanded && !$(event.target).closest(".navbar").length) {
    closeNavbar();
  }
});

$(".navbar-toggler").on("click", function() {
  const isExpanded = $(this).attr("aria-expanded") === "true";
  if (isExpanded) {
    $("body").addClass("body-no-scroll");
    $(".pageall").addClass("active"); // Add "active" class when navbar is shown
  } else {
    $("body").removeClass("body-no-scroll");
    $(".pageall").removeClass("active"); // Remove "active" class when navbar is closed
  }
});



var swiper = new Swiper(".slider__section", {
  slidesPerView: 1.2,
  spaceBetween: 16,
  loop: true,
  autoplay: {
    delay: 4500,
  },
});

var swiper = new Swiper(".slider__section-three", {
  slidesPerView: 1.4,
  spaceBetween: 16,
  autoHeight: true,
  autoplay: {
    delay: 4000,
  },
  loop: true,
  breakpoints: {
    991.98: {
      slidesPerView: 3,
      spaceBetween: 24,
      loop: false,
    },
  },
});

var swiper = new Swiper(".anbindung-slider", {
      slidesPerView: 1.05,
      spaceBetween: 12,
      loop: true,
      autoplay: {
        delay: 5000,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        991.98: {
          slidesPerView: 1.5,
          spaceBetween: 12,
        },
        1024: {
          slidesPerView: 2.5,
          spaceBetween: 24,
        },
      },
    });

    $(document).ready(function() {
      // Smooth scrolling to the target section when any link with the smooth-scroll-link class is clicked
      $(".menu-item a").on("click", function(event) {
        // Find the target element by ID
        const targetID = $(this).attr("href");
        const targetElement = document.querySelector(targetID);
    
        // Scroll to the target section smoothly
        if (targetElement) {
          targetElement.scrollIntoView({
            behavior: "smooth"
          });
          event.preventDefault(); // Prevent the default link behavior (changing the URL)
        }
      });
    });  