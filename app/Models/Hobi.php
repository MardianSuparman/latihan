<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    use HasFactory;

    public $fillable=['hobi'];
    public $timestamp= true;

    // relasi many to many
    public function mahasiswa(){

        // model hobi ber relasi many to many dengan model mahasiswa melaliu table privat 'mahasiswa_hobi'
        // yang di wakili oleh 2fk id_hobi & id_mahasiswa
        return $this->belongsToMany(mahasiswa::class, 'mahasiswa_hobi', 'id_hobi', 'id_mahasiswa');
    }

}
