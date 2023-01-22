
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
                            <li class="active">Tambah Surat Tugas</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h4><p class="text-info">Isi Data berikut untuk menambah Surat Tugas.</p></h4>
                        </div><!-- /.page-header -->

                        <div class="row"><?php 
                                                    echo $this->session->flashdata('info');
                                                ?>
                            <div class="col-xs-12">
                                 
                                    <div class="form-group">
                                        <form class="form-horizontal" role="form" action="<?php echo base_url('stugas/add_pegawai'); ?>" method="POST" enctype="multipart/form-data">  
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
                                            <input type="submit" name="simpan" id="submit" class="btn btn-primary" value="Simpan" />
                                        </div>
                                    </div>
                                        </form>
                                    </div>
                                    
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->
        <script type="text/javascript">
            jQuery(function($) {           
                myTable.on( 'select', function ( e, dt, type, index ) {
                if ( type === 'row' ) {
                   $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
                }
                } );
                myTable.on( 'deselect', function ( e, dt, type, index ) {
                if ( type === 'row' ) {
                    $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
                }
                } );
                })
        </script>

        <h4 id="result"></h4>
        