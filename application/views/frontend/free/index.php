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
			<hr>
		</div>

		<div class="insert-info">
			<h2>please fill in all fields</h2>
			<?php $attributes = array('class' => '', 'data-toggle' => 'validator', 'role' => 'form');?>
			<?php $hidden = array('product_id' => $product_id);?>
			<?=form_open('free/detail', $attributes, $hidden);?>
			<div class="user-info">


				<div class="box-user-info">
					<div class="input-group name">
						<span class="input-group-addon" id="basic-addon1">name</span>
						<input type="text" class="form-control " name="reservation_tackback_name" placeholder="Username" aria-describedby="basic-addon1" required>
					</div>
				</div>

				<div class="box-user-info">
					<div class="input-group pw-student">
						<span class="input-group-addon" id="basic-addon1">pw-student</span>
						<input type="text" class="form-control" name="reservation_student_id" placeholder="pw-student" aria-describedby="basic-addon1" required>
					</div>
				</div>
				<div class="box-user-info">
					<div class="input-group degree">
						<span class="input-group-addon" id="basic-addon1">your-degree</span>
						<input type="text" class="form-control" name="degreeid" placeholder="(1-4 year) " aria-describedby="basic-addon1" required>

					</div>
				</div>

				<!-- <div class="box-user-info">
					<div class="input-group degree">
						<span class="input-group-addon" id="basic-addon1">Email</span>
						<input type="text" class="form-control" name="degreeid" placeholder="your-email " aria-describedby="basic-addon1" required>

					</div>
				</div> -->

				<div class="box-user-info">
					<div class="input-group Phone">
						<span class="input-group-addon" id="basic-addon1">Phone</span>
						<input type="text" class="form-control" name="reservation_phonenumber" placeholder="xxx-xxxxxxx" aria-describedby="basic-addon1" required>

					</div>
				</div>

				<div class="box-user-info">
					<div class="input-group Use-for">
						<span class="input-group-addon" id="basic-addon1">Use for</span>
						<input type="text" class="form-control" name="reservation_usefor" placeholder="Like taking photo in some project"
						 aria-describedby="basic-addon1" required>

					</div>
				</div>

				<div class="box-user-info">
					<div class="input-group subject">
						<span class="input-group-addon" id="basic-addon1">subject</span>
						<input type="text" class="form-control" name="reservation_subject" placeholder="Like CMM-444" aria-describedby="basic-addon1" required>

					</div>
				</div>
				<div class="box">
					<fieldset>
						<h4>Form:</h4>
						<input type="text" id="input_from" name="reservation_date" value="" required>
					</fieldset>

					<fieldset>
						<h4>To:</h4>
						<input type="text" id="input_to" name="reservation_return_date" value="" required>
					</fieldset>

				</div>
				<hr>
				<div class="container-teacher">
					<h2>To Teacher</h2>
					<p>Send email to teacher for allowing your reservation:</p>
					<form>
						<div class="form-group add-email-sp">
							<label for="sel1">Name (Teacher):</label>
							<select class="form-control" id="sel1" name="emailto">
								<option></option>
								<?php foreach($users as $user):?>
								<option value="<?=$user['user_email']?>" >
								<?=$user['user_fname']?> 
								<?=$user['user_lname']?>
								</option>
								<?php endforeach; ?>
							</select>

						</div>
					</form>
				</div>





				<button type="submit" name="insert" value="add to database" class="btn btn-primary" onclick="fillConfirm(this.value);"
				 id="fillConfirm">Submit</button>

				<?=form_close();?>

			</div>
		</div>
	</section>


	<?php $this->load->view('frontend/template/footer');?>







	<?php $this->load->view('frontend/template/javascript_frontend');?>




	<script type="text/javascript">
		function fillConfirm(id) {
			alert(id);
			swal({
				title: 'ยืนยันที่จะทำรายการ  ?',
				text: "คุณแน่ใจที่จะยืนยันการทำรายการ!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'ยืนยัน',
				cancelButtonText: 'ยกเลิก'
			}).then((result) => {
				if (result.value) {
					swal({
						type: 'success',
						position: 'center',
						title: 'กำลังดำเนินการ',
						text: 'ข้อมูล ที่ท่านทำรายการดำเนิน การแล้ว.',
						showConfirmButton: false,
						timer: 3000
					});

					setTimeout(function () {
						$('#fillConfirm' + id).submit();
					}, 3000);
				}
			});
		}

	</script>




	<script>
		$('#input_from').pickadate({
			
			formatSubmit: 'yyyy/mm/dd',
			format: 'dd/mm/yyyy',

		});

		$('#input_to').pickadate({
			
			formatSubmit: 'yyyy/mm/dd',
			format: 'dd/mm/yyyy',

		});

	</script>


	<script>
		var from_$input = $('#input_from').pickadate(),
			from_picker = from_$input.pickadate('picker')

		var to_$input = $('#input_to').pickadate(),
			to_picker = to_$input.pickadate('picker')
		from_picker.set('min', true);

		// Check if there’s a “from” or “to” date to start with.
		if (from_picker.get('value')) {
			to_picker.set('min', from_picker.get('select'));
			from_picker.set('min', true);

		}
		if (to_picker.get('value')) {

			from_picker.set('max', to_picker.get('select'));
			console.log(to_picker);
		}

		// When something is selected, update the “from” and “to” limits.
		from_picker.on('set', function (event) {
			if (event.select) {
				to_picker.set('min', from_picker.get('select'));
				var from_value = from_picker.get('select');
				var pick = from_value.pick + (2 * 24 * 60 * 60 * 1000);
				var to_value = new Date(pick);
				to_picker.set('max', to_value);
				console.log(from_value);



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
