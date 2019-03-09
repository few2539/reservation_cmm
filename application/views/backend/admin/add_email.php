<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>admin profile</title>
	<?php $this->load->view('backend/template/headtag');?>

	<!-- Custom CSS -->
	<link href="<?php echo base_url(); ?>assets/frontend/dist/styles/css/main.css" rel="stylesheet">
</head>

<body>


	<div id="page-wrapper">
		<?php $this->load->view('backend/template/header');?>
		<section class="profile-admin">
			<div class="container emp-profile">
				<div class="row">
					<div class="col-md-6">
						<div class="file">
							<h3 style="margin-bottom: 4%"> Email Teacher </h3>
							<div class="email-teacher-now">
								<?php foreach($users as $user):?>
								<div class="email-t">
									<p><b>อาจารย์</b></p>
									<div class="name" style="display:flex;">
										<p style="margin-right: 2%">
											<?=$user["user_fname"];?>
										</p>
										<p>
											<?=$user["user_lname"];?>
										</p>
									</div>
									<p><b>Email</b></p>
									<p>
										<?=$user["user_email"];?>
										<div class="wrap " style="margin-bottom:5%">
										<?php $attributes  = array('id' => 'deleteEmail'.$user['user_id']); ?>
                        				<?php $hidden  = array('user_id' => $user['user_id']); ?>
                         				<?= form_open('admin/deletemail', $attributes, $hidden); ?>
										 <button type="button" value="<?php echo $user['user_id'] ?>"  class="btn btn-danger btn-sm" style="font-weight: bold;width: 30%;float: left; margin-right: 2%;" onclick="deleteEmail(this.value);">
                            			  <i class="fa fa-check"></i> ลบ
                           				 </button>
											<?=form_close();?>
										</div>

									</p>
								</div>
								<?php endforeach ?>
							</div>
						</div>
					</div>
				
					<div class="col-md-6">
						<div class="profile-head">
							<h3 style="margin-bottom: 2%">
								แก้ไข/เพิ่ม/ลบ Email ของอาจารย์
							</h3>
								<?php $attributes = array('class' => '', 'data-toggle' => 'validator', 'role' => 'form');?>
								<?php $hidden  = array('user_id' => $user['user_id']); ?>
								<?=form_open('admin/emailinsert', $attributes, $hidden);?>
								<div class="form-group">
									<p style="margin-bottom: 2%">ชื่อ-นามสกุลอาจารย์</p>
									<input class="form-control" name="fname" type="text" placeholder="Name" style="margin-bottom: 2%">
									<input class="form-control" name="lname" type="text" placeholder="Surname" style="margin-bottom: 2%">
									<input class="form-control" name="email" type="text" placeholder="Email" style="margin-bottom: 2%">

									<button type="submit" class="btn btn-primary" style="margin-bottom: 2%">add</button>
								</div>
								<?=form_close();?>
							</div>
						</div>
					</div>
				</div>
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

	<script type="text/javascript">
		function submitEmail(id) {
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
						$('#submitEmail' + id).submit();
					}, 3000);
				}
			});
		}

	</script>




</body>

</html>
