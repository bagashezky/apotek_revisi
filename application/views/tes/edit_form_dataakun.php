<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ubah Akun COA</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">


        <?php foreach($akun as $c){ ?>
        <form action="<?php echo base_url(). 'example/update_akun'; ?>" method="post" class="form-horizontal form-label-left" novalidate >

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_reff">Kode COA</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="no_reff" value="<?php echo $c->no_reff ?>">
              <input type="text" id="no_reff" name="no_reff" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $c->no_reff ?>" disabled>
            </div>
          </div>
					
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_reff">Nama Akun</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="nama_reff" value="<?php echo $c->nama_reff ?>">
              <input type="text" id="nama_reff" name="nama_reff" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $c->nama_reff ?>">
            </div>
          </div>

           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="header_akun">Keterangan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="keterangan" name="keterangan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $c->keterangan ?>">
            </div>
          </div>
          
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/dataakun') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
              <button id="send" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>

        <?php } ?>
      </div>
    </div>
  </div>
</div>