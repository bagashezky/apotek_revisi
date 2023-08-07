


<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Lihat Pembelian</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix">
				</div>
			</div>

			<div class="x_content">
				<?php if($this->session->flashdata('pur_added')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Berhasil',
                                  text: '<?php echo $this->session->flashdata('pur_added'); ?>',
                                  type: 'success',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>
                 	</div>
                 	
				<?php endif; ?>

				<a href="<?php echo base_url('example/form_purchase') ?>"><button type="button" class="btn btn-success" style="margin-bottom: 13px"><span class="fa fa-plus"></span> Tambah Pembelian </button></a>
				
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Tanggal Transaksi</th>
							<th>No Referensi</th>
							<th>Nama Supplier</th>
							
							<th>Jumlah Beli</th>
							<th>Total Pembelian</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($pembelian as $p){ ?>
						<tr>
							<td><?php echo date('j F Y',strtotime($p->tgl_beli)) ?></td>
							<td><?php echo $p->ref ?></td>
							<td><?php echo $p->nama_supplier ?></td>

							
							<td><?php echo $p->banyak ?></td>
							<td>Rp <?php echo number_format($p->grandtotal) ?></td>
							
							<td style=" text-align: center;">
								<?php echo anchor('example/purchase_page/'.$p->ref, '<button class="btn btn-info btn-xs" type="button"><span class="fa fa-newspaper-o"></span></button>');?>
								
								<?php echo anchor('example/remove_purchase/'.$p->ref, '<button class="btn btn-danger btn-xs" type="button"><span class="fa fa-trash"></span></button>');?>


					         </td>
						</tr>

						<?php } ?>
					</tbody>

				</table>
		</div>
	</div>
	</div>

</div>


