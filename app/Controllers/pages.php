<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class pages extends Controller
{
    public function profile()
    {
        return view('profile');
    }
}