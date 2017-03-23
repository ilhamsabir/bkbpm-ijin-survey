<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <title><?php echo $title;?></title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/bootstrap.min.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/plugins/morris/morris.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/plugins/icheck/skins/minimal/blue.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/plugins/select2/select2.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/plugins/fullcalendar/fullcalendar.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/target-admin.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/plugins/fileupload/bootstrap-fileupload.css">


   <link rel="stylesheet" href="<?php echo base_url();?>/assets/validator/dist/css/bootstrapValidator.css"/>
   <link rel="stylesheet" href="<?php echo base_url();?>/assets/js/plugins/timepicker/bootstrap-timepicker.css">
   

    <script type="text/javascript" src="<?php echo base_url();?>/assets/validator/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/validator/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/validator/dist/js/bootstrapValidator.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script> -->
<script langauge="javascript">
   function pilih(row){
//        mendapatkan nama kota
        var fotokantor=row.cells[0].innerHTML;
//        memasukkan nama kota dalam form
        window.opener.parent.document.getElementById("fotokantor").value = fotokantor;
//        menutup pop up
        window.close();
    }

</script>

<style type="text/css">
  .tb-klik{
    
    cursor: pointer;
  }
</style>


<body>

  <div class="col-xs-4">
  <?php echo  $this->session->set_flashdata("pesan");?>
      <div class="panel panel-success" style="margin-top:20px;">
           
                <div class="panel-heading">
                Upload File </div>
                <div class="panel-body">

         <form method="post" class="form-horizontal" action="<?php echo site_url('publikdokumenkantor/add')?>" enctype="multipart/form-data">     
            <input type="hidden" name="kd_fileorg" value="<?php echo $kd_fileorg;?>"/>
            <input type="hidden" name="kd_user" value="<?php echo $this->session->userdata('ID');?>"/>
            <input type="hidden" name="kategori" value="ikantor" />
             <div class="form-group">
                    
                    <div class="col-sm-8">
                 
                      <input type="file" name="filefoto" required>
                    </div>
                  </div>  
              <p> <small>Gambar Max 2MB (jpg,png,gif)</small></p>  
              <br/>
              <div class="form-group">
              <div class="col-sm-8">
                      <label class="control-label" style="text-align:right">Ket Gambar</label>
                      <textarea type="text" name="ket" readonly>Foto kantor / sekrertariat tampak depan  </textarea>
                    </div>
              </div>
            
            <hr/>
              
           

                 </div><!-- body panel -->
                 <div class="modal-footer">
                     <button class="btn btn-success" type="submit" >Upload</button>
                     <a href="#" onclick="window.close()" class="btn btn-primary">Tutup</a>
                  </div>
                  </form> 
            </div>

     

                 
    </div> <!-- /.col -->

     <div class="col-xs-8">
      <div class="panel panel-success" style="margin-top:20px;background:#eee">
           
                <div class="panel-heading">
                Data Foto Kantor /Sekretariat Organisasi </div>
                <div class="panel-body">

                 <table class="table table-striped table-bordered responsive table-primary mb30">
                      <thead>
                        <tr>
                        
                          <th style="font-size:12px">Nama File</th>
                          <th style="font-size:12px">Keterangan</th>
                  
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                                            $no=$offset;

                                            foreach($ambil_imgkantor as $row){
                                        ?>


                                         <tr onclick="javascript:pilih(this);">
                                            
                                            <td style="width:100px;font-size:12px" class="tb-klik"><?php echo $row->foto; ?></td> 
                                            <td style="width:100px;font-size:12px"><?php echo $row->ket; ?></td>                                                       
       
                                            <td style="width:90px">
                                                <a class="btn btn-info btn-xs"><i class="fa fa-clone"></i> Pilih</a>
                                                <a class="btn btn-danger btn-xs" href="<?php echo site_url('publikdokumenol/hapus_data/'.$row->kd_fileorg);?>"
                                                    onclick="return confirm('Anda yakin?')"> <i class="fa fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>

                                 
 


                                         <?php
                                        }
                                        ?>





                                        </tbody>
                                       </table>

                                       <?php echo $halaman ;?>

                 </div><!-- body panel -->
            </div>

     

                 
    </div> <!-- /.col -->

    <div class="col-xs-8 col-xs-offset-7">
    
    </div>

<script src="<?php echo base_url();?>/admin-assets//js/plugins/fileupload/bootstrap-fileupload.js"></script>

  <script src="<?php echo base_url();?>/admin-assets/js/libs/jquery-1.10.1.min.js"></script>
  <script src="<?php echo base_url();?>/admin-assets/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="<?php echo base_url();?>/admin-assets/js/libs/bootstrap.min.js"></script>
   <!-- App JS -->
  <script src="<?php echo base_url();?>/admin-assets/js/target-admin.js"></script>
</body>
</html>