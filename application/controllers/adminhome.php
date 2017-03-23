<?php
class Adminhome extends CI_Controller{

   function __construct(){
       parent::__construct();
        if($this->session->userdata('login_status') != TRUE ) {
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
           redirect('home/#masuk');
        };
       $this->load->model('m_app');
    }

   public function index(){

    if($this->session->userdata('LEVEL') =='admin') {


      $data=array(
            'title'=>'BKBPM : Layanan Perizinan Online',
            'active_home'=>'active',
           'count_survey' => $this->m_app->countSurvey('tbl_ijin'),
           'count_ormas' => $this->m_app->countOrmas('tbl_ijin1'),
           'count_pesan' => $this->m_app->countPesan('tbl_pesan'),
           'count_adu' => $this->m_app->countAdu('tbl_aduan'),
            //'kd_user'=>$this->m_app->getKodeUser(),

             // 'ambil_paket3' => $this->m_app->ambil_paket3('tbl_harga'),
             // 'ambil_paket4' => $this->m_app->ambil_paket4('tbl_harga'),
            //'data_berita'=>$this->m_app->getAllData('tbl_berita',),
        );
       //$data['data_berita'] = $this->m_app->getAllData('tbl_berita');


        $this->load->view('element/new/header-admin',$data);
       $this->load->view('element/new/menu-admin');
        $this->load->view('admin/v_home');
        $this->load->view('element/new/footer-admin');


   }else{

    echo "<script>alert('Anda Harus Login Sebagai Admin!');</script>";
        redirect('home/#masuk');

   }


  }
}
