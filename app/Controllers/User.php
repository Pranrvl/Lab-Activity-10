<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserLogModel;

class User extends BaseController
{
    public function index()
    {
        echo view('framework/html_head');
        echo view('login_view');
        echo view('framework/footer');
    }

    public function doLogin()
    {
        $session = session();

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel    = new UserModel();
        $userLogModel = new UserLogModel();

        $data = [
            'email'     => $email,
            'timestamp' => date('Y-m-d H:i:s')
        ];

        if ($userModel->where('password', md5($password))->where('active', 1)->find($email)) {

            // Login berhasil – status 1
            $data['status'] = 1;
            $userLogModel->insert($data);

            $userInfo = $userModel->select('nama')->where('email', $email)->first();

            $ndata = [
                'username'  => $userInfo['nama'],
                'logged_in' => true
            ];

            $session->set($ndata);

            return redirect()->to(base_url('dashboard'));
        } else {

            // Email tidak terdaftar – status 2
            if (!$userModel->find($email)) {
                $data['status'] = 2;
                $session->setFlashdata('errors', 'Email tidak terdaftar');

            // Password salah – status 3
            } elseif ($userModel->where('password !=', md5($password))->find($email)) {
                $data['status'] = 3;
                $session->setFlashdata('errors', 'Password salah');

            // Akun dinonaktifkan – status 4
            } elseif ($userModel->where('active', 0)->find($email)) {
                $data['status'] = 4;
                $session->setFlashdata('errors', 'Akun kamu dinonaktifkan (status disabled)');

            } else {
                $data['status'] = 5;
                $session->setFlashdata('errors', 'Login gagal, coba lagi');
            }

            $userLogModel->insert($data);
            return redirect()->to(base_url('User'));
        }
    }

    public function dashboard()
    {
        echo view('framework/html_head');
        echo view('dashboard_view');
        echo view('framework/footer');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('User'));
    }
}
