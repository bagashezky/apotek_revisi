<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ubah Kategori Obat</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">


        <?php foreach($kategori_obat as $c){ ?>
        <form action="<?php echo base_url(). 'example/update_category'; ?>" method="post" class="form-horizontal form-label-left" novalidate >

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_kategori">Nama Kategori</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="id_kategori_obat" value="<?php echo $c->id_kategori_obat ?>">
              <input type="text" id="nama_kategori" name="nama_kategori" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $c->nama_kategori ?>">
            </div>
          </div>
					
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_kategori">Nama Rak</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="nama_rak_penyimpanan" value="<?php echo $c->nama_rak_penyimpanan ?>">
              <input type="text" id="nama_rak_penyimpanan" name="nama_rak_penyimpanan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $c->nama_rak_penyimpanan ?>" disabled>
            </div>
          </div>

           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="des_kat">Deskripsi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="des_kat" name="des_kat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $c->des_kat ?>">
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
