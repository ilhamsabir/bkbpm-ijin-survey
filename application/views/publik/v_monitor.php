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


    <div class="col-md-6">     
     <div class="panbel panel-warning" style="border-radius:0%;">
       <div class="panel-heading" style="border-radius:0%;color: #fff;background-color: #d49d00;">Monitoring Berkas Survey/Penelitian/PKL</div>
      <div class="panel-body" style="border:2px solid #eee;background-color:#fff"> 
         <form action="<?= site_url('publikmonitoring/carispp');?>" method="post" class="form-horizontal">

         <div class="form-group">               
                  <div class="col-lg-8">
                  <input type="text" class="form-control" name="resi" />
                  </div>
                  <div class="col-lg-4">
                   <button style="submit" class="btn btn-warning btn-md">cari</button>
                  </div>
               </div>         
      </form> 
      </div>
      </div>

      </div><!-- SPP -->








    <div class="col-md-6">
          <div class="panbel panel-warning" style="border-radius:0%">
       <div class="panel-heading" style="border-radius:0%;color: #fff;background-color: #d49d00;">Monitoring Berkas ORMAS / LSM</div>
      <div class="panel-body" style="border:2px solid #eee;background-color:#fff"> 
         <form action="<?= site_url('publikmonitoring/cariormas');?>" method="post" class="form-horizontal">

         <div class="form-group">               
                  <div class="col-lg-8">
                  <input type="text" class="form-control" name="resi1" />
                  </div>
                  <div class="col-lg-4">
                   <button style="submit" class="btn btn-warning btn-md">cari</button>
                  </div>
               </div>         
      </form> 
      </div>
      </div>
      </div><!-- ORMAS -->



   


      </div> <!-- /.row -->

    </div> <!-- /.content-container -->
      
  </div> <!-- /.content -->

</div> <!-- /.container -->
