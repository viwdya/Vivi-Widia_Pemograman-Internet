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

    public function add_product() {
        $this->load->view('admin/add_product');
    }

    public function edit_product($id = null) {
        // Nanti bisa ambil data produk dari database berdasarkan $id
        $this->load->view('admin/edit_product');
    }

    public function invoice() {
        $this->load->view('admin/invoice');
    }

    public function order_detail($id = null) {
        // Nanti bisa ambil data pesanan dari database berdasarkan $id
        $this->load->view('admin/order_detail');
    }
} 