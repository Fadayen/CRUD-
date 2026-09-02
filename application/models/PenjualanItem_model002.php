<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenjualanItem_model002 extends CI_Model {

    // Menampilkan semua data
    public function get_all()
    {
        return $this->db
            ->order_by('id_penjualan','ASC')
            ->get('penjualan_item')
            ->result();
    }

    // Pencarian data
    public function search($keyword)
    {
        $this->db->like('kode_penjualan', $keyword);
        $this->db->or_like('kode_barang', $keyword);
        $this->db->or_like('Qty', $keyword);

        return $this->db
            ->order_by('id_penjualan','ASC')
            ->get('penjualan_item')
            ->result();
    }

    // Simpan data
    public function insert($data)
    {
        return $this->db->insert('penjualan_item', $data);
    }

    // Ambil berdasarkan id
    public function get_by_id($id_penjualan)
    {
        return $this->db->get_where(
            'penjualan_item',
            ['id_penjualan'=>$id_penjualan]
        )->row();
    }

    // Update
    public function update($id_penjualan,$data)
    {
        $this->db->where('id_penjualan',$id_penjualan);
        return $this->db->update('penjualan_item',$data);
    }

    // Hapus
    public function delete($id_penjualan)
    {
        return $this->db->delete(
            'penjualan_item',
            ['id_penjualan'=>$id_penjualan]
        );
    }
}