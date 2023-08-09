<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Buku Besar</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>

			<div class="x_content">
				<?php if($this->session->flashdata('jurnal_ada')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Berhasil',
                                  text: '<?php echo $this->session->flashdata('jurnal_ada'); ?>',
                                  type: 'success',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>
                 	</div>
                 	
				<?php endif; ?>
				
				<?php if($this->session->flashdata('coa_eror')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Error',
                                  text: '<?php echo $this->session->flashdata('coa_eror'); ?>',
                                  type: 'error',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>
                 	</div>
                 	
				<?php endif; ?>
		
		<a href="<?php echo base_url('example/form_bukubesar') ?>"><button type="button" class="btn btn-success" style="margin-bottom: 13px"><span class="fa fa-plus"></span> Tambah Data </button></a>
		
		<form method="POST" action="<?php echo site_url('example/buku_besar'); ?>">
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
        <br>Buku Besar
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

		<div class="x_content">
			<h4>Buku Besar Kas</h4>

			
				<table id="buku_besar_kas" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th scope="col" rowspan="2">No</th>
							<th scope="col" rowspan="2">Tanggal</th>
							<th scope="col" rowspan="2">Keterangan</th>
							<th scope="col" rowspan="2">Debet</th>
							<th scope="col" rowspan="2">Kredit</th>
							<th scope="col" colspan="2">Saldo</th>
						</tr>
						<tr>
							<th scope="col">Debet</th>
							<th scope="col">Kredit</th>
						</tr>
					</thead>

					<?php 
          $sn = 1;
          $saldo_d = '';
          $saldo_k = '';
           ?>
					<tbody>
          <?php foreach($buku_besar_kas as $c){ 
					$saldo_d = (int)$saldo_d+(int)$c->debet-(int)$c->kredit;
		  ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo date('d F Y',strtotime($c->tanggal)); ?></td>
							<td><?php echo $c->keterangan ?></td>
							<td><?php echo $c->debet ?></td>
							<td><?php echo $c->kredit ?></td>
							<td><?php echo $saldo_d ?></td>
							<td><?php  ?></td>
						</tr>
						<?php $sn++; ?>

						<?php } ?>
                  
					</tbody>
				</table>
			</div>
			
			<div class="x_content">
				<h4>Buku Besar Persediaan Barang</h4>
				<table id="buku_besar_persediaan" class="table table-striped table-bordered">
					<thead>
						<tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Debet</th>
                    <th scope="col">Kredit</th>
                    <th scope="col">Saldo Debet</th>
                    <th scope="col">Saldo Kredit</th>
                    <!-- <th scope="col">Action</th> -->
						</tr>
					</thead>

					<?php 
          $sn = 1;
          $saldo_d = '';
          $saldo_k = '';
           ?>
					<tbody>
          <?php foreach($buku_besar_persediaan as $c){ 
					$saldo_d = (int)$saldo_d+(int)$c->debet-(int)$c->kredit;
		  ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo date('d F Y',strtotime($c->tanggal)); ?></td>
							<td><?php echo $c->keterangan ?></td>
							<td><?php echo $c->debet ?></td>
							<td><?php echo $c->kredit ?></td>
							<td><?php echo $saldo_d ?></td>
							<td><?php  ?></td>
							<!-- <td>Delete</td> -->
						</tr>
						<?php $sn++; ?>

						<?php } ?>
                  
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
	</div>
