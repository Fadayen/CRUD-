<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class Pelanggan002 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model002');
    }

    // Menampilkan data pelanggan + pencarian
    public function index()
    {
        $keyword = trim($this->input->get('keyword'));

        if (!empty($keyword)) {
            $data['pelanggan'] = $this->Pelanggan_model002->search_pelanggan($keyword);
        } else {
            $data['pelanggan'] = $this->Pelanggan_model002->get_all();
        }

        $this->load->view('Pelanggan002/pelanggan_view002', $data);
    }

    // Menampilkan form tambah pelanggan
    public function create()
    {
        $this->load->view('Pelanggan002/pelanggan_form002');
    }

    // Menyimpan data pelanggan
    public function store()
    {
        $data = [
            'kode_pelanggan' => $this->input->post('kode_pelanggan'),
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'telepon'        => $this->input->post('telepon'),
            'alamat'         => $this->input->post('alamat')
        ];

        $this->Pelanggan_model002->insert($data);

        redirect('pelanggan002');
    }

    // Menampilkan form edit
    public function edit($kode_pelanggan)
    {
        $data['pelanggan'] = $this->Pelanggan_model002->get_by_id($kode_pelanggan);
        $this->load->view('Pelanggan002/pelanggan_form002', $data);
    }

    // Update data pelanggan
    public function update()
    {
        $kode_pelanggan = $this->input->post('kode_pelanggan');

        $data = [
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'telepon'        => $this->input->post('telepon'),
            'alamat'         => $this->input->post('alamat')
        ];

        $this->Pelanggan_model002->update($kode_pelanggan, $data);

        redirect('pelanggan002');
    }

    // Hapus pelanggan
    public function delete($kode_pelanggan)
    {
        $this->Pelanggan_model002->delete($kode_pelanggan);

        redirect('pelanggan002');
    }
}