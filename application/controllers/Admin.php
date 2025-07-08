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

    public function order_process($id = null) {
        // Contoh data pesanan, ganti dengan data dari database jika sudah ada
        $order = [
            'nomor' => '#BLT9724214793',
            'tanggal' => 'Selasa, 09 Juli 2024',
            'item' => 2,
            'harga' => 310000,
            'metode' => 'Transfer bank',
            'status' => 'Selesai',
        ];
        $penerima = [
            'nama' => 'Wira Restu Wibawa',
            'no_hp' => '0895178138070',
            'alamat' => 'kp.sanding 13/12',
            'catatan' => '',
        ];
        $bukti = base_url('assets/img/teapot.jpeg');
        $this->load->view('admin/order_process', [
            'order' => $order,
            'penerima' => $penerima,
            'bukti' => $bukti
        ]);
    }

    public function category() {
        $this->load->view('admin/category');
    }
} 