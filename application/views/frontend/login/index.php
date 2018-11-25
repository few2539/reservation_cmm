<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?=$title_page;?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<?php $this->load->view('frontend/template/headtag_frontend');?>

</head>

<style>

</style>



<body>
	<!-- <?php $this->load->view('frontend/template/header'); ?> -->

	
			<div class="shape">


			</div>
	


	<section class="login">
		<section class="user">
			<div class="user_options-container">
				<div class="user_options-text">
					<div class="user_options-registered">
						<h2 class="user_registered-title">.:: WELCOME ::.</h2>
						<div class="box-img-regis">
							<!-- <img src="<?=base_url();?>assets/frontend/dist/styles/image/final-logo.png" alt=""> -->
							<img src="<?=base_url();?>assets/frontend/dist/styles/image/final-logo-big.png" alt="">
						</div>

						<p class="user_registered-text exceed">Device reservation system</p>
						<p class="user_registered-text">Department of Computer And Information Technology</p>
						<p class="user_registered-text">KMUTT</p>
						<!-- <button class="user_registered-login" id="login-button">Login</button> -->
					</div>
				</div>

				<div class="user_options-text-mobile">

					<div class="box-img-regis">
						<img src="<?=base_url();?>assets/frontend/dist/styles/image/final-logo.png" alt="">
					</div>

					<p class="user_registered-text">Device reservation system</p>
					<p class="user_registered-text">Department of Computer And Information Technology</p>
					<p class="user_registered-text">KMUTT</p>
					<!-- <button class="user_registered-login" id="login-button">Login</button> -->

				</div>


				<div class="user_options-forms" id="user_options-forms">
					<div class="user_forms-login">
						<h2 class="forms_title">Login</h2>
						<?php
							$attribute = array('id'=>'login_form','class'=>'forms_form');
							$hidden = array('status' => 'check');
						?>
						<?= form_open('login/index',$attribute,$hidden); ?>
						<fieldset class="forms_fieldset">
							<div class="forms_field">
								<input type="text" name="email" placeholder="Email" class="forms_field-input" />
							</div>
							<div class="forms_field">
								<input type="password" name="password" placeholder="Password" class="forms_field-input" />
							</div>
						</fieldset>
						<div class="forms_buttons">
							<!-- <button type="button" class="forms_buttons-forgot">Forgot password?</button> -->
							<input type="submit" value="Log In" class="forms_buttons-action">
						</div>
						<?= form_close(); ?>
					</div>
					<!-- sign up condition -->
					<!-- <div class="user_forms-signup">
						<h2 class="forms_title">Sign Up</h2>
						<form class="forms_form">
							<fieldset class="forms_fieldset">
								<div class="forms_field">
									<input type="text" placeholder="Full Name" class="forms_field-input" required />
								</div>
								<div class="forms_field">
									<input type="email" placeholder="Email" class="forms_field-input" required />
								</div>
								<div class="forms_field">
									<input type="password" placeholder="Password" class="forms_field-input" required />
								</div>
							</fieldset>
							<div class="forms_buttons">
								<input type="submit" value="Sign up" class="forms_buttons-action">
							</div>
						</form>
                    </div> -->

				</div>
			</div>
		</section>
	</section>



	<?php $this->load->view('frontend/template/footer'); ?>
	<?php $this->load->view('frontend/template/javascript_frontend');?>

	<?php if($result == 'error'): ?>
	<script>
		alert("กรุณาตรวจสอบความถูกต้อง");

	</script>
	<?php endif; ?>
</body>


<script>
	/**
	 * Variables
	 */
	const signupButton = document.getElementById('signup-button'),
		loginButton = document.getElementById('login-button'),
		userForms = document.getElementById('user_options-forms')

	/**
	 * Add event listener to the "Sign Up" button
	 */
	signupButton.addEventListener('click', () => {
		userForms.classList.remove('bounceRight')
		userForms.classList.add('bounceLeft')
	}, false)

	/**
	 * Add event listener to the "Login" button
	 */
	loginButton.addEventListener('click', () => {
		userForms.classList.remove('bounceLeft')
		userForms.classList.add('bounceRight')
	}, false)

</script>
<script>
	$(document).ready(function () {

		var html = '';
		for (var i = 1; i <= 50; i++) {
			html += '<div class="shape-container--' + i + ' shape-animation"><div class="random-shape"></div></div>';
		}

		document.querySelector('.shape').innerHTML += html;

		var $allShapes = $("[class*='shape-container--']");


	});

</script>

</html>
