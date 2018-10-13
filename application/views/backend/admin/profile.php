<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>admin profile</title>
	<?php $this->load->view('backend/template/headtag');?>

	<!-- Custom CSS -->
	<link href="<?php echo base_url();?>assets/frontend/dist/styles/css/main.css" rel="stylesheet">
</head>

<body>


	<?php $this->load->view('backend/template/header');?>
	<section class="profile-admin">

		<div class="container emp-profile">
			<form method="post">
				<div class="row">
					<div class="col-md-4">
						<div class="file ">
							<p> Change Photo</p>
							<input type="file" name="file" />
						</div>
						<div class="profile-img">
							<img src="https://f.ptcdn.info/774/048/000/ok6xjijtn8y1Rkk7wNs-o.jpg" alt="" />

						</div>

					</div>
					<div class="col-md-6">
						<div class="profile-head">
							<h5>
								แมว แมว แมว
							</h5>
							<h6>
								test test test
							</h6>
							<p class="proile-rating">Admin</p>
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
									 aria-selected="true">About</a>
								</li>
							</ul>
							<div class="col-md-12">
								<div class="tab-content profile-tab" id="myTabContent">
									<div class="iden" id="home" role="tabpanel" aria-labelledby="home-tab">
										<div class="row">
											<div class="col-md-6">
												<label>User Id</label>
											</div>
											<div class="col-md-6">
												<p>Lorem ipsum dolor sit amet, consectetur</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<label>Name</label>
											</div>
											<div class="col-md-6">
												<p>Lorem ipsum dolor sit amet, consecteturi</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<label>Email</label>
											</div>
											<div class="col-md-6">
												<p>Lorem ipsum dolor sit amet, consectetur@gmail.com</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<label>Phone</label>
											</div>
											<div class="col-md-6">
												<p>Lorem ipsum dolor sit amet, consectetur</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<label>Profession</label>
											</div>
											<div class="col-md-6">
												<p>Lorem ipsum dolor sit amet, consectetur</p>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="profile-work">
							<p>Other</p>
							<a href="">Website </a><br />
							<a href="">Website</a><br />
							<a href="">Website</a>
							<p>Work on</p>
							<a href="">Web Designer</a><br />
							<a href="">Web Developer</a><br />
							<a href="">WordPress</a><br />
							<a href="">WooCommerce</a><br />
							<a href="">PHP, .Net</a><br />
						</div>
					</div>
					<!-- <div class="col-md-8">
						<div class="tab-content profile-tab" id="myTabContent">
							<div class="iden" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="row">
									<div class="col-md-6">
										<label>User Id</label>
									</div>
									<div class="col-md-6">
										<p>Kshiti123</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Name</label>
									</div>
									<div class="col-md-6">
										<p>Kshiti Ghelani</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Email</label>
									</div>
									<div class="col-md-6">
										<p>kshitighelani@gmail.com</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Phone</label>
									</div>
									<div class="col-md-6">
										<p>123 456 7890</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Profession</label>
									</div>
									<div class="col-md-6">
										<p>Web Developer and Designer</p>
									</div>
								</div>
							</div>

						</div>
					</div> -->
				</div>
			</form>
		</div>

	</section>


	<?php $this->load->view('backend/template/javascript');?>
</body>

</html>
