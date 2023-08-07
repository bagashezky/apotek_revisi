
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">

      <div class="x_title">
        <h2>Tambah Pembelian Baru</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        

       <form action="<?php echo base_url(). 'example/add_purchase'; ?>" method="post" class="form-horizontal form-label-left" novalidate>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_supplier">Nama Supplier</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="nama_supplier" id="nama_supplier" class="select2_single form-control nama_supplier" tabindex="-1" required="required">
                <option selected="true" value="" disabled ></option>
                  <?php foreach($get_sup as $gs){ ?>
                    <option value="<?php echo $gs; ?>"><?php echo $gs; ?></option>
                 <?php  }?>
              </select>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_beli">Tanggal Transaksi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class='input-group date' id='myDatepicker2'>
                  <input type="text" name="tgl_beli" id="tgl_beli" class="form-control" required="required">
                  <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div>
          </div>



          <table id="purchase" class="table table-bordered">
          <thead>
            <tr>
              <th style="text-align: center">Obat yang dibeli</th>
              <!-- <th style="text-align: center">Jumlah Stok</th> -->
              <th style="text-align: center">Jenis</th>
              <th style="text-align: center">Harga</th>
              <th style="text-align: center">Banyak</th>
              
              <th style="text-align: center">Subtotal</th>
              <th style="text-align: center">Aksi</th>
              
            </tr>
          </thead>
          
        <tfoot>
          <tr>
          <td style="text-align:right; vertical-align: middle" colspan="4"><b>Grandtotal</b></td>
          <td>
            <input id="grandtotal" name="grandtotal" type="text" class="form-control grandtotal" readonly>
          </td>
        </tr>
        </tfoot>
        </table>
          

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/pembelian') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
              <button id='addpurchase' class="btn btn-info" type="button"><span class="fa fa-plus"></span> Tambah Produk</button>
              <button id="send" type="submit" class="btn btn-success">Simpan</button>
              
            </div>
          </div>
        </form>
      </div>
    </div>

    

      

  </div>
</div>

 





