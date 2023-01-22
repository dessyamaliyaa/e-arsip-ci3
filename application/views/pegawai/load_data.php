
<!-- javascript -->
<script type="text/javascript">
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
        return true;
    }
</script> 


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
                                <a href="<?php echo base_url('pegawai'); ?>">Data Pegawai</a>
                            </li>
                            <li class="active">Detail Pegawai</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Detail Pegawai</p></h4>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form" action="" method="POST">
                                    <?php echo form_hidden('id',$this->uri->segment(3));?>
                                    <div class="form-group">
                                        
                                    <label for="nip" class="col-sm-3 control-label no-padding-right" for="form-field-1">NIP :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="nip" class="form-control" id="username" placeholder="NIP" readonly="" value="<?php echo $pegawai['NIP']; ?>" onkeypress="return hanyaAngka(event)" >
                                    </div>
                                     
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_pegawai" class="col-sm-3 control-label no-padding-right" for="form-field-1">Nama Lengkap :</label> 
                                        <div id="nama_pegawai" class="col-sm-9"><input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Lengkap" value="<?php echo $pegawai['nama_pegawai']; ?>" readonly ></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="golongan" class="col-sm-3 control-label no-padding-right">Golongan :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="golongan" class="form-control" id="golongan" placeholder="Golongan" readonly="" value="<?php echo $pegawai['golongan']; ?>" >
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ruang" class="col-sm-3 control-label no-padding-right">Ruang :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="ruang" class="form-control" id="ruang" placeholder="Ruang" value="<?php echo $pegawai['ruang']; ?>" readonly="">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan" class="col-sm-3 control-label no-padding-right">Jabatan :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan" value="<?php echo $pegawai['jabatan']; ?>" readonly="">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pangkat" class="col-sm-3 control-label no-padding-right">Pangkat :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="pangkat" class="form-control" id="pangkat" placeholder="Pangkat" value="<?php echo $pegawai['pangkat']; ?>" readonly="">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bagian" class="col-sm-3 control-label no-padding-right">Bagian :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="bagian" class="form-control" id="bagian" placeholder="Bagian" readonly="" value="<?php echo $pegawai['bagian']; ?>" >
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-3 control-label no-padding-right">No. HP / Telepon :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No. HP / Telepon" readonly="" value="<?php echo $pegawai['no_hp']; ?>" onkeypress="return hanyaAngka(event)" >
                                    </div>
                                    </div>
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <br>
                    
                    <a href="<?php echo base_url('pegawai'); ?>" name="batal" class="btn btn-dark">
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
