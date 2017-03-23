<?php
class Publikpermohonanspp extends CI_Controller{

   function __construct(){
       parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
           redirect('home/#masuk');
        };
       $this->load->model('m_app');
       $this->load->library(array('pagination','session'));
       $this->load->helper(array('url','text','slug')); //load helper url
   }

   public function index(){


  $data=array(
            'title'=>'BKBPM : Layanan Perizinan Online',
            'active_spp'=>'active',
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
            'datagagal'=>$this->m_app->dataGagal('tbl_gagal'),
            'notifsukses_survey' => $this->m_app->notifSurveySukses('tbl_ijin')
        );

        $this->load->view('element/header-baru',$data);
        $this->load->view('element/menu-baru');
        $this->load->view('publik/v_permohonanspp');
        $this->load->view('element/footer-baru');
    }




//tambah dataijin//

public function daftar(){


               $data = array(

                  'foto' =>$this->input->post('foto'),
                  'ktp' =>$this->input->post('ktp'),
                  'proposal' =>$this->input->post('proposal'),
                  'sk' =>$this->input->post('sk'),
                  'skkampus' =>$this->input->post('skkampus'),
                  'kd_ijin' => $this->input->post('kd_ijin'),
                  'kd_user'=>$this->input->post('kd_user'),
                  'tglajuan'=>$this->input->post('tglajuan'),
                  'jenisijin'=>$this->input->post('jenisijin'),
                  'judul'=>$this->input->post('judul'),
                  'organisasi'=>$this->input->post('organisasi'),

                  'kampus'=>$this->input->post('kampus'),
                  'nosuratkampus'=>$this->input->post('nosuratkampus'),
                  'tglsuratkampus'=>$this->input->post('tglsuratkampus'),

                  'lokasi1'=>$this->input->post('lokasi1'),
                  'lokasi2'=>$this->input->post('lokasi2'),
                  'lokasi3'=>$this->input->post('lokasi3'),
                  'lokasi4'=>$this->input->post('lokasi4'),
                  'lokasi5'=>$this->input->post('lokasi5'),
                  'lokasi6'=>$this->input->post('lokasi6'),
                  'lokasi7'=>$this->input->post('lokasi7'),
                  'lokasi8'=>$this->input->post('lokasi8'),
                  'lokasi9'=>$this->input->post('lokasi9'),
                  'lokasi10'=>$this->input->post('lokasi10'),
                  'lokasilainnya'=>$this->input->post('lokasilainnya'),
                  'bidanglain'=>$this->input->post('bidanglain'),

                  'anggota1'=>$this->input->post('anggota1'),
                  'anggota2'=>$this->input->post('anggota2'),
                  'anggota3'=>$this->input->post('anggota3'),
                  'anggota4'=>$this->input->post('anggota4'),
                  'anggota5'=>$this->input->post('anggota5'),
                  'anggota6'=>$this->input->post('anggota6'),
                  'anggota7'=>$this->input->post('anggota7'),
                  'anggota8'=>$this->input->post('anggota8'),
                  'anggota9'=>$this->input->post('anggota9'),
                  'anggota10'=>$this->input->post('anggota10'),

                  'statusijin'=>$this->input->post('statusijin'),
                  'verifikasi'=>$this->input->post('verifikasi'),
                  'nmsurat'=>$this->input->post('nmsurat'),
                  'tglawal'=>$this->input->post('tglawal'),
                  'tglakhir'=>$this->input->post('tglakhir'),
                  'notif'=>$this->input->post('notif'),



                );


                $this->m_app->insertData('tbl_ijin',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
          if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Permohonan Sukses Di Ajukan</div></div>");
                redirect('publikhome'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Permohonan Gagal , Coba Lagi !</div></div>");
                redirect('publikhome'); //jika gagal maka akan ditampilkan form upload
            }

}


    public function info(){


     $data=array(
            'title'=>'BKBPM : Layanan Perizinan Online',

        );

        $this->load->view('element/header_a',$data);
        $this->load->view('element/menu_a');
        $this->load->view('publik/v_permohonansppinfo');
        $this->load->view('element/footer_a');
    }



}
