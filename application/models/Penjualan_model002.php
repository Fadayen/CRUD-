<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_model002 extends CI_Model {

    // Menampilkan semua data penjualan
    public function get_all()
    {
        return $this->db->order_by('kode_penjualan', 'ASC')
                        ->get('penjualan')
                        ->result();
    }

    // Pencarian data penjualan
    public function search_penjualan($keyword)
    {
        $this->db->group_start();
        $this->db->like('kode_penjualan', $keyword);
        $this->db->or_like('kode_pelanggan', $keyword);
        $this->db->or_like('tanggal_penjualan', $keyword);
        $this->db->group_end();

        $this->db->order_by('kode_penjualan', 'ASC');

        return $this->db->get('penjualan')->result();
    }

    // Simpan data penjualan
    public function insert($data)
    {
        return $this->db->insert('penjualan', $data);
    }

    // Ambil data berdasarkan kode penjualan
    public function get_by_id($kode_penjualan)
    {
        return $this->db->get_where(
            'penjualan',
            ['kode_penjualan' => $kode_penjualan]
        )->row();
    }

    // Update data penjualan
    public function update($kode_penjualan, $data)
    {
        $this->db->where('kode_penjualan', $kode_penjualan);
        return $this->db->update('penjualan', $data);
    }

    // Hapus data penjualan
    public function delete($kode_penjualan)
    {
        $this->db->where('kode_penjualan', $kode_penjualan);
        return $this->db->delete('penjualan');
    }

}
?>