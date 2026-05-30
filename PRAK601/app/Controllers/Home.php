<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Home extends BaseController
{
    protected MahasiswaModel $mhsModel;

    public function __construct() {
        $this->mhsModel = new MahasiswaModel();
    }

    public function index() {
        $data = [
            'title' => 'Beranda',
            'mhs' => $this->mhsModel->getData()
        ];
        return view('beranda', $data);
    }

    public function profil() {
        helper('url');
        $data = [
            'title' => 'Profil Praktikan',
            'mhs'   => $this->mhsModel->getData()
        ];
        return view('profil', $data);
    }
}