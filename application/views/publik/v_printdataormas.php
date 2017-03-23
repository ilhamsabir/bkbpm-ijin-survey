<div class="container">

  <div class="content" style="min-height:460px">

    <div class="content-container">



      <div>
        <h4 class="heading-inline">Selamat Datang , <?php echo $this->session->userdata('NAME');?>
        &nbsp;&nbsp;<small><?php date_default_timezone_set("Asia/Jakarta"); echo date(" h:i:s d/m/Y ");?></small>
        &nbsp;&nbsp;</h4>


      </div>



      <br>



      <div class="row">

        <div class="col-md-12">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-info-circle"></i>
                Cetak Data Permohonan
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">



             <?php if(isset($dt_ormas)){ foreach($dt_ormas as $row){ ?>


             <div class="col-md-12">


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
        <p>Jl. Wastukencana No. 2 Bandung, Jawa Barat 40117, Indonesia, Pada Jam Dan Hari Kerja</p>
        <p>Tlp. 022-4230097</p>
        <p>sekretariat@bkbpm.bandung.go.id</p>
        <p>www.bkbpm.bandung.go.id</p>
        <p>Terimah Kasih</p>
      </div>

      <a href="<?php echo site_url('publikdataormas')?>" class="btn btn-secondary btn-sm">
                 <i class="fa fa-left"></i> Kembali
             </a>

      <a href="<?php echo site_url('publikdataormas/cetak_ormas/'.$row->kd_ijin1)?>" class="btn btn-primary btn-sm btnPrint" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Cetak Data Penjualan">

        <i class="fa fa-print"></i> cetak</a>

          <?php }
        } ?>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->


      </div> <!-- /.row -->

    </div> <!-- /.content-container -->

  </div> <!-- /.content -->

</div> <!-- /.container -->
