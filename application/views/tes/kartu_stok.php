
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
				<form method="POST" action="<?php echo site_url('example/kartu_Stok'); ?>">
					<div class="row">
						<div class="col-lg-1">
							<div class="input-group">
								<select class="form-control" name="bulan">
									<option value="" disabled="" selected="">Bulan</option>
									<option value="1">Januari</option>
									<option value="2">Februari</option>
									<option value="3">Maret</option>
									<option value="4">April</option>
									<option value="5">Mei</option>
									<option value="6">Juni</option>
									<option value="7">Juli</option>
									<option value="8">Agustus</option>
									<option value="9">September</option>
									<option value="10">Oktober</option>
									<option value="11">November</option>
									<option value="12">Desember</option>
								</select>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="input-group">
								<select class="form-control" name="tahun">
									<option value="" disabled="" selected="">Tahun</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
									<option value="2023">2023</option>
								</select>
							</div>
						</div>
						<div class="col-xs-1">
							<input class="btn btn-primary" type="submit" value="Filter">
						</div>
						<div class="col-sm-4 invoice-col" style="text-align: center;">
    <address>
        <strong>Apotek Milan</strong>
        <br>Kartu Stok
		<?php
            if ($selected_bulan && $selected_tahun) {
                // Convert the numeric month value to its corresponding name
                $month_names = array(
                    '1' => 'Januari',
                    '2' => 'Februari',
                    '3' => 'Maret',
                    '4' => 'April',
                    '5' => 'Mei',
                    '6' => 'Juni',
                    '7' => 'Juli',
                    '8' => 'Agustus',
                    '9' => 'September',
                    '10' => 'Oktober',
                    '11' => 'November',
                    '12' => 'Desember'
                );

                $selected_bulan_name = $month_names[$selected_bulan];

                echo '<br>Periode ' . $selected_bulan_name . ' ' . $selected_tahun;
            }
        ?>
    </address>
</div>
					</div>
				</form>

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


