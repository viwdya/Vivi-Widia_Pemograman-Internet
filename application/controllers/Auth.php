<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('session');
    }

    public function login() {
        $this->load->view('auth/login');
    }

    public function proses_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->Admin_model->cek_login($username, $password);

        if ($admin) {
            $this->session->set_userdata('admin', $admin);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('auth/login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('admin');
        redirect('auth/login');
    }

    public function register() {
        if ($this->input->method() === 'post') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama     = $this->input->post('nama');
            $email    = $this->input->post('email');
            $no_hp    = $this->input->post('no_hp');
            $alamat   = $this->input->post('alamat');

            // Validasi username/email unik
            $this->load->model('Pelanggan_model');
            if ($this->Pelanggan_model->username_exists($username)) {
                $data['error'] = 'Username sudah digunakan.';
                $this->load->view('auth/register', $data);
                return;
            }
            if ($this->Pelanggan_model->email_exists($email)) {
                $data['error'] = 'Email sudah digunakan.';
                $this->load->view('auth/register', $data);
                return;
            }

            $data = [
                'nama' => $nama,
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'email' => $email,
                'telepon' => $no_hp,
                'alamat' => $alamat
            ];
            $this->Pelanggan_model->insert($data);
            $this->session->set_flashdata('success', 'Pendaftaran berhasil, silakan login.');
            redirect('auth/login');
        } else {
            $this->load->view('auth/register');
        }
    }
} 