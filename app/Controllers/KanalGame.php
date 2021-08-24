<?php

namespace App\Controllers;



use CodeIgniter\I18n\Time;

class KanalGame extends BaseController
{
    protected $daftar_game;
    protected $genre_game;
    public function __construct()
    {
    }

    // method yang pertama kali dipanggil oleh Routes
    public function index()
    {
        // $this->cachePage(300);
        $data = [
            'title_bar' => 'Home'
        ];

        return view('pages/homepage', $data);
    }

    public function details($slugs)
    {
        $data = [
            'title_bar' => ''
        ];
    }

    public function downloads()
    {
        $data = [
            'title_bar' => 'Download Game'
        ];

        return view('pages/downloads', $data);
    }

    public function save_suggested()
    {
        $separator = '-';
        $lowercase = TRUE;
        $game_title = "";
        $record_added = Time::now('Asia/Jakarta', 'en_US');
        $record_updated = Time::now('Asia/Jakarta', 'en_US');
        $slugs = url_title($game_title, $separator, $lowercase);

        $saveData = [];
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
