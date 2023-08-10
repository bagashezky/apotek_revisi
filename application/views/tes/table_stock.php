  <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Obat Habis</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix">
        </div>
      </div>

      <div class="x_content">
        <?php if ($nullstock > 0) : ?>
        <div class="alert alert-danger">
              <h4><i class="fa fa-warning"></i> Peringatan!</h4> Obat sudah habis. Harap menambahkan obat yang baru.
            </div>

         <?php endif; ?>


        
        
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nama Obat</th>
              <th>Penyimpanan</th>
              <th>Kategori</th>
              <th>Jumlah Stok</th>
              <th>Tgl Kedaluwarsa</th>
              <th>Harga Jual</th>
              <th>Unit</th>
              <th>Supplier</th>
              
            </tr>
          </thead>
          <tbody>

            <?php foreach($table_stock as $os){ ?>
            <tr>
              <td><?php echo $os->nama_obat ?></td>
              <td><?php echo $os->nama_rak_penyimpanan ?></td>
              <td><?php echo $os->nama_kategori ?></td>
              <td><?php echo $os->jmlh_stok ?></td>
              <td><?php echo date('j F Y',strtotime($os->tgl_kadaluarsa));?></td>
              <td><?php echo number_format($os->harga_jual) ?></td>
              <td><?php echo $os->unit ?></td>
              <td><?php echo $os->nama_supplier ?></td>
              
            </tr>

            <?php } ?>
          </tbody>

        </table>
    </div>
  </div>
</div>
  </div>


<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Obat Hampir Habis</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix">
        </div>
      </div>

      <div class="x_content">
        <p>Obat dengan Stok kurang dari 10</p>
        
        <table id="nambah" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nama Obat</th>
              <th>Penyimpanan</th>
              <th>Kategori</th>
              <th>Jumlah Stok</th>
              <th>Tgl Kedaluwarsa</th>
              <th>Harga Jual</th>
              <th>Unit</th>
              <th>Supplier</th>
              
            </tr>
          </thead>
          <tbody>

            <?php foreach($table_alstock as $as){ ?>
            <tr>
              <td><?php echo $as->nama_obat ?></td>
              <td><?php echo $as->nama_rak_penyimpanan  ?></td>
              <td><?php echo $as->nama_kategori ?></td>
              <td><?php echo $as->jmlh_stok ?></td>
              <td><?php echo date('j F Y',strtotime($as->tgl_kadaluarsa)); ?></td>
              <td><?php echo number_format($as->harga_jual) ?></td>
              <td><?php echo $as->unit ?></td>
              <td><?php echo $as->nama_supplier ?></td>
              
            </tr>

            <?php } ?>
          </tbody>

        </table>
    </div>
  </div>
</div>



  </div>






