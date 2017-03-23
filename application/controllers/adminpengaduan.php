<?php
class Adminpengaduan extends CI_Controller{

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


public function index($offset=0){

 if($this->session->userdata('LEVEL') =='admin') {


   $jml = $this->db->get('tbl_aduan');



   $config['base_url'] = base_url().'adminpengaduan/index';

   $config['total_rows'] = $jml->num_rows();
   $config['per_page'] = 10; /*Jumlah data yang dipanggil perhalaman*/
   $config['uri_segment'] = 3;  /*data selanjutnya di parse diurisegmen 3*/

   /*Class bootstrap pagination yang digunakan*/
   $config['full_tag_open'] = "<ul class='pagination pagination-sm'>";
   $config['full_tag_close'] ="</ul>";
   $config['num_tag_open'] = "<li>";
   $config['num_tag_close'] = "</li>";
   $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
   $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
   $config['next_tag_open'] = "<li>";
   $config['next_tagl_close'] = "</li>";
   $config['prev_tag_open'] = "<li>";
   $config['prev_tagl_close'] = "</li>";
   $config['first_tag_open'] = "<li>";
   $config['first_tagl_close'] = "</li>";
   $config['last_tag_open'] = "<li>";
   $config['last_tagl_close'] = "</li>";

   $this->pagination->initialize($config);

   $data['halaman'] = $this->pagination->create_links();
   /*membuat variable halaman untuk dipanggil di view nantinya*/
   $data['offset'] = $offset;

   $data['title'] = 'Pengaduan : BKBPM Layanan Perizinan Online';
   $data['active_pengaduan'] = 'active';
   $data['kd_pesan']= $this->m_app->getKodePesan();
   $data['data_aduan'] = $this->m_app->getDetailAduan('tbl_aduan');
   $data['count_survey'] = $this->m_app->countSurvey('tbl_ijin');
   $data['count_ormas'] = $this->m_app->countOrmas('tbl_ijin1');
   $data['count_pesan'] = $this->m_app->countPesan('tbl_pesan');
   $data['count_adu'] = $this->m_app->countAdu('tbl_aduan');

   $data['ambil_aduan'] = $this->m_app->ambil_aduan($config['per_page'], $offset);

        $this->load->view('element/new/header-admin',$data);
        $this->load->view('element/new/menu-admin');
        $this->load->view('admin/v_pengaduan');
        $this->load->view('element/new/footer-admin');

    }else{

    echo "<script>alert('Anda Harus Login Sebagai Admin!');</script>";
        redirect('login');

   }

}

    function lihatdata(){
        $id= $this->uri->segment(3);

        $data=array(
            'title'=>'Balas Data Aduan',
            'active_survey'=>'active',
            'count_survey' => $this->m_app->countSurvey('tbl_ijin'),
            'count_ormas' => $this->m_app->countOrmas('tbl_ijin1'),
            'dt_aduan'=>$this->m_app->getDetailAduan($id),

        );
        $this->load->view('element/header_b',$data);
        $this->load->view('element/menu_b');
        $this->load->view('admin/v_cekdataaduan');
        $this->load->view('element/footer_a');
    }

     public function ubahbaca(){

       $id['kd_aduan'] = $this->input->post('kd_aduan');
                  $data  = array(
                   'baca'=>$this->input->post('baca'),

                  );

                  $this->m_app->updateData('tbl_aduan',$data,$id); //akses model untuk menyimpan ke database
                  redirect('adminpengaduan'); //jika gagal maka akan ditampilkan form upload
      }

     public function addpesan(){

                $data  = array(
                 'kd_pesan' => $this->input->post('kd_pesan'),
                 'kd_user' => $this->input->post('kd_user'),
                 'kd_aduan' => $this->input->post('kd_aduan'),
                 'isipesan'=>$this->input->post('isipesan'),
                 'status'=>$this->input->post('status'),
                 'tglpesan'=>$this->input->post('tglpesan'),
                 'notif'=>$this->input->post('notif'),


                );


                $this->m_app->insertData('tbl_pesan',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
          if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pesan terkirim </div></div>");
                redirect('adminpengaduan'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal coba lagi !</div></div>");
                redirect('adminpengaduan'); //jika gagal maka akan ditampilkan form upload
            }

  }


}
