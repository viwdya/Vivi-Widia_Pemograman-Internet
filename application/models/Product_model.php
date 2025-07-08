<?php
class Product_model extends CI_Model {
    public function get_all() {
        return $this->db->get('produk')->result();
    }
    public function insert($data) {
        return $this->db->insert('produk', $data);
    }
    public function get_all_kategori() {
        return $this->db->get('kategori')->result();
    }
    public function get_all_with_kategori() {
        $this->db->select('produk.*, kategori.nama_kategori');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        return $this->db->get()->result();
    }
} 