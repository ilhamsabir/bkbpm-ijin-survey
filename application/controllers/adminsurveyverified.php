<?php
class Adminsurveyverified extends CI_Controller{

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


   $jml = $this->db->get('tbl_ijin');



   $config['base_url'] = base_url().'adminsurveyverified/index';

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

   $data['title'] = 'Survey : BKBPM Layanan Perizinan Online';
   $data['active_survey'] = 'active';
   $data['tab_survey2'] = 'active';
   //$data['kd_anggota']= $this->m_app->getKodeAnggota();
   //$data['data_ijin'] = $this->m_app->getAllData('tbl_indeks');
   $data['count_survey'] = $this->m_app->countSurvey('tbl_ijin');
   $data['count_ormas'] = $this->m_app->countOrmas('tbl_ijin1');
   $data['count_pesan'] = $this->m_app->countPesan('tbl_pesan');
   $data['count_adu'] = $this->m_app->countAdu('tbl_aduan');
   $data['semua_user']=$this->m_app->getAllData('tbl_user');

   $data['ambil_ijin1'] = $this->m_app->ambil_ijin1($config['per_page'], $offset);

        $this->load->view('element/new/header-admin',$data);
        $this->load->view('element/new/menu-admin');
        $this->load->view('admin/v_surveyverified');
        $this->load->view('element/new/footer-admin');

    }else{

    echo "<script>alert('Anda Harus Login Sebagai Admin!');</script>";
        redirect('home/#masuk');

   }

}




}
