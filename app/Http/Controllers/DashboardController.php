<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan; // Pastikan Anda menggunakan nama model yang benar

class DashboardController extends Controller
{
    public function dashboard()
{
    $postingan = Postingan::get();
    // dd($postingan); // Tambahkan ini untuk debugging
    return view('dashboard', compact('postingan'));
}




}
