<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties] // ← ini WAJIB ditambahkan untuk PHP 8.2+
class Barang002 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('Barang_model002');
    }

    public function index()
{
    $keyword = $this->input->get('keyword');

    if (!empty($keyword)) {
        $data['barang'] = $this->Barang_model002->search_barang($keyword);
    } else {
        $data['barang'] = $this->Barang_model002->get_all_barang();
    }

    $this->load->view('Barang002/barang_view002', $data);
}

    public function create()
    {
        $this->load->view('Barang002/barang_form002');
    }

    public function store()
    {
        $data = [
            'kode_barang' => $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'harga'       => $this->input->post('harga')
        ];

        $this->Barang_model002->insert_barang($data);
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect('barang002');
    }

    public function edit($kode_barang)
{
    $data['barang'] = $this->Barang_model002->get_barang_by_kode($kode_barang);
    $this->load->view('Barang002/barang_form002', $data);
}

    public function update()
    {
        $kode_barang = $this->input->post('kode_barang');
        $data = [
            'nama_barang' => $this->input->post('nama_barang'),
            'harga'       => $this->input->post('harga')
        ];

        $this->Barang_model002->update_barang($kode_barang, $data);
        $this->session->set_flashdata('success', 'Data berhasil diupdate');
        redirect('barang002');
    }

    public function delete($kode_barang)
    {
        $this->Barang_model002->delete_barang($kode_barang);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('barang002');
    }
}
?>
