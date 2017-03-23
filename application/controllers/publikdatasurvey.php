<?php
class Publikdatasurvey extends CI_Controller{

   function __construct(){
       parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
           redirect('home/login');
        };
       $this->load->model('m_app');
       $this->load->library('pagination');
       $this->load->helper(array('url','text','slug')); //load helper url
     }


public function index($offset=0){

   $jml = $this->db->get('tbl_ijin');



   $config['base_url'] = base_url().'pablikdatasurvey/index';

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

   $data['title'] = 'Data Survey : BKBPM Layanan Perizinan Online';
    $data['active_datasurvey'] = 'active';
    $data['notif_survey']=$this->m_app->countSurvey1('tbl_ijin');
    $data['notif_ormas']=$this->m_app->countOrmas1('tbl_ijin1');
    $data['pesan_survey']=$this->m_app->notifSurvey('tbl_ijin');
    $data['pesan_ormas1']=$this->m_app->notifOrmas1('tbl_ijin1');
    $data['pesan_ormas2']=$this->m_app->notifOrmas2('tbl_ijin1');
    $data['pesan_ormas3']=$this->m_app->notifOrmas3('tbl_ijin1');
    $data['count_pesanuser']=$this->m_app->countPesanuser('tbl_pesan');
    $data['ambil_datasurvey'] = $this->m_app->ambil_datasurvey($config['per_page'], $offset);
    $data['pesanuser']=$this->m_app->pesanUser('tbl_pesan');
    $data['notifgagal']=$this->m_app->countGagal('tbl_gagal');
    $data['pesangagal']=$this->m_app->pesanGagal('tbl_gagal');
    $data['notifsukses_survey'] = $this->m_app->notifSurveySukses('tbl_ijin');
    $data['datagagal']=$this->m_app->dataGagal('tbl_gagal');
    // 'notifsukses_survey' => $this->m_app->notifSurveySukses('tbl_ijin')
        $this->load->view('element/header-baru',$data);
        $this->load->view('element/menu-baru');
        $this->load->view('publik/v_datasurvey');
        $this->load->view('element/footer-baru');



}

    function lihatdata(){
        $id= $this->uri->segment(3);

        $data=array(
            'title'=>'Lihat Data Permohononan Anda',
            'active_datasurvey'=>'active',
            //'count_survey' => $this->m_app->countSurvey('tbl_ijin'),
            //'count_ormas' => $this->m_app->countOrmas('tbl_ijin1'),
            'dt_survey'=>$this->m_app->getDataSurvey($id),
            'notifgagal'=>$this->m_app->countGagal('tbl_gagal'),
            'notifsukses_survey' => $this->m_app->notifSurveySukses('tbl_ijin'),

        );

        $this->load->view('element/header-baru',$data);
        $this->load->view('element/menu-baru');
        $this->load->view('publik/v_printdatasurvey');
        $this->load->view('element/footer-baru');
    }



    function cetak_survey(){
      $id= $this->uri->segment(3);

        $data=array(
            'title'=>'Lihat Data Permohononan Anda',
            //'active_survey'=>'active',
            //'count_survey' => $this->m_app->countSurvey('tbl_ijin'),
            //'count_ormas' => $this->m_app->countOrmas('tbl_ijin1'),
            'dt_survey'=>$this->m_app->getDataSurvey($id),
            'datagagal'=>$this->m_app->dataGagal('tbl_gagal'),
            'notifsukses_survey' => $this->m_app->notifSurveySukses('tbl_ijin')

        );
         $this->load->view('publik/v_print_survey',$data);


        }

        public function read(){

                       $id['kd_ijin'] = $this->input->post('kd_ijin');
                       $data['notif']  = $this->input->post('notif');

                        $this->m_app->updateData('tbl_ijin',$data,$id);
                  if($data >= 1) {
                        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Permohonan Sukses Di Ajukan</div></div>");
                        redirect('publikdatasurvey'); //jika berhasil maka akan ditampilkan view vupload
                    }else{

                        //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Permohonan Gagal , Coba Lagi !</div></div>");
                        redirect('publikdatasurvey'); //jika gagal maka akan ditampilkan form upload
                    }

        }





}
