<?php

namespace App\Controllers;

class Registrasi extends BaseController
{
    public function newAccount()
    {
        $validation = \Config\Services::validation();

        session()->setFlashData('errors', '');
        session()->setFlashData('success', '');

        if ($this->request->getPost()) {

            session()->setFlashdata('inputs', $this->request->getPost());

            $dataAccount = [
                'username' => strip_tags($this->request->getPost('username')),
                'password' => strip_tags($this->request->getPost('password')),
                'password2'  => strip_tags($this->request->getPost('password2')),
                'email'    => strip_tags($this->request->getPost('email'))
            ];

            if ($validation->run($dataAccount, 'register') == FALSE) {

                session()->setFlashdata('errors', $validation->getErrors());
            } else {

                session()->setFlashdata('success', 'Registration successfully.');
            }
        }

        echo view('framework/html_head');
        echo view('registrasi_view');
        echo view('framework/footer');
    }
}
