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

  <div class="col-md-6 col-md-offset-3">
     
     <div class="panbel panel-primary">
     
      <div class="panel-body" style="border:2px solid #eee;background-color:#fff"> 
       <div class="alert alert-danger" role="alert">

         <div class="form-group">               
                  <p>No Resi Tidak Terdaftar di Sistem Kami</p>
                  <p>Pastikan No Resi Anda Benar</p>
                  <p><a href="<?php echo site_url('publikmonitoring');?>" class="btn btn-primary btn-lg">Kembali</a></p>
               </div>         
         </div>
      </div>
      </div>

      </div><!-- SPP -->

   


      </div> <!-- /.row -->

    </div> <!-- /.content-container -->
      
  </div> <!-- /.content -->

</div> <!-- /.container -->










