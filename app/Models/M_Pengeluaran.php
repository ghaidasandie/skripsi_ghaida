<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pengeluaran extends Model 
{
    protected $table = 'pengeluaran'; 

    public function getAllData()
    {
        return $this->findAll(); // Menggunakan method bawaan untuk mengambil semua data
    }

    public function tambah($data)
    {
        return $this->db->table('pengeluaran')->insert($data);
    }

    public function hapus($id_pengeluaran)
    {
        return $this->db->table('pengeluaran')->delete(['id_pengeluaran' => $id_pengeluaran]);

    }

    
}
