<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Mitoloji extends BaseController
{
    public function index()
    {
        return view('mitoloji');  // Mitoloji sayfasını render eder
    }
}
