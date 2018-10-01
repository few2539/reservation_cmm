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
<?php $this->load->view('frontend/template/header'); ?>

	<section class="main-research">
		<div class="menu-infomation">
			<div class="container-info">
				<div class="row-info">
					<div class="main-menu">
						<a href="#">
							<span class="plus"></span>Lorem</a>
						<a href="#">
							<span class="plus"></span>Lorem</a>
						<a href="#">
							<span class="plus"></span>Lorem</a>
						<a href="#">
							<span class="plus"></span>Lorem</a>
					</div>
				</div>
			</div>
		</div>

		<div class="form-calendar">
			<!-- waiting lib -->
		</div>

		<div class="show-current">
			<div class="container">
				<div class="row">
					<div class="box-text">
						<ol class="page-current">
							<li>
								<a href="#">หน้าแรก</a>
							</li>
							<li class="active">internationalization</li>

						</ol>

					</div>
				</div>
			</div>
		</div>

		<div class="detail-course">
			<div class="container">
				<div class="row">
					<div class="left">

						<div class="description">
							<div class="box-text">
								<div class="head-title">
									<h4>รายการกิจกรรมทั้งหมด</h4>
								</div>
								<div class="topic">
									<div class="title">

										<div class="sub-topic">
											<a href="#">
												<p>Lorem ipsum, dolor sit amet consectetur</p><span class="arrow"></span>
											</a>
										</div>

										<div class="sub-topic">
											<a href="#">
												<p>Lorem ipsum, dolor sit amet consectetur</p><span class="arrow"></span>
											</a>
										</div>

										<div class="sub-topic">
											<a href="#">
												<p>Lorem ipsum, dolor sit amet consectetur</p><span class="arrow"></span>
											</a>
										</div>

										<div class="sub-topic">
											<a href="#">
												<p>Lorem ipsum, dolor sit amet consectetur</p><span class="arrow"></span>
											</a>
										</div>


									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="right">
						<div class="menu">
							<a href="#">
								<h4>Lorem ipsum, dolor sit amet </h4>
							</a>
							<a href="#">
								<h4>Lorem ipsum, dolor sit amet </h4>
							</a>
							<a href="#">
								<h4>Lorem ipsum, dolor sit amet </h4>
							</a>
							<a href="#">
								<h4>Lorem ipsum, dolor sit amet </h4>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<?php $this->load->view('frontend/template/footer'); ?>
	<?php $this->load->view('frontend/template/javascript_frontend');?>
</body>


</html>
