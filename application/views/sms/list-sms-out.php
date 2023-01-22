           <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="<?php echo base_url('home'); ?>">Beranda</a>
                            </li>

                            <li class="">SMS</li>
                            <li class="active">SMS Keluar</li>
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
                                        <a href="<?php echo base_url('sms/send'); ?>" class="btn btn-primary">
                                        <i class="fa fa-plus"></i>
                                            Kirim SMS
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
                                                        <th>Ditambahkan Pada</th>
                                                        <th>Dikirim Pada</th>
                                                        <th>No. HP/Telepon</th>
                                                        <th>Isi Pesan</th>
                                                        <th>Status</th>
                                                        <th>Creator</th>
                                                    </tr>
                                                </thead>
                                                <tbody><?php
                                                    $no = 1;
                                                    foreach ($dataoutbox as $smsoutbox) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++;?></td>
                                                        <td><?php echo $smsoutbox->InsertIntoDB;?></td>
                                                        <td><?php echo $smsoutbox->SendingDateTime;?></td>
                                                        <td><?php echo $smsoutbox->DestinationNumber;?></td>
                                                        <td><?php echo $smsoutbox->TextDecoded;?></td>
                                                        <td><?php echo $smsoutbox->Status;?></td>
                                                        <td><?php echo $smsoutbox->CreatorID;?></td>
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
 
