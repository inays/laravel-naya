<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        // Menampilkan view profile.blade.php
        return view('profile');
    }
}
