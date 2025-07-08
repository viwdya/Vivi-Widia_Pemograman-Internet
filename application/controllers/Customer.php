<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Tambahkan pengecekan session login konsumen jika perlu
    }

    public function dashboard() {
        // Produk sama seperti di dashboard admin
        $produk = [
            [
                'id' => 1,
                'nama' => 'Syphon Coffee Maker Manual Brew Vacuum Pot',
                'harga' => 288000,
                'gambar' => 'https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=200&q=80',
            ],
            [
                'id' => 2,
                'nama' => 'Electric Coffee Grinder - 600N',
                'harga' => 500000,
                'gambar' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=200&q=80',
            ],
            [
                'id' => 3,
                'nama' => 'coffee server / coffee pot 01 / teko server kopi v60',
                'harga' => 47800,
                'gambar' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=200&q=80',
            ],
            [
                'id' => 4,
                'nama' => 'Vietnam Drip Alat Pembuat Kopi Vietnam',
                'harga' => 32000,
                'gambar' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=200&q=80',
            ],
        ];
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
        // Contoh data produk, ganti dengan data dari database jika sudah ada
        $produk = [
            'id' => $id,
            'nama' => 'Syphon Coffee Maker Manual Brew Vacuum Pot',
            'keterangan' => 'Alat manual brew kopi dengan sistem vacuum pot.',
            'kategori' => 'Manual Brew',
            'stok' => 51,
            'harga' => 288000,
            'rating' => 5.0,
            'rating_count' => 100,
            'sold' => 500,
            'gambar' => base_url('assets/img/coffee grinder.jpeg'),
        ];
        $this->load->view('customer/product_detail', ['produk' => $produk]);
    }
} 