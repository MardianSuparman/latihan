<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// import models
use DB;
use App\Models\Mahasiswa;
use App\Models\Wali;
use App\Models\Dosen;
use App\Models\Hobi;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        // sample data dosen
        $dosen= Dosen::create([
            'nama' => 'yulianto',
            'nipd' => '123456789'
        ]);

        $this->command->info('Dosen Telah Diisi');

        // sample data mahasiswa
        $novay=Mahasiswa::create(array(
            'nim'=>'1015015072',
            'nama'=>'Noviyanto Rachmadi',
            'id_dosen' => $dosen->id,
        ));

        //mahasiswa kedua
        $dije = Mahasiswa::create(array(
            'nim' => '1015015088',
            'nama' => 'Djaffar',
            'id_dosen' => $dosen->id,

        ));

        // mahasiswa ketiga
        $ayu = Mahasiswa::create(array(
            'nim' => '1015015078',
            'nama' => 'Puji Rahayu',
            'id_dosen' => $dosen->id,

        ));

        $this->command->info('Mahasiswa Telah Diisi');

        // wali novay
        Wali::create(array(
            'nama' => 'Achmad S',
            'id_mahasiswa' => $novay->id,
        ));

        // wali DIJE
        Wali::create(array(
            'nama' => 'Entahlah',
            'id_mahasiswa' => $dije->id,
        ));

        // wali AYU
        Wali::create(array(
            'nama' => 'Arianto',
            'id_mahasiswa' => $ayu->id,
        ));

        $this->command->info('Data mahasiswa dan wali telah diisi!');

        // smaple hobi
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        $mandi_hujan = Hobi::create(['hobi'=>'Mandi Hujan' ]);
        $baca_buku = Hobi::create(['hobi'=>'Baca Buku' ]);

        // melampirkan hobi ke mahasiswa
        $novay->hobi()->attach($mandi_hujan->id);
        $novay->hobi()->attach($baca_buku->id);
        $dije->hobi()->attach($mandi_hujan->id);
        $ayu->hobi()->attach($baca_buku->id);

        $this->command->info('hobi Telah Diisi');
    }


}
