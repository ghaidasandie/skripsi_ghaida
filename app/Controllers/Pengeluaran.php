<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Pengeluaran;

class Pengeluaran extends Controller
{
    protected $model; // Deklarasi properti $model

    public function __construct()
    {
        $this->model = new M_Pengeluaran();
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Pengeluaran',
            'pengeluaran' => $this->model->getAllData() // Ambil data dari model
        ];

        // Load views dengan data
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('pengeluaran/index', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_pengeluaran' => $this->request->getPost('id_pengeluaran'),
            'tanggal' => $this->request->getPost('tanggal'),
            'keterangan' => $this->request->getPost('keterangan'),
            'jumlah' => $this->request->getPost('jumlah')
        ];

        // insert data
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('pesan', ' Ditambahkan');
            return redirect()->to(base_url('/pengeluaran'));
        }
    }

    public function hapus($id_pengeluaran)
    {
        $success = $this->model->hapus($id_pengeluaran);
        if ($success) {
            session()->setFlashdata('pesan', ' Dihapus');
            return redirect()->to(base_url('/pengeluaran'));
        }
    }

    public function ubah()
{
    $data = [
        'id_pengeluaran' => $this->request->getPost('id_pengeluaran'),
        'tanggal' => $this->request->getPost('tanggal'),
        'keterangan' => $this->request->getPost('keterangan'),
        'jumlah' => $this->request->getPost('jumlah')
    ];

    // update data
    $success = $this->model->ubah($data);
    if ($success) {
        session()->setFlashdata('pesan', ' Diubah');
        return redirect()->to(base_url('/pengeluaran'));
    }
}
}
