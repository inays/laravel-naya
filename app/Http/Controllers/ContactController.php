<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string|max:500',
        ]);

        // Di sini bisa tambahkan logika kirim email atau simpan pesan ke database
        return back()->with('success', 'Pesan kamu berhasil dikirim! 😊');
    }
}
