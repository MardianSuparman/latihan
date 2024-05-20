<?php

use App\Models\Siswa;
use App\Models\Mahasiswa;
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
    return view('welcome');
});

Route::get('siswa', function () {
    return Siswa::all();
});

Route::get('daftarsiswa', function () {
    return view('daftar-siswa');
});

Route::get('daftarwarga', function () {
    return view('daftar-warga');
});

Route::get('relasi-1', function(){
    // temukan Mahasiswa dengan nim 1015015072
    $mahasiswa=App\Models\Mahasiswa::where('nim','=','1015015072')->first();

    // tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function(){
    // temukan Mahasiswa dengan nim 1015015072
    $mahasiswa=App\Models\Mahasiswa::where('nim','=','1015015072')->first();

    // tampilkan nama wali mahasiswa
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function(){
    $dosen=App\Models\Dosen::where('nama','=','yulianto')->first();

    // menampilkan semua data
    foreach ($dosen->mahasiswa as $temp){
        echo '<li>Nama : <string>'.$temp->nama.'</string> - '.$temp->nim.'</li>';
    }
});

Route::get('relasi-4', function(){
    $novay=App\Models\Mahasiswa::where('nama','=','noviyanto rachmadi')->first();

    // menampilkan semua data
    foreach ($novay->hobi as $data){
        echo '<li>'.$data->hobi.'</li>';
    }
});

Route::get('relasi-5', function(){
    $mandi_hujan=App\Models\Hobi::where('hobi','=','Mandi Hujan')->first();

    // menampilkan semua data dengan hobi hujanan
    foreach ($mandi_hujan->mahasiswa as $data){
        echo '<li>Nama : <string>'.$data->nama.'</string> - '.$data->nim.'</li>';
    }
});

Route::get('eloquent', function () {
    //  Ambil semua data mahasiswa (lengkap dengan semua relasi yang ada)
    $mahasiswa = App\Models\Mahasiswa::with('wali', 'dosen', 'hobi')->get();

    //  Kirim variabel ke View
    return view('eloquent', compact('mahasiswa'));
});
