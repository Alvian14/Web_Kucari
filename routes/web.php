<?php
use App\Http\Controllers\TopBarController; //kehilangan//
use App\Http\Controllers\TopBarController2; //menemukan//
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostinganController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

Route::get('user', function () {
    return view('index');
})->name('user');

Route::post('user',[AuthController::class, 'login']);



Route::get('kehilangan', [TopBarController::class, 'kehilangan'])->name('kehilangan');
Route::get('menemukan', [TopBarController2::class, 'menemukan'])->name('menemukan');
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('laporan', [SidebarController::class, 'laporan'])->name('laporan');
Route::get('/kehilangan', [PostinganController::class, 'kehilangan'])->name('kehilangan');
Route::get('/menemukan', [PostinganController::class, 'menemukan'])->name('menemukan');
Route::get('/hasil-pencarian', [PostinganController::class, 'cari'])->name('cari');
Route::get('/hasil-pencarian2', [PostinganController::class, 'nemu'])->name('nemu');
Route::get('/hubungi-via-whatsapp', [PostinganController::class, 'hubungiViaWhatsApp'])->name('hubungi.whatsapp');

Route::post('/upload/proses', [SidebarController::class, 'proses_upload'])->name('upload.proses');
Route::post('/upload/hapus', [SidebarController::class, 'hapus']);
// Route::get('/', function () {
//     return view('kehilangan');
// })
// Route::get('register', function () {
//     return view('register');
// })->name('register');

// Route::get('/', function () {
//     return view('pages.welcome');
// })->name('welcome');

// Route::resource('/book', BookController::class);

