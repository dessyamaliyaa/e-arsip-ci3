
<body onload="window.print()">
    
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
 <br>
 <table width="100%; border= ">
   <center> 
  PENTING<img src="<?php echo base_url() ?>assets/images/kotak.png" style=”float:left;height: 50px;width: 50px;” />
  RAHASIA<img src="<?php echo base_url() ?>assets/images/kotak.png" style=”float:left;height: 50px;width: 50px;” />
  RUTIN<img src="<?php echo base_url() ?>assets/images/kotak.png" style=”float:left;height: 50px;width: 50px;” />
  </center>
</table>
<br>


<table>
  <thead>
   </thead>
  <tbody>
    <tr>
      <td align="left" width="25%">No Agenda </td>
      <td align="left" width="25%"> : <?php echo $master->nomor_kendali;?></td>
      <td align="left" width="25%">Diselesaikan Tanggal </td>
      <td align="left" width="25%"> : </td>
    </tr>
    <tr>
      <td align="left" width="25%">Tanggal </td>
      <td align="left" width="25%"> : <?php echo $master->tgl_terima;?></td>
      <td align="left" width="25%">Yang Menyelesaikan :</td>
      <td align="left" width="25%"> : </td>
    </tr>
    </tbody>
</table>
<table>
  <thead>
   </thead>
  <tbody>
    <tr>
      <td align="left" width="45%">Perihal </td>
      <td align="left" width="45%"> : <?php echo $master->perihal;?> </td>
    </tr>
    <tr>
      <td align="left" width="45%">Tgl/Nomor  </td>
      <td align="left" width="45%"> : <?php echo $master->surat_tanggal;?>/<?php echo $master->nomor_surat;?> </td>
    </tr>
    <td align="left" width="45%">Asal </td>
    <td align="left" width="45%"> : <?php echo $master->asal_surat;?></td><br>
    <tr>
    </tr>
  </tbody>
</table><br>

<table>
  <thead>
    <tr>
     
  <th><u><h6><center>INSTRUKSI</center></h6></u></th>
  <th><u><h6><center>DITERUSKAN</center></h6></u></th>

    </tr>
  </thead>
  <tbody>
    <tr>
        <td width="45%">1. Untuk Diketahui </td>
        <td width="45%">1. Wks Kurikulum (..............................................)</td>
    </tr>
    <tr>
        <td width="45%">2. Untuk Dipertimbangkan</td>
        <td width="45%">2. Wks. Kesiswaan (.............................................)</td>
    </tr>
    <tr>
        <td width="45%">3. Untuk diselesaikan lebih lanjut</td>
        <td width="45%">3. Wks. Humas (...................................................)</td>
    </tr>
    <tr>
        <td width="45%">4. Untuk dilaksanakan penuh tanggungjawab</td>
        <td width="45%">4. Wks. Sarpras (..................................................)</td>
    </tr>
    <tr>
        <td width="45%">5. Diusahakan untuk mengikuti</td>
        <td width="45%">5. Ka. Sub Bag TU (.............................................) </td>
    </tr>
    <tr>
        <td width="45%">6. Tugas sekolah diatur sebaik-baiknya dengan guru piket</td>
        <td width="45%">6. Koordinator BK (.............................................) </td>
    </tr>
    <tr>
        <td width="45%">7. Untuk dikonfirmasikan dengan pihak terkait</td>
        <td width="45%">7. Bendahara BOS/IOT/OSIS/BOP/Linnya (...........................................................................) </td>
    </tr>
     <tr>
        <td width="45%">8. Diteruskan kepada yang bersangkutan</td>
        <td width="45%">8. Wali Kelas (.....................................................) </td>
    </tr>
    <tr>
        <td width="45%">9. Untuk dicopy dan dipasang di papan pengumuman</td>
        <td width="45%">9. Guru Mata Pelajaran (.....................................)</td>
    </tr>
    <tr>
        <td width="45%">10. Untuk dilengkapi surat tugas/SPPD</td>
        <td width="45%">10. Bag. Kepegawaian (......................................)</td>
    </tr>
    <tr>
        <td width="45%">11. Disisipkan untuk bahan brifing.....................</td>
        <td width="45%">11. Bag Kesiswaan (............................................)</td>
    </tr>
    <tr>
        <td width="45%">12. ..........................................................</td>
        <td width="45%">12. Bag Inventaris (............................................)</td>
    </tr>
    <tr>
        <td width="45%"></td>
        <td width="45%">13. Lain-lain.......... (...........................................)</td>
    </tr>
  </tbody>
</table><br>
 
   <td>Catatan : ...........................................................................................................................................................</td>
   <td>...........................................................................................................................................................................</td>
   <td>...........................................................................................................................................................................</td>
   <td>...........................................................................................................................................................................</td>
   <td>...........................................................................................................................................................................</td><br><br>
 





