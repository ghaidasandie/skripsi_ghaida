<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Menu;

class Menu extends Controller
{
    protected $model; // Deklarasi properti $model

    public function __construct()
    {
        $this->model = new M_Menu();
    }

    public function index()
    {
        $data = [
            'judul' => 'Daftar Menu',
            'menu' => $this->model->getAllData() // Ambil data dari model
        ];

        // Load views dengan data
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('menu/index', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_menu' => $this->request->getPost('id_menu'),
            'gambar' => $this->request->getPost('gambar'),
            'nama_menu' => $this->request->getPost('nama_menu')
        ];

        // insert data
        $success = $this->model->tambah($data);
        if ($success) {
            return redirect()->to(base_url('/menu'));
        }
    }
}
