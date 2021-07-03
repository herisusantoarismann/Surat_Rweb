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
        $surat = array(
                    'surat' => $this->Model->get_data(array('nim' => $this->session->nim), 'surat')->result());

        $this->load->view('Home/home', $surat);
    }
    public function tambah_surat()
    {
        $this->load->view('Home/TambahSurat');
    }
    public function buat_surat()
    {
        $dekan = $this->Model->get_dekan();

        $nim = $this->input->post('nim');
        $ortu = $this->input->post('ortu');
        $nip = $this->input->post('nip');
        $pangkat = $this->input->post('pangkat');
        $instansi = $this->input->post('instansi');
        $kepentingan = $this->input->post('kepentingan');
 
        $data = array(
            'niy' => $dekan['NIY'],
            'nim' => $nim,
            'ortu' => $ortu,
            'nip' => $nip,
            'pangkat' => $pangkat,
            'instansi' => $instansi,
            'kepentingan' => $kepentingan,
            );
        $this->Model->input_data($data, 'surat');
        redirect('index.php/home');
    }
    public function edit_surat()
    {
        $id = $this->uri->segment(3);
        $where = array('Nomor' => $id);
        $data['surat'] = $this->Model->get_data($where, 'surat')->result();
        $this->load->view('Home/EditSurat', $data);
    }
    public function update_surat()
    {
        $nomor = $this->input->post('nomor');
        $ortu = $this->input->post('ortu');
        $nip = $this->input->post('nip');
        $pangkat = $this->input->post('pangkat');
        $instansi = $this->input->post('instansi');
        $kepentingan = $this->input->post('kepentingan');
 
        $data = array(
            'ortu' => $ortu,
            'nip' => $nip,
            'pangkat' => $pangkat,
            'instansi' => $instansi,
            'kepentingan' => $kepentingan,
            );

        $where = array('Nomor' => $nomor );
        $this->Model->update_data($where, $data, 'surat');
        redirect('index.php/home');
    }
    public function delete_surat()
    {
        $id = $this->uri->segment(3);
        $where = array('Nomor' => $id);
        $this->Model->delete_data($where, 'surat');
        redirect('index.php/home');
    }
    public function lihat_surat()
    {
        $this->load->library('pdfgenerator');
        $id = $this->uri->segment(3);
        $where = array('Nomor' => $id);
        $data = array('dekan' => $this->Model->get_dekan(), 'surat' => $this->Model->get_data($where, 'surat')->result());
        $html = $this->load->view('GeneratorPDF', $data, true);
        $this->pdfgenerator->generate($html, 'contoh');
    }
}