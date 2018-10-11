<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>สินค้า (กล้อง เลนส์)</title>
  <?php $this->load->view('backend/template/headtag');?>
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
                      ข้อมูล รายการสินค้า
                  </h1>
              </div>
          </div>
          <div style="float: left;">
              <ol class="breadcrumb">
                  <li class="active">
                      <i class="fa fa-table"></i> ข้อมูล รายการสินค้า
                  </li>
              </ol>
          </div>
          <!-- /.Breadcrumb -->
          <div class="clearfix"></div>
          
          <div class="panel panel-default">
            <div class="panel-heading">รายการ สินค้า</div>
            <div class="panel-body">
              <div class="table-responsive">
                <table id="data-table" class="table table-bordered table-condensed" width="100%">
                  <thead>
                    <tr>
                      <th class="text-center text-middle">
                        ลำดับ
                      </th>
                      <th class="text-center text-middle">
                        ชื่อรายการ
                      </th>
                      <th class="text-center text-middle">
                        จำนวน
                      </th>
                      <th class="text-center text-middle">
                        ประเภทรายการ
                      </th>
                      <th class="text-center text-middle">
                        สถานะ
                      </th>
                      <th class="text-center text-middle" style="min-width: 180px;"></th>
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
                        <?php echo $data['product_name']; ?>
                      </td>
                      <td class="text-center text-middle">
                        <?php echo $data['product_amout']; ?>
                      </td>
                      <td class="text-center text-middle">
                        <?php echo $data['category_name']; ?>
                      </td>
                      <td class="text-center text-middle">
                        <?php echo $data['product_status']; ?>
                      </td>
                      <td class="text-center text-middle">
                        <a href="<?php echo site_url('admin/ticket/detail'); ?>/<?php echo $data['ticket_id']; ?>">
                          <button class="btn btn-detail btn-sm" style="font-weight: bold;width: 100%;">
                            <i class="fa fa-eye"></i> รายละเอียด
                          </button>
                        </a>
                        <div class="clearfix"></div>
                        <?php if($data['ticket_status'] == "B01"): ?>
                        <div style="margin-top:2%;">
                          <a href="<?php echo site_url('admin/ticket/requestfinishjob_form'); ?>/<?php echo $data['ticket_id']; ?>">
                            <button class="btn btn-requestfinishjob btn-sm" style="font-weight: bold;width: 100%;float: left;margin-right: 2%;">
                              <i class="fa fa-check"></i> สรุปข้อมูลการดำเนินงาน
                            </button>
                          </a>
                        </div>
                        <?php endif; ?>
                        <?php if($data['ticket_status'] == "B20"): ?>
                        <div style="margin-top:2%;">
                          <a href="<?php echo site_url('admin/ticket/requestfinishjob_form_update'); ?>/<?php echo $data['ticket_id']; ?>">
                            <button class="btn btn-update-requestfinishjob btn-sm" style="font-weight: bold;width: 100%;float: left;margin-right: 2%;">
                              <i class="fa fa-edit"></i> แก้ไขสรุปข้อมูลการดำเนินงาน
                            </button>
                          </a>
                        </div>
                        <?php endif; ?>
                        <?php if($data['ticket_status'] == "C20"): ?>
                        <div style="margin-top:2%;">
                          <a href="<?php echo site_url('admin/ticket/requestfinishjob_form_update'); ?>/<?php echo $data['ticket_id']; ?>">
                            <button class="btn btn-update-requestfinishjob-again btn-sm" style="font-weight: bold;width: 100%;float: left;margin-right: 2%;">
                              <i class="fa fa-check"></i> สรุปข้อมูลการดำเนินงานอีกครั้ง
                            </button>
                          </a>
                        </div>
                        <?php endif; ?>
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

<?php $this->load->view('backend/structure/javascript');?>

<script>
  $('.selectpicker').change(function(){
    $("#div1").fadeIn("fast")[ $.inArray('value1', $(this).val()) >= 0 ? 'show' : 'hide' ]();
    $("#div2").fadeIn("fast")[ $.inArray('value2', $(this).val()) >= 0 ? 'show' : 'hide' ]();
    $("#div3").fadeIn("fast")[ $.inArray('value3', $(this).val()) >= 0 ? 'show' : 'hide' ]();
    $("#div4").fadeIn("fast")[ $.inArray('value4', $(this).val()) >= 0 ? 'show' : 'hide' ]();
  });

  $(".selectpicker").change();

  $('#search_reset').click(function(){
    $('#search_date').val('');
    $('#search_problem_type').val('');
    $('#search_district').val('');
    $('#search_status').val('');
  });
</script>
</body>
</html>