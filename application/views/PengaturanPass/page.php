
<div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="<?php echo base_url('home'); ?>">Beranda</a>
                            </li>

                            <li class="active">Pengaturan Kata Sandi</li>
                        </ul><!-- /.breadcrumb -->
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Form ini digunakan untuk mengubah Kata Sandi Anda.</p></h4>
                        </div><!-- /.page-header -->

                        <div class="row"><?php 
                                                    echo $this->session->flashdata('info');
                                                ?>
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form" action="<?php echo base_url('pengaturanpass/password'); ?>" method="POST">
                                    <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label no-padding-right" for="form-field-1">Kata Sandi Lama :</label> 
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Kata Sandi Lama" required="" autofocus="" maxlength="8" minlength="5">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="newpass" class="col-sm-3 control-label no-padding-right" for="form-field-1">Kata Sandi Baru :</label> 
                                    <div class="col-sm-9">
                                        <input type="password" name="newpass" class="form-control" id="newpass" placeholder="Kata Sandi Baru" required="" maxlength="8" minlength="5">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="confpassword" class="col-sm-3 control-label no-padding-right" for="form-field-1">Konfirmasi Sandi Baru :</label> 
                                    <div class="col-sm-9">
                                        <input type="password" name="confpassword" class="form-control" id="confpassword" placeholder="Konfirmasi Sandi Baru" required="" maxlength="8" minlength="5">
                                    </div>
                                    </div>
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" name="simpan" class="btn btn-primary">
                                                <i class="fa fa-save" aria-hidden="true"></i>  
                                                Simpan
                                            </button>

                                            &nbsp; &nbsp; &nbsp;
                                            <a href="<?php echo base_url('home'); ?>" class="btn btn-info">
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
