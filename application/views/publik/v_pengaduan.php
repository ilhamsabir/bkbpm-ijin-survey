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
    <div class="col-xs-6">
   	<!-- PAGE CONTENT BEGINS -->

    <h3>Penyampaian Keluhan</h3>
     <?php echo $this->session->flashdata('pesan');?>
     <div class="panel panel-danger" style="border-radius:0%;">
       <div class="panel-heading" style="border-radius:0%;color: #fff;background-color: #cf2522;border:1px solid #cf2522">
       <p style="text-align:justify">
        Bapak / Ibu yang terhormat , sampaikan keluhan anda tentang perizinan. Kami akan sangat senang apabila pengaduan tersebut disertai dengan bukti otentik.
        Silakan upload dokumen / Foto / Gambar anda. Jangan lupa lengkapi data anda agar kami dapat merespon dengan baik

       </p></div>
      <div class="panel-body" style="border:1px solid #cf2522;background-color:#fff">
 <?php if(isset($ambil_profileid)){ foreach($ambil_profileid as $row){ ?>
      <form action="<?= site_url('publikpengaduan/add');?>" method="post" class="form-horizontal" enctype="multipart/form-data">

      <div class="col-md-12">
      <input type="hidden" class="form-control" name="kd_aduan"  value="<?php echo $kd_aduan;?>" />
      <input type="hidden" class="form-control" name="kd_user"  value="<?php echo $row->kd_user;?>" />
      <input type="hidden" name="tgladuan" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date(" d/m/Y ");?>">
       <div class="form-group">
        <label class="col-md-4 control-label">Nama Lengkap</label>
        <div class="col-md-8">
           <input type="text" class="form-control" name="nama" value="<?php echo $this->session->userdata('NAME');?>" readonly/>
         </div>
       </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Email</label>
        <div class="col-md-8">
           <input type="text" class="form-control" value="<?php echo $this->session->userdata('EMAIL');?>" readonly/>
         </div>
       </div>

       <div class="form-group">
        <label class="col-md-4 control-label">No HP</label>
        <div class="col-md-8">
           <input type="text" class="form-control" value="<?php echo $row->nohp;?>" readonly/>
         </div>
       </div>

      <div class="form-group">
         <label class="col-md-4 control-label">Pesan </label>
         <div class="col-md-8">
             <textarea type="text" class="form-control" name="pesan" rows="4"></textarea>
          </div>
      </div>

      <div class="form-group">
         <label class="col-md-4 control-label">Upload Bukti </label>
         <div class="col-md-8">
            <input type="file" class="form-control" name="filefoto" rows="4">
         </div>
      </div>

      <hr style="border-top:2px solid #d5d5d5" />
      <button type="submit" class="btn btn-danger btn-md" style="float:right">Submit</button>


      </div><!-- col md 8-->




      </form>
 <?php }
             }
             ?>

      </div>
      </div>

      </div><!-- SPP -->

    <div class="col-md-6">
      <h3>Balasan Pengaduan</h3>
      <div class="panel panel-danger" style="border-radius:0%;">
        <div class="panel-heading" style="border-radius:0%;color: #fff;background-color: #cf2522;border:1px solid #cf2522">Pesan</div>
        <div class="panel-body">
          <?php
          if (isset($getpesanuser)){
          foreach($getpesanuser as $row){
          ?>

          <ul class="panel-lists">

              <li>
                <img src="<?php echo base_url();?>/uploads/admin-icon.png" alt="Avatar" class="panel-list-avatar" style="width:32px">
                <div class="panel-list-content">
                    <span class="panel-list-time"><?php echo $row->tglpesan;?></span>
                    <p><?php $isi=$row->isipesan; $isi=character_limiter($isi,100);?><?php echo $isi; ?></p>
                    <a class="btn btn-warning btn-xs" href="#modalEditBarang<?php echo $row->kd_pesan?>" data-toggle="modal"><i class="fa fa-eye"></i> Selengkapnya</a>

                    <span class="panel-list-meta">Oleh <a href="#">Admin Perizinan BKBPM Kota Bandung</a></span>
                </div>
              </li>

            </ul>


          <?php }
        } ?>



            </ul>
        </div>
      </div>

    </div>

  </div><!-- /.col -->
</div><!-- /.row -->


  </div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->



    <!-- ============ MODAL EDIT DATA KELUARGA =============== -->
    <?php
    if (isset($data_pesan)){
    foreach($data_pesan as $row){
    ?>
    <div id="modalEditBarang<?php echo $row->kd_pesan;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
        <div class="modal-content">
       <div class="modal-header" style="border-radius:0%;color: #fff;background-color: #cf2522;border:1px solid #cf2522">

      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
       <h3 style="text-align:center">Pesan Anda </h3>

    </div>



    <div class="modal-body">

      <div class="container">


        <div class="col-md-12">
          <div class="form-group">
           <label class="col-sm-2">Kepada</label>
           <label class="col-sm-10">: <?php echo $this->session->userdata('NAME');?></label>
          </div>



         <div class="form-group">
            <label class="col-sm-2">Pesan </label>
            <p class="col-sm-6" style="tezt-align:justify"><?php echo $row->isipesan;?></p>

         </div>

    </div>

          <button class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">Close</button>

          </div>

    </div>

    </div>
    </div>
    </div>

    <?php }
    }
    ?>
    <!-- end modal -->
