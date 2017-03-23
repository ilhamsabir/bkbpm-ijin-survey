<?php
class Adminotorisasi extends CI_Controller{

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




   $data['title'] = 'Otorisasi : BKBPM Layanan Perizinan Online';
   $data['active_otorisasi'] = 'active';
   $data['kd_otorisasi']= $this->m_app->getKodeOtorisasi();
   //$data['kd_anggota']= $this->m_app->getKodeAnggota();
   //$data['data_ijin'] = $this->m_app->getAllData('tbl_indeks');
   $data['count_survey'] = $this->m_app->countSurvey('tbl_ijin');
   $data['count_ormas'] = $this->m_app->countOrmas('tbl_ijin1');
   $data['count_pesan'] = $this->m_app->countPesan('tbl_pesan');
   $data['count_adu'] = $this->m_app->countAdu('tbl_aduan');
   $data['data_otorisasi'] = $this->m_app->getAllData('tbl_otorisasi');


        $this->load->view('element/new/header-admin',$data);
        $this->load->view('element/new/menu-admin');
        $this->load->view('admin/v_otorisasi');
        $this->load->view('element/new/footer-admin');

    }else{

    echo "<script>alert('Anda Harus Login Sebagai Admin!');</script>";
        redirect('home/#masuk');

   }

}

function hapus_data(){
      $id['kd_otorisasi'] = $this->uri->segment(3);
      $this->m_app->deleteData('tbl_otorisasi',$id);
      redirect("adminotorisasi");
  }





//tambah data berita //

public function add(){

              $data = array(

                'foto' =>$this->input->post('foto'),
                'kd_otorisasi' => $this->input->post('kd_otorisasi'),
                'namaka'=>$this->input->post('namaka'),
                'nip'=>$this->input->post('nip'),
                'jabatan'=>$this->input->post('jabatan'),
                'status'=>$this->input->post('status'),



              );

              $this->m_app->insertData('tbl_otorisasi',$data); //akses model untuk menyimpan ke database
              //pesan yang muncul jika berhasil diupload pada session flashdata
              $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Daa Berhasil Ditambahkan !!</div></div>");
              redirect('adminotorisasi'); //jika berhasil maka akan ditampilkan view vupload



  }


//end tambah data berita//


  public function update(){
      $this->load->library('upload');
      $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './uploads/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
      $config['max_size'] = '2048'; //maksimum besar file 2M
      $config['max_width']  = '1288'; //lebar maksimum 1288 px
      $config['max_height']  = '768'; //tinggi maksimu 768 px
      $config['file_name'] = $nmfile; //nama yang terupload nantinya

      $this->upload->initialize($config);

      if($_FILES['filefoto']['name'])
      {
          if ($this->upload->do_upload('filefoto'))
          {
              $id['kd_otorisasi'] = $this->input->post('kd_otorisasi');
              $gbr = $this->upload->data();
              $data = array(
                'foto' =>$gbr['file_name'],
                'nama'=>$this->input->post('nama'),
                'nip'=>$this->input->post('nip'),
                'jabatan'=>$this->input->post('jabatan'),
                'status'=>$this->input->post('status'),


              );

              $this->m_app->updateData('tbl_otorisasi',$data,$id); //akses model untuk menyimpan ke database
              //pesan yang muncul jika berhasil diupload pada session flashdata
              $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\">Berhasil Edit !!</div>");
              redirect('adminotorisasi'); //jika berhasil maka akan ditampilkan view vupload
          }else{

              //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
              $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\">Gagal Edit  !!</div>");
              redirect('adminotorisasi'); //jika gagal maka akan ditampilkan form upload
          }

        }else{

          $id['kd_otorisasi'] = $this->input->post('kd_otorisasi');
          $data=array(

            'nama'=>$this->input->post('nama'),
            'nip'=>$this->input->post('nip'),
            'jabatan'=>$this->input->post('jabatan'),
            'status'=>$this->input->post('status'),
      );
      $this->m_app->updateData('tbl_otorisasi',$data,$id);
      redirect("adminotorisasi");

      }
  }

}
