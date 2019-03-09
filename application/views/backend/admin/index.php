<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Edit KMUTT XXX</title>
	<?php $this->load->view('frontend/template/headtag_frontend');?>
</head>

<body>
	<div class="wrap-preload">
		<div class="box">
			<img src="<?=base_url();?>assets/frontend/dist/styles/image/final-logo-big.png" alt="final-logo.png">

		</div>

	</div>

	<div class="shape">

	</div>

	<div class="iso">
		<img src="<?=base_url();?>assets/frontend/dist/styles/image/iso2.png" alt="">
	</div>

	<div class="iso1">
		<img src="<?=base_url();?>assets/frontend/dist/styles/image/iso6.png" alt="">
	</div>

	<div class="iso2">
		<img src="<?=base_url();?>assets/frontend/dist/styles/image/iso7.png" alt="">
	</div>


	<section class="login">

		<section class="userr">
			<div class="user_options-container">
				<div class="user_options-text">
					<div class="user_options-registered">
						<h2 class="user_registered-title">.:: For Admin ::.</h2>
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
$attribute = array('id' => 'login_form', 'class' => 'forms_form');
$hidden = array('status' => 'check');
?>
						<?=form_open('login/index', $attribute, $hidden);?>
						<fieldset class="forms_fieldset">
							<div class="forms_field">
								<input type="text" name="studentid" placeholder="admin" class="forms_field-input" value="<?php if(!empty($studentid)) { echo $studentid; } ?>" />
							</div>
							<div class="forms_field">
								<input type="password" name="password" placeholder="Password" class="forms_field-input" value="<?php if(!empty($password)) { echo $password; } ?>" />
							</div>
							<?php if (isset($login_falses) && !empty($login_falses)) {
    echo $login_falses;
}?>
						</fieldset>
						<div class="forms_buttons">
							<!-- <button type="button" class="forms_buttons-forgot">Forgot password?</button> -->
							<input type="submit" value="Log In" class="forms_buttons-action">
						</div>
						<?=form_close();?>
					</div>

				</div>
			</div>
		</section>
	</section>

	<?php $this->load->view('frontend/template/footer');?>
	<?php $this->load->view('frontend/template/javascript_frontend');?>



</body>

</html>
