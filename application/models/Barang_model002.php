<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model002 extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data barang
    public function get_all_barang() {
        return $this->db->get('barang')->result();
    }

    // Pencarian barang
    public function search_barang($keyword) {

        $this->db->group_start();
        $this->db->like('kode_barang', $keyword);
        $this->db->or_like('nama_barang', $keyword);
        $this->db->group_end();

        return $this->db->get('barang')->result();
    }

    // Simpan data baru
    public function insert_barang($data) {
        return $this->db->insert('barang', $data);
    }

    // Ambil satu data berdasarkan kode_barang
    public function get_barang_by_kode($kode_barang) {
        return $this->db->get_where('barang', ['kode_barang' => $kode_barang])->row();
    }

    // Update data barang berdasarkan kode_barang
    public function update_barang($kode_barang, $data) {
        $this->db->where('kode_barang', $kode_barang);
        return $this->db->update('barang', $data);
    }

    // Hapus data barang berdasarkan kode_barang
    public function delete_barang($kode_barang) {
        $this->db->where('kode_barang', $kode_barang);
        return $this->db->delete('barang');
    }

}