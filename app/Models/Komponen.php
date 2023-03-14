<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komponen extends Model
{
    use HasFactory;

    protected $table = 'komponen';
    protected $fillable = ['nama', 'kode_mapel', 'nip'];

    public function guru(){
        return $this->belongsTo(Guru::class, 'nip');
    }
    public function mapel(){
        return $this->belongsTo(Mapel::class, 'kode_mapel');
    }
     public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_komponen');
    }
    public function logN(){
        return $this->hasMany(LogNilai::class, 'id');
    }
}
