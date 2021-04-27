<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }

    public function index()
    {
        $this->load->view("layout/auth_header");
        $this->load->view("auth/login");
        $this->load->view("layout/auth_footer");
    }

    public function registrasi()
    {
        $this->load->view("layout/auth_header");
        $this->load->view("auth/registrasi");
        $this->load->view("layout/auth_footer");
    }

    public function cek_regis()
    {
        $nama = htmlspecialchars($this->input->post('nama', true));
        $email = htmlspecialchars($this->input->post('email', true));
        $password = htmlspecialchars($this->input->post('password'), PASSWORD_DEFAULT);

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'gambar' => "default.jpg",
            'role' => "user",
        );

        $this->userrole->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun kamu telah berhasil terdaftar. Silahkan Login!</div>');
        redirect('auth');
    }

    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (!password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id']
                ];

                $this->session->set_flashdata($data);

                if ($user['role'] == 'admin') {
                    redirect('Mahasiswa');
                } else {
                    redirect('Profil');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('auth');
    }
}
