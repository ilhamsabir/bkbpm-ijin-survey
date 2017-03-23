
	
		<!--Screens-->
	<div style="background:#7e2b58;height:600px">
		<div class="dot-screens">
			<a class="icon-check1" href="#screens" style="margin-top:20px"> </a>

		</div>
		

			
		<div class="container">
	     <div class="row">	
	      <div class="col-md-6 col-md-offset-3">
			   <div class="panel panel-warning" style="border-color:#2588b6;border-radius:0;margin-top:200px">
            <div class="panel-heading" style="background-color:#2588b6;color:#fff;border-radius:0">
               <p style="text-align:justify;color:#eee"><i class="icon icon-user"></i> Lupa Password ??</p>
             
            </div>
            <div class="panel-body">	
 			 
 			  	
 			  	
 			
 			  	<?php echo $this->session->flashdata('pesan');?>

		
			
				       <form action="<?= site_url('home/kirim_pass')?>" method="post" class="form-horizontal">
					        <input type="email" class="form-control" name="email" placeholder="Email"/>
				          <br/>
				          <div class="alert alert-danger" role="alert">
											<button data-dismiss="alert" class="close" type="button"></button>
											<strong>Perhatian !</strong> <br>- Pastikan email anda benar
<br>- Kode verifikasi akan dikirim ke email anda.
<br>- Silahkan klik link untuk memperbaharui password anda.
										</div>
				       </div>
				       <div class="panel-footer"> 
					      <button type="submit" class="btn btn-primary btn-sm" value="Login">Kirim Verifikasi</button>
					      <a class="btn btn-danger btn-sm" href="<?php echo site_url();?>">Kembali</a>
					      </div>
				       </form>
			
				
				</div>
				</div>
				</div>

			</div><!-- Container /-->

			
	</div><!--end #screens>

	<!- -End Screens-->
	</div>