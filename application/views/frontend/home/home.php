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

<?php
$text =[
		[
			'title' => 'Lorem ipsum, dolor sit amet',
	
		],
		[
			'title' => 'Lorem ipsum, dolor sit amet',
	
		],
		[
			'title' => 'Lorem ipsum, dolor sit amet',
	
		],
		[
			'title' => 'Lorem ipsum, dolor sit amet',
	
		],
		[
			'title' => 'Lorem ipsum, dolor sit amet',
	
		],
		[
			'title' => 'Lorem ipsum, dolor sit amet',
	
		],
		[
			'title' => 'Lorem ipsum, dolor sit amet',
	
		],
		[
			'title' => 'Lorem ipsum, dolor sit amet',
	
		],
		[
			'title' => 'Lorem ipsum, dolor sit amet',
	
		],
		[
			'title' => 'Lorem ipsum, dolor sit amet',
	
		],
];

	$menu_interest=[
		[
			'title' => 'Lorem ipsum, dolor sit amet',
		],
		[
			'title' => 'Lorem ipsum, dolor sit amet',
		],
		[
			'title' => 'Lorem ipsum, dolor sit amet',
		],
		[
			'title' => 'Lorem ipsum, dolor sit amet',
		],
];

?>

<body>
	<?php $this->load->view('frontend/template/header'); ?>
	<section class="homepage">
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

		<div class="suggest-wrap">
			<div class="suggust-work">
				<div class="section-wrap">
					<div class="wrap-object">
						<div class="item-pic">
							<div class="box">
								<div class="text-cover">
									<h5>Lorem ipsum dolor, f</h5>
								</div>
								<div class="wrap-img">
									<a href="#" class="box-menu">
										<img src="<?=base_url();?>assets/frontend/dist/styles/image/hero.jpg" alt="">
										<div class="hover-image"></div>
									</a>
								</div>
							</div>
						</div>
						<div class="item-pic">
							<div class="box">
								<div class="text-cover">
									<h5>Lorem ipsum dolor, f</h5>
								</div>
								<div class="wrap-img" >
									<a href="#"  class="box-menu">
										<img src="<?=base_url();?>assets/frontend/dist/styles/image/hero.jpg" alt="">
										<div class="hover-image"></div>
									</a>
								</div>
							</div>
						</div>
						<div class="item-pic">
							<div class="box">
								<div class="text-cover">
									<h5>Lorem ipsum dolor, f</h5>
								</div>
								<div class="wrap-img">
									<a href="#"  class="box-menu">
										<img src="<?=base_url();?>assets/frontend/dist/styles/image/hero.jpg" alt="">
										<div class="hover-image"></div>
									</a>

								</div>
							</div>
						</div>
						<div class="item-pic">
							<div class="box">
								<div class="text-cover">
									<h5>Lorem ipsum dolor, f</h5>
								</div>
								<div class="wrap-img">
									<a href="#"  class="box-menu">
										<img src="<?=base_url();?>assets/frontend/dist/styles/image/hero.jpg" alt="">
										<div class="hover-image"></div>
									</a>
								</div>
							</div>
						</div>


					</div>


				</div>
			</div>
		</div>

		<div class="content-homepage">
			<div class="container">
				<div class="row">
					<div class="collum1">
						<div class="box">
							<?php foreach($text as $count_text): ?>
							<a href="#">
								<p>
									<?=$count_text['title'];?>
								</p>
							</a>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="collum2">
						<div class="box">

						</div>
					</div>
					<div class="collum3">
						<div class="box">

						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="container-slick">
			<div class="all-news">
				<div class="title">
					<p>All-NEWS</p>
				</div>
			</div>




			<div class="slider js-slick-container">

				<div class="box-text">
					<a href="#">
						<h4>TESTTESTTEST</h4>
					</a>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, dignissimos mollitia eos facere natus tempora
						qui </p>
				</div>

				<div class="box-text">
					<a href="#">
						<h4>TESTTESTTEST</h4>
					</a>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, dignissimos mollitia eos facere natus tempora
						qui </p>
				</div>
				<div class="box-text">
					<a href="#">
						<h4>TESTTESTTEST</h4>
					</a>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, dignissimos mollitia eos facere natus tempora
						qui </p>
				</div>
				<div class="box-text">
					<a href="#">
						<h4>TESTTESTTEST</h4>
					</a>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, dignissimos mollitia eos facere natus tempora
						qui </p>
				</div>
				<div class="box-text">
					<a href="#">
						<h4>TESTTESTTEST</h4>
					</a>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, dignissimos mollitia eos facere natus tempora
						qui </p>
				</div>
				<div class="box-text">
					<a href="#">
						<h4>TESTTESTTEST</h4>
					</a>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, dignissimos mollitia eos facere natus tempora
						qui </p>
				</div>
				<div class="box-text">
					<a href="#">
						<h4>TESTTESTTEST</h4>
					</a>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, dignissimos mollitia eos facere natus tempora
						qui </p>
				</div>
				<div class="box-text">
					<a href="#">
						<h4>TESTTESTTEST</h4>
					</a>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, dignissimos mollitia eos facere natus tempora
						qui </p>
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

									<?php foreach($menu_interest as $count_text): ?>
									<div class="sub-topic">
										<a href="#">
											<p>
												<?=$count_text['title'];?>
											</p><span class="arrow"></span>
										</a>
									</div>
									<?php endforeach; ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<?php $this->load->view('frontend/template/footer'); ?>
	<?php $this->load->view('frontend/template/javascript_frontend');?>
</body>

<script>
	$(document).ready(function () {
		$('.js-slick-container').slick({
			dots: true,
			infinite: true,
			speed: 1000,
			slidesToShow: 4,
			slidesToScroll: 4,
			arrows: false,
			autoplay: true,
			autoplaySpeed: 4000,
			responsive: [{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: true,
						autoplay: true,
						autoplaySpeed: 2000,

					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						autoplay: true,
						autoplaySpeed: 2000,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						autoplay: true,
						autoplaySpeed: 2000,
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});

	});

</script>

</html>
