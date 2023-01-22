
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

                            <li class="active">Kirim SMS</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Isi Data berikut untuk mengirim SMS.</p></h4>
                        </div><!-- /.page-header -->

                        <div class="row"><?php 
                                                    echo $this->session->flashdata('info');
                                                ?>
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form" action="<?php echo base_url('sms/send'); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        
                                    <label for="id_pegawai" class="col-sm-3 control-label no-padding-right" for="form-field-1">Pegawai :</label> 
                                    <div class="col-sm-9">
                                        <?php 
                                        $att = 'class="chosen-select" class="form-control" ';
                                        echo form_dropdown('id_pegawai',$loadNama,$selected,$att);?>
                                    </div>
                                     
                                    </div>
                                    <div class="form-group">
                                        
                                    <label for="isi" class="col-sm-3 control-label no-padding-right" for="form-field-1">Isi SMS :</label> 
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="form-field-8" placeholder="Isi SMS" name="isi"></textarea>
                                    </div>
                                     
                                    </div>
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                           <button type="submit" name="simpan" class="btn btn-primary">
                                                <i class="glyphicon glyphicon-share" aria-hidden="true"></i>  
                                                Kirim
                                            </button>

                                            &nbsp; &nbsp; &nbsp;
                                            <a href="<?php echo base_url('home'); ?>" class="btn btn-info">
                                                <i class="fa fa-arrow-left"></i>
                                                Kembali
                                            </a>
                                        </div>
                                    </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->
