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

<link rel="shortcut icon" type="image/png" href="<?=base_url();?>assets/frontend/dist/styles/image/fav.png">
	<?php $this->load->view('frontend/template/headtag_frontend');?>

</head>



<body id="for-hid">

	<div class="wrap-preload">
		<div class="box">
			<img src="<?=base_url();?>assets/frontend/dist/styles/image/final-logo-big.png" alt="final-logo.png">

		</div>

	</div>
	<?php $this->load->view('frontend/template/header'); ?>
	

	<section class="product">

		<div class="text-welcome">
			<h1>Welcome to reservation system</h1>
		</div>
		<div class="containersearch">
  				<div class="field-input">
  				  <input type="text" placeholder="Search..." id="ModuleSearch"/><span> </span>
  				</div>
			</div>
		<!-- <div class="category">
			<button  type="button" class="btn btn-warning show-category">Category</button>
		</div> -->


 			<!-- <input type="text" id="ModuleSearch" placeholder="Search" /> -->

		<div class="wrap-newmenu">
		

		<label id="category_label" class="field" for="category" data-value="">
			<span>Category</span>
			<div id="category"class="psuedo_select"name="category">
				<span class="selected"></span>
				<ul id="category_options"class="options">
					<li class="option all"data-value="opt_1">All</li>
					<?php foreach($categorys as $category): ?>
					<li class="option btn-<?=$category['category_code']?>"data-value="opt_2"><?=$category['category_name_en']?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</label>
			
		<div class="xs-menu-cont">
			<a id="menutoggle"><i class="fa fa-align-justify"></i> </a>
				<nav class="xs-menu displaynone">
					<!-- <ul>
						<li class="active">
							<a href="#"  class='all'>All</a>
						</li>
						<?php foreach($categorys as $category): ?>
						<li>
							<a href="#"  class='btn-<?=$category['category_code']?>'><?=$category['category_name_en']?></a>
						</li>
						<?php endforeach; ?>
					
					</ul> -->
				</nav>
			</div>
			<nav class="menu cmm-respon-menu">
				<ul>
					<li class="active">
						<a href="#" id='all'>All</a>
					</li>
					<?php foreach($categorys as $category): ?>
					<li>
						<a href="#" id='btn-<?=$category['category_code']?>'>
				<?=$category['category_name_en']?></a>
					</li>
					<?php endforeach; ?>
				</ul>
			</nav>
		</div>

		</div>	 


		<!-- <div class="button-product cate">
			<button type="button" class='all btn btn-warning silbling' style="border-color: transparent; border-radius: 0;">All</button>
			<?php foreach($categorys as $category): ?>
			<button class='btn-<?=$category['category_code']?> btn btn-primary silbling'>
				<?=$category['category_name']?> /
				<?=$category['category_name_en']?>
			</button>
			<?php endforeach; ?>
		</div> -->


		<div class="wrap ">
			
			<div class="equalHWrap eqWrap  my-shuffle-container ">
				<?php foreach($products as $product):?>
				<div class="equalHW eq picture-item " data-groups='["<?=$product['category_code'];?>"]'>
					<div class="box-all ">
						<div class="box-img">
							<div class="hover-img"></div>
							<img src="<?=base_url();?>assets/frontend/img/product_thumbnail/<?=$product["product_thumbnail"];?>" alt=""
							data-title="
							<?=$product["product_thumbnail"];?>">
						</div>
						<div class="property">
							<p class="name_product">
							<b class"nameunderline"><?=$product["product_name"];?></b>
							</p>
							<p class="product_type">
								<?=$product["category_name_en"];?>
							</p>
							<p class="detail">
								<?=$product["product_intro"];?>
							</p>
							<p class="booking" style="height:50px; overflow:hidden;">
							<span>	Booking : <?=$product["product_booking"];?></span> 
								<!-- เปลี่ยนตัวแปลตรงนี้  -->
							</p>
							<div class="content">
								
								<a href="<?=site_url('free/index');?>/<?=$product["product_id"];?> "type="button" style="-webkit-appearance: inherit;" class="btn btn-<?php if($product["product_status"] == 'approved') { echo "danger"; }elseif ($product["product_status"] == 'waiting'){ echo "warning"; } elseif ($product["product_status"] == 'available'){ echo "success"; }?> btn-block btn-status"
									data-prodcut="
									<?=$product['product_id']?>">
									<?php if($product["product_status"] == "approved") { echo "Back On "; echo $product['product_return_date']; }elseif($product["product_status"] == 'available') { echo "Available"; } elseif($product["product_status"] == 'waiting') {echo "Reserved";}?>
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
$('.silbling').on('click', function(){
    $(this).addClass('active-fillter').siblings().removeClass('active-fillter');
});


</script>



<script>
//ตรงนี้

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


	$(".all").on("click", function () {
		shuffleInstance.filter();
	});
	$(".btn-camera").on("click", function () {
		shuffleInstance.filter("camera");
		

	});
	$(".btn-mic").on("click", function () {
		shuffleInstance.filter("mic");
	});
	$(".btn-lens").on("click", function () {
		shuffleInstance.filter("lens");
	});
	$(".btn-flash").on("click", function () {
		shuffleInstance.filter("flash");
	});
	$(".btn-tripod").on("click", function () {
		shuffleInstance.filter("tripod");
	});
	$(".btn-light_set").on("click", function () {
		shuffleInstance.filter("light_set");
	});

	$(".btn-accessary").on("click", function () {
		shuffleInstance.filter("accessary");
	});
	$(".btn-computer").on("click", function () {
		shuffleInstance.filter("computer");
	});

	$(".btn-other").on("click", function () {
		shuffleInstance.filter("other");
	});


	var Demo = function (element) {
		var shuffleInstance = new Shuffle(element, {
			itemSelector: '.picture-item',
			sizer: sizer // could also be a selector: '.my-sizer-element'
		});
		this.addSearchFilter();
	
	};

	Demo.prototype.addSearchFilter = function () {
		document.querySelector('#ModuleSearch').addEventListener('keyup', this._handleSearchKeyup.bind(this));
	};

	// Filter the shuffle instance by items with a title that matches the search input.
			Demo.prototype._handleSearchKeyup = function (evt) {
				var searchText = evt.target.value.toLowerCase();

	shuffleInstance.filter(function (element, shuffle) {
			var titleElement = element.querySelector('.property');
		
			var titleText = titleElement.textContent.toLowerCase().trim();
			return titleText.indexOf(searchText) !== -1;
		});
	};
	document.addEventListener('DOMContentLoaded', function () {
		window.demo = new Demo(document.querySelector('.my-shuffle-container'));
	});

</script>


<script>
$('.show-category').click(function() {
    $('.cate').slideToggle('slow');
});
</script>


<script>
 
 $(document).ready(function() {
				//responsive menu toggle
				$("#menutoggle").click(function() {
					$('.xs-menu').toggleClass('displaynone');

					});
				//add active class on menu
				$('ul li').click(function(e) {
					e.preventDefault();
					$('li').removeClass('active');
					$(this).addClass('active');

				});
			//drop down menu	
					$(".drop-down").hover(function() {
						$('.mega-menu').addClass('display-on');
					});
					$(".drop-down").mouseleave(function() {
						$('.mega-menu').removeClass('display-on');
					});
					$(".drop-down").click(function() {
						$('.mega-menu').slideup('slow');
					});
			
			});

	 </script>

	 <script>
	 ////////////////////////////////////
// prerequisite utility functions //
// the real stuff starts below    //
////////////////////////////////////
var util = {
    f: {
      addStyle: function(elem, prop, val, vendors) {
        var i, ii, property, value;
        if (!util.f.isElem(elem)) {
          elem = document.getElementById(elem);
        }
        if (!util.f.isArray(prop)) {
          prop = [prop];
          val = [val];
        }
        for (i = 0; i < prop.length; i += 1) {
          var thisProp = String(prop[i]),
            thisVal = String(val[i]);
          if (typeof vendors !== "undefined") {
            if (!util.f.isArray(vendors)) {
              vendors.toLowerCase() == "all"
                ? (vendors = ["webkit", "moz", "ms", "o"])
                : (vendors = [vendors]);
            }
            for (ii = 0; ii < vendors.length; ii += 1) {
              elem.style[vendors[i] + thisProp] = thisVal;
            }
          }
          thisProp = thisProp.charAt(0).toLowerCase() + thisProp.slice(1);
          elem.style[thisProp] = thisVal;
        }
      },
      cssLoaded: function(event) {
        var child = util.f.getTrg(event);
        child.setAttribute("media", "all");
      },
      events: {
        cancel: function(event) {
          util.f.events.prevent(event);
          util.f.events.stop(event);
        },
        prevent: function(event) {
          event = event || window.event;
          event.preventDefault();
        },
        stop: function(event) {
          event = event || window.event;
          event.stopPropagation();
        }
      },
      getSize: function(elem, prop) {
        return parseInt(elem.getBoundingClientRect()[prop], 10);
      },
      getTrg: function(event) {
        event = event || window.event;
        if (event.srcElement) {
          return event.srcElement;
        } else {
          return event.target;
        }
      },
      isElem: function(elem) {
        return util.f.isNode(elem) && elem.nodeType == 1;
      },
      isArray: function(v) {
        return v.constructor === Array;
      },
      isNode: function(elem) {
        return typeof Node === "object"
          ? elem instanceof Node
          : elem &&
              typeof elem === "object" &&
              typeof elem.nodeType === "number" &&
              typeof elem.nodeName === "string" &&
              elem.nodeType !== 3;
      },
      isObj: function(v) {
        return typeof v == "object";
      },
      replaceAt: function(str, index, char) {
        return str.substr(0, index) + char + str.substr(index + char.length);
      }
    }
  },
  //////////////////////////////////////
  // ok that's all the utilities      //
  // onto the select box / form stuff //
  //////////////////////////////////////
  form = {
    f: {
      init: {
        register: function() {
          console.clear(); // just cuz codepen
          var child,
            children = document.getElementsByClassName("field"),
            i;
          for (i = 0; i < children.length; i += 1) {
            child = children[i];
            util.f.addStyle(child, "Opacity", 1);
          }
          children = document.getElementsByClassName("psuedo_select");
          for (i = 0; i < children.length; i += 1) {
            child = children[i];
            child.addEventListener("click", form.f.select.toggle);
          }
        },
        unregister: function() {
          //just here as a formallity
          //call this to stop all ongoing timeouts are ready the page for some sort of json re-route
        }
      },
      select: {
        blur: function(field) {
          field.classList.remove("focused");
          var child,
            children = field.childNodes,
            i,
            ii,
            nested_child,
            nested_children;
          for (i = 0; i < children.length; i += 1) {
            child = children[i];
            if (util.f.isElem(child)) {
              if (child.classList.contains("deselect")) {
                child.parentNode.removeChild(child);
              } else if (child.tagName == "SPAN") {
                if (!field.dataset.value) {
                  util.f.addStyle(child, ["FontSize", "Top"], ["16px", "32px"]);
                }
              } else if (child.classList.contains("psuedo_select")) {
                nested_children = child.childNodes;
                for (ii = 0; ii < nested_children.length; ii += 1) {
                  nested_child = nested_children[ii];
                  if (util.f.isElem(nested_child)) {
                    if (nested_child.tagName == "SPAN") {
                      if (!field.dataset.value) {
                        util.f.addStyle(
                          nested_child,
                          ["Opacity", "Transform"],
                          [0, "translateY(24px)"]
                        );
                      }
                    } else if (nested_child.tagName == "UL") {
                      util.f.addStyle(
                        nested_child,
                        ["Height", "Opacity"],
                        [0, 0]
                      );
                    }
                  }
                }
              }
            }
          }
        },
        focus: function(field) {
          field.classList.add("focused");
          var bool = false,
            child,
            children = field.childNodes,
            i,
            ii,
            iii,
            nested_child,
            nested_children,
            nested_nested_child,
            nested_nested_children,
            size = 0;
          for (i = 0; i < children.length; i += 1) {
            child = children[i];
            util.f.isElem(child) && child.classList.contains("deselect")
              ? (bool = true)
              : null;
          }
          if (!bool) {
            child = document.createElement("div");
            child.className = "deselect";
            child.addEventListener("click", form.f.select.toggle);
            field.insertBefore(child, children[0]);
          }
          for (i = 0; i < children.length; i += 1) {
            child = children[i];
            if (
              util.f.isElem(child) &&
              child.classList.contains("psuedo_select")
            ) {
              nested_children = child.childNodes;
              for (ii = 0; ii < nested_children.length; ii += 1) {
                nested_child = nested_children[ii];
                if (
                  util.f.isElem(nested_child) &&
                  nested_child.tagName == "UL"
                ) {
                  size = 0;
                  nested_nested_children = nested_child.childNodes;
                  for (iii = 0; iii < nested_nested_children.length; iii += 1) {
                    nested_nested_child = nested_nested_children[iii];
                    if (
                      util.f.isElem(nested_nested_child) &&
                      nested_nested_child.tagName == "LI"
                    ) {
                      size += util.f.getSize(nested_nested_child, "height");
                      console.log("size: " + size);
                    }
                  }
                  util.f.addStyle(
                    nested_child,
                    ["Height", "Opacity"],
                    [size + "px", 1]
                  );
                }
              }
            }
          }
        },
        selection: function(child, parent) {
          var children = parent.childNodes,
            i,
            ii,
            nested_child,
            nested_children,
            time = 0,
            value;
          if (util.f.isElem(child) && util.f.isElem(parent)) {
            parent.dataset.value = child.dataset.value;
            value = child.innerHTML;
          }
          for (i = 0; i < children.length; i += 1) {
            child = children[i];
            if (util.f.isElem(child)) {
              if (child.classList.contains("psuedo_select")) {
                nested_children = child.childNodes;
                for (ii = 0; ii < nested_children.length; ii += 1) {
                  nested_child = nested_children[ii];
                  if (
                    util.f.isElem(nested_child) &&
                    nested_child.classList.contains("selected")
                  ) {
                    if (nested_child.innerHTML) {
                      time = 1e2;
                      util.f.addStyle(
                        nested_child,
                        ["Opacity", "Transform"],
                        [0, "translateY(24px)"],
                        "all"
                      );
                    }
                    setTimeout(
                      function(c, v) {
                        c.innerHTML = v;
                        util.f.addStyle(
                          c,
                          ["Opacity", "Transform", "TransitionDuration"],
                          [1, "translateY(0px)", ".1s"],
                          "all"
                        );
                      },
                      time,
                      nested_child,
                      value
                    );
                  }
                }
              } else if (child.tagName == "SPAN") {
                util.f.addStyle(child, ["FontSize", "Top"], ["12px", "8px"]);
              }
            }
          }
        },
        toggle: function(event) {
          util.f.events.stop(event);
          var child = util.f.getTrg(event),
            children,
            i,
            parent;
          switch (true) {
            case child.classList.contains("psuedo_select"):
            case child.classList.contains("deselect"):
              parent = child.parentNode;
              break;
            case child.classList.contains("options"):
              parent = child.parentNode.parentNode;
              break;
            case child.classList.contains("option"):
              parent = child.parentNode.parentNode.parentNode;
              form.f.select.selection(child, parent);
              break;
          }
          parent.classList.contains("focused")
            ? form.f.select.blur(parent)
            : form.f.select.focus(parent);
        }
      }
    }
  };
window.onload = form.f.init.register;
	 </script>
</html>
