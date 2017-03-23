<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Login - Admin</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/bootstrap.min.css">
    <!-- App CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/target-admin.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/custom.css">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body class="account-bg">

<div class="navbar">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-cogs"></i>
      </button>

      <a class="navbar-brand navbar-brand-image" href="#">
        <img src="<?php echo base_url();?>/admin-assets/img/logo5.png" alt="Site Logo" height="60px">
      </a>

    </div> <!-- /.navbar-header -->

    <div class="navbar-collapse collapse">








      <ul class="nav navbar-nav navbar-right">

        <li>
          <a href="<?php echo base_url('home');?>">
            <i class="fa fa-angle-double-left"></i>
            &nbsp;Back to Homepage
          </a>
        </li>

      </ul>


    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->

<hr class="account-header-divider">

<div class="account-wrapper">


    <div class="account-body">



      <h5 class="account-body-subtitle">Masuk Ke Halaman Admin.</h5>

      <form class="form account-form" method="POST" action="<?= site_url('login/cek_login');?>">

        <div class="form-group">
          <label for="login-username" class="placeholder-hidden">Username</label>
          <input type="text" class="form-control" id="login-username" placeholder="Username" tabindex="1" name="username">

        </div> <!-- /.form-group -->

        <div class="form-group">
          <label for="login-password" class="placeholder-hidden">Password</label>
          <input type="password" class="form-control" id="login-password" placeholder="Password" tabindex="2" name="password">
        </div> <!-- /.form-group -->



        <div class="form-group">
          <button type="submit" class="btn btn-success btn-block btn-lg" tabindex="4">
            masuk &nbsp; <i class="fa fa-play-circle"></i>
          </button>
        </div> <!-- /.form-group -->

      </form>


    </div> <!-- /.account-body -->



  </div> <!-- /.account-wrapper -->





  <script src="<?php echo base_url();?>/admin-assets/js/libs/jquery-1.10.1.min.js"></script>
  <script src="<?php echo base_url();?>/admin-assets/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="<?php echo base_url();?>/admin-assets/js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="./js/libs/excanvas.compiled.js"></script>
  <![endif]-->
  <!-- App JS -->
  <script src="<?php echo base_url();?>/admin-assets/js/target-admin.js"></script>

  <!-- Plugin JS -->
  <script src="<?php echo base_url();?>/admin-assets/js/target-account.js"></script>






</body>
</html>
