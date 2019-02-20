
	$(document).ready(function () {

		var html = '';
		for (var i = 1; i <= 50; i++) {
			html += '<div class="shape-container--' + i + ' shape-animation"><div class="random-shape"></div></div>';
		}

		document.querySelector('.shape').innerHTML += html;

		var $allShapes = $("[class*='shape-container--']");

console.log("yyyy");
	});
