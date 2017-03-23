$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').bootstrapValidator({
    // live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-oka',
            invalid: 'glyphicon glyphicon-removae',
            validating: 'glyphicon glyphicon-refaresh'
        },
        fields: {

            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'username tidak boleh Kosong'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'username terdiri 6 sampai 30 karakter'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },

                    different: {
                        field: 'password,confirmPassword',
                        message: 'Username tidak boleh sama dengan password'
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

            password: {
                validators: {
                    notEmpty: {
                        message: 'Password Tidak Boleh Kosong'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'Password Tidak Sama'
                    },
                    different: {
                        field: 'username',
                        message: 'Password tidak boleh sama dengan email'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'paswwrod minimum terdiri dari 6 karakter sampai 30 karakter'
                    },
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                    identical: {
                        field: 'password',
                        message: 'Tidak Sama Dengan Password Di atas'
                    },
                    different: {
                        field: 'username',
                        message: 'Tidak boleh sama dengan email'
                    }
                }
            },
            tgllahir: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                    date: {
                        format: 'DD-MM-YYYY',
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
