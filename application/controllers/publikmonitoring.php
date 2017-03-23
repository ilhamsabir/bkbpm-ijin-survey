<?php
class Publikmonitoring extends CI_Controller{

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
            'title'=>'Monitoring : BKBPM Kota Bandung',
            'active_monitor'=>'active',
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
        );
       //$data['data_berita'] = $this->m_app->getAllData('tbl_berita');


        $this->load->view('element/header_a',$data);
       $this->load->view('element/menu_a');
        $this->load->view('publik/v_monitor');
        $this->load->view('element/footer_a');
    }


 function carispp() {



   $data['title'] = 'Monitoring Berkas : BKBPM Kota Bandung';
   $data['active_berkas'] = 'active';
   $data['monitor_spp'] = $this->m_app->GetSpp();



       if($data['monitor_spp']==null) {
             $this->load->view('element/header_a',$data);
             $this->load->view('element/menu_a');
            $this->load->view('publik/v_error');
            $this->load->view('element/footer_a');
          }
          else {
            $this->load->view('element/header_a',$data);
            $this->load->view('element/menu_a');
            $this->load->view('publik/v_hasilspp');
            $this->load->view('element/footer_a');

         }
    }

  function cariormas() {



   $data['title'] = 'Monitoring Berkas : BKBPM Kota Bandung';
   $data['active_berkas'] = 'active';
   $data['monitor_ormas'] = $this->m_app->GetOrmas();



       if($data['monitor_ormas']==null) {
             $this->load->view('element/header_a',$data);
             $this->load->view('element/menu_a');
            $this->load->view('publik/v_error');
            $this->load->view('element/footer_a');
          }
          else {
            $this->load->view('element/header_a',$data);
            $this->load->view('element/menu_a');
            $this->load->view('publik/v_hasilormas');
            $this->load->view('element/footer_a');

         }
    }


}
