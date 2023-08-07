<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url('assets/images/favicon1.png') ?>" type="image/png" />

	<title><?php echo $title ?></title>

	<!-- Import CSS -->
	<link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/google-code-prettify/bin/prettify.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/select2/dist/css/select2.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/switchery/dist/switchery.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/starrr/dist/starrr.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') ?>" rel="stylesheet">


	<link href="<?php echo base_url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">

	<!-- PNotify -->
	<link href="<?php echo base_url('vendors/pnotify/dist/pnotify.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/pnotify/dist/pnotify.nonblock.css') ?>" rel="stylesheet">


	<!-- FullCalendar -->
	<link href="<?php echo base_url('vendors/fullcalendar/dist/fullcalendar.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/fullcalendar/dist/fullcalendar.print.css') ?>" rel="stylesheet" media="print">


	<!-- Datatables -->
	<link href="<?php echo base_url('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') ?>" rel="stylesheet">
	<!-- Custom Theme Style -->
	<link href="<?php echo base_url('assets/css/custom.min.css') ?>" rel="stylesheet">
	<!-- /Import CSS -->




</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<?php echo $sidenavs ?>
			<?php echo $navs ?>
			<!-- Page Content -->
			<div class="right_col" role="main">
				<div>
					<div class="page-title">
						<div class="title_left">
							<h3><?php echo $header ?></h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<?php echo $content ?>
				</div>

			</div>

			<!-- /Page Content -->
			<!-- Footer Content -->
			<footer>
				<div class="clearfix"></div>
			</footer>
			<!-- /Footer Content -->
		</div>
	</div>

	<!-- Import ADMINLTE -->
	

	<!-- Import Javascript -->
	<script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/jquery-ui/jquery-ui.js') ?>"></script>
	<script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/fastclick/lib/fastclick.js') ?>"></script>
	<script src="<?php echo base_url('vendors/nprogress/nprogress.js') ?>"></script>

	<script src="<?php echo base_url('vendors/Chart.js/dist/Chart.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script>

	<script src="<?php echo base_url('vendors/morris.js/morris.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/raphael/raphael.min.js') ?>"></script>

	<script src="<?php echo base_url('vendors/gauge.js/dist/gauge.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/iCheck/icheck.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/skycons/skycons.js') ?>"></script>
	<!-- Flot -->
	<script src="<?php echo base_url('vendors/Flot/jquery.flot.js') ?>"></script>
	<script src="<?php echo base_url('vendors/Flot/jquery.flot.pie.js') ?>"></script>
	<script src="<?php echo base_url('vendors/Flot/jquery.flot.time.js') ?>"></script>
	<script src="<?php echo base_url('vendors/Flot/jquery.flot.stack.js') ?>"></script>
	<script src="<?php echo base_url('vendors/Flot/jquery.flot.resize.js') ?>"></script>
	<!-- Flot Plugins -->
	<script src="<?php echo base_url('vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
	<script src="<?php echo base_url('vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/flot.curvedlines/curvedLines.js') ?>"></script>
	<!-- JQVMap -->
	<script src="<?php echo base_url('vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
	<script src="<?php echo base_url('vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
	<script src="<?php echo base_url('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>

	<script src="<?php echo base_url('vendors/DateJS/build/date.js') ?>"></script>
	<!-- Bootstrap Date Range Picker -->
	<script src="<?php echo base_url('vendors/moment/min/moment.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
	<!-- bootstrap-datetimepicker -->
	<script src="<?php echo base_url('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') ?>"></script>



	<!-- FullCalendar -->
	<script src="<?php echo base_url('vendors/fullcalendar/dist/fullcalendar.min.js') ?>"></script>


	<!-- Ion.RangeSlider -->
	<script src="<?php echo base_url('vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') ?>"></script>
	<!-- Bootstrap Colorpicker -->
	<script src="<?php echo base_url('vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') ?>"></script>
	<!-- jquery.inputmask -->
	<script src="<?php echo base_url('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js') ?>"></script>
	<!-- jQuery Knob -->
	<script src="<?php echo base_url('vendors/jquery-knob/dist/jquery.knob.min.js') ?>"></script>


	<script src="<?php echo base_url('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/jquery.hotkeys/jquery.hotkeys.js') ?>"></script>
	<script src="<?php echo base_url('vendors/google-code-prettify/src/prettify.js') ?>"></script>
	<script src="<?php echo base_url('vendors/jquery.tagsinput/src/jquery.tagsinput.js') ?>"></script>
	<script src="<?php echo base_url('vendors/switchery/dist/switchery.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/select2/dist/js/select2.full.min.js') ?>"></script>

	<!-- Validate -->
	<script src="<?php echo base_url('vendors/parsleyjs/dist/parsley.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/validator/validator.js') ?>"></script>

	<script src="<?php echo base_url('vendors/autosize/dist/autosize.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/starrr/dist/starrr.js') ?>"></script>
	<!-- Datatables -->
	<script src="<?php echo base_url('vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>"></script>
	<script src="<?php echo base_url('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/jszip/dist/jszip.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/pdfmake/build/pdfmake.min.js') ?>"></script>
	<script src="<?php echo base_url('vendors/pdfmake/build/vfs_fonts.js') ?>"></script>
	<!-- Custom JS -->


	<!-- PNotify -->
	<script src="<?php echo base_url('vendors/pnotify/dist/pnotify.js') ?>"></script>
	<script src="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.js') ?>"></script>
	<script src="<?php echo base_url('vendors/pnotify/dist/pnotify.nonblock.js') ?>"></script>



	<script src="<?php echo base_url('assets/js/custom.min.js') ?>"></script>
	<!-- /Import Javascript -->


	<!-- Date Picker -->
	<script>
		$('#myDatepicker22').datetimepicker({
			format: 'DD-MM-YYYY',
			allowInputToggle: true
		});
		$('#myDatepicker2').datetimepicker({
			format: 'DD-MM-YYYY',
			allowInputToggle: true
		});

		$('#myDatepicker3').datetimepicker({
			format: 'hh:mm A'
		});

		$('#myDatepicker4').datetimepicker({
			ignoreReadonly: true,
			allowInputToggle: true
		});

		$('#datetimepicker6').datetimepicker();

		$('#datetimepicker7').datetimepicker({
			useCurrent: false
		});

		$("#datetimepicker6").on("dp.change", function(e) {
			$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
		});

		$("#datetimepicker7").on("dp.change", function(e) {
			$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
		});
	</script>

	<!-- remove welcome notif pnotify and add notif -->
	<script>
		$(document).ready(function() {
			$('.ui-pnotify').remove();
			$('.source').trigger("click");

		});
	</script>

	<script type="text/javascript">
		
		var buku_besar_kas = $('#buku_besar_kas').DataTable({
			"paging": true,
			"ordering": true,
			"info": true,
			"searching": true,
		});	
		
		var buku_besar_persediaan = $('#buku_besar_persediaan').DataTable({
			"paging": true,
			"ordering": true,
			"info": true,
			"searching": true,
		});
		
		var tablenambah = $('#nambah').DataTable({

		});
	</script>




	<!-- Add row and calculate -->

	<script type="text/javascript">
		var transaksi = $('#prod').DataTable({
			"paging": false,
			"ordering": false,
			"info": false,
			"searching": false,
		});

		var counter = 1;

		$('#addRow').on('click', function() {
			transaksi.row.add([
				'<select required="required" style="width:100%;" class="form-control nama_obat" id="nama_obat' + counter + '" name="nama_obat[]" data-jmlh_stok="#jmlh_stok' + counter + '" data-unit="#unit' + counter + '" data-harga_jual="#harga_jual' + counter + '"><option selected="true" value="" disabled ></option><?php foreach ($get_med as $gm) { ?><option value="<?php echo $gm; ?>"><?php echo $gm; ?></option><?php  } ?></select>',
				'<input id="jmlh_stok' + counter + '" name="jmlh_stok[]" class="form-control jmlh_stok" readonly >',
				'<input id="unit' + counter + '" name="unit[]" class="form-control" readonly>',
				'<input id="harga_jual' + counter + '" name="harga_jual[]" class="form-control harga_jual" readonly>',
				'<input type="number" id="banyak' + counter + '" name="banyak[]" class="form-control banyak" required="required">',
				'<input id="subtotal' + counter + '" name="subtotal[]" class="form-control subtotal" readonly>',
				'<button id="removeproduk" class="btn btn-danger btn-sm" type="button"><span class="fa fa-trash"></span> Hapus</button>',
			]).draw(false);

			var myOpt = [];
			$("select").each(function() {
				myOpt.push($(this).val());
			});
			$("select").each(function() {
				$(this).find("option").prop('hidden', false);
				var sel = $(this);
				$.each(myOpt, function(key, value) {
					if ((value != "") && (value != sel.val())) {
						sel.find("option").filter('[value="' + value + '"]').prop('hidden', true);
					}
				});
			});

			counter++;

		});


		$('#addRow').click();


		$('#prod').on("click", "#removeproduk", function() {
			console.log($(this).parent());
			t.row($(this).parents('tr')).remove().draw(false);
			updateTotal();
		});



		$('#prod').on('change', '.nama_obat', function() {

			var $select = $(this);
			var nama_obat = $select.val();


			$.ajax({
				type: "POST",
				url: "<?php echo base_url('example/product') ?>",
				dataType: "JSON",
				data: {
					nama_obat: nama_obat
				},
				cache: false,
				success: function(data) {
					$.each(data, function(nama_obat, jmlh_stok, unit, harga_jual) {
						$($select.data('jmlh_stok')).val(data.jmlh_stok);
						$($select.data('unit')).val(data.unit);
						$($select.data('harga_jual')).val(data.harga_jual);
					});
				}
			});

		});



		$('#prod').on('change', '.banyak', function() {
			updateSubtotal();

		});

		function updateSubtotal() {

			$(".banyak").each(function() {
				var $row = $(this).closest('tr');
				var unitStock = parseInt($row.find('.jmlh_stok').val());
				var unitCount = parseInt($row.find('.banyak').val());


				if (unitCount > unitStock) {
					$row.find('.banyak').val(unitStock);
					updateSubtotal();
				} else if (unitCount < 0) {
					$row.find('.banyak').val(0);
					updateSubtotal();

				} else {

					var Sub = parseInt(($row.find('.harga_jual').val()) * unitCount);
					$row.find('.subtotal').val(Sub);
					updateTotal();


				}
			});
		}

		function updateTotal() {
			var grandtotal = 0;
			$('.subtotal').each(function() {
				grandtotal += parseInt($(this).val());
			});
			$('#grandtotal').val(grandtotal);
		}
	</script>

	<script>
		$.ajax({

			url: "<?php echo base_url('example/chart') ?>",
			method: "GET",

			success: function(data) {
				var data = JSON.parse(data);
				console.log(data);


				var jmlh_stok = [];
				var nama_kategori = [];

				for (var i in data) {
					jmlh_stok.push(data[i].jmlh_stok);
					nama_kategori.push(data[i].nama_kategori);
				}

				var chartdata = {
					labels: nama_kategori,
					datasets: [{
						label: 'jmlh_stok obat',
						backgroundColor: 'rgba(26, 187, 156, 0.7)',
						borderColor: 'rgba(26, 187, 156, 0.7)',
						hoverBackgroundColor: 'rgba(26, 187, 156, 1)',
						hoverBorderColor: 'rgba(26, 187, 156, 1)',
						data: jmlh_stok
					}]
				};

				var ctx = $("#canvas");

				var barGraph = new Chart(ctx, {
					type: 'bar',
					data: chartdata
				});


			}
		});
	</script>

	<script>
		$('#coba').datetimepicker({

				format: 'YYYY',
				allowInputToggle: true,

			})
			.on('dp.change', function(e) {

				transChart();

			});

		function transChart() {
			var tahun_beli = $('#coba').data('date');
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('example/chart_trans') ?>",
				dataType: "JSON",

				data: {
					"tahun_beli": tahun_beli
				},
				success: function(data) {

					console.log(data);

					var total = [];
					var month = [];

					for (var i in data) {
						total.push(data[i].total);
						month.push(data[i].month);
					}

					var chartdata = {
						labels: month,
						datasets: [{
							label: 'Total Penjualan',
							backgroundColor: 'rgba(26, 187, 156, 0.4)',
							borderColor: 'rgba(26, 187, 156, 0.7)',
							hoverBackgroundColor: 'rgba(26, 187, 156, 0.6)',
							hoverBorderColor: 'rgba(26, 187, 156, 1)',
							lineTension: 0,
							data: total
						}]
					};

					var ctx = $("#transaksi");

					var barGraph = new Chart(ctx, {
						type: 'line',
						data: chartdata,

					});


				}
			});


			$.ajax({
				url: "<?php echo base_url('example/topdemand') ?>",
				async: false,
				type: "POST",
				data: {
					"tahun_beli": tahun_beli
				},
				dataType: "JSON",
				success: function(data) {

					var html = '';

					for (i = 0; i < data.length; i++) {
						html += '<tr >' +
							'<td>' + (i + 1) + '</td>' +
							'<td>' + data[i].nama_obat + '</td>' +
							'<td>' + data[i].totSold + '</td>' +

							'</tr>';
					}
					$("#topdemand").html(html); //pass the data to your tbody
				}
			})


			$.ajax({
				url: "<?php echo base_url('example/leastdemand') ?>",
				async: false,
				type: "POST",
				data: {
					"tahun_beli": tahun_beli
				},
				dataType: "JSON",
				success: function(data) {

					var html = '';

					for (i = 0; i < data.length; i++) {
						html += '<tr >' +
							'<td>' + (i + 1) + '</td>' +
							'<td>' + data[i].nama_obat + '</td>' +
							'<td>' + data[i].totSold + '</td>' +

							'</tr>';
					}
					$("#leastdemand").html(html); //pass the data to your tbody
				}
			})


			$.ajax({
				url: "<?php echo base_url('example/highearn') ?>",
				async: false,
				type: "POST",
				data: {
					"tahun_beli": tahun_beli
				},
				dataType: "JSON",
				success: function(data) {

					var html = '';

					for (i = 0; i < data.length; i++) {
						html += '<tr >' +
							'<td>' + (i + 1) + '</td>' +
							'<td>' + data[i].nama_obat + '</td>' +
							'<td>' + data[i].totEarned + '</td>' +

							'</tr>';
					}
					$("#highearn").html(html); //pass the data to your tbody
				}
			})

			$.ajax({
				url: "<?php echo base_url('example/lowearn') ?>",
				async: false,
				type: "POST",
				data: {
					"tahun_beli": tahun_beli
				},
				dataType: "JSON",
				success: function(data) {

					var html = '';

					for (i = 0; i < data.length; i++) {
						html += '<tr >' +
							'<td>' + (i + 1) + '</td>' +
							'<td>' + data[i].nama_obat + '</td>' +
							'<td>' + data[i].totEarned + '</td>' +

							'</tr>';
					}
					$("#lowearn").html(html); //pass the data to your tbody
				}
			})
		}
	</script>

	<script>
		$('#dada').datetimepicker({

				format: 'YYYY',
				allowInputToggle: true
			})
			.on('dp.change', function(e) {

				purChart();
			});

		function purChart() {

			var tahun_beli = $('#dada').data('date');


			$.ajax({
				type: "POST",
				url: "<?php echo base_url('example/chart_purchase') ?>",
				dataType: "JSON",

				data: {
					"tahun_beli": tahun_beli
				},
				success: function(data) {

					console.log(data);

					var total = [];
					var month = [];

					for (var i in data) {
						total.push(data[i].total);
						month.push(data[i].month);
					}

					var chartdata = {
						labels: month,
						datasets: [{
							label: 'Total Pembelian',
							backgroundColor: 'rgba(57, 80, 103, 0.4)',
							borderColor: 'rgba(57, 80, 103, 0.7)',
							hoverBackgroundColor: 'rgba(57, 80, 103, 0.6)',
							hoverBorderColor: 'rgba(57, 80, 103, 1)',
							lineTension: 0,
							data: total
						}]

					};

					var ctx = $("#purdate");

					var barGraph = new Chart(ctx, {
						type: 'line',
						data: chartdata
					});


				}
			});


			$.ajax({
				url: "<?php echo base_url('example/toppurchase') ?>",
				async: false,
				type: "POST",
				data: {
					"tahun_beli": tahun_beli
				},
				dataType: "JSON",
				success: function(data) {

					var html = '';

					for (i = 0; i < data.length; i++) {
						html += '<tr >' +
							'<td>' + (i + 1) + '</td>' +
							'<td>' + data[i].nama_obat + '</td>' +
							'<td>' + data[i].totSold + '</td>' +

							'</tr>';
					}
					$("#toppurchase").html(html); //pass the data to your tbody
				}
			})


			$.ajax({
				url: "<?php echo base_url('example/leastpurchase') ?>",
				async: false,
				type: "POST",
				data: {
					"tahun_beli": tahun_beli
				},
				dataType: "JSON",
				success: function(data) {

					var html = '';

					for (i = 0; i < data.length; i++) {
						html += '<tr >' +
							'<td>' + (i + 1) + '</td>' +
							'<td>' + data[i].nama_obat + '</td>' +
							'<td>' + data[i].totSold + '</td>' +

							'</tr>';
					}
					$("#leastpurchase").html(html); //pass the data to your tbody
				}
			})


			$.ajax({
				url: "<?php echo base_url('example/highpurchase') ?>",
				async: false,
				type: "POST",
				data: {
					"tahun_beli": tahun_beli
				},
				dataType: "JSON",
				success: function(data) {

					var html = '';

					for (i = 0; i < data.length; i++) {
						html += '<tr >' +
							'<td>' + (i + 1) + '</td>' +
							'<td>' + data[i].nama_obat + '</td>' +
							'<td>' + data[i].totEarned + '</td>' +

							'</tr>';
					}
					$("#highpurchase").html(html); //pass the data to your tbody
				}
			})

			$.ajax({
				url: "<?php echo base_url('example/lowpurchase') ?>",
				async: false,
				type: "POST",
				data: {
					"tahun_beli": tahun_beli
				},
				dataType: "JSON",
				success: function(data) {

					var html = '';

					for (i = 0; i < data.length; i++) {
						html += '<tr >' +
							'<td>' + (i + 1) + '</td>' +
							'<td>' + data[i].nama_obat + '</td>' +
							'<td>' + data[i].totEarned + '</td>' +

							'</tr>';
					}
					$("#lowpurchase").html(html); //pass the data to your tbody
				}
			})



		}
	</script>


	<script type="text/javascript">
		var purchase = $('#purchase').DataTable({
			"paging": false,
			"ordering": false,
			"info": false,
			"searching": false,
		});

		$(document).on('change', '.nama_supplier', function() {

			var nama_supplier = $('.nama_supplier').val();


			$.ajax({
				url: "<?php echo base_url('example/getmedbysupplier') ?>",
				method: "POST",
				data: {
					nama_supplier: nama_supplier
				},
				async: false,
				dataType: 'json',
				success: function(data) {
					var html = '';
					var i;
					html += '<option selected="true" value="" disabled >Pilih obat</option>';
					for (i = 0; i < data.length; i++) {
						html += '<option>' + data[i].nama_obat + '</option>';
					}
					$('.nama_obat').html(html);

				}
			});
		});
		
		$(document).on('change', '.nama_kategori', function() {

			var nama_kategori = $('.nama_kategori').val();


			$.ajax({
				url: "<?php echo base_url('example/getcatbyrak') ?>",
				method: "POST",
				data: {
					nama_kategori: nama_kategori
				},
				async: false,
				dataType: 'json',
				success: function(data) {
					var html = '';
					var i;
					html += '<option selected="true" value="" disabled >Pilih Rak</option>';
					for (i = 0; i < data.length; i++) {
						html += '<option>' + data[i].nama_rak + '</option>';
					}
					$('.nama_rak').html(html);

				}
			});
		});

		var count = 1;

		$('#addpurchase').on('click', function() {

			purchase.row.add([
				'<select required="required" style="width:100%;" class="form-control nama_obat" id="nama_obat' + count + '" name="nama_obat[]" data-jmlh_stok="#jmlh_stok' + count + '" data-unit="#unit' + count + '" data-harga_obat="#harga_obat' + count + '"><option selected="true" value="" disabled >Pilih Supplier</option></select>',
				// '<input id="jmlh_stok' + count + '" name="jmlh_stok[]" class="form-control jmlh_stok" readonly >',
				'<input id="unit' + count + '" name="unit[]" class="form-control unit" readonly>',
				'<input id="harga_obat' + count + '" name="harga_obat[]" class="form-control harga_obat" readonly>',
				'<input type="number" id="banyak' + count + '" name="banyak[]" class="form-control banyak" required="required">',
				'<input id="subtotal' + count + '" name="subtotal[]" class="form-control subtotal" readonly>',
				'<button id="removeproduk" class="btn btn-danger btn-sm" type="button"><span class="fa fa-trash"></span> Hapus</button>',
			]).draw(false);

			var myOpt = [];
			$("select").each(function() {
				myOpt.push($(this).val());
			});
			$("select").each(function() {
				$(this).find("option").prop('hidden', false);
				var sel = $(this);
				$.each(myOpt, function(key, value) {
					if ((value != "") && (value != sel.val())) {
						sel.find("option").filter('[value="' + value + '"]').prop('hidden', true);
					}
				});
			});

			count++;

		});



		$('#addpurchase').click();



		$('#purchase').on("click", "#removeproduk", function() {
			console.log($(this).parent());
			purchase.row($(this).parents('tr')).remove().draw(false);
			updatePurchase();
		});


		$('#purchase').on('change', '.nama_obat', function() {
			var $select = $(this);
			var nama_obat = $select.val();

			$.ajax({
				type: "POST",
				url: "<?php echo base_url('example/product') ?>",
				dataType: "JSON",
				data: {
					nama_obat: nama_obat
				},
				cache: false,
				success: function(data) {
					$.each(data, function(nama_obat, jmlh_stok, unit, harga_obat) {
						$($select.data('jmlh_stok')).val(data.jmlh_stok);
						$($select.data('unit')).val(data.unit);
						$($select.data('harga_obat')).val(data.harga_obat);
					});
				}
			});

		});



		$('#purchase').on('change', '.banyak', function() {
			updateSubtotalp();

		});

		function updateSubtotalp() {

			$(".banyak").each(function() {
				var $row = $(this).closest('tr');
				var unitStock = parseInt($row.find('.jmlh_stok').val());
				var unitCount = parseInt($row.find('.banyak').val());


				if (unitCount < 0) {
					$row.find('.banyak').val(0);
					updateSubtotal();

				} else {

					var Sub = parseInt(($row.find('.harga_obat').val()) * unitCount);
					$row.find('.subtotal').val(Sub);
					updateTotal();


				}
			});
		}

		function updatePurchase() {
			var grandtotal = 0;
			$('.subtotal').each(function() {
				grandtotal += parseInt($(this).val());
			});
			$('#grandtotal').val(grandtotal);
		}
	</script>


	<script>
		$('#gabung').datetimepicker({

				format: 'YYYY',
				allowInputToggle: true
			})
			.on('dp.change', function(e) {

				gabungChart();
			});

		function gabungChart() {

			var tahun_beli = $('#gabung').data('date');


			$.ajax({
				type: "POST",
				url: "<?php echo base_url('example/gabung') ?>",
				dataType: "JSON",

				data: {
					"tahun_beli": tahun_beli
				},
				success: function(data) {

					console.log(data);

					var total_inv = [];
					var total_pur = [];
					var month = [];

					for (var i in data) {
						total_inv.push(data[i].total_inv);
						total_pur.push(data[i].total_pur);
						month.push(data[i].month);
					}

					var chartdata = {
						labels: month,
						datasets: [{
								label: 'Total Pembelian',
								backgroundColor: 'rgba(57, 80, 103, 0.4)',
								borderColor: 'rgba(57, 80, 103, 0.7)',
								hoverBackgroundColor: 'rgba(57, 80, 103, 0.6)',
								hoverBorderColor: 'rgba(57, 80, 103, 1)',

								data: total_pur
							},
							{
								label: 'Total Penjualan',
								backgroundColor: 'rgba(26, 187, 156, 0.3)',
								borderColor: 'rgba(26, 187, 156, 0.7)',
								hoverBackgroundColor: 'rgba(26, 187, 156, 0.6)',
								hoverBorderColor: 'rgba(26, 187, 156, 1)',
								data: total_inv


							}
						]

					};

					var ctx = $("#report");

					var barGraph = new Chart(ctx, {
						type: 'line',
						data: chartdata,
						options: {
							responsive: true,
							legend: {


							},

						}
					});


				}
			});



			$.ajax({
				url: "<?php echo base_url('example/gabung') ?>",
				async: false,
				type: "POST",
				data: {
					"tahun_beli": tahun_beli
				},
				dataType: "JSON",
				success: function(data) {

					var html = '';
					var mytotal = '';
					var total_inv = 0;
					var total_pur = 0;


					for (i = 0; i < data.length; i++) {
						html += '<tr >' +
							'<td>' + (i + 1) + '</td>' +
							'<td>' + data[i].month + '</td>' +
							// '<td>' + (parseInt(data[i].total_inv) || 0) + '</td>' +
							'<td>' + (parseInt(data[i].total_pur) || 0) + '</td>' +
							// '<td>' + (data[i].total_inv - data[i].total_pur) + '</td>' +
							'</tr>';
					}
					$("#laba").html(html); //pass the data to your tbody


					for (i = 0; i < data.length; i++) {
						// total_inv += parseInt(data[i].total_inv) || 0;
						total_pur += parseInt(data[i].total_pur) || 0;
						mytotal = '<tr >' +
							'<td>#</td>' +
							'<td>Total</td>' +
							// '<td>' + total_inv + '</td>' +
							'<td>' + total_pur + '</td>' +
							// '<td>' + (total_inv - total_pur) + '</td>' +
							'</tr>';
					}
					$("#labatotal").html(mytotal); //pass the data to your tbody
				}


			})



		}
	</script>

	<script>
		$.ajax({

			url: "<?php echo base_url('example/chart_unit') ?>",
			method: "GET",

			success: function(data) {
				var data = JSON.parse(data);
				console.log(data);


				var jmlh_stok = [];
				var unit = [];

				for (var i in data) {
					jmlh_stok.push(data[i].jmlh_stok);
					unit.push(data[i].unit);
				}

				var chartdata = {
					labels: unit,
					datasets: [{
						label: 'Jumlah Jenis obat',
						backgroundColor: 'rgba(26, 187, 156, 0.7)',
						borderColor: 'rgba(26, 187, 156, 0.7)',
						hoverBackgroundColor: 'rgba(26, 187, 156, 1)',
						hoverBorderColor: 'rgba(26, 187, 156, 1)',
						data: jmlh_stok
					}]
				};

				var ctx = $("#unit_chart");

				var barGraph = new Chart(ctx, {
					type: 'bar',
					data: chartdata
				});


			}
		});
	</script>


</body>

</html>
