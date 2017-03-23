
	
		<!--Screens-->
	<div id="" style="background:#7e2b58;height:600px">
	
		

			
		<div class="container">
	     
	     <div class="row">	
	      <div class="col-md-4 col-md-offset-4">
			   <div class="panel panel-warning" style="border-color:#f2cb00;border-radius:0;margin-top:200px">
                <div class="panel-heading" style="background-color:#f2cb00;color:#fff;border-radius:0">
                Silahkan Ganti Password Anda Dengan Benar </div>
                <div class="panel-body">	


 			  	<?php echo $this->session->flashdata('pesan');?>

			
				 <?php
                        if (isset($ambil_pass)){
                           foreach($ambil_pass as $row){
                         ?>

                     

				
				  <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo site_url('home/ganti_pass')?>" enctype="multipart/form-data">
					     <input type="hidden" class="form-control" name="kd_user" value="<?php echo $row->kd_user;?>" />
				  		
                        <div class="form-group">
                            <label class="col-lg-4 control-label">Username</label>
                            <div class="col-lg-8">
                                <input type="hidden" class="form-control" name="email"  value="<?php echo $row->email;?>" readonly/>
                                <input type="text" class="form-control" name="username"  value="<?php echo $row->username?>" readonly/>
                            </div>
                        </div>

				         <div class="form-group">
                            <label class="col-lg-4 control-label">Password</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" name="password" />
                            </div>
                        </div>

                          <div class="form-group">
                            <label class="col-lg-4 control-label">Retype password</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" name="confirmPassword" />
                            </div>
                          </div>
                        
                        <div class="panel-footer">
					      <button type="submit" class="btn btn-success btn-sm" value="Login">submit</button>
					    </div>

				  </form>
				  <?php }
				  } ?>
			
          			</div><!-- BODY -->
				
				</div>
				</div>
			</div>
		

		</div>	
	</div><!--end #screens>

