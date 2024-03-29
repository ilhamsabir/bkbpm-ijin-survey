<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_app');

    }

    function index(){
        $data=array(
            'title'=>'Login Page'
        );
        $this->load->view('admin/v_login',$data);
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
                        'PASS' =>$row->password,
                        'NAME' =>$row->nama,
                        'LEVEL' => $row->level,
                        'NOHP' => $row->nohp,
                        'NOKTP' => $row->noktp,
                        'login_status'=>true,
                    );
                    //set session with value from database
                    $this->session->set_userdata($sess_array);
                    redirect('adminhome','refresh');
                }
                return TRUE;
            } else {
                //if form validate false
                redirect('login','refresh');
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
}
