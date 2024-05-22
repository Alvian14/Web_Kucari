<?php

namespace App\Http\Controllers\Mobile;
use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class OtpController extends Controller
{
    public function sendOtp(Request $request)
    {
        $email = $request->input('email');
    
        // Cek apakah email tersebut ada di database
        $user = DB::table('user')->where('email', $email)->first();
    
        if (!$user) {
            // Jika tidak ditemukan user dengan email tersebut, kirim respons error
            return response()->json(['status' => 'error', 'message' => 'Email tidak terdaftar di sistem kami.'], 404);
        }
    
        // Generate OTP
        $otp = strval(mt_rand(1000, 9999));
    
        $data = [
            "otp" => $otp
        ];
    
        // Kirim OTP melalui email
        try {
            Mail::to($email)->send(new OtpMail($data));
            return response()->json(['status' => 'success', 'message' => 'OTP telah dikirim', 'otp' => $otp], 200);
        } catch (\Exception $e) {
            // Jika terjadi kesalahan saat mengirim email
            return response()->json(['status' => 'error', 'message' => 'Gagal mengirim email.'], 500);
        }
    }
}
