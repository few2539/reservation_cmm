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



<body>
	<!-- <?php $this->load->view('frontend/template/header'); ?> -->

	<section class="login">
		<section class="user">
			<div class="user_options-container">
				<div class="user_options-text">
					<div class="user_options-registered">
						<h2 class="user_registered-title">Welcome</h2>
                        <p class="user_registered-text upper-font">reservation system(CMM)</p>
                        <p class="user_registered-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore excepturi, blanditiis illum saepe ducimus, aut libero, nostrum consequatur velit temporibus totam earum eligendi at quia sapiente ipsam accusamus iste adipisci?</p>
						<!-- <button class="user_registered-login" id="login-button">Login</button> -->
					</div>
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
									<input type="email" name="email" placeholder="Email" class="forms_field-input" value="<?=$email?>" required autofocus />
								</div>
								<div class="forms_field">
									<input type="password" name="password" placeholder="Password" class="forms_field-input" value="<?=$password?>" required />
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

</html>
