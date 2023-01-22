<div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li> 
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="<?php echo base_url('home'); ?>">Beranda</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('user'); ?>">Data User</a>
                            </li>
                            <li class="active">Tambah User</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content"> 
                        <div class="page-header">
                            <h4><p class="text-info">Isi Data berikut untuk menambah User.</p></h4>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <?php 
                                                    echo $this->session->flashdata('info');
                                                ?>
                            <div class="col-xs-12"> 
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form" action="<?php echo base_url('user/add'); ?>" method="POST" enctype="multipart/form-data">
                
                                    <div class="form-group">
                                        
                                    <label for="id_pegawai" class="col-sm-3 control-label no-padding-right" for="form-field-1">Pegawai :</label> 
                                    <div class="col-sm-9">
                                        <?php 
                                        $att = 'class="chosen-select form-control"';
                                        echo form_dropdown('id_pegawai',$loadNama,$selected,$att);?>
                                    </div>
                                     
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_user" class="col-sm-3 control-label no-padding-right">Username :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="nama_user" class="form-control" id="nama_user" placeholder="nama_user" required="">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        
                                            <label for="level" class="col-sm-3 control-label no-padding-right" for="form-field-1">Level :</label> 
                                            <div class="col-sm-9">
                                            <?php 
                                                echo form_dropdown('level', array('Staf TU' => 'Staf TU', 'Ka. Subag TU' => 'Ka. Subag TU', 'Kepala Sekolah' => 'Kepala Sekolah'), null, "class='form-control'");
                                                ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status User :</label><div class="col-sm-9">
                                        <?php 
                                            echo form_dropdown('status', array('aktif' => 'aktif', 'inaktif' => 'inaktif'), null, "class='form-control'");
                                        ?></div>
                                    </div>
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" name="simpan" class="btn btn-primary">
                        <i class="fa fa-save" aria-hidden="true"></i>  
                        Simpan
                    </button>
                                            &nbsp; &nbsp; &nbsp;
                                            <a href="<?php echo base_url('user'); ?>" class="btn btn-info">
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
