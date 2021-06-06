<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');

        if ($this->session->userdata('login')==null) {
            redirect('index.php/login');
        }
    }
    public function index()
    {
        $data = array('dataMhs' => $this->Model->data_mahasiswa(),'dataDosen' => $this->Model->data_dosen());

        $this->load->view('Home/home', $data);
    }
    public function tambahMhs()
    {
        $this->load->view('Home/TambahMhs');
    }
    public function tambahDosen()
    {
        $this->load->view('Home/TambahDosen');
    }
    public function insert_mhs()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $semester = $this->input->post('semester');
        $email = $this->input->post('email');
 
        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'semester' => $semester,
            'email' => $email
            );
        $this->Model->input_data($data, 'tb_mahasiswa');
        redirect('index.php/home');
    }
    public function edit_mhs()
    {
        $id = $this->uri->segment(3);
        $where = array('id' => $id);
        $data['mhs'] = $this->Model->get_data($where, 'tb_mahasiswa')->result();
        $this->load->view('Home/EditMhs', $data);
    }
    public function update_mhs()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $semester = $this->input->post('semester');
        $email = $this->input->post('email');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'semester' => $semester,
            'email' => $email
            );

        $where = array('id' => $id);
        $this->Model->update_data($where, $data, 'tb_mahasiswa');
        redirect('index.php/home');
    }
    public function delete_mhs()
    {
        $id = $this->uri->segment(3);
        $where = array('id' => $id);
        $this->Model->delete_data($where, 'tb_mahasiswa');
        redirect('index.php/home');
    }
    public function insert_dosen()
    {
        $nama = $this->input->post('nama');
        $niy = $this->input->post('niy');
        $keahlian = $this->input->post('keahlian');
        $email = $this->input->post('email');
 
        $data = array(
            'nama' => $nama,
            'niy' => $niy,
            'keahlian' => $keahlian,
            'email' => $email
            );
        $this->Model->input_data($data, 'tb_dosen');
        redirect('index.php/home');
    }
    public function edit_dosen()
    {
        $id = $this->uri->segment(3);
        $where = array('id' => $id);
        $data['dosen'] = $this->Model->get_data($where, 'tb_dosen')->result();
        $this->load->view('Home/EditDosen', $data);
    }
    public function update_dosen()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $niy = $this->input->post('niy');
        $keahlian = $this->input->post('keahlian');
        $email = $this->input->post('email');

        $data = array(
            'nama' => $nama,
            'niy' => $niy,
            'keahlian' => $keahlian,
            'email' => $email
            );

        $where = array('id' => $id);
        $this->Model->update_data($where, $data, 'tb_dosen');
        redirect('index.php/home');
    }
    public function delete_dosen()
    {
        $id = $this->uri->segment(3);
        $where = array('id' => $id);
        $this->Model->delete_data($where, 'tb_dosen');
        redirect('index.php/home');
    }
}