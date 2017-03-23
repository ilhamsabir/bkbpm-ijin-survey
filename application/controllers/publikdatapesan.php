<?php
class Publikdatapesan extends CI_Controller{

   function __construct(){
       parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
           redirect('home/login');
        };
       $this->load->model('m_app');
       $this->load->library(array('pagination','session'));
       $this->load->helper(array('url','text','slug')); //load helper url
   }

   public function index(){


  $data=array(
            'title'=>'BKBPM : Layanan Perizinan Online',
            'active_pesan'=>'active',
            'kd_ijin'=>$this->m_app->getKodeIjin(),
            'nmsurat'=>$this->m_app->getKodeSurat(),
            'user_data'=>$this->m_app->userData('tbl_user'),
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
            //'datagagal'=>$this->m_app->dataGagal('tbl_gagal'),
            'datagagal'=>$this->m_app->dataGagal('tbl_gagal'),
            'notifsukses_survey' => $this->m_app->notifSurveySukses('tbl_ijin')
        );
       $data['data_berita'] = $this->m_app->getAllData('tbl_berita');


        $this->load->view('element/header-baru',$data);
        $this->load->view('element/menu-baru');
        $this->load->view('publik/v_pesan');
        $this->load->view('element/footer-baru');
    }

    public function read(){

                   $id['kd_gagal'] = $this->input->post('kd_gagal');
                   $data['status']  = $this->input->post('status');

                    $this->m_app->updateData('tbl_gagal',$data,$id);
              if($data >= 1) {
                    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Permohonan Sukses Di Ajukan</div></div>");
                    redirect('publikdatapesan'); //jika berhasil maka akan ditampilkan view vupload
                }else{

                    //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Permohonan Gagal , Coba Lagi !</div></div>");
                    redirect('publikdatapesan'); //jika gagal maka akan ditampilkan form upload
                }

    }



}
