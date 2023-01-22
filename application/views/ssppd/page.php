

<body onload="window.print()">
    
</body>
<style>
    .p1{
        font-size: 12px;
        line-height: 5px;
        text-align: right;
    }
    th{
        font-size: 12px;
        line-height: 5px;
        text-align: center;
    }
    
    .kop1{
        font-size: 16px;
        line-height: 5px;
        text-align: center;
    }
    .kop2{
        font-size: 16px;
        line-height: 5px;
        text-align: center;
    }
    .kop3{
        font-size: 20px;
        line-height: 5px;
        text-align: center;
    }
    .kop4{
        font-size: 12px;
        line-height: 5px;
        text-align: center;
    }
    table#t01, th, td  {
    border-collapse: collapse;
    border: 1px solid black;
    }
    .alignleft {
    float: left;
}
.alignright {
    float: right;
}


</style>
<br>
  <img src="<?php echo base_url() ?>assets/images/images.jpeg" alt="" style="float: left; height: 120px;width: 120px;margin-top:10px;margin-right: 10px;">
  <p class="kop1"><b>PEMERINTAH PROVINSI JAWA TENGAH</b></p> 
  <p class="kop2"><b>DINAS PENDIDIKAN DAN KEBUDAYAAN</b></p> 
  <p class="kop3"><b>SEKOLAH MENENGAH ATAS NEGERI 1</b></p> 
  <p class="kop3"><b>KESESI</b></p> 
  <p class="kop4">Jl. Raya Kaibahan Kesesi Telp. (0285) 4483086 Kab. Pekalongan – 51162</p> 
  <p class="kop4">Website : www.sma1kesesi.sch.id email :smakesesipekalongan@gmail.com</p> 

  
<br>
<div style="border-bottom:2px solid black;width: 80%;text-align: center;margin: 0 auto;"></div>
<br>
  

<center><u> SURAT PERINTAH PERJALANAN DINAS</u></center>
<center>( S P P D )</center>
<br>

<table id="t01">
                                                <thead>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <?php
    $no             = 1;
    foreach($detail->result() as $d)
    { ?>
                                                        <td  align="center">1</td>
                                                        <td  align="left" width="43%">Pengguna Anggaran / Kuasa Pengguna Anggaran</td>
                                                        <td  align="left" width="55%">: Kepala SMA Negeri 1 Kesesi Kabupaten Pekalongan</td>
                                                    </tr>
                                                    <tr>
                                                        <td  align="center">2</td>
                                                        <td  align="left" width="43%">Nama dan NIP pegawai yang melaksanakan perjalanan dinas</td>
                                                        <td  align="left" width="55%">: <?php echo $d->nama_pegawai;?>/<?php echo $d->NIP;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td  align="center">3</td>
                                                        <td  align="left" width="43%">a. Pangkat dan Golongan <br>b. Jabatan<br>c. Tingkat Biaya Perjalanan Dinas</td>
                                                        <td  align="left" width="55%">: <?php echo $d->golongan;?>,<?php echo $d->ruang;?><br>: Guru<br>: -</td>
                                                    </tr>
                                                    <tr>
                                                        <td  align="center">4</td>
                                                        <td  align="left" width="43%">Maksud Perjalanan Dinas</td>
                                                        <td  align="left" width="55%">: <?php echo $master->keperluan;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td  align="center">5</td>
                                                        <td  align="left" width="43%">Alat angkut yang dipergunakan</td>
                                                        <td  align="left" width="55%">: <?php echo $master->alat_angkut;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td  align="center">6</td>
                                                        <td  align="left" width="43%">a. Tempat Berangkat<br>b. Tempat Tujuan</td>
                                                        <td  align="left" width="55%">: <?php echo $master->tempat_berangkat;?><br>: <?php echo $master->tempat_tujuan;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td  align="center">7</td>
                                                        <td  align="left" width="43%">a. Lamanya Perjalanan Dinas<br>b. Tanggal berangkat<br>c. Tanggal kembali</td>
                                                        <td  align="left" width="55%">: <?php echo $master->lamanya_perjalanan_dinas;?><br>: <?php echo $master->tanggal_berangkat;?><br>: <?php echo $master->tanggal_kembali;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td  align="center">8</td>
                                                        <td  align="left" width="43%">Pengikut</td>
                                                        <td  align="left" width="55%">: -</td>
                                                    </tr>
                                                    <tr>
                                                        <td  align="center">9</td>
                                                        <td  align="left" width="43%">Pembebanan Anggaran<br>a. SKDP<br>b. Akun</td>
                                                        <td  align="left" width="55%"><br>: Kepala SMA Negeri 1 Kesesi Kabupaten Pekalongan<br>: -</td>
                                                    </tr>
                                                    <tr>
                                                        <td  align="center">10</td>
                                                        <td  align="left" width="43%"> Keterangan lain-lain<br> </td>
                                                        <td  align="left" width="55%"><br> </td>
                                                    </tr>
                                                </tbody>

                                                
                                            </table>




<!-- <?php 
$hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
echo "Kesesi, ".$hari[date("w")].", ".date("j")." ".$bulan[date("n")]." ".date("Y");
 ?> -->
 <br><br><div style="clear: both;">
 <p class="alignright">Ditetapkan di : <?php echo $master->ditetapkan;?><br>Pada tanggal : <?php echo $master->tgl_penetapan_ssppd;?><br>Pengguna Anggaran / Kuasa Pengguna Anggaran<br>Kepala SMA N 1 Kesesi<br>Kabupaten Pekalongan<br></br><br>Drs. Eko Supriyanto, M.Pd<br>Pembina Tk. I<br>NIP 19650109 199203 1 006</p> 

</div>
<br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br>
<br><br><div style="clear: both;">
 <p class="alignright">I. Berangkat dari : <?php echo $master->tempat_berangkat;?><br>Ke : <?php echo $master->tempat_tujuan;?><br>Pada Tanggal : <?php echo $master->tanggal_berangkat;?><br>Kepala SMA N 1 Kesesi<br>Kabupaten Pekalongan<br><br></br><br>Drs. Eko Supriyanto, M.Pd<br>Pembina Tk. I<br>NIP 19650109 199203 1 006</p> </div>
 <div style="clear: both;">
     <p class="alignleft"><br>II Tiba di : <?php echo $master->tempat_tujuan;?><br>Pada tanggal : <?php echo $master->tanggal_berangkat;?><br>Kepala : .............<br><br><br><br>..........................<br>NIP ..........................</p>
     <p class="alignright"><br>Berangkat dari : <?php echo $master->tempat_tujuan;?><br>Ke : <?php echo $master->tempat_berangkat;?><br>Pada tanggal : <?php echo $master->tanggal_kembali;?><br>Kepala : .............<br><br><br>..........................<br>NIP ..........................</p>
 
 </div>
<div style="border-bottom:2px solid black;width: 100%;text-align: center;margin: 0 auto;"></div><br>
<div style="clear: both;">
     <p class="alignleft"><br>III Tiba di : <?php echo $master->tempat_berangkat;?><br>Pada tanggal : <?php echo $master->tanggal_kembali;?></p>
     <p class="alignright"><br>Telah diperiksa dengan keterangan bahwa perjalanan <br>atas perintah pejabat yang berwenang dan semata -<br>mata untuk kepentingan jabatan dalam waktu yang<br> sesingkat - singkatnya<br><br><br>KUASA PENGGUNA ANGGARAN<br>KEPALA SMA N 1 KESESI<br>KAB. PEKALONGAN<br><br><br><br>Drs. Eko Supriyanto, M.Pd<br>      Pembina Tk. I<br>NIP 19650109 199203 1 006</p><br>
<div style="border-bottom:2px solid black;width: 100%;text-align: center;margin: 0 auto;"></div><br>
<div style="clear: right;">     
    <p class="alignleft">IV Catatan Lain - Lain<br></p>
</div>
<div style="clear: both;">     
    <p class="alignleft">V PERHATIAN<br>Pengguna Anggaran/Kuasa Pengguna Anggaran yang menerbitkan SPPD, Gubernur/Wakil Gubernur,<br>Pimpinan dan Anggota DPRD, PNS dan Pegawai Non PNS yang melakukan perjalanan dinas, <br>para pejabat yang mengesahkan tanggal berangkat/tiba, serta bendahara pengeluaran bertanggung <br>jawab berdasarkan peraturan - peraturan keuangan daerah apabila daerah menderita rugi akibat <br>kesalahan, kelalaian dan kealpaannya.</p>
</div>
 </div><br>
 <?php } ?>
<br>

