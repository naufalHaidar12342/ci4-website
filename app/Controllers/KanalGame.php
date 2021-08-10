<?php

namespace App\Controllers;

class KanalGame extends BaseController
{

    public function index()
    {
        $data = [
            'title_bar' => 'Home'
        ];

        return view('pages/home', $data);
    }

    public function about_game()
    {
        $data = [
            'title_bar' => 'Game Info'
        ];

        return view('pages/about-game', $data);
    }
    public function about_us()
    {
        $data = [
            'title_bar' => 'Tentang Kami'
        ];

        return view('pages/about-us', $data);
    }
}
