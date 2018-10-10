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


	<section class="product-free">
		<div class="title-free-page">
			<h1>Reservation Process</h1>
		</div>

		<div class="container-product">
			<div class="row-product">
				<div class="item" data-groups="<?=$product->category_code?>">
					<div class="box">
						<div class="thumb">
							<img src="<?=base_url();?>assets/frontend/img/product_thumbnail/<?=$product->product_thumbnail?>" alt=""
							 data-title="<?=$product->product_name;?>">
						</div>
						<div class="text-detail">
							<div class="property">
								<p class="name_product">
									<?=$product->product_name;?>
								</p>
								<p class="product_type">
									<?=$product->category_code;?>
								</p>
								<p class="detail">
									<?=$product->product_detail;?>
								</p>

							</div>
							<div class="content">

							</div>
						</div>

					</div>
				</div>
			</div>

		</div>

		<div class="insert-pdf">
			<h2>insert info here</h2>
			<form>
				<div class="user-info">
					<div class="box-user-info">
						<div class="input-group date-today">
							<span class="input-today" id="basic-addon1">Today</span>
							<input type="text" class="datepicker" placeholder="Username">
						</div>
					</div>


					<div class="box-user-info">
						<div class="input-group name">
							<span class="input-group-addon" id="basic-addon1">name</span>
							<input type="text" class="form-control " placeholder="Username" aria-describedby="basic-addon1">
						</div>
					</div>

					<div class="box-user-info">
						<div class="input-group surename">
							<span class="input-group-addon" id="basic-addon1">surename</span>
							<input type="text" class="form-control" placeholder="surename" aria-describedby="basic-addon1">

						</div>
					</div>
					<div class="box-user-info">
						<div class="input-group pw-student">
							<span class="input-group-addon" id="basic-addon1">pw-student</span>
							<input type="text" class="form-control" placeholder="pw-student" aria-describedby="basic-addon1">

						</div>
					</div>
					<div class="box-user-info">
						<div class="input-group degree">
							<span class="input-group-addon" id="basic-addon1">your-degree</span>
							<input type="text" class="form-control" placeholder="such as bachelor degree" aria-describedby="basic-addon1">

						</div>
					</div>

					<div class="box-user-info">
						<div class="input-group Phone">
							<span class="input-group-addon" id="basic-addon1">Phone</span>
							<input type="text" class="form-control" placeholder="xxx-xxxxxxx" aria-describedby="basic-addon1">

						</div>
					</div>

					<div class="box-user-info">
						<div class="input-group Use-for">
							<span class="input-group-addon" id="basic-addon1">Use for</span>
							<input type="text" class="form-control" placeholder="like taking photo in some project" aria-describedby="basic-addon1">

						</div>
					</div>

					<div class="box-user-info">
						<div class="input-group subject">
							<span class="input-group-addon" id="basic-addon1">subject</span>
							<input type="text" class="form-control" placeholder="CMM-444" aria-describedby="basic-addon1">

						</div>
					</div>

					<div class="box">
						<fieldset>
							<h4>Form:</h4>
							<input type="text" id="input_from">
						</fieldset>

						<fieldset>
							<h4>To:</h4>
							<input type="text" id="input_to">
						</fieldset>

					</div>

					<button type="submit" class="btn btn-default">Submit</button>

			</form>

		</div>
		</div>
	</section>


	<?php $this->load->view('frontend/template/footer'); ?>







	<?php $this->load->view('frontend/template/javascript_frontend');?>

	<script>
		$('.datepicker').pickadate()

	</script>

	<script>
		window.free_pickadate = {
			init: function () {
				var from_$input = $('#input_from').pickadate(),
					from_picker = from_$input.pickadate('picker')

				var to_$input = $('#input_to').pickadate(),
					to_picker = to_$input.pickadate('picker')

				hiddenName: true
				// Check if there’s a “from” or “to” date to start with.
				if (from_picker.get('value')) {
					to_picker.set('min', from_picker.get('select'))
				}
				if (to_picker.get('value')) {
					from_picker.set('max', to_picker.get('select'))
				}

				// When something is selected, update the “from” and “to” limits.


			},

			update: function () {

				var from_$input = $('#input_from').pickadate(),
					from_picker = from_$input.pickadate('picker')

				var to_$input = $('#input_to').pickadate(),
					to_picker = to_$input.pickadate('picker')
					hiddenName: true

				from_picker.on('set', function (event) {
					if (event.select) {
						to_picker.set('min', from_picker.get('select'))
					} else if ('clear' in event) {
						to_picker.set('min', false)
					}
				})
				to_picker.on('set', function (event) {
					if (event.select) {
						from_picker.set('max', to_picker.get('select'))
					} else if ('clear' in event) {
						from_picker.set('max', false)
					}
				})
			},


			onReady: function () {
				window.free_pickadate.init();
				window.free_pickadate.update();
			},


		}
		$(window.free_pickadate).ready(free_pickadate.onReady);

	</script>

	<script>
		/*
	var ajax_call = function() {
		var product_id = "<?=$product->product_id;?>";
		
		$.ajax({
			url : "<?php echo site_url('product/ajax'); ?>/" + product_id,
			type : "GET",
			success: function(data) {
				alert(data);
				//if(data == 0) { alert("สินค้านี้ Out of Stock ระบบจะนำไปสู่หน้าก่อนหน้า"); window.location = "<?php echo site_url('product/index'); ?>"; }
			},
		});
	};

	var interval = 1000; // where X is your every X minutes

	setInterval(ajax_call, interval);
	*/

	</script>
</body>

</html>
