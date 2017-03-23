<div class="main-content">
  <div class="main-content-inner">
    <div class="page-content">
      <div class="page-header">
        <h1>
          BKBPM Ijin
          <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Layanan Ijin Survey / PKL / Penelitian
          </small>
        </h1>
      </div><!-- /.page-header -->

<div class="row">
  
   	<!-- PAGE CONTENT BEGINS -->
 <?php echo $this->session->flashdata('pesan');?>
    <div class="col-md-12">

    <h3>Penyampaian Keluhan</h3>

     <div class="panel panel-danger" style="border-radius:0%;">
       <div class="panel-heading" style="border-radius:0%;color: #fff;background-color: #cf2522;border:1px solid #cf2522">
      Data Pengaduan
       </div>
      <div class="panel-body" style="border:1px solid #cf2522;background-color:#fff">


   <table class="table table-bordered table-highlight">
 <thead>
   <tr>
     <th>No</th>
     <th>id</th>
     <th>Nama</th>
     <th>No HP</th>
     <th>Email</th>
     <th>Tanggal Pengaduan</th>
     <th>Isi</th>
     <th>Status</th>
     <th></th>
   </tr>
 </thead>
 <tbody>
     <?php   $no=$offset; foreach($ambil_aduan as $row){ ?>
   <tr>

     <td><?php echo ++$no;?></td>
    <td><?php echo $row->kd_aduan;?></td>
     <td><?php echo $row->nama; ?></td>
     <td><?php echo $row->nohp; ?></td>
     <td><?php echo $row->email; ?></td>
     <td><?php echo $row->tgladuan; ?></td>
       <td style="font-size: 12px;"><?php $isi=$row->pesan; $isi=character_limiter($isi,100);?><?php echo $isi; ?></td>
     <?php if($row->status == null){;?>
     <td>
       <span class="label label-primary">Belum</span>
     </td>
     <?php }else{?>
     <td>
       <span class="label label-success">Sudah</span>
     </td>
     <?php } ?>
     <td>

       <a class="btn btn-info btn-xs" href="#modalEditBarang<?php echo $row->kd_aduan;?>" data-toggle="modal"><i class="fa fa-eye"></i> Lihat & Balas</a>
     </td>
   </tr>
   <?php  } ?>

 </tbody>
</table>

<?php echo $halaman ;?>









              </div><!-- /.col -->
              </div><!-- /.row -->


              </div><!-- /.page-content -->
              </div>
              </div><!-- /.main-content -->

    <!-- ============ MODAL EDIT DATA KELUARGA =============== -->
    <?php
    if (isset($data_aduan)){
    foreach($data_aduan as $row){
    ?>
    <div id="modalEditBarang<?php echo $row->kd_aduan;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
        <div class="modal-content">
       <div class="modal-header" style="border-radius:0%;color: #fff;background-color: #cf2522;border:1px solid #cf2522">

      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
       <h3 style="text-align:center">Pesan Pengaduan</h3>

    </div>



    <div class="modal-body">

      <div class="container">


        <div class="col-md-12">
          <div class="form-group">
           <label class="col-sm-2">Nama Lengkap</label>
           <label class="col-sm-10">: <?php echo $row->nama;?></label>
          </div>

         <div class="form-group">
           <label class="col-sm-2">Email</label>
            <label class="col-sm-10">: <?php echo $row->email;?></label>
          </div>

          <div class="form-group">
           <label class="col-sm-2">No HP</label>
            <label class="col-sm-10">: <?php echo $row->nohp;?></label>

          </div>

         <div class="form-group">
            <label class="col-sm-2">Pesan </label>
            <p class="col-sm-6" style="tezt-align:justify"><?php echo $row->pesan;?></p>

         </div>

    </div>

    <div class="col-md-12">
      <br/>
      <div class="form-group">
      <label class="col-sm-8 control-label" style="background:#eee;"><h3>Balas Pesan</h3></label>
    </div>
          <form action="<?= site_url('adminpengaduan/addpesan');?>" method="post" class="form-horizontal" enctype="multipart/form-data">

            <input type="hidden" name="kd_pesan" value="<?php echo $kd_pesan;?>">
              <input type="hidden" name="kd_aduan" value="<?php echo $row->kd_aduan;?>">
                <input type="hidden" name="kd_user" value="<?php echo $row->kd_user;?>">
                      <input type="hidden" name="tglpesan" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date(" d/m/Y ");?>">

                <div class="form-group">
                 <label class="col-sm-2"></label>
                 <div class="col-sm-6">
                    <input type="hidden" class="form-control" value="<?php echo $row->nama;?>" readonly/>
                  </div>
                </div>
                <input type="hidden" name="status" value="1"/>
                <input type="hidden" name="notif" value="unread"/>
                <div class="form-group">
                   <label class="col-sm-2">Pesan </label>
                   <div class="col-sm-6">
                       <textarea type="text" class="form-control" name="isipesan" rows="4"></textarea>
                    </div>
                </div>



            <hr/>
            <button class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">Close</button>
             <button type="submit" class="btn btn-success btn-sm">Balas</button>

          </form>
        </div>


          </div>

    </div>

    </div>
    </div>
  </div>

    <?php }
    }
    ?>

  </div> <!-- /.content -->

</div> <!-- /.container -->
