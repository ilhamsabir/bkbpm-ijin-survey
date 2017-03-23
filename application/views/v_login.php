<!-- Page Content -->
<div class="container">
    <div class="row">
			<div class="col-md-12">
        <div class="panel panel-info" >
					 <div class="panel-heading">
							 <h3><i class="fa fa-lock"></i> Login Disini !!!</h3>
					 </div>
							<div class="panel-body">
								<?php echo $this->session->flashdata('pesan');?>
								<div id="loginbox" style="margin-top:20px;" class="mainbox col-md-4 col-md-offset-4">
								 <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
									 <form id="loginform" action="<?php echo site_url('home/cek_login')?>" method="post" class="form-horizontal" role="form">
										 <div style="margin-bottom: 25px" class="input-group">
												 <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
												 <input id="login-username" type="email" class="form-control" name="email" placeholder="email">
										 </div>
										 <div style="margin-bottom: 25px" class="input-group">
												 <span class="input-group-addon"><i class="fa fa-key"></i></span>
												 <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
										 </div>
										 <div style="margin-top:10px" class="form-group">
												 <!-- Button -->
												 <div class="col-sm-12 controls">
													 <button id="btn-login" type="submit" class="btn btn-success">Login  </button>
				                   <a href="<?php echo site_url('home/lupa_pass');?>">Lupa Password</a>
												 </div>
										 </div>
										 <div class="form-group">
												 <div class="col-md-12 control">
														 <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
																 Belum Punya Akun ,
														 <a href="daftar.html">
																 Daftar Disini
														 </a>
														 </div>
												 </div>
										 </div>
								</form>
						 </div>
		 </div>
	 </div>
 </div>
</div>
</hr>
