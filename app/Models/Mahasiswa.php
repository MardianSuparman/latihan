<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    public $fillable= ['nama', 'nim', 'id_dosen'];
    public $timestamps= true;

    public function Wali(){
        return $this->hasOne(wali::class, 'id_mahasiswa');
    }

    // one to many
    public function dosen(){
        // model mahasiswa dpt dimiliki (relasi one to many)
        // oleh model dosen dengan melalui fk 'id_dosen'
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }

    // many to many
    public function hobi(){
         // model hobi ber relasi many to many dengan model mahasiswa melaliu table privat 'mahasiswa_hobi'
        // yang di wakili oleh 2fk id_mahasiswa & id_hobi
        return $this->belongsToMany(hobi::class,'mahasiswa_hobi', 'id_mahasiswa', 'id_hobi');
    }
}
