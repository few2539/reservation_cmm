<section class="header">
	<div class="container">
		<div class="row">
			<div class="shape"> </div>
			<div class="box-img-regis">
				<!-- <img src="<?=base_url();?>assets/frontend/dist/styles/image/final-logo.png" alt=""> -->
				<img src="<?=base_url();?>assets/frontend/dist/styles/image/final-logo-big.png" alt="">
			</div>

			<div class="col-xs-12 name-login">
				<button type="button" class="btn btn-primary"><a
						href="<?=site_url('product/index');?>"><i class="fa fa-fw fa-home" style="font-size:20px;"></i></a></button>
				<button type="button" class="btn btn-primary hiddent-on-phone" style="float:right";> <a
						href="<?=site_url('login/logoutldap');?>">Logout</a></button>
				<p>
					<?= $this->session->userdata('user_fname'); ?>
					<?= $this->session->userdata('user_lname'); ?>
				</p>
				<p>

					<?= $this->session->userdata('mail'); ?>
				</p>
				<p><?= $this->session->userdata('username'); ?></p>
				<p> <?= $this->session->userdata('cn'); ?> </p>
				<button type="button" class="btn btn-primary hiddent-on-pc"> <a
						href="<?=site_url('login/logoutldap');?>">Logout</a></button>


			</div>
		</div>
</section>
