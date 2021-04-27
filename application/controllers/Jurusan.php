<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jurusan_model');
        $this->load->model('Dosen_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Jurusan";
        $data['jurusan'] = $this->Jurusan_model->get();

        $this->load->view("layout/header", $data);
        $this->load->view("jurusan/vw_jurusan", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Jurusan";
        $data['dosen'] = $this->Dosen_model->get();

        $this->load->view("layout/header", $data);
        $this->load->view("jurusan/vw_tambah_jurusan", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $singkatan = $this->input->post('singkatan');
        $nama_kajur = $this->input->post('nama_kajur');

        $data = array(
            'nama' => $nama,
            'singkatan' => $singkatan,
            'nama_kajur' => $nama_kajur
        );

        $this->Jurusan_model->insert($data);
        redirect('jurusan');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Jurusan";
        $data['jurusan'] = $this->Jurusan_model->getById($id);

        $this->load->view("layout/header", $data);
        $this->load->view("jurusan/vw_edit_jurusan", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit_aksi()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $singkatan = $this->input->post('singkatan');
        $nama_kajur = $this->input->post('nama_kajur');

        $data = array(
            'nama' => $nama,
            'singkatan' => $singkatan,
            'nama_kajur' => $nama_kajur
        );

        $this->Jurusan_model->update(['id' => $id], $data);
        redirect('jurusan');
    }

    public function hapus($id)
    {
        $this->Jurusan_model->delete($id);
        redirect('jurusan');
    }
}
