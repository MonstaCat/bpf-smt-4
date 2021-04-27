<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Dosen";
        $data['dosen'] = $this->Dosen_model->get();

        $this->load->view("layout/header", $data);
        $this->load->view("dosen/vw_dosen", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Dosen";

        $this->load->view("layout/header", $data);
        $this->load->view("dosen/vw_tambah_dosen", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $inisial = $this->input->post('inisial');
        $prodi = $this->input->post('prodi');
        $email = $this->input->post('email');
        $kompetensi = $this->input->post('kompetensi');

        $data = array(
            'nama' => $nama,
            'nip' => $nip,
            'inisial' => $inisial,
            'prodi' => $prodi,
            'email' => $email,
            'kompetensi' => $kompetensi
        );

        $this->Dosen_model->insert($data);
        redirect('dosen');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Dosen";
        $data['dosen'] = $this->Dosen_model->getById($id);

        $this->load->view("layout/header", $data);
        $this->load->view("dosen/vw_edit_dosen", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit_aksi()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $inisial = $this->input->post('inisial');
        $prodi = $this->input->post('prodi');
        $email = $this->input->post('email');
        $kompetensi = $this->input->post('kompetensi');

        $data = array(
            'nama' => $nama,
            'nip' => $nip,
            'inisial' => $inisial,
            'prodi' => $prodi,
            'email' => $email,
            'kompetensi' => $kompetensi
        );

        $this->Dosen_model->update(['id' => $id], $data);
        redirect('dosen');
    }

    public function hapus($id)
    {
        $this->dosen_model->delete($id);
        redirect('prodi');
    }
}
