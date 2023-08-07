<div class="col-md-3 left_col menu_fixed">
	<div class="left_col scroll-view">
 		<div class="navbar nav_title" >
			<!-- <a href="<?php echo base_url(); ?>" class="nav_title"><span style="position: relative;font-size: xx-large;top: 71px;left: 25px;color: deepskyblue;"><?php echo 'Apotek Milan' ?></span></a> -->
 			<!-- logo info -->
 			<!-- <div class="logo_pic">
 				<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/ugm.png') ?>" alt="..." class="img-circle logo_img"></a>
 			</div> -->
			
		</div>
		<div class="profile">
		<a href="<?php echo base_url(); ?>" class="site_title"><span style="font-size: 20px;"><?php echo 'Apotek Milan' ?></span></a>
		</div>
		
		
		<div class="clearfix"></div>
		
		
		<!-- /menu profile quick info -->
		<br>
		<!-- Sidebar Menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3></h3>
				<ul class="nav side-menu">
					<?php if($this->session->userdata('access')=='Administrator'){ ?>
					<li><a href="<?php echo base_url('') ?>"><i class="fa fa-home"></i> Dashboard </a></li>
						<li><a><i class="fa fa-medkit"></i> Obat <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_med') ?>">Tambah Obat</a></li>
							<li><a href="<?php echo base_url('example/obats') ?>">Lihat Obat</a></li>
							<li><a href="<?php echo base_url('example/table_exp') ?>">Obat Kadaluarsa</a></li>
							<li><a href="<?php echo base_url('example/table_stock') ?>">Obat Habis</a></li>
						</ul>
						</li>
						<li><a><i class="fa fa-archive"></i> Penyimpanan <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
								<li><a href="<?php echo base_url('example/form_penyimpanan') ?>">Tambah Penyimpanan</a></li>
								<li><a href="<?php echo base_url('example/rak_penyimpanan') ?>">Lihat Penyimpanan</a></li>
								
							</ul>
						</li>
						<li><a><i class="fa fa-hospital-o"></i> Kategori & Jenis <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="<?php echo base_url('example/form_cat') ?>">Tambah Kategori</a></li>
								<li><a href="<?php echo base_url('example/kategori_obat') ?>">Lihat Kategori</a></li>
								<li><a href="<?php echo base_url('example/form_unit') ?>">Tambah Jenis Obat</a></li>
								<li><a href="<?php echo base_url('example/jenis_obat') ?>">Lihat Jenis Obat</a></li>
								
							</ul>
						</li>
						<li><a><i class="fa fa-users"></i> Supplier <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_sup') ?>">Tambah Supplier</a></li>
							<li><a href="<?php echo base_url('example/supplier') ?>">Lihat Supplier</a></li>
						</ul>
						</li>
					  <li><a><i class="fa fa-shopping-cart"></i> Pembelian <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="<?php echo base_url('example/form_purchase') ?>">Tambah Pembelian</a></li>
								<!-- <li><a href="<?php echo base_url('example/pembelian') ?>">Lihat Pembelian</a></li> -->
								<li><a href="<?php echo base_url('example/purchase_report') ?>">Grafik Pembelian</a></li>
								
								
							</ul>
						</li>
					  <!-- <li><a><i class="fa fa-circle-o"></i> COA <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="<?php echo base_url('example/form_coa') ?>">Tambah Coa</a></li>
								<li><a href="<?php echo base_url('example/coa') ?>">Lihat Coa</a></li>
								
							</ul>
						</li> -->
					  <li><a><i class="fa fa-circle-o"></i> Laporan<span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="<?php echo base_url('example/dataakun') ?>">Data Akun</a></li>
								<li><a href="<?php echo base_url('example/jurnal_umum') ?>">Jurnal Umum</a></li>
								<li><a href="<?php echo base_url('example/buku_besar') ?>">Buku Besar</a></li>
								<li><a href="<?php echo base_url('example/kartu_stok') ?>">Kartu Stok</a></li>
								<li><a href="<?php echo base_url('example/pembelian') ?>">Laporan Pembelian</a></li>
								
							</ul>
							<!-- <li><a href="<?php echo base_url('example/report') ?>"><i class="fa fa-bar-chart"></i> Laporan </a>
						</li> -->
						</li>
				</li>
				
				<!-- Apoteker -->
				<?php } if($this->session->userdata('access')=='Apoteker'){ ?>
					<li><a><i class="fa fa-medkit"></i> Obat <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
						<li><a href="<?php echo base_url('example/form_med') ?>">Tambah Obat</a></li>
						<li><a href="<?php echo base_url('example/obats') ?>">Lihat Obat</a></li>
						<li><a href="<?php echo base_url('example/table_exp') ?>">Obat Kadaluarsa</a></li>
						<li><a href="<?php echo base_url('example/table_stock') ?>">Obat Habis</a></li>
					</ul>
				</li>
				<li><a><i class="fa fa-hospital-o"></i> Kategori & Jenis <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="<?php echo base_url('example/form_cat') ?>">Tambah Kategori</a></li>
					<li><a href="<?php echo base_url('example/kategori_obat') ?>">Lihat Kategori</a></li>
					<li><a href="<?php echo base_url('example/form_unit') ?>">Tambah Jenis Obat</a></li>
					<li><a href="<?php echo base_url('example/jenis_obat') ?>">Lihat Jenis Obat</a></li>
					
				</ul>
				</li>
			<li><a><i class="fa fa-archive"></i> Penyimpanan <span class="fa fa-chevron-down"></span></a>
			<ul class="nav child_menu">
				<li><a href="<?php echo base_url('example/form_penyimpanan') ?>">Tambah Penyimpanan</a></li>
				<li><a href="<?php echo base_url('example/rak_penyimpanan') ?>">Lihat Penyimpanan</a></li>
							
						</ul>
					</li>
					

					<?php  } if($this->session->userdata('access')=='Pegawai'){ ?>
						<li><a><i class="fa fa-medkit"></i> Obat <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_med') ?>">Tambah Obat</a></li>
							<li><a href="<?php echo base_url('example/obats') ?>">Lihat Obat</a></li>
							<li><a href="<?php echo base_url('example/table_exp') ?>">Obat Kadaluarsa</a></li>
							<li><a href="<?php echo base_url('example/table_stock') ?>">Obat Habis</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-users"></i> Supplier <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_sup') ?>">Tambah Supplier</a></li>
                    		<li><a href="<?php echo base_url('example/supplier') ?>">Lihat Supplier</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-shopping-cart"></i> Pembelian <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
						<li><a href="<?php echo base_url('example/form_purchase') ?>">Tambah Pembelian</a></li>
						<li><a href="<?php echo base_url('example/pembelian') ?>">Lihat Pembelian</a></li>
							<li><a href="<?php echo base_url('example/purchase_report') ?>">Grafik Pembelian</a></li>
							
							
						</ul>
					</li>
					<li><a><i class="fa fa-circle-o"></i> COA <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="<?php echo base_url('example/form_coa') ?>">Tambah Coa</a></li>
								<li><a href="<?php echo base_url('example/coa') ?>">Lihat Coa</a></li>
								
							</ul>
						</li>

					<?php } if($this->session->userdata('access')=='Pemilik'){ ?>
						<li><a href="<?php echo base_url('example/report') ?>"><i class="fa fa-bar-chart"></i> Laporan </a></li>
						<?php }; ?>
					</ul>
			</div>
		</div>
	</div>
</div>
