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
$test2 =[
	[

	'text' => 'lorem1',
	'img' => '../assets/frontend/dist/styles/image/hero.jpg',
	],
	[
		
	'text' => 'lorem1',
	'img' => '../assets/frontend/dist/styles/image/hero.jpg',
	],
	[
		
	'text' => 'lorem1',
	'img' => '../assets/frontend/dist/styles/image/hero.jpg',
	],
	[
		
	'text' => 'lorem1',
	'img' => '../assets/frontend/dist/styles/image/hero.jpg',
	],
	[
		
	'text' => 'lorem1',
	'img' => '../assets/frontend/dist/styles/image/hero.jpg',
	],
    [
		
	'text' => 'lorem1',
	'img' => '../assets/frontend/dist/styles/image/hero.jpg',
	],

];
?>


<body>
	<?php $this->load->view('frontend/template/header'); ?>

	<section class="detail-research">
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

		<div class="description-research">
			<div class="container">
				<div class="row">
					<div class="left">
						<div class="wrap-left">
							<div class="text">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores saepe totam illum sed porro eius
									asperiores,
									velit, dolore et quam omnis modi qui minima doloribus, laudantium dolorum officia autem?</p>
							</div>

							<div class="suggest-wrap">
								<div class="text-suggest">
									<h4>ผลงานแนะนำ</h4>
								</div>

								<div class="suggust-work">
									<div class="section-wrap">
										<div class="wrap-object">

											<?php foreach($test2 as $test): ?>
											<div class="item-pic">
												<div class="box">
													<div class="text-cover">
														<h5>
															<?=$test['text'];?>
														</h5>
													</div>
													<div class="wrap-img">
														<a href="#">
															<img src=<?=$test['img'];?> alt="">
															<div class="hover-image"></div>
														</a>
													</div>
												</div>
											</div>
											<?php endforeach; ?>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="right">
						<div class="contrainer">
							<div class="row">
								<div class="box-menu">
									<div class="menu">
										<a href="#">
											<h4>Lorem ipsum, dolor sit amet </h4>
										</a>
										<a href<a href="#">
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
				</div>
			</div>
		</div>
	</section>

	<?php $this->load->view('frontend/template/footer'); ?>
	<?php $this->load->view('frontend/template/javascript_frontend');?>
</body>

</html>
