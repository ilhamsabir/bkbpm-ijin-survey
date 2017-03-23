<footer class="footer">

  <div class="container">

    <div class="row">

      <div class="col-sm-3">

        <h4>BKBPM Kota Bandung</h4>

        <br>

        <p>Perizinan Online v(1.0).</p>

        <hr>

        <p>&copy; 2015.</p>

      </div> <!-- /.col -->







    </div> <!-- /.row -->

  </div> <!-- /.container -->

</footer>

  <script src="//cdn.ckeditor.com/4.5.6/full/ckeditor.js"></script>

  <script src="<?php echo base_url();?>admin-assets/js/libs/jquery-1.10.1.min.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="./js/libs/excanvas.compiled.js"></script>
  <![endif]-->

  <!-- Plugin JS -->
  <script src="<?php echo base_url();?>admin-assets/js/plugins/icheck/jquery.icheck.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/plugins/select2/select2.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/libs/raphael-2.1.2.min.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/plugins/morris/morris.min.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

  <!-- App JS -->
  <script src="<?php echo base_url();?>admin-assets/js/target-admin.js"></script>

  <!-- Plugin JS -->
  <script src="<?php echo base_url();?>admin-assets/js/demos/dashboard.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/demos/calendar.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/demos/charts/morris/area.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/demos/charts/morris/donut.js"></script>





  <script src="<?php echo base_url();?>admin-assets/js/plugins/timepicker/bootstrap-timepicker.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>admin-assets/js/plugins/select2/select2.js"></script>

    <!-- Plugin JS -->
  <script type="text/javascript" src="<?php echo base_url();?>admin-assets/smart/js/jquery.smartWizard-2.0.min.js"></script>

  <script src="<?php echo base_url();?>admin-assets/js/bootstrap-wizard.min.js"></script>

 <script src="<?php echo base_url();?>admin-assets/js/plugins/fileupload/bootstrap-fileupload.js"></script>



 <script type="text/javascript" src="<?php echo base_url('admin-assets/js/jquery.printPage.js')?>"></script>
 <script type="text/javascript">
     $(document).ready(function(){
         $(".btnPrint").printPage();
     })
 </script>


  <script type="text/javascript">
    $(document).ready(function(){
      // Smart Wizard
      $('#wizard').smartWizard();

      function onFinishCallback(){
        $('#wizard').smartWizard('showMessage','Finish Clicked');
      }
    });
</script>

  <script type="text/javascript">
  $(document).ready(function () {


      $('#dp-ex-3').datepicker ();

  });

  </script>

  <script type="text/javascript">
  $(document).ready(function () {


      $('#dp-ex-4').datepicker ();

  });

  </script>

   <script type="text/javascript">
  $(document).ready(function () {


      $('#dp-ex-5').datepicker ();

  });

  </script>

  <script type="text/javascript">
  $(document).ready(function)(){
    $('#s2_basic').select2 ({
    allowClear: true,
    placeholder: "Pilih..."
  });

  });
  </script>

  <script type="text/javascript">
  $(document).ready(function (){

    $('input:checkbox, input:radio').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue',
    inheritClass: true
  });

  });

  </script>

  <script type="text/javascript">

    $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn'),
            allPrevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-info');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url'],input[type='radio'],input[type='file']"),

            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    allPrevBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

        $(".form-group").removeClass("has-error");
        prevStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});

  </script>

  <script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').bootstrapValidator({
//        live: 'disabled',
        message: 'Data Tidak Valid',
        feedbackIcons: {
            valid: 'icon-chec1k',
            invalid: 'icon-check-minu1s',
            validating: 'icon-refresh1'
        },
        fields: {
            firstName: {
                group: '.col-lg-4',
                validators: {
                    notEmpty: {
                        message: 'Nama Tidak Boleh Kosong'
                    }
                }
            },
            lastName: {
                group: '.col-lg-4',
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
                    remote: {
                        type: 'POST',
                        url: 'remote.php',
                        message: 'The username is not available'
                    },
                    different: {
                        field: 'password,confirmPassword',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            email: {
                validators: {
                  notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                    emailAddress: {
                        message: 'Email Harus Di isi .. !'
                    }
                }
            },

            jenisijin: {
                validators: {
                    notEmpty: {
                        message: 'Pilih Salah Satu'
                    },

                }
            },

            tgllahir: {
                validators: {
                  notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                    date: {
                        format: 'DD/MM/YYYY',
                        message: 'Data Tanggal Lahir Tidak Ditemukan'
                    }
                }
            },
            jeniskelamin: {
                validators: {
                    notEmpty: {
                        message: 'Jenis Kelamin Belum Dipilih'
                    }
                }
            },

             tempatlahir: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

             noktp: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                    integer: {
                            message: 'Silahkan Masukkan No Ktp Yang Benar',

                        }
                }
            },

             nama: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

             alamat: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

             rt: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                     integer: {
                            message: 'Silahkan Masukkan RT Yang Benar',

                        }
                }
            },

              rw: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                     integer: {
                            message: 'Silahkan Masukkan RW Yang Benar',

                        }
                }
            },

              kelurahan: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },


              kecamatan: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

              kota: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

              agama: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

             pekerjaan: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

             status: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

            nohp: {
                validators: {

                     notEmpty: {
                            message: 'Silahkan Masukkan No Hp Yang Benar',

                        },
                      digits: true,
                minlength:11,
                        maxlength:12
                }
            },



            'languages[]': {
                validators: {
                    notEmpty: {
                        message: 'Please specify at least one language you can speak'
                    }
                }
            },
            'programs[]': {
                validators: {
                    choice: {
                        min: 2,
                        max: 4,
                        message: 'Please choose 2 - 4 programming languages you are good at'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#defaultForm').bootstrapValidator('validate');
    });

    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });

});
</script>





</body>
</html>
