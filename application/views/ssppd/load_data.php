
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
                            <li class="active">Detail Surat SPPD</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Detail Surat SPPD.</p></h4>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST">
                                    <div class="form-group">
                                    <label for="nokendali" class="col-sm-3 control-label no-padding-right" for="form-field-1">No. Surat :</label>  
                                    <div class="col-sm-9">
                                        <input type="text" name="nosurat" class="form-control" id="nosurat" placeholder="No. Surat" required="" readonly="" value="<?php echo $ssppd['no_surat_sppd']; ?>" >
                                    </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="alatangkut" class="col-sm-3 control-label no-padding-right" for="form-field-1">Alat Angkut :</label> 
                                        <div id="alatangkut" class="col-sm-9"><input type="text" name="alatangkut" class="form-control" readonly placeholder="Alat Angkut" required value="<?php echo $ssppd['alat_angkut']; ?>"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempatberangkat" class="col-sm-3 control-label no-padding-right" for="form-field-1">Tempat Berangkat :</label> 
                                        <div id="tempatberangkat" class="col-sm-9"><input type="text" name="tempatberangkat" class="form-control" readonly="" placeholder="Tempat Berangkat" required value="<?php echo $ssppd['tempat_berangkat']; ?>"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempattujuan" class="col-sm-3 control-label no-padding-right" for="form-field-1">Tempat Tujuan :</label> 
                                        <div id="tempattujuan" class="col-sm-9"><input type="text" name="tempattujuan" class="form-control" readonly placeholder="Tempat Tujuan" required value="<?php echo $ssppd['tempat_tujuan']; ?>"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tglberangkat" class="col-sm-3 control-label no-padding-right">Tanggal Berangkat :</label> 
                                        <div class="col-sm-9">
                                        <input type="date" name="tglsurat" id="tglsurat" class="form-control" required readonly value="<?php echo $ssppd['tanggal_berangkat']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tglkembali" class="col-sm-3 control-label no-padding-right">Tanggal Kembali :</label> 
                                        <div class="col-sm-9">
                                        <input type="date" name="tglterima" id="tglterima" class="form-control" required readonly value="<?php echo $ssppd['tanggal_kembali']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Lama Perjalanan :</label> 
                                        <div id="lama" class="col-sm-9"><input type="text" name="lama" class="form-control" readonly placeholder="Lama Perjalanan" required  value="<?php echo $ssppd['lamanya_perjalanan_dinas']; ?>"></div>
                                    </div>
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                        
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
