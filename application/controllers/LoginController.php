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
        $this->form_validation->set_rules('nim', 'nim', 'required', array('required' => 'NIM harus diisi!'));
        $this->form_validation->set_rules('password', 'password', 'required|min_length[5]', array('required' => 'Password harus diisi!','min_length' => 'Password minimal 5 karakter!'));

        $nim = $this->input->post('nim');
        $password = $this->input->post('password');
      
        $where = array('nim' => $nim,
                    'password' => md5($password));
    
        $data = $this->Model->get_data($where, 'mhs')->result();
        if ($this->form_validation->run() != false) {
            if (count($data) > 0) {
                $user = array(
                'nama' => $data[0]->namaMhs,
                'nim' => $data[0]->nim,
                'jurusan' => $data[0]->Jurusan,
                'semester' => $data[0]->Semester,
                'login' => true,
                );
                $this->session->set_userdata($user);
                $surat = array(
                    'surat' => $this->Model->get_data(array('nim' => $where['nim']), 'surat')->result());
                $this->load->view('Home/Home', $surat);
            } else {
                $this->session->set_flashdata('err', 'NIM/Password salah!');
                redirect('index.php/login');
            }
        } else {
            $this->load->view('Auth/login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('Auth/login');
    }

    public function pdf()
    {
        $this->load->library('pdfgenerator');
 
        $data = array('nama' => "Heri Susanto Arisman",
                        'NIM' => 1800018388
                    );
 
        $html = $this->load->view('GeneratorPDF', $data, true);
        
        $this->pdfgenerator->generate($html, 'contoh');
    }

    public function cekpdf()
    {
        $data = array('dekan' => $this->Model->get_dekan());

        $this->load->view('GeneratorPDF', $data);
    }
}