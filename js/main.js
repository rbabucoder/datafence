jQuery(document).ready(function ($) {
  const menuBurger = $(".datafence-menu-burger");
  const navMenu = $(".main-navigation__list");

  $(".main-navigation__item.menu-item-has-children > a").append(
    '<i class="fa-solid fa-chevron-down" style="margin-left: 5px;"></i>'
  );

  // Function to toggle sub-menu visibility
  function toggleSubMenu() {
    if ($(window).width() <= 768) {
      $(".menu-item-has-children > .submenu").hide(); // Hide all sub-menus initially
      $(".menu-item-has-children > a")
        .off("click")
        .on("click", function (e) {
          e.preventDefault();
          var $subMenu = $(this).siblings(".submenu");
          toggleSubMenuRecursive($subMenu); // Toggle the clicked submenu and its nested submenus
        });
    } else {
      $(".menu-item-has-children > .submenu").hide(); // Hide all sub-menus if screen width is above 768px
      $(".menu-item-has-children").off("mouseenter mouseleave"); // Remove previous hover event handlers
      $(".menu-item-has-children").hover(
        function () {
          $(this).children(".submenu").stop(true, true).slideDown("slow"); // Slide down the submenu on hover
        },
        function () {
          $(this).children(".submenu").stop(true, true).slideUp("slow"); // Slide up the submenu on mouse leave
        }
      );
    }
  }

  // Function to recursively toggle submenus
  function toggleSubMenuRecursive($subMenu) {
    $subMenu.slideToggle("slow"); // Toggle the submenu with smooth sliding
    $subMenu.find(".submenu").hide(); // Hide all nested submenus
  }

  // Toggle menu on burger icon click
  menuBurger.on("click", function (e) {
    $(this).toggleClass("change");
    navMenu.slideToggle("slow"); // Toggle the navigation menu with smooth sliding
  });

  // Toggle sub-menu visibility on window resize
  $(window).on("resize", function () {
    toggleSubMenu();
  });

  // Initial call to toggleSubMenu function
  toggleSubMenu();
});

jQuery(document).ready(function ($) {
  // Your Slick initialization code here
  $(".portfolio_slider").slick({
    infinite: true,
    autoplay: true,
    speed: 200,
    slidesToShow: 3,
    dots: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".team__member_slider").slick({
    infinite: true,
    autoplay: true,
    speed: 200,
    slidesToShow: 4,
    dots: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".testimonial__slider").slick({
    arrows: true,
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
});



// jQuery(document).ready(function($){
//   const subSubmit = $(".sub-form .sub-form-form form .sub-submit");
//   subSubmit.val(''); // Clear the existing content  
//   subSubmit.append(`<img src="../images/arrow.svg" />`);
// });
