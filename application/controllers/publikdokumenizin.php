<?php
class Publikdokumenizin extends CI_Controller{
  
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


   $jml = $this->db->get('tbl_fileorg');



   $config['base_url'] = base_url().'publikdokumenizin/index';

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

   $data['title'] = 'Data Dokumen ORMAS / LSM';
   $data['active_dokumenol'] = 'active';
   $data['kd_fileorg']= $this->m_app->getKodeFileorg();
   //$data['data_anggota'] = $this->m_app->getAllData('tbl_anggota');
   $data['ambil_fileizin'] = $this->m_app->ambil_fileizin($config['per_page'], $offset);
  
        $this->load->view('publik/v_dokumenizin',$data);
      
    }
    

  function hapus_data(){
        $id['kd_fileorg'] = $this->uri->segment(3);
        $this->m_app->deleteData('tbl_fileorg',$id);
        redirect("publikdokumenizin");
    }
    
       

    
//tambah dataijin//

public function add(){
        $this->load->library('upload');
        $nmfile = "izin_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './uploads/berkas/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '5048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                
                $gbr = $this->upload->data();
                $data = array(
                
                  'foto' =>$gbr['file_name'],
                  'kd_fileorg' => $this->input->post('kd_fileorg'),
                  'ket'=>$this->input->post('ket'),
                  'kd_user'=>$this->input->post('kd_user'),
                  'kategori'=>$this->input->post('kategori'),

                  
                );

                $this->m_app->insertData('tbl_fileorg',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Dokumen Berhasil Di Upload</div></div>");
                redirect('publikdokumenizin'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Dokumen Gagal Upload , Coba Lagi !</div></div>");
                redirect('publikdokumenizin'); //jika gagal maka akan ditampilkan form upload
            }
          }
} 
      

   


}
