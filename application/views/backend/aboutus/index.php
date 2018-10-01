<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?=$title_page?></title>
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
                    <?=$title_page?>
                </h1>
            </div>
        </div>
        <div style="float: left;">
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-table"></i> <?=$title_page?>
                </li>
            </ol>
        </div>
        <!-- /.Breadcrumb -->
        <div class="clearfix"></div>
        
        <div class="panel panel-primary">
          <div class="panel-heading"><?=$title_page?></div>
          <div class="panel-body">
            <?php $attributes = array('class' => '','data-toggle' => 'validator','role' => 'form'); ?>
            <?php $hidden  = array('about_id' => $about_id); ?>
            <?= form_open('aboutus/'.$action, $attributes, $hidden); ?>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                  <label>ที่อยู่ ไทย</label>
                  <textarea name="about_address_th" class="form-control" placeholder="ที่อยู่ ไทย" required data-error="โปรดกรอกช่องนี้"><?=$data->k_about_address_th;?></textarea>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                  <label>ที่อยู่ อังกฤษ</label>
                  <textarea name="about_address_en" class="form-control" placeholder="ที่อยู่ อังกฤษ" required data-error="โปรดกรอกช่องนี้"><?=$data->k_about_address_en;?></textarea>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group has-feedback">
                  <label>เบอร์โทร</label>
                  <input name="about_tel" class="form-control" placeholder="เบอร์โทร" required data-error="โปรดกรอกช่องนี้" value="<?=$data->k_about_tel;?>">
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="clearfix"></div>
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group has-feedback">
                  <label>E-mail</label>
                  <input name="about_email" type="email" class="form-control" placeholder="E-mail" required data-error="กรุณากรอกข้อมูล E-mail ในรูปแบบที่ถูกต้อง" value="<?=$data->k_about_email;?>">
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="clearfix"></div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                  <label>ละติจูด แสดงผลตำแหน่ง ใน Google Map</label>
                  <input name="about_lat" class="form-control" placeholder="ละติจูด" required data-error="กรุณากรอกข้อมูล เป็นตัวเลข" pattern="[0-9.]{1,50}" value="<?=$data->k_about_lat;?>">
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group has-feedback">
                  <label>ลองติจูด แสดงผลตำแหน่ง ใน Google Map</label>
                  <input name="about_lng" class="form-control" placeholder="ลองติจูด" required data-error="กรุณากรอกข้อมูล เป็นตัวเลข" pattern="[0-9.]{1,50}" value="<?=$data->k_about_lng;?>">
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="clearfix" style="margin-bottom: 30px;"></div>
              
              <div class="form-group col-md-12">
              <button type="submit" value="submit" class="btn btn-primary btn-block" style="font-weight: bold;">
                <i class="fa fa-edit"></i> ยืนยันการทำรายการ
              </button>
            </div>
            <?= form_close(); ?>
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
