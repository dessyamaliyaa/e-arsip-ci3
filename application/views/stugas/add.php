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
                                <a href="<?php echo base_url('stugas'); ?>">Surat Tugas</a>
                            </li>
                            <li class="active">Tambah Surat Tugas</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Isi Data berikut untuk menambah Surat Tugas.</p></h4>
                        </div><!-- /.page-header -->

                        <div class="row"><?php 
                                                    echo $this->session->flashdata('info');
                                                ?>
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form" action="<?php echo base_url('stugas/add'); ?>" method="POST" enctype="multipart/form-data">  
                                    <div class="form-group">
                                        <label for="jenis" class="col-sm-3 control-label no-padding-right" for="form-field-1">Klasifikasi :</label> 
                                    
                                        <div class="col-sm-9">
                                                <?php 
                                        $att = 'class="chosen-select form-control"';
                                        echo form_dropdown('id_klasifikasi',$loadklasifikasi,$selectedklas,$att);?>
                                            </div>
                                    </div><!-- /.row -->
                                    <div class="form-group">
                                        
                                            <label for="sm" class="col-sm-3 control-label no-padding-right">Surat Masuk :</label> <div class="col-sm-9" class="form-control">
                                                <?php 
                                        $att = 'class="chosen-select form-control"';
                                        echo form_dropdown('id_surat_masuk',$loadsuratmasuk,$selectedsuratmasuk,$att);?>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="Keperluan" class="col-sm-3 control-label no-padding-right" for="form-field-1">Keperluan :</label> 
                                        <div id="keperluan" class="col-sm-9">
                                            <input type="text" name="keperluan" class="form-control" placeholder="Keperluan" required ></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl" class="col-sm-3 control-label no-padding-right">Tanggal :</label> 
                                        <div class="col-sm-9">
                                        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="hari" class="col-sm-3 control-label no-padding-right">Hari :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="hari" id="hari" class="form-control" placeholder="Hari" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="waktu" class="col-sm-3 control-label no-padding-right">Waktu :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="waktu" id="timepicker1" class="form-control" placeholder="Waktu" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat" class="col-sm-3 control-label no-padding-right">Tempat :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="tempat" id="tempat" class="form-control" placeholder="Tempat" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_penetapan" class="col-sm-3 control-label no-padding-right">Tanggal Penetapan:</label> 
                                        <div class="col-sm-9">
                                        <input type="date" name="tgl_penetapan" id="tgl_penetapan" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" name="simpan" class="btn btn-primary">
                                                <i class="fa fa-save" aria-hidden="true"></i>  
                                                Simpan
                                            </button>
                                            &nbsp; &nbsp; &nbsp;
                                            <a href="<?php echo base_url('stugas'); ?>" class="btn btn-info">
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
