<?php 
/**
 * Template Name: Careers Application Form
 */

 get_header();
?>
<style>
/*************************************
=common
*************************************/
/*************************************
=elements
*************************************/
div {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

a {
  text-decoration: none;
}

textarea {
  /* height: 130px; */
}

/*************************************
=objects
*************************************/
.vc-wrapper {
  width: 90%;
  max-width: 800px;
  margin: auto;
}

.vc-block-content h2, .vc-block-content h3 {
  margin-bottom: 20px;
}

.vc-block-content .title {
  line-height: 1.1;
  font-size: 32px;
}

.vc-no-bullets {
  list-style: none;
  margin-left: 0;
  padding-left: 0;
}

.vc-2-col {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  gap: 20px;
}

@media (max-width: 767px) {
  .vc-2-col {
    display: block !important;
  }
}

.vc-2-col > .vc-form-group {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.vc-display--none {
  display: none !important;
}

/*************************************
=margins
*************************************/
.mb-80 {
  margin-bottom: 80px;
}

/*************************************
=form controls
*************************************/
.vc-form-group {
  margin-bottom: 20px !important;
}

.vc-form-group .vc-label {
  display: block;
  margin-bottom: 10px;
  padding: 0;
}

.vc-form-group .vc-form-control {
  display: block;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  width: 100%;
  padding: 15px 15px;
  border: 1px solid #cecece;
  outline: 0;
}

.vc-form-group .vc-form-control:focus {
  border: 1px solid #105caa;
}

/*************************************
=button
*************************************/
.vc-btn, .vc-button {
  display: inline-block;
  min-width: 195px;
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: #ff0000;
  border: 2px solid #ff0000;
  text-align: center;
  font-weight: bold;
  color: #ffffff;
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.vc-btn:hover, .vc-button:hover {
  background-color: #cc0000;
  border-color: #cc0000;
  color: #ffffff;
}

.vc-btn.vc-btn--block, .vc-button.vc-btn--block {
  display: block;
  margin-bottom: 20px;
}

.vc-btn.vc-btn--sm, .vc-button.vc-btn--sm {
  min-width: 120px;
}

.vc-btnDefault {
  background-color: transparent;
  border-color: #353c41;
  color: #353c41;
}

.vc-btnDefault:hover {
  background-color: #cc0000;
  border-color: #cc0000;
  color: #ffffff;
}

.vc-btnOutline {
  background-color: transparent;
  border-color: #105caa;
  color: #105caa;
}

.vc-btnOutline:hover {
  background-color: #105caa;
  border-color: #105caa;
  color: #ffffff;
}

/*************************************
=text
*************************************/
.vc-title {
  margin: 0 0 20px;
  font-size: 25px;
  font-weight: bold;
}

.vc-text-center {
  text-align: center !important;
}

/*************************************
=plugins
*************************************/
/*************************************
=plugins cf7
*************************************/
.vc-form-group {
  margin-bottom: 20px;
}

.vc-form-group .vc-label {
  display: block;
  margin-bottom: 10px !important;
  padding: 0 5px !important;
}

.vc-form-group .wpcf7-form-control-wrap {
  display: block;
  width: 100%;
}

.vc-form-group .wpcf7-form-control {
  display: block !important;
  -webkit-box-sizing: border-box !important;
          box-sizing: border-box !important;
  width: 100% !important;
  padding: 15px !important;
  border: 1px solid #cecece !important;
  outline: 0 !important;
}

.vc-form-group .wpcf7-form-control:focus {
  border: 1px solid #105caa !important;
}

.wpcf7-submit {
  padding-top: 15px !important;
  padding-bottom: 15px !important;
  background-color: #ff0000 !important;
  border: 2px solid #ff0000 !important;
  text-align: center !important;
  color: #ffffff !important;
  -webkit-transition: all 0.3s ease-in-out 0s !important;
  transition: all 0.3s ease-in-out 0s !important;
}

.wpcf7-submit:hover {
  background-color: #cc0000 !important;
  border-color: #cc0000 !important;
  color: #ffffff !important;
}
span.wpcf7-not-valid-tip{
  display:block !important;
}
.container.career{
  padding-bottom: 30px;
}
span.require{
  color: red;
}
span.notice{
  font-size: 80%;
  color:darkgray;
  font-weight:300;
}
.error-msg{
  color: red;
}
.wpcf7-not-valid{
  background-color:transparent !important
}

/* input.wpcf7-not-valid:-webkit-autofill,
input.wpcf7-not-valid:autofill{
  background-color: #ffcfcf !important;
} */
/*# sourceMappingURL=vc-style.css.map */
</style>
<section class="main-layout inner-page-layout">
		<div class="container-fluid default-container">
			<div class="row">
			  <?php the_content();?>
		  </div>
		</div>
        <div class="container career">
            <div class="vc-wrapper">
              <div class="content">
                  
                 
              </div>
                <div role="form" class="wpcf7" id="wpcf7-f10869-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <form action="/corporate-relocation/career-application-form/#wpcf7-f10869-o1" method="post" class="wpcf7-form init" enctype="multipart/form-data" novalidate="novalidate" data-status="init" siq_id="autopick_3859" autocomplete="off">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="10869">
                            <input type="hidden" name="_wpcf7_version" value="5.5.6.1">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f10869-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                            <input type="hidden" name="career_id" value="<?= $_GET['cID'];?>">
                            <input type="hidden" name="job_title" value="<?= (isset($_GET['cID']) && !empty($_GET['cID'])) ? get_the_title($_GET['cID']):''?>">
                        </div>
                        <section class="vc-2-col">
                            <div class="vc-form-group">
                                <label class="vc-label" for="txtFirstName">First name</label>
                                <span class="wpcf7-form-control-wrap txtFirstName">
                                    <input type="text" name="txtFirstName" onkeydown="return /^[A-Za-z\s]*$/i.test(event.key)" value="" size="40" class="alpha-only wpcf7-form-control wpcf7-text vc-form-control" id="txtFirstName" aria-invalid="false" placeholder="John" autocomplete="off">
                                </span>
                            </div>
                            <div class="vc-form-group">
                                <label class="vc-label" for="txtLastName">Last name</label>
                                <span class="wpcf7-form-control-wrap txtLastName">
                                    <input type="text" name="txtLastName" onkeydown="return /^[A-Za-z\s]*$/i.test(event.key)" value="" size="40" class="alpha-only wpcf7-form-control wpcf7-text vc-form-control" id="txtLastName"  aria-invalid="false" placeholder="Doe" autocomplete="off">
                                </span>
                            </div>
                        </section>
                        <!-- <section class="vc-2-col"> -->
                            <div class="vc-form-group">
                                <label class="vc-label" for="txtEmail">Email <span class="require">*</span></label>
                                <span class="wpcf7-form-control-wrap txtEmail">
                                    <input type="email" name="txtEmail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email --wpcf7-validates-as-required wpcf7-validates-as-email vc-form-control" id="txtEmail" aria-required="true" aria-invalid="false" placeholder="your-email@mail.com" autocomplete="off">
                                </span>
                            </div>
                         
                        
                        <div class="vc-form-group">
                            <label class="vc-label" for="txtCoverLetter">Cover letter <span class="notice">(max of 2mb pdf or doc)</span></label>
                            <span class="wpcf7-form-control-wrap fileCL">
                                <input type="file" name="fileCL" size="40" class="wpcf7-form-control wpcf7-file --wpcf7-validates-as-required vc-form-control" id="fileCL" accept=".pdf,.doc,.docx" aria-required="true" aria-invalid="false" placeholder="Upload Cover Letter">
                            </span>
                        </div>
                        <div class="vc-form-group">
                            <label class="vc-label" for="fileCV">CV/Resume <span class="require">*</span> <span class="notice">(max of 2mb pdf or doc)</span></label>
                            <span class="wpcf7-form-control-wrap fileCV">
                                <input  type="file" name="fileCV" size="40" class="wpcf7-form-control wpcf7-file --wpcf7-validates-as-required vc-form-control" id="fileCV" accept=".pdf,.doc,.docx" aria-required="true" aria-invalid="false" placeholder="Upload CV/Resume">
                            </span>
                        </div>
                        <p>
                            <input type="submit" value="Submit" class="wpcf7-form-control has-spinner wpcf7-submit vc-btn" style="margin-top:1rem;">
                        </p>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
        </div>
</section>
<script>
  const alphaonly = document.querySelector('.alpha-only')
const email = document.querySelector('#txtEmail')
const fileCV = document.querySelector('#fileCV')
const fname = document.querySelector('#txtFirstName')
const lname = document.querySelector('#txtLastName')

  document.addEventListener( 'wpcf7submit', function( event ) {
    
  if ( '10869' == event.detail.contactFormId ) {
    let inputs = event.detail.inputs;
 
    for ( var i = 0; i < inputs.length; i++ ) {
      console.log(`name: ${inputs[i].name}`)
      
      if ( 'fileCV' == inputs[i].name ) {
        if(fileCV.files.length == 0){
          fileCV.classList.add('wpcf7-not-valid')
          let not_empty = document.createElement('div')
          not_empty.classList.add('error-msg')
          not_empty.textContent='Resume/CV is required'
          let sibling = fileCV.parentNode.parentNode
          if(!sibling.querySelector('.error-msg')) sibling.append(not_empty)
        }
        else{
          fileCV.classList.remove('wpcf7-not-valid')
        }
      }

      if ( 'txtEmail' == inputs[i].name ) {
        if(inputs[i].value ==''){
        
          email.classList.add('wpcf7-not-valid')
          
          let not_empty = document.createElement('div')
          not_empty.classList.add('error-msg')
          not_empty.textContent='Email is required'
          let sibling = email.parentNode.parentNode
          if(!sibling.querySelector('.error-msg')) sibling.append(not_empty)

        }else if(!ValidateEmail(email))
        {
          email.classList.add('wpcf7-not-valid')
          let not_empty = document.createElement('div')
          not_empty.classList.add('error-msg')
          not_empty.textContent='Incorrect email format.'
          let sibling = email.parentNode.parentNode
          if(!sibling.querySelector('.error-msg')) sibling.append(not_empty)
        }

        
      }
    }
  }
   
    
}, false );

fileCV.addEventListener('change',function(){
  const selectedFiles = [...fileCV.files];
  if(selectedFiles){
    fileCV.classList.remove('wpcf7-not-valid')
    let err_msg = fileCV.parentNode.parentNode.querySelector('.error-msg')
    if(err_msg) err_msg.remove()

  }
})

alphaonly.addEventListener('paste',function(e){
  e.preventDefault();
   
    let paste = (e.clipboardData || window.clipboardData).getData('text');
    if(/^[a-zA-Z]+$/.test(paste)){
      return true
    }
    return false
})

email.addEventListener('focus',function(e){
  email.select()
})

fname.addEventListener('focus',function(e){
  fname.select()
})

lname.addEventListener('focus',function(e){
  lname.select()
})

fname.addEventListener('keydown',function(e){
  fname.classList.remove('wpcf7-not-valid')
  fname.style.border = 'none !important;'
  let err_msg = fname.parentNode.parentNode.querySelector('.error-msg')

  if(err_msg) err_msg.remove()
})
lname.addEventListener('keydown',function(e){
  lname.classList.remove('wpcf7-not-valid')
  lname.style.border = 'none !important;'
  let err_msg = lname.parentNode.parentNode.querySelector('.error-msg')

  if(err_msg) err_msg.remove()
})
fname.addEventListener('blur',function(e){
  const not_empty = document.createElement('div')
  not_empty.classList.add('error-msg')
  not_empty.textContent='Invalid First name entered.'

  if(fname.value != ''){
    
    if(/^[a-zA-Z]+$/.test(fname.value) != true){
     
      //email.parentNode.appendChild('')
      fname.classList.add('wpcf7-not-valid')
      fname.style.borderWidth = '1px'
      fname.style.borderColor = 'red'
      fname.style.borderStyle = 'solid'
      console.log('fname should have a border')
      let sibling = fname.parentNode.parentNode
      if(!sibling.querySelector('.error-msg')) sibling.append(not_empty)
      return false
    }
  }
})
  lname.addEventListener('blur',function(e){
  const not_empty = document.createElement('div')
  not_empty.classList.add('error-msg')
  not_empty.textContent='Invalid Last name entered.'
 
  if(lname.value != ''){
    console.log('Last Name is not empty')
    if(/^[a-zA-Z]+$/.test(lname.value) != true){
      console.log(`Last Name value: ${/^[a-zA-Z]+$/.test(lname.value)}`)
      lname.classList.add('wpcf7-not-valid')
      lname.style.border = '1px solid red !important;'
      let sibling = lname.parentNode.parentNode
      if(!sibling.querySelector('.error-msg')) sibling.append(not_empty)
      return false
    }
  }
})
email.addEventListener('keydown',function(e){
  email.classList.remove('wpcf7-not-valid')
  
  let err_msg = email.parentNode.parentNode.querySelector('.error-msg')
  email.style.border = 'none !important;'
  if(err_msg) err_msg.remove()
})
email.addEventListener('blur',function(e){
  const not_empty = document.createElement('div')
  not_empty.classList.add('error-msg')
  not_empty.textContent='Email is required'
  if(email.value ==''){
    //email.parentNode.appendChild('')
    email.classList.add('wpcf7-not-valid')
    email.style.border = '1px solid red !important'
    let sibling = email.parentNode.parentNode
    if(!sibling.querySelector('.error-msg')) sibling.append(not_empty)
    return false
  }
  if(!ValidateEmail(email)){
    email.classList.add('wpcf7-not-valid')
    email.style.border = '1px solid red !important'
    not_empty.classList.add('error-msg')
    not_empty.textContent='Incorrect email format.'
    let sibling = email.parentNode.parentNode
    if(!sibling.querySelector('.error-msg')) sibling.append(not_empty)
    return false
  }
})
function ValidateEmail(input) {

  var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  if (input.value.match(validRegex)) {

    return true;

  } else {

  
    return false;

  }

}


</script>

<?php get_footer();?>