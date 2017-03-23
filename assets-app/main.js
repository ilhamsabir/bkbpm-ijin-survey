
$(document).ready(function () {
  console.log('hai');
  $('#hapusNotif').on('click', function(e) {
     e.preventDefault();
      // console.log('yesss');
      var kd_ijin = $(this).data('id');
      var notif = 'read';
      console.log(kd_ijin);
      var url = '/bkbpm-ijin/publikdatasurvey/read/';
      var form = new FormData();
      form.append('kd_ijin', kd_ijin);
      form.append('notif', notif);
      $.ajax({
          url : url,
          type: "POST",
          dataType: 'JSON',
          data : form,
          contentType:false,
          cache: false,
          processData:false,
          success: function(response){
            if(response == true){
              window.location = "http://localhost/bkbpm-ijin/publikhome";
            }
          },
          error: function (response) {
            console.log(response);

          }
      });
    });

});


$(document).ready(function() {
  $( "#datepicker1" ).datepicker();
  console.log('hai ini date 1');
  $( "#datepicker2" ).datepicker();
  console.log('hai ini date 2');
});
