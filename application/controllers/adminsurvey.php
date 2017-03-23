<?php
class Adminsurvey extends CI_Controller{

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

   $data['title'] = 'Survey : BKBPM Layanan Perizinan Online';
   $data['active_survey'] = 'active';
   $data['tab_survey1'] = 'active';
   $data['kd_gagal']= $this->m_app->getKodeGagal();
   //$data['data_ijin'] = $this->m_app->getAllData('tbl_indeks');
   $data['count_survey'] = $this->m_app->countSurvey('tbl_ijin');
   $data['count_ormas'] = $this->m_app->countOrmas('tbl_ijin1');
   $data['count_pesan'] = $this->m_app->countPesan('tbl_pesan');
   $data['count_adu'] = $this->m_app->countAdu('tbl_aduan');
   $data['semua_user']=$this->m_app->getAllData('tbl_user');

   $data['ambil_ijin'] = $this->m_app->ambil_ijin($config['per_page'], $offset);
   $data['ambil_ijin1'] = $this->m_app->ambil_ijin1($config['per_page'], $offset);

        $this->load->view('element/new/header-admin',$data);
        $this->load->view('element/new/menu-admin');
        $this->load->view('admin/v_survey');
        $this->load->view('element/new/footer-admin');

    }else{

    echo "<script>alert('Anda Harus Login Sebagai Admin!');</script>";
        redirect('home/login');

   }

}

    function lihatdata(){
        $id = $this->uri->segment(3);
		    $d = $this->input->post('kd_ijin');

        $data=array(
            'title'=>'Lihat Data Permohononan',
            'active_survey'=>'active',
            'count_survey' => $this->m_app->countSurvey('tbl_ijin'),
            'count_ormas' => $this->m_app->countOrmas('tbl_ijin1'),
            'count_pesan' => $this->m_app->countPesan('tbl_pesan'),
            'count_adu' => $this->m_app->countAdu('tbl_aduan'),
            'dt_survey'=>$this->m_app->getDataSurvey($id),
            'data_otorisasi'=>$this->m_app->getAllData('tbl_otorisasi'),
             'kd_gagal'=> $this->m_app->getKodeGagal(),
             'semuaijin'=>$this->m_app->getAllData('tbl_ijin'),
             

        );
        $this->load->view('element/new/header-admin',$data);
        $this->load->view('element/new/menu-admin');
        $this->load->view('admin/v_cekdatasurvey');
        $this->load->view('element/new/footer-admin');
    }



  public function edit_data(){

               $id['kd_ijin'] = $this->input->post('kd_ijin');

               $data = array(

                  'kd_ijin' => $this->input->post('kd_ijin'),
                  'tglawal'=>$this->input->post('tglawal'),
                  'tglakhir'=>$this->input->post('tglakhir'),
                  'verifikasi'=>$this->input->post('verifikasi'),
                  'kd_otorisasi'=>$this->input->post('kd_otorisasi'),



                );


                $this->m_app->updateData('tbl_ijin',$data,$id); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
          if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Permohonan Sukses Di Verifikasi</div></div>");

				//redirect($this->uri->uri_string());
				redirect('adminsurveyverified'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Permohonan Gagal , Verifikasi !</div></div>");
                redirect('adminsurveyverified'); //jika gagal maka akan ditampilkan form upload
            }

  }

  function caridata() {



    $data['title'] = 'Cari : BKBPM Kota Bandung';
    $data['active_survey'] = 'active';
    $data['get_spp'] = $this->m_app->Getijin();
    $data['count_survey'] = $this->m_app->countSurvey('tbl_ijin');
    $data['count_ormas'] = $this->m_app->countOrmas('tbl_ijin1');
    $data[ 'count_pesan'] = $this->m_app->countPesan('tbl_pesan');
    $data['count_adu'] = $this->m_app->countAdu('tbl_aduan');


        if($data['get_spp']==null) {
              $this->load->view('element/new/header-admin',$data);
              $this->load->view('element/new/menu-admin');
             $this->load->view('admin/v_error');
             $this->load->view('element/new/footer-admin');
           }
           else {
             $this->load->view('element/new/header-admin',$data);
             $this->load->view('element/new/menu-admin');
             $this->load->view('admin/v_adminhasilsurvey');
             $this->load->view('element/new/footer-admin');

          }
     }

     function hapus_data(){
       $id['kd_ijin'] = $this->uri->segment(3);
       $this->m_app->deleteData('tbl_ijin',$id);
       redirect("adminsurvey");
   }

     function lihat_sktsurvey(){
         $id= $this->uri->segment(3);
         $data=array(
             'title'=>'Lihat Data Permohononan',
             'active_survey'=>'active',
             'count_survey' => $this->m_app->countSurvey('tbl_ijin'),
             'count_ormas' => $this->m_app->countOrmas('tbl_ijin1'),
             'count_pesan' => $this->m_app->countPesan('tbl_pesan'),
             'count_adu' => $this->m_app->countAdu('tbl_aduan'),
             'user_data'=>$this->m_app->userData('tbl_user'),
             'data_otorisasi'=>$this->m_app->getAllData('tbl_otorisasi'),
             'dt_survey'=>$this->m_app->getDataSurvey($id),


         );
         $this->load->view('element/new/header-admin',$data);
         $this->load->view('element/new/menu-admin');
         $this->load->view('admin/v_lihat_sktsurvey');
         $this->load->view('element/new/footer-admin');
     }




  function cetak_sktsurvey(){
       $id= $this->uri->segment(3);
         $data=array(
             'title'=>'',
             'dt_survey'=>$this->m_app->getDataSurvey($id),
              'user_data'=>$this->m_app->userData('tbl_user'),
             'data_otorisasi'=>$this->m_app->getAllData('tbl_otorisasi'),
         );
          //$this->load->view('admin/v_print_sktsurvey',$data);
          $this->load->view('admin/v_sktprint2',$data);


         }

         function cetak_surveylampiran(){
              $id= $this->uri->segment(3);
                $data=array(
                    'title'=>'',
                    'dt_survey'=>$this->m_app->getDataSurvey($id),
                );
                 //$this->load->view('admin/v_print_sktsurvey',$data);
                 $this->load->view('admin/v_surveylampiran',$data);

            }

      public function gagalverifikasi(){

            $data = array(
              'kd_gagal' => $this->input->post('kd_gagal'),
              'kd_user'=>$this->input->post('kd_user'),
              'kd_ijin'=>$this->input->post('kd_ijin'),
              'isigagal'=>$this->input->post('isigagal'),
              'status'=>$this->input->post('status'),
              'tglkirim'=>$this->input->post('tglkirim'),
            );

            $this->m_app->insertData('tbl_gagal',$data);
            redirect('adminsurvey');
        }

        function lihat_biodata(){
            $id= $this->uri->segment(3);
            $data=array(
                'title'=>'Lihat Biodata Permohononan',
                'active_survey'=>'active',
                'count_survey' => $this->m_app->countSurvey('tbl_ijin'),
                'count_ormas' => $this->m_app->countOrmas('tbl_ijin1'),
                'count_pesan' => $this->m_app->countPesan('tbl_pesan'),
                'count_adu' => $this->m_app->countAdu('tbl_aduan'),
                'user_data'=>$this->m_app->userData('tbl_user'),
                'data_otorisasi'=>$this->m_app->getAllData('tbl_otorisasi'),
                'dt_survey'=>$this->m_app->getDataSurvey($id),
                'semua_user'=>$this->m_app->getAllData('tbl_user'),


            );
            $this->load->view('element/new/header-admin',$data);
            $this->load->view('element/new/menu-admin');
            $this->load->view('admin/v_lihat_biodata');
            $this->load->view('element/new/footer-admin');
        }

        function cetak_biodata(){
             $id= $this->uri->segment(3);

               $data=array(
                   'title'=>'',
                   'dt_survey'=>$this->m_app->getDataSurvey($id),
                    'user_data'=>$this->m_app->userData('tbl_user'),
                   'data_otorisasi'=>$this->m_app->getAllData('tbl_otorisasi'),
                   'cetak_user'=>$this->m_app->userBiodata($id),
               );
                //$this->load->view('admin/v_print_sktsurvey',$data);
                $this->load->view('admin/v_biodataprint',$data);


               }

}
