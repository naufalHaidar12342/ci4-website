<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriGame_Model extends Model
{
    protected $db;
    protected $DBGroup = "default";
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    // tabel yang digunakan (dari dalam database)
    protected $table = "kategori_game";

    // primary key dari tabel tersebut
    protected $primaryKey = "id";

    // field mana saja yang boleh dioperasikan oleh kita
    protected $allowedFields = ['keterangan'];
}
