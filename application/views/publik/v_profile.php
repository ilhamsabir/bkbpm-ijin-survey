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

       <?php if(isset($dt_survey)){ foreach($dt_survey as $row){ ?>

<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo site_url('home/daftar')?>" enctype="multipart/form-data">

  <div class="col-md-6">

    <input type="hidden" class="form-control" name="kd_user" value="<?php echo $row->kd_user;?>" />
    <input type="hidden" class="form-control" name="level" value="pengguna" />
    <div class="form-group">
                  <label class="col-lg-4 control-label">Username</label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control" name="username" />

                  </div>
    </div>



       <div class="form-group">
                  <label class="col-lg-4 control-label">Password</label>
                  <div class="col-lg-8">
                      <input type="password" class="form-control" name="password" />
                  </div>
              </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Retype password</label>
                  <div class="col-lg-8">
                      <input type="password" class="form-control" name="confirmPassword" />
                  </div>
                </div>

   <div class="form-group">
       <label class="col-lg-4 control-label">Email</label>
        <div class="col-lg-8">
         <input type="text" class="form-control" name="email" />

        </div>
    </div>

                <hr/>
                <div class="form-group">
                  <label class="col-lg-4 control-label">Nama Lengkap</label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control" name="nama" placeholder="" />
                  </div>
                 </div>
                <div class="form-group">
                  <label class="col-lg-4 control-label">No KTP</label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control" name="noktp" />
                  </div>
                 </div>
                  <div class="form-group">
                  <label class="col-lg-4 control-label">Jenis Kelamin</label>
                  <div class="col-lg-8">
                      <div class="radio">
                          <label>
                              <input type="radio" name="jeniskelamin" value="laki-laki" required /> Laki-laki
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="jeniskelamin" value="perempuan" required/> Perempuan
                          </label>
                      </div>

                  </div>
                 </div>

                 <div class="form-group">
                  <label class="col-lg-4 control-label">Tempat Lahir</label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control" name="tempatlahir" placeholder="" />
                  </div>
                 </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Tanggal Lahir</label>
                  <div class="col-lg-8">
                     <div class="input-group input-append date" id="datetimepicker1">
                         <input type="text" class="form-control" name="tgllahir" placeholder="dd/mm/yyyy" />
                         <span class="input-group-addon add-on"><span class="icon-calendar"></span></span>
                      </div>
                  </div>


                 </div><!-- form gorp-->


             </div>

             <div class="col-md-6">

              <div class="form-group">
                  <label class="col-lg-4 control-label">Alamat</label>
                  <div class="col-lg-8">
                     <textarea name="alamat" class="form-control" rows="2"></textarea>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-4 control-label">RT/ RW</label>
                  <div class="col-lg-4">
                      <input type="text" class="form-control" name="rt" placeholder="" />
                  </div>
                  <div class="col-lg-4">
                      <input type="text" class="form-control" name="rw" placeholder="" />
                  </div>
              </div>

               <div class="form-group">
                  <label class="col-lg-4 control-label">Kelurahan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="kelurahan" placeholder="" />
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-4 control-label">Kecamatan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="kecamatan" placeholder="" />
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-4 control-label">Kota</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="kota" placeholder="" />
                  </div>
              </div>


              <div class="form-group">
                  <label class="col-lg-4 control-label">Agama</label>
                  <div class="col-lg-8">

                     <select name="agama" class="form-control">
                <option value=""></option>
                <option value="Islam">Islam</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Kristen Katolik">Kristen Katolik</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
                      </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-4 control-label">Pekerjaan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="pekerjaan" placeholder="" />
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-4 control-label">Status Perkawinan</label>
                  <div class="col-lg-8">

                     <select name="status" class="form-control">
                <option value=""></option>
                          <option value="Menikah">Menikah</option>
                          <option value="Belum Menikah">Belum Menikah</option>
                          <option value="Cerai">Cerai</option>
                          <option value="Cerai Hidup">Cerai Hidup</option>
                          <option value="Cerai Mati">Cerai Mati</option>
                      </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-4 control-label">No Hp</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="nohp" placeholder="" />
                  </div>
              </div>



              <div class="form-group">
                 <label class="col-lg-4 control-label">Kode Kemanan</label>
                  <label class="col-lg-3 control-label" id="captchaOperation"
                  style="border:1px solid #368ee0;background-color:#368ee0;color:#fff;pading-bottom:20px;line-height:25px;border-radius:5%;margin:0 0 0 15px;text-align:center"></label>
                  <div class="col-lg-3">
                      <input type="text" class="form-control" name="captcha" />
                  </div>
              </div>


             </div> <!-- col - md- 6-->

             <div class="col-md-8">
               <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">
                       <hr/>

                      <button type="submit" class="btn btn-success">Submit</button>
                      <button type="button" class="btn btn-danger" id="resetBtn">Reset form</button>
                  </div>
              </div>
              </div>

          </form>
<?php }
} ?>

</div>
</div>
</div>
</div>
</div>
