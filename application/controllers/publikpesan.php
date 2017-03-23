<?php
class Publikpesan extends CI_Controller{

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
            'title'=>'BKBPM : Layanan Perizinan Online',
            'active_pesan'=>'active',

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



        $this->load->view('element/header_a',$data);
        $this->load->view('element/menu_a');
        $this->load->view('publik/v_pesan');
        $this->load->view('element/footer_a');
    }


    public function notif(){
         $id = $this->session->userdata('ID');
         $data = array(
            'notif'=>$this->input->post('notif'),
            'datagagal'=>$this->m_app->dataGagal('tbl_gagal'),
            'notifsukses_survey' => $this->m_app->notifSurveySukses('tbl_ijin')
         );
          $this->m_app->updateData('tbl_ijin',$data,$id);
          redirect('publikdatasurvey'); //jika gagal maka akan ditampilkan form upload
    }

    public function notifpesan(){
         $id['kd_pesan'] = $this->input->post('kd_pesan');
         $data = array(
            'notif'=>$this->input->post('notif'),
            'datagagal'=>$this->m_app->dataGagal('tbl_gagal'),
            'notifsukses_survey' => $this->m_app->notifSurveySukses('tbl_ijin')
         );
          $this->m_app->updateData('tbl_pesan',$data,$id);
          redirect('publikpengaduan'); //jika gagal maka akan ditampilkan form upload
    }




}
