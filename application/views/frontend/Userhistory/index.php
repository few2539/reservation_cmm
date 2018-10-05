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
<?php
$product = [

[
    'groups' => '["camera"]',
    'title' =>'camera1',
    'product_type'=> 'camera',
    'img' => 'https://images.pexels.com/photos/243757/pexels-photo-243757.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
    'name_product'=> 'sony1',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],
];
?>


<body>


	<?php $this->load->view('frontend/template/header'); ?>


	<section class="wrap-user-history">



		<div class="row title-history">
			<h1>ประวัติการจอง</h1>
		</div>

		<div class="row">
			<div class="col-xs-12 user-history ">
				<p>ครั้งที่ &ensp; </p>
				<p>1</p>
			</div>
			<div class="col-xs-12 user-history ">
				<p>รหัส &ensp; </p>
				<p>590404040404</p>
			</div>
			<div class="col-xs-12  user-history">
				<p>ชื่อ &ensp; </p>
				<p>นาย เทสเทส เทสเทสเทสเทส</p>
			</div>
			<div class="col-xs-12 user-history">
				<p>ยืม &ensp; </p>
				<p>กล้อง sony1</p>
			</div>
			<div class="col-xs-12 user-history">
				<p>วันที่&ensp; </p>
				<p>00-00-0000</p>
            </div>
            <div class="col-xs-12 user-history">
				<p>สถานะ&ensp; </p>
				<p>อนุมัติ</p>
			</div>
        </div>
        
        <div class="row">
			<div class="col-xs-12 user-history ">
				<p>ครั้งที่ &ensp; </p>
				<p>2</p>
			</div>
			<div class="col-xs-12 user-history ">
				<p>รหัส &ensp; </p>
				<p>590404040404</p>
			</div>
			<div class="col-xs-12  user-history">
				<p>ชื่อ &ensp; </p>
				<p>นาย เทสเทส เทสเทสเทสเทส</p>
			</div>
			<div class="col-xs-12 user-history">
				<p>ยืม &ensp; </p>
				<p>กล้อง sony12</p>
			</div>
			<div class="col-xs-12 user-history">
				<p>วันที่&ensp; </p>
				<p>00-00-0000</p>
            </div>
            <div class="col-xs-12 user-history">
				<p>สถานะ&ensp; </p>
				<p>รออนุมัติ</p>
			</div>
		</div>
	</section>


	<?php $this->load->view('frontend/template/footer'); ?>







	<?php $this->load->view('frontend/template/javascript_frontend');?>



</body>

</html>
