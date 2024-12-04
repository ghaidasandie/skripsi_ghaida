<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Pemasukan;

class Pemasukan extends Controller
{
    protected $model; // Deklarasi properti $model

    public function __construct()
    { 
        $this->model = new M_Pemasukan();
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Pemasukan',
            'pemasukan' => $this->model->getAllData() // Ambil data dari model
        ];

        // Load views dengan data
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('pemasukan/index', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'keterangan' => $this->request->getPost('keterangan'),
            'jumlah' => $this->request->getPost('jumlah')
        ];

        // insert data
        $success = $this->model->tambah($data);
        if ($success) {
            return redirect()->to(base_url('/pemasukan'));
        }
    }
}
