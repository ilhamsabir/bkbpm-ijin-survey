<div class="main-container ace-save-state container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state sidebar-fixed">


				<div class="sidebar-shortcuts" id="sidebar-shortcuts">


					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">

					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="<?php if(isset($active_home)){echo $active_home ;}?>">
						<a href="<?php echo site_url('publikhome');?>">
								<img src="<?php echo base_url();?>assets-app/images/science.png" class="gbr-tengah"/>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
          <li class="<?php if(isset($active_spp)){echo $active_spp ;}?>">
						<a href="<?php echo site_url('publikpermohonanspp');?>">
								<img src="<?php echo base_url();?>assets-app/images/test.png" class="gbr-tengah"/>
							<span class="menu-text"> Form Pengajuan </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="<?php if(isset($active_datasurvey)){echo $active_datasurvey ;}?>">
						<a href="<?php echo site_url('publikdatasurvey');?>">
								<img src="<?php echo base_url();?>assets-app/images/book-5.png" class="gbr-tengah"/>
							<span class="menu-text"> 	Data Survey/PKL/Penelitian </span>

							<?php if (isset($notifsukses_survey)){
									 foreach ($notifsukses_survey as $row) {
									 $jsurvey=$row->jmlSurveySukses;
 									   	if($jsurvey >= '1') {
							?>

										<span class="label label-danger" style="font-size:10px"><?php echo $jsurvey;?></span>
							<?php
					        }
								}
							}
							?>

						</a>

						<b class="arrow"></b>
					</li>

					<li class="<?php if(isset($active_pesan)){echo $active_pesan ;}?>">
						<a href="<?php echo site_url('publikdatapesan');?>">
								<img src="<?php echo base_url();?>assets-app/images/chat.png" class="gbr-tengah"/>
							<span class="menu-text"> 	Pesan </span>
							<?php if (isset($notifgagal)){
									 foreach ($notifgagal as $row) {
									 $jpesan=$row->jmlpesan;
 									   	if($jpesan >= '1') {
							?>
										<span class="label label-danger" style="font-size:10px"><?php echo $jpesan;?></span>
							<?php
					        }
								}
							}
							?>
						</a>

						<b class="arrow"></b>
					</li>

					<!-- Pengaduan -->
					<li class="<?php if(isset($active_pengaduan)){echo $active_pengaduan ;}?>">
						<a href="<?php echo site_url('publikpengaduan');?>">
							<img src="<?php echo base_url();?>assets-app/images/megaphone.png" class="gbr-tengah"/>
							<span class="menu-text">
								 Pengaduan
							 </span>

							
						</a>
						<b class="arrow"></b>
					</li>

					<li class="<?php if(isset($active_kepuasan)){echo $active_kepuasan ;}?>">
						<a href="<?php echo site_url('publikkepuasan');?>">
							<img src="<?php echo base_url();?>assets-app/images/loss.png" class="gbr-tengah"/>
							<span class="menu-text">
								 Index Kepuasan
							 </span>
						</a>
						<b class="arrow"></b>
					</li>




				</ul><!-- /.nav-list -->
			</div>
<!-- nav publik -->
