<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>อุปกรณ์</title>
  <link rel="shortcut icon" type="image/png" href="<?=base_url();?>assets/frontend/dist/styles/image/fav.png">
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
                      ข้อมูล อุปกรณ์
                  </h1>
              </div>
          </div>
          <div style="float: left;">
              <ol class="breadcrumb">
                  <li class="active">
                      <i class="fa fa-table"></i> ข้อมูล อุปกรณ์
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
              Success : <?=$product->product_name?>
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
</body>
</html>