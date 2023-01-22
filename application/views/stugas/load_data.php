
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
                            <li class="active">Detail Surat Tugas</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Detail Surat Tugas</p></h4>
                        </div><!-- /.page-header -->
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form">
                                     <div class="form-group">
                                     <table class="table table-striped table-bordered table-hover" cellspacing="0"> <?php echo form_hidden('id_stugas',$this->uri->segment(3));?> 
                                            
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>NIP</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Golongan</th>
                                                        <th>Ruang</th>
                                                        <th>Jabatan</th>
                                                    </tr>
                                                </thead>
                                                <tbody><?php
                                                        $no             = 1;
                                                        foreach($detail->result() as $d)
                                                        {?>
                                                    <tr>
                                                        <td><?php echo $no++;?></td>
                                                        <td><?php echo $d->NIP;?></td>
                                                        <td><?php echo $d->nama_pegawai;?></td>
                                                        <td><?php echo $d->golongan;?></td>
                                                        <td><?php echo $d->ruang;?></td>
                                                        <td><?php echo $d->jabatan;?></td>
                                                    </tr><?php
                                                    }

                                                    ?>
                                                </tbody>

                                                
                                            </table>
                                          </div>
                                     <div class="form-group">
                                        
                                    <label for="no_surat_tugas" class="col-sm-3 control-label no-padding-right" for="form-field-1">No Surat Tugas :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="no_surat_tugas" class="form-control" id="no_surat_tugas" placeholder="No Surat Tugas" required="" readonly="" value="<?php echo $master->no_surat_tugas; ?>">
                                    </div>
                                     </div>
                                        
                                    <div class="form-group">
                                        
                                    <label for="keperluan" class="col-sm-3 control-label no-padding-right" for="form-field-1">Keperluan :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="keperluan" class="form-control" id="keperluan" placeholder="keperluan" required="" readonly="" value="<?php echo $master->keperluan; ?>">
                                    </div>
                                     </div>
                                     <div class="form-group">
                                        
                                    <label for="hari" class="col-sm-3 control-label no-padding-right" for="form-field-1">Hari :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="hari" class="form-control" id="hari" placeholder="Hari" required="" readonly="" value="<?php echo $master->hari; ?>">
                                    </div>
                                     </div>
                                     <div class="form-group">
                                        
                                    <label for="tanggal" class="col-sm-3 control-label no-padding-right" for="form-field-1">Tanggal :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal" required="" readonly="" value="<?php echo $master->tanggal; ?>">
                                    </div>
                                     </div>
                                     <div class="form-group">
                                        
                                    <label for="waktu" class="col-sm-3 control-label no-padding-right" for="form-field-1">Waktu :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="waktu" class="form-control" id="waktu" placeholder="Waktu" required="" readonly="" value="<?php echo $master->waktu; ?>">
                                    </div>
                                     </div>
                                     <div class="form-group">
                                        
                                    <label for="tempat" class="col-sm-3 control-label no-padding-right" for="form-field-1">Tempat :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="tempat" class="form-control" id="tempat" placeholder="tempat" required="" readonly="" value="<?php echo $master->tempat; ?>">
                                    </div>
                                     </div>
                                     <div class="form-group">
                                        
                                    <label for="ditetapkan" class="col-sm-3 control-label no-padding-right" for="form-field-1">Ditetapkan :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="ditetapkan" class="form-control" id="ditetapkan" placeholder="Ditetapkan" required="" readonly="" value="<?php echo $master->ditetapkan; ?>">
                                    </div>
                                     </div>
                                      <div class="form-group">
                                        
                                    <label for="tgl_penetapan_stugas" class="col-sm-3 control-label no-padding-right" for="form-field-1">Tanggal Penetapan :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="tgl_penetapan_stugas" class="form-control" id="tgl_penetapan_stugas" placeholder="Tanggal Penetapan" required="" readonly="" value="<?php echo $master->tgl_penetapan_stugas; ?>">
                                    </div>
                                     </div>
                                    

                                             <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            
                                            &nbsp; &nbsp; &nbsp;
                                           <a href="<?php echo base_url('stugas'); ?>" name="batal" class="btn btn-dark">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>  
                        Kembali
                         </a>
                          </div>
                      </div>
