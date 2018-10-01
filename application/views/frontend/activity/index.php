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

<!-- mockup -->
		<?php
$sub_topic = [
[
	'text' => 'Lorem ipsum, dolor sit amet consectetur',
],
[
	'text' => 'Lorem ipsum, dolor sit amet consectetur',
],
[
	'text' => 'Lorem ipsum, dolor sit amet consectetur',
],
[
	'text' => 'Lorem ipsum, dolor sit amet consectetur',
],

];
?>


<body>


	<?php $this->load->view('frontend/template/header'); ?>


	<section class="activity">
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


		<div class="warp-pic">
			<div class="container">
				<div class="row">
					<div class="box-pic">
						<img src="<?=base_url();?>assets/frontend/dist/styles/image/hero.jpg" alt="">
					</div>
					<div class="box-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti obcaecati neque praesentium impedit odit,
							dicta beatae quidem dolores quas iste amet excepturi quod voluptate architecto optio. Dicta quibusdam voluptatum
							delectus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam veniam eius, nulla natus ut, culpa
							accusantium quae, eum laudantium deleniti voluptas provident. Quidem at sapiente fugit enim quisquam officia
							nostrum?</p>
					</div>
				</div>
			</div>
		</div>


		<div class="description">
			<div class="box-text">
				<div class="head-title">
					<h4>รายการกิจกรรมทั้งหมด</h4>
				</div>
				<div class="topic">
					<div class="title">
						<?php foreach($sub_topic as $count):?>
						<div class="sub-topic">
							<a href="#">
								<p><?=$count['text'];?></p><span class="arrow"></span>
							</a>
						</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php $this->load->view('frontend/template/footer'); ?>

	<?php $this->load->view('frontend/template/javascript_frontend');?>
</body>

</html>
