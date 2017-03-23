<?php
class Adminormas extends CI_Controller{

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



   $config['base_url'] = base_url().'adminsurvey/index';

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
   $data['active_ormas'] = 'active';
   //$data['kd_anggota']= $this->m_app->getKodeAnggota();
   //$data['data_ijin'] = $this->m_app->getAllData('tbl_indeks');
   $data['count_survey'] = $this->m_app->countSurvey('tbl_ijin');
   $data['count_ormas'] = $this->m_app->countOrmas('tbl_ijin1');
   $data['count_pesan'] = $this->m_app->countPesan('tbl_pesan');
   $data['count_adu'] = $this->m_app->countAdu('tbl_aduan');

   $data['ambil_ormas'] = $this->m_app->ambil_ormas($config['per_page'], $offset);

        $this->load->view('element/header_b',$data);
        $this->load->view('element/menu_b');
        $this->load->view('admin/v_ormas');
        $this->load->view('element/footer_a');

    }else{

    echo "<script>alert('Anda Harus Login Sebagai Admin!');</script>";
        redirect('home/#masuk');

   }

}

    function lihatdata(){
        $id= $this->uri->segment(3);

        $data=array(
            'title'=>'Lihat Data Permohononan',
            'active_ormas'=>'active',
            'count_survey' => $this->m_app->countSurvey('tbl_ijin'),
            'count_ormas' => $this->m_app->countOrmas('tbl_ijin1'),
            'dt_ormas'=>$this->m_app->getDataOrmas($id),

        );
        $this->load->view('element/header_b',$data);
        $this->load->view('element/menu_b');
        $this->load->view('admin/v_cekdataormas');
        $this->load->view('element/footer_a');
    }



  public function edit_data(){

               $id['kd_ijin1'] = $this->input->post('kd_ijin1');

               $data = array(

                  'kd_ijin1' => $this->input->post('kd_ijin1'),

                  'verifikasi'=>$this->input->post('verifikasi'),



                );


                $this->m_app->updateData('tbl_ijin1',$data,$id); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
          if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Permohonan Sukses Di Verifikasi</div></div>");
                redirect('adminormas'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Permohonan Gagal , Verifikasi !</div></div>");
                redirect('adminormas'); //jika gagal maka akan ditampilkan form upload
            }

  }


  function caridata() {



    $data['title'] = 'Cari : BKBPM Kota Bandung';
    $data['active_ormas'] = 'active';
    $data['get_ormas'] = $this->m_app->Getormaslsm();
    $data['count_survey'] = $this->m_app->countSurvey('tbl_ijin');
    $data['count_ormas'] = $this->m_app->countOrmas('tbl_ijin1');
    $data[ 'count_pesan'] = $this->m_app->countPesan('tbl_pesan');
    $data['count_adu'] = $this->m_app->countAdu('tbl_aduan');


        if($data['get_ormas']==null) {
              $this->load->view('element/header_b',$data);
              $this->load->view('element/menu_b');
             $this->load->view('admin/v_error');
             $this->load->view('element/footer_a');
           }
           else {
             $this->load->view('element/header_b',$data);
             $this->load->view('element/menu_b');
             $this->load->view('admin/v_adminhasilormas');
             $this->load->view('element/footer_a');

          }
     }



}
