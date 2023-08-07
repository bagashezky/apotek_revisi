<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tambah Data Buku Besar</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
			<?php if($this->session->flashdata('cat_ada')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Error',
                                  text: '<?php echo $this->session->flashdata('cat_ada'); ?>',
                                  type: 'error',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Error</button>
                 	</div>
                 	
				<?php endif; ?>

        <form action="<?php echo base_url(). 'example/add_bukubesar'; ?>" method="post" class="form-horizontal form-label-left" novalidate >


          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="date" id="tanggal" name="tanggal" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" required="required">
            </div>
          </div>
					
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="akun">Nama Akun</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
				<select name="nama_akun" id="akun" class="select2_single form-control" tabindex="-1" required="required">
					<option selected="true" value="" disabled ></option>
					<option value="Kas">Kas</option>
					<option value="Persediaan Barang">Persediaan Barang</option>
				</select>
            </div>
          </div>
					
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="akun">Keterangan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
				<select name="keterangan" id="akun" class="select2_single form-control" tabindex="-1" required="required">
					<option selected="true" value="" disabled ></option>
					<option value="Saldo awal">Saldo Awal</option>
					<option value="Tambah modal">Tambah modal</option>
				</select>
            </div>
          </div>

           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="biaya">Debet</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="debet" name="debet" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" required="required">
            </div>
          </div>

          
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/buku_besar') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
              <button id="send" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
