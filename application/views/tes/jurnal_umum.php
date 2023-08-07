
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Jurnal Umum</h2>
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
				
				

				<!-- <a href="<?php echo base_url('example/form_jurnalumum') ?>"><button type="button" class="btn btn-success" style="margin-bottom: 13px"><span class="fa fa-plus"></span> Tambah Jurnal Umum </button></a> -->
				
				

				<div class="col-sm-4 invoice-col">
             			 <address>
                              <strong>Apotek Milan</strong>
                              <br>Jurnal Umum
                          </address>

            </div></table>
				<table id="datatable-buttons"  class="table table-striped table-bordered">
					<thead>
						<tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kode Akun</th>
                    <th scope="col">Nama Akun</th>
                    <th scope="col">Debet</th>
                    <th scope="col">Kredit</th>
                    <!-- <th scope="col" class="text-center">Action</th> -->
						</tr>
						
					</thead>
					

					<?php 
          $sn = 1;
          $tgl = '';
           ?>
		   
					<tbody>
          <?php foreach($jurnal_umum as $c){ ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php if($tgl != $c->tanggal) {
					$tgl = $c->tanggal;
					echo date('d F Y',strtotime($c->tanggal));
				} else {
					echo "";
				}  ?></td>
							<td><?php echo $c->kode_coa ?></td>
							<td><?php echo $c->nama_perkiraan ?></td>
							<td><?php echo $c->debet ?></td>
							<td><?php echo $c->kredit ?></td>
							<!-- <td style=" text-align: center;">
								<?php echo anchor('example/edit_form_jurnalumum/'.$c->no, '<button class="btn btn-info btn-xs" type="button"><span class="fa fa-pencil"></span></button>'); ?>
								<?php echo anchor('example/remove_jurnalumum/'.$c->no, '<button class="btn btn-danger btn-xs" type="button"><span class="fa fa-trash"></span></button>');?>
					         </td> -->
						</tr>
						<?php $sn++; ?>

						<?php } ?>
                  
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>