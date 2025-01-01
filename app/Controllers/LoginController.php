<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        // Navbar ve footer'ı devre dışı bırakmak için $noNavbar ve $noFooter ekliyoruz
        $data = [
            'noNavbar' => true,
            'noFooter' => true
        ];
        return view('login', $data);
    }

    public function authenticate()
    {
        // Sabit kullanıcı adı ve şifre
        $valid_username = 'yonetici';
        $valid_password = '$2y$10$mgu1..ejVw0DjlHJ3Ykw3.OZqinDfBXgiMZ1qieJABusuHdpTz4pO';

        // Kullanıcıdan gelen veriler
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Şifreyi hashle, ve doğrula (önceden hashlenmiş)
        if ($username == $valid_username && password_verify($password, $valid_password)) {
            session()->set('isLoggedIn', true); // Kullanıcıyı giriş yaptı olarak işaretle
            return redirect()->to('/dashboard'); // Dashboard'a yönlendir
        } else {
            session()->setFlashdata('error', 'Geçersiz kullanıcı adı veya şifre');
            return redirect()->to('/login'); // Hata varsa login sayfasına geri dön
        }
    }
}
