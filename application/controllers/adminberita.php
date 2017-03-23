<?php
class Adminberita extends CI_Controller{

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


   $jml = $this->db->get('tbl_berita');



   $config['base_url'] = base_url().'adminberita/index';

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

   $data['title'] = 'Berita : BKBPM Layanan Perizinan Online';
   $data['active_berita'] = 'active';
   $data['kd_berita']= $this->m_app->getKodeBerita();
   //$data['kd_anggota']= $this->m_app->getKodeAnggota();
   //$data['data_ijin'] = $this->m_app->getAllData('tbl_indeks');
   $data['count_survey'] = $this->m_app->countSurvey('tbl_ijin');
   $data['count_ormas'] = $this->m_app->countOrmas('tbl_ijin1');
   $data['count_pesan'] = $this->m_app->countPesan('tbl_pesan');
   $data['count_adu'] = $this->m_app->countAdu('tbl_aduan');
   $data['data_berita'] = $this->m_app->getAllData('tbl_berita');
   $data['ambil_berita'] = $this->m_app->ambil_berita($config['per_page'], $offset);

        $this->load->view('element/header_b',$data);
        $this->load->view('element/menu_b');
        $this->load->view('admin/v_berita');
        $this->load->view('element/footer_a');

    }else{

    echo "<script>alert('Anda Harus Login Sebagai Admin!');</script>";
        redirect('home/#masuk');

   }

}

function hapus_data(){
      $id['kd_berita'] = $this->uri->segment(3);
      $this->m_app->deleteData('tbl_berita',$id);
      redirect("adminberita");
  }





//tambah data berita //

public function add(){
      $this->load->library('upload');
      $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './uploads/berita'; //path folder
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

              $gbr = $this->upload->data();
              $data = array(

                'foto' =>$gbr['file_name'],
                'kd_berita' => $this->input->post('kd_berita'),
                'j_berita'=>$this->input->post('j_berita'),
                'isi_b'=>$this->input->post('isi_b'),
                'tgl_b'=>$this->input->post('tgl_b'),
                'kategori_b'=>$this->input->post('kategori_b'),
                'slug_berita' => slug($this->input->post('j_berita')),


              );

              $this->m_app->insertData('tbl_berita',$data,$id); //akses model untuk menyimpan ke database
              //pesan yang muncul jika berhasil diupload pada session flashdata
              $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berita Berhasil Ditambahkan !!</div></div>");
              redirect('adminberita'); //jika berhasil maka akan ditampilkan view vupload
          }else{

              //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
              $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal Tambah Berita , Coba Kagi !!</div></div>");
              redirect('adminberita'); //jika gagal maka akan ditampilkan form upload
          }

      }
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
              $id['kd_berita'] = $this->input->post('kd_berita');
              $gbr = $this->upload->data();
              $data = array(
                'foto' =>$gbr['file_name'],
                'j_berita'=>$this->input->post('j_berita'),
                'isi_b'=>$this->input->post('isi_b'),
                'tgl_b'=>$this->input->post('tgl_b'),
                'kategori_b'=>$this->input->post('kategori_b'),
                'slug_berita' => slug($this->input->post('j_berita')),


              );

              $this->m_app->updateData('tbl_berita',$data,$id); //akses model untuk menyimpan ke database
              //pesan yang muncul jika berhasil diupload pada session flashdata
              $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\">Berhasil Edit Berita !!</div>");
              redirect('adminberita'); //jika berhasil maka akan ditampilkan view vupload
          }else{

              //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
              $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\">Gagal Edit Berita !!</div>");
              redirect('adminberita'); //jika gagal maka akan ditampilkan form upload
          }

        }else{

          $id['kd_berita'] = $this->input->post('kd_berita');
          $data=array(

                'j_berita'=>$this->input->post('j_berita'),
                'isi_b'=>$this->input->post('isi_b'),
                'tgl_b'=>$this->input->post('tgl_b'),
                'kategori_b'=>$this->input->post('kategori_b'),
                //'oleh_b'=>$this->input->post('oleh_b'),
               'slug_berita' => slug($this->input->post('j_berita')),

      );
      $this->m_app->updateData('tbl_berita',$data,$id);
      redirect("adminberita");

      }
  }

}
