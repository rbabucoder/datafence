jQuery(document).ready(function ($) {

  const datafenceMediumItems = $(".datafence-medium-blogs .rss_header").siblings("ul");
  console.log(datafenceMediumItems);

  datafenceMediumItems.addClass("datafence-medium-blogs-slider");

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

  $(".common-course-slider, .course_card_2").slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
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

  $(".real-people-slider, .datafence-medium-blogs-slider").slick({
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: true,
    speed: 200,
    slidesToShow: 3,
    slidesToScroll: 3,
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

  $(
    ".discover-courses .slick-prev, .masterclass-grid .slick-prev, .course-post-cards .slick-prev"
  ).append('<i class="fa-solid fa-chevron-down"></i>');
  $(
    ".discover-courses .slick-next, .masterclass-grid .slick-next, .course-post-cards .slick-next"
  ).append('<i class="fa-solid fa-chevron-down"></i>');
});

// jQuery(document).ready(function ($) {
//   const playButton = $(".custom-play-button");
//   playButton.append(
//     '<div class="circle-ripple-small custom-play-icon""><i class="fa-solid fa-play"></i></div>'
//   );
// });

jQuery(document).ready(function ($) {
  $(".datafence-common-popup").on("click", function () {
    $(".footer-popup-overlay").css("display", "block");
  });

  $(".datafence-close-mark").on("click", function () {
    $(".footer-popup-overlay").css("display", "none");
  });
});

jQuery(document).ready(function ($) {
  $(".common-course-popup").on("click", function () {
    $(".course-popup-overlay").css("display", "block");
  });

  $(".datafence-close-mark").on("click", function () {
    $(".course-popup-overlay").css("display", "none");
  });
});

// script.js
jQuery(document).ready(function ($) {
  const tabs = $(".we-serve-btn");
  const contents = $(".we-serve-image-content");

  tabs.click(function (e) {
    e.preventDefault();
    const tabId = $(this).attr("id");
    const contentId = tabId.replace("-button", "-content");

    tabs.removeClass("active");
    $(this).addClass("active");

    contents.removeClass("active");
    $("#" + contentId).addClass("active");
  });

  // Show the first tab and content by default
  tabs.first().addClass("active");
  contents.first().addClass("active");
});

jQuery(document).ready(function ($) {
  const changeLogoElement = $(
    ".page-course-landing-page .header .header__branding img"
  );
  changeLogoElement.attr("src", ""); // First empty the src attribute
  changeLogoElement.attr(
    "src",
    "https://datafence.com/wp-content/themes/datafence/images/datafence-logo.svg"
  ); // Then set the new src attribute
});
