<?php
  $atribut_popup = array(
            'width' => '900',
            'height' => '550',
            'scrollbars' => 'yes',
             'status' => 'no',
            'resizable' => 'no',
            'screenx' => '100',
            'screeny' => '30',

      //'class'=>'btn btn-warning'
      
        );
?>
<div class="container">

  <div class="content">

    <div class="content-container">

      <div class="row">

<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr><td> 
<!-- Smart Wizard -->
  		<div id="wizard" class="swMain">
  			<ul>
  				<li><a href="#step-1">
                <span class="stepNumber">1</span>
                <span class="stepDesc">
                   Tahap 1<br />
                   <small>Memilih Jenis Izin</small>
                </span>
            </a></li>
  				<li><a href="#step-2">
                <span class="stepNumber">2</span>
                <span class="stepDesc">
                   Tahap 2<br />
                   <small>Melengkapi Form</small>
                </span>
            </a></li>
  				<li><a href="#step-3">
                <span class="stepNumber">3</span>
                <span class="stepDesc">
                   Tahap 3<br />
                   <small>Upload Persyaratan</small>
                </span>                   
             </a></li>
  				<li><a href="#step-4">
                <span class="stepNumber">4</span>
                <span class="stepDesc">
                   Tahap 4<br />
                   <small>Selesai</small>
                </span>                   
            </a></li>
  			</ul>
    <form role"form" method="post" class="form-horizontal" action="<?php echo site_url('publikpermohonanol/daftar')?>" enctype="multipart/form-data">
        <!-- STEP 1-->
  		<div id="step-1">	
           
            <div class="panel panel-primary" style="margin-top:100px;border-radius:0px">
           
                <div class="panel-heading" style="border-radius:0px">
                <h4> <i class="fa fa-building"></i> Pilih Jenis Izin</h4></div>
            <div class="panel-body">
            <div class="col-md-6 col-md-offset-3">
                
               
              <br/>
                 <div class="form-group">
                  <div class="radio">
                                    <label>
                                        <input type="radio" class="control-label" name="jenisijin" value="ormas" required="required"/> 
                                        <strong>Ormas</strong>
                                    </label>
                  </div>
                  </div>
                                
                                <br/>
                   <div class="form-group">
                  <div class="radio">
                                    <label>
                                        <input type="radio" class="control-label" name="jenisijin" value="lsm" required="required"/>
                                        <strong>LSM</strong>
                                    </label>
                  </div>
                  </div>
                  <br/>
                  

                  </div>
                </div><!-- panel body-->
              

            
            </div><!-- panel -->
                
                     
        </div>

        <!-- STEP 2 -->
  		<div id="step-2">
            <h2 class="StepTitle">Form Pengajuan Izin</h2>	
                   
        </div>   

        <!-- STEP 3 -->
  		<div id="step-3">
            <h2 class="StepTitle">Upload Persyaratan</h2>	
            		          
        </div>

        <!-- STEP 4 -->
  		<div id="step-4">
            <h2 class="StepTitle">Step 4 Content</h2>	
           			
        </div>

    </form>
  	</div>
<!-- End SmartWizard Content -->  		
 		
</td></tr>
</table>

</div>
</div>
</div>
</div>