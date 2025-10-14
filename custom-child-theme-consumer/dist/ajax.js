"function" == typeof jQuery &&
  jQuery(document).ready(function (t) {
    t("body").on("post-load", function () {
      window.a2a && a2a.init_all();
      $("li.login-modal a").attr("uk-toggle", "");
    });
  }),
  $(document).ready(function () {
    if (window.matchMedia("(max-width: 375px)").matches) {
      $(".step-card.version2 .custom-gutter").slick({
        slidesToShow: 1,
        dots: false,
        centerMode: true,
        infinite: false,
        centerPadding: "36px",
        arrows: false,
      });
      $(".step-card.version2 .custom-gutter").on("setPosition", function () {
        $(this).find(".slick-slide").height("auto");
        var slickTrack = $(this).find(".slick-track");
        var slickTrackHeight = $(slickTrack).height();
        $(this)
          .find(".slick-slide")
          .css("height", slickTrackHeight + "px");
      });
    }

    $("#menu-item-7456 a").attr("href", "https://www.santaferelo.com/en");
    $("#menu-item-7457 a").click(function (e) {
      Cookies.set("site-nav", "corporate");
    });
    $("#menu-item-7456 a").click(function (e) {
      Cookies.set("site-nav", "domestic");
    });
    $(".main-logo svg").click(function (e) {
      Cookies.set("site-nav", "domestic");
    });

    var site = Cookies.get("site-nav");
    $.ajax({
      url: adminajax.ajaxurl,
      type: "post",
      data: {
        action: "site_nav",
        site_nav: site,
      },
      success: function (t) {
        //$(".desktop-menu .uk-navbar-right > div").html(t),
        $(".desktop-menu .uk-navbar-right > div").addClass("is-loaded");
       if(document.body.classList.contains('home')){
          console.log('found home')
          $("#menu-top-menu-left-2019 > li#menu-item-12648").addClass(
            "parent-active"
          );
       }
       else{
            console.log('NOT found home')
           if (site == "domestic") {
          $("#menu-top-menu-left-2019 > li#menu-item-12648").addClass(
            "parent-active"
          );
        } else {
          $("#menu-top-menu-left-2019 > li#menu-item-7457").addClass(
            "parent-active"
          );
        }
       }
       
        

        const activeParent = document.querySelector(".parent-active");
        the_url = window.location.href;
        if (the_url.includes("partners")) {
          activeParent.classList.remove("parent-active");
        }
      },
    });

    $(
      ".cf-dropdown select.form option[value='https://www.santaferelo.com/en/country/moving-to-australia/santa-fe-relocation-is-partnering-with-the-commonwealth-bank-of-australia/']"
    ).remove(),
      $("#destination_select").change(function () {
        var t = this.value;
        $.ajax({
          url: adminajax.ajaxurl,
          type: "post",
          data: {
            action: "destination_function",
            link: t,
          },
          success: function (t) {
            $(".ajax").html(t),
              $(".ajax .foobarsubmit .button").click(function (t) {
                t.preventDefault(),
                  (window.location = $("#ajax-select option:selected").val());
              });
          },
        });
      }),
      $(".post-type-archive-destination-guides .foobarsubmit").click(function (
        t
      ) {
        window.location = $("#destination_select option:selected").val();
      }),
      $(".sf-slider").slick({
        infinite: !1,
        speed: 300,
        slidesToShow: 4.3,
        appendArrows: $(".nav-button"),
        prevArrow:
          '<button type="button" class="slick-prev"><i class="material-icons">chevron_left</i></button>',
        nextArrow:
          '<button type="button" class="slick-next"><i class="material-icons">chevron_right</i></button>',
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
            },
          },
        ],
      });
    var t = Cookies.get("set_language"),
      e = $(document.body).attr("data-ajaxid");
    "HK" == t &&
      $.ajax({
        url: adminajax.ajaxurl,
        type: "post",
        data: {
          action: "ip_menu_hk",
          ip_lang: t,
        },
        success: function (t) {
          $("li.menu-item-7450").html(t),
            $("ul.sub-menu li.menu-item-7450 a").attr("href") ==
              window.location.href,
            $("li.menu-item.flag").html(
              '<a href="#modal-country" uk-toggle="">HK<i class="material-icons">language</i></a>'
            );
        },
      }),
      "TH" == t &&
        $.ajax({
          url: adminajax.ajaxurl,
          type: "post",
          data: {
            action: "ip_menu_th",
            ip_lang: t,
          },
          success: function (t) {
            $("li.menu-item-7450").html(t),
              $("ul.sub-menu li.menu-item-7450 a").attr("href") ==
                window.location.href,
              $("li.menu-item.flag").html(
                '<a href="#modal-country" uk-toggle="">TH<i class="material-icons">language</i></a>'
              );
          },
        }),
      "IN" == t &&
        $.ajax({
          url: adminajax.ajaxurl,
          type: "post",
          data: {
            action: "ip_menu_in",
            ip_lang: t,
          },
          success: function (t) {
            $("li.menu-item-7450").html(t),
              $("ul.sub-menu li.menu-item-7450 a").attr("href") ==
                window.location.href,
              $("li.menu-item.flag").html(
                '<a href="#modal-country" uk-toggle="">IN<i class="material-icons">language</i></a>'
              );
          },
        }),
      "SG" == t &&
        $.ajax({
          url: adminajax.ajaxurl,
          type: "post",
          data: {
            action: "ip_menu_sg",
            ip_lang: t,
          },
          success: function (t) {
            $("li.menu-item-7450").html(t),
              $("ul.sub-menu li.menu-item-7450 a").attr("href") ==
                window.location.href,
              $("li.menu-item.flag").html(
                '<a href="#modal-country" uk-toggle="">SG<i class="material-icons">language</i></a>'
              );
          },
        }),
      "AE" == t &&
        $.ajax({
          url: adminajax.ajaxurl,
          type: "post",
          data: {
            action: "ip_menu_ae",
            ip_lang: t,
          },
          success: function (t) {
            $("li.menu-item-7450").html(t),
              $("ul.sub-menu li.menu-item-7450 a").attr("href") ==
                window.location.href,
              $("li.menu-item.flag").html(
                '<a href="#modal-country" uk-toggle="">AE<i class="material-icons">language</i></a>'
              );
          },
        }),
      "GB" == t &&
        $.ajax({
          url: adminajax.ajaxurl,
          type: "post",
          data: {
            action: "ip_menu_uk",
            ip_lang: t,
          },
          success: function (t) {
            $("li.menu-item-7450").html(t),
              $("ul.sub-menu li.menu-item-7450 a").attr("href") ==
                window.location.href,
              $("li.menu-item.flag").html(
                '<a href="#modal-country" uk-toggle="">GB<i class="material-icons">language</i></a>'
              );
          },
        }),
      "US" == t &&
        $.ajax({
          url: adminajax.ajaxurl,
          type: "post",
          data: {
            action: "ip_menu_us",
            ip_lang: t,
          },
          success: function (t) {
            $("li.menu-item-7450").html(t),
              $("ul.sub-menu li.menu-item-7450 a").attr("href") ==
                window.location.href,
              $("li.menu-item.flag").html(
                '<a href="#modal-country" uk-toggle="">US<i class="material-icons">language</i></a>'
              );
          },
        }),
      // $.ajax({
      //   url: adminajax.ajaxurl,
      //   type: "post",
      //   data: {
      //     action: "ip_module_frontpage",
      //     ip_lang: t,
      //     ajax_id: e,
      //   },
      //   success: function (t) {
      //     $(".home .new-ipajax.fp").html(t);
      //   },
      // }),
      // $.ajax({
      //   url: adminajax.ajaxurl,
      //   type: "post",
      //   data: {
      //     action: "ip_module_function",
      //     ip_lang: t,
      //     ajax_id: e,
      //   },
      //   success: function (t) {
      //     $(".ipajax").html(t);
      //   },
      // }),
      $(".guides .toggle").click(function () {
        $(".guides .toggle span").text(
          "Show" == $(".guides .toggle span").text() ? "Hide" : "Show"
        );
      }),
      $(".country-guides").change(function () {
        $(".guides button").prop("disabled", !1);
      }),
      $(".guides button").click(function (t) {
        t.preventDefault(),
          (window.location = $(".country-guides option:selected").val());
      }),
      $("select.country").change(function () {
        $(".select-ajax button").prop("disabled", !0);
      }),
      $("select.form").change(function (t) {
        window.location = $(this).val();
      }),
      $("#wpse34320_select").change(function () {
        var t = this.value;
        $.ajax({
          url: adminajax.ajaxurl,
          type: "post",
          data: {
            action: "country_function",
            link: t,
          },
          success: function (t) {},
        });
      }),
      $("select.country").change(function () {
        var t = this.value;
        $.ajax({
          url: adminajax.ajaxurl,
          type: "post",
          data: {
            action: "office_function",
            link: t,
          },
          success: function (t) {
            $("#select-page").html(t),
              $("#select-page").removeAttr("hidden"),
              $(".select-ajax button").removeAttr("hidden"),
              $(".select-ajax .select-container + .select-container").show(),
              $("#select-page").change(function () {
                "disabled" == $(this).val()
                  ? $(".select-ajax button").prop("disabled", !0)
                  : $(".select-ajax button").prop("disabled", !1);
              }),
              $("select.country").change(function () {
                $(".select-ajax button").prop("disabled", !0);
              });
          },
        });
      }),
      $("select.category").change(function () {
        var t = this.value,
          e = $(this).data("tax"),
          a = $(this).data("cpt");
        $.ajax({
          url: adminajax.ajaxurl,
          type: "post",
          data: {
            action: "xcategory_function",
            cat: t,
            tax: e,
            cpt: a,
          },
          beforeSend: function () {
            $(".ajax-listing").fadeTo("fast", 0.2);
          },
          success: function (t) {
            $(".ajax-listing").html(t);
            $(".ajax-listing").fadeTo("slow", 1);
          },
        });
        console.log(adminajax.ajaxurl);
      }),
      ($.fn.orderChildren = function (t) {
        return (
          this.each(function () {
            for (var e = $(this), a = t.length - 1; a >= 0; a--)
              e.prepend(e.children(t[a]));
          }),
          this
        );
      }),
      $("#menu-top-menu").orderChildren([
        "#menu-item-143",
        "#menu-flag",
        "#menu-item-1383",
        "#menu-item-141",
      ]),
      $("li.login-modal a").attr("uk-toggle", "");
    $("#menu-top-menu-right-2019").orderChildren([
      "#menu-item-7458",
      "#menu-flag",
      "#menu-item-7464",
    ]);
    var some_value = $("#ip-check").attr("data-ip");
    $(
      'body.page-template-template-frontpage2020 #mandatory1 option[value="' +
        some_value +
        '"]'
    ).prop("selected", true);
    $(
      'body.page-template-template-frontpage2020 select[name ="Dropdown"] option[value="' +
        some_value +
        '"]'
    ).prop("selected", true);
  });
$(document).ready(function () {
  $('a[href*="#wechat-modal"]').attr("uk-toggle", "");
  $("#squaredOne").click(function () {
    if ($(this).is(":checked")) {
      $(".move_domestic").show();
      $(".move_abroad").hide();
    } else {
      $(".move_domestic").hide();
      $(".move_abroad").show();
    }
  });
  $(".formprefill").submit(function () {
    if (
      $.trim($(".mandatory1").val()) === "" ||
      $.trim($(".mandatory2").val()) === "" ||
      $.trim($("#movedate").val()) === "" ||
      $.trim($(".mandatory4").val()) === ""
    ) {
      alert("Please complete the form");
      return false;
    }
  });
  $(".officebutton .button").click(function (e) {
    e.preventDefault();
    window.location = $("#offices_linkjs option:selected").val();
  });
});