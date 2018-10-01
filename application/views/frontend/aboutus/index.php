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
	<section class="course-env">
		

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

		<div class="interest-topic">
			<div class="container">
				<div class="row">
					<div class="left">
						<div class="box-pic">
							<img src="<?=base_url();?>assets/frontend/dist/styles/image/hero.jpg" alt="">
						</div>
					</div>
					<div class="right">
						<div class="box-text">
							<div class="topic">
								<div class="title">

									<div class="sub-topic">

										<h3>Lorem ipsum, dolor sit amet consectetur</h3>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="detail-course">
			<div class="container">
				<div class="row">
					<div class="left">
						<div class="box">
							<div class="title">
								<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
							</div>
							<div class="subscription">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis provident blanditiis possimus id eligendi
									fugiat
									perferendis dolore culpa repudiandae eaque, adipisci odit qui necessitatibus perspiciatis voluptatum, rem,
									esse
									tenetur debitis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, quidem illum neque rem
									mollitia aliquid ad a. Officiis soluta dolore, amet quia voluptas incidunt praesentium nemo voluptate
									excepturi,
									magnam nobis!</p>
							</div>
							<div class="title">
								<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
							</div>
							<div class="subscription">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis provident blanditiis possimus id eligendi
									fugiat
									perferendis dolore culpa repudiandae eaque, adipisci odit qui necessitatibus perspiciatis voluptatum, rem,
									esse
									tenetur debitis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, quidem illum neque rem
									mollitia aliquid ad a. Officiis soluta dolore, amet quia voluptas incidunt praesentium nemo voluptate
									excepturi,
									magnam nobis!</p>
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
