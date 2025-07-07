<?php
class Pelanggan_model extends CI_Model {
    public function username_exists($username) {
        return $this->db->where('username', $username)->get('pelanggan')->num_rows() > 0;
    }
    public function email_exists($email) {
        return $this->db->where('email', $email)->get('pelanggan')->num_rows() > 0;
    }
    public function insert($data) {
        return $this->db->insert('pelanggan', $data);
    }
    public function cek_login($username, $password) {
        $user = $this->db->where('username', $username)->get('pelanggan')->row();
        if ($user && password_verify($password, $user->password)) {
            return $user;
        }
        return false;
    }
} 