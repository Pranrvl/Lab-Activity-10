<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
    // Nomor 4: Constructor Controller
    public function __construct() 
    {

    }

    public function index()
    {
        $model = new MahasiswaModel();
        $data['mhs'] = $model->findAll();
        $data['title'] = "Daftar Semua Mahasiswa";
        $data['subtitle'] = "Informatika 2023";
        
        echo view('framework/html_head');
        echo view('test', $data);
        echo view('framework/footer');
    }

    // Nomor 2: Method salam()
    public function salam() 
    {
        echo '<h1>Halo, ini dicetak dari method salam()</h1>';
    }

    // Nomor 3: Mengirimkan parameters untuk method prodi()
    public function prodi($nama = '', $prodi = '') 
    {
        echo '<h1>Nama: ' . $nama . '</h1>';
        echo '<h1>Program Studi: ' . $prodi . '</h1>';
    }
}