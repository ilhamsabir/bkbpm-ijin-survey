<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>BKBPM - <?php echo $title;?></title>

		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="shortcut icon" href="assets-app/images/fav.png">
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets-app/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets-app/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets-app/css/fonts.googleapis.com.css" />
  	<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets-app/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets-app/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets-app/css/ace-rtl.min.css" />
		<link href="<?php echo base_url();?>assets-app/css/jquery-ui.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/validator/dist/css/bootstrapValidator.css"/>
		<link href="<?php echo base_url();?>admin-assets/smart/styles/smart_wizard.css" rel="stylesheet" type="text/css">
		<style media="screen">
		.iradio_minimal-blue {
			opacity: 1;
		}
		</style>
		<link href="<?php echo base_url();?>assets-app/form-wiz.css" rel="stylesheet">
		<!-- <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/target-admin.css"> -->
<!-- <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/custom.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets-app/custom.css">
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default navbar-collapse h-navbar ace-save-state navbar-fixed-top">
			<div class="navbar-container ace-save-state container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="" class="navbar-brand">
            <img src="<?php echo base_url();?>assets-app/images/fav.png" width="26"/>

					</a>
          <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
						<span class="sr-only">Toggle user menu</span>

						<img src="<?php echo base_url()?>assets-app/images/avatars/avatar2.jpg" alt="Jason's Photo" />
					</button>


				</div>

				<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
					<ul class="nav ace-nav">

						<li class="transparent dropdown-modal user-min">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url();?>assets-app/images/avatars/avatar2.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									 <?php echo $this->session->userdata('NAME');?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">


								<li>
									<a href="<?php echo site_url('home/logout')?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

        <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="" class="dropdown-toggle" style="font-size:18px;font-weight:bold">
								Perijinan BKBPM Bandung
							</a>
						</li>
					</ul>


				</nav>


			</div><!-- /.navbar-container -->
		</div>
