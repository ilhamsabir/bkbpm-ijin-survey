<?php
class publikdataormas extends CI_Controller{

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

   $jml = $this->db->get('tbl_ijin1');



   $config['base_url'] = base_url().'pablikdataormas/index';

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

   $data['title'] = 'ORMAS/LSM : BKBPM Layanan Perizinan Online';
   $data['active_dataormas'] = 'active';
    $data['notif_survey']=$this->m_app->countSurvey1('tbl_ijin');
    $data['notif_ormas']=$this->m_app->countOrmas1('tbl_ijin1');
    $data['pesan_survey']=$this->m_app->notifSurvey('tbl_ijin');
      $data['pesan_ormas1']=$this->m_app->notifOrmas1('tbl_ijin1');
      $data['pesan_ormas2']=$this->m_app->notifOrmas2('tbl_ijin1');
     $data['pesan_ormas3']=$this->m_app->notifOrmas3('tbl_ijin1');
      $data['count_pesanuser']=$this->m_app->countPesanuser('tbl_pesan');
   $data['ambil_dataormas'] = $this->m_app->ambil_dataormas($config['per_page'], $offset);

        $this->load->view('element/header_a',$data);
        $this->load->view('element/menu_a');
        $this->load->view('publik/v_dataormas');
        $this->load->view('element/footer_a');



}

    function lihatdata(){
        $id= $this->uri->segment(3);

        $data=array(
            'title'=>'Lihat Data Permohononan',
            'active_dataormas'=>'active',

            'dt_ormas'=>$this->m_app->getDataOrmas($id),

        );
        $this->load->view('element/header_a',$data);
        $this->load->view('element/menu_a');
        $this->load->view('publik/v_printdataormas');
        $this->load->view('element/footer_a');
    }


    function cetak_ormas(){
      $id= $this->uri->segment(3);

      $data=array(
          'title'=>'Lihat Data Permohononan Anda',
          //'active_survey'=>'active',
          //'count_survey' => $this->m_app->countSurvey('tbl_ijin'),
          //'count_ormas' => $this->m_app->countOrmas('tbl_ijin1'),
          'dt_ormas'=>$this->m_app->getDataOrmas($id),

      );
    $this->load->view('publik/v_print_ormas',$data);


        }




}
