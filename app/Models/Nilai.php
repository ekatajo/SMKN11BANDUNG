<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{   
    // Tabel Transaksi
    use HasFactory;

    protected $table = 'nilai';
    protected $fillable = ['nis', 'id_komponen', 'nilai', 'predikat', 'keterangan', 'kode_mapel', 'nip'];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'kode_mapel');
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'nip');
    }
    public function komponen()
    {
        return $this->belongsTo(Komponen::class, 'id');
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis');
    }
}
