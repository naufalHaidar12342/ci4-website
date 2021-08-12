<?php

namespace App\Controllers;

class Gta_V extends BaseController
{
    public function details($slugs)
    {
        $data = [
            'title_bar' => 'Detail Game',
            'videogame' => $this->daftar_game->ambilGame($slugs),
        ];


        return view('pages/readmore-game', $data);
    }

    public function walkthrough()
    {
        $data = [
            'title_bar' => 'Game Walkthrough'
        ];

        return view('pages/walkthrough', $data);
    }
}
