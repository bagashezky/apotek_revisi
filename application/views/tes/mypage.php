<div>

<?php if ($nullstock > 0): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Peringatan',
                                  text: 'Obat sudah habis...',
                                  type: 'error',
                                 
                                  styling: 'bootstrap3'
                              });">Error</button>
                  
        <?php endif; ?>

<?php if ($nullex > 0): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Peringatan',
                                  text: 'Obat sudah Kedaluawarsa...',
                                  
                                 
                                  styling: 'bootstrap3'
                              });">Error</button>
                  
        <?php endif; ?>

<!-- top tiles -->
          <!-- <div class="row tile_count" style="text-align: center;">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-medkit"></i> Total Obat</span>
              <div class="count"><?php echo $stockobat ?></div>
              
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-hospital-o"></i> Total Kategori</span>
              <div class="count"><?php echo $stockkat ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Pemasok</span>
              <div class="count"><?php echo $sup ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-edit"></i> Total Unit</span>
              <div class="count"><?php echo $unit ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-edit"></i> Total Penjualan</span>
              <div class="count"><?php echo ($totinv/1000) ?>k</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-edit"></i> Total Pembelian</span>
              <div class="count"><?php echo ($totpur/1000) ?>k</div>
            </div>

          </div> -->

          <!-- /top tiles -->
          <div class="row top_tiles" >
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <!-- <a href="<?php echo base_url('example/form_med') ?>"> -->
                  <div class="tile-stats" style="border-radius: 15px;">
                    <div class="icon">
											<!-- <i class="fa fa-medkit green"></i> -->
                    </div>
										<p>Total Pembelian</p>
                    <div class="count">Rp. <?php echo ($totpur) ?></div>
                  </div>
                  </a>
                </div>
								

                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <!-- <a href="<?php echo base_url('example/supplier') ?>"> -->
                  <div class="tile-stats" style="border-radius: 15px;">
                    <div class="icon">
                    </div>
                    <p>Jumlah Supplier</p>
                    <div class="count"><?php echo $sup ?></div>
                  </div>
                  </a>
                </div>


                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <!-- <a href="<?php echo base_url('example/obats') ?>"> -->
                  <div class="tile-stats" style="border-radius: 15px;">
                    <div class="icon">
                    </div>
                    <p>Stok Tersedia</p>
                    <div class="count"><?php echo $stockobat ?></div>
                  </div>
                  </a>
                </div>

                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- <a href="<?php echo base_url('example/table_exp') ?>"> -->
                <div class="tile-stats" style="border-radius: 15px;">
                  <div class="icon">
                    </div>
                    <p>Stok Kedaluawarsa</p>
                    <div class="count"><?php echo $nullex ?></div>
                  </div>
                </a>
                </div>

            </div>

  <div>
	<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="dashboard_graph x_panel">
      <div class="row x_title">
        <div class="col-md-6">
          <h4>Grafik Pembelian</h4>
        </div>
        <div class="col-md-2 pull-right">
          <div class='input-group date ' id='gabung'>
            <input type="text" name="tahun_beli" id="tahun_beli" class="form-control tahun_beli" required="required" placeholder="Pilih tahun">
              <span class="input-group-addon">
                 <span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
        </div>
      </div>
      <div class="x_content">
        	<canvas id="report" width="900" height="300"></canvas>
      </div>
    </div>
  </div>
</div>
  </div>


<br>
</div>
