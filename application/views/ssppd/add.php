
<div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="<?php echo base_url('home'); ?>">Beranda</a>
                            </li>

                            <li>
                                <a href="#">Data Surat</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('ssppd'); ?>">Surat SPPD</a>
                            </li>
                            <li class="active">Tambah Surat SPPD</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Isi Data berikut untuk menambah Surat SPPD.</p></h4>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form" action="<?php echo base_url('ssppd/add'); ?>" method="POST" enctype="multipart/form-data">    
                                    <div class="form-group">
                                        
                                            <label for="stugas" class="col-sm-3 control-label no-padding-right">Surat Tugas :</label> <div class="col-sm-9">
                                        <?php 
                                        $att = 'class="chosen-select form-control"';
                                        echo form_dropdown('id_surat_tugas',$loadstugas,$selectedstugas,$att);?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alat_angkut" class="col-sm-3 control-label no-padding-right" for="form-field-1">Alat Angkut :</label> 
                                        <div id="alat_angkut" class="col-sm-9"><input type="text" name="alat_angkut" class="form-control" placeholder="Alat Angkut" required ></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempatberangkat" class="col-sm-3 control-label no-padding-right" for="form-field-1">Tempat Berangkat :</label> 
                                        <div id="tempatberangkat" class="col-sm-9"><input type="text" name="tempat_berangkat" class="form-control" placeholder="Tempat Berangkat" required ></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempattujuan" class="col-sm-3 control-label no-padding-right" for="form-field-1">Tempat Tujuan :</label> 
                                        <div id="tempattujuan" class="col-sm-9"><input type="text" name="tempat_tujuan" class="form-control" placeholder="Tempat Tujuan" required ></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tglberangkat" class="col-sm-3 control-label no-padding-right">Tanggal Berangkat :</label> 
                                        <div class="col-sm-9">
                                        <input type="date" name="tanggal_berangkat" id="tanggal_berangkat" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tglkembali" class="col-sm-3 control-label no-padding-right">Tanggal Kembali :</label> 
                                        <div class="col-sm-9">
                                        <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Lama Perjalanan :</label> 
                                        <div id="lama" class="col-sm-9"><input type="text" name="lamanya_perjalanan_dinas" class="form-control" placeholder="Lama Perjalanan" required ></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_penetapan_ssppd" class="col-sm-3 control-label no-padding-right">Tanggal Penetapan :</label> 
                                        <div class="col-sm-9">
                                        <input type="date" name="tgl_penetapan_ssppd" id="tgl_penetapan_ssppd" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" name="simpan" class="btn btn-primary">
                                                <i class="fa fa-save" aria-hidden="true"></i>  
                                                Simpan
                                            </button>
                                            &nbsp; &nbsp; &nbsp;
                                            <a href="<?php echo base_url('ssppd'); ?>" class="btn btn-info">
                                                <i class="fa fa-arrow-left"></i>
                                                Kembali
                                            </a>
                                        </div>
                                    </div></form>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->
