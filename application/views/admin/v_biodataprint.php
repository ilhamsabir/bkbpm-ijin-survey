<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Biodata </title>
</head>

<body>
<?php if(isset($cetak_user)){ foreach($cetak_user as $row){ ?>
<table width="470" border="0">
           <tr>
             <td width="172">No KTP</td>
             <td width="288">: <?php echo $row->noktp;?></td>
           </tr>
              <tr>
                <td width="172">Nama</td>
                <td width="288">: <?php echo $row->nama;?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>: <?php echo $row->jeniskelamin;?></td>
              </tr>
              <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>: <?php echo $row->tempatlahir;?> , <?php echo $row->tgllahir;?></td>
              </tr>
               <tr>
                <td>Alamat</td>
                <td>: <?php echo $row->alamat;?></td>
              </tr>
               <tr>
                <td>RT</td>
                <td>: <?php echo $row->rt;?></td>
              </tr>
               <tr>
                <td>RW</td>
                <td>: <?php echo $row->rw;?></td>
              </tr>
               <tr>
                <td>Kelurahan</td>
                <td>: <?php echo $row->kelurahan;?></td>
              </tr>
               <tr>
                <td>Kecamatan</td>
                <td>: <?php echo $row->kecamatan;?></td>
              </tr>
              <tr>
                <td>Kota/Kabupaten</td>
                <td>: <?php echo $row->kota;?></td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>: <?php echo $row->agama;?></td>
              </tr>
              <tr>
                <td>Pekerjaan</td>
                <td>: <?php echo $row->pekerjaan;?></td>
              </tr>
              <tr>
                <td>Status Perkawinan</td>
                <td>: <?php echo $row->status;?></td>
              </tr>
              <tr>
                <td>No HP</td>
                <td>: <?php echo $row->nohp;?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td>: <?php echo $row->email;?></td>
              </tr>

            </table>


<?php }
} ?>

<!-- END Table print -->
<script type="text/javascript" src="<?php echo base_url('admin-assets/js/jquery.printPage.js')?>"></script>
</body>
</html>
