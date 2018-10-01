<!-- jQuery -->
<script src="<?php echo base_url();?>assets/main/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/main/js/bootstrap.min.js"></script>

<!-- Sweet Alert 2 -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/sweetalert2/sweetalert2.all.js"></script>
<script type="text/javascript">
	function SubmitLoginFrom() {
	  	swal({
		  title: 'ยืนยันที่จะทำรายการ ?',
		  text: "คุณแน่ใจที่จะยืนยันการทำรายการ!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'ยืนยัน',
		  cancelButtonText: 'ยกเลิก'
		}).then((result) => {
		  if (result.value) {
		    swal({
		    	type: 'success',
		    	position: 'center',
		    	title: 'ทำรายการสำเร็จ',
		    	text: 'ข้อมูล ที่ท่านทำรายการดำเนินการแล้ว.',
		    	showConfirmButton: false,
		    	timer: 3000
		    });
		    
		    setTimeout(function(){ $('#form').submit(); }, 3000);
		  }
		});
	}
</script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js"></script>

<!-- Bootstrap Validator -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-validator/dist/validator.min.js"></script>

<!-- Bootstrap Select Dropdown -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-select-dropdown/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-select-dropdown/dist/js/i18n/defaults-en_US.min.js"></script>
<!-- Config Bootstrap Select Dropdown -->
<script type="text/javascript">
	$('.selectpicker').selectpicker();
</script>