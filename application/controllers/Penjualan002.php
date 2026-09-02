<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class Penjualan002 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjualan_model002');
    }

    // Menampilkan data penjualan + pencarian
    public function index()
    {
        $keyword = trim($this->input->get('keyword'));

        if (!empty($keyword)) {
            $data['penjualan'] = $this->Penjualan_model002->search_penjualan($keyword);
        } else {
            $data['penjualan'] = $this->Penjualan_model002->get_all();
        }

        $this->load->view('Penjualan002/penjualan_view002', $data);
    }

    // Form tambah
    public function create()
    {
        $this->load->view('Penjualan002/penjualan_form002');
    }

    // Simpan data
    public function store()
    {
        $data = [
            'kode_penjualan'    => $this->input->post('kode_penjualan'),
            'tanggal_penjualan' => $this->input->post('tanggal_penjualan'),
            'kode_pelanggan'    => $this->input->post('kode_pelanggan')
        ];

        $this->Penjualan_model002->insert($data);

        redirect('penjualan002');
    }

    // Form edit
    public function edit($kode_penjualan)
    {
        $data['penjualan'] = $this->Penjualan_model002->get_by_id($kode_penjualan);
        $this->load->view('Penjualan002/penjualan_form002', $data);
    }

    // Update data
    public function update()
    {
        $kode_penjualan = $this->input->post('kode_penjualan');

        $data = [
            'tanggal_penjualan' => $this->input->post('tanggal_penjualan'),
            'kode_pelanggan'    => $this->input->post('kode_pelanggan')
        ];

        $this->Penjualan_model002->update($kode_penjualan, $data);

        redirect('penjualan002');
    }

    // Hapus data
    public function delete($kode_penjualan)
    {
        $this->Penjualan_model002->delete($kode_penjualan);

        redirect('penjualan002');
    }

}