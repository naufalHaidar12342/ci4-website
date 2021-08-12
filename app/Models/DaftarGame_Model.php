<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarGame_Model extends Model
{
    // grup database yang digunakan 
    protected $DBGroup = "default";

    // membuka koneksi ke database. menggunakan template
    //bawaaan codeigniter
    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    // tabel yang digunakan (dari dalam database)
    protected $table = "daftar_game";

    // primary key dari tabel tersebut
    protected $primaryKey = "id";

    // field mana saja yang boleh dioperasikan oleh kita
    protected $allowedFields = ['slug_game', 'judul_game', 'tahun_rilis', 'publisher', 'developer', 'deskripsi', 'cover_game'];

    // mengambil slug dari controller
    public function ambilGame($slugs = false)
    {
        if ($slugs == false) {
            return $this->findAll();
        }

        return $this->where(['slug_game' => $slugs]);
    }
}
