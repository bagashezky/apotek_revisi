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
