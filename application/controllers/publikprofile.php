<?php
class Publikprofile extends CI_Controller{

   function __construct(){
       parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
           redirect('home/#masuk');
        };
       $this->load->model('m_app');
    }

   public function index(){
 if($this->session->userdata('LEVEL') =='admin') {

  $data=array(
            'title'=>'Pengaturan Profile Pengguna : BKBPM Kota Bandung',
            //'active_pengaduan'=>'active',
            //'kd_aduan'=>$this->m_app->getKodeAduan(),
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
        $this->load->view('publik/v_profile');
        $this->load->view('element/footer_a');


            }else{

            echo "<script>alert('Anda Harus Login Sebagai Admin!');</script>";
                redirect('home/#masuk');

           }

    }



    function cekuser(){
        $id= $this->uri->segment(3);

        $data=array(
            'title'=>'Data User',
            'notif_survey'=>$this->m_app->countSurvey1('tbl_ijin'),
            'notif_ormas'=>$this->m_app->countOrmas1('tbl_ijin1'),
            'pesan_survey'=>$this->m_app->notifSurvey('tbl_ijin'),
              'pesan_ormas1'=>$this->m_app->notifOrmas1('tbl_ijin1'),
              'pesan_ormas2'=>$this->m_app->notifOrmas2('tbl_ijin1'),
              'pesan_ormas3'=>$this->m_app->notifOrmas3('tbl_ijin1'),
          'data_profile'=>$this->m_app->ambil_profile($id),

        );
        $this->load->view('element/header_a',$data);
        $this->load->view('element/menu_a');
        $this->load->view('publik/v_cekuser');
        $this->load->view('element/footer_a');
    }

 function ubah() {

          $id['kd_user'] = $this->input->post('kd_user');

            $data=array(
              'email'=>$this->input->post('email'),
              'password'=>md5($this->input->post('password')),
              'nama'=>$this->input->post('nama'),
              'noktp'=>$this->input->post('noktp'),
              'username'=>$this->input->post('username'),
              'jeniskelamin' => $this->input->post('jeniskelamin'),
              'tempatlahir'=>$this->input->post('tempatlahir'),
              'tgllahir'=>$this->input->post('tgllahir'),
              'alamat'=>$this->input->post('alamat'),
              'rt'=>$this->input->post('rt'),
              'rw' => $this->input->post('rw'),
              'kelurahan'=>$this->input->post('kelurahan'),
              'kecamatan'=>$this->input->post('kecamatan'),
              'kota'=>$this->input->post('kota'),
              'agama'=>$this->input->post('agama'),
              'status'=>$this->input->post('status'),
              'pekerjaan'=>$this->input->post('pekerjaan'),
              'nohp'=>$this->input->post('nohp'),

        );
        $this->m_app->updateData('tbl_user',$data,$id);


         if($data >= 1) {
              $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" >Profile  Berhasil Di Ubah</div>");
               redirect('publikprofile/cekuser/'.$this->session->userdata('ID')); //jika berhasil maka akan ditampilkan view vupload
              }else{

              //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
              $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" >Gagal Coba Lagi!!</div>");
             redirect('publikprofile/cekuser/'.$this->session->userdata('ID'));
          }



    }



}
