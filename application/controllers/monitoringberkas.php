<?php
class Monitoringberkas extends CI_Controller{
   function __construct(){
       parent::__construct();

       $this->load->model('m_app');


      // $this->load->helper(array('text')); //load helper url


    }

   public function index(){


            // redirect them to the login page
            //redirect('auth/login', 'refresh');
            $data=array(
            'title'=>'Monitoring Berkas: BKBPM Layanan Perizinan Online',
            'active_berkas'=>'active',
            //'kd_user'=>$this->m_app->getKodeUser(),

            //'ambil_spp' => $this->m_app->ambil_spp('tbl_harga'),
             // 'ambil_paket4' => $this->m_app->ambil_paket4('tbl_harga'),
            //'data_berita'=>$this->m_app->getAllData('tbl_berita',),
        );
       //$data['data_berita'] = $this->m_app->getAllData('tbl_berita');


        $this->load->view('element/header',$data);       
        $this->load->view('v_monitoringberkas');
        $this->load->view('element/footer');


    }

  function carispp() {



   $data['title'] = 'Monitoring Berkas : BKBPM Kota Bandung';
   $data['active_berkas'] = 'active';
   $data['monitor_spp'] = $this->m_app->GetSpp();



       if($data['monitor_spp']==null) {
             $this->load->view('element/header2',$data);
            $this->load->view('v_error');
            $this->load->view('element/footer');
          }
          else {
            $this->load->view('element/header2',$data);
            $this->load->view('v_resultspp');
            $this->load->view('element/footer');

         }
    }

  function cariormas() {



   $data['title'] = 'Monitoring Berkas : BKBPM Kota Bandung';
   $data['active_berkas'] = 'active';
   $data['monitor_ormas'] = $this->m_app->GetOrmas();



       if($data['monitor_ormas']==null) {
             $this->load->view('element/header2',$data);
            $this->load->view('v_error');
            $this->load->view('element/footer');
          }
          else {
            $this->load->view('element/header2',$data);
            $this->load->view('v_resultormas');
            $this->load->view('element/footer');

         }
    }


}
