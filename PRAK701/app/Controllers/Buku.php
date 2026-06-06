<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected BukuModel $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $data['daftar_buku'] = $this->bukuModel->findAll();
        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $rules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|numeric|greater_than[1800]|less_than[2024]'
        ];

        $messages = [
            'judul' => [
                'required' => 'Judul Buku Harus Diisi.'
            ],
            'tahun_terbit' => [
                'required' => 'Tahun Terbit Harus Diisi.',
                'numeric' => 'Tahun Harus Berupa Angka.',
                'greater_than' => 'Tahun Harus Lebih Dari 1800.',
                'less_than' => 'Tahun Harus Kurang Dari 2024.'
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput();
        }

        $this->bukuModel->save([
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku')->with('success', 'Data Berhasil Ditambahkan.');
    }

    public function edit(int $id)
    {
        $data_buku = $this->bukuModel->find($id);
        if (!$data_buku) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak Ditemukan');
        }
        
        $data = [
            'buku' => $data_buku
        ];

        return view('buku/edit', $data);
    }

    public function update(int $id)
    {
        $rules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|numeric|greater_than[1800]|less_than[2024]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $this->bukuModel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku')->with('success', 'Data Berhasil Diperbarui.');
    }

    public function delete(int $id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku')->with('success', 'Data Berhasil Dihapus.');
    }
}