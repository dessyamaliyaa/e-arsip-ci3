

<body onload="window.print()">
    <?php

    $sm  = $this->db->get('tbsurat_masuk')->num_rows();
    $sm_all     = $this->db->get('tbsurat_keluar')->num_rows();
    $sm_non_disposisi = $this->db->get('tbsurat_masuk')->num_rows();
    $st_all    = $this->db->get('tbsurat_tugas')->num_rows();
    $sppd_all    = $this->db->get('tbsurat_sppd')->num_rows();
    ?>
    
</body>
<style>
    .p1{
        font-size: 12px;
        line-height: 5px;
        text-align: right;
    }
    th{
        font-size: 26px;
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
    .alignleft {
    float: left;
    margin-left: 55px;
    }
    .dasar{
    float: left;
    margin-left: 55px;
    }
    .kepada{
    float: left;
    margin-left: 55px;

    }

    .isi{
    float: left;
    margin-left: 95px;

    }
.alignright {
    float: right;
}
.nomor {
    float: left;
    margin-left: 65px;
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
  <u><h3 align="center">SURAT PERINTAH TUGAS</h3></u>
  <center>
        NOMOR : <?php echo $master->no_surat_tugas;?><br><br>
        

  </center>
    <p class="dasar">Dasar : Surat <?php echo $master->asal_surat; ?> Nomor <?php echo $master->nomor_surat;?> Tanggal <?php echo $master->surat_tanggal;?> Perihal <?php echo $master->perihal; ?> </p>

    <br><br>
    <p align="center">MEMERINTAHKAN :</hp>
    <div style="clear: both;">
  <p class="alignleft">Kepada : </p></div>
   <?php
    $no             = 1;
    foreach($detail->result() as $detail)

    {?> 
   <table>
    <thead>
       

    </thead>
       <tbody> 
    <div style="clear: both;">
               <td align="left" class="isi">Nama<br>Pangkat/Golongan<br>NIP<br>Jabatan</td>
               <td align="left" class="isi"> : <?php echo $detail->nama_pegawai;?><br>: <?php echo $detail->pangkat ;?>/<?php echo $detail->golongan ;?><br>: <?php echo $detail->NIP ;?><br>: <?php echo $detail->jabatan;?></td></div>
      
           </tr>
       </tbody>
   </table>
    <?php }?>
    <div style="clear: both;">
 <p class="alignleft">Untuk <?php echo $master->keperluan;?> yang akan dilaksanakan pada :</p> </div>
    <div style="clear: both;">
      <table><thead></thead><tbody><td class="isi">
        Hari<br>Tanggal<br>Waktu<br>Tempat</p>
        <td class="isi">: <?php echo $master->hari;?><br>: <?php echo $master->tanggal;?><br>: <?php echo $master->waktu;?><br>: <?php echo $master->tempat;?></td>
      </td></tbody></table>
 
    </div>

  
    <div style="clear: both;">
    <p class="alignleft">Demikian agar dapat dilaksanakan dengan sebaik-baiknya.</p></div>

   <!-- <?php 
$hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
echo "Kesesi, ".$hari[date("w")].", ".date("j")." ".$bulan[date("n")]." ".date("Y");
 ?> -->
 <br><div style="clear: both;">
 <p class="alignright">Ditetapkan di : <?php echo $master->ditetapkan;?><br>Pada tanggal : <?php echo $master->tgl_penetapan_stugas;?><br>Kepala SMA N 1 Kesesi<br>Kabupaten Pekalongan<br></br><br>Drs. Eko Supriyanto, M.Pd<br>Pembina Tk. I<br>NIP 19650109 199203 1 006</p> 

</div>
