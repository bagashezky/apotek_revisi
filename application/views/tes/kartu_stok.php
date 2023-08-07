
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Kartu Stok</h2>
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
				<table id="kartu_stok" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th scope="col" rowspan="2">Tanggal</th>
							<th scope="col" rowspan="2">Nama Barang</th>
							<th scope="col" colspan="3">Pembelian</th>
							<th scope="col" colspan="3">Harga Pokok Penjualan</th>
							<th scope="col" colspan="3">Saldo Persediaan</th>
						</tr>
						<tr>
							<th scope="col">Unit</th>
							<th scope="col">Harga</th>
							<th scope="col">Total Biaya</th>
							<th scope="col">Unit</th>
							<th scope="col">Harga</th>
							<th scope="col">Total Biaya</th>
							<th scope="col">Unit</th>
							<th scope="col">Harga</th>
							<th scope="col">Total Biaya</th>
						</tr>
					</thead>
					<tbody>
          <?php 
			function compareByDate($a, $b) {
				$dateA = strtotime($a->tgl_beli);
				$dateB = strtotime($b->tgl_beli);
				
				if ($dateA == $dateB) {
					return 0;
				}
				
				return ($dateA < $dateB) ? -1 : 1;
			}
			
			usort($data, 'compareByDate');
			$totalBanyak = [];
			foreach($data as $c){
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
							<td><?php echo date('d F Y',strtotime($c->tgl_beli));  ?></td>
							<td><?php echo $c->nama_obat; ?></td>
							<td><?php if(empty($c->id_pembelian)) {} else { echo $c->banyak; } ?></td>
							<td><?php if(empty($c->id_pembelian)) {} else { echo $c->harga_obat; } ?></td>
							<td><?php if(empty($c->id_pembelian)) {} else { echo (int)$c->banyak*(int)$c->harga_obat; } ?></td>
							<td><?php if(empty($c->id_tagihan)) {} else { echo $c->banyak; } ?></td>
							<td><?php if(empty($c->id_tagihan)) {} else { echo $c->harga_obat; } ?></td>
							<td><?php if(empty($c->id_tagihan)) {} else { echo (int)$c->banyak*(int)$c->harga_jual; } ?></td>
							<td><?php echo $totalBanyak[$c->nama_obat]; ?></td>
							<td><?php echo $c->harga_obat; ?></td>
							<td><?php echo $totalBanyak[$c->nama_obat]*$c->harga_obat; ?></td>
						</tr>
						<?php } ?>
                  
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


