
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
                            <li class="active">Tambah Pegawai</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Isi Data berikut untuk menambah Pegawai.</p></h4>
                            
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12"> 
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form" action="<?php echo base_url('pegawai/add'); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        
                                    <label for="nip" class="col-sm-3 control-label no-padding-right" for="form-field-1">NIP :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="nip" class="form-control" id="nip" placeholder="NIP" required="" >
                                    </div>
                                     
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_pegawai" class="col-sm-3 control-label no-padding-right" for="form-field-1">Nama Pegawai :</label> 
                                        <div id="nama_pegawai" class="col-sm-9"><input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai" required ></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="golongan" class="col-sm-3 control-label no-padding-right">Golongan :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="golongan" class="form-control" id="golongan" placeholder="Golongan" required="">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ruang" class="col-sm-3 control-label no-padding-right">Ruang :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="ruang" class="form-control" id="ruang" placeholder="Ruang" required="">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan" class="col-sm-3 control-label no-padding-right">Jabatan :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan" required="">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pangkat" class="col-sm-3 control-label no-padding-right">Pangkat :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="pangkat" class="form-control" id="pangkat" placeholder="Pangkat" required="">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bagian" class="col-sm-3 control-label no-padding-right">Bagian :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="bagian" class="form-control" id="bagian" placeholder="Bagian" required="">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-3 control-label no-padding-right">No. HP / Telepon :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="no_hp" class="form-control" placeholder="No. HP / Telepon" required="" onkeypress="return hanyaAngka(event)" >
                                        <div class="help-block col-xs-12 col-sm-reset inline"> Isikan dengan format 628xxxxxxxxx! </div>
                                    </div>
                                    </div>
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" name="simpan" class="btn btn-primary">
                                                <i class="fa fa-save" aria-hidden="true"></i>  
                                                Simpan
                                            </button>
                                            &nbsp; &nbsp; &nbsp;
                                            <a href="<?php echo base_url('pegawai'); ?>" class="btn btn-info">
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
