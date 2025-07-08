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
        $this->load->model('Product_model');
        $data['produk'] = $this->Product_model->get_all_with_kategori();
        $this->load->view('admin/products', $data);
    }

    public function add_product() {
        $this->load->model('Product_model');
        $data['kategori'] = $this->Product_model->get_all_kategori();
        if ($this->input->method() === 'post') {
            // Proses upload gambar
            $gambar = null;
            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 2048;
                $config['file_name'] = time() . '_' . $_FILES['gambar']['name'];
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $gambar = 'assets/img/' . $this->upload->data('file_name');
                }
            }
            $insert = [
                'nama_produk' => $this->input->post('nama_produk'),
                'id_kategori' => $this->input->post('id_kategori'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok'),
                'deskripsi' => $this->input->post('deskripsi'),
                'gambar' => $gambar,
            ];
            $this->Product_model->insert($insert);
            redirect('admin/products');
        }
        $this->load->view('admin/add_product', $data);
    }

    public function edit_product($id = null) {
        $this->load->model('Product_model');
        $data['kategori'] = $this->Product_model->get_all_kategori();
        $data['produk'] = $this->db->get_where('produk', ['id_produk' => $id])->row();
        if ($this->input->method() === 'post') {
            // Proses upload gambar jika ada
            $gambar = $data['produk']->gambar;
            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 2048;
                $config['file_name'] = time() . '_' . $_FILES['gambar']['name'];
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $gambar = 'assets/img/' . $this->upload->data('file_name');
                }
            }
            $update = [
                'nama_produk' => $this->input->post('nama_produk'),
                'id_kategori' => $this->input->post('id_kategori'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok'),
                'deskripsi' => $this->input->post('deskripsi'),
                'gambar' => $gambar,
            ];
            $this->db->where('id_produk', $id)->update('produk', $update);
            redirect('admin/products');
        }
        $this->load->view('admin/edit_product', $data);
    }

    public function invoice() {
        // Ambil semua pesanan dan join dengan pelanggan
        $this->db->select('pesanan.*, pelanggan.nama as nama_pelanggan');
        $this->db->from('pesanan');
        $this->db->join('pelanggan', 'pesanan.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->order_by('tanggal_pesanan', 'DESC');
        $orders = $this->db->get()->result();
        $this->load->view('admin/invoice', ['orders' => $orders]);
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
        $this->load->model('Product_model');
        $data['kategori'] = $this->Product_model->get_all_kategori();
        $this->load->view('admin/category', $data);
    }

    public function product_detail($id = null) {
        $produk = $this->db->select('produk.*, kategori.nama_kategori')
            ->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left')
            ->get_where('produk', ['id_produk' => $id])->row();
        if (!$produk) show_404();
        $this->load->view('admin/product_detail', ['produk' => $produk]);
    }
} 