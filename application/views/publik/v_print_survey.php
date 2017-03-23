<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body>

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
<br/>
<?php if(isset($dt_survey)){ foreach($dt_survey as $row){ ?>
<table width="861" border="0">
  <tr>
    <td width="679"><h1>#<?php echo $row->kd_ijin;?></h1></td>
    <td width="172">&nbsp;</td>
  </tr>

</table>
<table width="862" border="0">
  <tr>
    <td width="288">Tanggal <?php date_default_timezone_set("Asia/Jakarta"); echo date("d/m/Y ");?></td>
    <td width="222">&nbsp;</td>
    <td width="338">&nbsp;</td>
  </tr>
   <tr>
    <td width="288">&nbsp;</td>
    <td width="222">&nbsp;</td>
    <td width="338">&nbsp;</td>
  </tr>

</table>

<table width="866" border="0">
  <tr>
    <td width="30">&nbsp;</td>
    <td width="221">Nama </td>
    <td width="601">: <?php echo $row->nama;?> </td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="221">Alamat</td>
    <td width="601">: <?php echo $row->alamat;?> </td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="221">Jenis Perizinan </td>
    <?php if($row->jenisijin == 'survey'){?>
    <td width="601">: <strong>Survey</strong> </td>
    <?php }elseif ($row->jenisijin == 'penelitian'){?>
      <td width="601">: <strong>Penelitian</strong> </td>
    <?php }else{?>
      <td width="601">: <strong>Praktek Kerja Lapangan</strong></td>
    <?php } ?>

  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="221">Tujuan/Lokasi </td>
    <td width="601">: <?php echo $row->lokasi1;?> </td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="221">Kelengkapan Dokumen </td>
    <td width="601">: Lengkap </td>
  </tr>
</table>
<p></p>
<br/>
<br/>
<p><strong style="font-size:10px">Catatan:</strong></p>
<table width="868" border="0">
  <tr>
    <td width="15">&nbsp;</td>
    <td width="843" style="font-size:10px">Permohonan anda telah kami terima. Untuk pengambilan          dokumen persetujuan Perizinan dapat di ambil di :</td>
  </tr>
  <tr>
    <td width="15">&nbsp;</td>
    <td width="843" style="font-size:10px">Jl. Wastukencana No. 2 Bandung, Jawa Barat 40117, Indonesia, Pada Jam Dan Hari Kerja</td>
  </tr>
  <tr>
    <td width="15">&nbsp;</td>
    <td width="843" style="font-size:10px">Tlp. 022-4230097</td>
  </tr>
  <tr>
    <td width="15" style="font-size:10px">&nbsp;</td>
    <td width="843">sekretariat@bkbpm.bandung.go.id</td>
  </tr>
  <tr>
    <td width="15">&nbsp;</td>
    <td width="843" style="font-size:10px">www.bkbpm.bandung.go.id</td>
  </tr>
    <tr>
    <td width="15">&nbsp;</td>
    <td width="843" style="font-size:10px">Terimah Kasih</td>
  </tr>
</table>
<?php }
} ?>
<script type="text/javascript" src="<?php echo base_url('admin-assets/js/jquery.printPage.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".btnPrint").printPage();
    })
</script>
</body>
</html>
