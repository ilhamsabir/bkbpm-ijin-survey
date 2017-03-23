<html>
<head>
  <title>Inovice ORMAS-LSM</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/target-admin.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/custom.css">
</head>

<body>
<div>
<?php if(isset($dt_ormas)){ foreach($dt_ormas as $row){ ?>


<div class="col-md-12" id="tableID">

   <div class="form-group">
   <label class="col-sm-12"><h2><strong style="font-weight:800;font-family:Open Sans">#No. Resi : <?php echo $row->kd_ijin1; ?></strong></h2>
     <small>Tanggal : <?php date_default_timezone_set("Asia/Jakarta"); echo date("d/m/Y ");?></small>

   </label>
   <br/>
   <br/>
   <br/>
  </div>

<div class="panel panel-default">
<div class="panel-body">

<div class="form-group">
<label class="col-sm-4"><strong style="font-weight:800">Nama Lengkap</strong></label>
<label class="col-sm-8"><strong style="font-weight:800">: <?php echo $row->nama; ?></strong></label>
</div>

<div class="form-group">
<label class="col-sm-4"><strong style="font-weight:800">Alamat</strong></label>
<label class="col-sm-8"><strong style="font-weight:800">: <?php echo $row->alamat; ?></strong></label>
</div>

<div class="form-group">
<label class="col-sm-4"><strong style="font-weight:800">Jenis Perijinan</strong></label>
<label class="col-sm-8"><strong style="font-weight:800">: <?php echo $row->jenisijin; ?></strong></label>
</div>




<div class="form-group">
<label class="col-sm-4"><strong style="font-weight:800">Kelengkapan Dokumen</strong></label>
<label class="col-sm-8"><strong style="font-weight:800">: Lengkap</strong></label>
</div>

</div><!-- BODY PANEL -->
</div><!-- PANEWL-->

<div class="alert alert-success" role="alert">
<h4>Catatan:</h4>
<p style="text-align:justify">Permohonan anda telah kami terima. Untuk pengambilan
dokumen persetujuan Perizinan dapat di ambil di :</p>
<p>Jl. Wastukencana No. 2 Bandung, Jawa Barat 40117, Indonesia,, Pada Jam Dan Hari Kerja</p>
<p>Tlp. 022-4230097</p>
<p>sekretariat@bkbpm.bandung.go.id</p>
<p>www.bkbpm.bandung.go.id</p>
<p>Terimah Kasih</p>
</div>

<?php }
} ?>
</div>
<script type="text/javascript" src="<?php echo base_url('admin-assets/js/jquery.printPage.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".btnPrint").printPage();
    })
</script>
</body>
</html>
