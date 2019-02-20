<style>


	.eqWrap {
	display: flex;
	flex-wrap:wrap;
}

.eq {
	padding: 10px;
}


.equalHW {
	flex: 1;
	max-width:25%;
}

.equalHWrap {
	max-width:100%;
}

</style>






<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>
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

[
    'groups' => '["camera"]',
    'title' =>'camera1',
    'product_type'=> 'camera',
    'img' => 'https://images.pexels.com/photos/243757/pexels-photo-243757.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
    'name_product'=> 'sony2',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],

[
    'groups' => '["camera"]',
    'title' =>'camera1',
    'product_type'=> 'camera',
    'img' => 'https://images.pexels.com/photos/243757/pexels-photo-243757.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
    'name_product'=> 'sony3',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],

[
    'groups' => '["mic"]',
    'title' =>'mic1',
    'product_type'=> 'mic',
    'img' => 'https://images.pexels.com/photos/9137/night-vintage-music-bokeh.jpg?auto=compress&cs=tinysrgb&h=650&w=940',
    'name_product'=> 'mic1',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],
[
    'groups' =>  '["mic"]',
    'title' =>'mic1',
    'product_type'=> 'mic',
    'img' => 'https://images.pexels.com/photos/9137/night-vintage-music-bokeh.jpg?auto=compress&cs=tinysrgb&h=650&w=940',
    'name_product'=> 'mic2',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],

[
    'groups' =>'["mic"]',
    'title' =>'mic1',
    'product_type'=> 'mic',
    'img' => 'https://images.pexels.com/photos/9137/night-vintage-music-bokeh.jpg?auto=compress&cs=tinysrgb&h=650&w=940',
    'name_product'=> 'mic3',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],

[
    'groups' => '["lens"]',
    'title' =>'lens1',
    'product_type'=> 'lens',
    'img' => 'https://images.pexels.com/photos/759960/pexels-photo-759960.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
    'name_product'=> 'lens1',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],
[
    'groups' => '["lens"]',
    'title' =>'lens1',
    'product_type'=> 'lens',
    'img' => 'https://images.pexels.com/photos/759960/pexels-photo-759960.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
    'name_product'=> 'lens2',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],
[
    'groups' => '["lens"]',
    'title' =>'lens1',
    'product_type'=> 'lens',
    'img' => 'https://images.pexels.com/photos/759960/pexels-photo-759960.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
    'name_product'=> 'lens3',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],

[
    'groups' =>'["flash"]',
    'title' =>'flash1',
    'product_type'=> 'flash',
    'img' => 'https://images.pexels.com/photos/1413906/pexels-photo-1413906.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
    'name_product'=> 'flash',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],
[
    'groups' => '["tripod"]',
    'title' =>'tripod1',
    'product_type'=> 'tripod',
    'img' => 'https://images.pexels.com/photos/289796/pexels-photo-289796.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
    'name_product'=> 'tripod',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],

[
    'groups' => '["light_set"]',
    'title' =>'light_set1',
    'product_type'=> 'light_set',
    'img' => 'https://images.pexels.com/photos/134469/pexels-photo-134469.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
    'name_product'=> 'light_set',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],

[
    'groups' => '["accessary"]',
    'title' =>'accessary1',
    'product_type'=> 'accessary',
    'img' => 'https://images.pexels.com/photos/821750/pexels-photo-821750.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
    'name_product'=> 'accessary1',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],

[
    'groups' =>'["accessary"]',
    'title' =>'accessary1',
    'product_type'=> 'accessary',
    'img' => 'http://www.ec-mall.com/wp-content/uploads/2017/10/Phottix-Strato-II-Multi-5-in-1-Trigger-Set_1.jpg',
    'name_product'=> 'accessary2',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],
[
    'groups' => '["computer"]',
    'title' =>'computer1',
    'product_type'=> 'computer',
    'img' => 'https://images.pexels.com/photos/877695/pexels-photo-877695.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
    'name_product'=> 'computer1',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],
[
    'groups' =>'["other"]',
    'title' =>'background-paper1',
    'product_type'=> 'other',
    'img' => 'https://www.freestylephoto.biz/static/images/product/921253/lg/921253_1.jpg',
    'name_product'=> 'background-paper',
    'detail' => 'Lorem ipsum, dolor sit amet consectetur'
],

];
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


	<section class="product">

		<div class="text-welcome">
			<h1>Welcome to reservation system</h1>
		</div>

		<div class="button-product">
			<button type="button" id='all' class="btn btn-warning">All</button>
			<?php foreach($categorys as $category): ?>
			<button id='btn-<?=$category['category_code']?>' class="btn btn-primary">
				<?=$category['category_name']?> /
				<?=$category['category_name_en']?>
			</button>
			<?php endforeach; ?>
		</div>


		<div class="wrap ">
			
			<div class="equalHWrap eqWrap  my-shuffle-container ">
				<?php foreach($products as $product):?>
				<div class="equalHW eq picture-item " data-groups='["<?=$product['category_code'];?>"]'>
					<div class="box-all ">
						<div class="box-img">
							<img src="<?=base_url();?>assets/frontend/img/product_thumbnail/<?=$product["product_thumbnail"];?>" alt=""
							data-title="
							<?=$product["product_thumbnail"];?>">
						</div>
						<div class="property">
							<p class="name_product">
								<?=$product["product_name"];?>
							</p>
							<p class="product_type">
								<?=$product["category_name_en"];?>
							</p>
							<p class="detail">
								<?=$product["product_intro"];?>
							</p>
							<div class="content">
								<a href="<?=site_url('free/index');?>/<?=$product["product_id"];?>" type="button" class="btn btn-<?php if($product["product_status"] == 'approved') { echo "danger"; }elseif ($product["product_status"] == 'waiting'){ echo "warning"; } elseif ($product["product_status"] == 'available'){ echo "success"; }?> btn-block btn-status"
									data-prodcut="
									<?=$product['product_id']?>">
									<?php if($product["product_status"] == "approved") { echo "Out of Stock"; }elseif($product["product_status"] == 'available') { echo "Available"; } elseif($product["product_status"] == 'waiting') {echo "Reservation";}?>
								</a>
							</div>
							</div>
						</div>
						
				</div>
				<?php endforeach ?>

			</div>
		</div>


		<!-- <div class="wrap">
			<div class="container-product ">
				<?php foreach($products as $product):?>
				<div class="item " data-groups='["<?=$product['category_code'];?>"]'>
					<div class="box">
						<div class="thumb">
							<img src="<?=base_url();?>assets/frontend/img/product_thumbnail/<?=$product["product_thumbnail"];?>" alt=""
							data-title="
							<?=$product["product_thumbnail"];?>">
						</div>
						<div class="property">
							<p class="name_product">
								<?=$product["product_name"];?>
							</p>
							<p class="product_type">
								<?=$product["category_name_en"];?>
							</p>
							<p class="detail">
								<?=$product["product_intro"];?>
							</p>
						</div>
						<div class="content">
							<a href="<?=site_url('product/free');?>/<?=$product["product_id"];?>" type="button" class="btn btn-
								<?php if($product["product_amount"] == 0) { echo "danger"; }else{ echo "success"; }?> btn-block btn-status"
								data-prodcut="
								<?=$product['product_id']?>">
								<?php if($product["product_amount"] == 0) { echo "Out of Stock"; }else{ echo "Free"; }?>
							</a>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
			<div class="col-1@sm my-sizer-element"></div>
		</div> -->


	</section>

	<?php $this->load->view('frontend/template/footer'); ?>
	<?php $this->load->view('frontend/template/javascript_frontend');?>
</body>


<script>
	// window.env_shuffle = {


	// 	init: function () {
	// 		window.env_shuffle.onReady();


	// 	},


	// 	initSlick: function () {
	// 		var Shuffle = window.Shuffle;
	// 		var element = document.querySelector('.my-shuffle-container');
	// 		var sizer = element.querySelector('.my-sizer-element');

	// 		var shuffleInstance = new Shuffle(element, {
	// 			itemSelector: '.picture-item',
	// 			sizer: sizer // could also be a selector: '.my-sizer-element'
	//         });

	// 		$("#all").on("click", function () {
	//             shuffleInstance.filter();
	//             console.log( shuffleInstance.filter);
	// 		});
	// 		$("#btn-camera").on("click", function () {
	//             shuffleInstance.filter('camera');
	//             console.log( shuffleInstance.filter);
	// 		});
	// 		$("#btn-mic").on("click", function () {
	// 			shuffleInstance.filter('mic');
	// 		});
	// 		$("#btn-lens").on("click", function () {
	// 			shuffleInstance.filter('lens');
	// 		});


	// 	},
	// 	onReady: function () {
	// 		window.env_shuffle.initSlick();
	// 	}
	// }

	// $(window.env_shuffle).ready(env_shuffle.init);

	Shuffle.options = {
		buffer: 0, // Useful for percentage based heights when they might not always be exactly the same (in pixels).
		columnThreshold: 0.01, // Reading the width of elements isn't precise enough and can cause columns to jump between values.
		columnWidth: 0, // A static number or function that returns a number which tells the plugin how wide the columns are (in pixels).
		delimiter: null, // If your group is not json, and is comma delimeted, you could set delimiter to ','.
		easing: 'cubic-bezier(0.4, 0.0, 0.2, 1)', // CSS easing function to use.
		filterMode: Shuffle.FilterMode.ANY, // When using an array with filter(), the element passes the test if any of its groups are in the array. With "all", the element only passes if all groups are in the array.
		group: Shuffle.ALL_ITEMS, // Initial filter group.
		gutterWidth: 0, // A static number or function that tells the plugin how wide the gutters between columns are (in pixels).
		initialSort: null, // Shuffle can be initialized with a sort object. It is the same object given to the sort method.
		isCentered: false, // Attempt to center grid items in each row.
		itemSelector: '*', // e.g. '.picture-item'.
		roundTransforms: true, // Whether to round pixel values used in translate(x, y). This usually avoids blurriness.
		sizer: null, // Element or selector string. Use an element to determine the size of columns and gutters.
		speed: 250, // Transition/animation speed (milliseconds).
		staggerAmount: 15, // Transition delay offset for each item in milliseconds.
		staggerAmountMax: 150, // Maximum stagger delay in milliseconds.

		throttleTime: 300, // How often shuffle can be called on resize (in milliseconds).
		useTransforms: true, // Whether to use transforms or absolute positioning.
	};


	var Shuffle = window.Shuffle;
	var element = document.querySelector('.my-shuffle-container');
	var sizer = element.querySelector('.my-sizer-element');

	var shuffleInstance = new Shuffle(element, {
		itemSelector: '.picture-item',
		sizer: sizer // could also be a selector: '.my-sizer-element'
	});



	$("#all").on("click", function () {
		shuffleInstance.filter();
	});
	$("#btn-camera").on("click", function () {
		shuffleInstance.filter("camera");

	});
	$("#btn-mic").on("click", function () {
		shuffleInstance.filter("mic");
	});
	$("#btn-lens").on("click", function () {
		shuffleInstance.filter("lens");
	});
	$("#btn-flash").on("click", function () {
		shuffleInstance.filter("flash");
	});
	$("#btn-tripod").on("click", function () {
		shuffleInstance.filter("tripod");
	});
	$("#btn-light_set").on("click", function () {
		shuffleInstance.filter("light_set");
	});

	$("#btn-accessary").on("click", function () {
		shuffleInstance.filter("accessary");
	});
	$("#btn-computer").on("click", function () {
		shuffleInstance.filter("computer");
	});

	$("#btn-other").on("click", function () {
		shuffleInstance.filter("other");
	});

</script>

</html>
