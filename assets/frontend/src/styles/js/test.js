$(document).ready(function () {

	var html = '';
	for (var i = 1; i <= 50; i++) {
		html += '<div class="shape-container--' + i + ' shape-animation"><div class="random-shape"></div></div>';
	}

	document.querySelector('.shape').innerHTML += html;

	var $allShapes = $("[class*='shape-container--']");

	console.log("yyyy");
});


$(window).on('load', function () {
	$(".wrap-preload").delay(2000).fadeOut("slow");

	var login = $('.login');
	var iso = $('.iso');
	var iso1 = $('.iso1');
	var iso2 = $('.iso2');
	var shape = $('.shape');

	login.delay(2500).fadeIn("slow");
	shape.delay(3800).fadeIn("slow");
	iso.delay(3500).fadeIn("slow");
	iso1.delay(3500).fadeIn("slow");;
	iso2.delay(3500).fadeIn("slow");

});

$(window).on('load', function () {
	setTimeout(function(){
		$("#for-hid").css("overflow", "unset");
	  }, 2000);
	

});


function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
}