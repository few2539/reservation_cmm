<section class="header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 name-login">
                <h3 style="font-weight:700;">Login</h3>
			    <p><?= $this->session->userdata('user_fname'); ?> <?= $this->session->userdata('user_lname'); ?></p>
				<p><?= $this->session->userdata('username'); ?> <?= $this->session->userdata('cn'); ?></p>
				<a href="<?=site_url('login/logout');?>">Logout</a>
				<a href="<?=site_url('auth/logout');?>">Logoutldap</a>
			</div>
		</div>
</section>
