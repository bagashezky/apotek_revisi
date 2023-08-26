
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
						
					<div class="col-sm-4 invoice-col text-center">
    <address>
        <strong>Apotek Milan</strong>
        <br>Laporan Persediaan
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
		
						foreach ($data as $c) {
							?>
							<tr>
							<td><?php echo $c->nama_obat; ?></td>
                <td><?php echo $c->harga_obat; ?></td>
                <td><?php echo $c->obat_masuk; ?></td>
                <td><?php echo $c->obat_keluar; ?></td>
                <td><?php echo $c->jmlh_stok; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


