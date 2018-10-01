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

		<div class="new-env">
			<div class="new-left">
				<div class="container">
					<div class="row-title">
						<h2 class="font-title">ข่าวสาร ทางด้านสิ่งแวดล้อม</h2>
					</div>
				</div>
			</div>
			<div class="new-right">
				<div class="container">
					<div class="row-title">
						<h2 class="font-title">ข่าวสารประจำปี</h2>
						<ul>
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
						</ul>
					</div>
				</div>
			</div>
		</div>

	</section>

	<?php $this->load->view('frontend/template/footer'); ?>

	<?php $this->load->view('frontend/template/javascript_frontend');?>
</body>

</html>
