<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        return view('pages/home'); // Pastikan ada file view di app/Views/pages/home.php
    }

    public function about()
    {
        return view('pages/about'); // Pastikan ada file view di app/Views/pages/about.php
    }
}
