
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Penyimpanan</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>

			<div class="x_content">
				<?php if($this->session->flashdata('nama_rak_penyimpanan_added')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Berhasil',
                                  text: '<?php echo $this->session->flashdata('nama_rak_penyimpanan_added'); ?>',
                                  type: 'success',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>
                 	</div>
                 	
				<?php endif; ?>
				
				<?php if($this->session->flashdata('nama_rak_error')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Error',
                                  text: '<?php echo $this->session->flashdata('nama_rak_error'); ?>',
                                  type: 'error',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>
                 	</div>
                 	
				<?php endif; ?>
				

				<a href="<?php echo base_url('example/form_penyimpanan') ?>"><button type="button" class="btn btn-success" style="margin-bottom: 13px"><span class="fa fa-plus"></span> Tambah Rak Penyimpanan </button></a>
				
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Rak Penyimpanan</th>
							
							<th>Aksi</th>
						</tr>
					</thead>

					<?php $sn = 1 ?>
					<tbody>
						<?php foreach($rak_penyimpanan as $u){ ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo $u->nama_rak_penyimpanan ?></td>
							
							<td style=" text-align: center;">
								<?php echo anchor('example/edit_form_penyimpanan/'.$u->kode_rak, '<button class="btn btn-info btn-xs" type="button"><span class="fa fa-pencil"> Edit </span></button>'); ?>
								<?php echo anchor('example/remove_penyimpanan/'.$u->kode_rak, '<button class="btn btn-danger btn-xs" type="button"><span class="fa fa-trash"> Hapus </span></button>');?>
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





