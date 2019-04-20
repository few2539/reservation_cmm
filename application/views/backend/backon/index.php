<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
  <title>อุปกรณ์</title>
  <link rel="shortcut icon" type="image/png" href="<?=base_url();?>assets/frontend/dist/styles/image/fav.png">
  <?php $this->load->view('backend/template/headtag');?>
  
  <style>
  .btn-hiddent-btn{
	display: none; 
}
</style>
</head>

<body>
<div id="wrapper">

  <?php $this->load->view('backend/template/header');?>

  <div id="page-wrapper">

      <div class="container-fluid">
          
          <!-- Page Heading -->
          <div class="row">
              <div class="col-lg-12">
                
                  <h1 class="page-header text-center">
                  ประวัติการยืมอุปกรณ์
                  </h1>
                
              </div>
          </div>
          <div style="float: left;">
              <ol class="breadcrumb">
                  <li class="active">
                      <i class="fa fa-table"></i> รายการอุปกรณ์
                  </li>
              </ol>
          </div>
          <div style="float: right;">
              <a href="<?=site_url('product/admin_add');?>">เพิ่มรายการอุปกรณ์ใหม่</a>
          </div>
          <!-- /.Breadcrumb -->
          <div class="clearfix"></div>
          
          <div class="panel panel-default">
            <div class="panel-heading">รายการ อุปกรณ์</div>
            <div class="panel-body">
              <div class="table-responsive" style="overflow-y:hidden;">
                <table id="data-table" class="table table-bordered table-condensed">
                  <thead>
                    <tr>
                      <th class="text-center text-middle">
                        ลำดับ
                      </th>
                      <th class="text-center text-middle">
                        ชื่อ
                      </th>
                      <th class="text-center text-middle">
                        รหัสนักศึกษา
                      </th>
                      <th class="text-center text-middle">
                      อุปกรณ์
                      </th>
                      <th class="text-center text-middle">
                        วันที่ยืม
                      </th>
                      <th class="text-center text-middle">
                        วันที่คืน
                      </th>
                      <th class="text-center text-middle">
                        เบอร์โทร
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($reservations as $reservation): ?>
                    <tr>
                      <td class="text-center text-middle">
                      <?php echo $reservation['reservation_id']; ?>
                      </td>
                      <td class="text-center text-middle">
                        <?php echo $reservation['reservation_tackback_name']; ?>
                      </td>
                      <td class="text-center text-middle">
                      <?php echo $reservation['reservation_student_id']; ?>
                      </td>
                      <td class="text-center text-middle">
                      <?php echo $reservation['product_name']; ?>
                      </td>
                      <td class="text-center text-middle">
                      <?php echo $reservation['reservation_date']; ?>
                      </td>
                      <td class="text-center text-middle">
                      <?php echo $reservation['reservation_return_date']; ?>
                      </td>
                      <td class="text-center text-middle">
                      <?php echo $reservation['reservation_phonenumber']; ?>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.panel -->

      </div>
      <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->

</div>
<!-- ./wrapper -->

<?php $this->load->view('backend/template/javascript');?>


	<script type="text/javascript">
		function deleteConfirm(id) {
		
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
						$('#deleteProduct' + id).submit();
					}, 3000);
				}
			});
		}

	</script>

<script type="text/javascript">
	function returnConfirm(id) {
    
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

		    setTimeout(function(){ $('#returnProduct'+id).submit(); }, 3000);
		  }
		});
	}
</script>

</body>

</html>
