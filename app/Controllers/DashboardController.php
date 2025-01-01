<?php

namespace App\Controllers;

use App\Libraries\MongoDBHandler;
use CodeIgniter\Controller;

class DashboardController extends Controller
{
    protected $mongoHandler;

    public function __construct()
    {
        // MongoDBHandler'ı başlatıyoruz
        $this->mongoHandler = new MongoDBHandler();
    }

    public function index()
{
    helper('text'); // Text helper'ı yüklüyoruz
    $message = '';

    if ($this->request->getMethod() === 'POST') {
        // Form verilerini alıyoruz
        $description = $this->request->getPost('description');

        // Açıklama kelime sayısını kontrol ediyoruz
        $wordCount = str_word_count($description);

        if ($wordCount > 100) {
            $message = 'Hata: Açıklama 100 kelimeyi geçemez.';
        } else {
            // Açıklamayı word_limiter ile sınırlandırıyoruz (100 kelime zaten kontrol edildi)
            $limitedDescription = word_limiter($description, 100);

            $data = [
                'ad'        => $this->request->getPost('name'),
                'aciklama'  => $limitedDescription, // Sınırlandırılmış açıklama
                'resim'     => $this->request->getPost('image')
            ];

            try {
                // MongoDB'ye veri ekliyoruz
                $this->mongoHandler->addData($data);
                $message = 'Veri başarıyla eklendi!';
            } catch (\Exception $e) {
                $message = 'Hata oluştu: ' . $e->getMessage();
            }
        }
    }

    // View'e mesajı gönderiyoruz
    return view('dashboard', ['message' => $message]);
}

}    

