
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
                                <a href="#">Data Surat</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('sm'); ?>">Surat Masuk</a>
                            </li>
                            <li class="active">Tambah Surat Masuk</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Isi Data berikut untuk menambah Surat Masuk.</p></h4>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form" action="<?php echo base_url('sm/add'); ?>" method="POST" enctype="multipart/form-data">    
                                    <div class="form-group">
                                        <label for="id_klasifikasi" class="col-sm-3 control-label no-padding-right" for="form-field-1">Klasifikasi :</label> 
                                    
                                        <div class="col-sm-9">
                                               <?php 
                                        $att = 'class="chosen-select form-control" ';
                                        echo form_dropdown('id_klasifikasi',$loadklasifikasi,$selectedklas,$att);?>
                                            </div>
                                    </div><!-- /.row -->
                                    <div class="form-group">
                                    <label for="nomor_surat" class="col-sm-3 control-label no-padding-right" for="form-field-1">No. Surat :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="nomor_surat" class="form-control" id="nomor_surat" placeholder="No. Surat" required="" >
                                    </div>
                                     
                                    </div>
                                    <div class="form-group">
                                        <label for="asal_surat" class="col-sm-3 control-label no-padding-right" for="form-field-1">Asal Surat :</label> 
                                        <div id="asal_surat" class="col-sm-9"><input type="text" name="asal_surat" class="form-control" placeholder="Asal Surat" required ></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="perihal" class="col-sm-3 control-label no-padding-right" for="form-field-1">Perihal :</label> 
                                        <div id="perihal" class="col-sm-9"><input type="text" name="perihal" class="form-control" placeholder="Perihal" required ></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="surat_tanggal" class="col-sm-3 control-label no-padding-right">Tanggal Surat :</label> 
                                        <div class="col-sm-9">
                                            <input type="date" name="surat_tanggal" class="form-control" required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_terima" class="col-sm-3 control-label no-padding-right">Tanggal Terima :</label> 
                                        <div class="col-sm-9">
                                        <input type="date" name="tgl_terima" class="form-control" required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input_file" class="col-sm-3 control-label no-padding-right">File Arsip</label> <div class="col-sm-9">
                                        <input type="file" id="file_arsip" name="file_arsip" accept="application/pdf" class="form-control">
                                        <p class="help-block">Gunakan hanya file dengan format PDF.</p> 
                                    </div>
                                </div>
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" name="simpan" class="btn btn-primary">
                                                <i class="fa fa-save" aria-hidden="true"></i>  
                                                Simpan
                                            </button>
                                            &nbsp; &nbsp; &nbsp;
                                            <a href="<?php echo base_url('sm'); ?>" class="btn btn-info">
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
