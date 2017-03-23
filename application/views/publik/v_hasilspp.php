<div class="container">

  <div class="content" style="min-height:460px">

    <div class="content-container">

      

      <div>
        <h4 class="heading-inline">Hi. <?php echo $this->session->userdata('NAME');?>
        &nbsp;&nbsp;<small><?php date_default_timezone_set("Asia/Jakarta"); echo date(" h:i:s d/m/Y ");?></small>
        &nbsp;&nbsp;</h4>

    
      </div>



      <br>



      <div class="row">
<hr/>

 <div class="panbel panel-primary" style="border-radius:0"> 

     <div class="panel-heading" style="border-radius:0"><a href="<?php echo site_url('publikmonitoring');?>" class="btn btn-danger btn-xs">Kembali!</a></small>
          </div>   
      <div class="panel-body" style="border:2px solid #eee;background-color:#fff"> 
       

          <?php foreach($monitor_spp as $row){  ?>
              <div class="form-group">
                <label class="col-md-4 control-label">No. Resi</label>
                <label class="col-md-8 control-label">: <?php echo $row->kd_ijin;?></label>
              </div>

               <div class="form-group">
                <label class="col-md-4 control-label">Jenis Izin</label>
                <label class="col-md-8 control-label">: <?php echo $row->jenisijin;?></label>
              </div>

               <div class="form-group">
                <label class="col-md-4 control-label">Waktu Pengajuan </label>
                <label class="col-md-8 control-label">: <?php echo $row->tglajuan;?></label>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">Status Berkas </label>
                <?php if( $row->verifikasi == '0'){?>
                <label class="col-md-8 control-label">: <span class="label label-warning">Pemeriksaan Dokumen</span></label>
                <?php }else {?>
                <label class="col-md-8 control-label">: <span class="label label-success">Permohonan Sukses Verfifikasi</span></label>

                <?php }?>
              </div>


          <?php } ?>
            <hr/>


      </div>


      </div>
   

   


      </div> <!-- /.row -->

    </div> <!-- /.content-container -->
      
  </div> <!-- /.content -->

</div> <!-- /.container -->










