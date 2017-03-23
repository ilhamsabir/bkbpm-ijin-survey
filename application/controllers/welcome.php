<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function oke{

		  
   $kd_ijin   = $this->input->post('kd_ijin');
   $tglajuan  = $this->input->post('tglajuan');
   $jenisijin = $this->input->post('jenisijin');
  
   $lokasi1= $this->input->post('lokasi1');
   $lokasi2= $this->input->post('lokasi2');
   $lokasi3= $this->input->post('lokasi3');
   $lokasi4= $this->input->post('lokasi4');
   $lokasi5= $this->input->post('lokasi5');
         
   $email = $this->session->userdata('EMAIL');           

   $data['userijin'] =  $this->m_app->userijin();
    ///$encrypted_id = md5($email);
  
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
    foreach ($data['userijin'] as $value) {
      $message = '
      <p>No. Permohonan  : '.$kd_ijin.' </p>
      <p><smal>Tgl Permohonan  : '.$tglajuan.'</small> </p>
 
      <p>Nama            : '.$value['nama'].'</p>
 
      <p>Alamat          : '.$value['alamat'].'</p>

      <p>Jenis Perizinan : '.$jenisijin.' </p>
      
      <p>Lokasi          : '.$lokasi1.' </p>

      <p>Kelengkapan Dokumen : <strong>Lengkap</strong></p>
      <p>Catatan             : 
 
      ';
    }
    $this->email->from($config['smtp_user']);
    $this->email->to($email);
    $this->email->subject("Bukti Pengambilan Dokumn Perizinan");
    $this->email->message($message);
  
    if($this->email->send())
    {
       echo "Berhasil Kirim Verifikasi Ke Email $email";
    }else
    {
       echo "Gagal mengirim verifikasi email";
    }
  
    echo "<br><br><a href='".site_url("/")."'>Kembali Laman Utama</a>";
    }

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */