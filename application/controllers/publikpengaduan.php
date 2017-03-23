<?php
class Publikpengaduan extends CI_Controller{

   function __construct(){
       parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
           redirect('home/#masuk');
        };
       $this->load->model('m_app');
       $this->load->library('pagination');
       $this->load->helper(array('url','text','slug')); //load helper url
    }

   public function index(){


  $data=array(
            'title'=>'Pengaduan : BKBPM Kota Bandung',
            'active_pengaduan'=>'active',
            'kd_aduan'=>$this->m_app->getKodeAduan(),
            'data_pesan'=>$this->m_app->getAllData('tbl_pesan'),
            'notif_survey'=>$this->m_app->countSurvey1('tbl_ijin'),
            'notif_ormas'=>$this->m_app->countOrmas1('tbl_ijin1'),
            'pesan_survey'=>$this->m_app->notifSurvey('tbl_ijin'),
              'pesan_ormas1'=>$this->m_app->notifOrmas1('tbl_ijin1'),
              'pesan_ormas2'=>$this->m_app->notifOrmas2('tbl_ijin1'),
              'pesan_ormas3'=>$this->m_app->notifOrmas3('tbl_ijin1'),

              'ambil_profileid'=>$this->m_app->ambil_profileid('tbl_user'),
              'count_pesanuser'=>$this->m_app->countPesanuser('tbl_pesan'),
              'getpesanuser'=>$this->m_app->getpesanuser('tbl_pesan'),

              'pesanuser'=>$this->m_app->pesanUser('tbl_pesan'),

              'notifgagal'=>$this->m_app->countGagal('tbl_gagal'),
              'pesangagal'=>$this->m_app->pesanGagal('tbl_gagal'),
              'datagagal'=>$this->m_app->dataGagal('tbl_gagal'),
              'notifsukses_survey' => $this->m_app->notifSurveySukses('tbl_ijin')
        );
       //$data['data_berita'] = $this->m_app->getAllData('tbl_berita');


        $this->load->view('element/header-baru',$data);
       $this->load->view('element/menu-baru');
        $this->load->view('publik/v_pengaduan');
        $this->load->view('element/footer-baru');
    }


 function add() {

       $this->load->library('upload');
        $nmfile = "aduan_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './uploads/gambar/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '20048'; //maksimum besar file 2M
        $config['max_width']  = '6288'; //lebar maksimum 1288 px
        $config['max_height']  = '7768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {

                $gbr = $this->upload->data();
                $data = array(

                  'foto' =>$gbr['file_name'],
                  'kd_aduan' => $this->input->post('kd_aduan'),
                  'pesan'=>$this->input->post('pesan'),
                  'kd_user'=>$this->input->post('kd_user'),
                  'tgladuan'=>$this->input->post('tgladuan'),

                );

                $this->m_app->insertData('tbl_aduan',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Dokumen Berhasil Di Upload</div></div>");
                redirect('publikpengaduan'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Dokumen Gagal Upload , Coba Lagi !</div></div>");
                redirect('publikpengaduan'); //jika gagal maka akan ditampilkan form upload
            }
          }else{

            $data=array(

                   'foto' =>$this->input->post('foto'),
                  'kd_aduan' => $this->input->post('kd_aduan'),
                  'pesan'=>$this->input->post('pesan'),
                  'kd_user'=>$this->input->post('kd_user'),
                  'tgladuan'=>$this->input->post('tgladuan'),

        );
        $this->m_app->insertData('tbl_aduan',$data);
         redirect('publikpengaduan');

        }

    }

    function getAlerts(){
      $id=$this->session->usedata('ID');
             $query = $this->db->query("SELECT * FROM tbl_pesan WHERE kd_user = '$id' and status ='1'");
             $result = $query->num_rows();

             if($result >= 1){

               return $result;
               echo $result;
             }
        }

}
