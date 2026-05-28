<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    // public function index(string $username, int $nim)
    // {
    //     $pesan = "Hello this was sent from controller";

    //     $username = ucfirst($username); //mengkapitalkan huruf pertama

    //     return view('dashboard', compact('pesan', 'username', 'nim'));
    // }

    // ================= TAMBAHKAN FUNGSI BARU INI =================
    public function proses(Request $request)
    {
        $pesan = "Data berhasil dikirim dari Form Input!";

        // Kita tangkap inputan form berdasarkan atribut 'name' tadi
        $username = ucfirst($request->input('nama_input'));
        $nim = $request->input('nim_input');

        // Lempar balik hasilnya ke view 'dashboard' yang sama
        return view('dashboard', compact('pesan', 'username', 'nim'));
    }
}
