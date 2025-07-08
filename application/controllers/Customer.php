<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Tambahkan pengecekan session login konsumen jika perlu
    }

    public function dashboard() {
        $this->load->view('customer/dashboard');
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
} 