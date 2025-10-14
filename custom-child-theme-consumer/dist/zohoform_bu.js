 // $Id: $


/*function validate() {
	
	var valid = true;
	valid = checkEmpty($("#SingleLine1"));
	valid = checkEmpty($("#SingleLine7"));
	valid = checkEmpty($(".Dropdown"));
	valid = checkEmpty($(".SingleLine"));

	valid = checkEmpty($(".Dropdown1"));
		valid = checkEmpty($(".SingleLine3"));
	valid = checkEmpty($(".Dropdown3"));
	valid = checkEmpty($(".Date"));
		valid = checkEmpty($(".PhoneNumber_countrycode"));



	valid = valid && checkEmail($("#email"));
	
    $("#nextBtn, #submit_moving_abroad").attr("disabled",true);
	if(valid) {
		$("#submit_moving_abroad, #nextBtn").attr("disabled",false);
	}	
}
function checkEmpty(obj) {
	var SingleLine1 = $(obj).attr("SingleLine1");
	var SingleLine7 = $(obj).attr("SingleLine7");
	var Dropdown = $(obj).attr("Dropdown");
	var SingleLine = $(obj).attr("SingleLine");
	var Dropdown1 = $(obj).attr("Dropdown1");
	var SingleLine3 = $(obj).attr("SingleLine3");
	var Dropdown3 = $(obj).attr("Dropdown3");
	var Date1 = $(obj).attr("Date");
	var PhoneNumber_countrycode = $(obj).attr("PhoneNumber_countrycode");

	$("."+name+"-validation").html("");	
	$(obj).css("border","");
	if($(obj).val() == "") {
		return false;
	}
	
	return true;	
}
function checkEmail(obj) {
	var result = true;
	
	var SingleLine1 = $(obj).attr("SingleLine1");
	var SingleLine7 = $(obj).attr("SingleLine7");
	var Dropdown = $(obj).attr("Dropdown");
	var SingleLine = $(obj).attr("SingleLine");
	var Dropdown1 = $(obj).attr("Dropdown1");
	var SingleLine3 = $(obj).attr("SingleLine3");
	var Dropdown3 = $(obj).attr("Dropdown3");
	var Date1 = $(obj).attr("Date");
	var PhoneNumber_countrycode = $(obj).attr("PhoneNumber_countrycode");

	//$("."+name+"-validation").html("");	
	
	result = checkEmpty(obj);
	
	if(!result) {
		console.log("Please correct the highlighted error(s)");


		return false;

	}

	
	return result;	
}*/

	/*var countries=["USA","Australia","Canada"];
	$("#countfrom").change(function(){
	    var selectedVal = $(this).val();
	    if(countries.indexOf(selectedVal) != -1){

	        $("#stfrom").show();
	    }
	    else {
	        $("#stfrom").hide();
	    }
	});

	var countries=["United States","Australia","Canada"];
	$("#countto").change(function(){
	    var selectedVal = $(this).val();
	    if(countries.indexOf(selectedVal) != -1){

	        $("#stto").show();
	    }
	    else {
	        $("#stto").hide();
	    }
	});

	var countries=["United States","Australia","Canada"];
	$("#countfrom_dom").change(function(){
	    var selectedVal = $(this).val();
	    if(countries.indexOf(selectedVal) != -1){

	        $("#stfrom_dom").show();
	        $("#stto_dom").show();
	    }
	    else {
	         $("#stfrom_dom").hide();
	        $("#stto_dom").hide();
	    }
	});*/

	//old form validation

	/*$(document).ready(function() {

    $('#submit_button, #submit_moving_abroad').click(function() {
        ValidateForm();
    });

	});

	function ValidateForm() {

	    var formInvalid = false;
	    $("#form input,#form select").each(function() {
	        if ($(this).val() === '') {
	            formInvalid = true;
	        }
	    });

	    if (formInvalid)
	    $('#SingleLine').attr('placeholder', 'Please enter valid City');
	    $('#SingleLine3').attr('placeholder', 'Please enter valid City');
	    $("#movedate,#movedate2").attr('placeholder', 'Please select valid date');
	    $('#SingleLine6').attr('placeholder', 'Please enter First name');
	    $('#SingleLine7').attr('placeholder', 'Please enter Last name');
	    $('#email').attr('placeholder', 'Please enter valid email address');
	    $('#international_PhoneNumber_countrycode').attr('placeholder', 'Please enter number');
	} */

	//states heizel to do

	/*$('#row1_layout_options').val('Canada').change(function() {
	   $('.content').hide();
	   $('#row1_col1_' + $(this).val()).show();
	   if ($(this).val() == 'Canada') {
	   		 $('#frmstate2').show();
            $('#frmstate2').attr('required',true);

	   } else {
            $('#frmstate2').prop('required',false);
            $('.content').hide();
        }
	   //$('#row1_col2_' + $(this).val()).show();
	}).change(); 


	$('#row1_layout_options').val('Australia').change(function() {
	   $('.content').hide();
	   $('#row1_col1_' + $(this).val()).show();
	   if ($(this).val() == 'Australia') {
	   		 $('#frmstate1').show();
            $('#frmstate1').attr('required',true);

	   } else {
            $('#frmstate1').prop('required',false);
            $('.content').hide();
        }
	   //$('#row1_col2_' + $(this).val()).show();
	}).change(); 

	$('#row2_layout_options').val('Canada').change(function() {
	   $('.content2').hide();
	   $('#row2_col1_' + $(this).val()).show();
	   if ($(this).val() == 'Canada') {
	   		 $('#tostate2').show();
            $('#tostate2').attr('required',true);

	   } else {
            $('#tostate2').prop('required',false);
            $('.content2').hide();
        }
	   //$('#row1_col2_' + $(this).val()).show();
	}).change(); 

	$('#row2_layout_options').val('Australia').change(function() {
	   $('.content2').hide();
	   $('#row2_col1_' + $(this).val()).show();
	   if ($(this).val() == 'Australia') {
	   		 $('#tostate1').show();
            $('#tostate1').attr('required',true);

	   } else {
            $("#tostate1").prop('required',false);
            $('.content2').hide();
        }
	   //$('#row1_col2_' + $(this).val()).show();
	}).change(); */



	//states
$(document).ready(function(){

	$('#row1_layout_options').change(function() {
	   $('.content').hide();
	   $('#row1_col1_' + $(this).val()).show();
	  $('#row1_col2_' + $(this).val()).show();
	   if ($(this).val() == 'Canada') {
            $('#frmstate2').show();
            $('#frmstate2').attr('required',true);
            $('#tostate2').attr('required',true);
        } else  if ($(this).val() == 'Australia') {
        	$('#frmstate1').show();
            $('#frmstate1').attr('required',true);
			$('#tostate1').attr('required',true);

        } else {
            $("#frmstate1, #frmstate2, #tostate2, #tostate1").prop('required',false);
            $('.content').hide();
        }

	}).change(); 

	$('#row2_layout_options').change(function() {
	   $('.content2').hide();
	   $('#row2_col1_' + $(this).val()).show();
	  // $('#row1_col2_' + $(this).val()).show();
	   if ($(this).val() == 'Canada') {
            $('#tostate2').show();
            $('#tostate2').attr('required',true);
        } else  if ($(this).val() == 'Australia') {
        	$('#tostate1').show();
            $('#tostate1').attr('required',true);
        } else {
            $("#tostate1, #tostate2").prop('required',false);
            $('.content2').hide();
        }
	}).change(); 

	$('#row1_layout_options').change(function() {
	  $("content3").hide();
	   $('#row1_col1_United_States').show();
	 	$('#row1_col2_United_States').show();
	   if ($(this).val() == 'United States') {
            $('#frmstate3').show();
            $('#frmstate3').attr('required',true);
            $('#tostate3').attr('required',true);

        } else {
            $("#frmstate3, #tostate3").prop('required',false);
            $(".content3").hide();
        }

	}).change(); 

	$('#row2_layout_options').change(function() {
	   $('.content3a').hide();
	   $('#row2_col1_United_States').show();
	  // $('#row1_col2_' + $(this).val()).show();
	   if ($(this).val() == 'United States') {
            $('#tostate3').show();
            $('#tostate3').attr('required',true);
        } else {
            $("#tostate3, #tostate3").prop('required',false);
            $('.content3a').hide();
        }
	}).change(); 





	/*var countries=["United States"];
	  $(".content3_dom,.content3a_dom").hide();
	$("#row1_layout_options").change(function(){
	    var selectedVal = $(this).val();
	    if(countries.indexOf(selectedVal) != -1){

	        $(".content3_dom, .content3a_dom").show();
	        $("#frmstate3, #tostate3").attr('required',true);

	    }
	    else {
	         $(".content3_dom, .content3a_dom").hide();
	        $("#frmstate3, #tostate3").attr('required',false);

	    }
	});

	var countries=["United States"];
	  $(".content3").hide();
	$("#row1_layout_options").change(function(){
	    var selectedVal = $(this).val();
	    if(countries.indexOf(selectedVal) != -1){

	        $(".content3").show();
	        $('#frmstate3').attr('required',true);

	    }
	    else {
	         $(".content3").hide();
	        $('#frmstate3').attr('required',false);

	    }
	});

	var countries=["United States"];
	 $(".content3a").hide();
	$("#row2_layout_options").change(function(){
	    var selectedVal = $(this).val();
	    if(countries.indexOf(selectedVal) != -1){

	        $(".content3a").show();
	        $('#tostate3').attr('required',true);

	    }
	    else {
	         $(".content3a").hide();
	        $('#tostate3').attr('required',false);

	    }
	});*/
}); 

	//homepage
	$(function () {
        $("#squaredOne").click(function () {
            if ($(this).is(":checked")) {
                $("#move_domestic").show();
                $("#move_abroad").hide();
            } else {
                $("#move_domestic").hide();
                $("#move_abroad").show();
            }
        });
    });

    //prefill

	$('#formprefill').submit(function() {
	    if ($.trim($("#mandatory1").val()) === "" || $.trim($("#mandatory2").val()) === "" || $.trim($("#movedate3").val()) === "" || $.trim($("#mandatory4").val()) === "") {
	        alert('Please complete the form');
	        return false;
	    }

	});

	//toggle

	/*$('.expand').click(function () {
    $('.content').slideToggle('3000',"swing", function () {
        if ($(this).is(':visible')){
        	          $('#button_expanded').show();
        	          $('.expand').hide();
         }
    });
	});*/
//multiple forms

/* multiple steps original

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Get estimate";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";

 }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
end of comment for multiple steps */
$(function () {
  $(".zf-radioBtnType, .Dropdown1").change(function() {
    var val = $(this).val();
    if(val === "A few boxes") {
        $(".fewbox_sp").show();
    }
    else {
        $(".fewbox_sp").hide();
    }
  });
});

/* multiple steps new */
$(document).ready(function(){

			$(".next").click(function(){
				var form = $("#regForm");
				form.validate({

					ignore: ":hidden:not(.always-validate)",

					 showErrors: function(errorMap, errorList) {
				   $("#AllErrors").html("Please correct the highlighted error(s).");
				   		if(this.numberOfInvalids() == 0){
 							$("#AllErrors").hide();
 							$(".next").prop( "disabled", false );
            			} else{
				   			$("#AllErrors").show();
				   			$(".next").prop( "disabled", true );

				   		}

				    this.defaultShowErrors();
			    
				  },

					highlight: function(element, errorClass, validClass, errorMap, errorList) {
						$(element).closest('.form-group').addClass("has-error");

					},
					unhighlight: function(element, errorClass, validClass,  errorMap, errorList) {
						$(element).closest('.form-group').removeClass("has-error");
						$(element).closest('.form-group').addClass("no-error");
					},
					rules: {
						SingleLine1: {
							required: true,
							minlength: 3,
						},
						SingleLine2 : {
							required: true,
							minlength: 3,
						},
						
						Date : {
							required: true,
						},
						Radio : {
							required: true,
						},
						MultiLine: {
							required: true,
							minlength: 5,
						},
						SingleLine:{
							required: true,
							minlength: 2,
						},
						SingleLine3: {
							required: true,
							minlength: 2,
						},
							PhoneNumber_countrycode: {
							required: true,
							minlength: 6,
						},
						Email: {
							required: true,
							minlength: 3,
						},
						
					},
					messages:{
						SingleLine: "Enter your first name",
						SingleLine3: "Enter your last name",
						Email: "Enter valid email",
						PhoneNumber_countrycode: "Enter valid phone number",

					}
					
				});
		
				if (form.valid() === true){
					if ($('#aboutmove').is(":visible")){
						current_fs = $('#aboutmove');
						next_fs = $('#moving-date');
						$('#tab2').show();
						$("#tab1, #tab3, #tab4").hide();
						$('.step2').addClass('active');
						$(".step1, .step3, .step4").removeClass('active');
					}else if($('#moving-date').is(":visible")){
						current_fs = $('#moving-date');
						next_fs = $('#sizeofmove');
						$('#tab3').show();
						$("#tab1, #tab2, #tab4").hide();
						$('.step3').addClass('active');
						$(".step1, .step2, .step4").removeClass('active');
					}
					else if($('#sizeofmove').is(":visible")){

						current_fs = $('#sizeofmove');
						next_fs = $('#personal_information');
						$('#tab4').show();
						$("#tab1, #tab2, #tab3").hide();
						$('.step4').addClass('active');
						$(".step1, .step3, .step2").removeClass('active');
						$('.terms').show();
					}
					
					next_fs.show();
					current_fs.hide();
				}

			});

			$('.prevBtn').click(function(){
				if($('#moving-date').is(":visible")){
					current_fs = $('#moving-date');
					next_fs = $('#aboutmove');
					$('#tab1').show();
					$("#tab2, #tab3, #tab4").hide();
					$('.step1').addClass('active');
					$(".step2, .step3, .step4").removeClass('active');
					$('.terms').hide();
				}else if ($('#sizeofmove').is(":visible")){
					current_fs = $('#sizeofmove');
					next_fs = $('#moving-date');
					$('#tab2').show();
					$("#tab1, #tab3, #tab4").hide();
					$('.step2').addClass('active');
					$(".step1, .step3, .step4").removeClass('active');
										$('.terms').hide();

				}
				else if ($('#personal_information').is(":visible")){
					current_fs = $('#personal_information');
					next_fs = $('#sizeofmove');
					$('#tab3').show();
					$("#tab1, #tab2, #tab4").hide();
					$('.step3').addClass('active');
					$(".step1, .step2, .step4").removeClass('active');
										$('.terms').hide();

				}
				next_fs.show();
				current_fs.hide();
			});

			$('#regForm').submit(function(){
				var form = $("#regForm");
				form.validate();
				if (form.valid() === true){
					$('#regForm .btn.btn-success'). attr("disabled", true);
				}
			});
		});

$('input[type="text"]').focus(function() {
	$(this).addClass("focus");
});

$('input[type="text"]').blur(function() {
	$(this).removeClass("focus");
});
 $('.zf-radioChoice').click(function () {
     $('.zf-radioChoice').removeClass('checked');
     $(this).addClass('checked');
 });

$('input:checked').parent().addClass('checked');

$(".next").on("click", function() {
    $(window).scrollTop(0);
});

//pardot
$('#DecisionBox').click(function(){
            if($(this).prop("checked") == true){
                $("#DecisionBox1").prop('checked', false);
            }
            else if($(this).prop("checked") == false){
                $("#DecisionBox1").prop('checked', true);
            }
});

    
