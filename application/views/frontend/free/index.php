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


	<section class="product-free">
		<div class="title-free-page">
			<h1>Reservation Process</h1>
		</div>

		<div class="container-product">
			<div class="row-product">
				<?php foreach($product as $count):?>
				<div class="item" data-groups=<?=$count['groups'];?>>
					<div class="box">
						<div class="thumb">
							<img src=<?=$count["img"];?> alt="" data-title=
							<?=$count["title"];?>>
						</div>
						<div class="text-detail">
							<div class="property">
								<p class="name_product">
									<?=$count["name_product"];?>
								</p>
								<p class="product_type">
									<?=$count["product_type"];?>
								</p>
								<p class="detail">
									<?=$count["detail"];?>
								</p>

							</div>
							<div class="content">

							</div>
						</div>

					</div>
				</div>
				<?php endforeach ?>
			</div>

		</div>

		<div class="insert-pdf">
			<h2>fill pdf here</h2>

		</div>
	</section>


	<?php $this->load->view('frontend/template/footer'); ?>







	<?php $this->load->view('frontend/template/javascript_frontend');?>
</body>

</html>
