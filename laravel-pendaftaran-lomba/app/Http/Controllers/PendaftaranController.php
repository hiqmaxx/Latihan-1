<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function showForm()
    {
        return view('daftar');
    }
    
    public function prosesForm(Request $request)
    {
        // Validasi dan simpan file
        $path = $request->file('poster')->store('posters', 'public');

        // Mengambil data dari inputan form
        $data = $request->only(['nama', 'kelas', 'judul']);
        $data['photo_path'] = $path;

        // Kirim data ke view
        return view('konfirmasi', compact('data'));
    }
}
