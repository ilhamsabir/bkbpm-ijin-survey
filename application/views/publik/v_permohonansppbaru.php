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
        <div class="portlet-content">
         <?php if(isset($dt_survey)){ foreach($dt_survey as $row){ ?>






         </div><!-- portlet-content -->
      </div>
    </div> <!-- /.content-container -->
  </div> <!-- /.content -->
</div> <!-- /.container -->
