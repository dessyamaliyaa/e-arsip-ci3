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
                            <li class="active">Data Surat Keluar</li>
                        </ul><!-- /.breadcrumb -->

                    </div>

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row"><?php 
                                                    echo $this->session->flashdata('info');
                                                ?>
                                    <div class="col-xs-12">
                                        <?php 
                                        $level = $this->session->userdata('level_user');
                                        if ($level == "Staf TU" || $level == "Super Admin") { ?>
                                        <a href="<?php echo base_url('sk/add'); ?>" class="btn btn-primary">
                                        <i class="fa fa-plus"></i>
                                            Tambah Surat Keluar
                                        </a>
                                        <?php } ?> 
                                        <div class="clearfix">
                                            <div class="pull-right tableTools-container"></div>
                                        </div>
                                        
                                        <!-- div.table-responsive -->

                                        <!-- div.dataTables_borderWrap -->
                                        <div>
                                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Tanggal Surat</th>
                                                        <th>No. Surat</th>
                                                        <th>Perihal</th>
                                                        <th>Dikirim</th>
                                                        <th>File</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody><?php
                                                    $no = 1;
                                                    foreach ($data as $sk) { 
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++;?></td>
                                                        <td><?php echo $sk->tgl_penetapan_skeluar;?></td>
                                                        <td><?php echo $sk->no_surat;?></td>
                                                        <td><?php echo $sk->perihal;?></td>
                                                        <td><?php echo $sk->dikirim;?></td>
                                                        <td><a href="uploads/<?php echo $sk->file;?>" target="_BLANK"><?php echo $sk->file;?></a></td>
                                                        <td style="text-align: center;">
                                                            <div class="hidden-sm hidden-xs action-buttons">
                                                                <a href="<?php echo base_url()?>sk/load_data/<?php echo $sk->id_surat_keluar;?>" class="btn btn-white btn-pink btn-sm" data-rel="tooltip" title="Lihat Detail" data-placement="bottom">
                                                                <i class="fa fa-eye"></i>
                                                                </a>
                                                        <?php 
                                                        $level = $this->session->userdata('level_user');
                                                        if ($level == "Staf TU" || $level == "Super Admin") { ?>
                                                
                                                                <a href="<?php echo base_url()?>sk/edit/<?php echo $sk->id_surat_keluar;?>" class="btn btn-white btn-black btn-sm"  data-rel="tooltip" title="Ubah" data-placement="bottom">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                                </a>
                                                                <a href="<?php echo base_url()?>sk/cetak/<?php echo $sk->id_surat_keluar;?>" class="btn btn-white btn-black btn-sm" data-rel="tooltip" title="Cetak" data-placement="bottom" target="_BLANK">
                                                                <i class="fa fa-print"></i>
                                                                </a>
                                                                <?php  }?>
                                                            </div>
                                                        </td><?php  }?>
                                                    </tr>
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
