<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/font-css.css">
</head>
<body id="tableID" style="widows:960px">
<!-- Start Table Print -->

<?php if(isset($dt_survey)){ foreach($dt_survey as $row){ ?>
  <table width="900" border="0">
  <tr>
    <td width="130">
      <img class="medi-responsive" src="<?php echo base_url();?>/uploads/bandung-logo.png" width="130px">
    </td>
    <td width="764"><p style="font-size:32px;text-align:center;line-height:0.2"><strong>PEMERINTAH   KOTA   BANDUNG </strong></p>
    <p style="font-size:24px;text-align:center;line-height:0.2"><strong>BADAN KESATUAN BANGSA </strong></p>
  <p style="font-size:24px;text-align:center;line-height:0.2"><strong>DAN PEMBERDAYAAN MASYARAKAT </strong></p>
  <p style="font-size:14px;text-align:center;line-height:0.2">Jalan Wastukencana No.2 Tlp. 022.4230393, 4230097 - Bandung</p></td>
  </tr>

</table>
<hr/ style="border-top: 4px double #323232;">

<table width="861" border="0">
<?php if($row->jenisijin == 'survey'){?>
<tr>
  <td width="679" align="center" class="fontku"style="font-weight:bold">REKOMENDASI SURVEY</td>
</tr>
<?php }elseif ($row->jenisijin == 'penelitian'){?>
  <tr>
    <td width="679" align="center" class="fontku"style="font-weight:bold">REKOMENDASI PENELITIAN</td>
  </tr>
<?php }else{?>
  <tr>
    <td width="679" align="center" class="fontku"><strong style="font-weight:bold">REKOMENDASI PRAKTEK KERJA LAPANGAN</strong></td>
  </tr>
<?php } ?>
<tr>
  <td width="679" align="center" class="fontku">NOMOR : 070/<?php echo $row->nmsurat;?>-OL/BKBPM</td>

</tr>

</table>
<br/>
<table width="859" border="0">
<tr>
  <td width="206" class="fontku">Dasar</td>
  <td width="10" class="fontku">:</td>
  <td width="12" class="fontku">1</td>
  <td width="618" class="fontku" align="justify">Peraturan Daerah Kota Bandung No. 4 tahun 2013 tentang Struktur Organisasi Badan </td>
</tr>
  <tr>
  <td width="206" class="fontku"></td>
  <td width="10" class="fontku"></td>
  <td width="12" class="fontku"></td>
  <td width="618" class="fontku" align="justify">KesatuanBangsa dan Pemberdayaan Masyarakat Kota Bandung.</td>
</tr>
<tr>
  <td width="206" class="fontku">&nbsp;</td>
  <td width="10" class="fontku">&nbsp;</td>
  <td width="12" class="fontku">2</td>
  <td width="618" class="fontku" align="justify">Peraturan Menteri Dalam Negeri Nomor 7 Tahun 2014 tentang Perubahan Atas Peraturan Menteri </td>
</tr>
<tr>
  <td width="206" class="fontku">&nbsp;</td>
  <td width="10" class="fontku">&nbsp;</td>
  <td width="12" class="fontku"></td>
  <td width="618" class="fontku" align="justify"> Dalam Negeri Nomor 64 Tahun 2001 tentang Pedoman Penelitian Rekomendasi Penelitian.</td>
</tr>

<tr style="">
  <td width="206" class="fontku">Menimbang</td>
  <td width="10" class="fontku">:</td>
  <td width="12" class="fontku">&nbsp;</td>
  <td width="618" class="fontku" align="justify">Surat dari <?php echo $row->kampus;?> Nomor : <?php echo $row->nosuratkampus;?> Tanggal <?php echo $row->tglsuratkampus;?>  </td>
</tr>
<?php if($row->jenisijin == 'survey'){?>
<tr>
  <td width="206" height="21" class="fontku"></td>
  <td width="10" class="fontku"></td>
  <td width="12" class="fontku">&nbsp;</td>
  <td width="618" class="fontku" align="justify"> Perihal Permohonan Ijin Survey.</td>
</tr>
<?php }elseif ($row->jenisijin == 'penelitian'){?>
  <tr>
    <td width="206" height="21" class="fontku"></td>
    <td width="10" class="fontku"></td>
    <td width="12" class="fontku">&nbsp;</td>
    <td width="618" class="fontku" align="justify"> Perihal Permohonan Ijin Penelitian.</td>
  </tr>
<?php }else{?>
  <tr>
    <td width="206" height="21" class="fontku"></td>
    <td width="10" class="fontku"></td>
    <td width="12" class="fontku">&nbsp;</td>
    <td width="618" class="fontku" align="justify"> Perihal Permohonan Ijin Praktek Kerja Lapangan.</td>
  </tr>
  <?php } ?>
</table>
<br/>
<table width="858">
<tr>
<td width="543" align="center" class="fontku"><strong style="font-weight:bold">MEMBERITAHUKAN BAHWA :</strong></td>
</tr>
</table>
<br/>
<table width="866" border="0">
<tr>
  <td width="23" class="fontku">a.</td>
  <td width="185" class="fontku">Nama </td>
  <td width="10" class="fontku">: </td>
  <td class="fontku"><strong style="font-weight:bold"><?php echo $row->nama;?></strong> </td>
</tr>
<tr>

   <td width="23" class="fontku">b.</td>
   <td width="185" class="fontku">Tempat /Identitas</td>
   <td width="10" class="fontku">: </td>
   <td width="632" class="fontku"><?php echo $row->alamat;?> Kota Bandung ,No.Hp <?php echo $row->nohp;?></td>
 </tr>
  <tr>
   <td width="23"></td>
   <td width="185" class="fontku"></td>
   <td width="10" class="fontku"> </td>
   <td width="632" class="fontku"> NPM. <?php echo $row->noktp;?> </td>
 </tr>

</table>
<table width="869">
<?php if($row->jenisijin == 'survey'){?>
<tr>
  <td width="23" class="fontku">c.</td>
  <td width="182" class="fontku">Untuk</td>
  <td width="10" class="fontku">:</td>
  <td width="28" class="fontku"> 1). </td>
  <td width="602" class="fontku">Melakukan Survey, Tentang </td>
</tr>
<tr>
  <td width="23"></td>
  <td width="182" class="fontku"></td>
  <td width="10" class="fontku"></td>
  <td width="28">  </td>
  <td width="602" class="fontku"><strong style="font-weight:bold">" <?php echo $row->judul;?> "</strong></td>

</tr>
<?php }elseif ($row->jenisijin == 'penelitian'){?>
  <tr>
    <td width="23" class="fontku">c.</td>
    <td width="182" class="fontku">Untuk</td>
    <td width="10" class="fontku">:</td>
    <td width="28" class="fontku"> 1). </td>
    <td width="602" class="fontku">Melakukan Penelitian, Tentang </td>
  </tr>
  <tr>
    <td width="23"></td>
    <td width="182" class="fontku"></td>
    <td width="10" class="fontku"></td>
    <td width="28">  </td>
    <td width="602" class="fontku"><strong style="font-weight:bold">" <?php echo $row->judul;?> "</strong></td>

  </tr>
  <?php }else{?>
    <tr>
      <td width="23" class="fontku">c.</td>
      <td width="182" class="fontku">Untuk</td>
      <td width="10" class="fontku">:</td>
      <td width="28" class="fontku"> 1). </td>
      <td width="602" class="fontku">Melakukan Praktek Kerja Lapangan </td>
    </tr>
  <?php } ?>

</table>
<table width="869">
  <tr>
      <td width="20">&nbsp;</td>
      <td width="198" class="fontku">&nbsp;</td>
      <td width="21" class="fontku"> 2). </td>
      <td class="fontku">Lokasi</td>
      <td width="9" class="fontku">:</td>
      <td width="427" class="fontku"> <?php echo $row->lokasi1;?> </td>
    </tr>
    <?php if($row->lokasilainnya != null){?>
    <tr>
      <td width="20">&nbsp;</td>
      <td width="198" class="fontku">&nbsp;</td>
      <td width="21" class="fontku"></td>
      <td width="166"></td>
      <td></td>
      <td width="427" class="fontku">
        ( <?php echo $row->lokasilainnya;?> )
      </td>
    </tr>
    <?php }else{ ?>
    <?php } ?>

    <tr>
      <td width="20">&nbsp;</td>
      <td width="198" class="fontku">&nbsp;</td>
      <td width="21" class="fontku"></td>
      <td width="166"></td>
      <td></td>
      <td width="427" class="fontku">
        <?php if($row->lokasi2 != null){
             echo $row->lokasi2 ;
             echo ",";
        }else{

        } ?>

        <?php if($row->lokasi3 != null){
             echo $row->lokasi3 ;
             echo ",";
        }else{

        } ?>

        <?php if($row->lokasi4 != null){
             echo $row->lokasi4 ;
             echo ",";
        }else{

        } ?>

        <?php if($row->lokasi5 != null){
             echo $row->lokasi5 ;
             echo ",";
        }else{

        } ?>

        <?php if($row->lokasi6 != null){
             echo $row->lokasi6 ;
             echo ",";
        }else{

        } ?>

        <?php if($row->lokasi6 != null){
             echo $row->lokasi6 ;
             echo ",";
        }else{

        } ?>

        <?php if($row->lokasi7 != null){
             echo $row->lokasi7 ;
             echo ",";
        }else{

        } ?>

        <?php if($row->lokasi8 != null){
             echo $row->lokasi8 ;
             echo ",";
        }else{

        } ?>

        <?php if($row->lokasi9 != null){
             echo $row->lokasi9 ;
             echo ",";
        }else{

        } ?>

        <?php if($row->lokasi10 != null){
             echo $row->lokasi10 ;
             echo ",";
        }else{

        } ?>
      </td>
    </tr>


    <tr>
      <td width="20">&nbsp;</td>
      <td width="198" class="fontku">&nbsp;</td>
      <td width="21" class="fontku"> 3). </td>
      <td class="fontku">Anggota Tim </td>
      <td width="9" class="fontku">:</td>
      <td width="427" class="fontku"> <?php echo $row->anggota1;?> , <?php echo $row->anggota2;?></td>
    </tr>
    <tr>
      <td width="20">&nbsp;</td>
      <td width="198" class="fontku">&nbsp;</td>
      <td width="21" class="fontku"> </td>
      <td width="166"></td>
      <td></td>
      <td width="427" class="fontku">

      <?php if($row->anggota3 != null){?>
         ,<?php echo $row->anggota3;?>
      <?php  }else{
      } ?>

      <?php if($row->anggota4 != null){?>
         ,<?php echo $row->anggota4;?>
      <?php  }else{
      } ?>

      <?php if($row->anggota5 != null){?>
         ,<?php echo $row->anggota5;?>
      <?php  }else{
      } ?>

      <?php if($row->anggota6 != null){?>
         ,<?php echo $row->anggota6;?>
      <?php  }else{
      } ?>

      <?php if($row->anggota7 != null){?>
         ,<?php echo $row->anggota7;?>
      <?php  }else{
      } ?>

      <?php if($row->anggota8 != null){?>
         ,<?php echo $row->anggota8;?>
      <?php  }else{
      } ?>

      <?php if($row->anggota9 != null){?>
         ,<?php echo $row->anggota9;?>
      <?php  }else{
      } ?>

      <?php if($row->anggota10 != null){?>
         ,<?php echo $row->anggota10;?>
      <?php  }else{
      } ?>
      </td>
    </tr>
    <tr>
      <td width="20">&nbsp;</td>
      <td width="198" class="fontku">&nbsp;</td>
      <td width="21" class="fontku"> 4).</td>
      <td class="fontku"> Bidang</td>
      <td width="9" class="fontku">:</td>
      <td width="427" class="fontku"> <?php echo $row->bidanglain;?></td>
    </tr>
    <tr>
      <td width="20" >&nbsp;</td>
      <td width="198" class="fontku">&nbsp;</td>
      <td width="21" class="fontku"> 5).</td>
      <td class="fontku">Waktu Penelitian</td>
      <td width="9" class="fontku">:</td>
      <td width="427" class="fontku"> <?php echo $row->tglawal;?> s.d <?php echo $row->tglakhir;?></td>
    </tr>
</table>
<table width="869">
<tr>
   <td width="28" class="fontku">d.</td>
   <td width="829" class="fontku">Melaporkan hasil Survey kepada Walikota Bandung c.q Kepala Badan Kesatuan Bangsa dan Pemberdayaan Masyarakat </td>
  </tr>
  <tr>
   <td width="28" height="21"></td>
   <td width="829" class="fontku"> Kota Bandung paling lambat 1 minggu setelah selesai</td>
  </tr>

</table>

<table width="869">
<tr>

   <td width="829" class="fontku"><br/>Demikian rekomendasi ini dibuat untuk digunakan sepenuhnya.</td>
  </tr>

</table>


<br/>

<?php if(($row->jabatan) == 'Kepala Bidang'){  ?>
<table width="868" border="0">
<tr>
  <td width="461">&nbsp;</td>
  <td width="397" align="center" class="fontku" style="font-weight:bold">KEPALA BADAN KESATUAN BANGSA DAN </td>
</tr>
 <tr>
  <td width="461">&nbsp;</td>
  <td width="397" align="center" class="fontku" style="font-weight:bold">PEMBERDAYAAN MASYARAKAT</td>
</tr>
<tr>
  <td width="461">&nbsp;</td>
  <td width="397" align="center" class="fontku" style="font-weight:bold">KOTA BANDUNG</td>
</tr>



</table>
<br/>
<?php }elseif(($row->jabatan) == 'Sekretaris'){  ?>
  <table width="868" border="0">
  <tr>
    <td width="461">&nbsp;</td>
    <td width="397" align="center" class="fontku" style="font-weight:bold">a.n. KEPALA BADAN KESATUAN BANGSA DAN </td>
  </tr>
   <tr>
    <td width="461">&nbsp;</td>
    <td width="397" align="center" class="fontku" style="font-weight:bold">PEMBERDAYAAN MASYARAKAT</td>
  </tr>
  <tr>
    <td width="461">&nbsp;</td>
    <td width="397" align="center" class="fontku" style="font-weight:bold">KOTA BANDUNG</td>
  </tr>

  <tr>
    <td width="461">&nbsp;</td>
    <td width="397" align="center" class="fontku"><?php echo $row->jabatan;?></td>
  </tr>

  </table>
<?php }else{ ?>
  <table width="868" border="0">
  <tr>
    <td width="461">&nbsp;</td>
    <td width="397" align="center" class="fontku" style="font-weight:bold">KEPALA BADAN KESATUAN BANGSA DAN </td>
  </tr>
   <tr>
    <td width="461">&nbsp;</td>
    <td width="397" align="center" class="fontku" style="font-weight:bold">PEMBERDAYAAN MASYARAKAT</td>
  </tr>
  <tr>
    <td width="461">&nbsp;</td>
    <td width="397" align="center" class="fontku" style="font-weight:bold">KOTA BANDUNG</td>
  </tr>



  </table>
<?php } ?>
<table width="868" border="0">
<tr>
  <td width="465">&nbsp;</td>
  <td width="393" align="center"><strong></strong></td>
</tr>
<tr>
  <td width="465">&nbsp;</td>
  <td width="393" align="center"><strong></strong></td>
</tr>
<tr>
  <td width="465">&nbsp;</td>
  <td width="393" align="center"><strong><u class="fontku"><strong style="font-weight:bold"><?php echo $row->namaka;?></strong></u></strong></td>
</tr>
<tr>
  <td width="465">&nbsp;</td>
  <td width="393" align="center" class="fontku"><?php echo $row->status;?></td>
</tr>
<tr>
  <td width="465">&nbsp;</td>
  <td width="393" align="center" class="fontku">NIP : <?php echo $row->nip;?></td>
</tr>
</table>

<br/>
<strong class="fontku">Tembusan Disampaikan Kepada Yth:</strong>
<table width="868" border="0">
<tr>
  <td width="15" style="font-size:10px" class="fontku">1</td>
  <td width="843" style="font-size:10px" class="fontku">Bapak Walikota Bandung</td>
</tr>
<tr>
  <td width="15" style="font-size:10px" class="fontku">2</td>
  <td width="843" style="font-size:10px" class="fontku">Bapak Wakil Walikota Bandung</td>
</tr>
<tr>
  <td width="15" style="font-size:10px" class="fontku">3</td>
  <td width="843" style="font-size:10px" class="fontku">Bapak Sekretaris Kota Bandung</td>
</tr>
<tr>
  <td width="15" style="font-size:10px" class="fontku">4</td>
  <td width="843" style="font-size:10px" class="fontku">Rektor/Ketua/Pimpinan <?php echo $row->kampus;?></td>
</tr>


</table>


<?php }
} ?>


<!-- END Table print -->
<script type="text/javascript" src="<?php echo base_url('admin-assets/js/jquery.printPage.js')?>"></script>


</body>
</html>
