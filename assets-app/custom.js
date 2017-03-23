
$(document).ready(function(){
 $(".btnPrint").printPage();

  // Smart Wizard
  $('#wizard').smartWizard();
  function onFinishCallback(){
    $('#wizard').smartWizard('showMessage','Finish Clicked');
  }

  $('#dp-ex-3').datepicker ();

  $('#dp-ex-4').datepicker ();

  $('#dp-ex-5').datepicker ();

  $('#s2_basic').select2 ({
      allowClear: true,
      placeholder: "Pilih..."
  });
});

// $(function () {
//        $('#datepicker6').datepicker();
//        $('#datepicker7').datepicker({
//            useCurrent: false //Important! See issue #1075
//        });
//        $("#datetimepicker6").on("dp.change", function (e) {
//            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
//        });
//        $("#datetimepicker7").on("dp.change", function (e) {
//            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
//        });
//    });
