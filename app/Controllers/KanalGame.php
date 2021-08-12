<?php

namespace App\Controllers;

use App\Models\DaftarGame_Model;
use App\Models\KategoriGame_Model;

class KanalGame extends BaseController
{
    protected $daftar_game;
    protected $genre_game;
    public function __construct()
    {
        $this->daftar_game = new DaftarGame_Model();
        $this->genre_game = new KategoriGame_Model();
    }

    // method yang pertama kali dipanggil oleh Routes
    public function index()
    {
        $data = [
            'title_bar' => 'Home'
        ];

        return view('pages/homepage', $data);
    }

    public function save_suggested()
    {
        $game_title = "";
        $slugs = url_title($game_title, $pemisah = '-', true);

        $container = [];
    }

    public function suggest()
    {
        $data = [
            'title_bar' => 'Suggest A Game!'
        ];
        return view('pages/suggest-game', $data);
    }
    public function about_us()
    {
        $data = [
            'title_bar' => 'Tentang Kami'
        ];

        return view('pages/about-us', $data);
    }
}
