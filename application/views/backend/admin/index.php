<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Edit KMUTT XXX</title>
  <?php $this->load->view('backend/template/headtag');?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div id="wrapper">
		<?php $this->load->view('backend/template/header');?>
		
		<div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>ภาพรวมข้อร้องเรียน</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">TEST</div>
                                        <div>ข้อร้องเรียน รอตรวจสอบ</div>
                                    </div>
                                </div>
                            </div>
                            <form id="count1" action="<?=site_url('admin/dashboard')?>" method="get" accept-charset="utf-8">
                                <input type="hidden" name="count_query" value="count1"/>
                            </form>
                            <a href="#" onclick="$('#count1').submit();">
                                <div class="panel-footer">
                                    <span class="pull-left">ดูรายการข้อร้องเรียน</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">TEST</div>
                                        <div>อยู่ระหว่างการดำเนินการ</div>
                                    </div>
                                </div>
                            </div>
                            <form id="count2" action="<?=site_url('admin/dashboard')?>" method="get" accept-charset="utf-8">
                                <input type="hidden" name="count_query" value="count2"/>
                            </form>
                            <a href="#" onclick="$('#count2').submit();">
                                <div class="panel-footer">
                                    <span class="pull-left">ดูรายการเรื่องที่กำลังดำเนินการ</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">TEST</div>
                                        <div>ปิดงานแล้ว</div>
                                    </div>
                                </div>
                            </div>
                            <form id="count3" action="<?=site_url('admin/dashboard')?>" method="get" accept-charset="utf-8">
                                <input type="hidden" name="count_query" value="count3"/>
                            </form>
                            <a href="#" onclick="$('#count3').submit();">
                                <div class="panel-footer">
                                    <span class="pull-left">ดูรายการที่ปิดงานแล้ว</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">TEST</div>
                                        <div>ปิดงานแต่ต้องติดตามต่อ</div>
                                    </div>
                                </div>
                            </div>
                            <form id="count4" action="<?=site_url('admin/dashboard')?>" method="get" accept-charset="utf-8">
                                <input type="hidden" name="count_query" value="count4"/>
                            </form>
                            <a href="#" onclick="$('#count4').submit();">
                                <div class="panel-footer">
                                    <span class="pull-left">ดูรายการปิดงานแต่ต้องติดตาม</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
<!-- ./wrapper -->
<?php $this->load->view('backend/template/javascript');?>

</body>
</html>


