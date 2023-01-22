
         <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Beranda</a>
                            </li>

                            <li class="active">Kirim Pesan Whatsapp</li>
                        </ul><!-- /.breadcrumb -->

                    </div>

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-xs-12">
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
                                                                <a href="https://api.whatsapp.com/send?phone=<?php echo $pegawai->no_hp;?>&amp;text=Anda%20mendapat%20Surat.%20Silahkan%20Hubungi%20Tata%20Usaha%20SMA%20Negeri%201%20Kesesi%20Bagian%20Persuratan.%20Terima%20Kasih." class="btn btn-white btn-black btn-sm" data-rel="tooltip" title="Kirim Pesan Whatsapp" data-placement="bottom" target="_BLANK">
                                                                <i class="fa fa-comment-o"></i>
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
