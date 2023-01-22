   

        <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Beranda</a>
                            </li>

                            <li class="active">Data User</li>
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
                                        <a href="<?php echo base_url('user/add'); ?>" class="btn btn-primary">
        <i class="fa fa-plus"></i>
        Tambah User
    </a>
                                        <div class="clearfix">
                                            <div class="pull-right tableTools-container"></div>
                                        </div>
                                        
                                        <!--  div.table-responsive -->

                                        <!-- div.dataTables_borderWrap -->
                                        <div>
                                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>NIP</th>
                                                        <th>Nama</th>
                                                        <th>Username</th>
                                                        <th>Level</th>
                                                        <th>
                                                           Status
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data as $user) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++;?></td>
                                                        <td><?php echo $user->NIP;?></td>
                                                        <td><?php echo $user->nama_pegawai;?></td>
                                                        <td><?php echo $user->nama_user;?></td>
                                                        <td><?php echo $user->level_user;?></td>
                                                        <td><?php echo $user->status;?></td>
                                                        <td style="text-align: center;">
                                                            <div class="hidden-sm hidden-xs action-buttons">
                                                                <a href="<?php echo base_url()?>user/edit/<?php echo $user->id_user;?>" class="btn btn-white btn-purple btn-sm">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                                Ubah 
                                                                </a>
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
            