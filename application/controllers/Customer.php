<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Tambahkan pengecekan session login konsumen jika perlu
    }

    public function dashboard() {
        $this->load->model('Product_model');
        $produk = $this->Product_model->get_all();
        $this->load->view('customer/dashboard', ['produk' => $produk]);
    }

    public function cart() {
        // Contoh data keranjang, ganti dengan data dari session/database jika sudah ada
        $cart = [
            [
                'nama_produk' => 'Syphon Coffee Maker Manual Brew Vacuum Pot',
                'harga' => 288000,
                'qty' => 1,
                'gambar' => base_url('assets/img/coffee grinder.jpeg'),
            ],
            [
                'nama_produk' => 'Vietnam Drip Alat Pembuat Kopi Vietnam',
                'harga' => 22000,
                'qty' => 1,
                'gambar' => base_url('assets/img/teapot.jpeg'),
            ],
        ];
        $this->load->view('customer/cart', ['cart' => $cart]);
    }

    public function order_history() {
        // Contoh data riwayat order, ganti dengan data dari database jika sudah ada
        $orders = [
            [
                'no' => 16,
                'id' => '#819724214793',
                'tanggal' => 'Selasa, 09 Juli 2024',
                'jumlah_pesanan' => '2 barang',
                'total' => 310000,
                'pembayaran' => 'Transfer bank',
                'status' => 'Selesai',
            ],
        ];
        $this->load->view('customer/order_history', ['orders' => $orders]);
    }

    public function payment() {
        // Contoh data order yang belum dibayar, bisa diganti dengan data dari database
        $orders = [
            [
                'id' => '#819724214793',
                'total' => 310000,
            ],
        ];
        $bank_tujuan = [
            [
                'nama' => 'Mandiri an AGUNG SAGARA',
                'no_rek' => '3461909572',
            ],
        ];
        $this->load->view('customer/payment', [
            'orders' => $orders,
            'bank_tujuan' => $bank_tujuan
        ]);
    }

    public function product_detail($id = null) {
        $this->load->model('Product_model');
        $produk = $this->db->get_where('produk', ['id_produk' => $id])->row();
        if (!$produk) show_404();
        $this->load->view('customer/product_detail', ['produk' => $produk]);
    }
} 