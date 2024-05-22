<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan; 
use Carbon\Carbon;
class SidebarController extends Controller
{
    public function laporan(){
        $postingan = Postingan::get();
        return view('laporan', compact('postingan'));
    }

    public function proses_upload(Request $request)
    {
        try {
            // echo json_encode($request->all());
            // echo '<br>';
            $request->validate([
                'kategori' => 'required',
                'deskripsi' => 'required',
                'alamat' => 'required',
                'lokasi' => 'required',
                'tanggal_postingan' => 'required',
                'jam_postingan' => 'required',
                'file' => 'mimes:jpeg,png,jpg|max:2048', // Validasi file gambar
            ]);
            // echo 'ws kenek';
            // exit();
            // Simpan file gambar
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                if(!($file->isValid() && in_array($file->extension(), ['jpeg', 'png', 'jpg']))){
                    return response()->json(['status'=>'error','message'=>'Format Foto tidak valid. Gunakan format jpeg, png, jpg'], 400);
                }
                $destinationPath = public_path('mobile/uploads/');
                $filename = $file->hashName();
                $file->move($destinationPath, $filename);
                // Simpan data ke dalam tabel
                $postingan = new Postingan();
                $postingan->kategori = $request->kategori;
                $postingan->deskripsi = $request->deskripsi;
                $postingan->alamat = $request->alamat;
                $postingan->lokasi = $request->lokasi;
                $postingan->tanggal_postingan = $request->tanggal_postingan;
                $postingan->jam_postingan = $request->jam_postingan;
                $postingan->foto_postingan = $filename; // Simpan nama file gambar
                // Simpan entri ke dalam tabel
                $postingan->save();
    
                // Beri respons JSON bahwa proses berhasil
                return redirect('/laporan')->with('alert',['status'=>'success', 'message'=>'berhasil tambah postingan']);
            } else {
                return redirect('/laporan')->with('alert',['status'=>'error', 'message'=>'File tidak ditemukan']);
                // Jika tidak ada file yang diunggah, kembalikan respons dengan kesalahan
                // return response()->json(['success' => false, 'message' => 'File tidak ditemukan.']);
            }
        } catch (\Exception $e) {
            echo json_encode($e);
            // Tangani kesalahan saat menyimpan ke database
            return redirect('/laporan')->with('alert',['status'=>'error', 'message'=>'Gagal menyimpan ke database']);
        }
    }
    public function hapus(Request $request){
        if(!Postingan::where('id_postingan',$request->input('id_postingan'))->delete()){
            return response()->json(['status'=>'error', 'message'=>'Gagal menghapus ke database'], 400);
        }
        return response()->json(['status'=>'success', 'message'=>'Berhasil menghapus ke database']);
    }
    

}
