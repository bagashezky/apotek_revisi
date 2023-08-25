
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Laporan Persediaan</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>

			<div class="x_content">
				<?php 
					//var_dump($data);
				?>
				<form method="POST" action="<?php echo site_url('example/lap_persediaan'); ?>">
					<div class="row">
						
						<div class="col-sm-4 invoice-col" style="text-align: center;">
    <address>
        <strong>Apotek Milan</strong>
        <br>Kartu Stok
    </address>
</div>
				</div>
				</form>
					<table id="kartu_stok" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th scope="col" rowspan="2">Nama Obat</th>
							<th scope="col" rowspan="2">Harga Barang</th>
							<th scope="col" colspan="2">Mutasi</th>
							<th scope="col" rowspan="2">Stok Saat Ini</th>
						</tr>
						<tr>
							<th scope="col">in</th>
							<th scope="col">out</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$totalBanyak = [];
						foreach ($data as $c) {
							if (isset($c->id_pembelian)) {
								// Periksa apakah nama obat sudah ada dalam $totalBanyak
								if (isset($totalBanyak[$c->nama_obat])) {
									// Jika sudah ada, tambahkan jumlah banyak
									$totalBanyak[$c->nama_obat] += intval($c->banyak);
								} else {
									// Jika belum ada, tambahkan nama obat dan jumlah banyak ke $totalBanyak
									$totalBanyak[$c->nama_obat] = intval($c->banyak);
								}
							} elseif (isset($c->id_tagihan)) {
								// Periksa apakah nama obat sudah ada dalam $totalBanyak
								if (isset($totalBanyak[$c->nama_obat])) {
									// Jika sudah ada, kurangi jumlah banyak
									$totalBanyak[$c->nama_obat] -= intval($c->banyak);
								} else {
									// Jika belum ada, tambahkan nama obat dengan jumlah banyak negatif ke $totalBanyak
									$totalBanyak[$c->nama_obat] = -intval($c->banyak);
								}
							}
					?>
							<tr>
								<td><?php echo $c->nama_obat; ?></td>
								<td><?php echo $c->harga_obat; ?></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


