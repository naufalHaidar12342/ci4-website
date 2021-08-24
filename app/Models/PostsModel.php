<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $db;
    protected $defaultGroup = "default";

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }
    protected $table = "posts";
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'post_judul',
        'cover_img',
        'post_slug',
        'post_genre',
        'post_judul_style',
        'post_publisher',
        'publisher_link',
        'post_developer',
        'developer_link',
        'link_rilis_game',
        'tahun_rilis_game',
        'deskripsi_post',
        'steam',
        'epicgames_store',
    ];

    function coverarts(string $show)
    {
        return htmlspecialchars($show, ENT_QUOTES, 'UTF-8');
    }
}
