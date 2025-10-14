$(document).ready(function () {
  $("#row1_layout_options")
    .change(function () {
      $(".content").hide(),
        $("#row1_col1_" + $(this).val()).show(),
        $("#row1_col2_" + $(this).val()).show(),
        "Canada" == $(this).val()
          ? ($("#frmstate2").show(),
            $("#frmstate2").attr("required", !0),
            $("#tostate2").attr("required", !0))
          : "Australia" == $(this).val()
          ? ($("#frmstate1").show(),
            $("#frmstate1").attr("required", !0),
            $("#tostate1").attr("required", !0))
          : ($("#frmstate1, #frmstate2, #tostate2, #tostate1").prop(
              "required",
              !1
            ),
            $(".content").hide());
    })
    .change(),
    $("#row2_layout_options")
      .change(function () {
        $(".content2").hide(),
          $("#row2_col1_" + $(this).val()).show(),
          "Canada" == $(this).val()
            ? ($("#tostate2").show(), $("#tostate2").attr("required", !0))
            : "Australia" == $(this).val()
            ? ($("#tostate1").show(), $("#tostate1").attr("required", !0))
            : ($("#tostate1, #tostate2").prop("required", !1),
              $(".content2").hide());
      })
      .change(),
    $("#row1_layout_options")
      .change(function () {
        $("content3").hide(),
          $("#row1_col1_United_States").show(),
          $("#row1_col2_United_States").show(),
          "United States" == $(this).val()
            ? ($("#frmstate3").show(),
              $("#frmstate3").attr("required", !0),
              $("#tostate3").attr("required", !0))
            : ($("#frmstate3, #tostate3").prop("required", !1),
              $(".content3").hide());
      })
      .change(),
    $("#row2_layout_options")
      .change(function () {
        $(".content3a").hide(),
          $("#row2_col1_United_States").show(),
          "United States" == $(this).val()
            ? ($("#tostate3").show(), $("#tostate3").attr("required", !0))
            : ($("#tostate3, #tostate3").prop("required", !1),
              $(".content3a").hide());
      })
      .change();
}),
  $(function () {
    $("#squaredOne").click(function () {
      $(this).is(":checked")
        ? ($("#move_domestic").show(), $("#move_abroad").hide())
        : ($("#move_domestic").hide(), $("#move_abroad").show());
    });
  }),
  $("#formprefill").submit(function () {
    if (
      "" === $.trim($("#mandatory1").val()) ||
      "" === $.trim($("#mandatory2").val()) ||
      "" === $.trim($("#movedate3").val()) ||
      "" === $.trim($("#mandatory4").val())
    )
      return alert("Please complete the form"), !1;
  }),
  $(function () {
    $(".zf-radioBtnType, .Dropdown1").change(function () {
      "Baggage (<20 boxes)" === $(this).val()
        ? $(".fewbox_sp").show()
        : $(".fewbox_sp").hide();
    });
  }),
  $(document).ready(function () {
    /* commented out as per digital - x2per
        //otp verification starts
        let isOTPVerified = false;
        let otpVerification = {
            endpoint: 'https://sanelo-otp-api.herokuapp.com/api',
            sendEnpoint: '/send-otp',
            verifyEnpoint: '/verify-otp',
            resendTimerOn: true,
            lastTimeout: null,
            ajaxCall: function (url, data, success, error, type = "post") {
                $.ajax({ url, type, data, dataType: "json", success, error });
            },
            resendTimer: function (remaining, refresh) {

                if (refresh)
                    clearTimeout(this.lastTimeout);

                var m = Math.floor(remaining / 60);
                var s = remaining % 60;

                m = m < 10 ? '0' + m : m;
                s = s < 10 ? '0' + s : s;
                $('#sn-resend-otp').html(`resend in ${m}:${s}`);
                remaining -= 1;

                if (remaining >= 0 && this.resendTimerOn) {
                    this.lastTimeout = setTimeout(() => {
                        this.resendTimer(remaining);
                    }, 1000);
                    this.isTimer = true;
                    return;
                }

                if (!this.resendTimerOn) {
                    return;
                }

                // Do timeout stuff here
                $('#sn-resend-otp').html(`<a href="javascript:void(0)" class="sn-msg-link" id="resend-otp">Resend</a>`);
            },
            sendOTP: function (phone) {
                this.loader('show');
                isOTPVerified = false;
                this.disableSubmit('disable');

                if (phone)
                    this.ajaxCall(`${this.endpoint}${this.sendEnpoint}`, { phone },
                        (data) => {
                            let { success, message } = data;
                            if (success) {
                                $('#sn-phone-msg').text(message).css('color', '#4cee52').show();
                                $('#international_PhoneNumber_countrycode').attr('readonly', true);
                                $('#otp_code').val('').removeAttr('disabled');
                                $('#sn-otp-resend').html(`Didn’t get the code? <span id="sn-resend-otp"></span>`).show();
                                $('#sn-phone-update').show();
                                this.loader('hide');
                                this.resendTimer(120, true);
                            }
                            else {
                                $('#sn-phone-msg').text(message).css('color', '#ff0000').show();
                                $('#otp_code').attr('disabled', true);
                                $('#sn-otp-resend').html(``).hide();
                                this.loader('hide');
                            }

                            setTimeout(() => {
                                $('#sn-phone-msg').text(``).hide();
                            }, 4000);
                        },
                        (err) => {
                            console.log(err);
                            $('#sn-phone-msg').text('Unable to proccess request').css('color', '#ff0000').show();
                            this.loader('hide');
                            setTimeout(() => {
                                $('#sn-phone-msg').text(``).hide();
                            }, 4000);
                        });
                else {
                    $('#sn-phone-msg').text('Phone no. is required').css('color', '#ff0000').show();
                    setTimeout(() => {
                        $('#sn-phone-msg').text(``).hide();
                    }, 4000);
                    this.loader('hide');
                }

            },
            verifyOTP: function (phone, otp) {
                this.loader('show');
                if (phone && otp)
                    this.ajaxCall(`${this.endpoint}${this.verifyEnpoint}`, { phone, otp },
                        (data) => {
                            let { success, message } = data;
                            if (success) {
                                $('#sn-otp-msg').text(message).css('color', '#4cee52').show();
                                $('#international_PhoneNumber_countrycode').attr('readonly', true);
                                $('#otp_code').attr('disabled', true).css('border-color', '#ccc');
                                $('#sn-otp-resend').html(``).remove();
                                $('#sn-phone-update').remove();
                                isOTPVerified = true;
                                this.disableSubmit('undisable');
                                this.loader('hide');
                                setTimeout(() => {
                                    $('#sn-otp-msg').text(``).hide();
                                }, 4000);
                            }
                            else {
                                $('#sn-otp-msg').text(message).css('color', '#ff0000').show();
                                $('#otp_code').css('border-color', '#ff0000');
                                this.loader('hide');
                                // $('#sn-otp-resend').html(`Didn’t get the code? <span id="sn-resend-otp"></span>`).show();
                                setTimeout(() => {
                                    $('#sn-otp-msg').text(``).hide();
                                }, 4000);
                            }
                        },
                        (err) => {
                            console.log(err);
                            $('#sn-otp-msg').text('Unable to proccess request').css('color', '#ff0000').show();
                            $('#otp_code').css('border-color', '#ff0000');
                            this.loader('hide');
                            // $('#sn-otp-resend').html(`Didn’t get the code? <span id="sn-resend-otp"></span>`).show();
                            setTimeout(() => {
                                $('#sn-otp-msg').text(``).hide();
                            }, 4000);
                        });
                else {
                    $('#sn-otp-msg').text('OTP is required').css('color', '#ff0000').show();
                    $('#otp_code').css('border-color', '#ff0000');
                    this.loader('hide');
                    setTimeout(() => {
                        $('#sn-otp-msg').text(``).hide();
                    }, 4000);
                }
            },
            loader: function (action) {
                if (action === 'show')
                    $('#sn-form-loader').css('display', 'flex');
                else
                    $('#sn-form-loader').css('display', 'none');
            },
            disableSubmit: function (action) {
                // if (action === 'disable')
                //     $('#getstmt').addClass('disabled').attr('disabled', 'disabled');
                // else
                //     $('#getstmt').removeClass('disabled').removeAttr('disabled');
            }
        }


        $('#international_PhoneNumber_countrycode').on('change', function (e) {
            if (location.href === 'https://www.santaferelo.com/en/') {
                let val = $('#international_PhoneNumber_countrycode').val();
                let mobilePattern = /^\+\d*$/;
                if (mobilePattern.test(val))
                    otpVerification.sendOTP(val);
            }

        });

        $('#otp_code').on('keyup', function (e) {

            let otp = $(this).val();
            let phone = $('#international_PhoneNumber_countrycode').val();
            let otpPattern = /^[0-9]{6,6}$/;

            if (otpPattern.test(otp))
                otpVerification.verifyOTP(phone, otp);
        });

        $(document).on('click', '#resend-otp', function () {
            let val = $('#international_PhoneNumber_countrycode').val();
            let mobilePattern = /^\+\d*$/;
            if (mobilePattern.test(val) && $("#regForm").validate().element('#international_PhoneNumber_countrycode'))
                otpVerification.sendOTP(val);
        });

        $(document).on('click', '#reenter-phone', function () {
            $('#international_PhoneNumber_countrycode').removeAttr('readonly');
            $('#otp_code').attr('disabled', true);
            $('#sn-otp-resend').html(``).hide();
            $(this).parent().hide();
        });

        //otp verification ends
        */

    $(".next").click(function () {
      var e = $("#regForm");
      e.validate({
        ignore: ":hidden:not(.always-validate)",
        showErrors: function (e, t) {
          $("#AllErrors").html("Please correct the highlighted error(s)."),
            0 == this.numberOfInvalids()
              ? ($("#AllErrors").hide(), $(".next").prop("disabled", !1))
              : ($("#AllErrors").show(), $(".next").prop("disabled", !0)),
            this.defaultShowErrors();
        },
        highlight: function (e, t, s, o, i) {
          $(e).closest(".form-group").addClass("has-error");
        },
        unhighlight: function (e, t, s, o, i) {
          $(e).closest(".form-group").removeClass("has-error"),
            $(e).closest(".form-group").addClass("no-error");
        },
        rules: {
          SingleLine1: { required: !0, minlength: 3 },
          SingleLine2: { required: !0, minlength: 3 },
          Date: { required: !0 },
          Radio: { required: !0 },
          MultiLine: { required: !0, minlength: 5 },
          SingleLine: { required: !0, minlength: 2 },
          SingleLine3: { required: !0, minlength: 2 },
          PhoneNumber_countrycode: { required: !0, minlength: 6 },
          DecisionBox: { required: !0 },
          Email: { required: !0, minlength: 3 },
        },
        messages: {
          SingleLine1: "Enter your departure address",
          SingleLine2: "Enter your destination address",
          SingleLine: "Enter your first name",
          SingleLine3: "Enter your last name",
          Email: "Enter valid email",
          DecisionBox: "Please accept this to get an estimate",
          PhoneNumber_countrycode: "Enter valid phone number",
        },
      }),
        !0 === e.valid() &&
          ($("#aboutmove").is(":visible")
            ? ((current_fs = $("#aboutmove")),
              (next_fs = $("#moving-date")),
              $("#tab2").show(),
              $("#tab1, #tab3, #tab4").hide(),
              $(".step2").addClass("active"),
              $(".step1, .step3, .step4").removeClass("active"))
            : $("#moving-date").is(":visible")
            ? ((current_fs = $("#moving-date")),
              (next_fs = $("#sizeofmove")),
              $("#tab3").show(),
              $("#tab1, #tab2, #tab4").hide(),
              $(".step3").addClass("active"),
              $(".step1, .step2, .step4").removeClass("active"))
            : $("#sizeofmove").is(":visible") &&
              ((current_fs = $("#sizeofmove")),
              (next_fs = $("#personal_information")),
              $("#tab4").show(),
              $("#tab1, #tab2, #tab3").hide(),
              $(".step4").addClass("active"),
              $(".step1, .step3, .step2").removeClass("active"),
              $(".terms").show()),
          next_fs.show(),
          current_fs.hide());
    }),
      $(".prevBtn").click(function () {
        $("#moving-date").is(":visible")
          ? ((current_fs = $("#moving-date")),
            (next_fs = $("#aboutmove")),
            $("#tab1").show(),
            $("#tab2, #tab3, #tab4").hide(),
            $(".step1").addClass("active"),
            $(".step2, .step3, .step4").removeClass("active"),
            $(".terms").hide())
          : $("#sizeofmove").is(":visible")
          ? ((current_fs = $("#sizeofmove")),
            (next_fs = $("#moving-date")),
            $("#tab2").show(),
            $("#tab1, #tab3, #tab4").hide(),
            $(".step2").addClass("active"),
            $(".step1, .step3, .step4").removeClass("active"),
            $(".terms").hide())
          : $("#personal_information").is(":visible") &&
            ((current_fs = $("#personal_information")),
            (next_fs = $("#sizeofmove")),
            $("#tab3").show(),
            $("#tab1, #tab2, #tab4").hide(),
            $(".step3").addClass("active"),
            $(".step1, .step2, .step4").removeClass("active"),
            $(".terms").hide()),
          next_fs.show(),
          current_fs.hide();
      }),
      /**  Commentted out for now as per advise of digital - x2per **/

      $("#regForm").submit(function () {
        var e = $("#regForm");

        // if (!isOTPVerified) {
        //     $('#sn-phone-msg').text(`Please verify your phone no.`).css('color', '#ff0000').show();

        //     setTimeout(() => {
        //         $('#sn-phone-msg').text(``).hide();
        //     }, 4000);

        //     return false;
        // }

        e.validate(),
          !0 === e.valid() &&
            $("#regForm .btn.btn-success").attr("disabled", !0);
      });
  }),
  $('input[type="text"]').focus(function () {
    $(this).addClass("focus");
  }),
  $('input[type="text"]').blur(function () {
    $(this).removeClass("focus");
  }),
  $(".zf-radioChoice").click(function () {
    $(".zf-radioChoice").removeClass("checked"), $(this).addClass("checked");
  }),
  $("input:checked").parent().addClass("checked"),
  $(".next").on("click", function () {
    $(window).scrollTop(0);
  }),
  $("#DecisionBox").click(function () {
    1 == $(this).prop("checked")
      ? $("#DecisionBox1").prop("checked", !1)
      : 0 == $(this).prop("checked") && $("#DecisionBox1").prop("checked", !0);
  });