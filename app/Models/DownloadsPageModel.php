<?php

namespace App\Models;

use CodeIgniter\Model;

class DownloadsPageModel extends Model
{
    protected $db;
    protected $defaultGroup = "default";

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }
    protected $table = "downloads_page";
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_game',
        'keterangan_singkat',
        'link_steam',
        'link_epicgames',
    ];
}
