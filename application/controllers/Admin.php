<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Tambahkan pengecekan session login admin jika perlu
    }

    public function dashboard() {
        $this->load->view('admin/dashboard');
    }

    public function products() {
        $this->load->view('admin/products');
    }
} 