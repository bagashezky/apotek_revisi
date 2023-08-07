<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Lihat Supplier</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<?php if($this->session->flashdata('sup_added')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Berhasil',
                                  text: '<?php echo $this->session->flashdata('sup_added'); ?>',
                                  type: 'success',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>
                 	</div>
                 	
				<?php endif; ?>

				<a href="<?php echo base_url('example/form_sup') ?>"><button type="button" class="btn btn-success" style="margin-bottom: 13px"><span class="fa fa-plus"></span> Tambah Supplier </button></a>
				
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Supplier</th>
							<th>Alamat</th>
							<th>No Telp</th>
							<th>Aksi</th>
							
						</tr>
					</thead>
						<?php $sn = 1 ?>
					<tbody>
						
						<?php foreach($supplier as $s){ ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo $s->nama_supplier ?></td>
							<td><?php echo $s->alamat ?></td>
							<td><?php echo $s->no_telp ?></td>
							<td style=" text-align: center;">
								<?php echo anchor('example/edit_form_sup/'.$s->id_supplier, '<button class="btn btn-info btn-xs" type="button"><span class="fa fa-pencil"> Edit </span></button>'); ?>
								<?php echo anchor('example/remove_sup/'.$s->id_supplier, '<button class="btn btn-danger btn-xs" type="button"><span class="fa fa-trash"> Hapus </span></button>');?>
					         </td>
						</tr>
						<?php $sn++; ?>

						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
