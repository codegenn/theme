/*-----------------------------------------------------------------------------------*/
/* 		Mian Js Start 
/*-----------------------------------------------------------------------------------*/
$(document).ready(function ($) {
  "use strict";
  /*-----------------------------------------------------------------------------------*/
  /* 	LOADER
/*-----------------------------------------------------------------------------------*/
  $("#loader").delay(500).fadeOut("slow");
  /*-----------------------------------------------------------------------------------
    Animated progress bars
/*-----------------------------------------------------------------------------------*/
  $(".progress-bars").waypoint(
    function () {
      $(".progress").each(function () {
        $(this)
          .find(".progress-bar")
          .animate(
            {
              width: $(this).attr("data-percent"),
            },
            500
          );
      });
    },
    {
      offset: "100%",
      triggerOnce: true,
    }
  );
  /*-----------------------------------------------------------------------------------*/
  /* 	ANIMATION
/*-----------------------------------------------------------------------------------*/
  var wow = new WOW({
    boxClass: "anima", // animated element css class (default is wow)
    animateClass: "animated", // animation css class (default is animated)
    offset: 100, // distance to the element when triggering the animation (default is 0)
    mobile: false, // trigger animations on mobile devices (true is default)
  });
  wow.init();
  /*-----------------------------------------------------------------------------------*/
  /*  SLIDER REVOLUTION
/*-----------------------------------------------------------------------------------*/
  jQuery(".tp-banner")
    .show()
    .revolution({
      dottedOverlay: "none",
      delay: 10000,
      startwidth: 1170,
      startheight: 700,
      navigationType: "bullet",
      navigationArrows: "solo",
      navigationStyle: "preview4",
      parallax: "mouse",
      parallaxBgFreeze: "on",
      parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
      keyboardNavigation: "on",
      shadow: 0,
      fullWidth: "on",
      fullScreen: "on",
      shuffle: "off",
      autoHeight: "off",
      forceFullWidth: "off",
      fullScreenOffsetContainer: "",
    });
  /*-----------------------------------------------------------------------------------*/
  /* 	SINGLE SLIDE
/*-----------------------------------------------------------------------------------*/
  $(".single-slides").owlCarousel({
    items: 1,
    autoplay: false,
    singleItem: true,
    navText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>",
    ],
    lazyLoad: true,
    nav: true,
    loop: true,
    animateOut: "fadeOut",
  });
  /*-----------------------------------------------------------------------------------*/
  /*	CUBE PORTFOLIO
/*-----------------------------------------------------------------------------------*/
  $("#js-grid-awesome-work").cubeportfolio({
    filters: "#js-filters-awesome-work",
    loadMore: "#js-loadMore-awesome-work",
    loadMoreAction: "click",
    layoutMode: "grid",
    defaultFilter: "*",
    animationType: "quicksand",
    gapHorizontal: 0,
    gapVertical: 0,
    gridAdjustment: "responsive",
    caption: "zoom",
    displayType: "lazyLoading",
    displayTypeSpeed: 400,

    // singlePage popup
    singlePageDelegate: ".cbp-singlePage",
    singlePageDeeplinking: true,
    singlePageStickyNavigation: true,
    singlePageCounter:
      '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
    singlePageCallback: function (url, element) {
      // to update singlePage content use the following method: this.updateSinglePage(yourContent)
      var t = this;

      $.ajax({
        url: url,
        type: "GET",
        dataType: "html",
        timeout: 10000,
      })
        .done(function (result) {
          t.updateSinglePage(result);
        })
        .fail(function () {
          t.updateSinglePage("AJAX Error! Please refresh the page!");
        });
    },
  });
  /*-----------------------------------------------------------------------------------*/
  /*	LEFT MENU
/*-----------------------------------------------------------------------------------*/
  var $lateral_menu_trigger = $("#cd-menu-trigger"),
    $content_wrapper = $(".cd-main-content"),
    $navigation = $("header");

  //open-close lateral menu clicking on the menu icon
  $lateral_menu_trigger.on("click", function (event) {
    event.preventDefault();

    $lateral_menu_trigger.toggleClass("is-clicked");
    $navigation.toggleClass("lateral-menu-is-open");
    $content_wrapper
      .toggleClass("lateral-menu-is-open")
      .one(
        "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
        function () {
          // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
          $("body").toggleClass("overflow-hidden");
        }
      );
    $("#cd-lateral-nav").toggleClass("lateral-menu-is-open");

    //check if transitions are not supported - i.e. in IE9
    if ($("html").hasClass("no-csstransitions")) {
      $("body").toggleClass("overflow-hidden");
    }
  });

  //close lateral menu clicking outside the menu itself
  $content_wrapper.on("click", function (event) {
    if (!$(event.target).is("#cd-menu-trigger, #cd-menu-trigger span")) {
      $lateral_menu_trigger.removeClass("is-clicked");
      $navigation.removeClass("lateral-menu-is-open");
      $content_wrapper
        .removeClass("lateral-menu-is-open")
        .one(
          "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
          function () {
            $("body").removeClass("overflow-hidden");
          }
        );
      $("#cd-lateral-nav").removeClass("lateral-menu-is-open");
      //check if transitions are not supported
      if ($("html").hasClass("no-csstransitions")) {
        $("body").removeClass("overflow-hidden");
      }
    }
  });
  //open (or close) submenu items in the lateral menu. Close all the other open submenu items.
  $(".item-has-children")
    .children("a")
    .on("click", function (event) {
      event.preventDefault();
      $(this)
        .toggleClass("submenu-open")
        .next(".sub-menu")
        .slideToggle(200)
        .end()
        .parent(".item-has-children")
        .siblings(".item-has-children")
        .children("a")
        .removeClass("submenu-open")
        .next(".sub-menu")
        .slideUp(200);
    });
});
/*-----------------------------------------------------------------------------------*/
/*    CONTACT FORM
/*-----------------------------------------------------------------------------------*/
function checkmail(input) {
  var pattern1 = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  if (pattern1.test(input)) {
    return true;
  } else {
    return false;
  }
}
function proceed() {
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var msg = document.getElementById("message");
  var errors = "";
  if (name.value == "") {
    name.className = "error";
    return false;
  } else if (email.value == "") {
    email.className = "error";
    return false;
  } else if (checkmail(email.value) == false) {
    alert("Please provide a valid email address.");
    return false;
  } else if (msg.value == "") {
    msg.className = "error";
    return false;
  } else {
    $.ajax({
      type: "POST",
      url: "php/submit.php",
      data: $("#contact_form").serialize(),
      success: function (msg) {
        //alert(msg);
        if (msg) {
          $("#contact_form").fadeOut(1000);
          $("#contact_message").fadeIn(1000);
          document.getElementById("contact_message");
          return true;
        }
      },
    });
  }
}

/*=======================================================
      BEFORE AFTER
========================================================*/

// $("#slider").on("input change", (e) => {
//   const sliderPos = e.target.value;
//   // Update the width of the foreground image
//   $(".foreground-img").css("width", `${sliderPos}%`);
//   // Update the position of the slider button
//   $(".slider-button").css("left", `calc(${sliderPos}% - 18px)`);
// });

(function ($) {
  $.fn.hanBeforeAfterSlider = function (c) {
    //console.log(c);
    var point = parseInt(c.width) / 2;
    $(this).css({
      width: c.width,
      height: c.height,
    });

    var i1 = document.createElement("img");
    var i2 = document.createElement("div");

    $(i1).attr("src", c.firstImage);
    $(i1).css({
      height: c.height,
      position: "absolute",
    });

    $(i2).css({
      "background-image": "url(" + c.secondImage + ")",
      "background-size": "cover",
      width: c.start,
      height: c.height,
      position: "absolute",
      "background-repeat": "no-repeat",
      "border-right": "1px solid gray",
    });

    var offset = $(i2).offset();
    $(this).mousemove(function (event) {
      offset = $(i2).offset();
      $(i2).css("width", event.pageX - offset.left);
    });

    $(this).append(i1);
    $(this).append(i2);
  };
})(jQuery);

!(function (e) {
  e.fn.hanBeforeAfterSlider = function (t) {
    parseInt(t.width) / 2;
    e(this).css({ width: t.width, height: t.height });
    var i = document.createElement("img"),
      s = document.createElement("div");
    e(i).attr("src", t.firstImage),
      e(i).css({ height: t.height, position: "absolute" }),
      e(s).css({
        "background-image": "url(" + t.secondImage + ")",
        "background-size": "cover",
        width: t.start,
        height: t.height,
        position: "absolute",
        "background-repeat": "no-repeat",
        "border-right": "1px solid gray",
      });
    var o = e(s).offset();
    e(this).mousemove(function (t) {
      (o = e(s).offset()), e(s).css("width", t.pageX - o.left);
    }),
      e(this).append(i),
      e(this).append(s);
  };
})(jQuery);

$(document).ready(function () {
  $.getJSON(
    "http://localhost/wp-content/themes/theme/home-page/assets/js/service_detail_1.json",
    function (data) {
      data.data.forEach((item, index) => {
        var config = {
          width: "100%",
          height: "100%",
          start: "25%",
          firstImage: item.imgBefore,
          secondImage: item.imgAfter,
        };
        $(document).ready(function () {
          $(`#slider${index}`).hanBeforeAfterSlider(config);
        });
      });
      console.log(data);
    }
  ).fail(function () {
    console.log("An error has occurred.");
  });
});
