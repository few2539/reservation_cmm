<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>admin profile</title>
	<?php $this->load->view('backend/template/headtag');?>

	<!-- Custom CSS -->
	<link href="<?php echo base_url();?>assets/frontend/dist/styles/css/main.css" rel="stylesheet">
</head>

<body>


	<div id="page-wrapper">
		<?php $this->load->view('backend/template/header');?>
		<section class="profile-admin">
			<div class="container emp-profile">
				<form method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="file ">
								<h3 style="margin-bottom: 4%"> Email Teacher </h3>
								<div class="email-teacher-now">
									<div class="email-t">
										<p><b>อาจารย์</b></p>
										<div class="name" style="display:flex;">
											<p style="margin-right: 2%">ภูริเดช </p>
											<p>เทพณรงค์</p>
										</div>
										<p><b>Email</b></p>
										<p>few_phuridate@got.com</p>
										<div class="wrap">

											<div class="btn btn-danger" onclick=" deleteEmail(this.value);">Delete</div>

										</div>
									</div>


								</div>
							</div>

						</div>
						<div class="col-md-6">
							<div class="profile-head">
								<h3 style="margin-bottom: 2%">
									แก้ไข/เพิ่ม/ลบ Email ของอาจารย์
								</h3>
								<form>
									<form action="">
										<div class="form-group">
											<p style="margin-bottom: 2%">ชื่อ-นามสกุลอาจารย์</p>
											<input class="form-control" type="text" placeholder="Name" style="margin-bottom: 2%">
											<input class="form-control" type="text" placeholder="Surname" style="margin-bottom: 2%">
											<input class="form-control" type="text" p laceholder="Email" style="margin-bottom: 2%">
											<button type="submit" name="insert" value="add to database" class="btn btn-primary" style="margin-bottom: 2%">add</button>
										</div>
									</form>

							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-4">

						</div>

					</div>
				</form>
			</div>

		</section>
	</div>

	<?php $this->load->view('backend/template/javascript');?>

	<script type="text/javascript">
		function deleteEmail(id) {
			// alert(id);
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
						text: 'ข้อมูล ที่ท่านทำรายการดำเนินการแล้ว.',
						showConfirmButton: false,
						timer: 3000
					});

					setTimeout(function () {
						$('#deleteEmail' + id).submit();
					}, 3000);
				}
			});
		}

	</script>




</body>

</html>
