<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ["nama", "prodi_id", "npm", "tanggal_lahir", "tempat_lahir", "alamat"];

    public function prodi(){
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }
}
