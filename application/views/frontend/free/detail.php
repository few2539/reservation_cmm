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

<body>


	<?php $this->load->view('frontend/template/header'); ?>
	


	<section class="product-free">
		<div class="title-free-page">
			<h1>คำร้องของการจองอุปกรณ์ถูกส่งไปให้อาจารย์พิจารณาแล้ว</h1>
		</div>

		<div class="container-product">
			<div class="row-product">
				<div class="item" data-groups="<?=$reservation->product_name?>">
					<div class="box">
						<div class="thumb">
							<img src="<?=base_url();?>assets/frontend/img/product_thumbnail/<?=$reservation	->product_thumbnail?>" alt=""
							 data-title="<?=$reservation->category_name;?>">
						</div>
						<div class="text-detail">
							<div class="property">
								<p class="name_product">
									<?=$reservation->reservation_tackback_name;?>
								</p>
								<p class="product_type">
									<?=$reservation->reservation_student_id;?>
								</p>
								<p class="detail">
									<?=$reservation->reservation_subject;?>
									
								</p>
								<p class="detail">
									<?=$reservation->reservation_usefor;?>
									
								</p>
								<p class="detail">
									<?=$reservation->reservation_date;?>
									
								</p>
								<p class="detail">
									<?=$reservation->reservation_return_date;?>
									
								</p>

							</div>
							<div class="content">
							<br>
								<p>System already sent your requirement to teacher by e-mail.</p>
								<p>approval or denying will sent to your <b> KMUTT e-mail.</b></p>
								<p>Please wait and check your KMUTT E-mail</p>
							</div>
						</div>

					</div>
				</div>
			</div>
			<hr>
		</div>
	</section>


	<?php $this->load->view('frontend/template/footer');?>

</body>

</html>
