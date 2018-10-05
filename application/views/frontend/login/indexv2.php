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
	<!-- <?php $this->load->view('frontend/template/header'); ?> -->


	<section class="login-v2">
		<div class="wrapper">
			<div class="container">
				<h1>Welcome</h1>

				<form class="form">
					<input type="text" placeholder="Username">
					<input type="password" placeholder="Password">
					<button type="submit" id="login-button">Login</button>
				</form>
			</div>

			<ul class="bg-bubbles">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</section>

	<?php $this->load->view('frontend/template/footer'); ?>
	<?php $this->load->view('frontend/template/javascript_frontend');?>
</body>


<script>
	$("#login-button").click(function (event) {
		event.preventDefault();

		$('form').fadeOut(500);
		$('.wrapper').addClass('form-success');
	});

</script>

</html>
