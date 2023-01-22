
<!-- //javascript -->

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
                            <li class="active">Ubah User</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Isi Data berikut untuk mengubah User.</p></h4>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form" action="<?php echo base_url('user/edit'); ?>" method="POST">
                                    <?php echo form_hidden('id',$this->uri->segment(3));?>
                                        <div class="form-group">
                                        
                                    <label for="id_pegawai" class="col-sm-3 control-label no-padding-right" for="form-field-1">Pegawai :</label> 
                                    <div class="col-sm-9">
                                        <?php 
                                        $att = 'class="chosen-select form-control"';
                                        echo form_dropdown('id_pegawai',$loadNama,$user['id_pegawai'],$att);?>
                                    </div>
                                     
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-3 control-label no-padding-right">Username :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="username" class="form-control" id="username" required="" value="<?php echo $user['nama_user']; ?>">
                                    </div>
                                    </div><?php 
                                        $level = $user['level_user']; 
                                        if ($level == "Staf TU" || $level == "Kepala Sekolah" || $level == "Ka. Subag TU") { ?>
                                    <div class="form-group">
                                        
                                            <label for="level" class="col-sm-3 control-label no-padding-right" for="form-field-1">Level :</label> <div class="col-sm-9">
                                            <?php 
                        echo form_dropdown('level', array('Staf TU' => 'Staf TU', 'Ka. Subag TU' => 'Ka. Subag TU', 'Kepala Sekolah' => 'Kepala Sekolah'), $user['level_user'], "class='form-control'");
                        ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status User :</label><div class="col-sm-9">
                                        <?php 
                                            echo form_dropdown('status', array('aktif' => 'aktif', 'inaktif' => 'inaktif'), $user['status'], "class='form-control'");
                                        ?></div>
                                    </div>
                                    <?php } ?>
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <br>
                    <button type="submit" name="simpan" class="btn btn-primary">
                        <i class="fa fa-save" aria-hidden="true"></i>  
                        Simpan
                    </button>
                    <a href="<?php echo base_url('user'); ?>" name="batal" class="btn btn-dark">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>  
                        Kembali
                    </a>
                                        </div>
                                    </div></form>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->
