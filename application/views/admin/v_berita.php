<div class="container">

  <div class="content" style="min-height:460px">

    <div class="content-container">



      <div>
        <h4 class="heading-inline">Selamat Datang , <?php echo $this->session->userdata('NAME');?>
        &nbsp;&nbsp;<small><?php date_default_timezone_set("Asia/Jakarta"); echo date(" h:i:s d/m/Y ");?></small>
        &nbsp;&nbsp;</h4>


      </div>



      <br>



      <div class="row">

        <div class="col-md-12">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-info-circle"></i>
                Data Berita
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">




         <div class="col-md-12">
           <a href="#modalAddBerita" class="btn btn-success" data-toggle="modal">
                <i class="fa fa-plus-square"></i> Tambah Berita
             </a>
 <br/>
  <br/>

          <table class="table table-bordered table-hover table-highlight">
          <thead>
                          <tr>
                            <th>No</th>
                            <th>Id Berita</th>
                            <th>Tanggal Isi</th>
                            <th>Judul Berita</th>
                            <th>Isi Berita</th>
                            <th>Kategori</th>
                            <th>Foto</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php   $no=$offset;
                                  foreach($ambil_berita as $row){ ?>
                         <tr>
                            <td style="font-size: 12px;"><?php echo ++$no; ?></td>
                            <td style="font-size: 12px;width:80px"><?php echo $row->kd_berita; ?></td>
                            <td style="font-size: 12px;"><?php echo $row->tgl_b; ?></td>
                            <td style="font-size: 12px;width:180px"><?php echo $row->j_berita; ?></td>
                            <td style="font-size: 12px;"><?php $isi=$row->isi_b; $isi=character_limiter($isi,100);?><?php echo $isi; ?></td>
                            <td style="font-size: 12px;"><?php echo $row->kategori_b; ?></td>
                            <td style="text-align: center;">
                              <img src="<?php echo base_url(); ?>/uploads/berita/<?php echo $row->foto ;?>" class="img-circle" width="60px"/>
                            </td>
                            <td style="width:120px">
                                <a class="btn btn-info btn-xs" href="#modalEditBarang<?php echo $row->kd_berita?>" data-toggle="modal"><i class="entypo-pencil"></i> Edit</a>
                                <a class="btn btn-danger btn-xs" href="<?php echo site_url('adminberita/hapus_data/'.$row->kd_berita);?>"
                                    onclick="return confirm('Anda yakin?')"> <i class="entypo-trash"></i> Hapus</a>
                            </td>
                        </tr>
                     <?php  }  ?>
                    </tbody>
                    </table>

                   <?php echo $halaman ;?>



            </div>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->





      </div> <!-- /.row -->

    </div> <!-- /.content-container -->

  </div> <!-- /.content -->

</div> <!-- /.container -->

<!-- ============ MODAL ADD Penduduk =============== -->
<div id="modalAddBerita" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg" >
   <div class="modal-content">
    <div class="modal-header" style="border-radius:0%;color: #fff;background-color: #cf2522;border:1px solid #cf2522">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 style="text-align:center">Input Data Berita</h3>

    </div>
    <form method="post" action="<?php echo site_url('adminberita/add')?>" enctype="multipart/form-data">
        <div class="modal-body">

                  <div class="control-group">

                    <div class="controls">
                      <input class="form-control" type="hidden" name="kd_berita" value="<?php echo $kd_berita; ?>" readonly="">
                    </div>
                  </div>
                  <br />
                  <div class="control-group">

                    <div class="controls">
                      <input class="form-control" type="hidden" name="tgl_b"  value="<?php date_default_timezone_set('Asia/Jakarta');?><?php echo date("d/m/Y"); ?>" readonly="">
                    </div>
                  </div>
                  <br />
                  <div class="control-group">
                    <label class="control-label">Judul Berita</label>
                    <div class="controls">
                       <input class="form-control" type="text" name="j_berita">
                    </div>
                  </div>
                  <br />
                  <div class="control-group">
                    <label class="control-label">Isi Berita</label>
                    <div class="controls">
                     <textarea name="isi_b" class="ckeditor"></textarea>
                    </div>
                  </div>
                   <br />
                  <div class="control-group">
                    <label class="control-label">Kategori Berita</label>
                    <div class="controls">

                    <select class="form-control" name="kategori_b">

                                            <option value="berita-depan">Berita Utama</option>
                                            <option value="berita-satu">Berita Popular</option>

                    </select>

                    </div>
                  </div>

                  <br />



                  <div class="control-group">
                    <label class="control-label">Gambar</label>
                    <div class="controls">
                      <input type="file" name="filefoto" class="form-control">
                    </div>
                  </div>


                </div>

           <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </div>
    </form>

</div>
</div>




<!-- ============ MODAL EDIT DATA KELUARGA =============== -->
<?php
if (isset($data_berita)){
    foreach($data_berita as $row){
        ?>
        <div id="modalEditBarang<?php echo $row->kd_berita?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header" style="border-radius:0%;color: #fff;background-color: #cf2522;border:1px solid #cf2522">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
              <h3 style="text-align:center">Edit Data Berita</h3>
           </div>


     <form class="form-horizontal" method="post" action="<?php echo site_url('adminberita/update')?>" enctype="multipart/form-data">
       <div class="modal-body">

                  <div class="control-group">
                   <label class="control-label">ID Berita</label>
                    <div class="controls">
                      <input class="form-control" type="text" name="kd_berita" value="<?php echo $row->kd_berita; ?>" readonly="">
                    </div>
                  </div>
                  <br />
                  <div class="control-group">
                   <label class="control-label">Tgl Berita</label>
                    <div class="controls">
                      <input class="form-control" type="text" name="tgl_b" value="<?php date_default_timezone_set('Asia/Jakarta');?><?php echo date("d/m/Y"); ?>" readonly>
                    </div>
                  </div>
                  <br />
                  <div class="control-group">
                    <label class="control-label">Judul Berita</label>
                    <div class="controls">
                       <input class="form-control" type="text" name="j_berita" value="<?php echo $row->j_berita; ?>">
                    </div>
                  </div>
                  <br />
                  <div class="control-group">
                    <label class="control-label">Isi Berita</label>
                    <div class="controls">
                     <textarea name="isi_b" class="ckeditor"><?php echo $row->isi_b; ?></textarea>
                    </div>
                  </div>

                   <br />
                  <div class="control-group">
                    <label class="control-label">Kategori Berita</label>
                    <div class="controls">

                    <select class="form-control" name="kategori_b">

                     <?php if ($row->kategori_b >= 0){ ?>
                            <option value="<?php echo $row->kategori_b;?>"><?php echo $row->kategori_b;?></option>
                              <option value="berita-slider">Berita Utama</option>
                              <option value="berita-satu">Berita Popular</option>
                     <?php }else{?>
                             <option value="berita-slider">Berita Utama</option>
                                            <option value="berita-satu">Berita Popular</option>
                     <?php } ?>

                    </select>

                    </div>
                  </div>

                  <br />

                  <div class="control-group">
                    <label class="control-label">Gambar</label>
                    <div class="controls">
                      <input type="file" name="filefoto" class="form-control">
                    </div>
                  </div>


                </div>

           <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </div>
    </form>
        </div>
        </div>
    <?php }
}
?>
