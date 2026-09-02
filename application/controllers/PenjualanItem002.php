<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class PenjualanItem002 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenjualanItem_model002');
    }

    // Menampilkan data + pencarian
    public function index()
    {
        $keyword = trim($this->input->get('keyword'));

        if (!empty($keyword)) {
            $data['penjualan_item'] = $this->PenjualanItem_model002->search($keyword);
        } else {
            $data['penjualan_item'] = $this->PenjualanItem_model002->get_all();
        }

        // Sesuaikan dengan nama folder view milik Anda
        $this->load->view('Penjualanitem002/penjualanitem_view002', $data);
    }

    // Form tambah
    public function create()
    {
        $this->load->view('Penjualanitem002/penjualanitem_form002');
    }

    // Simpan data
    public function store()
    {
        $data = [
            'kode_penjualan' => $this->input->post('kode_penjualan'),
            'kode_barang'    => $this->input->post('kode_barang'),
            'Qty'            => $this->input->post('Qty')
        ];

        $this->PenjualanItem_model002->insert($data);

        redirect('PenjualanItem002');
    }

    // Form edit
    public function edit($id_penjualan)
    {
        $data['penjualan_item'] = $this->PenjualanItem_model002->get_by_id($id_penjualan);

        $this->load->view('Penjualanitem002/penjualanitem_form002', $data);
    }

    // Update data
    public function update()
    {
        $id_penjualan = $this->input->post('id_penjualan');

        $data = [
            'kode_penjualan' => $this->input->post('kode_penjualan'),
            'kode_barang'    => $this->input->post('kode_barang'),
            'Qty'            => $this->input->post('Qty')
        ];

        $this->PenjualanItem_model002->update($id_penjualan, $data);

        redirect('PenjualanItem002');
    }

    // Hapus data
    public function delete($id_penjualan)
    {
        $this->PenjualanItem_model002->delete($id_penjualan);

        redirect('PenjualanItem002');
    }

}