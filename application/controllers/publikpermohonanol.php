<?php
class Publikpermohonanol extends CI_Controller{

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
            'title'=>'BKBPM : Layanan Perizinan Online',
            'active_home'=>'active',
            'kd_ijin1'=>$this->m_app->getKodeIjin1(),
            'notif_survey'=>$this->m_app->countSurvey1('tbl_ijin'),
            'notif_ormas'=>$this->m_app->countOrmas1('tbl_ijin1'),
            'pesan_survey'=>$this->m_app->notifSurvey('tbl_ijin'),
              'pesan_ormas1'=>$this->m_app->notifOrmas1('tbl_ijin1'),
              'pesan_ormas2'=>$this->m_app->notifOrmas2('tbl_ijin1'),
              'pesan_ormas3'=>$this->m_app->notifOrmas3('tbl_ijin1'),
              'count_pesanuser'=>$this->m_app->countPesanuser('tbl_pesan'),
        );
       //$data['data_berita'] = $this->m_app->getAllData('tbl_berita');


        $this->load->view('element/header_a',$data);
        $this->load->view('element/menu_a');
        $this->load->view('publik/v_permohonanol');
        $this->load->view('element/footer_a');
    }




//tambah dataijin//

public function daftar(){


               $data = array(


                  'kd_ijin1' => $this->input->post('kd_ijin1'),
                  'kd_user'=>$this->input->post('kd_user'),
                  'tglajuan'=>$this->input->post('tglajuan'),
                  'jenisijin'=>$this->input->post('jenisijin'),

                  'nmorganisasi'=>$this->input->post('nmorganisasi'),
                  'bidang'=>$this->input->post('bidang'),
                  'ruanglingkup'=>$this->input->post('ruanglingkup'),
                  'alamatkantor'=>$this->input->post('alamatkantor'),
                  'tmptpendirian'=>$this->input->post('tmptpendirian'),
                  'asas'=>$this->input->post('asas'),
                  'namapendiri'=>$this->input->post('namapendiri'),
                  'namapembina'=>$this->input->post('namapembina'),
                  'namapenasehat' =>$this->input->post('namapenasehat'),

                  'namaketua' =>$this->input->post('namaketua'),
                  'gelarketua' =>$this->input->post('gelarketua'),
                  'panggilketua' =>$this->input->post('panggilketua'),
                  'tmptlahirketua' =>$this->input->post('tmptlahirketua'),
                  'tgllahirketua' =>$this->input->post('tgllahirketua'),
                  'pendketua' =>$this->input->post('pendketua'),
                  'agamaketua' =>$this->input->post('agamaketua'),
                  'jkketua' =>$this->input->post('jkketua'),
                  'hpketua' =>$this->input->post('hpketua'),
                  'emailketua' =>$this->input->post('emailketua'),

                  'namasekretaris' =>$this->input->post('namasekretaris'),
                  'gelarsekretaris' =>$this->input->post('gelarsekretaris'),
                  'panggilsekretaris' =>$this->input->post('panggilsekretaris'),
                  'tmptlahirsekretaris' =>$this->input->post('tmptlahirsekretaris'),
                  'tgllahirsekretaris' =>$this->input->post('tgllahirsekretaris'),
                  'pendsekretaris' =>$this->input->post('pendsekretaris'),
                  'agamasekretaris' =>$this->input->post('agamasekretaris'),
                  'jksekretaris' =>$this->input->post('jksekretaris'),
                  'hpsekretaris' =>$this->input->post('hpsekretaris'),
                  'emailsekretaris' =>$this->input->post('emailsekretaris'),

                  'namabendahara' =>$this->input->post('namabendahara'),
                  'gelarbendahara' =>$this->input->post('gelarbendahara'),
                  'panggilbendahara' =>$this->input->post('panggilbendahara'),
                  'tmptlahirbendahara' =>$this->input->post('tmptlahirbendahara'),
                  'tgllahirbendahara' =>$this->input->post('tgllahirbendahara'),
                  'pendbendahara' =>$this->input->post('pendbendahara'),
                  'agamabendahara' =>$this->input->post('agamabendahara'),
                  'jksekretaris' =>$this->input->post('jkbendaharas'),
                  'hpbendahara' =>$this->input->post('hpbendahara'),
                  'emailbendahara' =>$this->input->post('emailbendahara'),

                   //'' =>$this->input->post(''),
                   'masabakti' =>$this->input->post('masabakti'),
                   'keputusantertinggi' =>$this->input->post('keputusantertinggi'),
                   'unit' =>$this->input->post('unit'),
                   'usaha' =>$this->input->post('usaha'),
                   'sumber' =>$this->input->post('sumber'),
                   'lambang' =>$this->input->post('lambang'),
                   'bendera' =>$this->input->post('bendera'),
                   'akteorganisasi' =>$this->input->post('akteorganisasi'),
                   'adartorganisasi' =>$this->input->post('adartorganisasi'),
                   'tujuanorganisasi' =>$this->input->post('tujuanorganisasi'),
                   'skorganisasi' =>$this->input->post('skorganisasi'),
                   'ktporganisasi' =>$this->input->post('ktporganisasi'),
                   'domisiliorganisasi' =>$this->input->post('domisiliorganisasi'),
                   'npwporganisasi' =>$this->input->post('npwporganisasi'),
                   'fotokantor' =>$this->input->post('fotokantor'),
                   'izinkantor' =>$this->input->post('izinkantor'),

                   'verifikasi' =>$this->input->post('verifikasi'),

                   //'' =>$this->input->post(''),





                );

                $this->m_app->insertData('tbl_ijin1',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
          if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Permohonan Sukses Di Ajukan</div></div>");
                redirect('publikpermohonanol/info'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Permohonan Gagal , Coba Lagi !</div></div>");
                redirect('publikpermohonanol/info'); //jika gagal maka akan ditampilkan form upload
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
