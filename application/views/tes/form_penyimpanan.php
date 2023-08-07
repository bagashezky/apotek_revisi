<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tambah Rak Penyimpanan</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <form action="<?php echo base_url(). 'example/add_penyimpanan'; ?>" method="post" class="form-horizontal form-label-left" novalidate >


          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="unit">Nama Rak</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="nama_rak_penyimpanan" name="nama_rak_penyimpanan" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" required="required">
            </div>
          </div>

          
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/penyimpanan') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
              <button id="send" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
