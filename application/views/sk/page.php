
<body onload="window.print()">
    
</body>
<style>
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
    th{
        font-size: 26px;
        line-height: 5px;
        text-align: center;
    }
    .isi{
        font-size: 12px;
        line-height: 12px;
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
    }
    .alignright {
        float: right;
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
 <p class="p1">Kesesi, <?php echo $data->tgl_penetapan_skeluar; ?></p><br>
<div style="clear: both;">
         <p class="alignleft">Nomor    : <?php echo $data->no_surat; ?><br>Hal : <?php echo $data->perihal; ?></p>
         <p class="alignright">Kepada <br>Yth.  <?php echo $data->kepada; ?><br>di Tempat</p><br>
</div><br>
<br><br>
 <p><?php echo $data->isi; ?> </p>                                                          





<!-- <?php 
$hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
echo "Kesesi, ".$hari[date("w")].", ".date("j")." ".$bulan[date("n")]." ".date("Y");
 ?> -->
 <br>
 <p class="p1">Kepala SMA N 1 Kesesi</p> 
 <p class="p1">Kabupaten Pekalongani</p>
<BR></br><br> 
 <p class="p1">NIP 19650109 199203 1 006</p> 

<br>
 
<br>

