<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ubah COA</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">


        <?php foreach($coa as $c){ ?>
        <form action="<?php echo base_url(). 'example/update_coa'; ?>" method="post" class="form-horizontal form-label-left" novalidate >

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_coa">Kode COA</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="kode_coa" value="<?php echo $c->kode_coa ?>">
              <input type="text" id="kode_coa" name="kode_coa" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $c->kode_coa ?>" disabled>
            </div>
          </div>
					
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_coa">Nama Akun</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="nama_coa" value="<?php echo $c->nama_coa ?>">
              <input type="text" id="nama_coa" name="nama_coa" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $c->nama_coa ?>">
            </div>
          </div>

           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="header_akun">Header Akun</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="header_akun" name="header_akun" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $c->header_akun ?>">
            </div>
          </div>
          
          <div class="item form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="posisi_db_cr">Posisi Akun</label>
           <div class="col-md-6 col-sm-6 col-xs-12">
             <input type="text" id="posisi_db_cr" name="posisi_db_cr" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $c->posisi_db_cr ?>">
           </div>
         </div>
          
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/kategori_obat') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
              <button id="send" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>

        <?php } ?>
      </div>
    </div>
  </div>
</div>
