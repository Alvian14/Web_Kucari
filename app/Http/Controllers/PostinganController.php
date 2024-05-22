<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Postingan;
use App\Models\User;

class PostinganController extends Controller
{
    public function kehilangan()
    {
        $postingans = Postingan::where('kategori', 'kehilangan')->get();
        return view('kehilangan', compact('postingans'));
    }

    public function menemukan()
    {
        $postingans = Postingan::where('kategori', 'Ditemukan')->get();
        return view('menemukan', compact('postingans'));
    }
    
    public function cari(Request $request)
    {
    $keyword = $request->input('search');
    $postingans = Postingan::where('kategori', 'kehilangan')
                            ->where('deskripsi', 'like', "%$keyword%")
                            ->get();
    
    return view('kehilangan', compact('postingans', 'keyword'));
    }
    
    public function nemu(Request $request)
    {
    $keyword = $request->input('search');
    $postingans = Postingan::where('kategori', 'menemukan')
                            ->where('deskripsi', 'like', "%$keyword%")
                            ->get();
    
    return view('menemukan', compact('postingans', 'keyword'));
    }
    
    public function hubungiViaWhatsApp(Request $request)
    {
        // Ambil nomor WhatsApp dari database (misalnya, nomor pertama dalam tabel user)
        $user = User::first(); // Anda bisa menyesuaikan cara pengambilan data sesuai dengan kebutuhan Anda
        
        // Periksa apakah nomor WhatsApp tersedia
        if ($user && $user->no_wa) {
            // Tambahkan kode negara Indonesia (+62) ke nomor WhatsApp jika belum ada
            $nomorWhatsApp = $user->no_wa;
            if (!Str::startsWith($nomorWhatsApp, '+62')) {
                $nomorWhatsApp = '+62' . ltrim($nomorWhatsApp, '0');
            }
            
            // Buat tautan untuk membuka aplikasi WhatsApp dan mulai percakapan dengan nomor WhatsApp menggunakan wa.me/
            $waLink = 'https://wa.me/' . str_replace(['+', ' '], '', $nomorWhatsApp);
            
            return redirect()->away($waLink);
        } else {
            // Jika nomor WhatsApp tidak tersedia, tampilkan pesan kesalahan atau arahkan pengguna kembali ke halaman sebelumnya
            return back()->with('error', 'Nomor WhatsApp tidak tersedia.');
        }
    }

}
