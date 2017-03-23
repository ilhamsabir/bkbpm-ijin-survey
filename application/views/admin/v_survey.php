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
    <div class="col-xs-12">
   	<!-- PAGE CONTENT BEGINS -->

            <div class="col-md-4 col-md-offset-0">
              <form action="<?= site_url('adminsurvey/caridata');?>" method="post" class="form-horizontal">

              <div class="form-group">

                       <div class="col-md-10">
                       <input type="text" class="form-control" name="resi" required/>
                       <small class="text-danger"><font color:red>*</font>masukkan no. resi</small>
                       </div>
                       <div class="col-md-2">
                        <button style="submit" class="btn btn-primary btn-sm">cari</button>
                       </div>
                    </div>
           </form>
         </div>
            <div class="col-md-12">
              <ul class="nav nav-tabs">
                <li role="presentation" class="<?php if(isset($tab_survey1)){echo $tab_survey1 ;}?>">
                    <a href="<?php echo site_url('adminsurvey');?>">Belum Verifikasi</a>
                </li>
                <li role="presentation" class="<?php if(isset($tab_survey2)){echo $tab_survey2 ;}?>">
                   <a href="<?php echo site_url('adminsurveyverified');?>">Sudah Verifikasi</a>
                </li>

              </ul>


                  <table class="table table-bordered table-hover table-highlight">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Izin</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php   $no=$offset; foreach($ambil_ijin as $row){ ?>
                      <tr>
                        <td><?php echo ++$no;?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->jenisijin; ?></td>
                        <td><?php echo $row->tglajuan; ?></td>
                        <?php if($row->verifikasi == '0'){;?>
                        <td>
                          <span class="label label-primary">Belum Terverifikasi</span>
                        </td>
                        <?php }else{?>
                        <td>
                          <span class="label label-success">Terverifikasi</span>
                        </td>
                        <?php } ?>
                        <td>
                          <a class="btn btn-warning btn-xs" href="#modalEditBarang<?php echo $row->kd_user;?>" data-toggle="modal"><i class="fa fa-user"></i> Biodata</a>
                          <a class="btn btn-info btn-xs" href="<?php echo site_url('adminsurvey/lihatdata/'.$row->kd_ijin);?>"><i class="fa fa-eye"></i> view</a>
                          <?php if($row->verifikasi >= '1'){;?>
                          <a class="btn btn-success btn-xs" href="<?php echo site_url('adminsurvey/lihat_sktsurvey/'.$row->kd_ijin)?>" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Cetak Data Penjualan">
                            <i class="fa fa-print"></i> Cetak
                          </a>
                            <?php }else{ ?>
                              <a class="btn btn-success btn-xs" disabled="disabled">
                                <i class="fa fa-print"></i> Cetak
                              </a>
                            <?php  } ?>
                            <a class="btn btn-danger btn-xs" href="<?php echo site_url('adminsurvey/hapus_data/'.$row->kd_ijin);?>"
                                                              onclick="return confirm('Anda yakin?')"> <i class="fa fa-trash"></i> Hapus</a>
                        </td>
                      </tr>
                      <?php  } ?>

                    </tbody>
                  </table>

                  <?php echo $halaman ;?>



              </div>





            </div>


            </div> <!-- /.portlet-content -->
          </div>
          </div><!-- /.col -->
          </div><!-- /.row -->
