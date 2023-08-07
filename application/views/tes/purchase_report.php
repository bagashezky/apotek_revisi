<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="dashboard_graph x_panel">
      <div class="row x_title">
        <div class="col-md-6">
          <h4>Grafik Pembelian</h4>
        </div>
        <div class="col-md-2 pull-right">
          <div class='input-group date ' id='dada'>
            <input type="text" name="tahun_beli" id="tahun_beli" class="form-control tahun_beli" required="required" placeholder="Pilih tahun">
              <span class="input-group-addon">
                 <span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
        </div>
      </div>
      <div class="x_content">
        	<canvas id="purdate" width="900" height="280"></canvas>
      </div>
    </div>
  </div>
</div>



<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Pembelian Terbanyak</small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Obat</th>
							<th>Banyak</th>
						</tr>
					</thead>
					
					<tbody id="toppurchase">
						
						
					</tbody>
				</table>

			</div>
		</div>
	</div>


	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Pembelian Tersedikit</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Obat</th>
							<th>Banyak</th>
							
						</tr>
					</thead>
					
					<tbody id="leastpurchase">
						
					</tbody>
				</table>

			</div>
		</div>
	</div>


<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Pengeluaran Tertinggi</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Obat</th>
							<th>Total Pembelian</th>
							
						</tr>
					</thead>
					
					<tbody id="highpurchase">
						
					</tbody>
				</table>

			</div>
		</div>
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Pengeluaran Terendah</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Obat</th>
							<th>Total Pembelian</th>
							
						</tr>
					</thead>
					
					<tbody id="lowpurchase">
						
					</tbody>
				</table>

			</div>
		</div>
	</div>
	
