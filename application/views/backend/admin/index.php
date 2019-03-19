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
						<?=form_open('admin/index', $attribute, $hidden);?>
						<fieldset class="forms_fieldset">
							<div class="forms_field">
								<input type="text" name="username" placeholder="admin" class="forms_field-input" value="" />
							</div>
							<div class="forms_field">
								<input type="password" name="password" placeholder="Password" class="forms_field-input" value="" />
							</div>
							

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

<?php if(!empty($this->session->userdata('alert')) && ($this->session->userdata('alert') == 'show')): ?>
	<script type="text/javascript">
	  swal({
	    type: '<?=$this->session->userdata('alert_type');?>',
	    title: '<?=$this->session->userdata('alert_title');?>',
	      text: '<?=$this->session->userdata('alert_text');?>',
	      showConfirmButton: true,
	      width: 600,
	  });
	</script>
	<?php
	  $this->session->unset_userdata('alert');
	  $this->session->unset_userdata('alert_type');
	  $this->session->unset_userdata('alert_title');
	  $this->session->unset_userdata('alert_text');
	?>
	<?php endif; ?>

</body>

</html>
