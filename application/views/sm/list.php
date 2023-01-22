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
                            <li class="active">Data Surat Masuk</li>
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
                                        <a href="<?php echo base_url('sm/add'); ?>" class="btn btn-primary">
                                        <i class="fa fa-plus"></i>
                                            Tambah Surat Masuk
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
                                                        <th>No. Kendali</th>
                                                        <th>Tanggal Terima</th>
                                                        <th>Perihal</th>
                                                        <th>Status Disposisi</th>
                                                        <th>File</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody><?php
                                                    $no = 1;
                                                    foreach ($data as $sm) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++;?></td>
                                                        <td><?php echo $sm->nomor_kendali;?></td>
                                                        <td><?php echo $sm->tgl_terima;?></td>
                                                        <td><?php echo $sm->perihal;?></td>
                                                        <?php 
                                                        $status = $sm->status;
                                                        if ($status == "belum") { ?>
                                                        <td> <?php 
                                                       
                                                        if ($level == "Staf TU" || $level == "Super Admin") { ?><a href="<?php echo base_url()?>sm/disposisi/<?php echo $sm->id_surat_masuk;?>" <?php  } else { ?><a href="" <?php } ?> class="btn btn-white btn-black btn-sm" data-toggle="modal">
                                                                <i class="glyphicon glyphicon-minus"></i>
                                                                Belum
                                                                </a>
                                                        </td><?php  } else if ($status == "ya") { ?>
                                                        <td> <a href="#" class="btn btn-white btn-success btn-sm">
                                                                <i class="glyphicon glyphicon-ok"></i>
                                                                Ya
                                                                </a>
                                                        </td><?php  } else if ($status == "tidak") { ?>
                                                        <td> <a href="#" class="btn btn-white btn-danger btn-sm">
                                                                <i class="glyphicon glyphicon-remove"></i>
                                                                Tidak
                                                                </a>
                                                        </td><?php  }?>
                                                        <td><a href="uploads/<?php echo $sm->file;?>" target="NEW"><?php echo $sm->file;?></a></td>
                                                        <td style="text-align: center;">
                                                            <div class="hidden-sm hidden-xs action-buttons">
                                                                <a href="<?php echo base_url()?>sm/load_data/<?php echo $sm->id_surat_masuk;?>" class="btn btn-white btn-black btn-sm" data-toggle="modal" data-rel="tooltip" title="Lihat Detail" data-placement="bottom">
                                                                <i class="fa fa-eye"></i>
                                                                </a>
                                                        <?php 
                                                        $level = $this->session->userdata('level_user');
                                                        if ($level == "Staf TU" || $level == "Super Admin") { ?>
                                                
                                                                <a href="<?php echo base_url()?>sm/edit/<?php echo $sm->id_surat_masuk;?>" class="btn btn-white btn-black btn-sm" data-rel="tooltip" title="Ubah" data-placement="bottom" >
                                                                <i class="fa fa-pencil-square-o"></i>
                                                                </a>
                                                                <a href="<?php echo base_url()?>sm/cetak/<?php echo $sm->id_surat_masuk;?>" class="btn btn-white btn-black btn-sm" data-rel="tooltip" title="Cetak" data-placement="bottom" target="_BLANK" id="<?php echo base_url()?>sm/cetak/<?php echo $sm->id_surat_masuk;?>">
                                                                <i class="fa fa-print"></i>
                                                                </a>
                                                                <!-- <a href="<?php echo base_url()?>sm/cetak/<?php echo $sm->id_surat_masuk;?>" class="btn btn-white btn-black btn-sm" data-rel="tooltip" title="Cetak" data-placement="bottom" target="_BLANK">
                                                                <i class="fa fa-print"></i>
                                                                </a> -->
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
            