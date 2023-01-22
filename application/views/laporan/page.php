
<body onload="window.print()">
    <?php

    $sm  = $this->db->get('tbsurat_masuk')->num_rows();
    $sk     = $this->db->get('tbsurat_keluar')->num_rows();
    $st    = $this->db->get('tbsurat_tugas')->num_rows();
    $sppd    = $this->db->get('tbsurat_sppd')->num_rows();
    ?>
    
</body>
<style>
    th,td{
        font-size: 12px;
        line-height: 16px;
        text-align: center;
    }
    .alignleft {
    float: left;
    }
    .alignright {
        float: right;
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
    .p1{
        font-size: 12px;
        line-height: 5px;
        text-align: right;
    }
    .p2{
        font-size: 12px;
        line-height: 5px;
        text-align: left;
    }
    table#t01, th, td  {
    border-collapse: collapse;
    border: 1px solid black;
    }

</style>
<br>
<table width="100%; border= ">
  <img src="<?php echo base_url() ?>assets/images/images.jpeg" alt="" style="float: left; height: 120px;width: 120px;margin-top:10px;margin-right: 10px;">
  <p class="kop1"><b>PEMERINTAH PROVINSI JAWA TENGAH</b></p> 
  <p class="kop2"><b>DINAS PENDIDIKAN DAN KEBUDAYAAN</b></p> 
  <p class="kop3"><b>SEKOLAH MENENGAH ATAS NEGERI 1</b></p> 
  <p class="kop3"><b>KESESI</b></p> 
  <p class="kop4">Jl. Raya Kaibahan Kesesi Telp. (0285) 4483086 Kab. Pekalongan – 51162</p> 
  <p class="kop4">Website : www.sma1kesesi.sch.id email :smakesesipekalongan@gmail.com</p> 

  
</table>
<br>
<div style="border-bottom:2px solid black;width: 80%;text-align: center;margin: 0 auto;"></div>
<br>
  <p class="kop3">LAPORAN SURAT MASUK DAN KELUAR</p>

<br><br>
<table width="100%" class="table table-bordered" style="border-collapse: collapse">
    <thead><th width="25%">Surat Masuk</th>
        <th width="25%">Surat Keluar</th>
        <th width="25%">Surat Tugas</th>
        <th width="25%">Surat SPPD</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $sm; ?></td>
                                                        <td><?php echo $sk; ?></td>
                                                        <td><?php echo $st; ?></td>
                                                        <td><?php echo $sppd; ?></td>
                                                    </tr>
                                                </tbody>
</table>
                                            
<br><br><BR><br><br><br><BR>
<p class="p1">
<?php 
$hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

 ?></p>
 <br>
<div style="clear: both;">
 <p class="alignright"><?php echo "Kesesi, ".date("j")." ".$bulan[date("n")]." ".date("Y");
?><br>Kepala SMA N 1 Kesesi<br>Kabupaten Pekalongan<br></br><br>Drs. Eko Supriyanto, M.Pd<br>Pembina Tk. I<br>NIP 19650109 199203 1 006</p> 

</div>