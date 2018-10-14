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

            <!-- Form Header -->
            <!-- Go to Insert -->
            <?php if($action == 'insert'): ?>
            <?php $attributes = array('class' => '','data-toggle' => 'validator','role' => 'form'); ?>
            <?php $hidden  = array('' => ''); ?>
            <?= form_open('product/'.$action, $attributes, $hidden); ?>
            <?php endif; ?>

            <!-- Go to Update -->
            <?php if($action == 'update'): ?>
            <?php $attributes = array('class' => '','data-toggle' => 'validator','role' => 'form'); ?>
            <?php $hidden  = array('product_id' => $product->product_id); ?>
            <?= form_open('product/'.$action, $attributes, $hidden); ?>
            <?php endif; ?>
            <!-- End Form Header -->

            <!-- Form Insert -->
            <?php if($action == 'insert'): ?>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                  <label>product_name</label>
                  <input name="product_name" class="form-control" placeholder="product_name" required data-error="โปรดกรอกช่องนี้" value="">
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                  <label>หมวดหมู่</label>
                  <select class="select2 form-control" name="product_category_id" placeholder="หมวดหมู่" style="width: 100%;" tabindex="-1" required>
                    <option></option>
                    <?php foreach ($categorys as $category): ?>
                      <option value="<?=$category['category_id']?>">
                        <?=$category['category_name']?> / <?=$category['category_name_en']?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="clearfix"></div>
              
              <div class="clearfix" style="margin-bottom: 30px;"></div>
            <?php endif; ?>
            
            <!-- Form Update -->
            <?php if($action == 'update'): ?>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                  <label>product_name</label>
                  <input name="product_name" class="form-control" placeholder="product_name" required data-error="โปรดกรอกช่องนี้" value="<?=$product->product_name;?>">
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                  <label>หมวดหมู่</label>
                  <select class="select2 form-control" name="product_category_id" placeholder="หมวดหมู่" style="width: 100%;" tabindex="-1" required>
                    <option></option>
                    <?php foreach ($categorys as $category): ?>
                      <option value="<?=$category['category_id']?>" <?php if($product->product_category_id == $category['category_id']) { echo "selected"; } ?>>
                        <?=$category['category_name']?> / <?=$category['category_name_en']?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="clearfix"></div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                  <label>วันที่จอง <span style="color:red;">*</span></label>
                  <?php
                  if(!empty($product->product_reservation)) {
                    list($Y,$m,$d) = explode('-',$product->product_reservation);
                    $Y = $Y + 543;
                    $product_reservation = $d."/".$m."/".$Y;
                  }
                  ?>
                  <?php 
                  echo "Database =". $product->product_reservation . " --> ".$product_reservation;
                  ?>
                  <div class="input-group">
                    <input id="product_reservation" name="product_reservation" type="text" class="form-control datepicker" placeholder="วันที่จอง" data-provide="datepicker" data-date-language="th-th" readonly="readonly" aria-describedby="vspp_cod_label" style="text-align: center;" value="<?php if(!empty($product->product_reservation)) {echo $product_reservation;}?>" required data-error="กรุณากรอก วันที่จอง">
                    <span class="input-group-addon" onclick="$('#product_reservation').focus();">
                      <i class="glyphicon glyphicon-calendar"></i>
                    </span>
                  </div>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                  <label>วันที่คืน <span style="color:red;">*</span></label>
                  <?php
                  if(!empty($product->product_return_date)) {
                    list($Y,$m,$d) = explode('-',$product->product_return_date);
                    $Y = $Y + 543;
                    $product_return_date = $d."/".$m."/".$Y;
                  }
                  ?>
                  <?php 
                  echo "Database =". $product->product_return_date . " --> ".$product_return_date;
                  ?>
                  <div class="input-group">
                    <input id="product_return_date" name="product_return_date" type="text" class="form-control datepicker" placeholder="วันที่จอง" data-provide="datepicker" data-date-language="th-th" readonly="readonly" aria-describedby="vspp_cod_label" style="text-align: center;" value="<?php if(!empty($product->product_return_date)) {echo $product_return_date;}?>" required data-error="กรุณากรอก วันที่จอง">
                    <span class="input-group-addon" onclick="$('#product_return_date').focus();">
                      <i class="glyphicon glyphicon-calendar"></i>
                    </span>
                  </div>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="clearfix"></div>

              
              <div class="clearfix" style="margin-bottom: 30px;"></div>
            <?php endif; ?>

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
