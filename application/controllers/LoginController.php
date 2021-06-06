<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
    }
    public function index()
    {
        $this->load->view('Auth/login');
    }
    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $where = array('email' => $email);
    
        $data = $this->Model->get_data($where, 'tb_admin')->result();
        if ($data > 0 && $data[0]->password == $password) {
            $user = array(
                'nama' => $data[0]->nama,
                'email' => $data[0]->email,
                'login' => true,
            );
            $this->session->set_userdata($user);
            $data = array('dataMhs' => $this->Model->data_mahasiswa(),'dataDosen' => $this->Model->data_dosen());
            $this->load->view('Home/home', $data);
        } else {
            redirect('index.php/login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('Auth/login');
    }
}