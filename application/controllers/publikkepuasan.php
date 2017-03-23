<?php
class Publikkepuasan extends CI_Controller{

   function __construct(){
       parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
           redirect('home/#masuk');
        };
       $this->load->model('m_app');
    }

   public function index(){


  $data=array(
            'title'=>'Indeks Kepuasan : BKBPM Kota Bandung',
            'active_kepuasan'=>'active',
            'kd_indeks'=>$this->m_app->getKodeIndeks(),
            'get_sikapbaik'=>$this->m_app->getCounts1('tbl_indeks'),
             'get_sikapcukup'=>$this->m_app->getCounts2('tbl_indeks'),
              'get_sikapkurang'=>$this->m_app->getCounts3('tbl_indeks'),

            'get_penangananbaik'=>$this->m_app->getCounts4('tbl_indeks'),
             'get_penanganancukup'=>$this->m_app->getCounts5('tbl_indeks'),
              'get_penanganankurang'=>$this->m_app->getCounts6('tbl_indeks'),

               'get_prosedurbaik'=>$this->m_app->getCounts7('tbl_indeks'),
             'get_prosedurcukup'=>$this->m_app->getCounts8('tbl_indeks'),
              'get_prosedurkurang'=>$this->m_app->getCounts9('tbl_indeks'),

                 'get_waktubaik'=>$this->m_app->getCounts10('tbl_indeks'),
             'get_waktucukup'=>$this->m_app->getCounts11('tbl_indeks'),
              'get_waktukurang'=>$this->m_app->getCounts12('tbl_indeks'),

              'notif_survey'=>$this->m_app->countSurvey1('tbl_ijin'),
              'notif_ormas'=>$this->m_app->countOrmas1('tbl_ijin1'),
              'pesan_survey'=>$this->m_app->notifSurvey('tbl_ijin'),
                'pesan_ormas1'=>$this->m_app->notifOrmas1('tbl_ijin1'),
                'pesan_ormas2'=>$this->m_app->notifOrmas2('tbl_ijin1'),
                'pesan_ormas3'=>$this->m_app->notifOrmas3('tbl_ijin1'),
                'count_pesanuser'=>$this->m_app->countPesanuser('tbl_pesan'),
             'pesanuser'=>$this->m_app->pesanUser('tbl_pesan'),

             'notifgagal'=>$this->m_app->countGagal('tbl_gagal'),
             'pesangagal'=>$this->m_app->pesanGagal('tbl_gagal'),
             'datagagal'=>$this->m_app->dataGagal('tbl_gagal'),
             'notifsukses_survey' => $this->m_app->notifSurveySukses('tbl_ijin')
        );
       //$data['data_berita'] = $this->m_app->getAllData('tbl_berita');


        $this->load->view('element/header-baru',$data);
       $this->load->view('element/menu-baru');
        $this->load->view('publik/v_kepuasan');
        $this->load->view('element/footer-baru');
    }


 function add() {


                $data = array(

                  'kd_indeks' =>$this->input->post('kd_indeks'),
                  'tanya' => $this->input->post('tanya'),
                  'baik'=>$this->input->post('baik'),
                  'kurang'=>$this->input->post('kurang'),
                  'cukup'=>$this->input->post('cukup'),
                  'tgl'=>$this->input->post('tgl'),

                );

                $this->m_app->insertData('tbl_indeks',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
           if($data >= 1) {
                 $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Sukses </div></div>");
                redirect('publikkepuasan'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal , Coba Lagi !</div></div>");
                redirect('publikkepuasan'); //jika gagal maka akan ditampilkan form upload
            }

    }



}
