<!-- jQuery -->
<script src="<?php echo base_url();?>assets/backend/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/backend/js/bootstrap.min.js"></script>

<!-- Show / Hide Password -->
<script type="text/javascript">
	window.onload = function(){$("#showPassword").hide();}

	$("#txtPassword").on('keyup',function() {  
			if($("#txtPassword").val())
			{
				$("#showPassword").show();
			}
			else
			{
				$("#showPassword").hide();
			}
	});

	$(".reveal").on('click',function() {
	    var $pwd = $("#txtPassword");
	    if ($pwd.attr('type') === 'password') 
			{
	        $pwd.attr('type', 'text');
	    } 
			else 
			{
	        $pwd.attr('type', 'password');
	    }
	});
</script>


<!-- Sweet Alert 2 -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/sweetalert2/sweetalert2.all.js"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js"></script>

<!-- Bootstrap Validator -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-validator/dist/validator.min.js"></script>