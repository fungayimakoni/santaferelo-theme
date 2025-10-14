const blogs = document.querySelector("#blogs");
const events = document.querySelector("#events");
const eventsCategory = document.querySelector("#event-category");

if (eventsCategory) {
  eventsCategory.addEventListener("change", function (e) {
    console.log(eventsCategory.value);
    events.innerHTML = "";
    ajax_events();
  });
}

document.addEventListener("DOMContentLoaded", function () {
  const careers = document.querySelector(".careers-ajax-load");

  if (careers) {
    ajax_load();
    document
      .querySelector("#filter-careers")
      .addEventListener("click", function (e) {
        e.preventDefault();
        ajax_load();
      });
  }

  if (blogs) {
    document.querySelector("#ajax-overlay").classList.remove("not-shown");
    ajax_blogs();
    document.querySelector("#ajax-overlay").classList.add("not-shown");
    window.onbeforeunload = function () {
      window.scrollTo(0, 0);
    };
  }

  if (events) {
    document.querySelector("#ajax-overlay").classList.remove("not-shown");
    ajax_events();
    document.querySelector("#ajax-overlay").classList.add("not-shown");
    window.onbeforeunload = function () {
      window.scrollTo(0, 0);
    };
  }
});

function ajax_blogs(current_page = 1) {
  let fData = new FormData();

  fData.append("action", "get_blogs");
  fData.append("current_page", current_page);

  fetch(adminajax.ajaxurl, {
    method: "POST",
    body: fData,
  })
    .then((response) => response.json())
    .then((data) => {
      refresh_blogs(data, current_page);
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

function ajax_events(current_page = 1) {
  let fData = new FormData();

  fData.append("action", "get_events");
  fData.append("current_page", current_page);
  if (eventsCategory) fData.append("tax", eventsCategory.value);

  fetch(adminajax.ajaxurl, {
    method: "POST",
    body: fData,
  })
    .then((response) => response.json())
    .then((data) => {
      refresh_events(data, current_page);
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

function refresh_blogs(data, current_page = 1) {
  if (data.items.length > 0) {
    let listings = data.items.map(function (item) {
      var entry = document.createElement("li");
      let lite = item.lite_image ? "image-lite" : "";
      entry.classList.add("vc-search__result-item");
      entry.innerHTML = `
            <figure class="image ${lite}">
                <a  href="${item.link}">
                    <img src="${item.image}" alt="${item.title} image">
                </a>
            </figure>
            <div class='description'>
                <p class="by">By <strong>Santa Fe Relocation</strong></p>
                <p class="date">${item.date} &nbsp; &nbsp; <span class="minute-read">${item.minute}</span> </p>
                <h3 class="vc-title"><a href="${item.link}"> ${item.title}</a></h3>
            </div>
            <div class="button-wrapper">            
                <a  href="${item.link}" class="vc-link">Read more <span>&rsaquo;</span></a>
            </div>`;
      blogs.append(entry);
    });

    if (data.pages > 1) {
      var pagination = document.createElement("li");
      pagination.classList.add("paginations");
      var pages = ``;
      var top = 1;
      var bottom = data.pages;
      var current = current_page;
      var prev = current_page > 1 ? parseInt(current_page) - 1 : 0;
      var next = current_page < bottom ? parseInt(current_page) + 1 : 0;
      console.log(
        `current=${current} \n previous=${prev} \n next=${next} \n bottom=${bottom} `
      );
      for (let index = 1; index <= data.pages && index <= 3; index++) {
        if (index == current_page) {
          if ((prev = 0)) {
            pages =
              pages +
              `
                    <span aria-current="page" class="page-numbers current"> &#10094;&#10094; </span>
                    `;
            pages =
              pages +
              `
                    <span aria-current="page" class="page-numbers current"> &#10094; </span>
                    `;
          }
          pages =
            pages +
            `
                <span aria-current="page" class="page-numbers current">${index}</span>
                `;
        } else {
          pages =
            pages +
            `
                <a class='page-numbers' id='${index}' href='javascript:void(0)'>${index}</a>
                `;
        }
      }
      pagination.innerHTML = `${pages}`;
      blogs.append(pagination);

      document.querySelectorAll(".page-numbers").forEach(function (page) {
        page.addEventListener("click", function () {
          blogs.innerHTML = "";
          document.querySelector("#ajax-overlay").classList.remove("not-shown");
          ajax_blogs(page.id);
          document.querySelector("#ajax-overlay").classList.add("not-shown");

          window.scrollTo(0, 0);
        });
      });
      document.querySelector("#ajax-overlay").classList.add("hidden");
      // if(window.location.hash){
      //     console.log(window.location.hash)
      //     document.querySelector('#jobs').scrollIntoView()
      // }
    }
  } else {
    blogs.innerHTML =
      '<li class="vc-search__result-item"><h4>No blog found.</h4></li>';
  }
}

function refresh_events(data, current_page = 1) {
  if (data.items.length > 0) {
    let listings = data.items.map(function (item) {
      var entry = document.createElement("li");
      var meta = "";

      console.log(item.text_date);
      if (item.text_date) {
        meta += `<p class="date ${item.type} ">${item.text_date}`;
      } else {
        if (item.date) {
          meta += `<p class="date ${item.type} ">${item.date}`;
        }
      }
      //  if(item.time) meta += `<br><strong>Time</strong>: ${item.time}`
      //  if(item.venue) meta += `<br><strong>Venue</strong>: ${item.venue}`
      if (meta) meta += `</p>`;

      entry.classList.add("vc-search__result-item");

      entry.innerHTML = `
             <figure class="image ${item.type}">
                 <a  href="${item.link}">
                     <img src="${item.image}" alt="${item.title} image">
                 </a>
             </figure>
             <div class='description'>
                 ${meta}
                 <h3 class="vc-title"><a href="${item.link}"> ${item.title}</a></h3>
             </div>
             <div class="button-wrapper">            
                 <a  href="${item.link}" class="vc-link">Read more <span>&rsaquo;</span></a>
             </div>`;
      events.append(entry);
    });

    if (data.pages > 1) {
      var pagination = document.createElement("li");
      pagination.classList.add("paginations");
      var pages = `<span class='page-numbers'>Page :</span> `;
      for (let index = 1; index <= data.pages; index++) {
        if (index == current_page) {
          pages =
            pages +
            `
                 <span aria-current="page" class="page-numbers current">${index}</span>
                 `;
        } else {
          pages =
            pages +
            `
                 <a class='page-numbers' id='${index}' href='javascript:void(0)'>${index}</a>
                 `;
        }
      }
      pagination.innerHTML = `${pages}`;
      events.append(pagination);

      document.querySelectorAll(".page-numbers").forEach(function (page) {
        page.addEventListener("click", function () {
          blogs.innerHTML = "";
          document.querySelector("#ajax-overlay").classList.remove("not-shown");
          ajax_events(page.id);
          document.querySelector("#ajax-overlay").classList.add("not-shown");

          window.scrollTo(0, 0);
        });
      });
      document.querySelector("#ajax-overlay").classList.add("hidden");
      // if(window.location.hash){
      //     console.log(window.location.hash)
      //     document.querySelector('#jobs').scrollIntoView()
      // }
    }
  } else {
    events.innerHTML =
      '<li class="vc-search__result-item"><h4>No events found.</h4></li>';
  }
}

function ajax_load(current_page = 1) {
  const job_category = document.querySelector("[name=job_category]");
  const country_id = document.querySelector("[name=country_id]");

  var formData = new FormData();
  formData.append("action", "get_careers");
  formData.append("country_id", country_id ? country_id.value : 0);
  formData.append("job_category", job_category ? job_category.value : 0);
  formData.append("current_page", current_page);
  // document.querySelector("#ajax-overlay").classList.remove("hidden");
  document.querySelector(".careers-ajax-load").innerHTML = "";
  fetch(adminajax.ajaxurl, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      refresh_lists(data, current_page);
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

function refresh_lists(data, current_page) {
  const careers = document.querySelector(".careers-ajax-load");
  if (data.data.length > 0) {
    let listings = data.data.map(function (item) {
      var entry = document.createElement("li");
      entry.classList.add("vc-search__result-item");
      entry.innerHTML = `<div class='description'>
                <h3 class='vc-title'>${item.title}</h3>
                <p>Location: ${item.location}</p>
                <p>${item.short_description}</p>
                <p class="date">Posted: ${item.date}</p>
            </div>
            <div class='button-wrapper'>
            <a  href='${item.link}' class="vc-button vc-btnOutline">Show more</a>
            </div>
            `;
      careers.append(entry);
    });
    if (data.total_pages > 1) {
      var pagination = document.createElement("li");
      pagination.classList.add("paginations");
      var pages = `<span class='page-numbers'>Page :</span> `;
      for (let index = 1; index <= data.total_pages; index++) {
        if (index == current_page) {
          pages =
            pages +
            `
                    <span aria-current="page" class="page-numbers current">${index}</span>
                    `;
        } else {
          pages =
            pages +
            `
                    <a class='page-numbers' id='${index}' href='javascript:void(0)'>${index}</a>
                    `;
        }
      }

      pagination.innerHTML = `${pages}`;
      careers.append(pagination);

      document.querySelectorAll(".page-numbers").forEach(function (page) {
        page.addEventListener("click", function () {
          ajax_load(page.id);
        });
      });
      if (window.location.hash) {
        console.log(window.location.hash);
        document.querySelector("#jobs").scrollIntoView();
      }
    }
  } else {
    careers.innerHTML =
      '<li class="vc-search__result-item"><h4>No open position found.</h4></li>';
  }
}
$(document).ready(function () {
  $(window).on("load", function () {
    AOS.init();
  });
  window.odometerOptions = {
    format: "(,ddd)",
    duration: 20000,
    animation: "count",
  };
  setTimeout(function () {
    $(".odometer").each(function () {
      $(this).text($(this).data("target"));
    });
  }, 5);
  $(".past .immigration").slick({
    slidesToShow: 4,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    speed: 300,
    arrows: true,
    prevArrow:
      '<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;"><i class="material-icons">chevron_left</i></button>',
    nextArrow:
      '<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;"><i class="material-icons">chevron_right</i></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 426,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".past .mobility").slick({
    slidesToShow: 4,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    speed: 300,
    arrows: true,
    prevArrow:
      '<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;"><i class="material-icons">chevron_left</i></button>',
    nextArrow:
      '<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;"><i class="material-icons">chevron_right</i></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 426,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".upcoming .immigration").slick({
    slidesToShow: 4,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    speed: 300,
    arrows: true,
    prevArrow:
      '<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;"><i class="material-icons">chevron_left</i></button>',
    nextArrow:
      '<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;"><i class="material-icons">chevron_right</i></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 426,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".upcoming .mobility").slick({
    slidesToShow: 4,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    speed: 300,
    arrows: true,
    prevArrow:
      '<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;"><i class="material-icons">chevron_left</i></button>',
    nextArrow:
      '<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;"><i class="material-icons">chevron_right</i></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 426,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".webinar-slide").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: "linear",
    autoplay: true,
    autoplaySpeed: 5000,
    asNavFor: ".nav-slide",
  });
  $('[href="#"]').on("click", function (e) {
    setTimeout(function () {
      $(".upcoming .mobility").slick("getSlick").refresh();
      $(".upcoming .immigration").slick("getSlick").refresh();
      $(".past .mobility").slick("getSlick").refresh();
      $(".past .immigration").slick("getSlick").refresh();
    }, 100);
  });
  $(".country_flags-selecttop").msDropdown();
  var ip_check = Cookies.get("set_language");
  if (!ip_check) {
    $(".off-canvas-ip")
      .addClass("start")
      .delay(3000)
      .queue(function () {
        $(this).addClass("done");
        UIkit.sticky(".uk-sticky", {
          top: 70,
        });
      });
  }
  $("li#menu-item-1871").after(
    '<li><a href="#" class="language-refresh">Change Location</a></li>'
  );
  $("li#menu-item-1871").after(
    '<li><a href="#modal-internation" uk-toggle>Change Language</a></li>'
  );
  $(".language-refresh").click(function (e) {
    e.preventDefault();
    if (ip_check) {
      Cookies.remove("set_language");
    }
    location.reload();
  });
  $("#modal-country .button.launch").click(function (e) {
    e.preventDefault();
    if ($("#modal-country select option:selected").val() != "") {
      Cookies.set(
        "set_language",
        $("#modal-country select option:selected").val(),
        {
          expires: 7,
        }
      );
    }
    location.reload();
  });
  $("#selectorform + a").click(function (e) {
    e.preventDefault();
  });
  $(".off-canvas-ip a").click(function () {
    $(".off-canvas-ip").removeClass("done");
  });
  $("#selector .foobarsubmit .button").click(function (e) {
    e.preventDefault();
    window.location = $("#wpse34320_select option:selected").val();
  });
  $("#selector-contact-forms .foobarsubmit .button").click(function (e) {
    e.preventDefault();
    window.location = $(".contact-forms option:selected").val();
  });
  $("#4669447-A #submit_button").wrapAll("<div class='affix-submit'></div>");
  $(".product-services .container p a")
    .css({
      color: "#353c41",
      cursor: "default",
    })
    .click(function (e) {
      e.preventDefault();
    });
  $.fn.stars = function () {
    return $(this).each(function () {
      $(this).html(
        $("<span />").width(
          Math.max(0, Math.min(5, parseFloat($(this).html()))) * 29
        )
      );
    });
  };
  $(function () {
    $("span.stars").stars();
  });
  $(document).ready(function () {
    $("#tfa_733,#tfa_10,#movedate,#movedate2,#movedate3,#movedate12")
      .datepicker({
        showOn: "both",
        buttonText: "<i class='fas fa-calendar-alt' aria-hidden='true'></i>",
        startDate: "+1d",
        minDate: 0,
        weekStart: 1,
        dateFormat: "dd-M-yy",
        onClose: function () {
          $("main").removeClass("unfocus");
        },
        beforeShow: function (input, inst) {
          setTimeout(function () {
            inst.dpDiv.css({
              top:
                $("#tfa_733,#movedate,#movedate2,#movedate3").offset().top + 35,
              left: $("#tfa_733").offset().left,
            });
          }, 0);
          $("main").addClass("unfocus");
        },
      })
      .on("change", function (e) {
        $(this).valid();
      });
  });
  $(document).ready(function () {
    $("#tfa_733,#tfa_10").prop("readonly", true);
  });
  $(".calc-consentbox.calcval-1").on("change", function () {
    $(".calc-consentbox.calcval-1").not(this).prop("checked", false);
  });
  $(".calc-consentckbx").change(function () {
    var val = $(this).val();
    if ($(this).is(":checked")) {
      $(".calc-consentrcvr").val("False");
    } else {
      $(".calc-consentrcvr").val("True");
    }
  });
  $("#full a").each(function () {
    this.href = this.href.replace("dpstpymnteur", "fllamnteur");
  });
  $("#dep a").each(function () {
    this.href = this.href.replace("fllamnteur", "dpstpymnteur");
  });
  $("#full-gbp a").each(function () {
    this.href = this.href.replace("dpstpymntgbp", "fllamntgbp");
  });
  $("#dep-gbp a").each(function () {
    this.href = this.href.replace("fllamntgbp", "dpstpymntgbp");
  });
  $("#dep-bank a").each(function () {
    this.href = this.href.replace("bnkfllpymenteur", "bnkdpstpymnteur");
  });
  $("#full-bank a").each(function () {
    this.href = this.href.replace("bnkdpstpymnteur", "bnkfllpymenteur");
  });
  $("#dep-bank-gbp a").each(function () {
    this.href = this.href.replace("bnkfllpymntgbp", "bnkdpstpymntgbp");
  });
  $("#full-bank-gbp a").each(function () {
    this.href = this.href.replace("bnkdpstpymntgbp", "bnkfllpymntgbp");
  });
  $("#bank_t a").each(function () {
    this.href = this.href.replace("dpstpymntgbp", "bnkdpstpymntgbp");
    this.href += "&bank_name=UK Barclays GBP";
  });
  $("#credit_c a").each(function () {
    this.href = this.href.replace("bnkdpstpymntgbp", "dpstpymntgbp");
  });
  $("#bank_t_full a").each(function () {
    this.href = this.href.replace("fllamntgbp", "bnkfllpymntgbp");
    this.href += "&bank_name=UK Barclays GBP";
  });
  $("#credit_c_full a").each(function () {
    this.href = this.href.replace("bnkfllpymntgbp", "fllamntgbp");
  });
  $("#bank_t_dep_eur a").each(function () {
    this.href = this.href.replace("dpstpymnteur", "bnkdpstpymnteur");
    this.href += "&bank_name=UK Barclays EUR";
  });
  $("#credit_c_deposit_eur a").each(function () {
    this.href = this.href.replace("bnkdpstpymnteur", "dpstpymnteur");
  });
  $("#bank_t_full_eur a").each(function () {
    this.href = this.href.replace("fllamnteur", "bnkfllpymenteur");
    this.href += "&bank_name=UK Barclays EUR";
  });
  $("#credit_c_full_eur a").each(function () {
    this.href = this.href.replace("bnkfllpymenteur", "fllamnteur");
  });
  $("#full-cpq a").each(function () {
    this.href = this.href.replace("dpstpymnteur-cpq", "fllamnteur-cpq");
  });
  $("#dep-cpq a").each(function () {
    this.href = this.href.replace("fllamnteur-cpq", "dpstpymnteur-cpq");
  });
  $("#full-gbp-cpq a").each(function () {
    this.href = this.href.replace("dpstpymntgbp-cpq", "fllamntgbp-cpq");
  });
  $("#dep-gbp-cpq a").each(function () {
    this.href = this.href.replace("fllamntgbp-cpq", "dpstpymntgbp-cpq");
  });
  $("#dep-bank-cpq a").each(function () {
    this.href = this.href.replace("bnkfllpymenteur-cpq", "bnkdpstpymnteur-cpq");
  });
  $("#full-bank-cpq a").each(function () {
    this.href = this.href.replace("bnkdpstpymnteur-cpq", "bnkfllpymenteur-cpq");
  });
  $("#dep-bank-gbp-cpq a").each(function () {
    this.href = this.href.replace("bnkfllpymntgbp-cpq", "bnkdpstpymntgbp-cpq");
  });
  $("#full-bank-gbp-cpq a").each(function () {
    this.href = this.href.replace("bnkdpstpymntgbp-cpq", "bnkfllpymntgbp-cpq");
  });
  $("#bank_t-cpq a").each(function () {
    this.href = this.href.replace("dpstpymntgbp-cpq", "bnkdpstpymntgbp-cpq");
    this.href += "&bank_name=UK Barclays GBP";
  });
  $("#credit_c-cpq a").each(function () {
    this.href = this.href.replace("bnkdpstpymntgbp-cpq", "dpstpymntgbp-cpq");
  });
  $("#bank_t_full-cpq a").each(function () {
    this.href = this.href.replace("fllamntgbp-cpq", "bnkfllpymntgbp-cpq");
    this.href += "&bank_name=UK Barclays GBP";
  });
  $("#credit_c_full-cpq a").each(function () {
    this.href = this.href.replace("bnkfllpymntgbp-cpq", "fllamntgbp-cpq");
  });
  $("#bank_t_dep_eur-cpq a").each(function () {
    this.href = this.href.replace("dpstpymnteur-cpq", "bnkdpstpymnteur-cpq");
    this.href += "&bank_name=UK Barclays EUR";
  });
  $("#credit_c_deposit_eur-cpq a").each(function () {
    this.href = this.href.replace("bnkdpstpymnteur-cpq", "dpstpymnteur-cpq");
  });
  $("#bank_t_full_eur-cpq a").each(function () {
    this.href = this.href.replace("fllamnteur-cpq", "bnkfllpymenteur-cpq");
    this.href += "&bank_name=UK Barclays EUR";
  });
  $("#credit_c_full_eur-cpq a").each(function () {
    this.href = this.href.replace("bnkfllpymenteur-cpq", "fllamnteur-cpq");
  });
  $("select#tfa_89 option, select#tfa_98 option").each(function () {
    var theText = $(this).html();
    $(this).addClass("serv_bul");
  });
  $(
    "#tfa_89 input:checkbox:not(:checked),#tfa_98 input:checkbox:not(:checked) "
  )
    .hide()
    .next("label")
    .hide();
  $(function () {
    $("#SingleLine4, #SingleLine7").attr("data-geo", "country");
    $("#SingleLine6, #SingleLine9").attr(
      "data-geo",
      "administrative_area_level_2"
    );
    $("#SingleLine5, #SingleLine8").attr(
      "data-geo",
      "administrative_area_level_1"
    );
  });
  $(function () {
    var notAllowedOrigin = ["Belarus"];
    var notAllowedDestination = ["Belarus", "Ukraine", "Russia"];
    $("#SingleLine2")
      .geocomplete({
        details: "#tfa_780",
        detailsAttribute: "data-geo",
      })
      .bind("geocode:result", function (event, result) {
        var address = result.adr_address;
        $(".notice > .meta-info").empty();
        $(".notice > .meta-info").append(address);
        var country = $(".notice > .meta-info .country-name").text();
        if (notAllowedDestination.includes(country)) {
          $(".notification").addClass("open");
          $("body").addClass("scroll-lock");
          $(this).val("");
          return false;
        }
      });
    $("#SingleLine1")
      .geocomplete({
        details: "#tfa_781",
        detailsAttribute: "data-geo",
      })
      .bind("geocode:result", function (event, result) {
        var address = result.adr_address;
        $(".notice > .meta-info").empty();
        $(".notice > .meta-info").append(address);
        var country = $(".notice > .meta-info .country-name").text();
        if (notAllowedOrigin.includes(country)) {
          $(".notification").addClass("open");
          $("body").addClass("scroll-lock");
          $(this).val("");
          return false;
        }
      });
  });
  $("#close-notice").on("click", function (e) {
    $(".notification").removeClass("open");
    $("body").removeClass("scroll-lock");
    $(".notice > .meta-info").empty();
  });
  $(window).resize(function () {
    if ($(window).width() < 768) {
      $("#tfa_788").geocomplete({
        details: "#tfa_780",
        detailsAttribute: "data-geo",
      });
      $("#tfa_786").geocomplete({
        details: "#tfa_781",
        detailsAttribute: "data-geo",
      });
      $("#tfa_788-D,#tfa_786-D").dialog({
        modal: true,
        autoOpen: false,
        buttons: [
          {
            text: "DONE",
            style: "margin:0;font-weight:bold",
            click: function () {
              $("#tfa_1").val($("#tfa_788").val() + " ");
              $("#tfa_3").val($("#tfa_786").val() + " ");
              $(this).dialog("close");
            },
          },
        ],
        close: function () {
          $("tfa_786").val("");
          $("tfa_788").val("");
        },
      });
      $("#tfa_1").click(function () {
        $("#tfa_788-D").dialog("open");
      });
      $("#tfa_3").click(function () {
        $("#tfa_786-D").dialog("open");
      });
      $(".ui-dialog-titlebar").hide();
      $("#tfa_788-D").dialog("widget").find(".ui-dialog-buttonpane").css({
        margin: "0 0 0 0",
      });
    } else {
      $("#tfa_788-D,#tfa_786-D").dialog("destroy");
    }
  });
  $(document).ready(function () {
    $(".wfPageNextButton").click(function () {
      $("#tfa_1")
        .val("")
        .attr("placeholder", "An error occured!")
        .addClass("changePlaceColor1")
        .addClass("changePlaceColor2")
        .addClass("changePlaceColor3")
        .addClass("changePlaceColor4");
    });
  });
  $(document).ready(function () {
    $("#submit_button").click(function () {
      ValidateForm();
    });
  });

  function ValidateForm() {
    var formInvalid = false;
    $("#4669530 input").each(function () {
      if ($(this).val() === "") {
        formInvalid = true;
      }
    });
    if (formInvalid)
      $("#tfa_23").attr("placeholder", "Please enter first name");
    $("#tfa_25").attr("placeholder", "Please enter last name");
    $("#tfa_26").attr("placeholder", "Please enter email address");
    $("#tfa_27").attr("placeholder", "Please enter phone number");
  }
  $(document).ready(function ($) {
    var alterClass = function () {
      var ww = document.body.clientWidth;
      if (ww > 767) {
        $(".icon-item .bordered div div").removeClass("uk-position-left");
      } else if (ww <= 767) {
        $(".icon-item .bordered div div ")
          .removeClass("uk-position-center")
          .addClass("uk-position-left");
      }
    };
    $(window).resize(function () {
      alterClass();
    });
    alterClass();
  });
  $(".local-offices button").click(function (e) {
    e.preventDefault();
    window.location = $("#select-page option:selected").val();
  });
  $(".destination-guide h3.title").html(function () {
    var text = $(this).text().split(" ");
    var last = text.pop();
    return (
      text.join(" ") +
      (text.length > 0 ? ' <span class="last">' + last + "</span>" : last)
    );
  });
  $(".top-header .primary a")
    .clone()
    .appendTo(".mobile-menu .mobile-button-primary");
  $("#nav-icon1").click(function () {
    $(this).toggleClass("open");
    $(".uk-sticky").toggleClass("menu-open");
    $("#menu-main-menu .sub-menu").removeClass("show");
  });
  $("#menu-main-menu li").each(function () {
    if ($(this).children(".sub-menu").length > 0) {
      $(this).append('<i class="material-icons show-sub">chevron_right</i>');
      var menu = $(this).children("a").text();
      $(this)
        .children(".sub-menu")
        .prepend(
          '<li class="back"><i class="material-icons show-sub">chevron_left</i>Back</li><li class="title">' +
            menu +
            "</li>"
        );
    }
  });
  $(document).on("click", ".show-sub", function () {
    $(this).prev().addClass("show");
  });
  $(document).on("click", "li.back", function () {
    $(this).parent().removeClass("show");
  });
  $(".sidepanel .sub-menu li a").append(
    '<i class="material-icons show-sub">chevron_right</i>'
  );
  // $(window).on("load resize", function () {
  //     if (Modernizr.mq('(min-width: 1200px)')) {
  //         var container = $('header.main-header .container').width();
  //         $('.half-container').width(container / 2);
  //         $('.sidepanel').removeClass('sidepanel-out');
  //         $('#nav-icon1').removeClass('open');
  //     } else if (Modernizr.mq('(min-width: 960px)') && Modernizr.mq('(max-width: 1199px)')) {
  //         var container = $('header.main-header .container').width();
  //         $('.half-container').width(container / 2);
  //         UIkit.sticky('.uk-sticky', {
  //             offset: 0,
  //             top: 0
  //         });
  //     } else if (Modernizr.mq('(max-width: 959px)')) {
  //         var container = $('header.main-header .container').width();
  //         $('.half-container').css('width', 'auto');
  //     } else {}
  // });
});
jQuery(function ($) {
  var ua = detect.parse(navigator.userAgent);
  $("html").addClass(ua.browser.family.toLowerCase());
});

hidden = document.querySelector("#international_PhoneNumber1_countrycode");

var input = document.querySelector("#international_PhoneNumber_countrycode");
window.intlTelInput(input, {
  autoHideDialCode: false,
  autoPlaceholder: "polite",
  initialCountry: "auto",
  geoIpLookup: function (callback) {
    $.get("https://ipinfo.io", function () {}, "jsonp").always(function (resp) {
      var countryCode = resp && resp.country ? resp.country : "";
      callback(countryCode);
    });
  },
  nationalMode: false,
  utilsScript: "utils.js?1562189064761", // just for formatting/placeholders etc
});

var handleChange = function () {
  hidden.value = iti.getNumber();
};

//listen to "keyup", but also "change" to update when the user selects a country
input.addEventListener("change", handleChange);
input.addEventListener("keyup", handleChange);
