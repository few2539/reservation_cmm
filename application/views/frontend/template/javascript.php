<!-- jQuery -->
<script src="<?php echo base_url();?>assets/main/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/main/js/bootstrap.min.js"></script>

<!-- Librarys Base on Bootstrap -->
<!-- Data Table -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/datatable/datatables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/datatable/dataTables.bootstrap.min.js"></script>
<!-- Config Bootstrap Table -->
<script type="text/javascript">
	$('#data-table').DataTable({
		"bPaginate": true,
		"iDisplayLength": 50
	});

</script>

<!-- Bootstrap Select Dropdown -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-select-dropdown/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-select-dropdown/dist/js/i18n/defaults-en_US.min.js"></script>
<!-- Config Bootstrap Select Dropdown -->
<script type="text/javascript">
	$('.selectpicker').selectpicker({
		//style: 'btn-primary',
		size: 4
		width: 200 px;
	});

</script>

<!-- Bootstrap Select2 -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-select2/select2.min.js"></script>
<script type="text/javascript">
	$(".select2").select2({
		theme: "bootstrap",
		placeholder: "กรุณาเลือกรายการ",
		allowClear: true
	});

</script>

<script type="text/javascript">
	$("#search_problem_type").select2({
		theme: "bootstrap",
		placeholder: "ประเภทที่แจ้ง",
		allowClear: true
	});
	$("#search_district").select2({
		theme: "bootstrap",
		placeholder: "เขตพื้นที่",
		allowClear: true
	});
	$("#search_status").select2({
		theme: "bootstrap",
		placeholder: "สถานะ",
		allowClear: true
	});

</script>

<script type="text/javascript">
	function SubmitForm() {
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

				setTimeout(function () {
					$('#form').submit();
				}, 3000);
			}
		});
	}

</script>

<script>
	function ConfirmCancel() {
		swal({
			title: 'ยกเลิกและกลับสู่หน้าหลัก ?',
			text: "ยินยันที่จะยกเลิก และกลับไปยังรายการก่อนหน้า!",
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
					title: 'ยกเลิกและกลับสู่หน้าก่อนหน้า',
					text: 'ระบบกำลังนำสู่หน้า ก่อนหน้า.',
					showConfirmButton: false,
					timer: 3000
				});

				setTimeout(function () {
					window.history.back()
				}, 3000);
			}
		});
	}

</script>

<!-- Bootstrap Date Range -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-daterange/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-daterange/daterangepicker.js"></script>
<script type="text/javascript">
	var today = new Date();
	$('input[name="search_date"]').daterangepicker({
		autoUpdateInput: false,
		locale: {
			format: 'DD/MM/YYYY',
			cancelLabel: 'ยกเลิก',
			applyLabel: 'เลือกช่วงเวลา',
		}
	}, function (start_date, end_date) {
		this.element.val(start_date.format('DD/MM/YYYY') + ' - ' + end_date.format('DD/MM/YYYY'));
	});

</script>

<!-- Bootstrap Validator -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-validator/dist/validator.min.js"></script>

<!-- Bootstrap Datepicker Thai -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-datepicker-thai/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-datepicker-thai/js/bootstrap-datepicker-thai.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-datepicker-thai/js/locales/bootstrap-datepicker.th.js"></script>
<script type="text/javascript">
	$('.datepicker').datepicker({
		autoclose: true
	});

</script>

<!-- Bootstrap Validator jQuery -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-validator-jquery/bootstrapValidator.min.js"></script>

<!-- Sweet Alert 2 -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/sweetalert2/sweetalert2.all.js"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js"></script>

<!-- Bootstrap Inputfile -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-fileinput/fileinput.min.js">
</script>

<!-- Bootstrap Tags Input -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>

<!-- Plugins -->
<!-- Chart JS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/plugins/chartjs/dist/Chart.min.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-datepicker-thai/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-datepicker-thai/js/bootstrap-datepicker-thai.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/bootstrap-datepicker-thai/js/locales/bootstrap-datepicker.th.js"></script>

<!-- drify -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/js/plugins/dropify.js"></script>


<script>
	$('.dropify').dropify();

</script>