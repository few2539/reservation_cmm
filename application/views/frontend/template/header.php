<section class="header">
	<div class="container">
		<div class="row">
			<div class="shape"> </div>
			<div class="box-img-regis">
				<!-- <img src="<?=base_url();?>assets/frontend/dist/styles/image/final-logo.png" alt=""> -->
				<img src="<?=base_url();?>assets/frontend/dist/styles/image/final-logo-big.png" alt="">
			</div>

			<div class="col-xs-12 name-login">
				
				<p>
					<?= $this->session->userdata('user_fname'); ?>
					<?= $this->session->userdata('user_lname'); ?>
				</p>
				<p>
			
					<?= $this->session->userdata('mail'); ?>
				</p>
				<p><?= $this->session->userdata('username'); ?></p>	
				<p>	<?= $this->session->userdata('cn'); ?> </p>
				<a href="<?=site_url('login');?> "type="button" style="-webkit-appearance: inherit;" class="btn btn-primary">Logout</a>
				<!-- <a href="<?=site_url('auth/logout');?>">Logoutldap</a> -->
			</div>
		</div>
</section>


