<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model002 extends CI_Model {

    // Menampilkan semua data pelanggan
    public function get_all()
    {
        return $this->db->order_by('kode_pelanggan', 'ASC')
                        ->get('pelanggan')
                        ->result();
    }

    // Pencarian pelanggan
    public function search_pelanggan($keyword)
    {
        $this->db->group_start();
        $this->db->like('kode_pelanggan', $keyword);
        $this->db->or_like('nama_pelanggan', $keyword);
        $this->db->or_like('telepon', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->group_end();

        $this->db->order_by('kode_pelanggan', 'ASC');

        return $this->db->get('pelanggan')->result();
    }

    // Simpan data pelanggan
    public function insert($data)
    {
        return $this->db->insert('pelanggan', $data);
    }

    // Ambil data berdasarkan kode pelanggan
    public function get_by_id($kode_pelanggan)
    {
        return $this->db->get_where(
            'pelanggan',
            ['kode_pelanggan' => $kode_pelanggan]
        )->row();
    }

    // Update data pelanggan
    public function update($kode_pelanggan, $data)
    {
        $this->db->where('kode_pelanggan', $kode_pelanggan);
        return $this->db->update('pelanggan', $data);
    }

    // Hapus data pelanggan
    public function delete($kode_pelanggan)
    {
        $this->db->where('kode_pelanggan', $kode_pelanggan);
        return $this->db->delete('pelanggan');
    }

}
?>