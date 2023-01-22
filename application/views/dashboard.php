<?php 

	$sm_all  = $this->db->get('tbsurat_masuk')->num_rows();
	$sm_disposisi     = $this->db->get('tbsurat_keluar')->num_rows();
	$sm_non_disposisi = $this->db->get('tbsurat_masuk')->num_rows();
	$st_all    = $this->db->get('tbsurat_tugas')->num_rows();
	$sppd_all    = $this->db->get('tbsurat_sppd')->num_rows();

	?>					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Beranda</a>
							</li>
							<li class="active"></li>
						</ul><!-- /.breadcrumb -->

						
					</div>
					<div class="page-content">
						<div class="page-header">
							
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Selamat Datang di 
									<strong class="green">
										SIMASKU
										<small>(v1.0)</small>
									</strong>,
	Sistem ini dirancang untuk mengelola kegiatan Persuratan seperti Surat Masuk, Surat Keluar di Tata Administrasi Sekolah (TAS) Bagian Persuratan <a href="https://sma1kesesi.sch.id">SMA Negeri  1 Kesesi</a>.
								</div>
<div class="row">
									<div class="space-6"></div>

									<div class="col-xs-12 infobox-container">
										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-envelope-o"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $sm_all; ?></span>
												<div class="infobox-content">Surat Masuk</div>
											</div>

											
										</div>
											<div class="infobox infobox-pink">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-envelope-o"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $sm_disposisi; ?></span>
												<div class="infobox-content">Surat Keluar</div>
											</div>
										</div>

										<div class="space-6"></div>

									</div>

									
									
								</div><!-- /.row -->