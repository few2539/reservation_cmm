<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>อุปกรณ์</title>
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
                  รายการ อุปกรณ์ที่กำลังรออาจารย์ อนุมัติ หรือ ปฏิเสธ
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
                        ชื่อรายการ
                      </th>
                     
                      <th class="text-center text-middle">
                        ประเภทรายการ
                      </th>
                      <th class="text-center text-middle">
                        สถานะ
                      </th>
                      <th class="text-center text-middle" >
                      รหัสครุภัณฑ์
                      </th>
                      <th class="text-center text-middle" style="min-width: 180px;">
                        เรียกคืน
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($products as $product): ?>
                    <tr>
                      <td class="text-center text-middle">
                        <?php echo $i; ?>
                      </td>
                      <td class="text-center text-middle">
                        <?php echo $product['product_name']; ?>
                      </td>
                      
                      <td class="text-center text-middle">
                        <?php echo $product['category_name']; ?>
                      </td>
                      <td class="text-center text-middle">
                        <?php echo $product['product_status']; ?>
                      </td>
                      <td class="text-center text-middle">
                      <?php echo $product['product_detail']; ?> 
                      </td>
                      <td class="text-center text-middle">
                      <div style="margin-top:2%;">
                          <?php $attributes  = array('id' => 'returnProduct'.$product['product_id']); ?>
                          <?php $hidden  = array('product_id' => $product['product_id']); ?>
                          <?= form_open('product/callback', $attributes, $hidden); ?>
                            <button type="button" value="<?php echo $product['product_id'] ?>"  class="btn btn-<?php if($product["product_status"] == 'approved') { echo "hiddent-btn"; }elseif ($product["product_status"] == 'waiting'){ echo "warning"; } elseif ($product["product_status"] == 'available'){ echo "hiddent-btn"; }?> btn-sm" style="font-weight: bold;width: 30%; float: left;" onclick="returnConfirm(this.value);">
                              <i class="fa fa-check"></i> เรียกคืน 
                            </button>
                          <?= form_close(); ?>
                        </div>
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
