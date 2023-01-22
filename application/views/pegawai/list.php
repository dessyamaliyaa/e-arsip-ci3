         <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Beranda</a>
                            </li>

                            <li class="active">Data Pegawai</li>
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
                                        <a href="<?php echo base_url('pegawai/add'); ?>" class="btn btn-primary">
                                        <i class="fa fa-plus"></i>
                                            Tambah Pegawai
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
                                                        <th>NIP</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Golongan</th>
                                                        <th>Ruang</th>
                                                        <th>Jabatan</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data as $pegawai) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++;?></td>
                                                        <td><?php echo $pegawai->NIP;?></td>
                                                        <td><?php echo $pegawai->nama_pegawai;?></td>
                                                        <td><?php echo $pegawai->golongan;?></td>
                                                        <td><?php echo $pegawai->ruang;?></td>
                                                        <td><?php echo $pegawai->jabatan;?></td>
                                                        <td style="text-align: center;">
                                                            <div class="hidden-sm hidden-xs action-buttons">
                                                                <a href="<?php echo base_url()?>pegawai/load_data/<?php echo $pegawai->id_pegawai;?>" class="btn btn-white btn-black btn-sm" data-rel="tooltip" title="Lihat Detail" data-placement="bottom">
                                                                <i class="fa fa-eye"></i>
                                                                </a>
                                                        <?php 
                                                        $level = $this->session->userdata('level_user');
                                                        if ($level == "Staf TU" || $level == "Super Admin") { ?>
                                                
                                                                <a href="<?php echo base_url()?>pegawai/edit/<?php echo $pegawai->id_pegawai;?>" class="btn btn-white btn-black btn-sm" data-rel="tooltip" title="Ubah" data-placement="bottom">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                                </a>
                                                                <?php  }?>
                                                            </div>
                                                        </td>
                                                    </tr><?php
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
