<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tambah Pelanggan</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <form class="form-horizontal form-label-left" novalidate>


          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Pelanggan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="name" required="required" type="text">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Alamat 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="occupation" type="text" name="address" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Tanggal Pendaftaran</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class='input-group date' id='myDatepicker2'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Batal</button>
              <button id="send" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
