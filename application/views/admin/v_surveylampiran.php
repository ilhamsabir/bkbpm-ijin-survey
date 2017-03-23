<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/font-css.css"></head>
<body id="tableID">
  <table width="861" border="0">
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
<?php if(isset($dt_survey)){ foreach($dt_survey as $row){ ?>
<br/>
<table width="862" border="0">
  <tr>
   <td width="625" height="21" class="fontku">&nbsp;</td>
   <td width="183" class="fontku">Lampiran</td>
   <td width="340" class="fontku">: Izin Penelitian/Survey/Praktek Kerja </td>
 </tr>
  <tr>
    <td width="625" class="fontku">&nbsp;</td>
    <td width="183" class="fontku">Nomor</td>
    <td width="340" class="fontku">: 070/<?php echo $row->nmsurat;?>-OL/BKBPM</td>
  </tr>
   <tr>
    <td width="625" class="fontku">&nbsp;</td>
    <td width="183" class="fontku">Tanggal</td>
    <td width="340" class="fontku">: <?php date_default_timezone_set("Asia/Jakarta"); echo date('j F Y');?></td>
  </tr>

</table>
<br/>
<br/>
<table width="861" border="0">
  <tr>
    <td width="521">Kepada Yth. </td>
    <td width="330" class="fontku">&nbsp;</td>
  </tr>
    <tr>
    <td width="521"><strong>Bapak/Ibu/Sdr : </strong></td>
    <td width="330" class="fontku">&nbsp;&nbsp; &nbsp; &nbsp;</td>
  </tr>
</table>
<br/>
<table width="864" border="0">
  <tr>
    <td width="30" class="fontku">1.</td>
    <td width="824" class="fontku"><?php echo $row->lokasi1;?></td>
  </tr>
  <?php if($row->lokasi2 >= '1'){ ?>
  <tr>
    <td width="30">2.</td>
    <td width="824" class="fontku"><?php echo $row->lokasi2;?></td>
  </tr>
  <?php }else{
  } ?>
</table>
<table width="865" border="0">
 <?php if($row->lokasi3 >= '1'){ ?>
  <tr>
    <td width="30">3.</td>
    <td width="824" class="fontku"><?php echo $row->lokasi3;?></td>
  </tr>
  <?php }else{
  } ?>
</table>
<table width="866" border="0">
<?php if($row->lokasi4 >= '1'){ ?>
  <tr>
    <td width="30">4.</td>
    <td width="826" class="fontku"><?php echo $row->lokasi3;?></td>
  </tr>
  <?php }else{
  } ?>
</table>
<table width="866" border="0">
 <?php if($row->lokasi5 >= '1'){ ?>
  <tr>
    <td width="30">5.</td>
    <td width="826" class="fontku"><?php echo $row->lokasi5;?></td>
  </tr>
  <?php }else{
  } ?>
</table>

<table width="866" border="0">
 <?php if($row->lokasi6 >= '1'){ ?>
  <tr>
    <td width="30">6.</td>
    <td width="826" class="fontku"><?php echo $row->lokasi6;?></td>
  </tr>
  <?php }else{
  } ?>
</table>

<table width="866" border="0">
  <?php if($row->lokasi7 >= '1'){ ?>
   <tr>
     <td width="30">7.</td>
     <td width="826" class="fontku"><?php echo $row->lokasi7;?></td>
   </tr>
   <?php }else{
   } ?>
</table>
<table width="866" border="0">
  <?php if($row->lokasi8 >= '1'){ ?>
   <tr>
     <td width="30">8.</td>
     <td width="826" class="fontku"><?php echo $row->lokasi8;?></td>
   </tr>
   <?php }else{
   } ?>
</table>
<table width="866" border="0">
  <?php if($row->lokasi9 >= '1'){ ?>
   <tr>
     <td width="30">9.</td>
     <td width="826" class="fontku"><?php echo $row->lokasi9;?></td>
   </tr>
   <?php }else{
   } ?>
</table>
<table width="866" border="0">
  <?php if($row->lokasi10 >= '1'){ ?>
   <tr>
     <td width="30">10.</td>
     <td width="826" class="fontku"><?php echo $row->lokasi10;?></td>
   </tr>
   <?php }else{
   } ?>
</table>

<?php }
} ?>
<script type="text/javascript" src="<?php echo base_url('admin-assets/js/jquery.printPage.js')?>"></script>
</body>
</html>
