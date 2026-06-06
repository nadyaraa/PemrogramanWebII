<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/buku');
        }
        return view('auth/login');   
    }

    public function attemptlogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if (empty($username) || empty($password)) {
            return redirect()->to('/login')->with('error', 'Silahkan Login Terlebih Dahulu.');
        }

        $model = new \App\Models\UserModel();
        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'username' => $user['username'],
                'isLoggedIn' => true,
            ]);
            return redirect()->to('/buku');
        }

        return redirect()->back()->with('error', 'Username atau Password Salah.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}