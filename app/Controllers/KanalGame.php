<?php

namespace App\Controllers;

use App\Models\KirimanPengunjungModel;
use CodeIgniter\I18n\Time;

class KanalGame extends BaseController
{
    protected $daftar_game;
    protected $genre_game;
    protected $savePost;
    public function __construct()
    {
        $this->savePost = new KirimanPengunjungModel();
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

    public function save()
    {
        if (!$this->validate([
            'pengunjung' => 'required',
            'komentar_saran' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/KanalGame/suggest')->withInput()->with('validation', $validation);
        }

        $saveData = [
            'nama_pengunjung' => $this->request->getVar('pengunjung'),
            'komentar_kiriman' => $this->request->getVar('komentar-saran'),

        ];
        // menyimpan data ke dalam tabel
        $this->savePost->save($saveData);

        //flash message (pesan sekilas)
        session()->setFlashData('success', 'Komentar kamu berhasil dikirim!');

        return redirect()->to('/KanalGame/suggest');
    }

    public function suggest()
    {
        session();
        $data = [
            'title_bar' => 'Suggest A Game!',
            'validation' => \Config\Services::validation()
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
