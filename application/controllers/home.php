<?php
class Home extends CI_Controller{
   function __construct(){
       parent::__construct();
       $this->load->model('m_app');
    }

   public function index(){
        $data=array(
            'title'=>'Layanan Perizinan Online',
            'active_home'=>'active'
        );
        $this->load->view('element/header',$data);
        $this->load->view('v_home');
        $this->load->view('element/footer');
    }

    public function daftar(){
      $data=array(
          'title'=>'Daftar',
          'active_daftar'=>'active',
          'kd_user'=>$this->m_app->getKodeUser(),
      );
      $this->load->view('element/header',$data);
      $this->load->view('v_daftar');
      $this->load->view('element/footer');
    }

    function prosesDaftar() {
          $data = array(
            'kd_user' => $this->input->post('kd_user'),
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password')),
            'nama'=>$this->input->post('nama'),
            'noktp'=>$this->input->post('noktp'),
            // 'username'=>$this->input->post('username'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
            'tempatlahir'=>$this->input->post('tempatlahir'),
            'tgllahir'=>$this->input->post('tgllahir'),
            'alamat'=>$this->input->post('alamat'),
            'rt'=>$this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'kelurahan'=>$this->input->post('kelurahan'),
            'kecamatan'=>$this->input->post('kecamatan'),
            'kota'=>$this->input->post('kota'),
            'agama'=>$this->input->post('agama'),
            'status'=>$this->input->post('status'),
            'pekerjaan'=>$this->input->post('pekerjaan'),
            'nohp'=>$this->input->post('nohp'),
            'level'=>$this->input->post('level'),
          );

          $this->m_app->insertData('tbl_user',$data);
          if($data >= 1) {
              $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" >Pendaftaran Berhasil , Silahkan Login Menggunakan Username dan Password Anda ! !!</div>");
              redirect('home/login'); //jika berhasil maka akan ditampilkan view vupload
              }else{
              //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
              $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" >Pendaftaran Gagal Coba Lagi!!</div>");
              redirect('home/login');
          }
    }

    public function login() {
      $data=array(
          'title'=>'Login',
          'active_login'=>'active',
          // 'kd_user'=>$this->m_app->getKodeUser()
      );
      $this->load->view('element/header',$data);
      $this->load->view('v_login');
      $this->load->view('element/footer');
    }

    function cek_login() {
       //Field validation succeeded.  Validate against database
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        //query the database
        $result = $this->m_app->login($email, $password);
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                //create the session
                $sess_array = array(
                    'ID' => $row->kd_user,
                    'EMAIL' => $row->email,
                    // 'USERNAME'=>$row->username,
                    'PASS'=>$row->password,
                    'NAME'=>$row->nama,
                    'LEVEL' => $row->level,
                    'HP'=>$row->nohp,
                    'login_status'=>true,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);
                redirect('publikhome','refresh');
            }
            return TRUE;
        } else {
            //if form validate false
            redirect('home/login','refresh');
            return FALSE;
        }
    }

    function logout() {
        $this->session->unset_userdata('ID');
        $this->session->unset_userdata('EMAIL');
        $this->session->unset_userdata('PASS');
        $this->session->unset_userdata('NAME');
        $this->session->unset_userdata('LEVEL');
         $this->session->unset_userdata('NOHP');
        $this->session->unset_userdata('login_status');
        $this->session->set_flashdata('notif','THANK YOU FOR LOGIN IN THIS APP');
        redirect('/');
    }

   public function lupa_pass(){


            // redirect them to the login page
            //redirect('auth/login', 'refresh');
            $data=array(
            'title'=>'BKBPM : Layanan Perizinan Online',
            'active_home'=>'active',
            'kd_user'=>$this->m_app->getKodeUser(),

             // 'ambil_paket3' => $this->m_app->ambil_paket3('tbl_harga'),
             // 'ambil_paket4' => $this->m_app->ambil_paket4('tbl_harga'),
            //'data_berita'=>$this->m_app->getAllData('tbl_berita',),
        );
       //$data['data_berita'] = $this->m_app->getAllData('tbl_berita');


        $this->load->view('element/header2',$data);

        $this->load->view('v_lupapass');
        $this->load->view('element/footer');


    }

  public function kirim_pass(){

        //passing post data dari view
    $this->load->helper(array('form', 'url'));
    $email = $this->input->post('email');


    $encrypted_id = md5($email);

    $this->load->library('email');
    $config = array();
    $config['charset'] = 'utf-8';
    $config['useragent'] = 'Perizinan BKBPM Kota Bandung';
    $config['protocol']= "smtp";
    $config['mailtype']= "html";
    $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
    $config['smtp_port']= "465";
    $config['smtp_timeout']= "400";
    $config['smtp_user']= "bandungbkbpm@gmail.com"; // isi dengan email kamu
    $config['smtp_pass']= "06091991"; // isi dengan password kamu
    $config['crlf']="\r\n";
    $config['newline']="\r\n";
    $config['wordwrap'] = TRUE;
    //memanggil library email dan set konfigurasi untuk pengiriman email

    $this->email->initialize($config);
    //konfigurasi pengiriman
    $this->email->from($config['smtp_user']);
    $this->email->to($email);
    $this->email->subject("Reset Password");
    $this->email->message(
     "Silahkan Klik Link Untuk Mengganti Password Anda<br><br>".
      site_url("home/verifikasi/$encrypted_id")
    );

    if($this->email->send())
    {
       echo "Berhasil Kirim Verifikasi Ke Email $email";
    }else
    {
       echo "Gagal mengirim verifikasi email";
    }

    echo "<br><br><a href='".site_url("/")."'>Kembali Laman Utama</a>";
    }

   /* public function verification($key){}
      //$this->load->helper('url');
     // $this->load->model('m_app');
     // $this->m_register->changeActiveState($key);
         //  echo "Selamat kamu telah memverifikasi akun kamu";
         //  echo "<br><br><a href='".site_url("login")."'>Kembali ke Menu Login</a>";



        $key['emai)'] = $this->uri->segment(3);
        $data=array(
            'kd_user' => $this->input->post('kd_user'),

            'password'=>md5($this->input->post('password')),
        );
        $this->model_app->updateData('tbl_user',$data,$key);
        redirect("/");

     }*/

     public function verifikasi(){

        $key = $this->uri->segment(3);
        $data=array(
            'title'=>'Ganti Password',
            'active_ganti'=>'active',
            'ambil_pass'=>$this->m_app->ambil_pass($key),

             );
        $this->load->view('element/header2',$data);
        $this->load->view('v_gantipass');
        $this->load->view('element/footer');


     }

     public function ganti_pass(){

        $id['email'] = $this->input->post('email');
        $data=array(
             'kd_user' => $this->input->post('kd_user'),

            'password'=>md5($this->input->post('password')),
            );
        $this->m_app->updateData('tbl_user',$data,$id);

         if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" >Ubah Password Berhasil Berhasil , Silahkan Login Menggunakan Username dan Password Anda ! !!</div>");
                redirect('home/#masuk'); //jika berhasil maka akan ditampilkan view vupload
                }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" >Ubah Password Gagal Coba Lagi!!</div>");
                redirect('home/#masuk');
            }
      }

      public function alur() {
        $data=array(
            'title'=>'Layanan Perizinan Online',
            // 'active_home'=>'active'
        );
        $this->load->view('element/header',$data);
        $this->load->view('v_alur');
        $this->load->view('element/footer');
      }
      public function persyaratan() {
        $data=array(
            'title'=>'Layanan Perizinan Online',
            // 'active_home'=>'active'
        );
        $this->load->view('element/header',$data);
        $this->load->view('v_persyaratan');
        $this->load->view('element/footer');
      }

      public function callcenter() {
        $data=array(
            'title'=>'Layanan Perizinan Online',
            // 'active_home'=>'active'
        );
        $this->load->view('element/header',$data);
        $this->load->view('v_callcenter');
        $this->load->view('element/footer');
      }
}
