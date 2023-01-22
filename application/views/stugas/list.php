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
                            <li class="active">Data Surat Tugas</li>
                        </ul><!-- /.breadcrumb -->


                    </div>

                    <div class="page-content">
                        <div class="row"><?php 
                                                    echo $this->session->flashdata('info');
                                                ?>
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <?php 
                                        $level = $this->session->userdata('level_user');
                                        if ($level == "Staf TU" || $level == "Super Admin") { ?>
                                        <a href="<?php echo base_url('stugas/add'); ?>" class="btn btn-primary">
                                        <i class="fa fa-plus"></i>
                                            Tambah Surat Tugas
                                        </a>
                                        <?php } ?>
                                        <div class="clearfix">
                                            <div class="pull-right tableTools-container"></div>
                                        </div>
                                        
                                        <!-- div.table-responsive -->

                                        <!-- div.dataTables_borderWrap -->
                                        <div>
                                            <table id="dynamic-table" class="table table-striped table-bordered table-hover" cellspacing="0">
                                                <thead>
                                                    <tr> 
                                                        <th>No.</th>
                                                        <th>Tanggal Surat</th>
                                                        <th>No. Surat Tugas</th>
                                                        <th>Dasar</th>
                                                        <th>Keperluan</th>
                                                        <th>Keterangan</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody><?php
                                                    $no = 1;
                                                    foreach ($data as $stugas) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++;?></td>
                                                        <td><?php echo $stugas->tgl_penetapan_stugas;?></td>
                                                        <td><?php echo $stugas->no_surat_tugas;?></td>
                                                        <td>Surat <?php echo $stugas->asal_surat;?> perihal <?php echo $stugas->perihal;?></td>
                                                        <td><?php echo $stugas->keperluan;?></td>
                                                        <td><?php echo $stugas->hari;?>, <?php echo $stugas->tanggal;?></td>
                                                        <td style="text-align: center;">
                                                            <div class="hidden-sm hidden-xs action-buttons">
                                                                <a href="<?php echo base_url()?>stugas/load_data/<?php echo $stugas->id_surat_tugas;?>" class="btn btn-white btn-pink btn-sm" data-toggle="modal" data-rel="tooltip" title="Lihat Detail" data-placement="bottom">
                                                                <i class="fa fa-eye"></i>
                                                                </a>
                                                        <?php 
                                                        $level = $this->session->userdata('level_user');
                                                        if ($level == "Staf TU" || $level == "Super Admin") { ?>
                                                
                                                                <a href="<?php echo base_url()?>stugas/edit/<?php echo $stugas->id_surat_tugas;?>" class="btn btn-white btn-purple btn-sm" data-rel="tooltip" title="Ubah" data-placement="bottom">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                                </a>
                                                                <a href="<?php echo base_url()?>stugas/cetak/<?php echo $stugas->id_surat_tugas;?>" class="btn btn-white btn-black btn-sm" data-rel="tooltip" title="Cetak" data-placement="bottom" target="_BLANK">
                                                                <i class="glyphicon glyphicon-print"></i>
                                                                </a>
                                                                <?php  }?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }

                                                    ?>
                                                </tbody>
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->
            