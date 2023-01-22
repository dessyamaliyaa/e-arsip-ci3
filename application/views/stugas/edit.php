
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
                            <li class="active">Ubah Surat Tugas</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Isi Data berikut untuk mengubah Data Surat Tugas.</p></h4>
                        </div><!-- /.page-header -->

                        <div class="row"><?php 
                                                    echo $this->session->flashdata('info');
                                                ?>
                                                <div class="tabbable">
                                                    <ul class="nav nav-tabs padding-16">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#edit-stugas">
                                                                <i class="green ace-icon fa fa-envelope bigger-125"></i>
                                                                Ubah Surat Tugas
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a data-toggle="tab" href="#edit-pegawai">
                                                                <i class="purple ace-icon fa fa-users bigger-125"></i>
                                                                Ubah Pegawai
                                                            </a>
                                                        </li>

                                                        
                                                    </ul>

                                                    <div class="tab-content profile-edit-tab-content">
                                                        <div id="edit-stugas" class="tab-pane in active">
                                                            
                                                            <hr />
                                                            <div class="form-group">
                                                                 <form enctype="multipart/form-data" class="form-horizontal" role="form" action="<?php echo base_url('stugas/edit'); ?>" method="POST">
                                    
                                    <?php echo form_hidden('id_stugas',$this->uri->segment(3));?> 
                                    <div class="form-group">
                                        
                                    <label for="no_surat_tugas" class="col-sm-3 control-label no-padding-right" for="form-field-1">No. Surat :</label> 
                                    <div class="col-sm-9">
                                        <input type="text" name="no_surat_tugas" class="form-control" id="no_surat_tugas" placeholder="No. Surat" required="" readonly="" value="<?php echo $master->no_surat_tugas ?>">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        
                                            <label for="id_surat_masuk" class="col-sm-3 control-label no-padding-right">Surat Masuk :</label> <div class="col-sm-9" class="form-control">
                                                <?php 
                                        $att = 'class="chosen-select form-control"';
                                        echo form_dropdown('id_surat_masuk',$loadsuratmasuk,$master->id_surat_masuk,$att);?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="keperluan" class="col-sm-3 control-label no-padding-right" for="form-field-1">Keperluan :</label> 
                                        <div id="keperluan" class="col-sm-9"><input type="text" name="keperluan" class="form-control" placeholder="Keperluan" required value="<?php echo $master->keperluan ?>"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal" class="col-sm-3 control-label no-padding-right">Tanggal :</label> 
                                        <div class="col-sm-9">
                                        <input value="<?php echo $master->tanggal ?>" type="date" name="tanggal" id="tanggal" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="waktu" class="col-sm-3 control-label no-padding-right">Waktu :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="waktu" id="waktu" class="form-control" placeholder="Waktu" required value="<?php echo $master->waktu ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat" class="col-sm-3 control-label no-padding-right">Tempat :</label> 
                                        <div class="col-sm-9">
                                        <input type="text" name="tempat" id="tempat" class="form-control" placeholder="Tempat" required value="<?php echo $master->tempat ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_penetapan_stugas" class="col-sm-3 control-label no-padding-right">Tanggal Penetapan:</label> 
                                        <div class="col-sm-9">
                                        <input type="date" name="tgl_penetapan_stugas" id="tgl_penetapan_stugas" class="form-control" required value="<?php echo $master->tgl_penetapan_stugas ?>">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            &nbsp; &nbsp; &nbsp;
                                            <button type="submit" name="simpan" class="btn btn-primary">
                                            <i class="fa fa-save" aria-hidden="true"></i>  
                                            Simpan
                                            </button>
                                            &nbsp; &nbsp; &nbsp;
                                            <a href="<?php echo base_url('stugas'); ?>" class="btn btn-info">
                                                <i class="fa fa-arrow-left"></i>
                                                Kembali
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                                            </div>

                                                            
                                                        </div>

                                                        <div id="edit-pegawai" class="tab-pane">
                                                            <hr />
                                                            
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
                                            <div class="space-10"></div>
                                            <div class="form-group">
                                            <form enctype="multipart/form-data" class="form-horizontal" role="form" action="<?php echo base_url('stugas/edit'); ?>" method="POST">
                                    
                                     <?php echo form_hidden('id_stugas',$this->uri->segment(3));?> 
                                        <div class="table-header">Centang pada Data Pegawai Surat Tugas yang baru
                                        </div>  
                                        <table id="dynamic-table" class="table table-striped table-bordered table-hover" cellspacing="0">
                                            
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>NIP</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Golongan</th>
                                                        <th>Ruang</th>
                                                        <th>Jabatan</th>
                                                        <th class="center">
                                                            <label class="pos-rel">
                                                                <input type="checkbox" class="ace" />
                                                                <span class="lbl"></span>
                                                            </label>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody><?php
                                                    $no = 1;
                                                    foreach ($loadpegawai as $pegawai) {
                                                    ?>
                                                    
                                                    <tr>
                                                        <td><?php echo $no++;?></td>
                                                        <td><?php echo $pegawai->NIP;?></td>
                                                        <td><?php echo $pegawai->nama_pegawai;?></td>
                                                        <td><?php echo $pegawai->golongan;?></td>
                                                        <td><?php echo $pegawai->ruang;?></td>
                                                        <td><?php echo $pegawai->jabatan;?></td>
                                                        <td class="center">
                                                                    <label class="pos-rel">
                                                                        <input type="checkbox" name="id[]" class="ace" value="<?php echo $pegawai->id_pegawai;?>"/>
                                                                        <span class="lbl"></span>
                                                                    </label>
                                                        </td>
                                                    </tr><?php
                                                    }

                                                    ?>
                                                </tbody>

                                                
                                            </table>
                                            <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" name="simpan_peg" class="btn btn-primary">
                                            <i class="fa fa-save" aria-hidden="true"></i>  
                                            Simpan
                                            </button>
                                            &nbsp; &nbsp; &nbsp;
                                            <a href="<?php echo base_url('stugas'); ?>" class="btn btn-info">
                                                <i class="fa fa-arrow-left"></i>
                                                Kembali
                                            </a>
                                        </div>
                                    </div>
                                        </form></div>
                                                        </div>

                                                    </div>
                                                </div>

                                                
                                            </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->