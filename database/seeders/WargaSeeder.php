<?php

namespace Database\Seeders;

use App\Models\Warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        warga::insert ([
            'nama'=>'Mardian Suparman',
            'jenis_kelamin'=>0,
            'alamat'=>'kopo',
        ]);

        warga::insert ([
            'nama'=>'Suparman',
            'jenis_kelamin'=>0,
            'alamat'=>'kopo',
        ]);

        warga::insert ([
            'nama'=>'Yuli',
            'jenis_kelamin'=>1,
            'alamat'=>'kopo',
        ]);

        warga::insert ([
            'nama'=>'Aulia',
            'jenis_kelamin'=>1,
            'alamat'=>'kopo',
        ]);

        warga::insert ([
            'nama'=>'Ananda',
            'jenis_kelamin'=>1,
            'alamat'=>'kopo',
        ]);
    }
}
