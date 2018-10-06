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


	<section class="welcome-page">
		<div class="container-page">
			<div class="wrapper">

				<div class="button">
					<span class="button__mask"></span>
					<span class="button__text">.:: LOGIN TEST TEST TEST::.</span>
					<a href="https://www.google.co.th/"> <span class="button__text button__text--bis">.:: LOGIN ::.</span><a />
				</div>

				<br>

				<div class="button">
					<span class="button__mask"></span>
					<span class="button__text">RESERVATION</span>
					<span class="button__text button__text--bis">RESERVATION</span>
				</div>

			</div>
		</div>


	</section>

	<?php $this->load->view('frontend/template/footer'); ?>
	<?php $this->load->view('frontend/template/javascript_frontend');?>
</body>

</html>
