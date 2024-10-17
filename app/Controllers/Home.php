<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        echo "Halaman Home"; // Tambahkan ini untuk memastikan metode ini dipanggil
        return view('pages/home');
    }
    
    public function about()
    {
        echo "Halaman About"; // Tambahkan ini untuk memastikan metode ini dipanggil
        return view('pages/about');
    }
    
}
