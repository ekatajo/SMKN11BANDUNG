<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    use HasFactory;

    protected $table = 'mapel';
    protected $primaryKey = 'kode';
    protected $fillable = ['nama', 'kode', 'kelas'];
    // Untuk memberitahu bahwa PK merupakan string bukan int
    protected $casts = [
        'kode' => 'string',
    ];

    public function kelas()
    {
        return $this->hasManyThrough(Kelas::class, Mengajar::class, 'kode_mapel', 'kode', 'kode_mapel', 'kode_kelas');
    }
    public function guru()
    {
        return $this->hasMany(Guru::class, 'kode');
    }
    public function komponen()
    {
        return $this->hasMany(Komponen::class, 'kode_mapel');
    }
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id');
    }
    public function logN()
    {
        return $this->hasMany(LogNilai::class, 'id');
    }
    public function logK()
    {
        return $this->hasMany(LogNilai::class, 'id');
    }
    // Cari relathionship Mapel ke Nilai yang melalui tabel komponen dan  ID Komponen atau ID Mapel yang diwakili ID Kompoen di tabel nilai
    // Kode Mapel dan ID Kelas dibutuhkan di tabel Nilai?
}
