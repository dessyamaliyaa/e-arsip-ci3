
        <script src='<?php echo base_url();?>assets/tinymce/js/tinymce/tinymce.min.js'></script>
        <script>tinymce.init({ selector:'textarea' });</script> <!-- //javascript -->
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
                                <a href="<?php echo base_url('sk'); ?>">Surat Keluar</a>
                            </li>
                            <li class="active">Detail Surat Keluar</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Detail Surat Keluar.</p></h4>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form" action="<?php echo base_url('sk/edit'); ?>" method="POST">
                                    <?php echo form_hidden('id',$this->uri->segment(3));?>
                                    <div class="form-group">
                                        
                                    <label for="nokendali" class="col-sm-3 control-label no-padding-right" for="form-field-1">No. Surat :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="no_surat" class="form-control" id="no_surat" placeholder="No. Surat" required="" readonly="" value="<?php echo $sk['no_surat']; ?>">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_surat_keluar" class="col-sm-3 control-label no-padding-right" for="form-field-1">Jenis Surat :</label> 
                                        <div id="jenis_surat_keluar" class="col-sm-9">
                                            <input type="text" name="jenis_surat_keluar" class="form-control" value="<?php echo $sk['jenis_surat_keluar']; ?>" placeholder="Jenis Surat" required readonly></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="perihal" class="col-sm-3 control-label no-padding-right" for="form-field-1">Perihal :</label> 
                                        <div id="perihal" class="col-sm-9">
                                            <input type="text" readonly name="perihal" class="form-control" value="<?php echo $sk['perihal']; ?>" placeholder="Perihal" required ></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dikirim" class="col-sm-3 control-label no-padding-right" for="form-field-1">Dikirim :</label> 
                                        <div id="dikirim" class="col-sm-9"><input readonly type="text" name="dikirim" class="form-control" value="<?php echo $sk['dikirim']; ?>" placeholder="Dikirim" required ></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_penetapan" class="col-sm-3 control-label no-padding-right" for="form-field-1">Tanggal Penetapan :</label> 
                                        <div id="tgl_penetapan" class="col-sm-9"><input type="date" name="tgl_penetapan" readonly value="<?php echo $sk['tgl_penetapan_skeluar']; ?>" class="form-control" required ></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="isi" class="col-sm-3 control-label no-padding-right">Isi :</label> 
                                        <div class="col-sm-9">
                                        <textarea id="texteditor" readonly="" class="tinymce" name="isi"><?php echo $sk['isi']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            &nbsp; &nbsp; &nbsp;
                                            <a href="<?php echo base_url('sk'); ?>" class="btn btn-info">
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
            <script type="text/javascript">
                
                tinymce.init({
    selector: "#texteditor",
    mode : "textareas";
    plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
});
            </script>
