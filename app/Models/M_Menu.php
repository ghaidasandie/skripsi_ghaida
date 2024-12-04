<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Menu extends Model
{
    protected $table = 'menu'; 

    public function getAllData()
    {
        return $this->findAll(); // Menggunakan method bawaan untuk mengambil semua data
    }

    public function tambah($data)
    {
        return $this->db->table('menu')->insert($data);
    }
}
