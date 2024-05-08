<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert([
            'nama'=>"Mardian Suparman",
            'jenis_kelamin'=>0,
            'umur'=>17,
            'alamat'=>"kp. sekeloa"
        ]);
        Siswa::insert([
            'nama'=>"Udin",
            'jenis_kelamin'=>0,
            'umur'=>17,
            'alamat'=>"kp. sekeloa"
        ]);
        Siswa::insert([
            'nama'=>"Yoto ",
            'jenis_kelamin'=>0,
            'umur'=>17,
            'alamat'=>"kp. sekeloa"
        ]);
        Siswa::insert([
            'nama'=>"Jajang",
            'jenis_kelamin'=>0,
            'umur'=>17,
            'alamat'=>"kp. sekeloa"
        ]);
        Siswa::insert([
            'nama'=>"ujang",
            'jenis_kelamin'=>0,
            'umur'=>17,
            'alamat'=>"kp. sekeloa"
        ]);
        Siswa::insert([
            'nama'=>"Arya",
            'jenis_kelamin'=>0,
            'umur'=>17,
            'alamat'=>"kp. sekeloa"
        ]);
        Siswa::insert([
            'nama'=>"Dika",
            'jenis_kelamin'=>0,
            'umur'=>17,
            'alamat'=>"kp. sekeloa"
        ]);
        Siswa::insert([
            'nama'=>"salwa",
            'jenis_kelamin'=>1,
            'umur'=>17,
            'alamat'=>"kp. sekeloa"
        ]);
        Siswa::insert([
            'nama'=>"Aulia",
            'jenis_kelamin'=>1,
            'umur'=>17,
            'alamat'=>"kp. sekeloa"
        ]);
        Siswa::insert([
            'nama'=>"Delia",
            'jenis_kelamin'=>1,
            'umur'=>17,
            'alamat'=>"kp. sekeloa"
        ]);
    }
}
