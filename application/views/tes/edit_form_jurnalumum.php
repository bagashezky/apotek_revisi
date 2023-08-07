<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Edit Entry Jurnal Umum</h2>
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

        <form action="<?php echo base_url(). 'example/update_jurnalumum'; ?>" method="post" class="form-horizontal form-label-left" novalidate >

			<?php foreach($jurnalumum as $j){ ?>
				<input type="hidden" name="no" value="<?=$j->no?>" />
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="date" id="tanggal" name="tanggal" value="<?=$j->tanggal?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" required="required">
            </div>
          </div>
					
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="akun">COA</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
						<select name="akun" id="akun" class="select2_single form-control" tabindex="-1" required="required">
								<option selected="true" value="" disabled ></option>
                <?php foreach($get_coa as $gau){ ?>
                  <option value="<?php echo $gau; ?>"><?php echo $gau; ?></option>
									<?php  }?>
                                    <option value="Kas" selected="<?php if($j->nama_perkiraan == "Kas") echo 'selected';?>">Kas</option>
                                    <option value="Persediaan Barang" selected="<?php if($j->nama_perkiraan == "Persediaan Barang") echo 'selected';?>">Persediaan Barang</option>
								</select>
            </div>
          </div>

           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="biaya">Debet</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="debet" name="debet" value="<?=$j->debet?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" required="required">
            </div>
          </div>
           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="biaya">Kredit</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="kredit" name="kredit" value="<?=$j->kredit?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" required="required">
            </div>
          </div>

          <?php } ?>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/jurnal_umum') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
              <button id="send" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
