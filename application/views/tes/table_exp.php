  <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Obat Kedaluwarsa</h2>
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
        <?php if ($nullex > 0) : ?>
        
            <div class="alert alert-warning">
              <h4><i class="fa fa-warning"></i> Peringatan!</h4> Obat sudah Kedaluwarsa. Harap menambahkan obat yang baru.
            </div>
        <?php endif; ?>

           

        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nama Obat</th>
              <!-- <th>Penyimpanan</th> -->
              <th>Kategori</th>
              <th>Jumlah Stok</th>
              <th>Tgl Kedaluwarsa</th>
              <th>Harga Jual</th>
              <th>Jenis</th>
              <th>Supplier</th>
              
            </tr>
          </thead>
          <tbody>

            <?php foreach($table_exp as $ex){ ?>
            <tr>
              <td><?php echo $ex->nama_obat ?></td>
              <!-- <td><?php echo $ex->nama_rak_penyimpanan ?></td> -->
              <td><?php echo $ex->nama_kategori ?></td>
          
              <td><?php echo $ex->jmlh_stok ?></td>
              <td><?php echo date('j F Y',strtotime($ex->tgl_kadaluarsa)); ?></td>
              
              <td><?php echo number_format($ex->harga_jual) ?></td>
              <td><?php echo $ex->unit ?></td>
              <td><?php echo $ex->nama_supplier ?></td>
              
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
        <h2>Obat Hampir Kedaluwarsa</h2>
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
        <p>Obat dengan tanggal Kedaluwarsa kurang dari 60 hari</p>
       
        <table id="nambah" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nama Obat</th>
              <!-- <th>Penyimpanan</th> -->
              <th>Kategori</th>
              <th>Jumlah Stok</th>
              <th>Tgl Kedaluwarsa</th>
              <th>Harga Jual</th>
              <th>Jenis</th>
              <th>Supplier</th>
              
            </tr>
          </thead>
          <tbody>

            <?php foreach($table_alex as $ax){ ?>
            <tr>
              <td><?php echo $ax->nama_obat ?></td>
              <!-- <td><?php echo $ax->nama_rak_penyimpanan ?></td> -->
              <td ><?php echo $ax->nama_kategori ?></td>
              <td><?php echo $ax->jmlh_stok ?></td>
              <td><?php echo date('j F Y',strtotime($ax->tgl_kadaluarsa)); ?></td>
              <td><?php echo number_format($ax->harga_jual) ?></td>
              <td><?php echo $ax->unit ?></td>
              <td><?php echo $ax->nama_supplier ?></td>
              
            </tr>

            <?php } ?>

          </tbody>

        </table>
    </div>
  </div>
</div>





  </div>

  













