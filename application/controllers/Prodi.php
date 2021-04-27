<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
        $this->load->model('Dosen_model');
        $this->load->model('Jurusan_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Prodi";
        $data['prodi'] = $this->Prodi_model->get();
        $data['user'] = $this->User_model->getBy();

        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_prodi", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Prodi";
        $data['dosen'] = $this->Dosen_model->get();
        $data['jurusan'] = $this->Jurusan_model->get();

        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_tambah_prodi", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah_aksi()
    {
        $nama_prodi = $this->input->post('nama_prodi');
        $ruangan = $this->input->post('ruangan');
        $jurusan = $this->input->post('jurusan');
        $akreditasi = $this->input->post('akreditasi');
        $nama_kaprodi = $this->input->post('nama_kaprodi');
        $tahun_berdiri = $this->input->post('tahun_berdiri');
        $output_lulusan = $this->input->post('output_lulusan');

        $data = array(
            'nama' => $nama_prodi,
            'ruangan' => $ruangan,
            'jurusan' => $jurusan,
            'akreditasi' => $akreditasi,
            'nama_kaprodi' => $nama_kaprodi,
            'tahun_berdiri' => $tahun_berdiri,
            'output_lulusan' => $output_lulusan
        );

        $this->Prodi_model->insert($data);
        redirect('prodi');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Prodi";
        $data['prodi'] = $this->Prodi_model->getById($id);

        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_edit_prodi", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit_aksi()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $ruangan = $this->input->post('ruangan');
        $jurusan = $this->input->post('jurusan');
        $akreditasi = $this->input->post('akreditasi');
        $nama_kaprodi = $this->input->post('nama_kaprodi');
        $tahun_berdiri = $this->input->post('tahun_berdiri');
        $output_lulusan = $this->input->post('output_lulusan');

        $data = array(
            'nama' => $nama,
            'ruangan' => $ruangan,
            'jurusan' => $jurusan,
            'akreditasi' => $akreditasi,
            'nama_kaprodi' => $nama_kaprodi,
            'tahun_berdiri' => $tahun_berdiri,
            'output_lulusan' => $output_lulusan
        );

        $this->Prodi_model->update(['id' => $id], $data);
        redirect('prodi');
    }

    public function hapus($id)
    {
        $this->Prodi_model->delete($id);
        redirect('prodi');
    }
}
