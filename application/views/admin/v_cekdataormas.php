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
                Data Pemohon
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

             <?php if(isset($dt_ormas)){ foreach($dt_ormas as $row){ ?>

              <form action="<?= site_url('adminormas/edit_data');?>" method="post" class="form-horizontal">
             <div class="col-md-12">


                   <input type="hidden" value="<?php echo $row->kd_ijin1;?>" name="kd_ijin1">
                    <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">No. Resi</strong></label>
                      <div class="col-sm-6">
                         <input type="text" class="form-control" value="<?php echo $row->kd_ijin1; ?>" readonly>

                      </div>
                    </div>
                    <br/>
                     <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Tanggal Pengajuan</strong></label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control" value="<?php echo $row->tglajuan; ?>" readonly>

                      </div>
                    </div>

                    <br/>
                     <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Jenis Izin</strong></label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control" value="<?php echo $row->jenisijin; ?>" readonly>

                      </div>
                    </div>


                   <br/>
                   <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Nama Lengkap</strong></label>
                      <div class="col-sm-6">
                         <input type="text" class="form-control" value="<?php echo $row->nama; ?>" readonly>

                      </div>
                    </div>
                  <br/>
                   <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Nama Organisasi</strong></label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control" value="<?php echo $row->nmorganisasi;?>" readonly>

                      </div>
                   </div>

              <br/>
                 <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Bidang Organisasi</strong></label>
                      <div class="col-sm-6">

                         <input type="text" class="form-control" value="<?php echo $row->bidang; ?>" readonly>
                      </div>
                  </div>
              <br/>
                    <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Ruang Lingkup</strong></label>
                      <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?php echo $row->ruanglingkup; ?>" readonly>
                      </div>
                  </div>
                   <br/>

                     <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Alamat Kantor</strong></label>
                      <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?php echo $row->alamatkantor; ?>" readonly>
                      </div>
                  </div>
                   <br/>

                     <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Tempat Pendirian</strong></label>
                      <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?php echo $row->tmptpendirian; ?>" readonly>
                      </div>
                  </div>
                   <br/>

                     <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Asas Organisasi</strong></label>
                      <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?php echo $row->asas; ?>" readonly>
                      </div>
                  </div>
                   <br/>
                     <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Tujuan Organisasi</strong></label>
                      <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?php echo $row->tujuan; ?>" readonly>
                      </div>
                  </div>
                   <br/>

                   <div class="form-group">
                         <label class="col-sm-2"><strong style="font-weight:800">Nama Pendiri</strong></label>
                         <div class="col-sm-6">
                             <input  class="form-control" value="<?php echo $row->namapendiri; ?>" readonly/>

                         </div>
                    </div>

                      <br/>

                      <div class="form-group">
                            <label class="col-sm-2"><strong style="font-weight:800">Nama Pembina</strong></label>
                            <div class="col-sm-6">
                              <input  class="form-control" value="<?php echo $row->namapembina; ?>" readonly/>

                            </div>
                       </div>
                       <br/>
                         <div class="form-group">
                               <label class="col-sm-2"><strong style="font-weight:800">Nama Penasehat</strong></label>
                               <div class="col-sm-6">
                                 <input  class="form-control" value="<?php echo $row->namapenasehat; ?>" readonly/>

                               </div>
                          </div>

                            <br/>
                      <!-- PEngurus -->

                      <label class="control-label" style="font-weight:100px;background:#eee;border:2px solid #eee;width:100%;text-align:left">Biodata Pengurus</label>
                           <br/>
                           <br/>
                          <div class="form-group">
                           <label class="col-md-2 control-label"><h5>Ketua</h5></label>
                           <hr style="border-color:#ED4343;width:70%;margin-right:200px" />
                              <label class="col-md-4 control-label">Nama </label>
                               <div class="col-md-6">
                                  <input type="text" class="form-control" value="<?php echo $row->namaketua; ?>" readonly/>
                               </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-4 control-label">Gelar </label>
                               <div class="col-md-6">
                                  <input class="form-control" value="<?php echo $row->gelarketua; ?>" readonly>
                               </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-4 control-label">Nama Panggilan </label>
                               <div class="col-md-6">
                                  <input class="form-control" value="<?php echo $row->panggilketua; ?>" readonly/>
                               </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-4 control-label">Tempat & Tanggal Lahir </label>
                               <div class="col-xs-3">
                                  <input  class="form-control" value="<?php echo $row->tmptlahirketua; ?>" readonly/>
                               </div>
                             <div class="col-sm-3">
                                 <input class="form-control" value="<?php echo $row->tgllahirketua; ?>" readonly/>
                              </div> <!-- /.col -->

                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">Jenis Kelamin </label>
                               <div class="col-md-6">
                                 <input class="form-control" value="<?php echo $row->jkketua; ?>" readonly/>

                               </div>
                          </div>

                        <div class="form-group">
                              <label class="col-md-4 control-label">Pendidikan </label>
                               <div class="col-md-6">
                                 <input class="form-control" value="<?php echo $row->pendketua; ?>" readonly/>
                               </div>
                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">Agama </label>
                               <div class="col-md-6">
                                    <input class="form-control" value="<?php echo $row->agamaketua; ?>" readonly/>
                               </div>
                          </div>




                        <div class="form-group">
                              <label class="col-md-4 control-label">Status Pernikahan </label>
                               <div class="col-md-6">
                               <input class="form-control" value="<?php echo $row->statusketua; ?>" readonly/>
                               </div>
                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">No Hp</label>
                               <div class="col-md-6">
                                   <input class="form-control" value="<?php echo $row->hpketua; ?>" readonly/>
                               </div>
                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">Email </label>
                               <div class="col-md-6">
                                 <input class="form-control" value="<?php echo $row->emailketua; ?>" readonly/>
                               </div>
                          </div>


                          <!-- Sekretaris -->

                           <div class="form-group">
                           <label class="col-md-2 control-label"><h5>Sekretaris</h5></label>
                           <hr style="border-color:#ED4343;width:70%;margin-right:200px" />
                              <label class="col-md-4 control-label">Nama</label>
                               <div class="col-md-6">
                                  <input class="form-control" value="<?php echo $row->namasekretaris; ?>" readonly/>
                               </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-4 control-label">Gelar </label>
                               <div class="col-md-6">
                                    <input class="form-control" value="<?php echo $row->gelarsekretaris; ?>" readonly/>
                               </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-4 control-label">Nama Panggilan </label>
                               <div class="col-md-6">
                                 <input class="form-control" value="<?php echo $row->panggilsekretaris; ?>" readonly/>
                               </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-4 control-label">Tempat & Tanggal Lahir </label>
                               <div class="col-xs-3">
                                    <input class="form-control" value="<?php echo $row->tmptlahirsekretaris; ?>" readonly/>
                               </div>
                          <div class="col-sm-3">
                               <input class="form-control" value="<?php echo $row->tgllahirsekretaris; ?>" readonly/>

                              </div> <!-- /.col -->

                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">Jenis Kelamin </label>
                               <div class="col-md-6">
                                <input class="form-control" value="<?php echo $row->jksekretaris; ?>" readonly/>

                               </div>
                          </div>

                          <div class="form-group">
                              <label class="col-md-4 control-label">Pendidikan </label>
                               <div class="col-md-6">
                                     <input class="form-control" value="<?php echo $row->pendsekretaris; ?>" readonly/>
                               </div>
                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">Agama </label>
                               <div class="col-md-6">

                                    <input class="form-control" value="<?php echo $row->agamasekretaris; ?>" readonly/>
                               </div>
                          </div>

                          <div class="form-group">
                              <label class="col-md-4 control-label">Status Pernikahan </label>
                               <div class="col-md-6">
                                <input class="form-control" value="<?php echo $row->statussekretaris; ?>" readonly/>
                               </div>
                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">No Hp</label>
                               <div class="col-md-6">
                                    <input class="form-control" value="<?php echo $row->hpsekretaris; ?>" readonly/>
                               </div>
                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">Email </label>
                               <div class="col-md-6">
                                    <input class="form-control" value="<?php echo $row->emailsekretaris; ?>" readonly/>
                               </div>
                          </div>

                          <!-- Bendahara -->

                           <div class="form-group">
                           <label class="col-md-2 control-label"><h5>Bendahara</h5></label>
                           <hr style="border-color:#ED4343;width:70%;margin-right:200px" />
                              <label class="col-md-4 control-label">Nama <font color="red">&nbsp;*</font></label>
                               <div class="col-md-6">
                                    <input class="form-control" value="<?php echo $row->namabendahara; ?>" readonly/>
                               </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-4 control-label">Gelar </label>
                               <div class="col-md-6">
                                <input class="form-control" value="<?php echo $row->gelarbendahara; ?>" readonly/>
                               </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-4 control-label">Nama Panggilan </label>
                               <div class="col-md-6">
                                  <input class="form-control" value="<?php echo $row->panggilbendahara; ?>" readonly/>
                               </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-4 control-label">Tempat & Tanggal Lahir </label>
                               <div class="col-xs-3">
                                  <input class="form-control" value="<?php echo $row->tmptlahirbendahara; ?>" readonly/>
                               </div>
                          <div class="col-sm-3">
                                 <input class="form-control" value="<?php echo $row->tgllahirbendahara; ?>" readonly/>
                              </div> <!-- /.col -->

                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">Jenis Kelamin </label>
                               <div class="col-md-6">
                                  <input class="form-control" value="<?php echo $row->jkbendahara; ?>" readonly/>

                               </div>
                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">Pendidikan </label>
                               <div class="col-md-6">
                                  <input class="form-control" value="<?php echo $row->pendbendahara; ?>" readonly/>
                               </div>
                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">Agama </label>
                               <div class="col-md-6">
                                  <input class="form-control" value="<?php echo $row->agamabendahara; ?>" readonly/>
                               </div>
                          </div>

                          <div class="form-group">
                              <label class="col-md-4 control-label">Status Pernikahan </label>
                               <div class="col-md-6">
                              <input class="form-control" value="<?php echo $row->statusbendahara; ?>" readonly/>

                               </div>
                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">No Hp</label>
                               <div class="col-md-6">
                                <input class="form-control" value="<?php echo $row->hpbendahara; ?>" readonly/>
                               </div>
                          </div>

                           <div class="form-group">
                              <label class="col-md-4 control-label">Email </label>
                               <div class="col-md-6">
                                  <input class="form-control" value="<?php echo $row->emailbendahara; ?>" readonly/>
                               </div>
                          </div>


                    <!-- END PENGURUS -->

                    <!--Kepengurusan -->
                <label class="control-label" style="font-weight:100px;background:#eee;border:2px solid #eee;width:100%;text-align:left">Kepengurusan</label>
                     <br/>
                     <br/>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Masa Bhakti Kepengurusan</label>
                         <div class="col-md-6">
                            <input class="form-control" value="<?php echo $row->masabakti;?>" readonly/>
                         </div>
                    </div>

                   <div class="form-group">
                        <label class="col-md-4 control-label">Keputusan Tertinggi Organisasi<font color="red">&nbsp;*</font></label>
                         <div class="col-md-6">
                            <input class="form-control" value="<?php echo $row->keputusantertinggi;?>" readonly/>
                         </div>
                    </div>

                 <div class="form-group">
                        <label class="col-md-4 control-label">Unit / Satuan / Organisasi</label>
                         <div class="col-md-6">
                            <input  class="form-control"value="<?php echo $row->unit;?>" readonly/>
                         </div>
                    </div>

                   <div class="form-group">
                        <label class="col-md-4 control-label">Usaha Organisasi</label>
                         <div class="col-md-6">
                            <input class="form-control" value="<?php echo $row->usaha;?>" readonly=""/>
                         </div>
                    </div>

                   <div class="form-group">
                        <label class="col-md-4 control-label">Sumber Keuangan</label>
                         <div class="col-md-6">
                            <input class="form-control" value="<?php echo $row->sumber;?>" readonly=""/>
                         </div>
                    </div>

<!-- END KEPENGURUSAN -->
<hr/>
<br/>
<!-- BERKAS UPLOAD -->
<div class="form-group">
    <label class="col-md-2"><strong style="font-weight:800">Lambang Organisasi</strong></label>

   <div class="col-md-8">


        <img src="<?php echo base_url();?>/uploads/gambar/<?php echo $row->lambang;?>" width="150"/>

</div>
</div>
<!-- batas-->
<br/>

<!-- mulai -->
<div class="form-group">
    <label class="col-md-2"><strong style="font-weight:800">Bendera Organisasi</strong></label>

   <div class="col-md-8">

          <img src="<?php echo base_url();?>/uploads/gambar/<?php echo $row->bendera;?>" width="100"/>
</div>
</div>

<br/>

<div class="form-group">
    <label class="col-sm-2"><strong style="font-weight:800">Berkas</strong></label>

   <div class="col-sm-8">
   <a href="<?php echo base_url();?>/uploads/berkas/<?php echo $row->akteorganisasi; ?>" target="_blank">  Akte Pendirian Atau Status ORKESMAS Yang Disahkan Notaris Dan Dilegalisir</a>
   <br/>
   <a href="<?php echo base_url();?>/uploads/berkas/<?php echo $row->adartorganisasi; ?>" target="_blank"> AD/ART Yang Disahkan Notaris Dan Dilegalisir</a>
  <br/>
  <a href="<?php echo base_url();?>/uploads/berkas/<?php echo $row->tujuanorganisasi; ?>" target="_blank"> Tujuan & Program Kerja Organisasi</a>
  <br/>
  <a href="<?php echo base_url();?>/uploads/berkas/<?php echo $row->skorganisasi; ?>" target="_blank"> Surat Keputusan Tentang Susunan Pengurus ORKESMAS Secara Lengkap Dan Sah Sesuai AD/ART</a>
  <br/>
 <a href="<?php echo base_url();?>/uploads/berkas/<?php echo $row->ktporganisasi; ?>" target="_blank"> FOTOCOPY KTP Pengurus</a>
<br/>
<a href="<?php echo base_url();?>/uploads/berkas/<?php echo $row->domisiliorganisasi; ?>" target="_blank"> Surat Keterangan Domisili Yang Telah Dilegalisir</a>
<br/>
<a href="<?php echo base_url();?>/uploads/berkas/<?php echo $row->npwporganisasi; ?>" target="_blank"> NPWP Atas Nama Organisasi</a>
<br/>
<a href="<?php echo base_url();?>/uploads/gambar/<?php echo $row->fotokantor; ?>" target="_blank"> Foto Kantor / Sekretariat ORKESMAS (tampak depan dan memuat papan nama)</a>
<br/>
<a href="<?php echo base_url();?>/uploads/gambar/<?php echo $row->izinkantor; ?>" target="_blank"> Bukti Kepemilikan Atau Surat Perjanjian Kontrak Atau Izin Pakai Kantor/Sekretariat ORKESMAS</a>
</div>

</div>



               <div class="form-group">
                   <label class="col-sm-2"><strong style="font-weight:800">Status Berkas</strong></label>

                  <div class="col-sm-10">
                    <label class="radio-inline"><input name="verifikasi" type="radio" value="0" required> Belum memenuhi syarat</label>
                    <label class="radio-inline"> <input name="verifikasi" type="radio" value="1" required> Lanjut Ketahap verifikasi lapangan  </label>
                      <label class="radio-inline"> <input name="verifikasi" type="radio" value="2" required> Tahap Penerbitan ORMAS/LSM  </label>
                 </div>
               </div>
               <br/>
               <hr/>
                   <a href="<?= site_url('adminormas');?>" class="btn btn-primary btn-md">kembali</a>

                  <button type="submit" class="btn btn-secondary btn-md">Verifikasi</button>



             </div>

             </form>


             <?php }
             }
             ?>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->


      </div> <!-- /.row -->

    </div> <!-- /.content-container -->

  </div> <!-- /.content -->

</div> <!-- /.container -->
