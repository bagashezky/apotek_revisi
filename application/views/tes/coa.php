
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Coa</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>

			<div class="x_content">
				<?php if($this->session->flashdata('coa_added')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Berhasil',
                                  text: '<?php echo $this->session->flashdata('coa_added'); ?>',
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
				
				

				<a href="<?php echo base_url('example/form_coa') ?>"><button type="button" class="btn btn-success" style="margin-bottom: 13px"><span class="fa fa-plus"></span> Tambah Kategori </button></a>
				
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Coa</th>
							<th>Nama Akun</th>
							<th>Header Akun</th>
							<th>Posisi Akun</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<?php $sn = 1 ?>
					<tbody>
						<?php foreach($coa as $c){ ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo $c->kode_coa ?></td>
							<td><?php echo $c->nama_coa ?></td>
							<td><?php echo $c->header_akun ?></td>
							<td><?php echo $c->posisi_db_cr ?></td>
							<td style=" text-align: center;">
								<?php echo anchor('example/edit_form_coa/'.$c->kode_coa, '<button class="btn btn-info btn-xs" type="button"><span class="fa fa-pencil"></span></button>'); ?>
								<?php echo anchor('example/remove_coa/'.$c->kode_coa, '<button class="btn btn-danger btn-xs" type="button"><span class="fa fa-trash"></span></button>');?>
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



