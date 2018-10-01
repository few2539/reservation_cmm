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


	<?php $this->load->view('frontend/template/header');?>


	<section class="news">

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

		<div class="topic">
			<div class="title ">
				<h1 class="font-title">ข่าวสารเกี่ยวกับ ภาควิชาวิศวกรรมศาสตร์</h1>
			</div>
			<div class="see-all">
				<a href="#">
					<p>ดูทั้งหมด</p>
				</a>
			</div>
		</div>

		<div class="head-news">

			<div class="container">

				<a href="#">
					<div class="row">
						<div class="date">
							<p>06</p>
							<p>OCT</p>
						</div>
						<div class="title-news">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore culpa nam harum odit ipsam id mollitia a,
								explicabo</p>
						</div>
					</div>
				</a>
				<a href="#">
					<div class="row">
						<div class="date">
							<p>06</p>
							<p>OCT</p>
						</div>
						<div class="title-news">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore culpa nam harum odit ipsam id mollitia a,
								explicabo</p>
						</div>
					</div>
				</a>
				<a href="#">
					<div class="row">
						<div class="date">
							<p>06</p>
							<p>OCT</p>
						</div>
						<div class="title-news">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore culpa nam harum odit ipsam id mollitia a,
								explicabo</p>
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="new-env">
			<div class="new-left">
				<div class="row-title">
					<h2 class="font-title">ข่าวสาร ทางด้านสิ่งแวดล้อม</h2>
				</div>
				<div class="container">

					<a href="#">
						<div class="block-news">
							<div class="container">
								<div class="row">
									<div class="box-news">
										<div class="box-img">
											<img src="<?=base_url();?>assets/frontend/dist/styles/image/hero.jpg" alt="">
											<div class="hover-image"></div>
										</div>
										<div class="box-text">
											<div class="title">
												<h3 class="font-title font-regular"> lorem lorem lorenm...</h3>
											</div>
											<div class="hr-line">
												<hr>
											</div>
											<div class="date">
												<p>date<span class="date">2017-10-06</span><span class="time">12:51:13</span></p>
											</div>
											<div class="subtitle">
												<p>Lorem ipsum dolor iste. Fugit odio laboriosam iure repellat maxime nemo
													tempore? Lorem ipsum dolor iste. Fugit odio laboriosam iure repellat </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>

					<a href="#">
						<div class="block-news">
							<div class="container">
								<div class="row">
									<div class="box-news">
										<div class="box-img">
											<img src="<?=base_url();?>assets/frontend/dist/styles/image/hero.jpg" alt="">
											<div class="hover-image"></div>
										</div>
										<div class="box-text">
											<div class="title">
												<h3 class="font-title font-regular"> lorem lorem lorenm...</h3>
											</div>
											<div class="hr-line">
												<hr>
											</div>
											<div class="date">
												<p>date<span class="date">2017-10-06</span><span class="time">12:51:13</span></p>
											</div>
											<div class="subtitle">
												<p>Lorem ipsum dolor iste. Fugit odio laboriosam iure repellat maxime nemo
													tempore? Lorem ipsum dolor iste. Fugit odio laboriosam iure repellat maxime nemo
													tempore?</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#">
						<div class="block-news">
							<div class="container">
								<div class="row">
									<div class="box-news">
										<div class="box-img">
											<img src="<?=base_url();?>assets/frontend/dist/styles/image/hero.jpg" alt="">
											<div class="hover-image"></div>
										</div>
										<div class="box-text">
											<div class="title">
												<h3 class="font-title font-regular"> lorem lorem lorenm...</h3>
											</div>
											<div class="hr-line">
												<hr>
											</div>
											<div class="date">
												<p>date<span class="date">2017-10-06</span><span class="time">12:51:13</span></p>
											</div>
											<div class="subtitle">
												<p>Lorem ipsum dolor iste. Fuolor iste. Fugit odio laboriosam iure repellat maxime nemo
													tempore?</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#">
						<div class="block-news">
							<div class="container">
								<div class="row">
									<div class="box-news">
										<div class="box-img">
											<img src="<?=base_url();?>assets/frontend/dist/styles/image/hero.jpg" alt="">
											<div class="hover-image"></div>
										</div>
										<div class="box-text">
											<div class="title">
												<h3 class="font-title font-regular"> lorem lorem lorenm...</h3>
											</div>
											<div class="hr-line">
												<hr>
											</div>
											<div class="date">
												<p>date<span class="date">2017-10-06</span><span class="time">12:51:13</span></p>
											</div>
											<div class="subtitle">
												<p>Lorem ipsum dolor iste. Fugit odio laboriosam iure repellat maxime nemo
													tempore?</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#">
						<div class="block-news">
							<div class="container">
								<div class="row">
									<div class="box-news">
										<div class="box-img">

											<img src="<?=base_url();?>assets/frontend/dist/styles/image/hero.jpg" alt="">
											<div class="hover-image"></div>

										</div>
										<div class="box-text">
											<div class="title">
												<h3 class="font-title font-regular"> lorem lorem lorenm...</h3>
											</div>
											<div class="hr-line">
												<hr>
											</div>
											<div class="date">
												<p>date<span class="date">2017-10-06</span><span class="time">12:51:13</span></p>
											</div>
											<div class="subtitle">
												<p>Lorem ipsum dolor iste. Fugit pellat maxime nemo
													tempore? Lorem ipsum dolor iste. Fugit odio laboriosam iure repellat maxime nemo
													tempore?</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#">
						<div class="block-news">
							<div class="container">
								<div class="row">
									<div class="box-news">
										<div class="box-img">
											<img src="<?=base_url();?>assets/frontend/dist/styles/image/hero.jpg" alt="">
											<div class="hover-image"></div>
										</div>
										<div class="box-text">
											<div class="title">
												<h3 class="font-title font-regular"> lorem lorem lorenm...</h3>
											</div>
											<div class="hr-line">
												<hr>
											</div>
											<div class="date">
												<p>date<span class="date">2017-10-06</span><span class="time">12:51:13</span></p>
											</div>
											<div class="subtitle">
												<p>Lorem ipsum dolor iste. Fugit odio laboriosam iure repellat maxime nemo
													Fugit odio laboriosam iure repellat maxime nemo
													tempore?</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="new-right">
				<div class="container">
					<div class="row-title">
						<h2 class="font-title">ข่าวสารประจำปี</h2>


						<!-- <ul>
							<li>2017
								<ul>
									<li>test</li>
									<li>test</li>
									<li>test</li>
								</ul>
							</li>
							<li>2017
								<ul>
									<li>test</li>
									<li>test</li>
									<li>test</li>
								</ul>
							</li>
							<li>2017
								<ul>
									<li>test</li>
									<li>test</li>
									<li>test</li>
								</ul>
							</li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>

	</section>

	<?php $this->load->view('frontend/template/footer');?>

	<?php $this->load->view('frontend/template/javascript_frontend');?>
</body>

</html>
