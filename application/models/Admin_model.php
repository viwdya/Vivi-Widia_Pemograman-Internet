<?php
class Admin_model extends CI_Model {
    public function cek_login($username, $password) {
        $this->db->where('username', $username);
        $admin = $this->db->get('admin')->row();

        if ($admin && password_verify($password, $admin->password)) {
            return $admin;
        }
        return false;
    }
} 