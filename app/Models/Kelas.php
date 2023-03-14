<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['kode', 'kelas', 'jurusan', 'rombel'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kode_kelas');
    }
    public function walikelas()
    {
        return $this->hasOne(Walikelas::class, 'kode_kelas');
    }
    public function komponen()
    {
        return $this->hasMany(Komponen::class, 'kode_kelas');
    }
}
