<?php

namespace App\Models;

use CodeIgniter\Model;

class TeknologiModel extends Model
{
    protected $db;
    protected $defaultGroup = "default";

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }
    protected $table = "teknologi";
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_teknologi',
        'deskripsi_singkat',
        'logo',
        'link_belajar',

    ];
}
