<?php

namespace App\Models;

use CodeIgniter\Model;

class KirimanPengunjungModel extends Model
{
    protected $db;
    protected $defaultGroup = "default";

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }
    protected $table = "kiriman_pengunjung";
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'ditambahkan_pada';
    protected $updatedField = 'diubah_pada';
    protected $allowedFields = [
        'nama_pengunjung',
        'komentar_kiriman',


    ];
}
