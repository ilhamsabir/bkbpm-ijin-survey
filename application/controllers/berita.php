<?php
class Berita extends CI_Controller{
   function __construct(){
       parent::__construct();

       $this->load->model('m_app');
       $this->load->library('pagination');
       $this->load->helper(array('url','text','slug')); //load helper url


      // $this->load->helper(array('text')); //load helper url


    }

  public function index($offset=0){


  $jml = $this->db->get('tbl_berita');



  $config['base_url'] = base_url().'berita/index';
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

  $data['title'] = 'Berita Layanan Perizinan OnlineBKBPM Kota Bandung';
  $data['active_berita'] = 'active';
  //$data['kd_berita']= $this->m_app->getKodeBerita();
  $data['data_berita'] = $this->m_app->getAllData('tbl_berita');
  $data['ambil_beritadepan'] = $this->m_app->ambil_beritadepan($config['per_page'], $offset);

        $this->load->view('element/header2',$data);
        $this->load->view('v_semuaberita');
        $this->load->view('element/footer');


    }

    function archieve(){
        $id= $this->uri->segment(3);
        $data=array(
            'title'=>'Berita BKBPM Kota Bandung',
            'active_survey'=>'active',
            'dt_berita'=>$this->m_app->getDataBerita($id),

        );
        $this->load->view('element/header2',$data);
        //$this->load->view('element/menu_b');
        $this->load->view('v_detailberita');
        $this->load->view('element/footer');
    }


}
