<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
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
}
