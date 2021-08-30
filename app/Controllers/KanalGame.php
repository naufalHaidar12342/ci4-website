<?php

namespace App\Controllers;

use App\Models\KirimanPengunjungModel;
use App\Models\PostsModel;
use App\Models\TeknologiModel;


class KanalGame extends BaseController
{
    protected $daftar_game;
    protected $genre_game;
    protected $saveComment;
    protected $sitePosts;
    protected $siteTechs;
    public function __construct()
    {
        $this->saveComment = new KirimanPengunjungModel();
        $this->sitePosts = new PostsModel();
        $this->siteTechs = new TeknologiModel();
    }

    // method yang pertama kali dipanggil oleh Routes
    public function index()
    {
        // caching halaman
        $this->cachePage(120);

        // mengirimkan title bar
        //dan game yang ditampilkan di view
        $data = [
            'title_bar' => 'Home',
            'show_game' => $this->sitePosts->findAll(),
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
        // caching halaman
        $this->cachePage(120);

        // mengirimkan title bar
        //dan game yang ditampilkan di view
        $data = [
            'title_bar' => 'Download Game',
            'show_game' => $this->sitePosts->findAll(),
        ];

        return view('pages/downloads', $data);
    }

    public function save()
    {
        // validasi input user. server side
        if (!$this->validate([
            'pengunjung' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'min_length' => 'Panjang nama minimal 4 karakter',
                ]
            ],
            'komentar_saran' => [
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => 'Komentar harus diisi',
                    'min_length' => 'Panjang komentar minimal 10 karakter',
                ]
            ]
        ])) {
            // mengirimkan pesan validasi ke view
            //akan diakses melalui array key '$validation'
            $validation = \Config\Services::validation();
            return redirect()->to('/kanal-game/suggest')->withInput()->with('validation', $validation);
        }
        // esacping with htmlspecialchars
        //untuk menghindari cross site scripting
        $escPengunjung = htmlspecialchars($this->request->getVar('pengunjung'), ENT_QUOTES, 'UTF-8');
        $escKomentar = htmlspecialchars($this->request->getVar('komentar_saran'), ENT_QUOTES, 'UTF-8');

        // array yang membungkus data yang akan disimpan
        $saveData = [
            'nama_pengunjung' => $escPengunjung,
            'komentar_kiriman' => $escKomentar,

        ];
        // menyimpan data ke dalam tabel
        $this->saveComment->save($saveData);

        //flash message (pesan sekilas)
        session()->setFlashData('success', 'Komentar kamu berhasil dikirim!');

        return redirect()->to('/kanal-game/suggest');
    }

    // halaman suggest
    public function suggest()
    {
        // caching halaman
        $this->cachePage(120);

        // membuka session
        session();

        // mengirimkan title bar, pesan validasi,
        //serta mengatur pagination untuk komentar
        //dan array key untuk memanggil pagination
        $data = [
            'title_bar' => 'Suggest A Game!',
            'validation' => \Config\Services::validation(),
            // 'comments' => $this->saveComment->findAll(),
            'comments' => $this->saveComment->orderBy('id', 'DESC')->paginate(3, 'comments'),
            'pager' => $this->saveComment->pager,
        ];
        return view('pages/suggest-game', $data);
    }
    public function about_us()
    {
        // caching halaman website
        $this->cachePage(120);

        // mengirimkan title bar
        // serta teknologi yang digunakan
        $data = [
            'title_bar' => 'Tentang Kami',
            'techs' => $this->siteTechs->findAll(),
        ];

        return view('pages/about-us', $data);
    }
}
