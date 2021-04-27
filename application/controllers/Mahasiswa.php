<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('Prodi_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->get();
        $data['user'] = $this->User_model->getBy();

        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_mahasiswa", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Mahasiswa";
        $data['prodi'] = $this->Prodi_model->get();

        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $email = $this->input->post('email');
        $prodi = $this->input->post('prodi');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'jenis_kelamin' => $jenis_kelamin,
            'email' => $email,
            'prodi' => $prodi,
            'asal_sekolah' => $asal_sekolah,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
        );

        $this->Mahasiswa_model->insert($data);
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);

        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);

        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_edit_mahasiswa", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit_aksi()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $email = $this->input->post('email');
        $prodi = $this->input->post('prodi');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'jenis_kelamin' => $jenis_kelamin,
            'email' => $email,
            'prodi' => $prodi,
            'asal_sekolah' => $asal_sekolah,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
        );

        $this->Mahasiswa_model->update(['id' => $id], $data);
        redirect('mahasiswa');
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->delete($id);
        redirect('mahasiswa');
    }
}
