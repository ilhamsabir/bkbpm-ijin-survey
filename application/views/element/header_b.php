<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title><?php echo $title;?></title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700"> -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>admin-assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url();?>admin-assets/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>admin-assets/css/bootstrap.min.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin-assets/js/plugins/morris/morris.css">
  <link rel="stylesheet" href="<?php echo base_url();?>admin-assets/js/plugins/icheck/skins/minimal/blue.css">
  <link rel="stylesheet" href="<?php echo base_url();?>admin-assets/js/plugins/select2/select2.css">
  <link rel="stylesheet" href="<?php echo base_url();?>admin-assets/js/plugins/fullcalendar/fullcalendar.css">
  <link rel="stylesheet" href="<?php echo base_url();?>admin-assets//js/plugins/datepicker/datepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin-assets/css/target-admin.css">
  <link rel="stylesheet" href="<?php echo base_url();?>admin-assets/css/custom.css">

  <link rel="stylesheet" href="<?php echo base_url();?>admin-assets/css/font-css.css">

    <link rel="stylesheet" href="<?php echo base_url();?>admin-assets/js/plugins/fileupload/bootstrap-fileupload.css">


   <link rel="stylesheet" href="<?php echo base_url();?>assets/validator/dist/css/bootstrapValidator.css"/>
   <link rel="stylesheet" href="<?php echo base_url();?>assets/js/plugins/timepicker/bootstrap-timepicker.css">


    <script type="text/javascript" src="<?php echo base_url();?>assets/validator/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/validator/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/validator/dist/js/bootstrapValidator.js"></script>

    <link href="<?php echo base_url();?>admin-assets/smart/styles/smart_wizard.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="<?php echo base_url('admin-assets/css/chosen.css')?>"/>
     <script type="text/javascript" src="<?php echo base_url('admin-assets/js/chosen.jquery.js');?>"></script>

     <script type="text/javascript">
         $(function(){
             $('.chzn-select').chosen();
             $('.chzn-select-deselect').chosen({allow_single_deselect:true});
         });

     </script>

  <style type="text/css">

.panel-info > .panel-heading{


  color: #fff;
background-color: #1995d4;
border-color: #00bde4;

}

  .stepNumber{

    position: relative;
    display: block;
    float: left;
    text-align: left;
    padding: 1px 0 0 5px;
    font: bold 62px Verdana, Arial, Helvetica, sans-serif;
    text-shadow: 3px 3px 3px #dadada;
  }

  .stepDesc{

    position: relative;
    display: block;
    float: right;
    text-align: left;
    margin-top: 10px ;
    margin-right: 40px;
    font: bold 16px Verdana, Arial, Helvetica, sans-serif;
}


    .stepwizard-step p {
    margin-top: 10px;
}


.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 19px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #df2e1b;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 273px;
  height: 80px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 4;
  border-radius: 0px;
  margin-right: 10px;
  box-shadow: 5px 5px 8px #888;
  /*background:  #EA8511; */
}
.skt-font{
  color:#323232;
  line-height: bold;
  font-size:16px;
  font-family: Open Sans;

}

.table-hover>tbody>tr:hover>td, .table-hover>tbody>tr:hover>th {
  background-color: #515348;
  color:#fff;
}

.fontajah{
  font-family: 'Bookman Old Style';
}

  </style>
</head>

<body>

  <div class="navbar">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-cogs"></i>
      </button>

      <a class="navbar-brand navbar-brand-image" href="<?php echo site_url('publikhome');?>">
        <img src="<?php echo base_url();?>/admin-assets/img/logo5.png" alt="Site Logo" height="60px">
      </a>

    </div> <!-- /.navbar-header -->

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav noticebar navbar-left">
      </ul>
      <ul class="nav navbar-nav navbar-right" style="color:#fff">
        <li class="dropdown">
            <ul class="dropdown-menu noticebar-menu" role="menu">
              <li class="nav-header">
                <div class="pull-left">
                  Notifications
                </div>

                <div class="pull-right">
                  <a href="javascript:;">Mark as Read</a>
                </div>
              </li>

              <li>
                <a href="" class="noticebar-item">
                  <span class="noticebar-item-image">
                    <i class="fa fa-cloud-upload text-success"></i>
                  </span>
                  <span class="noticebar-item-body">
                    <strong class="noticebar-item-title">Templates Synced</strong>
                    <span class="noticebar-item-text">20 Templates have been synced to the Mashon Demo instance.</span>
                    <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 12 minutes ago</span>
                  </span>
                </a>
              </li>

              <li>
                <a href="./page-notifications.html" class="noticebar-item">
                  <span class="noticebar-item-image">
                    <i class="fa fa-ban text-danger"></i>
                  </span>
                  <span class="noticebar-item-body">
                    <strong class="noticebar-item-title">Sync Error</strong>
                    <span class="noticebar-item-text">5 Designs have been failed to be synced to the Mashon Demo instance.</span>
                    <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 minutes ago</span>
                  </span>
                </a>
              </li>

              <li class="noticebar-menu-view-all">
                <a href="./page-notifications.html">View All Notifications</a>
              </li>
            </ul>
        </li>

        <li>
          <a href="<?php echo site_url('adminprofile');?>"><i class="fa fa-user"></i> Edit Profile</a>
        </li>


         <li>
          <a href="<?php echo site_url('home/logout')?>"><i class="fa fa-sign-out"></i> Keluar</a>
        </li>
      </ul>







    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->
