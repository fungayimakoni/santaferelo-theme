<?php
/*
Template Name: Simple Form
Template Post Type: page,mobility-webinar,mobility-survey,event-form
*/

get_header('form');?>
<div class="form-container">
	<h3><?= get_the_title();?></h3>
	<p><?= get_the_content();?></p>
	<?php if($form = get_field('form')):?>
		<?= do_shortcode('[contact-form-7 id='.$form.']');?>
		
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

</style>	
<?php get_footer(); ?> 