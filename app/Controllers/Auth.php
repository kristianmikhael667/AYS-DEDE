<?php

namespace App\Controllers;

use App\Helpers\JwtHelper;
use App\Models\UserModel;
use Config\Services;

class Auth extends BaseController
{
    // Pages Login
    public function page_login()
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Login'])
        ];
        return view('page-auth/pages-login', $data);
    }

    // BE Login
    public function processLogin()
    {
        $data = array();
        $request = Services::request();
        $session = Services::session();

        $username = $request->getPost('username');
        $password = $request->getPost('password');

        // Lakukan validasi dan otentikasi pengguna
        $model = new UserModel();
        $user = $model->authentication($username, $password);

        if ($user) {
            $token = JwtHelper::generateToken($user);
            $data["accessToken"] = $token;
            $data["fullname"] = $user['fullname'];
            $data["email"] = $user['email'];
            $data["username"] = $user['username'];
            $data["uuid"] = $user['uuid'];
            $session->set($data);
            return redirect()->to(base_url('/'));
        } else {
            // Jika otentikasi gagal, tampilkan pesan error dan redirect kembali ke halaman login
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
}
