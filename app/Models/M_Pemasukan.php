<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pemasukan extends Model
{
    protected $table = 'pemasukan'; 

    public function getAllData()
    {
        return $this->findAll(); // Menggunakan method bawaan untuk mengambil semua data
    }

    public function tambah($data)
    {
        return $this->db->table('pemasukan')->insert($data);
    }
}
