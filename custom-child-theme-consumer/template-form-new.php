<?php
/*
Template Name: Direct Form Pardot
Template Post Type: page
*/

get_header();?>

<div class="container">
<h1 style="margin-bottom:40px;margin-top:-20px;"><?= get_the_title();?></h1>
	<?php if ( has_post_thumbnail()) :?>
		<div class="featured-image" style="margin-bottom:40px;">
			<?php the_post_thumbnail('full');?>
		</div>
	<?php endif;?>
    
	<?php if(isset($_GET['successful'])):?>
	   
		<div class="alert alert-success" role="alert" style='margin-bottom:40px'>
			<?= get_field('confirmation_text');?>
		</div>
	<?php else:?>
		<?= get_the_content();?>
    	<div class="form-container" style="margin-bottom:4rem;">
    		
    		<form action="<?= get_field('form_action');?>" id="the-form"  method="POST">
    			<div class="input-group">
    				<label for="FN">
    					First name <span class="required">*</span>
    				</label>
    				<input data-label="First Name" onkeydown="return /^[A-Za-z\s]*$/i.test(event.key)" type="text" name="FN" class="letter-only not-empty" >
    				<p class="error-msg"></p>
    			</div>
    			<div class="input-group">
    				<label for="LN">
    					Last name <span class="required">*</span>
    				</label>
    				<input data-label="Last Name" onkeydown="return /^[A-Za-z\s]*$/i.test(event.key)" type="text" name="LN" class="letter-only not-empty">
    				<p class="error-msg"></p>
    			</div>
    			<div class="input-group">
    				<label for="Company">
    					Company name <span class="required">*</span>
    				</label>
    				
    				<input data-label="Company Name" type="text" name="Company" class="not-empty" >
    				<p class="error-msg"></p>
    			</div>
    			<div class="input-group">
    				<label for="email">
    					Email <span class="required ">*</span>
    				</label>
    				<input data-label="Email" type="email" name="email" class="email-only not-empty" >
    				<p class="error-msg"></p>
    			</div>
    			<div class="input-group">
    				<label for="Phone">
    					Phone
    				</label>
    				<input data-label="Telephone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" type="tel" name="Phone" class="number-only ">
    				<p class="error-msg"></p>
    			</div>
    			<div class="input-group" style='margin-bottom:40px'>
    				<input class="submit-button" type="submit" value="<?= get_field('submit_label')?:'Register';?>">
    			</div>
    		</form>
    	</div>
	<?php endif;?>
</div>
<style>
	p.error-msg{
		margin-top: 0.5rem;
		font-size: 80%;
		font-style: italic;
		color: red;
	}
	.form-container{
		max-width: 500px;
		margin: 5rem auto 1rem;
	}
	@media only screen and (max-width: 500px) {
		.form-container{
			margin-left: 1rem;
			margin-right: 1rem;
		}
	}
	.form-container form .input-group input,.form-container form .input-group select{
		background-color: #fafafa;
		border: solid 2px #dae2e7 !important;
		margin-right: 10px;
		font-size: 16px;
		color: #333;
		font-family: HelveticaNeue;
		font-weight: bold;
		padding: 15px 10px;
	}
	.form-container form .input-group input.error-empty,.form-container form .input-group select.error-empty{
		outline: 1px solid red;
	}
	.form-container form .input-group .submit-button{
		background-color: #000;
		color: #ffffff;
		padding: 13px 15px;
		font-size: 20px !important;
		font-family: HelveticaNeue;
		font-weight: bold;
		font-style: normal;
		font-stretch: normal;
		line-height: 1.5;
		letter-spacing: normal;
		text-align: center;
	}
	.form-container form .input-group .required{
		color:red;
	}
	.form-container form .input-group{
		display:flex;
		flex-direction: column;
		margin-bottom: 1rem;
	}
	.form-container form .input-group.horiz{
		flex-direction: row;
		align-items: flex-start;
	}
	.form-container form .input-group.horiz label{
		font-size: 80%;
	}
	.container {
		max-width: 900px !important;
	}

</style>
<script>
	const form = document.querySelector('#the-form');
	const firstName = form.querySelector('[name="FN"]');
	const lastName = form.querySelector('[name="LN"]');
	const email = form.querySelector('[name="email"]');
	const phone = form.querySelector('[name="Phone"]');
	//const position = form.querySelector('[name="tfa_5"]');
	const company = form.querySelector('[name="tfa_6"]');
	// const country = form.querySelector('[name="tfa_1006"]');
	const submit = form.querySelector('.submit-button');
	// const tfa_1259 = form.querySelector('#tfa_1259')


	email.addEventListener('blur',(e)=>{
		if(!ValidateEmail(email)){
			email.classList.add('error-empty')
			email.nextElementSibling.innerHTML=email.dataset.label + ' must be valid format!';
		}
	})
	form.querySelectorAll('.not-empty').forEach((item)=>{
		console.log(item)
		item.addEventListener('blur',(i)=>{
			
			if(item.value != '') {
				item.classList.remove('error-empty');
				item.nextElementSibling.innerHTML='';
			}
			else {
				item.classList.add('error-empty')
				item.nextElementSibling.innerHTML=item.dataset.label + ' must not be empty!';
				
			}

		})
	})

	form.querySelectorAll('.letter-only').forEach((item)=>{
		item.addEventListener('paste',function(e){
  			e.preventDefault();
    		let paste = (e.clipboardData || window.clipboardData).getData('text');
			if(/^[a-zA-Z]+$/.test(paste)){
			return true
			}
			return false
		})
	})

	form.querySelectorAll('input,select').forEach((item)=>{
		item.addEventListener('focus',(i)=>{
			//item.nextElementSibling.classList.remove('show')
			item.focus();
		})
	})
	form.querySelectorAll('input,select').forEach((item)=>{
		item.addEventListener('keydown',(i)=>{
			item.classList.remove('error-empty');
			item.nextElementSibling.innerHTML =''
		})
	})
	submit.addEventListener('click',(event)=>{
		event.preventDefault();
		let ret = true;
		form.querySelectorAll('.not-empty').forEach((item)=>{
			if(item.value == ''){
				item.classList.add('error-empty')
				item.nextElementSibling.innerHTML=item.dataset.label + ' must not be empty!';
				ret = false;
			}
			
		})
		if(email.value!='' && !ValidateEmail(email)){
				email.classList.add('error-empty')
				email.nextElementSibling.innerHTML=email.dataset.label + ' must be valid format!';
				ret = false;
			}
		if (ret == true) form.submit();
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
<?php get_footer(); ?>